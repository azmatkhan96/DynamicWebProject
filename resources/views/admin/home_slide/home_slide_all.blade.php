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

                        <h4 class="card-title">Home Slide Page</h4>
                        <form action="{{route('save-admin-data')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"  id="" name='title'  value="{{$homeSlide->title}}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Short Title:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"  id="" name="short_title" value="{{$homeSlide->short_title}}" required>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Video Url:</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"  id="profileImage"  name="video_url " value="{{$homeSlide->video_url}}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Slider Image:</label>
                                <div class="col-sm-10">
                                  <input type="text" name="home_img" class="form-control" value="{{$homeSlide->home_img}}">
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    <img class="img-thumbnail" width="200"  id="showImage" src="{{(!empty($homeSlide->home_img)) ? URL::to('upload/home_slide/'.$homeSlide->home_img) : URL::to('upload/no_image.jpg')}}" alt="Card image cap">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success waves-effect waves-light updateSlide">
                                <i class="ri-check-line align-middle me-2"></i> Save
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