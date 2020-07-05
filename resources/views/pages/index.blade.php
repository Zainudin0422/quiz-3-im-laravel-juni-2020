@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>
        </div>
        <div class="col-sm-6">
            <a href="{{ '/artikel/create' }}" class="btn btn-primary float-right"> New Artikel</a>
        </div>
    </div>
    @foreach ($Articles as $Article)
        
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-sm-10">
                    <h6 class="m-0 font-weight-bold text-primary">{{ $Article->title }}</h6>
                </div>
                <div class="col-sm-2">
                    <h6 class="m-0 font-weight-bold text-primary float-right">{{ $Article->tag }}</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="mb-1 small">{{ $Article->slug }}</div>
            <p>{{ $Article->fill }}</p>
            <div class="form-group mt-2">
            <a href="{{ '/artikel/'.$Article->id }}" class="btn btn-success">Info</a>
                <button class="btn btn-success">Web</button>
                <button class="btn btn-success">phplaravel</button>
            </div>
        </div>
    </div>
    @endforeach
@endsection

@push('scripts')
    
@endpush