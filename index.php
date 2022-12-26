<?php

if (isset($_POST['proses'])) {
    $input = $_POST['input1'];
    if ($input == "halo pixi") {
        $hasil = "Hallo Tuan";
    } elseif ($input == "perkenalkan diri kamu") {
        $hasil = "Saya adalah Pixi Assisten ";
    
    } elseif ($input == "bagaimana sarana dan prasarana di pulau sangiang") {
        $hasil = "Fasilitas sosial yang terdapat di Pulau Sangiang masih sangat terbatas. Sudah terdapat 
        fasilitas keagamaan yaitu 1 masjid yang letaknya di tengah pulau. Terdapat pula semacam 
        bangunan sederhana untuk tempat pertemuan masyarakat yang letaknya berdampingan di 
        dusun yang relatif banyak dihuni penduduk. Walaupun satu RT, rumah penduduk tersebar 
        berjauhan sesuai dengan sebaran kebun yang mereka pelihara. Untuk memenuhi kebutuhan air bersih penduduk memanfaatkan sumber air tanah 
        yang letaknya di sebelah masjid. Fasilitas kesehatan yang ada berupa kunjungan dari Puskesmas. Namun jadwal 
        kunjungan ini tidak tentu waktunya. Karena itu penduduk yang sakit biasanya lebih memilih 
        pulang ke rumah utama mereka di Cikoneng atau Cigading. Di sini sebelumnya pernah terjadi 
        endemik penyakit malaria.";

    } elseif ($input == "bagaimana oseanografi di pulau sangiang") {
        $hasil="Berdasarkan perhitungan komponen pasang surut nilai F yang didasarkan pada data
                hasil pengukuran pasang surut (pasut) dengan menggunakan AOTT Thalimedes selama 30 
                hari yaitu dari tanggal 2 September - 2 Oktober 2016 didapatkan bahwa pasang surut terjadi 
                perbedaan tunggang pasut antara satu hari dengan hari yang lain. 
                Rata-rata Ketinggian gelombang berkisar antara 0,2 - 0,6 meter, ketinggian gelombang 
                signifikan 0,3 -0,9 m dan ketinggian gelombang masksimum 0,4 -1,6 m. Ketinggian 
                gelombang ini dikategorikan sebagai ketinggian gelombang laut tenang karena ketinggian 
                gelombang signifikan masih kurang dari 1 m.
                pada saat musim barat, dominan angin datang dari arah barat dan barat laut (dari Pulau Sumatera). 
                Pola angin saat musim barat ini disebabkan karena pada saat ini matahari berada di atas benua Australia sehingga 
                tekanan tinggi di dataran Benua Asia dan Tekanan rendah di atas benua Australia. Angin 
                bergerak dari Asia menuju Australia. Distribusi frekuensi kelas angin menunjukkan bahwa 
                angin pada saat musim barat dominan memiliki kecepatan 2-3 m/s yaitu sebanyak 23,3% dan 
                hanya 1,2% yang memiliki kecepatan lebih dari 8 m/s. ";

    } elseif ($input == "berapa jenis terumbu karang di pulau sangiang") {
        $hasil = "Menurut Pengamatan Dirjen Binamarga PU (2012) terdapat beberapa jenis soft coral jenis acanthogorgia, lobophytum,
                    Nepthea, Sarcophyton, Sinularia, dan Xenia. Sedangkan hard coral, yaitu : pectinia, porites dan sarcophyton";
    
    } elseif ($input == "buka youtube") {
        header("Location: https://www.youtube.com");

    } elseif ($input == "buka google") {
        header("Location: https://www.google.com/");

    } elseif ($input == "tampilkan peta terumbu karang") {
        header("Location: https://julydiown.users.earthengine.app/view/peta-terumbu-karang-pulau-sangiang");

    } else {
        $hasil = "saya tidak mengerti";
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="myscripts.js"> </script>

    <title>Sangiang Reef</title>
</head>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="index.php">
                <img class="image" src="karang.png" width="42px" style="margin: 1px;padding: 0px color =white">
                <a class="navbar-brand" href="#"> Sangiang Reef</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse text-right" id="navbarText">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://julydiown.users.earthengine.app/view/peta-terumbu-karang-pulau-sangiang">Peta Sebaran Terumbu Karang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.php">FAQ</a>
                        </li>
                    </ul>
                </div>
        </div>
    </nav>
    <!--Akhir Navbar-->

    <!--Caraousel-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="gambar1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <button type="button" class="btn btn-primary">Selengkapnya</button>
                </div>
            </div>

            <div class="carousel-item">
                <img src="gambar2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="d-grid gap-2 d-md-block left-content-md-end">
                        <button class="btn btn-primary" type="button">Selengkapnya</button>
                    </div>
                </div>
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--Akhir Carausel-->

    <!--Program AI-->
    <form action="" method="post" class="container">
        <hr>
        <button type="button" class="btn btn-warning">
            <h4>Virtual Assistant Pixi</h4>
        </button>
        <div class="card">
            <div class="card-header">Input</div>
            <div class="card-body">
                <h5 class="card-title">Masukan Perintah</h5>
                <p class="card-text"><input type="text" name="input1" style="width: 500px;"></p>
                <button href="#" class="btn btn-primary" type="submit" name="proses">Submit</button>
            </div>
        </div>
        <hr>
        <div class="card">
            <div class="card-header">Output</div>
            <div class="card-body">
                <h5 class="card-title">...</h5>
                <p class="card-text">
                    <?php
                    if (isset($_POST['proses'])) {
                        echo $hasil;
                    }
                    ?>
            </div>
        </div>
    </form>
    <!--Akhir Program AI-->

    <!--konten-->
    <section id="contact">
        <div class="container">
            <hr>
            <button type="button" class="btn btn-warning">
                <h4>Tentang Pulau Sangiang</h4>
            </button>
            <div class="row">
                <div class="col-md-5 mt-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31746.07844110398!2d105.83048558113488!3d-5.958901989779104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e419c5ef32a1cc7%3A0x9247428cbaeffb9d!2sSangiang!5e0!3m2!1sid!2sid!4v1672033234454!5m2!1sid!2sid" width="465" height="315" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="col-md-7 mt-8 text-start">
                    <h2>Pulau Sangiang</h2>
                    <p>Sangiang adalah sebuah pulau di tengah Selat Sunda antara pulau Sumatra dan Jawa di Indonesia.
                        Secara administratif merupakan bagian dari Provinsi Banten di Jawa Barat.
                        Salah satu desain saat ini untuk Jembatan Selat Sunda yang ambisius memungkinkan sebagian jembatan dibangun melintasi pulau.
                        Pulau Sangiang ini merupakan Taman Wisata Laut yang terletak di Banten.
                        Beberapa wisatawan yang sudah berkunjung kesana banyak yang menyebutnya sebagai Seven Wonders of Banten.
                        Julukan Seven Wonders of Banten yang diberikan pada Pulau Sangiang bukan tanpa sebab.
                        Pulau eksotik ini menawarkan banyak keindahan wisata di Banten.</p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--Akhir konten-->

    <!--Card baru-->
    <section id="content">
        <div class="container">
            <div class="row justify-content-center p-5">
                <hr>
                <button type="button" class="btn btn-warning">
                    <h4>Ekosistem & Sumberdaya Hayati Pulau Sangiang</h4>
                </button>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card">
                            <img src="hutan-mangrove.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Hutan Mangrove</h5>
                                <p class="card-text">Vegetasi yang tumbuh pada pasang surut, adapun tegakan mangrove yang terdapat di
                                    pulau ini diantaranya Bruguera gymnorrhiza, Rhizophora mucronata, Soneratia alba,
                                    Ceriop tagal, Lumnitzeraracemosa, Xylocarpus granatum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="hutan-pantai.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Hutan Pantai</h5>
                                <p class="card-text">Hutan yang berada di daerah pantai dan biasanya tumbuh di daerah pasir pinggir pantai.
                                    Tegakan yang terdapat pada daerah pantai di pulau ini antara lain: kelapa (Cocos
                                    nicifera), waru (Hibiscus tiliaceus), ketapang (Terminalia katapa), cemara laut
                                    (Casuarinas sp).</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="hutan-daratanrendah.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Hutan Dataran Rendah</h5>
                                <p class="card-text">Hutan yang berada pada ketinggian 100- 700 mdpl. Tegakan yang tumbuh pada hutan
                                    dataran rendah lebih beragam karena media tumbuhnya sudah bertekstur tanah seperti
                                    beringin, petai cina, johor serta pohon-pohon besar lainnya.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="terumbu-karang.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Terumbu Karang</h5>
                                <p class="card-text">ekosistem terumbu
                                    karang adalah fungsi terumbu sebagai penahan abrasi pantai. Diasumsikan terumbu
                                    karang yang ada dapat melindungi pesisir pantai Pulau Sangiang dari abrasi. Keliling
                                    pantai Pulau Sangiang adalah 14.5 km dan kontur daratan Pulau Sangiang pada pantai timur
                                    dan utara sampai selatan adalah dataran landai dan konsentrasi terumbu karang dengan
                                    tutupan sekitar 56 %</p>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <hr>

    <!--Akhir Card-->

    <!--Footer-->
    <div class="card-footer text-muted bg-dark">
        <center>
            <p>&#169; 2022 | Muhammad Azmi Pratama (2007996) & Julydio Windu Nugroho (2008771)</p>
        </center>
    </div>
    <!--AKhir footer-->



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>