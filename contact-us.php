<?php
    if(isset($_POST["submit"])){
        $name = $_POST["name"];
        $phone = $_POST["phone"];
        $mail = $_POST["mail"];
        $msg = $_POST["msg"];

        $mailTo = "tal.mekler11@gmail.com";
        $headers = "From :".$mail;

        $txt = "הודעה חדשה מ:".$name.\n\n."מספר טלפון: ".$phone.ֿ\n\n."מייל: ".$mail.\n\n."תוכן הודעה: ".$msg;

        if(mail($mailTo, "הודעה חדשה מהאתר", $txt, $headers)){
            header("Location: contact-us.html?mail-send");
            $mail_send = TRUE;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title>Active Kfar Saba - Contact Us</title>

    <link rel="shortcut icon" href="/imgs/logo-man.png" type="image/png"> <!-- FavIcon -->
    <link rel="stylesheet" href="/css/conatct-page/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" /> <!-- Import Font Awesome -->

    <script src="/jquery-3.5.1.min.js"></script>
    <!-- <script src="/scripts/gallery-script.js"></script> -->
    <script src="/scripts/opan-nav-bar.js"></script>
    <script src="/scripts/contact-form-script.js"></script>
</head>

<body class="body">
    <div class="page-header contact-page-header">
        <div class="social">
            <a href="https://www.facebook.com/active.physio" target="_blank">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.instagram.com/active_physiotherapy/" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <div class="phone-numbers">
                <a href="tel:050-8611131">
                    <p class="conatct">
                        <span class="name">מישה:</span>
                        <span class="number">050-861-1131</span>
                    </p>
                </a>
                <a href="tel:050-5223809">
                    <p class="conatct">
                        <span class="name">סמדר:</span>
                        <span class="number">050-522-3809</span>
                    </p>
                </a>
            </div>
        </div>
        <div class="nav-bar-btns">
            <i class="fas fa-bars"></i>
        </div>
        <div class="bg-black-for-nav-bar"></div>
        <div class="nav-bar-element">
            <div class="close-btn">
                <i class="fas fa-times"></i>
            </div>
            <div class="nav-links">
                <a href="https://activekfarsaba.com">
                    <div class="nav-link">
                        <div class="nav-link-title">
                            דף הבית
                        </div>
                    </div>
                </a>

                <div class="nav-link has-options">
                    <div class="nav-link-title">
                        גלריה
                    </div>
                    <div class="nav-link-options options">
                        <a href="gallery.html">
                            <div class="nav-link-options--option">
                                גלריה - מישה
                            </div>
                        </a>
                        <a href="smadar-gallery.html">
                            <div class="nav-link-options--option">
                                גלריה - סמדר
                            </div>
                        </a>
                    </div>
                </div>

                <a href="contact-us.html">
                    <div class="nav-link">
                        <div class="nav-link-title">
                            צרו קשר
                        </div>
                    </div>
                </a>

            </div>

        </div>
    </div> <!-- HEADER END -->

    <div class="main-content-title">
        <h1>
            contac<span class="no-space">t</span> <span class="clr-cyan">u<span class="no-space">s</span>

        </h1>
    </div>
    <div class="main-contact-content">
        <div class="contact-form">
            <h3>כתבו לנו</h3>
            <form method="post">
                <?php
                    if($mail_send):
                ?>
                <div class="mail-send">
                    <h4>ההודעה נשלחה בהצלחה!</h4>
                </div>
                <?php
                    endif;
                ?>
                <div class="contact-form__input-div">
                    <input type="text" name="name" id="name" placeholder="שם מלא">
                </div>
                <div class="contact-form__input-div">
                    <input type="tel" name="phone" id="phone" placeholder="טלפון">
                </div>
                <div class="contact-form__input-div">
                    <input type="email" name="mail" id="mail" placeholder="אימייל">
                </div>
                <div class="contact-form__input-div">
                    <textarea name="msg" id="msg" placeholder="ההודעה שלך"></textarea>
                </div>
                <div class="contact-form__submit-div">
                    <input name="submit" type="submit" value="שליחה">
                </div>
            </form>
        </div>
        <div class="contact-info">
            <div class="contact-info__address conatct-info__in-div">
                <h3 class="contact-info__title">כתובת</h3>
                <p>רחוב התע״ש 23</p>
                <p>כפר סבא</p>
                <p>4442525</p>
                <p class="contact-info__address-icons">
                    <a href="https://www.waze.com/ul?ll=32.17735220%2C34.92736820&navigate=yes" target="_blank">
                        <i class="fab fa-waze"></i>
                    </a>
                </p>
            </div>
            <div class="contact-info__phones conatct-info__in-div">
                <h3 class="contact-info__title">טלפון</h3>
                <a href="tel:050-8611131">
                    <p>מישה: <span>050-861-1131</span></p>
                </a>
                <a href="tel:050-5223809">
                    <p>סמדר: <span>050-522-3809</span></p>
                </a>
            </div>
        </div>

    </div>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-177823778-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-177823778-1');
    </script>
</body>

</html>