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
        <div class="row">
            <div class="col-lg-10">
                @include('validate')
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Patner Upload</h4>
                    </div>
                    <div class="card-body">
                       <form action="{{ route('patner.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                           <h4 style="color: red;">Patner 1 Image</h4>
                           <div class="form-group">
                               <img style="max-width: 150px; max-width: 150px;" class="bg-light" src="" alt="">
                               <br>
                               <br>
                               <input type="hidden" name="old_logo1" value="">
                                <label style="margin-left: 3px; font-size: 45px; cursor: pointer;" for="pimage1"><i class="fa fa-file-image-o" aria-hidden="true"></i></label>
                               <input style="display: none;" type="file" id="pimage1" name="new-logo1">
                               <br>
                               <img id="patner_image1" src="" alt="" style="max-height: 150px; max-width: 150px;">
                           </div>
                           <h4 style="color: yellow;">patner 2 Image</h4>
                           <div class="form-group">
                               <img style="max-width: 150px; max-width: 150px;" class="bg-light" src="" alt="">
                               <br>
                               <br>
                               <input type="hidden" name="old_logo2" value="">
                                <label style="margin-left: 3px; font-size: 45px; cursor: pointer;" for="pimage2"><i class="fa fa-file-image-o" aria-hidden="true"></i></label>
                               <input style="display: none;" type="file" id="pimage2" name="new-logo2">
                               <br>
                               <img id="patner_image2" src="" alt="" style="max-height: 150px; max-width: 150px;">
                           </div>
                           <h4 style="color: blue;">patner 3 Image</h4>
                           <div class="form-group">
                               <img style="max-width: 150px; max-width: 150px;" class="bg-light" src="" alt="">
                               <br>
                               <br>
                               <input type="hidden" name="old_logo3" value="">
                                <label style="margin-left: 3px; font-size: 45px; cursor: pointer;" for="pimage3"><i class="fa fa-file-image-o" aria-hidden="true"></i></label>
                               <input style="display: none;" type="file" id="pimage3" name="new-logo3">
                               <br>
                               <img id="patner_image3" src="" alt="" style="max-height: 150px; max-width: 150px;">
                           </div>
                           <h4 style="color: green;">patner 4 Image</h4>
                           <div class="form-group">
                               <img style="max-width: 150px; max-width: 150px;" class="bg-light" src="" alt="">
                               <br>
                               <br>
                               <input type="hidden" name="old_logo4" value="">
                                <label style="margin-left: 3px; font-size: 45px; cursor: pointer;" for="pimage4"><i class="fa fa-file-image-o" aria-hidden="true"></i></label>
                               <input style="display: none;" type="file" id="pimage4" name="new-logo4">
                               <br>
                               <img id="patner_image4" src="" alt="" style="max-height: 150px; max-width: 150px;">
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
