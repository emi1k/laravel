@extends('template')

@section('title' 'Добавить товар')

@section('content')
    <h1>Добавить товар</h1>
    <form method="post" action="{{ route('admin-product-add') }}">
        {{ csrf_field() }}

        <div class>
            
        </div>
    </form>

@endsection