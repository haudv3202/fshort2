<?php
if(isset($_SESSION['success'])){
    ?>
    <div class="alert alert-success" role="alert">
        <?php echo $_SESSION['success'];?>
    </div>
    <?php
    unset($_SESSION['success']);
}
?>
<h2>Trang chủ ở đây</h2>