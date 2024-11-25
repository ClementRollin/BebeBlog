<?php ob_start(); ?>
<h2 class="mb-4">Tous les articles</h2>
<div class="row g-4">
    <?php foreach ($posts as $post): ?>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($post['title']) ?></h5>
                    <p class="card-text text-muted small">
                        Publié le <?= htmlspecialchars($post['created_at']) ?>
                    </p>
                    <p class="card-text">
                        <?= htmlspecialchars(substr($post['content'], 0, 100)) ?>...
                    </p>
                    <a href="/show/<?= $post['id'] ?>" class="btn btn-primary btn-sm">Lire l'article</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- Pagination -->
<nav class="mt-4">
    <ul class="pagination justify-content-center">
        <?php if ($page > 1): ?>
            <li class="page-item">
                <a class="page-link" href="/list?page=<?= $page - 1 ?>">Retour</a>
            </li>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <li class="page-item <?= $i === $page ? 'active' : '' ?>">
                <a class="page-link" href="/list?page=<?= $i ?>"><?= $i ?></a>
            </li>
        <?php endfor; ?>

        <?php if ($page < $totalPages): ?>
            <li class="page-item">
                <a class="page-link" href="/list?page=<?= $page + 1 ?>">Suivant</a>
            </li>
        <?php endif; ?>
    </ul>
</nav>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>