@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>Hello 蔡丹</h1>
    <p class="lead">
      你是个🐷，从这一刻开始
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册一个🐷</a>
    </p>
  </div>
@stop
