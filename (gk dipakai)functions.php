<?php 
    //koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");
    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }
    //registrasi
    function registrasi($data){
        global $conn;
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn, $data["password"]);
        $password2 = mysqli_real_escape_string($conn, $data["password2"]);

        //cek username sudah ada atau belum
        $result =  mysqli_query($conn, "SELECT username FROM user WHERE username ='$username'");
        if ( mysqli_fetch_assoc($result)) {
            echo "<script>
                alert('username sudah terdaftar');
            </script>";
            return false;
        }

        //cek konfirmasi password
        if($password !== $password2) {
            echo "<script>
                alert('konfirmasi password tidak sesuai');
            </script>";
            return false;
        } 

        //tambahkan userbaru ke database
        mysqli_query($conn, "INSERT INTO user VALUES('', '$username','$password')");
        return mysqli_affected_rows($conn);
    }

    //hapus
    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    }

    //ubah
    function ubah($data) {
        global $conn;
        $id = $data["id"];
        $nrp = $data["nrp"];
        $nama = $data["nama"];
        $email = $data["email"];
        $jurusan = $data["jurusan"];
        $gambar = $data["gambar"];

        $query = "UPDATE mahasiswa SET 
                nrp = '$nrp',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
                WHERE id = $id
                ";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
?>