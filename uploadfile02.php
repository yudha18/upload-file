<?php
$count = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    foreach ($_FILES['files']['name'] as $i => $name) {
        $folder="uploadan/";
        if (strlen($_FILES['files']['name'][$i]) > 1) {
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i],$folder.$name)) {
                $count++;

                    echo "<script>alert('Upload Sukses!!!');</script>";
            }
            else
            {
                    echo "<script>alert('Upload Gagal');</script>";
            }
        }
    }
}
?>