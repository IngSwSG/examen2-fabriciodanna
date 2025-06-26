<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Material</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            background-color: #1e2a38;
            color: #ffffff;
        }
        .card {
            background-color: #2e3c4f;
            border: none;
            border-radius: 8px;
        }
        .form-control {
            background-color: #38495e;
            color: #ffffff;
            border: 1px solid #5a6b7e;
        }
        .form-control:focus {
            background-color: #3f516b;
            color: #ffffff;
        }
        .btn-primary {
            background-color: #1fa2ff;
            border-color: #1fa2ff;
        }
        .btn-primary:hover {
            background-color: #0d8ae6;
            border-color: #0d8ae6;
        }
        label {
            color: #aad4ff;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="card p-4">
        <h2 class="mb-4">Editar Material</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('materials.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" name="id" value="{{ old('id') }}" required>
            </div>

            <div class="form-group">
                <label for="unidadMedida">Unidad de Medida</label>
                <input type="text" class="form-control" id="unidadMedida" name="unidadMedida" value="{{ old('unidadMedida') }}" required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input type="text" class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion') }}" required>
            </div>

            <div class="form-group">
                <label for="ubicacion">Ubicación</label>
                <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="{{ old('ubicacion') }}" required>
            </div>

            <div class="form-group">
                <label for="idCategoria">Categoría</label>
                <select class="form-control" id="idCategoria" name="idCategoria" required>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->idCategoria }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
</body>
</html>
