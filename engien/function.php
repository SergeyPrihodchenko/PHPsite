<?php

function renderTeamplate($page, $params) {
    ob_start();

    extract($params);

    include TEAMPLATES . $page . '.php';

    return ob_get_clean();
}

function render($page, $params = []) {
    return renderTeamplate($page, [
        'header' => renderTeamplate('header', $params),
        'adminPanel' => renderTeamplate('adminPanel', $params),
        'content' => renderTeamplate('content', $params)
    ]);
}

function file_delete($path) {
    unlink(IMG . $path);
}
