@extends('layouts.app')

@section('title', 'Show book')

@section('main-content')
    <section class="container">
        @if (session('message'))
        <div class="row">
            <div class="col-12">
                <div class="alert alert-{{ session('alert-type') }}">{{ session('message') }}</div>    
            </div>
        </div>    
        @endif
        <div class="row">
  
            <div class="col-12">

                <div class="card">
                    <div class="card-header ">
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning">Edit</a>
                        <form class="d-inline delete" action="{{ route('books.destroy', $book->id) }}" method="POST"
                            data-element-name="{{ $book->title }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <div class="card-image">
                                    <img src="{{ $book->thumb }}" alt="{{ $book->title }}" class="img-fluid">
                                </div> 
                            </div>                
                            <div class="col-3">
                                <div class="card-title">
                                    <h3>{{ $book->ISBN }}</h3>
                                    <h2>{{ $book->title }}</h2>
                                </div>

                                <div>pages: <b>{{ $book->pages }}</b></div>
                                <div>price: <b>{{ $book->price }} &euro;</b></div>
                                <div>year: <b>{{ $book->year }}</b></div>
                                <div ><h3>{{ $book->author }}</h3></div>
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
