<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="style.css">
    <title>Goa Kreo</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <a href="#home" id="logo">GOA <span style="color: #333;font-weight: bold;">KREO</span></a>
            <nav class="navbar">
                <ul class="nav">
                    <li><a href="../home/home.php">Home</a></li>
                    <li><a href="../home/home.php?#event">Event</a></li>
                    <li><a href="../spot/spot.php">Spot</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </nav>
            <a href="#" id="line-menu"><i data-feather="menu"></i></a>
        </div>
        <div class="contact-info">
            <div class="contact-1">
                <i class="mail" data-feather="mail"></i>
                <a href="">example@gmail.com</a>

            </div>
            <div class="contact-2">
                <i class="pin" data-feather="map-pin"></i>
                <a align="center" href="">Jl. Raya Goa Kreo, Kandri, Kec. Gn. Pati, Kota Semarang, Jawa Tengah</a>
            </div>
            <div class="contact-3">
                <a href="https://www.instagram.com/obyekwisatagoakreo/" target="_blank"><i class="ig"
                        data-feather="instagram"></i></a>
                <a href="https://www.instagram.com/obyekwisatagoakreo/" target="_blank">Obyek Wisata Goa Kreo</a>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="contact-form">
            <form class="contact" action="https://formsubmit.co/4b263c707dc4d14f880d085e44ab7269" method="post">
                <h3>Contact Us</h3>
                <input type="text" id="name" placeholder="Your name" required>
                <input type="email" id="email" placeholder="email id" required>
                <textarea id="message" rows="4" placeholder="kritik dan saran"></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.7622388925647!2d110.34504147500908!3d-7.037205968948973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708a3f2cf58ddb%3A0x2e396176ca27c669!2sObyek%20Wisata%20Goa%20Kreo!5e0!3m2!1sid!2sid!4v1702523469100!5m2!1sid!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <div class="footer"></div>
    <script>
        feather.replace();
    </script>
    <script src="script.js"></script>
</body>

</html>