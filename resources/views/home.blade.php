@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Dashboard') }}
                    <div class="float-right">
                        <a href="{{ route('create') }}" class="btn btn-primary">Create</a>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @auth
                        <table class="table table-bordered">
                            <thead>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Created</th>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->description }}</td>
                                        <td>{{ $blog->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>    
                    @endauth
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
