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
        <img src="img/bannercontact.jpg" alt="Banner">
       <!-- <h3>Estamos encantados de atenderte</h3> -->
           
</section>

<!-- Seccion Separador -->
<div class="separador"></div>

<div class="mapagoogle">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5972.2123762568135!2d-86.22336136717757!3d12.142092048240018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f73fdd735fea943%3A0x18a1f589c950c41c!2sRotonda%20La%20Virgen!5e0!3m2!1ses-419!2sni!4v1574052122208!5m2!1ses-419!2sni" width="100%" height="355" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>

<!-- Seccion Separador -->
<div class="separador2"></div>

    
    <div class="container-content ">
        <h3>Horarios</h3>
        <p>Horarios de atención: 7 am - 7 pm Lunes a Sabado | 7 am - 12 pm Domingos.</p>
        <div class="container ">      

            
        <div class="formularios1 ">
                            <form action="enviarcorreo.php" method="post" >
                            <div class="form-group ">                                
                                <input type="text" class="form-control col-md-8 m-md-auto " placeholder="Nombre" name="nombre">
                            </div>                         
                            <div class="form-group">
                                <input type="email" class="form-control col-md-8 m-md-auto" placeholder="Correo Electronico" name="correo"> 
                            </div>
                                                    
                            <div class="form-group">                            
                                <input type="text" class="form-control col-md-8 m-md-auto" id="exampleFormControlInput1" placeholder="Asunto" name="asunto">
                            </div>     
                            <div class="form-group">                            
                                <textarea class="form-control col-md-8 m-md-auto" id="exampleFormControlTextarea1"  placeholder="Mensaje" name="mensaje" rows="3"></textarea>                
                            </div>
                            <button type="submit" class="btn btn-primary btn-block col-md-8 m-md-auto">Enviar</button>
                        </form>
                </div>

               
        </div>        

            
    </div>

     <!-- Seccion Separador -->
     <div class="separador"></div>



<!--
<div class="container content">
<form action="" method="post" name="contact">
    <input type="text" class="text" name="name">
    <button>Save</button>
</form>
</div>
-->

<?php 
include("includes/footer.php");