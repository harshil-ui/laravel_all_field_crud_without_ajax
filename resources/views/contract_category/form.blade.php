<!-- resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'CRUD')

@section('content')

    <form action="{{ route('insert-contract') }}" method="post">
        @csrf
        <div class="mt-3">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-3">
                        <label for="name">Name: </label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter name">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </div>
        </div>

    </form>

@endsection
