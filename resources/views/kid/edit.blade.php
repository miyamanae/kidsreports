@extends('layouts.app')
@section('content')


<div class="row">
  <div class="col-md-10 mt-6">
      <div class="card-body">
          <h2 class="mt4">園児情報の編集</h2>
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
          @endif

          @if(session('message'))
          <div class="alert alert-success">{{session('message')}}</div>
          @endif

          <form method="post" action="{{route('kid.update', $kid)}}" enctype="multipart/form-data">
            @csrf
            @method('put')

              <div class="form-group">
                  <label for="name">園児名</label>
                  <input type="text" name="name" class="form-control" id="name" value="{{ old('name',$kid->name) }}" id="name" placeholder="Enter Name">
              </div>

              <div class="form-group">
                <label for="age">年齢</label>
                <input type="text" name="age" class="form-control" id="age" value="{{ old('age', $kid->age) }}" id="age" placeholder="Enter Title">
            </div>

            <div class="form-group">
              <label for="gender">性別</label>
              <p>男の子の場合は1、女の子の場合は2と入力してください。</a>
              <input type="text" name="gender" class="form-control" id="gender" value="{{ old('gender',$kid->gender) }}" id="gender" placeholder="Enter Title">
          </div>

          <div class="form-group">
            <label for="parent_name">保護者名</label>
            <input type="text" name="parent_name" class="form-control" id="parent_name" value="{{ old('parent_name',$kid->parent_name) }}" id="parent_name" placeholder="Enter Title">
        </div>

              <button type="submit" class="btn btn-success">送信する </button>
          </form>
      </div>
  </div>
</div>

@endsection