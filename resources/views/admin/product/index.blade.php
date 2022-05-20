@extends('layouts.admin')

@section('title', 'Product List')

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
                    <a href="/admin/product/create" class="btn btn-outline btn-primary">Add Product</a><br>
                    <br>

                </div>
                <!--End Page Header -->
            </div>


            <div class="panel-heading" style="background-color: whitesmoke">

                <h3>Product List</h3>
                <hr>
            </div>
            <div class="panel-body"style="background-color: whitesmoke"  >
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" >
                        <thead>
                        <tr>

                            <th>ID</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Keywords</th>
                            <th>Detail</th>
                            <th>Image</th>
                            <th>Image Gallery</th>
                            <th>City</th>
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
                                <td>{{\App\Http\Controllers\admin\CategoryController::getParentsTree($rs, $rs->title)}}</td>
                                <td>{{$rs->title}}</td>
                                <td>{{$rs->description}}</td>
                                <td>{{$rs->keywords}}</td>
                                <td>{!! $rs->detail !!}</td>
                                <td>
                                    @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height: 50px">
                                    @endif
                                </td>
                                <td>
                                    <a href="/admin/image/{{$rs->id}}"
                                       onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                    <img src="{{asset('assets')}}/admin/img/gallery.png" width="50">
                                    </a>
                                </td>
                                <td>{{$rs->city}}</td>
                                <td>{{$rs->status}}</td>
                                <td><a href="/admin/product/edit/{{$rs->id}}" class="btn btn-primary">Edit</a> </td>
                                <td><a href="/admin/product/show/{{$rs->id}}"  class="btn btn-success">Show</a> </td>
                                <td><a href="/admin/product/destroy/{{$rs->id}}" class="btn btn-danger"
                                       onclick="return confirm('Category will be deleting. Are you sure?')">Delete</a> </td>
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
