@extends('layouts.app')
@section('content')

<div class="card mb-4">
    <div class="card-header">
        <div class="text-muted small mr-3"> 

            {{$kid->user->name}}
        </div>
        <h4>{{$kid->name}}</h4>
        
        <div class="abcd">
        <span class="ml-auto">
            <a href="{{route('kid.edit', $kid)}}"><button class="btn btn-primary">編集</button></a>
            </span>

            <span class="ml-2">
                <form method="post" action="{{route('kid.destroy', $kid)}}">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger" onClick="return confirm('本当に削除しますか？');">削除</button>
                </form>
              </span>
            </div>


    </div>
    <div class="card-body">
        <p class="card-text">
            <p>◇年齢</p>            {{$kid->age}}
            <p>◇性別</p>  {{$kid->gender}}
            <p>◇保護者名</p>  {{$kid->parent_name}}
        </p>
    </div>

    <div class="card-footer">
        <span class="mr-2 float-right">
            作成日時 {{$kid->created_at}}
        </span>
    </div>
</div>

<hr>
@if ($kid->diaries)
@foreach ($kid->diaries as $diary)
<div class="card mb-4">
    
    <div class="card-header">
        {{$diary->user->name}}
    </div>
    <div class="card-body">
        <p>◇健康状態</p>
        {{$diary->health}}
    </div>
    <div class="card-body">
        <p>◇食事内容</p>
        {{$diary->food}}
    </div>

    <div class="card-body">
        <p>◇保護者宛ての連絡</p>
        {{$diary->contact}}
    </div>
    
    
    <div class="card-footer">
        <span class="mr-2 float-right">
            作成日時 {{$diary->created_at}}
        </span>
    </div>
</div>
@endforeach
@endif


{{-- バリデーションエラー表示 --}}
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


{{-- コメント投稿用フォーム --}}
<div class="card mb-4">
    <form method="post" action="{{route('diary.store')}}">
        @csrf
        <input type="hidden" name='kid_id' value="{{$kid->id}}">
        <div class="form-group">
            <textarea name="health" class="form-control" id="health" cols="10" rows="3" 
            placeholder="健康状態">{{old('health')}}</textarea>
        </div>
        <div class="form-group">
            <textarea name="food" class="form-control" id="food" cols="10" rows="3" 
            placeholder="食事">{{old('food')}}</textarea>
        </div>
        <div class="form-group">
            <textarea name="contact" class="form-control" id="contact" cols="10" rows="3" 
            placeholder="保護者宛ての連絡">{{old('contact')}}</textarea>
        </div>
        <div class="form-group">
        <button class="btn btn-success float-right mb-3 mr-3">連絡帳を投稿する</button>
        </div>
    </form>
</div> 



@endsection