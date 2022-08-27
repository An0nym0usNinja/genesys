@extends('layout.dark')

@section('content')
    <section class="align-center">
        <h1 class="text-neon-blue">{{ $heading }}</h1>
    </section>

    <section class="align-right">
        <a href="" class="btn-action btn-action-md">
            <img src="{{ asset('icons/add.png') }}" alt="">
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
                @foreach ($items as $item)

                    <tr data-bs-toggle="modal" data-bs-target="#itemShowModal{{$item->id}}">
                        <td>{{ $item->name }}</td>
                        <td class="text-center">
                            <a href="{{ route($route . '.edit', $item->id) }}" class="btn-action btn-action-sm">
                                <img src="{{ asset('icons/edit.png') }}" alt="">
                            </a>
                            <a href="#" class="btn-action btn-action-sm" data-bs-toggle="modal" data-bs-target="#itemDeleteModal{{$item->id}}">
                                <img src="{{ asset('icons/delete.png') }}" alt="">
                            </a>
                        </td>
                    </tr>

                    @include($route.'.show-modal')
                    @include('templates.delete-modal')
                @endforeach
            </tbody>
        </table>
    </section>

@endsection
