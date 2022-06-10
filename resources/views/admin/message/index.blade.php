@extends('layouts.admin')

@section('title', 'Contact Form Message List')

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
                    <br>

                </div>
                <!--End Page Header -->
            </div>


            <div class="panel-heading" style="background-color: whitesmoke">

                <h3>Message List</h3>
                <hr>
            </div>
            <div class="panel-body"style="background-color: whitesmoke"  >
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" >
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Status</th>
                            <th style="width: 40 px">Show</th>
                            <th style="width: 40 px">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->name}}</td>
                                <td>{{$rs->phone}}</td>
                                <td>{{$rs->email}}</td>
                                <td>{{$rs->subject}}</td>
                                <td>{{$rs->status}}</td>

                                <td><a href="/admin/message/show/{{$rs->id}}"  class="btn btn-success"
                                       onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"
                                    >Show</a>

                                </td>
                                <td><a href="/admin/message/destroy/{{$rs->id}}" class="btn btn-danger"
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
