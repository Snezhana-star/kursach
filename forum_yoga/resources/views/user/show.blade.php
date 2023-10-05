@extends('layout.app')

@section('title', 'Личный кабинет')
@section('content')
    @include('partials.header')

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-10 mb-20">
        @include('user.partials.info', ['user'=>$user])
    </div>
@endsection
