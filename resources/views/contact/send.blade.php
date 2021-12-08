@extends('layouts.default')
<style>
    .thanks-wrap {
      margin: 30% 0;
    }
    p {
      text-align: center;
    }
    a {
      display: block;
      text-align: center;
      width: 200px;
      color: white;
      text-decoration: none;
      background: black;
      border-radius: 4px;
      padding: 10px 0;
      margin: 50px auto 0;
    }
</style>
@section('content')
<div class="thanks-wrap">
  <p>{{$txt}}</p>
  <a href="{{ route('contact') }}">トップページへ</a> 
</div>
@endsection