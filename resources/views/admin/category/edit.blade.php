@extends('layouts.admin.app')
@section('title', 'Product Category')
@section('content')



<div class="contents mt-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-Vertical card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Edit Product Category </h6>
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
                        <form action="{{ url('admin/category/update/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="category" class="color-dark">Product Size</label>
                                    <input type="text" class="form-control" id="category" name="category" value="{{$category->name}}" placeholder="Product Category">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="layout-button mt-3">
                                    <button type="submit"
                                        class="btn btn-primary btn-default btn-squared px-30">Update</button>
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
