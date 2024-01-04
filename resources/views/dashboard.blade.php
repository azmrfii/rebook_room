@extends('layouts.app')
@section('content')
<h1>Hi {{ Auth::user()->nama_lengkap }}</h1>
@endsection
