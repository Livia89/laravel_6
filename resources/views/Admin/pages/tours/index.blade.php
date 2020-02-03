@extends('Admin.layouts.template')

@section('title', 'teste')

@section('content')

    <a href="{{route('tours.create')}}"> Cadastrar </a> 
    <h1> Exibindo os produtos </h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>preço</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tours as $tour)
                <tr>
                <td>{{$tour->name}}</td>
            <td>{{$tour->price}}</td>
                <td><a href="">Detalhes</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $tours->links()}}
    
    {{--@component('admin.components.cards')
        @slot('title')
            <h1>titulo do card</h1>    
        @endslot
        
        @slot('oi')
            <h1>Este é o oi</h1>    
        @endslot
        
    @endcomponent --}}

    {{-- @include('admin.alerts.alerts', ['content' => 'alerta de preços de produtos']) --}}
    
  {{-- <!-- @foreach ($products as $product)
        <p class="@if($loop->last) last @endif">{{ $product }}</p>
    @endforeach
    
    @forelse ($products as $product)
        <p class="@if($loop->first) last @endif">{{ $product }}</p>
    @empty
        <h1>Não existem produtos </h1>    
    @endforelse    

    @unless ($oi === '132')
        lalal
    @endunless

    
    @isset($lalalaa)
        {{ $lalala }}
    @else
        não existe
    @endisset

    
    @empty($oi2)
        vazio
    @endempty
    
    
    @auth
        <p>autenticado</p>
    @else
        <p>não autenticado</p>
    @endauth


    @guest
        não autenticado 2 
    @else
        autenticado 2
    @endguest --> --}}

@endsection

@push('styles')
<style>
    .last{background: red;}
</style>
@endpush

{{--@push('scripts')
    <script>
        alert("oi");
    </script>
@endpush --}}

