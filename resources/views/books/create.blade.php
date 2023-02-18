@extends('layouts.app')

@section('title', 'Create new book')

@section('main-content')
<section class="container">
  @include('books.partials.form', ["title" => "Create new book", "route" => 'books.store', 'idForm'=>'create-form', 'methodRoute' => 'POST', 'btnClass' => 'create-btn'])
</section>
@endsection