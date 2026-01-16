

<form method="post" action="" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" name="username" value="<?= $_SESSION['username'] ?>" readonly>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Ganti Password</label>
        <input type="password" class="form-control" name="password" placeholder="Tuliskan Password Baru Jika Ingin Mengganti Password Saja">
    </div>

    <div class="mb-3">
        <label for="foto" class="form-label">Ganti Foto Profil</label>
        <input type="file" class="form-control" name="foto">
    </div>

    <?php
    // ambil foto lama dari DB
    $user = $_SESSION['username'];
    $oldFoto = $conn->query("SELECT foto FROM user WHERE username='$user'")->fetch_assoc()['foto'];
    if ($oldFoto) {
        echo '<div class="mb-3">';
        echo '<label class="form-label">Foto Profil Saat Ini</label><br>';
        echo '<img src="img/'.$oldFoto.'" alt="Foto Profil" class="img-thumbnail" style="width:150px;">';
        echo '</div>';
    }
    ?>

    <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
</form>


    </div>
  </div>
</div>

    </div>
</div>



<?php
include "upload_foto.php";

if (isset($_POST['simpan'])) {
    $username = $_SESSION['username']; 
    $password = $_POST['password']; 
    $foto = ''; 
    $nama_foto = $_FILES['foto']['name'];

    // upload foto jika ada
    if ($nama_foto != '') {
        $cek_upload = upload_foto($_FILES["foto"]);
        if ($cek_upload['status']) {
            $foto = $cek_upload['message'];
            $oldFoto = $conn->query("SELECT foto FROM user WHERE username='$username'")->fetch_assoc()['foto'];
            if ($oldFoto) unlink("img/".$oldFoto);
        } else {
            echo "<script>alert('".$cek_upload['message']."');</script>";
            exit;
        }
    }

    // update user
    if (!empty($password)) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("UPDATE user SET password=?, foto=? WHERE username=?");
        $stmt->bind_param("sss", $password_hash, $foto, $username);
    } else {
        $stmt = $conn->prepare("UPDATE user SET foto=? WHERE username=?");
        $stmt->bind_param("ss", $foto, $username);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Profil berhasil diperbarui');document.location='admin.php?page=profile';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui profil');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
