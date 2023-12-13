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
<!-- ----------------------- content --------------------------->
<!-- ------------------------ home ----------------------------->
        <div class="wisata" id="home">
            <!-- <h2>Wisata Goa Kreo</h2> -->
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
                    <div class="card swiper-slide card-1">
                        <div class="image-content">
                            <span class="overlay"></span>


                            <div class="card-image">
                                <img src="asset/monkey.jpg" alt="" class="card-image">
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="judul">
                                <h4 class="name">Sesaji Rowondo</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui optio aspernatur vero, modi laborum ea. Lorem ipsum dolor sit amet.</p>

                            <a href="#popup" class="btn">Read More</a>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>


                            <div class="card-image">
                                <img src="asset/monkey2.jpg" alt="" class="card-image">
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="judul">
                                <h4 class="name">Lebaran +3</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui optio aspernatur vero, modi laborum ea. Lorem ipsum dolor sit amet.</p>

                            <a href="#popup1" class="btn">Read More</a>
                        </div>
                    </div>

                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>


                            <div class="card-image">
                                <img src="asset/monkey3.jpg" alt="" class="card-image">
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="judul">
                                <h4 class="name">Lebaran +7</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui optio aspernatur vero, modi laborum ea. Lorem ipsum dolor sit amet.</p>

                            <a href="#popup2" class="btn">Read More</a>
                        </div>
                    </div>
                    
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>


                            <div class="card-image">
                                <img src="asset/gunung.jpg" alt="" class="card-image">
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="judul">
                                <h4 class="name">puncak</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui optio aspernatur vero, modi laborum ea. Lorem ipsum dolor sit amet.</p>

                            <a href="#popup3" class="btn">Read More</a>
                        </div>
                    </div>        

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

        <div class="popup" id="popup1">
            <div class="popup-content">
                <div class="popup-img">
                    <img src="asset/monkey.jpg" alt="monkey">
                    <img src="asset/monkey1.jpg" alt="monkey1">
                    <img src="asset/monkey2.jpg" alt="monkey2">
                </div>
                <div class="w3-container" style="overflow-y: scroll;">
                    <div class="popup-header">
                        <h2>Lebaran +3</h2>
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
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque sed esse voluptate optio exercitationem officiis, alias minima magnam! Architecto labore ut molestias aperiam perspiciatis facilis, est porro, rerum enim minima alias aliquid ullam veritatis repellendus corporis laborum nam optio voluptatum necessitatibus quibusdam. Molestiae, maiores? Necessitatibus ratione ipsum, iste hic et recusandae dolorem fugiat quaerat illum officia molestias a ipsa illo facere voluptas est? Quae, neque sint, vero sit rerum eaque eius odit in, similique repellendus perspiciatis et exercitationem. Labore error nihil laboriosam ex illo, provident dignissimos maiores? Natus fugit, totam, autem optio dolorum fugiat unde, harum ducimus animi aut odit?
                            </p>
                    </div>
                    <a href="#event" class="btn popup-btn">CLOSE</a>
                </div>
                
            </div>
        </div>

        <div class="popup" id="popup2">
            <div class="popup-content">
                <div class="popup-img">
                    <img src="asset/monkey.jpg" alt="monkey">
                    <img src="asset/monkey1.jpg" alt="monkey1">
                    <img src="asset/monkey2.jpg" alt="monkey2">
                </div>
                <div class="popup-header">
                    <h2>Lebaran +7</h2>
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

        <div class="popup" id="popup3">
            <div class="popup-content">
                <div class="popup-img">
                    <img src="asset/monkey.jpg" alt="monkey">
                    <img src="asset/monkey1.jpg" alt="monkey1">
                    <img src="asset/monkey2.jpg" alt="monkey2">
                </div>
                <div class="popup-header">
                    <h2>Puncak</h2>
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


