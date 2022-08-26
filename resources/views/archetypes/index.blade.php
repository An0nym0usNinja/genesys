@extends('layout.dark')

@section('content')

    <section class="align-right">
        <a href="" class="btn-action btn-action-md">
            <img src="{{asset('icons/add.png')}}" alt="">
        </a>
    </section>
    
    <section>
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
                        <td class="text-center">
                            <a href="" class="btn-action btn-action-sm">
                                <img src="{{asset('icons/edit.png')}}" alt="">
                            </a>
                            <a href="" class="btn-action btn-action-sm">
                                <img src="{{asset('icons/delete.png')}}" alt="">
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

@endsection