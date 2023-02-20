@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="card"><br><br>
                    <center>
                        <img class="img-thumbnail" width="200" src="{{(!empty($adminData->profile_image)) ? URL::to('upload/admin_img/'.$adminData->profile_image) : URL::to('upload/no_image.jpg')}}" alt="Card image cap">
                    </center>
                   
                    <div class="card-body">
                        <h4 class="card-title">Name: {{$adminData->name}}</h4>
                        <hr>
                        <h5 class="card-title"> Email: {{$adminData->email}}</h5>
                        <hr>
                        <a href="{{route('edit-admin-Profile')}}" class="btn btn-info btn-rounded waves-effect waves-light">Edit Profile</a>
                    </div>
                    
                </div>
            </div>


        </div>
    </div>
</div>

@endsection