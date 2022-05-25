@extends('layouts.app')

@section('content')
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('doctors.index') }}">Médicos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('patients.index') }}">Pacientes</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="d-flex justify-content-between">
            <h2>Cadastrar Paciente</h2>
            <a href="{{ route('doctors.index') }}" class="btn btn-sm btn-secondary mb-2">Lista de Médicos</a>
        </div>
        <form class="card card-body" method="POST" action="{{ route('doctors.store') }}">
            @csrf
            <div class="row">
                <div class="form-group col-md-10">
                    <label for="name">Nome</label>
                    <input type="text"
                           class="form-control"
                           id="name"
                           required
                           name="name">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="specialty">Especialidade</label>
                    <input type="text"
                           class="form-control"
                           required
                           id="specialty"
                           name="specialty">
                </div>

                <div class="form-group col-md-6">
                    <label for="crm">CRM</label>
                    <input type="text"
                           class="form-control"
                           required
                           id="crm"
                           name="crm">
                </div>
            </div>

            <div class="form-group col-md-6 mt-2">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>

        </form>
    </div>
@endsection
