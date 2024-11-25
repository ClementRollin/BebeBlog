<?php ob_start(); ?>
<div class="row">
    <div class="col-md-8 offset-md-2">
        <article class="card shadow-sm p-4">
            <h2 class="card-title"><?= htmlspecialchars($post['title']) ?></h2>
            <p class="text-muted small">Publié le <?= htmlspecialchars($post['created_at']) ?></p>
            <div class="card-text">
                <?= nl2br(htmlspecialchars($post['content'])) ?>
            </div>
        </article>
        <div class="mt-4 d-flex justify-content-between">
            <a href="/edit/<?= $post['id'] ?>" class="btn btn-outline-primary">Mettre à jour</a>
            <a href="/delete/<?= $post['id'] ?>" class="btn btn-outline-danger" onclick="return confirm('Vous êtes-sûre de vouloir supprimer cette article ? Cette action est irréversible.');">Supprimer</a>
        </div>
        <div class="mt-4 text-center">
            <a href="/list" class="btn btn-secondary">Retour aux articles</a>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>