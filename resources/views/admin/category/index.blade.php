@extends('layouts.admin')

@section('title', 'Category List')

<!--  wrapper -->
<div id="wrapper">
@section('content')

    <!--  page-wrapper -->
    <div id="page-wrapper">


        <div class="row">
            <!-- Page Header -->
            <br>
            <br>
            <br>
            <div class="col-lg-12">
                <a href="/admin/category/create" class="btn btn-outline btn-primary">Add Category</a><br>
                <br>

            </div>
            <!--End Page Header -->
        </div>


        <div class="panel-heading" style="background-color: whitesmoke">

            <h3>Category List</h3>
            <hr>
        </div>
        <div class="panel-body"style="background-color: whitesmoke">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>ID</th>
                        <th>Keyword</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th style="width: 40 px">Edit</th>
                        <th style="width: 40 px">Show</th>
                        <th style="width: 40 px">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->title}}</td>
                        <td>{{$rs->keywords}}</td>
                        <td>{{$rs->description}}</td>
                        <td>{{$rs->image}}</td>
                        <td>{{$rs->status}}</td>
                        <td><a href="/admin/category/edit/{{$rs->id}}" class="btn btn-primary">Edit</a> </td>
                        <td><a href="/admin/category/show/{{$rs->id}}"  class="btn btn-success">Show</a> </td>
                        <td><a href="/admin/category/delete/{{$rs->id}}" class="btn btn-danger">Delete</a> </td>
                    </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

@endsection
