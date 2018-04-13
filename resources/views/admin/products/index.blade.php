@extends('template')

@section('title', 'Товары')

@section('content')
    <h1>Товары</h1>
    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif
    <a href="{{ route('admin-products-create') }}" class="btn">Новый</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <td>
                    #
                </td>
                <td>
                    Имя
                </td>
                <td>
                    Код
                </td>
                <td>
                    Цена
                </td>
                <td>
                    Количество
                </td>
                <td>
                    Активность
                </td>
                <td>
                    #
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>
                        {{ $product->id }}
                    </td>
                    <td>
                        {{ $product->name }}
                    </td>
                    <td>
                        {{ $product->code }}
                    </td>
                    <td>
                        {{ $product->price }}
                    </td>
                    <td>
                        {{ $product->quantity }}
                    </td>
                    <td>
                        @if ($product->active)
                            Активен
                        @else
                            Не активен
                        @endif
                    </td>
                    <td>
                        <div class="btn-block">
                            <a href="{{ route('admin-products-edit', ['id' => $product->id]) }}" class="btn btn-info">Изменить</a>
                            <a href="{{ route('admin-products-delete', ['id' => $product->id]) }}" class="btn btn-danger">Удалить</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection