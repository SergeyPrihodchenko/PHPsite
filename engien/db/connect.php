<?php

function connect($host, $user, $pass, $db) {
    static $connect = null;
    if(is_null($connect)) {
        $connect = mysqli_connect($host, $user, $pass, $db);
    }
    return $connect;
}

function getAlkoAssoc($db) {
    $arr_result = [];

    $resolve = mysqli_query($db, 'select *  from alkogallery;');

    while($row = mysqli_fetch_assoc($resolve)) {
            $arr_result[] = $row;
    }
    return $arr_result;
}

function getOneRow($db) {
    $resolve = mysqli_query($db, 'select name, pass from users;');

    return mysqli_fetch_assoc($resolve);
}

function sql_delete($id) {
    mysqli_query(connect(HOST, USER, PASS, DB), "DELETE FROM `alkogallery` WHERE `alkogallery`.`id` = $id");
}