@extends('layouts.app')

@section('title', '最終確認')

@section('content')
    <h2>お申し込みの確認</h2>


<li>{{$params->name}}</li>
<li>{{$params->mail}}</li>
<li>{{$params->password}}</li>
<li>{{$params->sendname}}</li>
<li>{{$params->addressnum}}</li>
<li>{{$params->address1}}</li>
<li>{{$params->address2}}</li>
<li>{{$params->tel}}</li>
<li>{{$params->day}}</li>
<li>{{$params->time}}</li>

@endsection