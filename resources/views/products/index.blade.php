@extends('layouts.app')

@section('title', 'Products - Small Store')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="fw-bold mb-0"><i class=""></i> Product Inventory</h2>
            <a href="{{ route('products.create') }}" class="btn btn-gradient text-white px-4">
                <i class="bi bi-plus-lg"></i> Add New Product
            </a>
        </div>

        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle-fill"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
        @endif

        <div class="card">
            <div class="card-body p-0">
                @if($products->count() > 0)
                <div class="table-responsive">
                    <table class="table table-hover table-striped mb-0">
                        <thead>
                            <tr>
                                <th class="px-4 py-3">ID</th>
                                <th class="py-3">Product Name</th>
                                <th class="py-3">Category</th>
                                <th class="py-3">Price</th>
                                <th class="py-3">Quantity</th>
                                <th class="py-3">Added On</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td class="px-4 py-3 fw-semibold">#{{ $product->id }}</td>
                                <td class="py-3">{{ $product->name }}</td>
                                <td class="py-3"><span class="badge bg-light text-dark">{{ $product->category }}</span></td>
                                <td class="py-3 fw-bold text-success">${{ number_format($product->price, 2) }}</td>
                                <td class="py-3">
                                    <span class="badge {{ $product->quantity > 10 ? 'bg-success' : 'bg-warning' }}">
                                        {{ $product->quantity }} in stock
                                    </span>
                                </td>
                                <td class="py-3 text-muted">{{ $product->created_at->format('M d, Y') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <div class="text-center py-5">
                    <i class="bi bi-inbox display-1 text-muted"></i>
                    <p class="text-muted mt-3">No products found. Add your first product!</p>
                    <a href="{{ route('products.create') }}" class="btn btn-gradient text-white mt-2">
                        <i class="bi bi-plus-lg"></i> Add Product
                    </a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
