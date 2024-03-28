@extends('layouts.app')

@section('title', 'CRUD')

@section('content')

    <a href="{{ route('home') }}">Create customer</a>
    <br><br>

    <form action="" method="get">
        <div class="input-group mb-3">
            <input type="text" name="search" value="{{ request()->get('search') }}" class="form-control"
                placeholder="Search..." aria-label="Search" aria-describedby="button-addon2" id="">
            <button class="btn btn-success" type="submit" id="button-addon2">Search</button>
        </div>
    </form>
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
                <td>{{ $value->country != null ? implode(', ', json_decode($value->country)) : '' }}</td>
                <td>
                    <img src="{{ Storage::url($value->image) }}" title="customer's image" alt="Customer image"
                        height="100px" width="100px">
                </td>
                <td>{{ $value->comment }}</td>
                <td>{{ $value->sports != null ? implode(', ', json_decode($value->sports)) : '' }}</td>
                <td>{{ $value->gender }}</td>
                <td>
                    <a href="{{ route('editCustomer', $value->id) }}" title="Edit customer"><i
                            class="bi bi-pencil"></i></a>
                    <a href="{{ route('deleteCustomer', $value->id) }}"
                        onclick="return confirm(`are sure wanted to delete this customer {{ $value->first_name }} {{ $value->last_name }}`)"
                        title="Delete customer">
                        <i class="bi bi-trash"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $customers->links() }}
@endsection

@extends('layouts.footer')
