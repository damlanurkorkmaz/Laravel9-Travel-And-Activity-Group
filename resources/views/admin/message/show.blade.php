@extends('layouts.adminwindow')

@section('title', 'Show Message: '.$data->title)

<!--  wrapper -->
<div id="wrapper">
@section('content')

    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <!--End Page Header -->
        </div>



        <div class="table-responsive">
            <h3>Detailed Message</h3>
            <table class="table table-striped table-bordered table-hover">

                <tr>
                    <th>Id</th>
                    <td>{{$data->id}} </td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{$data->name}} </td>

                </tr>
                <tr>
                    <th>Phone Number</th>
                    <td>{{$data->phone}} </td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{$data->email}} </td>
                </tr>

                <tr>
                    <th>Subject</th>
                    <td>{{$data->subject}} </td>

                </tr>
                <tr>
                    <th>Message</th>
                    <td>{{$data->message}} </td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{$data->status}} </td>
                </tr>
                <tr>
                    <th>IP Number</th>
                    <td>{{$data->created_at}} </td>
                </tr>

                <tr>
                    <th>Created Date</th>
                    <td>{{$data->created_at}} </td>
                </tr>
                <tr>
                    <th>Update Date</th>
                    <td>{{$data->updated_at}} </td>
                </tr>
                <tr>
                    <th>Admin Note:</th>
                    <td>
                        <form class="forms-sample" action="/admin/message/update/{{$data->id}}" method="post">
                            @csrf
                         <textarea cols="100"name="note" id="note" >
                             {{ $data->note}}
                         </textarea>
                            <br>
                            <div class="card-footer">
                                <button class="btn btn-primary mr-2" type="submit"> Update Note</button>
                            </div>
                        </form>

                    </td>
                </tr>

            </table>
        </div>





    <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

@endsection