<!-- ------------------------tengah------------------------- -->

        <!-- <div class="tengah" id="eventmissed">
            <h4>Missed Event</h4>
        </div>
        <div class="slide-container">
            <div class="slide-content">
                <div class="card-wrapper-two">
                    <div class="card-two">
                        <div class="image-content">
                            <span class="overlay"></span>


                            <div class="card-image">
                                <img src="asset/monkey.jpg" alt="" class="card-image">
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="judul">
                                <h4 class="name">Hari-pekan khusus</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui optio aspernatur vero, modi laborum ea. Lorem ipsum dolor sit amet.</p>

                            <a href="#popuptwo" class="btn">Read More</a>
                        </div>
                    </div>

                    <div class="card-two">
                        <div class="image-content">
                            <span class="overlay"></span>


                            <div class="card-image">
                                <img src="asset/monkey2.jpg" alt="" class="card-image">
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="judul">
                                <h4 class="name">Pameran dan pertunjukan</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui optio aspernatur vero, modi laborum ea. Lorem ipsum dolor sit amet.</p>

                            <a href="#popuptwo1" class="btn">Read More</a>
                        </div>
                    </div>

                    <div class="card-two">
                        <div class="image-content">
                            <span class="overlay"></span>


                            <div class="card-image">
                                <img src="asset/monkey3.jpg" alt="" class="card-image">
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="judul">
                                <h4 class="name">Rapat dan konferensi</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui optio aspernatur vero, modi laborum ea. Lorem ipsum dolor sit amet.</p>

                            <a href="#popuptwo2" class="btn">Read More</a>
                        </div>
                    </div>
                    
                    <div class="card-two">
                        <div class="image-content">
                            <span class="overlay"></span>


                            <div class="card-image">
                                <img src="asset/gunung.jpg" alt="" class="card-image">
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="judul">
                                <h4 class="name">Peringatan</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui optio aspernatur vero, modi laborum ea. Lorem ipsum dolor sit amet.</p>

                            <a href="#popuptwo3" class="btn">Read More</a>
                        </div>
                    </div>
                    <div class="card-two">
                        <div class="image-content">
                            <span class="overlay"></span>


                            <div class="card-image">
                                <img src="asset/gunung1.jpg" alt="" class="card-image">
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="judul">
                                <h4 class="name">Hadiah khusus</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui optio aspernatur vero, modi laborum ea. Lorem ipsum dolor sit amet.</p>

                            <a href="#popuptwo4" class="btn">Read More</a>
                        </div>
                    </div>        
                    
                    <div class="card-two">
                        <div class="image-content">
                            <span class="overlay"></span>


                            <div class="card-image">
                                <img src="asset/gunung2.jpg" alt="" class="card-image">
                            </div>
                        </div>

                        <div class="card-content">
                            <div class="judul">
                                <h4 class="name">Open House</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui optio aspernatur vero, modi laborum ea. Lorem ipsum dolor sit amet.</p>

                            <a href="#popuptwo5" class="btn">Read More</a>
                        </div>
                    </div>        

                </div>
            </div>
        </div> -->
<!-- -------------------------------popuptwo------------------------------- -->
        <!-- <div class="popup" id="popuptwo">
            <div class="popup-content">
                <div class="popup-img">
                    <img src="asset/monkey.jpg" alt="monkey">
                    <img src="asset/monkey1.jpg" alt="monkey1">
                    <img src="asset/monkey2.jpg" alt="monkey2">
                </div>
                <div class="popup-header">
                    <h2>Hari-pekan khusus</h2>
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
                <a href="#eventmissed" class="btn popup-btn">CLOSE</a>
            </div>
        </div>

        <div class="popup" id="popuptwo1">
            <div class="popup-content">
                <div class="popup-img">
                    <img src="asset/monkey.jpg" alt="monkey">
                    <img src="asset/monkey1.jpg" alt="monkey1">
                    <img src="asset/monkey2.jpg" alt="monkey2">
                </div>
                <div class="popup-header">
                    <h2>Pameran dan pertunjukan</h2>
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
                <a href="#eventmissed" class="btn popup-btn">CLOSE</a>
            </div>
        </div>

        <div class="popup" id="popuptwo2">
            <div class="popup-content">
                <div class="popup-img">
                    <img src="asset/monkey.jpg" alt="monkey">
                    <img src="asset/monkey1.jpg" alt="monkey1">
                    <img src="asset/monkey2.jpg" alt="monkey2">
                </div>
                <div class="popup-header">
                    <h2>Rapat dan konferensi</h2>
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
                <a href="#eventmissed" class="btn popup-btn">CLOSE</a>
            </div>
        </div>

        <div class="popup" id="popuptwo3">
            <div class="popup-content">
                <div class="popup-img">
                    <img src="asset/monkey.jpg" alt="monkey">
                    <img src="asset/monkey1.jpg" alt="monkey1">
                    <img src="asset/monkey2.jpg" alt="monkey2">
                </div>
                <div class="popup-header">
                    <h2>Peringatan</h2>
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
                <a href="#eventmissed" class="btn popup-btn">CLOSE</a>
            </div>
        </div>

        <div class="popup" id="popuptwo4">
            <div class="popup-content">
                <div class="popup-img">
                    <img src="asset/monkey.jpg" alt="monkey">
                    <img src="asset/monkey1.jpg" alt="monkey1">
                    <img src="asset/monkey2.jpg" alt="monkey2">
                </div>
                <div class="popup-header">
                    <h2>Hadiah khusus</h2>
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
                <a href="#eventmissed" class="btn popup-btn">CLOSE</a>
            </div>
        </div>

        <div class="popup" id="popuptwo5">
            <div class="popup-content">
                <div class="popup-img">
                    <img src="asset/monkey.jpg" alt="monkey">
                    <img src="asset/monkey1.jpg" alt="monkey1">
                    <img src="asset/monkey2.jpg" alt="monkey2">
                </div>
                <div class="popup-header">
                    <h2>Open House</h2>
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
                <a href="#eventmissed" class="btn popup-btn">CLOSE</a>
            </div>
        </div> -->




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