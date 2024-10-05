<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Exercício 11</title>
</head>
<body class="bg-dark text-white">
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card bg-dark text-white w-50">
            <div class="card-header text-center">
                <h3>Calculando o perímetro de uma circunferência :D</h3>
            </div>
            <div class="card-body">
                <form action="/respexer11" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="raio" class="form-label">Insira o raio da circunferência:</label>
                        <input type="number" class="form-control text-white bg-secondary border-0" id="raio" name="raio" placeholder="Digite o raio da circunferência" required />
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Verificar Perímetro</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
