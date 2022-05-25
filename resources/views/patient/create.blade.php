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
            <a href="{{ route('patients.index') }}" class="btn btn-sm btn-secondary mb-2">Lista de Pacientes</a>
        </div>
        <form class="card card-body" method="POST" action="{{ route('patients.store') }}">
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

                <div class="form-group col-md-2">
                    <label for="age">Idade</label>
                    <input type="number"
                           class="form-control"
                           required
                           id="age"
                           name="age">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="weight">Peso</label>
                    <input type="number"
                           class="form-control"
                           required
                           id="weight"
                           name="weight">
                </div>

                <div class="form-group col-md-6">
                    <label for="height">Altura</label>
                    <input type="text"
                           class="form-control"
                           required
                           id="height"
                           onchange="this.value = this.value.replace(/,/g, '.')"
                           name="height">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-12">
                    <label for="address">Endereço</label>
                    <input type="text"
                           class="form-control"
                           required
                           id="address"
                           name="address">
                </div>
            </div>

            <div class="form-group col-md-6 mt-2">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>

        </form>
    </div>
@endsection
