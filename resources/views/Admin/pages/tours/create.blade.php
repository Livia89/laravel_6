@extends('Admin.layouts.template')

@section('title', 'Criar novo tour')

@section('content')
    <h1>Cadastrar novo Tour</h1>

    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
            </ul>
    @endif

    <form action="{{ route('tours.store')}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name='_token' value='{{ csrf_token() }}'>
    <input name='name' placeholder="Name: " value="{{old('name')}}"/>
        <input name='description' placeholder="Description:" value="{{old('description')}}" />
        <input type="file" name="photo" id="">
        <button type="submit"> Enviar </button>
    </form>
@endsection