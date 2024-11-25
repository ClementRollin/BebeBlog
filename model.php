<?php
function getDbConnection()
{
    $host = 'localhost';
    $dbname = 'blog';
    $username = 'root';
    $password = '';
    try {
        return new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    } catch (PDOException $e) {
        die("Database connection error: " . $e->getMessage());
    }
}

function getPosts()
{
    $pdo = getDbConnection();
    $stmt = $pdo->query('SELECT * FROM posts ORDER BY created_at DESC');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getPostById($id)
{
    $pdo = getDbConnection();
    $stmt = $pdo->prepare('SELECT * FROM posts WHERE id = ?');
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function addPost($title, $content)
{
    $pdo = getDbConnection();
    $stmt = $pdo->prepare('INSERT INTO posts (title, content, created_at) VALUES (?, ?, NOW())');
    $stmt->execute([$title, $content]);
    return $pdo->lastInsertId();
}

function updatePost($id, $title, $content)
{
    $pdo = getDbConnection();
    $stmt = $pdo->prepare('UPDATE posts SET title = ?, content = ?, created_at = NOW() WHERE id = ?');
    return $stmt->execute([$title, $content, $id]);
}

function deletePost($id)
{
    $pdo = getDbConnection();
    $stmt = $pdo->prepare('DELETE FROM posts WHERE id = ?');
    return $stmt->execute([$id]);
}

function getPostsPaginated($limit, $offset)
{
    $pdo = getDbConnection();
    $stmt = $pdo->prepare('SELECT * FROM posts ORDER BY created_at DESC LIMIT :limit OFFSET :offset');
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getTotalPostCount()
{
    $pdo = getDbConnection();
    $stmt = $pdo->query('SELECT COUNT(*) as count FROM posts');
    return $stmt->fetch(PDO::FETCH_ASSOC)['count'];
}
?>