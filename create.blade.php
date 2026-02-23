@extends('layouts.app')

@section('title', 'Add Product')

@section('content')

<div class="page-header">
    <h1>➕ Add New Product</h1>
</div>

<div class="card">
    <form action="{{ route('products.store') }}" method="POST" novalidate>
        @csrf

        {{-- Product Name --}}
        <div class="form-group">
            <label for="name">Product Name</label>
            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
                placeholder="e.g. Wireless Mouse"
                class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                autocomplete="off"
            />
            @error('name')
                <div class="error-msg">⚠ {{ $message }}</div>
            @enderror
        </div>

        {{-- Category --}}
        <div class="form-group">
            <label for="category">Category</label>
            <input
                type="text"
                id="category"
                name="category"
                value="{{ old('category') }}"
                placeholder="e.g. Electronics, Food, Clothing..."
                class="{{ $errors->has('category') ? 'is-invalid' : '' }}"
                autocomplete="off"
            />
            @error('category')
                <div class="error-msg">⚠ {{ $message }}</div>
            @enderror
        </div>

        {{-- Price & Quantity (side by side) --}}
        <div class="form-row">
            <div class="form-group">
                <label for="price">Price ($)</label>
                <input
                    type="number"
                    id="price"
                    name="price"
                    value="{{ old('price') }}"
                    placeholder="0.00"
                    step="0.01"
                    min="0"
                    class="{{ $errors->has('price') ? 'is-invalid' : '' }}"
                />
                @error('price')
                    <div class="error-msg">⚠ {{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input
                    type="number"
                    id="quantity"
                    name="quantity"
                    value="{{ old('quantity') }}"
                    placeholder="0"
                    min="0"
                    class="{{ $errors->has('quantity') ? 'is-invalid' : '' }}"
                />
                @error('quantity')
                    <div class="error-msg">⚠ {{ $message }}</div>
                @enderror
            </div>
        </div>

        {{-- Validation error summary --}}
        @if($errors->any())
            <div class="alert alert-error">
                ❌ Please fix the highlighted fields and try again.
            </div>
        @endif

        {{-- Actions --}}
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">💾 Save Product</button>
            <a href="{{ route('products.index') }}" class="btn btn-outline">Cancel</a>
        </div>
    </form>
</div>

@endsection
