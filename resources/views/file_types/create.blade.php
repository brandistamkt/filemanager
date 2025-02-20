@extends('layouts.app')
@section('title','Nuevo '.ucfirst(config('settings.file_label_singular')).' Tipos')
@section('content')
    <section class="content-header">
        <h1>
            Tipos {{ucfirst(config('settings.file_label_singular'))}}
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'fileTypes.store']) !!}

                        @include('file_types.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
