<?php
//menyertakan code dari file koneksi
include "koneksi.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="icon" href="img/png.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  </head>

  <body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
      <div class="container">
        <a class="navbar-brand fw-bold" href="#" style="font-family: 'Playfair Display', serif; color: #4B2E05;">
          Daily Routine</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span></button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link fw-medium" href="#" style="font-family: 'Poppins', sans-serif; color: #6B4F29;">
              Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link fw-medium" href="#article" style="font-family: 'Poppins', sans-serif; color: #6B4F29;">
              Article</a>
          </li>

          <li class="nav-item">
            <a class="nav-link fw-medium" href="#gallery" style="font-family: 'Poppins', sans-serif; color: #6B4F29;">
              Gallery</a>
          </li>

          <li class="nav-item">
            <a class="nav-link fw-medium" href="#schedule" style="font-family: 'Poppins', sans-serif; color: #6B4F29;">
              Schedule</a>
          </li>

          <li class="nav-item">
            <a class="nav-link fw-medium" href="#aboutme" style="font-family: 'Poppins', sans-serif; color: #6B4F29;">
              About Me</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="login.php" target="_blank">Login</a>
          </li>
        </ul>

    <!-- mode -->
    <button id="bluebutton"
    style="padding:8px 12px; border-radius:10px; background:#3E2C1C; color:#FFDDAA; border:none;">
    <i class="bi bi-moon-stars"></i>
    </button>

    <button id="yellowbutton" 
    style="padding:8px 12px; border-radius:10px; background:#FFF5E1; color:#4B2E05; border:none;">
    <i class="bi bi-brightness-high"></i>
    </button>
    </div>

    <script type="text/javascript">
      const mytext = document.getElementById("mytext");

    //default
    document.body.style.background = "pink";

    //light
    document.getElementById("yellowbutton").onclick = function () {
      document.body.style.background = "#FFF5E1";
      document.querySelectorAll("body *").forEach(el => {
        el.style.color = "#4B2E05";
      });
      article.querySelectorAll(".card").forEach(card => {
        card.style.background = "#FFFFFF";
        card.style.color = "#4B2E05";
      });
      schedule.querySelectorAll(".card").forEach(card => {
        card.style.background = "#FFFFFF";
        card.style.color = "#4B2E05";
      });
      aboutme.querySelectorAll(".accordion-button").forEach(el => {
        el.style.background = "#FFFFFF";
        el.style.color = "#4B2E05";
      });
      aboutme.querySelectorAll(".accordion-body").forEach(el => {
        el.style.background = "#FFFFFF";
        el.style.color = "#4B2E05";
      });
    };

    //dark
    document.getElementById("bluebutton").onclick = function () {
      document.body.style.background = "#3E2C1C";
        document.querySelectorAll("body *").forEach(el => {
        el.style.color = "#FFDDAA";
      });
      article.querySelectorAll(".card").forEach(card => {
        card.style.background = "#5C4632";
        card.style.color = "#FFFFFF";
      });
      schedule.querySelectorAll(".card").forEach(card => {
        card.style.background = "#5C4632";
        card.style.color = "#FFFFFF";
      });
      aboutme.querySelectorAll(".accordion-button").forEach(el => {
        el.style.background = "#5C4632";
        el.style.color = "#FFFFFF";
      });
      aboutme.querySelectorAll(".accordion-body").forEach(el => {
        el.style.background = "#5C4632";
        el.style.color = "#FFFFFF";
      });
    };
    </script>
    </div>
  </div>
</nav>

    <!-- hero -->
