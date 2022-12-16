@extends('admin.master')
@section('index')

<div class="row">
    <div class="col-lg-12">

        <div class="breadcrumb-main">
            <h4 class="text-capitalize breadcrumb-title">Form</h4>
            <div class="breadcrumb-action justify-content-center flex-wrap">
                <div class="action-btn">

                    <div class="form-group mb-0">
                        <div class="input-container icon-left position-relative">
                            <span class="input-icon icon-left">
                                <span data-feather="calendar"></span>
                            </span>
                            <input type="text" class="form-control form-control-default date-ranger" name="date-ranger" placeholder="Oct 30, 2019 - Nov 30, 2019">
                            <span class="input-icon icon-right">
                                <span data-feather="chevron-down"></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-lg-6">
        <div class="card card-default card-md mb-4">
            <div class="card-header">
                <h6>Add Banners</h6>
            </div>
            <div class="card-body">
                <div class="basic-form-wrapper">

                    <form action="{{route('admin.banner_store')}}" method="POST">
                        @csrf
                        <div class="form-basic">
                            <div class="form-group mb-25">
                                <label>Add Title</label>
                                <input class="form-control form-control-lg" type="text" name="title">
                            </div>
                            <div class="form-group mb-25">
                                <label>Add Subtitle</label>
                                <div class="form-group mb-25">
                                    <label>Subtitle</label>
                                    <input class="form-control form-control-lg" type="text" name="short_description">
                                </div>
                            </div>
                            <div class="form-group mb-25">
                                <label>Button Link</label>
                                <input class="form-control form-control-lg" type="text" name="button_link">
                            </div>


                            <div class="form-group mb-25">
                                <label>Status</label>
                                <select name="status">
                                    <option value="">Status</option>
                                    <option value="active" {{old('status')=='active' ? 'selected' : ''}}>Active</option>
                                    <option value="inactive" {{old('status')=='inactive' ? 'selected' : ''}}>Inactive</option>
                                </select>
                            </div>
                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-lg btn-primary btn-submit">Add</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- ends: .card -->

    </div>
    <!-- ends: .col-lg-6 -->
</div>

@endsection
