<?php ob_start(); ?>
<div class="row g-4">
    <?php foreach ($posts as $post): ?>
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title"><?= htmlspecialchars($post['title']) ?></h5>
                    <p class="card-text text-muted small">
                        Published on <?= htmlspecialchars($post['created_at']) ?>
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
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>