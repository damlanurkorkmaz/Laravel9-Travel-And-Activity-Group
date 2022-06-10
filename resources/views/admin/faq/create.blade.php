@extends('layouts.admin')

@section('title', 'Add Question')

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
                <h1 class="page-header">Add Question </h1>
            </div>
            <!--End Page Header -->
        </div>



        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">



                            <h4 class="card-title">FAQ</h4>


                            <form class="forms-sample" action="/admin/faq/store" method="post" enctype="multipart/form-data" >
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Question</label>
                                    <input type="text" class="form-control" name="question" placeholder="Question">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputUsername1">Answer</label>
                                    <textarea type="text" class="form-control" rows="3" id="answer" name="answer" placeholder="Answer"></textarea>
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#answer' ) )
                                            .then( editor => {
                                                console.log( editor );
                                            } )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>
                                </div>
                            <div class="form-group">
                                    <label for="exampleFormControlSelect3">Status</label>
                                    <select class="form-control form-control-sm" name="status">
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                                <div class="card-footer">
                                    <button class="btn btn-primary mr-2" type="submit"> Save</button>
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
