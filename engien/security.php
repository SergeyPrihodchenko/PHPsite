<?php

function uploadFile($name) {
    $uploaddir = 'imgs/';
    $uploadfile = $uploaddir . basename($_FILES[$name]['name']);

    if($_FILES[$name]['size'] > 350000) {
        die();
    }

    $split_filename = explode('.', $uploadfile);
    $extension = end($split_filename);

    $array_ext_access = array('', 'jpg', 'img', 'imgs', 'png');

    $is_check = array_search($extension, $array_ext_access);
    if($is_check) {
        if (move_uploaded_file($_FILES[$name]['tmp_name'], $uploadfile)) {
            echo $_FILES[$name]['name'];
        } 
    }
}
