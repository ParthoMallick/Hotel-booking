@extends('admin.admin_layout.dashboard_master_page')
@section('admin')

    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success">
            {{\Illuminate\Support\Facades\Session::get('success')}}
        </div>
    @endif

    <form action="{{route('staff.update.list')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $edtStaff->id }}">
        <div class="mb-3">
            <label for="example-name" class="form-label">Name</label>
            <input type="text" id="example-name" value="{{$edtStaff->name}}" class="form-control" name="name" placeholder="name">
        </div>
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            <label for="example-designation" class="form-label">Designation</label>
            <input type="text" id="example-designation" class="form-control" value="{{$edtStaff->designation}}" name="designation" placeholder="designation">
        </div>
        @error('designation')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            <label for="example-image" class="form-label">Staff Images</label>
            <input type="file" id="example-image" class="form-control" value="{{$edtStaff->image}}" name="image" placeholder="image">
            <img src="{{asset('storage/staff-images/'.$edtStaff->image)}}" style="width: 100px;height: auto">
        </div>
        @error('image')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