<section id="hero" class="text-center p-5 text-sm-start">
  <div class="container">
    <div class="d-sm-flex flex-sm-row-reverse align-items-center justify-content-between gap-4">
      <img src="img/png.png" class="img-fluid rounded-circle shadow" width="280" alt="Logo">
      <div class="text-center text-md-start">
        <h1 class="fw-bold display-4 mb-2" style="font-family: 'Playfair Display', serif; color: #4B2E05;">
          Daily Routine</h1>
          <h4 class="lead mb-3" style="font-family: 'Poppins', sans-serif; color: #6B4F29;">
            Simple habits for a balanced and meaningful life.</h4>
            <p class="fs-6 fst-italic text-muted" style="max-width: 500px;">
              Dokumentasi rutinitas harian yang membantu menjaga keseimbangan antara belajar, beraktivitas, dan menikmati kehidupan sehari-hari.</p>
              <a href="#article" class="btn btn-outline-dark mt-3 px-4 py-2" style="border-radius: 20px;">Explore!</a>
              <div class="mt-2">
                <span id="tanggal"></span>
                <span id="jam"></span>
              </div>
            </div>
          </div>
        </div>
      </section>

     <!-- article -->
      <section id="article" class="text-center p-5">
        <div class="container">
          <h1 class="fw-bold display-4 pb-3" style="font-family: 'Playfair Display', serif; color: #4B2E05;">
            Article</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            <?php
            $sql = "SELECT * FROM article ORDER BY tanggal DESC";
            $hasil = $conn->query($sql); 

            while($row = $hasil->fetch_assoc()){
 
            ?>
            <!-- col begin -->
              <div class="col">
                <div class="card h-100">
                  <img src="img/<?=$row["gambar"]?>" class="card-img-top" alt="..." />
                  <div class="card-body">
                    <h5 class="card-title" style="font-family: 'Poppins', sans-serif; color: #6B4F29;"><?=$row["judul"]?></h5>
                      <p class="card-text" style="font-family: 'Poppins', sans-serif; color: #4B2E05;"> <?=$row["isi"]?></p>
                      </div>
                      <div class="card-footer">
                        <small class="text-body-secondary" style="font-family: 'Poppins', sans-serif;"><?=$row["tanggal"]?></small>
                        </div>
                      </div>
                    </div>
      <!-- col end  -->
       <?php
            }
            ?>
      </div>
      </section>

      <!-- gallery -->
       <section id="gallery" class="text-center p-5">
        <div class="container">
          <h1 class="fw-bold display-4 pb-3" style="font-family: 'Playfair Display', serif; color: #4B2E05;">
            Gallery</h1>

            <div id="carouselExample" class="carousel slide">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/png.png" class="img-fluid mx-auto d-block" alt="Logo" style="max-width: 60%; height: auto;">
                  <div class="carousel-caption d-none d-md-block">
                    <p style="font-family: 'Poppins', sans-serif; color: #6B4F29;">Daily Gallery</p>
                  </div>
                </div>
                
                <div class="carousel-item">
                  <img src="img/1.jpg" class="img-fluid mx-auto d-block" alt="1" style="max-width: 60%; height: auto;">
                </div>
                
                <div class="carousel-item">
                  <img src="img/2.jpg" class="img-fluid mx-auto d-block" alt="2" style="max-width: 60%; height: auto;">
                </div>

                <div class="carousel-item">
                  <img src="img/3.jpg" class="img-fluid mx-auto d-block" alt="3" style="max-width: 60%; height: auto;">
                </div>

                <div class="carousel-item">
                  <img src="img/4.jpg" class="img-fluid mx-auto d-block" alt="4" style="max-width: 60%; height: auto;">
                </div>

                <div class="carousel-item">
                  <img src="img/5.jpg" class="img-fluid mx-auto d-block" alt="5" style="max-width: 60%; height: auto;">
                </div>

                <div class="carousel-item">
                  <img src="img/6.jpg" class="img-fluid mx-auto d-block" alt="4" style="max-width: 60%; height: auto;">
                </div>

                <div class="carousel-item">
                  <img src="img/7.jpg" class="img-fluid mx-auto d-block" alt="4" style="max-width: 60%; height: auto;">
                </div>
              </div>
              
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>

              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </section>

       <!-- schedule -->
        <section id="schedule" class="text-center p-5">
          <div class="container">
            <h1 class="fw-bold display-4 pb-3" style="color: black;">
              Schedule</h1>
              <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">

                <div class="col">
                  <div class="card h-100">
                    <div class="card-body">
                      <a href="https://www./"><i class="bi bi-book" style="color: red;"></i></a>
                      <h5 class="card-title" style="color: black;">
                        Membaca</h5>
                        <p class="card-text" style="color: black;">
                          Menambah wawasan setiap pagi sebelum beraktivitas.</p>
                        </div>
                      </div>
                    </div>

                <div class="col">
                  <div class="card h-100">
                    <div class="card-body">
                      <a href="https://www./"><i class="bi bi-laptop" style="color: red;"></i></a>
                      <h5 class="card-title" style="color: black;">
                        Menulis</h5>
                        <p class="card-text" style="color: black;">
                          Mencatat setiap pengalaman harian di jurnal pribadi.</p>
                        </div>
                      </div>
                    </div>

                <div class="col">
                  <div class="card h-100">
                    <div class="card-body">
                      <a href="https://www./"><i class="bi bi-people" style="color: red;"></i></a>
                      <h5 class="card-title" style="color: black;">
                        Diskusi</h5>
                        <p class="card-text" style="color: black;">
                          Bertukar ide dengan teman dalam kelompok belajar.</p>
                        </div>
                      </div>
                    </div>

                <div class="col">
                  <div class="card h-100">
                    <div class="card-body">
                      <a href="https://www./"><i class="bi bi-bicycle" style="color: red;"></i></a>
                      <h5 class="card-title" style="color: black;">
                        Olahraga</h5>
                        <p class="card-text" style="color: black;">
                          Menjaga kesehatan dengan bersepeda sore hari.</p>
                        </div>
                      </div>
                    </div>

                <div class="col">
                  <div class="card h-100">
                    <div class="card-body">
                      <a href="https://www./"><i class="bi bi-film" style="color: red;"></i></a>
                      <h5 class="card-title" style="color: black;">
                        Moovie</h5>
                        <p class="card-text" style="color: black;">
                          Menonton film yang bagus di bioskop.</p>
                        </div>
                      </div>
                    </div>

                <div class="col">
                  <div class="card h-100">
                    <div class="card-body">
                      <a href="https://www./"><i class="bi bi-bag" style="color: red;"></i></a>
                      <h5 class="card-title" style="color: black;;">
                        Belanja</h5>
                        <p class="card-text" style="color: black;">
                          Membeli kebutuhan bulanan di supermarket.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>

       <!-- about me  -->
        <section id="aboutme" class="text-center p-5">
          <div class="container">
            <h1 class="fw-bold display-4 pb-3" style="color: black;">
              About Me</h1>
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color: rgb(182, 100, 100); color:white">
                      Universitas Dian Nuswantoro Semarang (2024-Now)
                    </button>
                  </h2>

                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the first item’s accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It’s also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color: white; color:black">
                      SMA Negeri 1 Semarang (2024-2021)
                    </button>
                  </h2>

                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the second item’s accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It’s also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="background-color: white; color:black">
                      SMP Negeri 2 Semarang (2021-2018)
                    </button>
                  </h2>

                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <strong>This is the third item’s accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It’s also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                  </div>
                </div>
              </div>

       <!-- footer -->
        <footer class="text-center p-5 bg-body-tertiary">
          <div class="mb-3">
            <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
            <a href="https://twitter.com/"><i class="bi bi-twitter"></i></a>
            <a href="https://wa.me/+62"><i class="bi bi-whatsapp"></i></a>
          </div>
          <div class="text-muted fw-semibold" style="font-family: 'Poppins', sans-serif;">
            putri nabilah &copy; 2025
          </div>
        </footer>

    <!-- back to top -->
     <button
    id="backToTop"
    class="btn btn-danger rounded-circle position-fixed bottom-0 end-0 m-3 d-none">
    <i class="bi bi-arrow-up" title="Back to Top"></i></button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
    crossorigin="anonymous"
    ></script>
    <script type="text/javascript">
        function tampilWaktu (){
        const waktu = new Date();
        const tanggal = waktu.getDate();
        const bulan = waktu.getMonth();
        const tahun = waktu.getFullYear();
        const jam = waktu.getHours();
        const menit = waktu.getMinutes();
        const detik = waktu.getSeconds();
        const arrBulan = ["1", "2", "3", "4","5","6","7","8","9","10","11","12"];
        const tanggal_full = tanggal + "/" + arrBulan[bulan] + "/" + tahun;
        const jam_full = jam + ":" + menit + ":" + detik;
        document.getElementById("tanggal").innerHTML= tanggal_full;
        document.getElementById("jam").innerHTML= jam_full;}
        tampilWaktu();
        setInterval(tampilWaktu, 1000);

    </script>
    <script type="text/javascript"> 
        const backToTop = document.getElementById("backToTop");
        window.addEventListener ("scroll", function () {
                if (window.scrollY > 300) {
                    backToTop.classList.remove("d-none");
                    backToTop.classList.add("d-block"); } 
                else {
                    backToTop.classList.remove("d-block");
                    backToTop.classList.add("d-none"); }
                    });

        backToTop.addEventListener ("click", function () {
                window.scrollTo ( { top: 0, behavior: "smooth" });
            });
    </script>
</body>
</html>