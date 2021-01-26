@extends('layouts.app')

@section('main-content')

<!-- Page Wrapper -->
<div class="page-wrapper">

    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Welcome {{ Auth::user() -> name }}!</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->
        @php
          $slider_image = json_decode($data -> slider);
        @endphp
        <div class="row">
            <div class="col-lg-6">
                @include('validate')
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Home Page Slider</h4>
                    </div>
                    <div class="card-body">
                       <form action="{{ route('sldier.store') }}" method="POST" enctype="multipart/form-data">
                           @csrf

                           <div class="form-group">
                                <img style="max-width: 150px; max-width: 150px;" class="bg-light" src="{{ URL::to('/') }}/media/slider/{{ $slider_image -> slider_image1 }}" alt="">
                                <br>
                                <label style="margin-left: 3px; font-size: 50px; cursor: pointer;" for="slider_image1"><i class="fa fa-file-image-o" aria-hidden="true"></i></label>
                                <input name="slider_old_image1" value="{{ $slider_image -> slider_image1 }}" class="form-control" type="hidden">
                                <input style="display: none;" name="slider_image1" class="" type="file" id="slider_image1">
                                <img style="max-width:200px; max-height: 200px; display: block;" id="slider_image" src="" alt="">
                            </div>

                            <div class="form-group">
                               <img style="max-width: 150px; max-width: 150px;" class="bg-light" src="{{ URL::to('/') }}/media/slider/{{ $slider_image -> slider_image2 }}" alt="">
                                <br>
                                <label style="margin-left: 3px; font-size: 50px; cursor: pointer;" for="slider_image2"><i class="fa fa-file-image-o" aria-hidden="true"></i></label>
                                <input name="slider_old_image2" value="{{ $slider_image -> slider_image2 }}" class="form-control" type="hidden">
                                <input style="display: none;" name="slider_image2" class="" type="file" id="slider_image2">
                                <img style="max-width:200px; max-height: 200px; display: block;" id="slider_imagetwo" src="" alt="">
                            </div>

                            <div class="form-group">
                                <img style="max-width: 150px; max-width: 150px;" class="bg-light" src="{{ URL::to('/') }}/media/slider/{{ $slider_image -> slider_image3 }}" alt="">
                                <br>
                                <label style="margin-left: 3px; font-size: 50px; cursor: pointer;" for="slider_image3"><i class="fa fa-file-image-o" aria-hidden="true"></i></label>
                                <input name="slider_old_image3" value="{{ $slider_image -> slider_image3 }}" class="form-control" type="hidden">
                                <input style="display: none;" name="slider_image3" class="" type="file" id="slider_image3">
                                <img style="max-width:200px; max-height: 200px; display: block;" id="slider_imagethree" src="" alt="">
                            </div>

                            <div class="form-group">
                                <img style="max-width: 150px; max-width: 150px;" class="bg-light" src="{{ URL::to('/') }}/media/slider/{{ $slider_image -> slider_image4 }}" alt="">
                                <br>
                                <label style="margin-left: 3px; font-size: 50px; cursor: pointer;" for="slider_image4"><i class="fa fa-file-image-o" aria-hidden="true"></i></label>
                                <input name="slider_old_image4" value="{{ $slider_image -> slider_image4 }}" class="form-control" type="hidden">
                                <input style="display: none;" name="slider_image4" class="" type="file" id="slider_image4">
                                <img style="max-width:200px; max-height: 200px; display: block;" id="slider_imagefour" src="" alt="">
                            </div>
                           
                           <div class="form-group">
                               <input type="submit" value="Update" class="btn btn-info">
                           </div>

                       </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
<!-- /Page Wrapper -->

@endsection
