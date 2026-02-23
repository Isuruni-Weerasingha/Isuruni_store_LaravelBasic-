@extends('layouts.app')

@section('title', 'All Products')

@section('content')

<div class="page-header">
    <h1>📦 Product List</h1>
    <a href="{{ route('products.create') }}" class="btn btn-primary">
        + Add New Product
    </a>
</div>

<div class="card">
    @if($products->isEmpty())
        <div class="empty-state">
            <div style="font-size:3rem;">🗃️</div>
            <p>No products registered yet.</p>
            <br>
            <a href="{{ route('products.create') }}" class="btn btn-primary">Register First Product</a>
        </div>
    @else
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Registered</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $index => $product)
                    <tr>
                        <td style="color: var(--muted); font-size:.85rem;">{{ $index + 1 }}</td>
                        <td><strong>{{ $product->name }}</strong></td>
                        <td><span class="badge">{{ $product->category }}</span></td>
                        <td class="price">${{ number_format($product->price, 2) }}</td>
                        <td>{{ number_format($product->quantity) }}</td>
                        <td style="color: var(--muted); font-size:.85rem;">{{ $product->created_at->format('M d, Y') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <p style="margin-top:1rem; font-size:.85rem; color: var(--muted);">
            Showing {{ $products->count() }} product(s)
        </p>
    @endif
</div>

@endsection
