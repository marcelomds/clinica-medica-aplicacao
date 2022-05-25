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
            <h2>Médicos Cadastrados</h2>
            <a href="{{ route('doctors.create') }}"  class="btn btn-sm btn-secondary mb-2">Cadastrar Médico</a>
        </div>

        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Nome</th>
                    <th>Especialidade</th>
                    <th>CRM</th>
                </tr>
            </thead>
            <tbody>
                @forelse($doctors as $doctor)
                    <tr>
                        <td> {{ $doctor->name  }} </td>
                        <td> {{ $doctor->specialty  }} </td>
                        <td> {{ $doctor->crm  }} </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Não há Médicos cadastrados</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
