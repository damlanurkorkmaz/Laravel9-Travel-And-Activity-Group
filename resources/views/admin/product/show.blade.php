@extends('layouts.admin')

@section('title', 'Show Product: '.$data->title)

<!--  wrapper -->
<div id="wrapper">
@section('content')

    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <br>
                <br>
                <br>
                <a href="/admin/product/edit/{{$data->id}}" class="btn btn-outline btn-success">Edit Category</a>
                <a href="/admin/product/destroy/{{$data->id}}" class="btn btn-outline btn-danger"
                   onclick="return confirm('Category will be deleting. Are you sure?')">Delete Category</a>

                <h1 class="page-header">Show Category: {{$data->title}} </h1>
            </div>
            <!--End Page Header -->
        </div>



        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">

                <tr>
                    <th>Id</th>
                    <td>{{$data->id}} </td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>{{$data->category_id}} </td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td>{{$data->title}} </td>

                </tr>
                <tr>
                    <th>Keywords</th>
                    <td>{{$data->keywords}} </td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{$data->description}} </td>
                </tr>
                <tr>
                    <th>Detail</th>
                    <td>{{$data->detail}} </td>

                </tr>
                <tr>
                    <th>Image</th>
                      <td>  @if($data->image)
                            <img src="{{Storage::url($data->image)}}" style="height: 40px">
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>City</th>
                    <td>{{$data->city}} </td>

                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{$data->status}} </td>
                </tr>
                <tr>
                    <th>Created Date</th>
                    <td>{{$data->created_at}} </td>
                </tr>
                <tr>
                    <th>Update Date</th>
                    <td>{{$data->updated_at}} </td>
                </tr>
            </table>
        </div>





    </div>
    <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

@endsection
