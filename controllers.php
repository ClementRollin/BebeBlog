<?php
function list_action()
{
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $limit = 6;
    $offset = ($page - 1) * $limit;

    $posts = getPostsPaginated($limit, $offset);
    $totalPosts = getTotalPostCount();
    $totalPages = ceil($totalPosts / $limit);

    include 'templates/list.php';
}

function show_action($id)
{
    $post = getPostById($id);
    if (!$post) {
        http_response_code(404);
        echo "Post not found";
        return;
    }
    include 'templates/show.php';
}

function create_action()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'];
        $content = $_POST['content'];
        addPost($title, $content);
        header('Location: /list');
        exit;
    }
    include 'templates/create.php';
}

function edit_action($id)
{
    $post = getPostById($id);
    if (!$post) {
        http_response_code(404);
        echo "Post not found";
        return;
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $title = $_POST['title'];
        $content = $_POST['content'];
        updatePost($id, $title, $content);
        header('Location: /list');
        exit;
    }

    include 'templates/edit.php';
}

function delete_action($id)
{
    deletePost($id);
    header('Location: /list');
    exit;
}
?>