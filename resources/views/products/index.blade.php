@extends('layouts.app')

@section('content')
    <h1>All Products</h1>

    @if ($products->isEmpty())
        <p>No products found.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Category</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>${{ $product->price }}</td>
                        <td>{{ optional($product->category)->name ?: 'Uncategorized' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
