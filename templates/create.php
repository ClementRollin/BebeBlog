<?php ob_start(); ?>
<h2>Create a New Post</h2>
<form method="POST" action="/create">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>