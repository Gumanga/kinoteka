@extends('layouts.app')
@section('title', $page->title.' — КиноТека')
@section('content')
<main class="section"><div class="container"><h1 class="page-title">{{ $page->title }}</h1><article class="page-body">{!! $page->body !!}</article></div></main>
@endsection
