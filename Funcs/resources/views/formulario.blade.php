@extends('layout.app')
@section('conteudo')
<div class="container">
    <h2>Formulário de Cadastro</h2>
    
    @if (session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <form action="/store" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ old('nome') }}">
        @error('nome')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="sobrenome">Sobrenome:</label>
        <input type="text" id="sobrenome" name="sobrenome" value="{{ old('sobrenome') }}">
        @error('sobrenome')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}">
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="mensagem">Mensagem:</label>
        <textarea id="mensagem" name="mensagem">{{ old('mensagem') }}</textarea>
        @error('mensagem')
            <div class="error">{{ $message }}</div>
        @enderror

        <button type="submit">Enviar</button>
    </form>
</div>
@endsection