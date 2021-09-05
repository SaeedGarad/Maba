@extends('admin.adminLayout')
@section('content')

        <hr />
        <h1 style="display: inline-block;">Users</h1>
        <hr />
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Processes</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->firstName }}</td>
                    <td>{{ $user->lastName }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone }}</td>
                    <td>
                        {{--  <a href="/admin/users/{{ $user->id }}/edit" class="btn btn-success">Edit</a> |  --}}
                        <a href="/profile" class="btn btn-success">Edit</a> |
                        <a href="/admin/users/delete/{{ $user->id }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

@endsection
