@extends('layouts.admin.app')
@section('title', 'Product')
@section('content')



    <div class="contents mt-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mb-30">
                    <div class="card">
                        <div class="card-header color-dark fw-500">
                            Product List
                        </div>
                        <div class="card-body">

                            <div class="userDatatable global-shadow border-0 bg-white w-100">
                                <div class="table-responsive">
                                    <table class="table mb-0 dataTable table-borderless">
                                        <thead>
                                            <tr class="userDatatable-header">
                                                <th>
                                                    <span class="userDatatable-title">SL NO</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Product Name</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Product Price</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Product Category</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title">Image</span>
                                                </th>
                                                <th>
                                                    <span class="userDatatable-title float-right">action</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        @php
                                            $i = 1;
                                        @endphp
                                        <tbody>
                                            @foreach ($shop as $shop)
                                                <tr>
                                                    <td>
                                                        {{ $i++ }}
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $shop->name }}
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $shop->price }}
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="userDatatable-content">
                                                            {{ $shop->getCategory->name }}
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <div class="userDatatable-content">
                                                            <img height="70px" width="200px"
                                                                src="{{ asset('admin/img/shop/thumbsnil/' . $shop->img) }}"
                                                                alt="">
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                                            {{-- <li>
                                                            <a href="#" class="view">
                                                                <span data-feather="eye"></span></a>
                                                        </li> --}}
                                                            <li>
                                                                <a href="{{ url('admin/shop/edit/' . $shop->id) }}"
                                                                    class="edit">
                                                                    <span data-feather="edit"></span></a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ url('admin/shop/delete/' . $shop->id) }}"
                                                                    id="delete" class="remove">
                                                                    <span data-feather="trash-2"></span></a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
