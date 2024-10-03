@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Projects</h2>
            </div>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>TITLE</td>
                            <td>DESCRIPTION</td>
                            <td>REPOSITORY</td>
                            <td>TECHNOLOGIES</td>
                            <td>STATUS</td>
                            <td>START DATE</td>
                            <td>END DATE</td>
                            <td>SLUG</td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->description }}</td>
                                <td>{{ $project->repository }}</td>
                                <td>{{ $project->technologies }}</td>
                                <td>{{ $project->status }}</td>
                                <td>{{ $project->start_date }}</td>
                                <td>{{ $project->end_date }}</td>
                                <td>{{ $project->slug }}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
