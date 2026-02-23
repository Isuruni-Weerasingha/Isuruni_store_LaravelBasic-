@extends('layouts.app')

@section('title', 'Add Product - Small Store')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6 col-md-8">
        <div class="text-center mb-4">
            <h2 class="fw-bold"><i class="bi bi-plus-circle text-primary"></i> Add New Product</h2>
            <p class="text-muted">Fill in the details to register a new product</p>
        </div>

        <div class="card">
            <div class="card-body p-4">
                <form action="{{ route('products.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold">Product Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                               id="name" name="name" value="{{ old('name') }}" 
                               placeholder="Enter product name">
                        @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label fw-semibold">Category</label>
                        <input type="text" class="form-control @error('category') is-invalid @enderror" 
                               id="category" name="category" value="{{ old('category') }}" 
                               placeholder="e.g., Electronics, Clothing, Food">
                        @error('category')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="price" class="form-label fw-semibold">Price ($)</label>
                            <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" 
                                   id="price" name="price" value="{{ old('price') }}" 
                                   placeholder="0.00">
                            @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="quantity" class="form-label fw-semibold">Quantity</label>
                            <input type="number" class="form-control @error('quantity') is-invalid @enderror" 
                                   id="quantity" name="quantity" value="{{ old('quantity') }}" 
                                   placeholder="0">
                            @error('quantity')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="d-grid gap-2 mt-4">
                        <button type="submit" class="btn btn-gradient text-white py-2 fw-semibold">
                            <i class="bi bi-check-lg"></i> Save Product
                        </button>
                        <a href="{{ route('products.index') }}" class="btn btn-outline-secondary">
                            <i class="bi bi-arrow-left"></i> Back to Products
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
