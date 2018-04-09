@extends('template')

@section('title', 'Index')

@section('content')
    <table class="table table-striped">
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>
                        <a href="{{ route('product-view', ['code' => $product->code]) }}">{{ $product->name }}</a><br>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection