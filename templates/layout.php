<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html, body {
            height: 100%;
        }
        header {
            padding: 1rem 0;
        }
        body {
            display: flex;
            flex-direction: column;
        }
        main {
            flex: 1;
        }
        footer {
            background-color: #3b82f6;
            color: white;
            padding: 1rem 0;
        }
        header {
            background: linear-gradient(135deg, #6c63ff, #3b82f6);
        }
    </style>
</head>
<body>
<header class="container-fluid d-flex justify-content-between align-items-center text-white">
    <h1 class="h3 mb-0">My Blog</h1>
    <a href="/create" class="btn btn-light">Add New Post</a>
</header>
<main class="container my-4">
    <?= $content ?>
</main>
<footer class="text-center mt-auto">
    <div class="container">
        <p>&copy; <?= date('Y') ?> My Blog - Made with ❤️</p>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>