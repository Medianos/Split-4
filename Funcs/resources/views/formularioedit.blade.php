@extends('layout.app')
@section('conteudo')
<div class="profile-edit-container">
    <form action="/update" method="post" class="profile-edit-form">
        @csrf
        <input type="hidden" name="id" value="{{ $reg->id }}">
        @method('PUT')
        <h1>Editar Perfil de Usuário</h1>
        <div class="form-group">
            <label for="nome">Editar Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ $reg->nome }}">
        </div>
        <div class="form-group">
            <label for="sobrenome">Editar Sobrenome:</label>
            <input type="text" id="sobrenome" name="sobrenome" value="{{ $reg->sobrenome }}">
        </div>
        <div class="form-group">
            <label for="email">Editar Email:</label>
            <input type="email" id="email" name="email" value="{{ $reg->email }}">
        </div>
        <div class="form-group">
            <label for="mensagem">Editar Mensagem:</label>
            <textarea id="mensagem" name="mensagem">{{ $reg->mensagem }}</textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn-save">Salvar</button>
        </div>
    </form>
</div>
@endsection
