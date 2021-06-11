@extends('layouts.base')

@section('title')
    <h1>Liste Docteurs</h1>
@endsection

@section('contents')
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Name</th>
            <th>Specialités</th>
            <th>Adresse</th>
            <th>Telephone</th>
        </tr>
        @foreach ($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->name }} </td>
                    <td>{{ $doctor->speciality->name }}</td>
                    <td>{{ $doctor->address }}</td>
                    <td>{{ $doctor->phone }}</td>
                </tr>
        @endforeach
    </table>
@endsection