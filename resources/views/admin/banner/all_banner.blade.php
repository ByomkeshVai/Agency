@extends('admin.master')
@section('index')
<div class="row">
    <div class="col-lg-12 mb-30">
        <div class="card mt-30">
            <div class="card-body">
                <div class="row learfix">
                    <div class="col-lg-12">
                        @include('admin.notifaction')
                    </div>
                </div>
                <div class="userDatatable adv-table-table global-shadow border-0 bg-white w-100 adv-table">
                    <div class="table-responsive">
                        <div class="adv-table-table__header">
                            <h4>All Banners</h4>

                            <div class="adv-table-table__button">
                                <div class="dropdown">
                                    <a class="btn btn-primary dropdown-toggle atbd-select" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Export
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">copy</a>
                                        <a class="dropdown-item" href="#">csv</a>
                                        <a class="dropdown-item" href="#">print</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="filter-form-container"></div>
                        <table class="table mb-0 table-borderless adv-table" data-sorting="true" data-filter-container="#filter-form-container" data-paging-current="1" data-paging-position="right" data-paging-size="10">
                            <thead>
                                <tr class="userDatatable-header">
                                    <th>
                                        <span class="userDatatable-title">SL.</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Title</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Subtitle</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Status</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Action</span>
                                    </th>

                                </tr>
                            </thead>
                            <tbody>


                               <tr>
                                @foreach ($banner as $item)
                                <td>
                                    <div class="userDatatable-content">{{$loop->iteration}}</div>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <div class="userDatatable-inline-title">
                                            <a href="#" class="text-dark fw-500">
                                                <h6>{{$banner->title}} </h6>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                 <td>
                                    <div class="d-flex">
                                        <div class="userDatatable-inline-title">
                                            <a href="#" class="text-dark fw-500">
                                                <h6>{{$banner->short_description}}</h6>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="userDatatable-content d-inline-block">
                                        <span class="bg-opacity-success  color-success rounded-pill userDatatable-content-status active">{{$banner->status}}</span>
                                    </div>
                                </td>
                                <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                        <li>
                                            <a href="#" class="view">
                                                <span data-feather="eye"></span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="edit">
                                                <span data-feather="edit"></span></a>
                                        </li>
                                        <li>
                                            <a href="#" class="remove">
                                                <span data-feather="trash-2"></span></a>
                                        </li>
                                    </ul>
                                </td>
                                @endforeach
                            </tr>



                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



@endsection
