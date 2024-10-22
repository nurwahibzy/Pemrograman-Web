<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $file_count = count($_FILES['files']['name']);
    $extensions = array("jpg", "jpeg", "png");
    for ($i = 0; $i < $file_count; $i++) {
        # code...
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_type = $_FILES['files']['type'][$i];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi file yang diizinkan adalah jpg, jpeg atau png.";
        }

        if ($file_size > 2097152) {
            $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB.';
        }
        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "documents/" . $file_name);
            echo "File $file_name berhasil diunggah." ."<br>";
        } else {
            echo implode(" ", $errors);
        }
    }
}
