<?php 

// Merubah array ke json dengan json_encode()
    // $mhs = [
    //     [
    //     "nama" => "Muhammad Zhafari",
    //     "nim" => "001",
    //     "email" => "muhammad.zhafari17@mhs.uinjkt.ac.id"
    //     ],
    //     [
    //     "nama" => "Samsul Bahri",
    //     "nim" => "002",
    //     "email" => "samsul.bahri17@mhs.uinjkt.ac.id"
    //     ]
    // ];

    // Menggunakan database

    // Buat koneksi
    $conn = new mysqli("localhost", "root", "", "siska");

    // Cek koneksi
    if (mysqli_connect_error()) {
        die("Database connection failed:" . mysqli_connect_error());
    } else {
        echo "Connected succesfully!";
    }

    echo "<br>";
    echo "<br>";
    
    // Query data
    $sql = "SELECT * from barang";
    $results = $conn->query($sql);
    while($row = $results->fetch_assoc()) {
        $data = json_encode($row);
        echo $data;
    }
    
    // Tutup koneksi
    $conn->close();

?>