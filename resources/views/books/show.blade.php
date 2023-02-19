@extends('layouts.app')

@section('title', 'Show book')

@section('main-content')
    <section class="container">
        @if (session('message'))
        <div class="row">
            <div class="col-12">
                <div class="alert alert-{{ session('alert-type') }}">{{ session('alert-message') }}</div>    
            </div>
        </div>    
        @endif
        <div class="row">
  
            <div class="col-12">

                <div class="card">
                    <div class="card-header ">
                        <div class="row">
                            <div class="col-8">
                                <div class="card-title">
                                    <h2>{{ $book->title }}</h2>
                                </div>

                            </div>
                            <div class="col-4 text-end">
                                <a href="{{ route('books.index') }}" class="btn btn-success"><i class="fa-solid fa-arrow-left"></i></i>&nbsp;Books</a>
                                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning"><i class="fa-solid fa-edit"></i>&nbsp;Edit</a>
                                <form class="d-inline delete" action="{{ route('books.destroy', $book->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i>&nbsp;Delete</button>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <div class="card-image">
                                    <img src="{{ $book->thumb }}" alt="{{ $book->title }}" class="img-fluid">
                                </div> 
                            </div>                
                            <div class="col-3">
                                <table width="100%">
                                    <tr><td width="25%">ISBN</td><td><b>{{ $book->ISBN }}</b></td></tr>
                                    <tr><td>author</td><td><b>{{ $book->author }}</b></td></tr>
                                    <tr><td>pages</td><td><b>{{ $book->pages }}</b></td></tr>
                                    <tr><td>price</td><td><b>{{ $book->price }}</b></td></tr>
                                    <tr><td>year</td><td><b>{{ $book->year }}</b></td></tr>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    @vite('resources/js/confirmDelete.js')
@endsection
