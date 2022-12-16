<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function all_banner(){
        $banner = banner::orderBy('id', 'DESC')->first();
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
}
