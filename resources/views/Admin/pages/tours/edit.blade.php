@extends('Admin.layouts.template')

@section('title', 'Editar tour')

@section('content')
<h1>Editar Tour {{ $id }}</h1>
<form action="{{ route('tours.update', $id)}}" method="post">
    @csrf
    @method('PUT')
    <input name='name' placeholder="Name: "/>
    <input name='description' placeholder="Description:" />
    <button type="submit"> Enviar </button>
</form>
@endsection