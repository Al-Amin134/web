@extends('layout')

@section('page-content')
    <legend>Create Book</legend>
    <form method="POST" action="{{ route('update') }}">
        @csrf
        <input type="hidden" name='id' value="{{ $book->id }}">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Book title" value="{{ old('title',$book->title) }}">
                @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            </div>

              <div class="mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" name="author" placeholder="Author name" value="{{ old('author',$book->Author) }}">
                @error('author')
                <div class="text-danger">{{ $message }}</div>
            @enderror  
            </div>

              <div class="mb-3">
                <label for="isbn" class="form-label">ISBN</label>
                <input type="text" class="form-control" name="isbn" placeholder="Isbn" value="{{ old('isbn',$book->isbn) }}">
                @error('isbn')
                <div class="text-danger">{{ $message }}</div>
            @enderror 
            </div>

              <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="text" class="form-control" name="stock" placeholder="Stock" value="{{ old('stock',$book->stock) }}">
                @error('stock')
                <div class="text-danger">{{ $message }}</div>
            @enderror  
            </div>

              <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" placeholder="Price"value="{{ old('price',$book->price) }}">
                @error('price')
                <div class="text-danger">{{ $message }}</div>
            @enderror  
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
       <a href="{{ url('/') }}" class="btn btn-danger">Back</a>
       
      </form>

@endsection



