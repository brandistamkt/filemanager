@extends('layouts.app')
@section('title','Nuevo Usuario')
@section('content')
    <section class="content-header">
        <h1>
            User
        </h1>
    </section>
    <div class="content">

        {!! Form::open(['route' => 'users.store']) !!}

        @include('users.fields')

        {!! Form::close() !!}
    </div>
@endsection
