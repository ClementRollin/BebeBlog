<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100vh;
        }
        header {
            padding: 1rem 0;
            background: linear-gradient(135deg, #6c63ff, #3b82f6);
        }
        body {
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
        }
    </style>
</head>
<body>
<header class="container-fluid d-flex justify-content-between align-items-center text-white">
    <h1 class="h3 mb-0">Mon Blog</h1>
    <a href="/create" class="btn btn-light">Ajouter un nouvel article</a>
</header>
<main class="container my-4">
    <?= $content ?>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>