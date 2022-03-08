@extends('layouts.app')
@section('content')

連絡帳の作成を行います。


<div class="row">
  <div class="col-md-10 mt-6">
      <div class="card-body">
          <h2 class="mt4">連絡帳作成</h2>
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

          <form method="post" action="{{route('diary.store')}}" enctype="multipart/form-data">
            @csrf
              <div class="form-group">
                  <label for="health">健康状態</label>
                  <textarea name="health" class="form-control" id="health" cols="20" rows="10"></textarea>
              </div>

              <div class="form-group">
                <label for="food">食事内容</label>
                <textarea name="food" class="form-control" id="food" cols="20" rows="10"></textarea>
            </div>

            <div class="form-group">
              <label for="Contact">保護者宛ての連絡</label>
              <textarea name="Contact" class="form-control" id="Contact" cols="20" rows="10"></textarea>
            </div>

              <button type="submit" class="btn btn-success">送信する </button>
          </form>
      </div>
  </div>
</div>










@endsection