@extends('layout.dark')

@section('content')

    <table class="table table-dark table-hover table-sm index-table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($archetypes as $archetype)
                <tr>
                    <td>{{$archetype->name}}</td>
                    <td class="text-neon-blue text-center">CRB</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection