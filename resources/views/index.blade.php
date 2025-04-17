@extends('layouts.app')

@section('title', 'フォーラム - ホーム')

@section('content')
    @include('components.header')

    @include('components.category')

    @include('components.post')
@endsection
