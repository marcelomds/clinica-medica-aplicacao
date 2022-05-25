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
            <h2>Pacientes Cadastrados</h2>
            <a href="{{ route('patients.create') }}"  class="btn btn-sm btn-secondary mb-2">Cadastrar Paciente</a>
        </div>

        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Peso - Kg</th>
                    <th>Altura</th>
                    <th>Endereço</th>
                </tr>
            </thead>
            <tbody>
                @forelse($patients as $patient)
                    <tr>
                        <td> {{ $patient->name  }} </td>
                        <td> {{ $patient->age  }} </td>
                        <td> {{ $patient->weight  }} </td>
                        <td> {{ $patient->height  }} </td>
                        <td> {{ $patient->address  }} </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Não há Pacientes cadastrados</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
