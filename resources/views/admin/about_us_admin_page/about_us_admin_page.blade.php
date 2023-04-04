@extends('admin.admin_layout.dashboard_master_page')
@section('admin')

    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success">
            {{\Illuminate\Support\Facades\Session::get('success')}}
        </div>
    @endif

    <form action="{{route('admin-us-about.store.db')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="example-name" class="form-label">Title</label>
            <input type="text" id="example-name" class="form-control" name="title" placeholder="title">
        </div>
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            <label for="example-name" class="form-label">description</label>
            <input type="text" id="example-name" class="form-control" name="description" placeholder="description">
        </div>
        @error('description')
        <span class="text-danger">{{$message}}</span>
        @enderror


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
