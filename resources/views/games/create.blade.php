@extends("layout")

@section('content')
<h1>Crear Nuevo Videojuego</h1>
<form method="POST" action="{{ route('games.store') }}">
    @csrf
    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="Ingresa el nombre del juego" required>
    </div>
    <div class="form-group">
        <label for="subtitle">Subtítulo</label>
        <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Ingresa el subtítulo (opcional)">
    </div>
    <div class="form-group">
        <label for="developer">Desarrollador</label>
        <input type="text" name="developer" class="form-control" id="developer" placeholder="Ingresa el desarrollador" required>
    </div>
    <div class="form-group">
        <label for="releaseDate">Fecha de Lanzamiento</label>
        <input type="date" name="releaseDate" class="form-control" id="releaseDate" required>
    </div>
    <div class="form-group">
        <label for="category">Categoría</label>
        <input type="text" name="category" class="form-control" id="category" placeholder="Ingresa la categoría" required>
    </div>
    <div class="form-group">
        <label for="price">Precio</label>
        <input type="number" step="0.01" name="price" class="form-control" id="price" placeholder="Ingresa el precio (opcional)">
    </div>
    <div class="form-group">
        <label for="stock">Stock</label>
        <input type="number" name="stock" class="form-control" id="stock" placeholder="Ingresa el stock disponible (opcional)">
    </div>
    <button type="submit" class="btn btn-primary">Guardar Videojuego</button>
</form>
<a href="{{ route('games.index') }}">Volver al listado</a>
@endsection