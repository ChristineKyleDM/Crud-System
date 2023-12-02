@extends('layouts.app')
<a href="{{ route('categories.create') }}">Create New Category</a>
@foreach ($categories as $category)
    <p>{{ $category->name }} 
        <a href="{{ route('categories.edit', $category->id) }}">Edit</a>
        <form method="POST" action="{{ route('categories.destroy', $category->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </p>
@endforeach
