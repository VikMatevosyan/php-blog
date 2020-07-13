<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "blog_vika";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function getCategories()
{
    global $conn;
    $sql = "SELECT categories.id AS 'id', categories.name AS 'name', COUNT(`blog_post_id`) AS 'count'
            FROM categories LEFT JOIN blog_post_category
            ON blog_post_category.category_id = categories.id
            GROUP BY categories.id";
    return mysqli_query($conn, $sql);

}
