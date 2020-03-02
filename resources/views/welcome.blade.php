@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Cadastro de Usuário</h3>
                @livewire('user-create')
            </div>
            <div class="col-md-8">
                <h3>Lista de Usuário</h3>
                @livewire('user-list')
            </div>
        </div>
    </div>
@endsection
