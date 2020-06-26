<?php


function validateLogin()
{
    $login = "valod@test.com";
    $pass = '$2y$10$cEuaRzQ1zDEuIw6rip2bwO4pUQXNFfVuZT.1gqulJZb5mHTnPAGES';
    $data = [
        "email" => [
            "value" => "",
            "error-message" => ""
        ],
        "password" => [
            "value" => "",
            "error-message" => ""
        ],
        "authorization" => [
            "error-message" => ""
        ]
    ];
    if (empty($_POST)) {
        return $data;
    }


    if (empty($_POST['email'])) {
        $data['email']['error-message'] = "Email is required";
    } else {
        $data['email']['value'] = strip_tags($_POST['email']);
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $data['email']['error-message'] = "Email is not correct";
        } else {
            if ($data['email']['value'] != $login) {
                $data['email']['error-message'] = "Email or password is not correct";
            }
        }
    }
    if (empty($_POST['password'])) {
        $data['password']['error-message'] = "Password is required";
    } else {
        if (empty($data['email']['error-message']) && $data['email']['value'] == $login &&
        password_verify($_POST['password'], $pass)
        ) {

            setcookie("isLoggedIn", true, strtotime("+2 days"));
            header("Location:?p=profile");
        } else {
            $data['authorization']['error-message'] = "Email or password is not correct";
        }
    }
    return $data;
}

function areThereErrors($data)
{
    if (empty($_POST)) {
        return true;
    }
    foreach ($data as $info) {
        if (strlen($info['error-message']) > 0) {
            return true;
        }
    }
    return false;
}

$data = validateLogin();

//if (!areThereErrors($data)) {
//    header("Location:?p=profile");
//}