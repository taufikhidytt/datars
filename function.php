<?php 
$conn = mysqli_connect("localhost", "root", "", "data_rumah_sakit");

function liatdata($liat){
    global $conn;
    $query = mysqli_query($conn, $liat);
    $rows = [];
    while ($row = mysqli_fetch_assoc($query)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambahdata($tambah){
    global $conn;
    $nik = htmlspecialchars($tambah["nik"]);
    $nama = htmlspecialchars($tambah["nama"]);
    $jeniskelamin = htmlspecialchars($tambah["jenis_kelamin"]);
    $kelas = htmlspecialchars($tambah["kelas"]);
    $tarifkamar = htmlspecialchars($tambah["tarif_kamar"]);
    $jumlahhari = htmlspecialchars($tambah["jumlah_hari"]);

    $total = $tarifkamar * $jumlahhari;

    
    $query = "INSERT INTO datapasien
                    VALUES
            ('', '$nik', '$nama', '$jeniskelamin', '$kelas', '$tarifkamar', '$jumlahhari', '$total')
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubahdata($ubah){
    global $conn;
    $id = htmlspecialchars($ubah["id"]);
    $nik = htmlspecialchars($ubah["nik"]);
    $nama = htmlspecialchars($ubah["nama"]);
    $jeniskelamin = htmlspecialchars($ubah["jenis_kelamin"]);
    $kelas = htmlspecialchars($ubah["kelas"]);
    $tarifkamar = htmlspecialchars($ubah["tarif_kamar"]);
    $jumlahhari = htmlspecialchars($ubah["jumlah_hari"]);

    $total = $tarifkamar * $jumlahhari;

    
    $query = "UPDATE datapasien SET
                nik = '$nik',
                nama = '$nama',
                jenis_kelamin = '$jeniskelamin',
                kelas = '$kelas',
                tarif_kamar = '$tarifkamar',
                jumlah_hari = '$jumlahhari',
                total = '$total'
                WHERE id = $id
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapusdata($hapus){
    global $conn;
    mysqli_query($conn, "DELETE FROM datapasien WHERE id = '$hapus'");
    return mysqli_affected_rows($conn);
}

?>