@extends('layouts.dashboard')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mb-4">{{ $project->title }}</h1>
            </div>

            <div class="col-12 text-center">
                <a href="" class="btn btn-secondary mb-4">Torna alla lista progetti</a>
                <a href="" class="btn btn-warning mb-4">Modifica Progetto</a>
            </div>

            <!-- Dettagli del Progetto -->
            <div class="col-12 mt-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Dettagli del progetto</h5>
                        <ul class="list-unstyled">
                            <li><strong>Slug:</strong> {{ $project->slug }}</li>
                            <li><strong>Description:</strong> {{ $project->description ?? 'Nessuna descrizione disponibile' }}</li>
                            <li><strong>Date:</strong> {{ $project->date }}</li>
                        </ul>
                        <form action="" method="POST" class="mt-3">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro di voler cancellare questo progetto?')">Elimina Progetto</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


