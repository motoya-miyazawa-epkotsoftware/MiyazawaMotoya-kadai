<?php
require_once('blog.php');

$blog = new Blog();
$blogdata = $blog->getAll();

function h($s){
    return htmlspecialchars($s, ENT_QUOTES,"UTF-8");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <title>ブログ一覧</title>
</head>
<body>
<h2>ブログ一覧</h2>
<p><a href="/form.html">新規作成</a></p>
    <table>
        <tr>
            <th>タイトル</th>
            <th>カテゴリ</th>
            <th>投稿日時</th>
        </tr>
        <?php foreach($blogdata as $colums): ?>
        <tr>
            <td><?php echo h($colums['title']) ?></td>
            <td><?php echo h($blog->setCategoryName($colums['category'])) ?>
        </td>
        <td><?php echo h($colums['post_at']) ?></td>
            <td><a href="/detail.php?id=<?php echo $colums['id'] ?>">
            詳細</td>
            <td><a href="/update_form.php?id=<?php echo $colums['id'] ?>">
            編集</td>
            <td><a href="/blog_delete.php?id=<?php echo $colums['id'] ?>">
            削除</td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>