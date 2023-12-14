<?php 
include '../../function.php';
$event = query('SELECT * FROM event');
?>

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
    
    <!-- Swipper -->
    <!-- Style -->
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="swiper-bundle.min.css">
    <link rel="stylesheet" href="event.css">
    
    

</head>
<body>
    <div class="container">
        
        <div class="header" id="header">
            <a href="#home" id="logo">GOA <span style="color: #333;">KREO</span></a>
            <nav class="navbar">
                <ul class="nav">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#event">Event</a></li>
                    <li><a href="../spt/spot.php">Spot</a></li>
                    <li><a href="../contact/contact.php">Contact</a></li>
                </ul>
            </nav>
            <a href="#" id="line-menu"><i data-feather="menu"></i></a>
        </div>

        <i data-feather="arrow-up-circle" id="scroll-to-top" onclick="scrollToTop()"></i>
<!-- ----------------------- content --------------------------->
<!-- ------------------------ home ----------------------------->
        <div class="wisata" id="home">
        </div>
        <div class="hero" >
            <div class="about-about">
                <div class="heading">
                    <div class="desc">
                        <img src="asset/gbr.jpeg" alt="">
                    </div>
                    <div class="desc">
                        <h4>Apa itu Goa Kreo?</h4>
                        <p>Goa Kreo merupakan objek wisata terkenal yang berlokasi dikota Semarang. Didalam kawasan wisata Goa Kreo terdapat kera yang menjadi ikon dan daya tarik bagi wisatawan. Goa Kreo terletak ditengah waduk jatibarang
                        </p>
                    </div>
                </div>
            </div>
        </div>
<!-- ------------------------ event ---------------------------->
        <div class="atas2" id="event"></div>
        <div class="atas">
            <h4>EVENT</h4>
        </div>
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">

                <?php foreach($event as $even) : ?>
                    <div class="card swiper-slide card-1">
                        <div class="image-content">
                            <span class="overlay"></span>


                            <div class="card-image">
                                <img src="../../img/<?= $even['gambar'];?>" alt="" class="card-image">
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="judul">
                                <h4 class="name"><?= $even['nama']; ?></h4>
                            </div>
                            <p><?= $even['deskripsi']; ?></p>

                            <a href="#popup" class="btn">Read More</a>
                        </div>
                    </div>
                <?php endforeach;?>

                </div>
            </div>
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>

<!-- --------------------------popup-------------------------- -->
        <div class="popup" id="popup">
            <div class="popup-content">
                <div class="popup-img">
                    <img src="asset/monkey.jpg" alt="monkey">
                    <img src="asset/monkey1.jpg" alt="monkey1">
                    <img src="asset/monkey2.jpg" alt="monkey2">
                </div>
                <div class="popup-header">
                    <h2>Sesaji Rowondo</h2>
                </div>
                <div class="popup-des">
                    <h3>tanggal :</h3>
                    <h3>jam     :</h3>
                </div>
                <div class="popup-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, iure? Unde neque nulla rep
                        ellat laborum perferendis rerum recusandae, placeat dolores,
                         magnam quam molestias porro sed aliquam mollitia optio, aliquid maxime.
                        </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quisquam, modi molestias et labore 
                            ratione accusantium sint illo inventore dolores ea eum totam veniam iste nostrum hic magni pari
                            atur architecto necessitatibus voluptatibus at! Illum nam tempore doloremque minima, laborum itaque dicta dolores aliquid repellat?
                        </p>
                </div>
                <a href="#event" class="btn popup-btn">CLOSE</a>
            </div>
        </div>
        <section class="about">
            <div class="about-about">
                <div class="legend">
                    <div class="desa">
                        <h4>Legenda Goa Kreo</h4>
                        <p>Dikisahkan saat sunan kalijaga bersama 4 santrinya diutus keselatan yaitu dijatingaleh semarang untuk mencari kayu jati yang akan digunakkan sebagai tiang masjid agung Demak. disaat para santri akan menebang kayu jati disitu ada kawanan 4 monyet (kuning,merah,hitam,putih). Kawanan monyet tidak setuju dengan penebangan tersebut, lalu terjadi perkelahian yang dimenangkan sunan kalijaga. Akhirnya kawanan monyet ikut membantu 4 santri menebang pohon jati, kemudian kayu tersebut dihanyutkan kesungai namun tersangkut. Dari situlah sunan kalijaga menemukan ada goa dan bertapa meminta petunjuk agar kayu ini dapat jalan. setelah sunan kalijaga mendapat petunjuk dan kayu itu bisa berjalan(hanyut),sunan kalijaga melanjutkan perjalanan pulang. Namun 4 monyet itu meminta ikut ke daerah demak tapi tidak diperbolehkan dan disuruh menjaga(kreo). Maka jadilah Gua Kreo. Kata "Kreo" berasal dari Mangreho yang berarti penjaga.
                        </p>
                    </div>
                    <div class="desa">
                        <img src="asset/gbr.jpeg" alt="">
                    </div>
                </div>
            </div>
        </section>




<!------------------------- footer ------------------------------->

        <div class="footer">
            <p> Copyright &copy; Team Almithali</p>
        </div>

    </div>

    <!-- Feather Icons -->
    <script>
        feather.replace();
    </script>
    <!-- JS -->
    <script src="swiper-bundle.min.js"></script>
    <script src="event.js"></script>
    

</body>

</html>