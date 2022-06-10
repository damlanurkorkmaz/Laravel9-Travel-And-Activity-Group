@extends('layouts.admin')

@section('title', 'Faq List')

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
                    <a href="/admin/faq/create" class="btn btn-outline btn-primary">Add Question</a><br>
                    <br>

                </div>
                <!--End Page Header -->
            </div>


            <div class="panel-heading" style="background-color: whitesmoke">

                <h3>Question List</h3>
                <hr>
            </div>
            <div class="panel-body"style="background-color: whitesmoke"  >
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" >
                        <thead>
                        <tr>

                            <th>ID</th>
                            <th>Question</th>
                            <th>Answer</th>
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
                                <td>{!! $rs->question !!}</td>
                                <td>{!! $rs->answer!!}</td>
                                <td>{{$rs->status}}</td>
                                <td><a href="/admin/faq/edit/{{$rs->id}}" class="btn btn-primary">Edit</a> </td>
                                <td><a href="/admin/faq/show/{{$rs->id}}"  class="btn btn-success">Show</a> </td>
                                <td><a href="/admin/faq/destroy/{{$rs->id}}" class="btn btn-danger"
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
