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
         $social_json = json_decode($data -> social);
        @endphp
        <div class="row">
            <div class="col-lg-10">
                @include('validate')
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">CopyRight Update</h4>
                    </div>
                    <div class="card-body">
                     
                       <form action="{{ route('social.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                           
                           <div class="form-group">
                              <label for="">Facebook</label>
                              <input class="form-control" type="text" name="facebook" value="{{ $social_json -> facebook }}"> 
                           </div>
                           <div class="form-group">
                              <label for="">Instragram</label>
                              <input class="form-control" type="text" name="instragram" value="{{ $social_json -> instragram }}"> 
                           </div>
                           <div class="form-group">
                              <label for="">Tiwtter</label>
                              <input class="form-control" type="text" name="tiwtter" value="{{ $social_json -> tiwtter }}"> 
                           </div>
                           <div class="form-group">
                              <label for="">Google</label>
                              <input class="form-control" type="text" name="google" value="{{ $social_json -> google }}"> 
                           </div> 
                           <div class="form-group">
                              <label for="">Pinterest</label>
                              <input class="form-control" type="text" name="pinterest" value="{{ $social_json -> pinterest }}"> 
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
