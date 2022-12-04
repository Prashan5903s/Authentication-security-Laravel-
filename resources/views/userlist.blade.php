@extends('layout')

@section('content')
<h1>
    User list page
</h1>
<div>
    <ol>
        @foreach($user as $u)
        <li><span>{{$u->name}}</span> <span>{{$u->email}}</span></li>
        @endforeach
    </ol>
</div>
@endsection