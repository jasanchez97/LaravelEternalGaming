@extends('layouts.app')

@section('title', 'Editar Juego - Eternal Gaming')

@section('content')
<div class="form-container">
    <h1>Editar Juego: {{ $game->name }}</h1>

    <form method="POST" action="{{ route('games.update', $game->id) }}">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" 
                   value="{{ old('name', $game->name) }}" required>
        </div>

        <div class="form-group">
            <label for="subtitle">Subtítulo</label>
            <input type="text" name="subtitle" id="subtitle" class="form-control" 
                   value="{{ old('subtitle', $game->subtitle) }}">
        </div>

        <div class="form-group">
            <label for="developer">Desarrollador</label>
            <input type="text" name="developer" id="developer" class="form-control" 
                   value="{{ old('developer', $game->developer) }}" required>
        </div>

        <div class="form-group">
            <label for="releaseDate">Fecha de Lanzamiento</label>
            <input type="date" name="releaseDate" id="releaseDate" class="form-control" 
                   value="{{ old('releaseDate', $game->releaseDate) }}" required>
        </div>

        <div class="form-group">
            <label for="category">Categoría</label>
            <input type="text" name="category" id="category" class="form-control" 
                   value="{{ old('category', $game->category) }}" required>
        </div>

        <div class="form-group">
            <label for="price">Precio (€)</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control" 
                   value="{{ old('price', $game->price) }}">
        </div>

        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" name="stock" id="stock" class="form-control" 
                   value="{{ old('stock', $game->stock) }}">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Juego</button>
        <a href="{{ route('games.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection