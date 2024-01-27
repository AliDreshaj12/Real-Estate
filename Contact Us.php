<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Contact Us.css">
    <title>Document</title>
</head>
<body>
<?php
    
    include('header.php');
    echo $header1;

    ?>
    <div class="div1">
        <div class="div2">
            <div class="div2-1">
                <h1>Have a question?</h1>
                <p>Contact us whenever you have any questions. We are always here for you!</p>
            </div>
            <div class="div2-2">
                <p class="reg-p">Email</p>
                <p class="reg-p1">ak67707@ubt-uni.net</p>
                <p class="reg-p1">ad67321@ubt-uni.net</p>
                <p class="reg-p">Phone</p>
                <p class="reg-p1">049111221</p>
                <p class="reg-p1">049717717</p>
                <p class="reg-p">Address</p>
                <p class="reg-p1">Pristina/Kosovo</p>
            </div>
            <div class="div2-3">
                <form class="form1">
                    <input id="1" type="text"placeholder="First Name">
                    <input type="text"placeholder="Last Name">
                    <input type="text"placeholder="Email Addres">
                    <input type="text"placeholder="Phone">
                    <input type="text"placeholder="Notes">
                    <button class="submit">submit</button>
                </form>
            </div>

        </div>
    </div>
    <div class="map">
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2934.
            2392992881805!2d21.156777875827572!3d42.65628411633594!2m3!1f0!2f0!3f0!
            3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ee8ab4ab551%3A0xc5bceaec65d0ab0e!
            2sCathedral%20of%20Saint%20Mother%20Teresa!5e0!3m2!1sen!2s!4v1701910951842!5m2!1sen!2s"
             width="901" height="250" style="border:0;" allowfullscreen="" loading="lazy"
             referrerpolicy="no-referrer-when-downgrade"></iframe></p>
    </div>


    
</body>
</html>