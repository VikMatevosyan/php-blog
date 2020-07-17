<?php

function getUserInfo($id)
{
    global $conn;
    $sql = "SELECT name, email, image FROM users 
            WHERE isActtive = 1 AND id = $id";

    $res = mysqli_query($conn, $sql);
    if (!$res) {
        return false;
    }
    return $res;
}

function updateUserinfo () {
    global $conn;
    $sql = "UPDATE users SET WHERE isActtive = 1";
    foreach ($data as $col => $val) {
        $sql .= $col . " =  '$val'";
    }
    $sql = substr($sql, 0,strlen($sql) - 2);
    $sql .= "WHERE id = '".$data['id']."'";
    $res = mysqli_query($conn, $sql);
    if (!$res) {
        return false;
    }
    return $res;
}
