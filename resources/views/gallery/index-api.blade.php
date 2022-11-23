@extends('layouts.app')

@section('content')
<style type="text.css">
    .pagination li {
        float: left;
        list-style-type: none;
        margin: 5px;
    }
</style>

<!-- content wrapper -->
<div class="content-wrapper">

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card card-success">
                        <div class = "card-header">
                            <h4 class = "card-title">Gallery (Consuming API)</h4>
                        </div>
                        <div class = "card-body">
                            <div class = "row">
                                <div class = "col-sm-2">
                                    <div>
                                        <a href="" class="example-image-link" data-lightbox="example-2" data-title="">
                                            <img src="" alt="image-1" class="example-image img-fluid mb-2">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- /.content wrapper -->
