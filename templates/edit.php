<?php ob_start(); ?>
<h2>Edit Post</h2>
<form method="POST" action="/edit/<?= $post['id'] ?>">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="<?= htmlspecialchars($post['title']) ?>" required>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control" id="content" name="content" rows="5" required><?= htmlspecialchars($post['content']) ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>