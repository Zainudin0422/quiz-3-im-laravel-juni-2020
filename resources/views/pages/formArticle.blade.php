@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>
        </div>
        <div class="col-sm-6">
            <a href="{{ '/artikel' }}" class="btn btn-primary float-right"> Back page</a>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">My Article</h6>
        </div>
        <div class="card-body">
        <form action="{{ '/artikel' }}" method="POST">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control" placeholder="Title Article">
                        </div>
                        <div class="col-sm-2">
                            <input type="text" name="tag" class="form-control" placeholder="#(Your Tag)">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea name="fill" class="form-control" rows="5" placeholder="Write your article here ..."></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary float-right">Create Acticle</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    
@endpush