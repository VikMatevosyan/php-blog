<?php
function getAllBlogPosts()
{
    global $conn;
    $sql = "SELECT blog_posts.id, `title`, `url`, `author`, DATE_FORMAT(`date`, '%M %d, %Y') as 'date',  `image`, LEFT(`text`, 500) 
            AS 'text', categories.name as 'category'
            FROM `blog_posts` JOIN `blog_post_categories`
            ON blog_posts.id = blog_post_id
            JOIN categories 
            ON catogiry_id = categories.id
            WHERE isActive = 1";

    $res = mysqli_query($conn, $sql);
    return $res;


}
