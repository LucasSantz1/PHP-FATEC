<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <!-- Adicionado link para o CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">
    <div class="container mt-5 d-flex justify-content-center">
        <div class="card bg-dark text-white w-50">
            <div class="card-header text-center">
                <h3>Somando dois números :D</h3>
            </div>
            <div class="card-body">
                <form action="/respexer1" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="num1" class="form-label">Insira o primeiro número</label>
                        <input type="number" class="form-control text-white bg-secondary border-0" id="num1" name="num1" placeholder="Digite o primeiro número" required />
                    </div>
                    <div class="mb-3">
                        <label for="num2" class="form-label">Insira o segundo número</label>
                        <input type="number" class="form-control text-white bg-secondary border-0" id="num2" name="num2" placeholder="Digite o segundo número" required />
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Somar Números</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Adicionado script do Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
