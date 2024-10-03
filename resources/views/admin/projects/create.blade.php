@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="pt-5 pb-2">
                    <h2>New Project</h2>
                </div>
            </div>
            <div class="col-12">
                <form action="{{ route('admin.projects.store') }}" method="post">
                    @csrf
                    <div class="row gy-4">
                        <div class="col-4">
                            <label for="" class="control-label">Title</label>
                            <input type="text" name="title" id="title" placeholder="..."
                                class="form-control form-control-sm" value="{{ old('title') }}">
                        </div>
                        <div class="col-4">
                            <label for="" class="control-label">Technologies</label>
                            <input type="text" name="technologies" id="technologies" placeholder="..."
                                class="form-control form-control-sm" value="{{ old('technologies') }}">
                        </div>
                        <div class="col-4">
                            <label for="" class="control-label">Repository</label>
                            <input type="url" name="repository" id="repository" class="form-control form-control-sm"
                                value="{{ old('repository') }}">
                        </div>
                        <div class="col-4">
                            <label for="" class="control-label">Status</label>
                            <input type="text" name="status" id="status" placeholder="..."
                                class="form-control form-control-sm" value="{{ old('status') }}">
                        </div>

                        <div class="col-4">
                            <label for="" class="control-label">Start Date</label>
                            <input type="date" name="start_date" id="start_date" class="form-control form-control-sm"
                                value="{{ old('start_date') }}">
                        </div>

                        <div class="col-4">
                            <label for="" class="control-label">End Date</label>
                            <input type="date" name="start_date" id="end_date" class="form-control form-control-sm"
                                value="{{ old('end_date') }}">
                        </div>

                        <div class="col-12">
                            <label for="" class="control-label">Description</label>
                            <textarea name="description" id="description" rows="10" cols="30" class="form-control form-control-sm"
                                value="{{ old('description') }}">...</textarea>
                        </div>

                        <div class="col-12">
                            <div class="pt-1">
                                <button type="submit" class="btn btn-success">Add</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
