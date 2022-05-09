@extends('layouts.admin')

@section('title', 'Edit Category: '.$data->title)

<!--  wrapper -->
<div id="wrapper">
@section('content')

    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h1 class="page-header">Edit Category: {{$data->title}} </h1>
            </div>
            <!--End Page Header -->
        </div>



        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Category Elements</h4>
                            <form class="forms-sample" action="/admin/category/update/{{$data->id}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Title</label>
                                    <input type="text" class="form-control" name="title" value="{{$data->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Keywords</label>
                                    <input type="text" class="form-control" name="keywords" value="{{$data->keywords}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Description</label>
                                    <input type="text" class="form-control" name="description" value="{{$data->description}}">
                                </div>

                                <label>Image</label>

                                <br>
                                <div class="input-group col-xs-12">
                                    <input type="name" class="form-control file-upload-info" name="image" disabled="" placeholder="Upload Image">
                                    <span class="input-group-append">
                                         <br>
                                         <input type="file" name="img[]" class="file-upload-default"><br>
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                                </div>
<br>

                                <div class="form-group">
                                    <label for="exampleFormControlSelect3">Status</label>
                                    <select class="form-control form-control-sm" name="status">
                                        <option selected>{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary mr-2" type="submit"> Update Data</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 grid-margin stretch-card">


                </div>









    </div>
    <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

@endsection
