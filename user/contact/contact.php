<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goa Kreo</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <!-- Style -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="contact.css">

</head>

<body>
    <div class="container">

        <div class="header">
            <a href="#home" id="logo">GOA KREO</a>
            <nav class="navbar">
                <ul class="nav">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#event">Event</a></li>
                    <li><a href="#spot">Spot</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <a href="#" id="line-menu"><i data-feather="menu"></i></a>
        </div>
        <div class="contact-info">
            <ul> 
                <li>
                    <a href="#"><i class="bi bi-envelope" style="font-size=100"></i></a>
                </li>
                <li>
                    <a href="#"><i class="bi bi-geo-alt" style="font-size=100"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/obyekwisatagoakreo"><i class="bi bi-instagram" style="font-size=100"></i></a>
                </li>
            </ul>

        </div>

    </div>
    <div class="main">
        <div class="contact-form">
            <form class="contact" action="" method="post">
                <h3>Contact Us</h3>
                <input type="text" id="name" placeholder="Your name" required>
                <input type="email" id="email" placeholder="email id" required>
                <textarea id="massage" rows="4" placeholder="kritik dan saran"></textarea>
                <button type="submit">Send</button>
            </form>
        </div>
    </div>
    <div class="desc">

    </div>
    <div class="table">

    </div>
    </div>

    <div class="footer">


    </div>

    <!-- Feather Icons -->
    <script>
        feather.replace();
    </script>
    <!-- JS -->
    <script src="contact.js"></script>

</body>

</html>