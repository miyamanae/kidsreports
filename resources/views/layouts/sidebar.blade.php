
  <div class="list-group"> 
    <a href="{{route('home')}}" 
    class='list-group-item {{url()->current()==route('home')?'active':''}}'>
        <div class="fas fa-home pr-2"></div><span>HOME</span>
    </a>
   
    <a href="{{route('kid.create')}}"
    class='list-group-item {{url()->current()==route('kid.create')?'active':''}}'>
        <div class="fas fa-pen-nib pr-2"></div><span>園児追加</span>
    </a>

    <a href="{{route('home.mykid')}}"  
    class="list-group-item {{url()->current()==route('home.mykid')?'active':''}}"> 
        <div class="fas fa-user-edit pr-2"></div><span>園児リスト</span>
    </a>

    @can('admin')
    <a href="{{route('profile.index')}}" 
    class="list-group-item {{url()->current()==route('profile.index')?'active':''}}">
    <div class="fas fa-list pr-2"></div><span>ユーザーアカウント</span>
    </a>
    @endcan
</div>