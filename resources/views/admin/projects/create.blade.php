@extends('layouts.dashboard')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Aggiungi un nuovo progetto</h2>
        </div>
        <div class="col-12">
            <form action="{{ route('admin.projects.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-12 mb-3">
                        <label for="title" class="control-label">Nome Progetto</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="description" class="control-label">Descrizione</label>
                        <textarea name="description" id="description" class="form-control" rows="4" placeholder="Inserisci una descrizione (opzionale)"></textarea>
                    </div>
                    <div class="col-12 mb-3">
                        <label for="date" class="control-label">Data</label>
                        <input type="date" name="date" id="date" class="form-control" required>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Salva Progetto</button>
                    </div>
                </div>
            </form>   
        </div>
    </div>
</div>


@endsection