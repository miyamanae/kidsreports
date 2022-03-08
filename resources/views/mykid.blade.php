@extends('layouts.app')
@section('content')


@if(session('message'))
<div class="alert alert-success">{{session('message')}}</div>
@endif

<div class="ml-2 mb-3">
    home
</div>

@foreach ($kids as $kid)
    <div class="row">
        <div class="container-fluid mt-20" style="margin-left:-10px;">

        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">
                    <div class="media flex-wrap w-100 align-items-center">
                        <div class="media-body ml-3">
                         <a href="{{route('kid.show', $kid)}}">{{ $kid->name }}</a>

                            <div class="text-muted small">年齢：{{ $kid->age }}</div>
                            <div class="text-muted small">性別:{{ $kid->gender }}</div>
                            <div class="text-muted small">保護者名:{{ $kid->parent_name }}</div>
                
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endforeach
@endsection