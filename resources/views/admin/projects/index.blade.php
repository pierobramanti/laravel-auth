@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="mb-4">Projects List</h1>
                
                <a href="" class="btn btn-primary mb-4">Aggiungi Progetto</a>
            </div>

            <!-- Tabella Progetti -->
            <div class="col-12 mt-4">
                <table class="table table-hover table-striped table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Description</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->title }}</td>
                            <td>{{ $project->slug }}</td>
                            <td>{{ $project->description }}</td>
                            <td>{{ $project->date }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

