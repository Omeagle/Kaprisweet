<?php 
include("config/db.php");
include("includes/header.php"); 


if($_SERVER['REQUEST_METHOD']=='POST'){
    echo "Hola";
    print_r($_POST);
}
?>

<!-- Seccion Banner -->

<section class="banner_contact">
        <img src="img/bannercontact.jpg" class="img-fluid" alt="Banner">    
</section>

<!-- Seccion Separador -->
<div class="separador2"></div>


<section class="body_contact">
    <div class="container">

            <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Correo Electronico</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Asunto</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>     
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Mensaje</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>                
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            </form>



    </div>
</section>






<div class="container content">
<form action="" method="post" name="contact">
    <input type="text" class="text" name="name">
    <button>Save</button>
</form>
</div>

<?php 
include("includes/footer.php");