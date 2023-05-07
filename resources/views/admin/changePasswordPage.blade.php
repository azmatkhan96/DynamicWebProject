@extends('admin.admin_master')

@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Change Password</h4><br>
                        <form action="{{route('savePassword')}}" method="POST">
                            @csrf
                        
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> Old Password :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password"  id="" name='oldPassword'  value="{{old('oldPassword')}}" required>
                                    <span class="text-danger">@error('oldPassword'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">New Password :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password"  id="" name='newPassword'  value="" required>
                                    <span class="text-danger">@error('newPassword'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <!-- end row -->

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2  col-form-label">Confirm Password :</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password"  id="" name='confirmPassword'  value="" required>
                                    <span class="text-danger">@error('confirmPassword'){{$message}}@enderror</span>
                                </div>
                            </div>
                            <!-- end row -->

                            <button type="submit" class="btn btn-info waves-effect waves-light saveData mt-2"> Change password
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

    
@endpush