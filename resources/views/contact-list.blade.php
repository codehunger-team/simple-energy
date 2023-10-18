@extends('layouts.admin')

@section('main-content')
    <div>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($contacts as $contact)
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->mobile }}</td>
                        <td>{{ $contact->email }}</td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
@endsection
