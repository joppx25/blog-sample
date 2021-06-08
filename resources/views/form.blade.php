@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="formGroupExampleInput">Title</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Description</label>
                      <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter description">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
@stop