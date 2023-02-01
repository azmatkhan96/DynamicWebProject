@extends('admin.admin_master')

@section('links')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
@endsection

@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <form action="">
                            @csrf
                            <h4 class="card-title">Edit Profile</h4>
                        
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Name:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"  id="" value="{{$editadminData->name}}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Email ID:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"  id="" value="{{$editadminData->email}}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file"  id="profileImage" value="" name="profile_img">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image:</label>
                                <div class="col-sm-10">
                                    <img class="img-thumbnail" width="200"  id="showImage" src="" alt="Card image cap">
                                </div>
                            </div>
                            <!-- end row -->

                            <button type="submit" class="btn btn-success waves-effect waves-light">
                                <i class="ri-check-line align-middle me-2"></i> Saves
                            </button>
                        </form>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>

$(document).ready(function () {
    $('#profileImage').change(function (e) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#showImage').attr('src',e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
});

</script>
    
@endpush