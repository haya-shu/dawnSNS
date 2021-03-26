@extends('layouts.login')

@section('content')
<form class="form-inline my-2 my-lg-0 ml-2">
     <div class="form-group">
     <input type="search" class="form-control mr-sm-2" name="search"  value="{{request('search')}}" placeholder="ユーザー名" aria-label="検索...">
     </div>
     <input type="submit" value="検索" class="btn btn-info">
 </form>


@endsection
