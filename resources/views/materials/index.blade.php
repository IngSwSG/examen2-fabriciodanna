<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Materiales</title>
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
        .table {
            background-color: #2e3c4f;
            color: #ffffff;
        }
        .table th {
            background-color: #1fa2ff;
            color: #fff;
        }
        .alert-success {
            background-color: #28a745;
            border-color: #28a745;
            color: white;
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <div class="card p-4">
        <h2 class="mb-4">Lista de Materiales</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Código</th>
                    <th>Unidad de Medida</th>
                    <th>Descripción</th>
                    <th>Ubicación</th>
                    <th>Categoría</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($materials as $material)
                    <tr>
                        <td>{{ $material->id }}</td>
                        <td>{{ $material->codigo }}</td>
                        <td>{{ $material->unidadMedida }}</td>
                        <td>{{ $material->descripcion }}</td>
                        <td>{{ $material->ubicacion }}</td>
                        <td>{{ $material->categoria->nombre ?? 'Sin categoría' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
