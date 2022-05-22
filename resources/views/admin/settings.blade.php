@extends('layouts.admin')

@section('title', 'Settings')
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

<!--  wrapper -->
<div id="wrapper">
@section('content')

    <!--  page-wrapper -->
    <div id="page-wrapper">

        <div class="row">
            <!-- Page Header -->
            <div class="col-lg-12">
                <h3 class="page-header">Settings</h3>
            </div>
            <!--End Page Header -->
        </div>
        <form class="forms-sample" action="/admin/settings/update" method="post" enctype="multipart/form-data">
            @csrf
        <div class="panel-body" style="background-color: whitesmoke">
            <ul class="nav nav-tabs" style="background-color: whitesmoke">
                <li class="active"><a href="#general" data-toggle="tab">General</a>
                </li>
                <li><a href="#smtp" data-toggle="tab">Smtp Email</a>
                </li>
                <li><a href="#social" data-toggle="tab">Social Media</a>
                </li>
                <li><a href="#about" data-toggle="tab">About Us</a>
                </li>
                <li><a href="#contact" data-toggle="tab">Contact Page</a>
                </li>
                <li><a href="#reference" data-toggle="tab">References</a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade in active" id="general">

                    <br>

                        <div class="form-group">
                            <label for="exampleInputName1">Title</label>
                            <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control" placeholder="Project Title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Keyword</label>
                            <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" placeholder="Keyword">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Description</label>
                            <input type="text" name="description" class="form-control" value="{{$data->description}}"placeholder="Description">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Company</label>
                            <input type="text" name="company" class="form-control" value="{{$data->company}}" placeholder="Company Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1">Address</label>
                            <input type="text" name="address" class="form-control" value="{{$data->address}}" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail3">Email address</label>
                            <input type="email" name="email" value="{{$data->email}}" class="form-control"  placeholder=" Email ">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName1"> Phone </label>
                            <input type="number" class="form-control" name="phone" value="{{$data->phone}}" placeholder="Phone Number">
                        </div>
                        <label for="exampleFormControlSelect3">Status</label>
                        <select class="form-control form-control-sm" name="status">
                            <option selected>{{$data->status}}</option>
                            <option>True</option>
                            <option>False</option>
                        </select>
                        <br>
                        <label>Icon</label>

                        <br>
                        <div class="input-group col-xs-12">
                            <input type="name" class="form-control file-upload-info" name="icon"  placeholder="Upload Icon"><br>
                            <input type="file" name="image" class="file-upload-default">

                        </div>
<br>
                        <button type="submit" class="btn btn-primary mr-2">Update Settings</button>
                        <button class="btn btn-light">Cancel</button>


                </div>

                <div class="tab-pane fade" id="smtp">

                    <h4>Smtp Tab</h4>

                    <div class="form-group">
                        <label for="exampleInputUsername1">SMTP Server</label>
                        <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control"  placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">SMTP Email </label>
                        <input type="email" name="smtpemail" value="{{$data->smtpemail}}" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">SMTP Password</label>
                        <input type="password" name="smtppassword" value="{{$data->smtppassword}}" class="form-control"  placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">SMTP Port</label>
                        <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control"  placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Update Settings</button>
                    <button class="btn btn-light">Cancel</button>
                </div>

                <div class="tab-pane fade" id="social">
                    <div class="form-group">
                        <label>Facebook</label>
                        <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control" placeholder="Facebook">
                    </div>
                    <div class="form-group">
                        <label> Twitter</label>
                        <input type="text" class="form-control" name="twitter" value="{{$data->twitter}}" placeholder="Twitter">
                    </div>
                    <div class="form-group">
                        <label >Instagram</label>
                        <input type="text" class="form-control" name="instagram" value="{{$data->instagram}}" placeholder="Instagram">
                    </div>
                    <div class="form-group">
                        <label>Fax</label>
                        <input type="text" name="fax" value="{{$data->fax}}" value="{{$data->fax}}" class="form-control" placeholder="Facebook">
                    </div>
                        <button type="submit" class="btn btn-primary mr-2">Update Settings</button>
                        <button class="btn btn-light">Cancel</button>

                </div>

                <div class="tab-pane fade" id="about">

                    <div class="form-group">
                        <label >About Us</label>
                        <textarea type="text" class="form-control" name="aboutus" id="about" >{{$data->aboutus}}
                                    </textarea>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#aboutus' ) )
                                .then( editor => {
                                    console.log( editor );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                        <button type="submit" class="btn btn-primary mr-2">Update Settings</button>
                        <button class="btn btn-light">Cancel</button>
                    </div>

                </div>

                <div class="tab-pane fade" id="contact">

                    <h4>Contact Tab</h4>

                    <div class="form-group">
                        <textarea type="text" class="form-control" name="contact" id="about" > {{$data->contact}}
                                    </textarea>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#aboutus' ) )
                                .then( editor => {
                                    console.log( editor );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                        <button type="submit" class="btn btn-primary mr-2">Update Settings</button>
                        <button class="btn btn-light">Cancel</button>
                    </div>

                </div>
                <div class="tab-pane fade" id="reference">

                    <h4>Reference Tab</h4>
                    <div class="form-group">
                        <textarea type="text" class="form-control" name="references" id="references" >{{$data->references}}
                                    </textarea>
                        <script>
                            ClassicEditor
                                .create( document.querySelector( '#references' ) )
                                .then( editor => {
                                    console.log( editor );
                                } )
                                .catch( error => {
                                    console.error( error );
                                } );
                        </script>
                        <button type="submit" class="btn btn-primary mr-2"> Update Settings</button>
                        <button class="btn btn-light">Cancel</button>
                    </div>

                </div>


            </div>
        </div>

        </form>

    </div>
    <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

@endsection
