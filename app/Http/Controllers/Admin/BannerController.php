<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    public function all_banner(){
        $banner = banner::orderBy('id', 'DESC')->get();
        return view('admin.banner.all_banner', compact('banner'));
    }

    public function add_banner(){
        return view('admin.banner.add_banner');
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'string|required',
            'short_description' => 'string|required',
        ]);

        $data = $request->all();
        $status = banner::create($data);
        if($status){
            return redirect()->route('admin.all_banner')->with('success', 'Successfully Added Banner');
        }
        else{
            return back()->with('error', 'Something Went Wrong');
        }
    }

    public function bannerStatus(Request $request){
        if($request->mode=='true'){
            DB::table('banners')->where('id', $request->id)->update(['status' => 'active']);
        }
        else{
            DB::table('banners')->where('id', $request->id)->update(['status' => 'inactive']);
        }
        return response()->json(['msg' => 'Successfully Updated Status', 'status'=>true]);
    }

    public function edit($id){
        $banner = banner::find($id);
        return view('admin.banner.edit_banner', compact('banner'));
    }

    public function change(Request $request, $id){
        $banner = banner::find($id);
        if($banner){
            $this->validate($request, [
                'title' => 'string|required',
                'short_description' => 'string|required',
            ]);
        }

        $data = $request->all();
        $status = $banner->fill($data)->save();
        if($status){
            return redirect()->route('admin.all_banner')->with('success', 'Successfully Updated Banner');
        }
        else{
            return back()->with('error', 'Something Went Wrong');
        }
    }
}
