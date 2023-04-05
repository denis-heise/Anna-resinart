    <?php
        if (isset($_POST['name'])) {$name = $_POST['name'];}
        if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
        if (isset($_POST['formData'])) {$formData = $_POST['formData'];}

        $to = "emaio@gmail.com"; /*Укажите адрес, на который должно приходить письмо*/
        $sendfrom   = "site.com"; /*Укажите адрес, с которого будет приходить письмо, можно не настоящий, нужно для формирования заголовка письма*/
        $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
        $headers .= "Reply-To: ". strip_tags($sendfrom) . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
        $subject = "$formData";
        $message = 
        "<div style='line-height: 3; border: 1px solid #85c6ee; border-radius: 15px;'>
        <div style='font-size: 20px; background-color:rgb(238, 245, 255); padding-left: 20px; border-radius: 15px 15px 0 0;'>
        <b>Имя:</b> $name </div>
        
        <div style='font-size: 20px; background-color: rgba(255, 255, 255, 0.966); padding-left: 20px; border-radius: 0 0 15px 15px;'>
        <b>Телефон:</b> $phone </div>
        
        </div>";
        $send = mail ($to, $subject, $message, $headers);


        ini_set('short_open_tag', 'On');
        header('Refresh: 2; URL=/catalog.html');
    ?>


    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
    <html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="refresh" content="2; url=/catalog.html">
    <title>Спасибо! Я скоро свяжусь с вами!</title>
    <link rel="stylesheet" href="./css/main-style.css">
        <link rel="stylesheet" href="css/order-page.css">
        <script src="https://kit.fontawesome.com/a4387b9d19.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
    setTimeout('/catalog.html', 2000);
    /*Изменить текущий адрес страницы через 2 секунды (2000 миллисекунд)*/
    </script> 
    </head>
    <body>
        <header id="header" class="header-container">
            <img src="./img/header.jpg" alt="Header">
        </header>
        <div class="content">
            <div class="order__content" style="margin: 100px 0 100px 0">
                <div class="order__title"><h1>Спасибо! Я скоро свяжусь с вами!</h1></div>
            </div>
        </div>

        <footer class="footer-container" style="height: 15%">
            <div class="footer-container__contact">
                <b>Контактная информация</b>
                <p class="footer-container__link">
                    <a href="https://www.instagram.com/" target="_blank" class="fab fa-instagram"> Instagram</a>
                </p>
                <p class="footer-container__link">
                    <a href="tel:380500000000" style="margin-left: -5px;">+38 050 000 00 00</a>
                </p>
                <p class="footer-container__link">
                    <a href="mailto:email@gmail.com">email@gmail.com</a>
                </p>
                <div class="footer-container__copyright">
                    <script>
                        document.write("&copy; "+ new Date().getFullYear()+ " ФИО");
                    </script>
                </div>
            </div>
        </footer>
    </body>
    </html>
