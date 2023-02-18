@extends('layouts/app')

@include('partials.popup')

@section('main-content')
    <section class="container">
        <div class="row">

            <div class="col-12 ">
                <div class="card">
                    <div class="card-header">
                        <h2>Recycled bin</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-condensed table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">ISBN</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Soldaout</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($books as $book)
                                    <tr>
                                        <th>{{ $book->ISBN }}</th>
                                        <td>{{ $book->title }}</td>
                                        <td>{{ $book->author }}</td>
                                        <td>{{$book->soldout ? 'soldout': '' }}</td>
                                        <td>
                                            <a href="{{ route('books.restore', $book->id) }}" class="btn btn-success" title="restore"><i class="fa-solid fa-recycle"></i></a>
                                            <form class="d-inline delete double-confirm" action="{{route('books.force-delete', $book->id)}}" method="POST" data-element-name="{{ $book->title }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" title="delete"><i class="fa-solid fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <h2>
                                        No items
                                    </h2>
                                @endforelse
        
                            </tbody>
                        </table>
        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    @vite('resources/js/confirmDelete.js')
@endsection