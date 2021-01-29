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
         $member_json = json_decode($data -> member)
        @endphp
        <div class="row">
            <div class="col-lg-6">
                @include('validate')
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Member Update</h4>
                    </div>
                    <div class="card-body">
                     
                       <form action="{{ route('member.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                          
                           <div class="form-group">
                               <img style="max-width: 150px; max-width: 150px;" class="bg-light" src="{{ URL::to('/') }}/media/member/{{ $member_json -> member_image }}" alt="">
                               <br>
                               <input type="hidden" name="old_photo" value="{{ $member_json -> member_image }}">
                                <label style="margin-left: 3px; font-size: 45px; cursor: pointer;" for="mimage"><i class="fa fa-file-image-o" aria-hidden="true"></i></label>
                               <input style="display: none;" type="file" id="mimage" name="new-photo">
                               <br>
                               <img id="member_image1" src="" alt="" style="max-height: 150px; max-width: 150px;">
                           </div>

                           <div class="form-group">
                              <label for="">Member Name</label>
                              <input class="form-control" type="text" name="name" placeholder="Member Name" value="{{ $member_json -> name }}"> 
                           </div>

                           <div class="form-group">
                             <label for="">Content</label>
                             <textarea rows="3" name="content" class="form-control" placeholder="Content">{{ $member_json -> content }}</textarea>
                           </div>

                           <div class="form-group">
                             <label for="">Job</label>
                             <input type="text" name="job" value="{{ $member_json -> job }}" class="form-control" placeholder="Job">
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
