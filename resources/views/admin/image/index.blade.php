@extends('layouts.adminwindow')

@section('title', 'Product Image Gallery List')

<!--  wrapper -->
<div id="wrapper">
    @section('content')

        <!--  page-wrapper -->
        <div id="page-wrapper">


            <div class="row">
                <!-- Page Header -->
                <!--End Page Header -->
            </div>
            <form class="forms-sample" action="/admin/image/store" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="exampleInputUsername1">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Title">
                </div>

                <label>Image</label>

                <br>
                <div class="input-group col-xs-12">

                    <input type="name" class="form-control file-upload-info" name="image" placeholder="Upload Image">
                    <input type="file" name="image" class="file-upload-default">
                    <br>

                </div>
                <br>

                <div class="card-footer">
                    <button class="btn btn-primary mr-2" type="submit"> Save</button>
                </div>

            </form>

            <div class="panel-heading" style="background-color: whitesmoke">

                <h3>Image Gallery</h3>
                <hr>
            </div>
            <div class="panel-body"style="background-color: whitesmoke"  >
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" >
                        <thead>
                        <tr>

                            <th>ID</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>City</th>
                            <th style="width: 40 px">Update</th>
                            <th style="width: 40 px">Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->title}}</td>
                                <td>
                                    @if($product->image)
                                        <img src="{{Storage::url($product->image)}}" style="height: 50px">
                                    @endif
                                </td>
                                <td>{{$product->city}}</td>
                                <td><a href="/admin/image/edit/{{$product->id}}" class="btn btn-primary">Update</a> </td>
                                <td><a href="/admin/image/destroy/{{$product->id}}" class="btn btn-danger"
                                       onclick="return confirm('Category will be deleting. Are you sure?')">Delete</a> </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>


        </div>
        <!-- end page-wrapper -->

</div>
<!-- end wrapper -->
@endsection

