<?

  $id = $_GET['id'];
  $product = get_product($id);

?>

<!-- <?php
  //Если форма отправлена
  if(isset($_POST['submit'])) {
 //Проверка Поля ИМЯ
  if(trim($_POST['contactname']) == '') {
  $hasError = true;
  } else {
  $name = trim($_POST['contactname']);
  }
 //Проверка поля ТЕМА
  if(trim($_POST['subject']) == '') {
  $hasError = true;
  } else {
  $subject = trim($_POST['subject']);
  }
 //Проверка правильности ввода EMAIL
  if(trim($_POST['email']) == '')  {
  $hasError = true;
  } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
  $hasError = true;
  } else {
  $email = trim($_POST['email']);
  }
 //Проверка наличия ТЕКСТА сообщения
  if(trim($_POST['message']) == '') {
  $hasError = true;
  } else {
  if(function_exists('stripslashes')) {
  $comments = stripslashes(trim($_POST['message']));
  } else {
  $comments = trim($_POST['message']);
  }
  }
 //Если ошибок нет, отправить email
  if(!isset($hasError)) {
  $emailTo = 'name@yourdomain.com'; //Сюда введите Ваш email
  $body = "Name: $name \n\nEmail: $email \n\nSubject: $subject \n\nComments:\n $comments";
  $headers = 'From: My Site <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;
 mail($emailTo, $subject, $body, $headers);
  $emailSent = true;
  }
  }
  ?> -->

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
                                <p class="text2">Цена: <?=$product['price']?>грн/шт <br> </p>   
                            </div>
                        </div>         
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6  ">
                    <div class="thumbnail">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <img src="img/<?=$product['img1']?>" alt="" class="img-responsive"  height="300">   
                           
<!-- <?
if (isset ($_POST['messageFF'])) {
  mail ("roobotik@gmail.com",
        "заполнена контактная форма с ".$_SERVER['HTTP_REFERER'],
        "Имя: ".$_POST['nameFF']."\nEmail: ".$_POST['contactFF']."\nСообщение: ".$_POST['messageFF']);
  echo ('<p style="color: green">Ваше сообщение получено, спасибо!</p>');
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
</form>
 -->


<?php
$msg = 'Имя: '.$_POST['name']."\r\n E-mail: ".$_POST['mail']."\r\n Телефон: ".$_POST['phone']."\r\n Сообщение: ".$_POST['message'];
mail("roobottik@gmail.com", "Новое сообщение !!", $msg, "From: roobotik@artgips\r\n");
echo '<p style="color: green">Сообщение отправлено!</p>';
?>
<form method=POST class="form_s center-block">
                  <div class="form-group">
                    <input type="text" class="form-control" required="required" placeholder="Имя" name="name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" required="required" placeholder="e-mail" name="mail">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" required="required" placeholder="телефон" name="phone">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" required="required" placeholder="сообщение" name="message">
                  </div>
                  <button type="submit" class="btn btn-warning btn-block">ОТПРАВИТЬ</button>
                </form>






     <!--  <div id="contact-wrapper">
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
  <div>
  <label for="name"><strong>Имя:</strong></label>
  <input type="text" size="50" name="contactname" id="contactname" value="" />
  </div>
 <div>
  <label for="email"><strong>Email:</strong></label>
  <input type="text" size="50" name="email" id="email" value="" class="required email"/>
  </div>
 <div>
  <label for="subject"><strong>Телефон:</strong></label>
  <input type="text" size="50" name="subject" id="subject" value="" class="required" />
  </div>
 <div>
  <label for="message"><strong>Сообщение:</strong></label>
  <textarea rows="5" cols="50" name="message" id="message"></textarea>
  </div>

  <input type="submit" value="Send Message" name="submit" />
  </form>
  </div> -->


                                 
                            </div>
                        </div>         
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



