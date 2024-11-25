<?php ob_start(); ?>
<style>
    .pagination .page-item.active .page-link {
        background-color: #3b82f6;
        border-color: #3b82f6;
        color: #fff;
    }
    .pagination .page-link {
        color: #3b82f6;
        transition: all 0.3s;
    }
    .pagination .page-link:hover {
        background-color: #e0f0ff;
        border-color: #3b82f6;
    }
    .pagination .page-item.disabled .page-link {
        color: #ccc;
    }
</style>
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

<nav class="mt-4">
    <ul class="pagination justify-content-center">
        <?php if ($page > 1): ?>
            <li class="page-item">
                <a class="page-link" href="/list?page=<?= $page - 1 ?>" aria-label="Précédent">
                    <span aria-hidden="true">&laquo; Retour</span>
                </a>
            </li>
        <?php else: ?>
            <li class="page-item disabled">
                <span class="page-link" aria-label="Précédent">&laquo; Retour</span>
            </li>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <li class="page-item <?= $i === $page ? 'active' : '' ?>">
                <a class="page-link" href="/list?page=<?= $i ?>"><?= $i ?></a>
            </li>
        <?php endfor; ?>

        <?php if ($page < $totalPages): ?>
            <li class="page-item">
                <a class="page-link" href="/list?page=<?= $page + 1 ?>" aria-label="Suivant">
                    <span aria-hidden="true">Suivant &raquo;</span>
                </a>
            </li>
        <?php else: ?>
            <li class="page-item disabled">
                <span class="page-link" aria-label="Suivant">Suivant &raquo;</span>
            </li>
        <?php endif; ?>
    </ul>
</nav>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>