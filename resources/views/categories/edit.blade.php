@extends('layouts.app')
<form method="POST" action="{{ route('categories.update', $category->id) }}">
    @csrf
    @method('PATCH')
    <input type="text" name="name" value="{{ $category->name }}">
    <button type="submit">Update Category</button>
</form>
