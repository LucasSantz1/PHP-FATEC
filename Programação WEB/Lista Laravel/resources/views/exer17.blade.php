<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Exercício 17</title>
</head>
<body class="bg-dark text-white">
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card bg-dark text-white w-50">
            <div class="card-header text-center">
                <h3>Calculando o Juros Simples :D</h3>
            </div>
            <div class="card-body">
                <form action="/respexer17" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="capital" class="form-label">Insira o Capital</label>
                        <input type="number" class="form-control text-white bg-secondary border-0" id="capital" name="capital" placeholder="Digite o Capital" required />
                    </div>
                    <div class="mb-3">
                        <label for="taxa" class="form-label">Insira a taxa:</label>
                        <input type="number" class="form-control text-white bg-secondary border-0" id="taxa" step="0.01" name="taxa" placeholder="Digite a taxa" required />
                    </div>
                    <div class="mb-3">
                        <label for="periodo" class="form-label">Insira o período:</label>
                        <input type="number" class="form-control text-white bg-secondary border-0" id="periodo" step="0.01" name="periodo" placeholder="Digite o período" required />
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Verificar Juros Simples</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
