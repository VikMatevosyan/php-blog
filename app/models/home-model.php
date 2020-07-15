<?php
function getAllBlogPosts()
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
            ";

    $res = mysqli_query($conn, $sql);
    return $res;


}
