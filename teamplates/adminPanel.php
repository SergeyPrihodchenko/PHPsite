<?php
    if(isset($_POST['user']) & isset($_POST['pass'])) {

        $user = getOneRow(connect(HOST, USER, PASS, DB));

        if($_POST['user'] == $user['name'] & $_POST['pass'] == $user['pass']) {
            $_SESSION['action'] = 'upPanel';
        } 
    }

    if($_FILES['userfile']) {
        uploadFile("userfile");
        $name = strip_tags($_POST['name_drink']);
        $name_img = $_FILES['userfile']['name'];
        $description = strip_tags($_POST['description']);
        addRow($name, $description, $name_img);
        header("Location: ".$_SERVER['REQUEST_URI']);
    } 
?>
<div class="adminBox">
<?php if(!$_SESSION['action']): ?>
    <form class='adminPanel autification' action="" method="POST">
    <input class='user' type="text" name="user" placeholder="user name">
    <input class="pass" type="password" name="pass" placeholder="password">
    <button class="btn_aut" type="submit">sign in</button>
</form>
<?php endif ?>

<?php if($_SESSION['action'] == 'upPanel'): ?>
    <form class="adminPanel panel" enctype="multipart/form-data" action="" method="POST">
        <input class="name_drink" type="text" name="name_drink" placeholder="Название">
        <input class="userfile" type="file" name="userfile">
        <textarea class="description" name="description" id="" cols="30" rows="10" placeholder="Описание"></textarea>
        <button class="btn_send" type="submit">send</button>
    </form>
<?php endif ?>
</div>

<script src="scripts/adminPanel.js"></script>