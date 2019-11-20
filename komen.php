<?php 
    if(isset($_POST['kirimselect'])){
        komenSelect();
    }

    function getFieldNama(){
        return $_POST['nama'];
    }

    function getFieldKomen(){
        return $_POST['komen'];
    }

    function komenSelect(){
        include 'koneksi.php';
        $nama = getFieldNama();
        $komen = getFieldKomen();
        if(!empty($nama)&&!empty($komen)){
            $sql = "INSERT INTO komentar (idmateri,nama,komen) VALUES (1,'".$nama."','".$komen."')";
            $sql1 = mysqli_query($conn,$sql);
            if($sql1){
                echo "<script type='text/javascript'>";
                echo "alert('Pesan Terkirim');";
                echo "document.location = 'materievolusi.php'";
                echo "</script>";
            }
        }
    }

?>