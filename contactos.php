<?php 
include("config/db.php");
include("includes/header.php"); 
include("includes/carousel.php"); 


if($_SERVER['REQUEST_METHOD']=='POST'){
    echo "Hola";
    print_r($_POST);
}
?>
<div class="container content">
<form action="" method="post" name="contact">
    <input type="text" class="text" name="name">
    <button>Save</button>
</form>
</div>

<?php 
include("includes/footer.php");