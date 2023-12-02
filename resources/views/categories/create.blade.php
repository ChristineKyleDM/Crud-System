@extends('layouts.app')
<form method="POST" action="{{ route('categories.store') }}">
    @csrf
    <input type="text" name="catname" placeholder="Category Name">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="description" placeholder="Description">
    <input type="number" name="price" placeholder="Price">
    <button type="submit">Create Category</button>
</form>
