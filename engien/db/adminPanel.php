<?php

function addRow($name, $description, $name_img) {
    mysqli_query(connect(HOST, USER, PASS, DB), "INSERT INTO `alkogallery` (`id`, `name`, `description`, `name_img`) VALUES (NULL, '$name', '$description', '$name_img');");
    $_POST = [];
    $_FILES = [];
}