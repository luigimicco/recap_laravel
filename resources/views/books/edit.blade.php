@extends('layouts.app')

@section('title', 'Edit book')

@section('main-content')
<section class="container">
  @include('books.partials.form', ["title" => "Edit book", "route" => 'books.update', 'idForm'=>'edit-form', 'methodRoute' => 'PUT', 'btnClass' => 'edit-btn'])
</section>
@endsection