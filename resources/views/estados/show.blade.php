<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle Estado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">
<div class="container">
    <h1 class="mb-4">Detalle de {{ $estado->nom_agee }}</h1>

    <div class="row">
        <div class="col-12 col-md-8 col-lg-6">
            <form>
                <div class="mb-3">
                    <label class="form-label">CVEGEO</label>
                    <input class="form-control" value="{{ $estado->cvegeo }}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">CVE_AGEE</label>
                    <input class="form-control" value="{{ $estado->cve_agee }}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">NOMBRE</label>
                    <input class="form-control" value="{{ $estado->nom_agee }}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">ABREVIATURA</label>
                    <input class="form-control" value="{{ $estado->nom_abrev }}" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">POBLACION</label>
                    <input class="form-control" value="{{ number_format($estado->pob) }}" readonly>
                </div>

                <a href="{{ route('estados.index') }}" class="btn btn-secondary w-100">Volver</a>
            </form>
        </div>
    </div>
</div>
</body>
</html>
