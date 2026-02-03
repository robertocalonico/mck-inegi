<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h1 class="mb-4">Estados</h1>
    <div class="table-responsive">
        <table id="tabla-estados" class="table table-striped align-middle">
            <thead>
                <tr>
                    <th>CVEGEO</th>
                    <th>CVE_AGEE</th>
                    <th>NOMBRE</th>
                    <th>ABREVIATURA</th>
                    <th>POB</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($estados as $estado)
                <tr>
                    <td>{{ $estado->cvegeo }}</td>
                    <td>{{ $estado->cve_agee }}</td>
                    <td>{{ $estado->nom_agee }}</td>
                    <td>{{ $estado->nom_abrev }}</td>
                    <td>{{ number_format($estado->pob) }}</td>
                    <td>
                        <a class="btn btn-sm btn-primary w-100" href="{{ route('estados.show', $estado) }}">
                            Ver
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>
<script>
    new DataTable('#tabla-estados');
</script>
</body>
</html>
