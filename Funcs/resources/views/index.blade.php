@extends('layout.app')

@section('conteudo')
<div class="profile-header">
    <h2>Perfil de Usuário</h2>
    <a href="/create" class="btn-create">Criar Novo</a>
</div>
<div class="profile-body">
    @foreach($valores as $valor)
        <div class="profile-info">
            <div><strong>Nome:</strong> {{ $valor->nome }}</div>
            <div><strong>Sobrenome:</strong> {{ $valor->sobrenome }}</div>
            <div><strong>Email:</strong> {{ $valor->email }}</div>
            <div><strong>Mensagem:</strong> {{ $valor->mensagem }}</div>
            <div class="profile-actions">
                <a href="/{{ $valor->id }}/edit" class="btn-edit">Editar</a>
                <form action="/delete" method="post" id="form-delete-{{ $valor->id }}" class="delete-form">
                    @method('DELETE')
                    <input type="hidden" name="id" value="{{ $valor->id }}">
                    @csrf
                    <a href="javascript:var c = confirm('Deseja realmente excluir o perfil?'); if (c) { document.getElementById('form-delete-{{ $valor->id }}').submit(); }" class="btn-delete">Deletar Perfil</a>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
