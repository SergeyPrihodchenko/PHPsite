<?php
    $data = getAlkoAssoc(connect(HOST, USER, PASS, DB));
    $br_arr = [];
    foreach($data as $content) {
        $br_arr[] = nl2br($content['description']);
    }

    if(isset($_POST['content']) & isset($_POST['img'])) {
        file_delete($_POST['img']);
        sql_delete($_POST['content']);
        header("Location: ".$_SERVER['REQUEST_URI']);
    }

?>
<?php for($i = 0; $i <= count($data) - 1; $i++): ?>
    <div class="content">
    <h1 class="header_drink"><?=$data[$i]['name']?></h1>
    <img class="img_drink" src="imgs/<?=$data[$i]['name_img']?>" alt="alt" width="350" height="250">
        <div class="descriprion_box">
        <p class="description_drink"><?=$br_arr[$i]?></p>
        </div>
    <form class="form_drink" action="" method="post">
    <?php if($_SESSION['action'] == 'upPanel'): ?>    
        <input class="inp_form" type="hidden" value="<?=$data[$i]['id']?>" name="content">
        <input class="inp_form" type="hidden" value="<?=$data[$i]['name_img']?>" name="img">
        <button class="btn_form" type="submit">delete</button>
    </form>
    <?php endif; ?>
    </div>
<?php endfor; ?>


