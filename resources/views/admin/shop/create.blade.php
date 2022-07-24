@extends('layouts.admin.app')
@section('title', 'Product')
@section('content')



    <div class="contents mt-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-Vertical card-default card-md mb-4">
                        <div class="card-header">
                            <h6 class="mb-3">Product Info</h6>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card-body py-md-30">
                            <form action="{{ url('admin/shop/store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name" class="color-dark">Name</label>
                                            <input type="text" class="form-control" name="name" required
                                                id="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="price" class="color-dark">Price</label>
                                            <input type="number" class="form-control" name="price" required
                                                id="price" placeholder="Price">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="category" class="color-dark">Category</label>
                                            <select name="category" id="category" class="form-control">
                                                <option value="" selected disabled>Select Category</option>
                                                @foreach ($category as $category)
                                                    <option value="{{ $category->id }}">{{ strtoupper($category->name) }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="sort_des" class="color-dark">Sort Description</label>
                                            <input type="text" class="form-control" name="sort_des" required
                                                id="sort_des" placeholder="Sort Description">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="img" class="color-dark">Picture</label>
                                            <input type="file" class="form-control" name="img" required
                                                id="img">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="layout-button mt-3">
                                        <button type="submit"
                                            class="btn btn-primary btn-default btn-squared px-30">save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- ends: .card -->

                </div>
            </div>
        </div>

    </div>

@endsection

@section('script')


@endsection
