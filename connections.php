<?php
// koneksi database
$conn = mysqli_connect(
    "localhost:3306",
    "root",
    "root",
    "ifamaweekly"
);

function tampildata($perintah)// fungsi untuk menampilkan data dari database
{
    global $conn;

    $result = mysqli_query($conn, $perintah);// jalankan perintah query ke database

    $wadah = [];// nyiapin wadah untuk menampung data dari database

    while($row = mysqli_fetch_assoc($result))// selama lemari mahasiswa masih ada isinya, ambil data dari lemari mahasiswa
    {
        $wadah[] = $row;// masukan data dari lemari mahasiswa ke dalam wadah
    }
    return $wadah;// kembalikan data dari wadah ke mahasiswa.php
}

function deletedata($id)
{
    global $conn;
    $query = "DELETE FROM mahasiswa WHERE id = $id";
    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
}

?>