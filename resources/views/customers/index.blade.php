@extends('layouts.app')

@section('title', 'CRUD')

@section('content')

    <a href="{{ route('home') }}">Create customer</a>

    <table class="table">
        <tr>
            <th>Sr no</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Date</th>
            <th>Contract category</th>
            <th>Country</th>
            <th>Image</th>
            <th>Comment</th>
            <th>Sports</th>
            <th>Gender</th>
            <th colspan="2">Action</th>

        </tr>
        @foreach ($customers as $index => $value)
            <tr>
                <td>{{ ++$index }}</td>
                <td>{{ $value->first_name }}</td>
                <td>{{ $value->last_name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->number }}</td>
                <td>{{ $value->date }}</td>
                <td>{{ $value->contractCategory }}</td>
                <td>{{ implode(', ', json_decode($value->country)) }}</td>
                <td>
                    <img src="{{ Storage::url($value->image) }}" title="customer's image" alt="Customer image" height="100px"
                        width="100px">
                </td>
                <td>{{ $value->comment }}</td>
                <td>{{ implode(', ',json_decode($value->sports)) }}</td>
                <td>{{ $value->gender }}</td>
                <td>
                    <a href="">Edit</a>
                    <a href="">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection

@extends('layouts.footer')
