

<?php

$user = $_SESSION['username'];
$data_user = $conn->query("SELECT * FROM user WHERE username='$user'")->fetch_assoc();

// article
$sql1 = "SELECT * FROM article";
$hasil1 = $conn->query($sql1);
$jumlah_article = $hasil1->num_rows;

// gallery
$sql2 = "SELECT * FROM gallery";
$hasil2 = $conn->query($sql2);
$jumlah_gallery = $hasil2->num_rows;
?>



<div class="text-center my-4">
    <p class="fs-3">Selamat Datang,</p>

    <h5 class="text-danger fw-bold fs-3"><?= $data_user['username'] ?></h5>
    <img src="img/<?= $data_user['foto'] ?>" class="img-fluid rounded-circle mb-2" style="width:160px;height:160px;" alt="Foto Profil">
    
</div>


<div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center pt-4">
    <div class="col">
        <div class="card border border-danger mb-3 shadow" style="max-width: 18rem;">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="p-3">
                        <h5 class="card-title"><i class="bi bi-newspaper"></i> Article</h5> 
                    </div>
                    <div class="p-3">
                        <span class="badge rounded-pill text-bg-danger fs-2"><?php echo $jumlah_article; ?></span>
                    </div> 
                </div>
            </div>
        </div>
    </div> 
    <div class="col">
        <div class="card border border-danger mb-3 shadow" style="max-width: 18rem;">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div class="p-3">
                        <h5 class="card-title"><i class="bi bi-camera"></i> Gallery</h5> 
                    </div>
                    <div class="p-3">
                        <span class="badge rounded-pill text-bg-danger fs-2">
    <?php echo $jumlah_gallery; ?>
</span>

                    </div> 
                </div>
            </div>
        </div>
    </div> 
</div>
