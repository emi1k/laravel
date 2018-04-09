@extends('template')

@section('title', '{{ $product->name }}')

@section('content')
    <h1>
        {{ $product->name }}
    </h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <td>
                    Название
                </td>
                <td>
                    Символьный код
                </td>
                <td>
                    Количество
                </td>
                <td>
                    Цена
                </td>
                <td>
                    Активность
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    {{ $product->name }}
                </td>
                <td>
                    {{ $product->code }}
                </td>
                <td>
                    {{ $product->quantity }}
                </td>
                <td>
                    {{ $product->price }}
                </td>
                <td>
                    {{ $product->active }}
                </td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('index') }}">Назад</a>
@endsection