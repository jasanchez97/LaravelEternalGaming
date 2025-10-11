<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Juego - Eternal Gaming</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input, select { 
            width: 100%; 
            max-width: 400px;
            padding: 8px; 
            border: 1px solid #ddd; 
            border-radius: 4px; 
            box-sizing: border-box;
        }
        .btn {
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            margin-right: 10px;
        }
        .btn-primary { background: #007bff; color: white; }
        .btn-secondary { background: #6c757d; color: white; }
    </style>
</head>
<body>
    <h1>Editar Juego: {{ $game->name }}</h1>

    <form method="POST" action="{{ route('games.update', $game->id) }}">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" id="name" value="{{ old('name', $game->name) }}" required>
        </div>

        <div class="form-group">
            <label for="subtitle">Subtítulo</label>
            <input type="text" name="subtitle" id="subtitle" value="{{ old('subtitle', $game->subtitle) }}">
        </div>

        <div class="form-group">
            <label for="developer">Desarrollador</label>
            <input type="text" name="developer" id="developer" value="{{ old('developer', $game->developer) }}" required>
        </div>

        <div class="form-group">
            <label for="releaseDate">Fecha de Lanzamiento</label>
            <input type="date" name="releaseDate" id="releaseDate" value="{{ old('releaseDate', $game->releaseDate) }}" required>
        </div>

        <div class="form-group">
            <label for="category">Categoría</label>
            <input type="text" name="category" id="category" value="{{ old('category', $game->category) }}" required>
        </div>

        <div class="form-group">
            <label for="price">Precio (€)</label>
            <input type="number" step="0.01" name="price" id="price" value="{{ old('price', $game->price) }}">
        </div>

        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" name="stock" id="stock" value="{{ old('stock', $game->stock) }}">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Juego</button>
        <a href="{{ route('games.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</body>
</html>