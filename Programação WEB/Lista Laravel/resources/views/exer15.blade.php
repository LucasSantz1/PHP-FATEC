<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Exercício 15</title>
</head>
<body class="bg-dark text-white">
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card bg-dark text-white w-50">
            <div class="card-header text-center">
                <h3>IMC :D</h3>
            </div>
            <div class="card-body">
                <form action="/respexer15" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="peso" class="form-label">Insira seu peso (em kg):</label>
                        <input type="number" class="form-control text-white bg-secondary border-0" id="peso" name="peso" placeholder="Digite seu peso (em Kg)" required />
                    </div>
                    <div class="mb-3">
                        <label for="altura" class="form-label">Insira sua altura (em metros):</label>
                        <input type="number" class="form-control text-white bg-secondary border-0" id="altura" step="0.01" name="altura" placeholder="Digite altura (em metros)" required />
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Verificar IMC</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
