<?

  $id = $_GET['id'];
  $product = get_product($id);

?>



<script src="jquery.min.js" type="text/javascript"></script>
      <script src="jquery.validate.pack.js" type="text/javascript"></script>
<script type="text/javascript">
      $(document).ready(function(){
      $("#contactform").validate();
      });
  </script>    

<div class="container">
    <div class="row menu-bar">
        <div class=" col-lg-3, col-md-3, col-sm-3 col-xs-12 ">
            <div class="row ">
               <img src="img/Logo-site.png" class="img-responsive artgips" alt="Логотип"> 
            </div>
            <div class="row hidden-sm">
                <div class="phons">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center text-menu   ">
                        <h5>Прием звонков пн-вс 8:00-21:00</h5>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 phon-left ">
                        <a href="tel:+380961552719"><h4>+38(096)155 2719</h4></a>
                        <a href="tel:+380639925734"><h4>+38(063)992 5734</h4></a>
                        <a href="tel:+380951195939"><h4>+38(095)119 5939</h4></a>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 visible-xs phon-left  ">
                        <a href="https://vk.com/artg1ps">
                            <img src="img/vkontakte-logo.svg" height="30" width="30" alt="Логотип вконтакте" class="logo-pos">
                            <h4>vk.com/artg1ps</h4>
                        </a>
                        <a href="https://www.instagram.com/artg1ps/">
                            <img src="img/instagram-photo-camera-symbol.svg" height="30" width="30" alt="Логотип вконтакте" class="logo-pos">
                            <h4>artg1ps</h4>
                        </a>
                    </div>
                </div>    
            </div>
            <div class="row text-menu">
            <div class="sidebar-nav">
              <div class="navbar navbar-default " role="navigation">
                <div class="navbar-header" >
                  <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".sidebar-navbar-collapse">
                    <span class="sr-only">Меню сайта</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <span class="visible-xs navbar-brand">ART GIPS</span>
                </div>
                <div class="navbar-collapse collapse sidebar-navbar-collapse ">
                  <ul class="nav navbar-nav text-menu">
                    <li class="active text-menu"><a href="index.php">Товары и услуги </a></li>
                    <li><a href="gallery.html">Фотогалерея</a></li>
                    <li><a href="partner.html">Партнерам</a></li>
                    <li><a href="o_nas.html">О нас</a></li>
                  </ul>
                </div><!--/.nav-collapse -->
              </div>
            </div>
          </div>
        </div>
        <div class="container partners-text">
            <div class="col-lg-9, col-md-9, col-sm-9 col-xs-12">
                <div class="col-lg-6 col-md-6 col-sm-6  ">
                    <div class="thumbnail">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mag">
                                <img data-toggle="magnify" src="img/<?=$product['img2']?>" alt="" class="img-responsive mag "  height="300">
                                </div>
                                <h4 class="text2 text-transf"><?=$product['name']?></h4>  
                                <p class="text2">Цена: <?=$product['price']?>грн/шт  </p>
                                <p class="text2"><?=$product['description']?> </p>   
                            </div>
                        </div>         
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6  ">
                    <div class="thumbnail">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <img src="img/<?=$product['img1']?>" alt="" class="img-responsive"  height="300">   
                           
 <!--<?
if (isset ($_POST['messageFF'])) {
   $msg = "Имя: ".$_POST['nameFF']."\nEmail: ".$_POST['contactFF']."\nСообщение: ".$_POST['messageFF'];
  mail ("roobotik@gmail.com", "заполнена контактная форма с ".$_SERVER['HTTP_REFERER'], $msg, "From: roobotik@artgips\r\n" );
  if(isset($_POST['contactFF'])){
        echo ('<p style="color: green">Ваше сообщение получено, спасибо!</p>');
  }
  
}
?>

<form method="POST" id="feedback-form">
<p>Как к Вам обращаться:</p>
<input type="text" name="nameFF" required placeholder="фамилия имя отчество" x-autocompletetype="name">
<p>Email для связи:</p>
<input type="email" name="contactFF" required placeholder="адрес электронной почты" x-autocompletetype="email">
<p>Ваше сообщение:</p>
<textarea name="messageFF" required rows="5"></textarea>
<input type="submit" value="отправить">
</form>-->
 


<?php


    // error_reporting(E_ALL);
    // ini_set('display_errors', '1');
    // if (mail("roobotik@gmail.com", "Test mail", "Проверка отправки почты")) {
    //       echo "ok";
    // } else {
    //        echo "error";}

if (isset ($_POST['buttonmail'])){
$msg = 'Имя: '.$_POST['name']."\r\n E-mail: ".$_POST['mail']."\r\n Телефон: ".$_POST['phone']."\r\n Сообщение: ".$_POST['message'];
mail("roobotik@gmail.com", "Заказ" .$product['name'] .$_SERVER['HTTP_REFERER'], $msg, "From: roobotik@artgips\r\n");

echo ('<p style="color: green">Сообщение отправлено!</p>');

}

?>
                <form method=POST class="form_s center-block">
                  <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Имя" name="name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control"  placeholder="e-mail" name="mail" >
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" required="required" placeholder="телефон" name="phone">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" rows="4"  placeholder="сообщение" name="message" ></textarea>
                    <!--<input type="text" class="form-control" required="required" placeholder="сообщение" name="message">-->
                  </div>
                  <button type="submit" class="btn btn-warning btn-block" name="buttonmail" >ОТПРАВИТЬ</button>
                </form>







                                 
                            </div>
                        </div>         
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



