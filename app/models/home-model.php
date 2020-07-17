<?php
function getAllBlogPosts($limit, $offset)
{
    global $conn;
    $sql = "SELECT blog_posts.id, `title`, `url`, `author`, `date`, `image`, LEFT(`text`, 500) 
            AS 'text', GROUP_CONCAT(categories.id, '=', categories.name SEPARATOR ',') AS 'category'
            FROM `blog_posts` JOIN `blog_post_categories`
            ON blog_posts.id = blog_post_id
            JOIN categories 
            ON category_id = categories.id
            WHERE isActive = 1
            GROUP BY blog_posts.id
            LIMIT $limit OFFSET $offset";
    $res = mysqli_query($conn, $sql);
    return $res;
}

function getBlogPostsCount () {
global $conn;
$sql = "SELECT * FROM blog_posts";
$ress = mysqli_query($conn, $sql);
return mysqli_num_rows($ress);
}
