@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles del Cliente</h1>
    <p><strong>Nome:</strong> {{ $clientes->nome }}</p>
    <p><strong>Email:</strong> {{ $clientes->email }}</p>
    <p><strong>Teléfono:</strong> {{ $clientes->telefone }}</p>
    <a href="{{ route('clientes.index') }}" class="btn btn-primary">Volver a la lista</a>
</div>
@endsection
