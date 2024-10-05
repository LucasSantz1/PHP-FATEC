<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Exercício 12</title>
</head>
<body class="bg-dark text-white">
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card bg-dark text-white w-50">
            <div class="card-header text-center">
                <h3>Potenciação :D</h3>
            </div>
            <div class="card-body">
                <form action="/respexer12" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="base" class="form-label">Insira a base da potência:</label>
                        <input type="number" class="form-control text-white bg-secondary border-0" id="base" name="base" placeholder="Digite a base" required />
                    </div>
                    <div class="mb-3">
                        <label for="exp" class="form-label">Insira o expoente da potência:</label>
                        <input type="number" class="form-control text-white bg-secondary border-0" id="exp" name="exp" placeholder="Digite o expoente" required />
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Verificar Potência</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
