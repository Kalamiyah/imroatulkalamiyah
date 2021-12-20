<?php include("header.php"); ?>
<?php
    include("connection.php");
    $nama = "";
    $email = "";
    $komen = "";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $nama  = $_POST['nama'];
        $email = $_POST['email'];
        $komen = $_POST['message'];
    }
    if($nama!="" || $email!="" || $komen!=""){
        $sql = "INSERT INTO komentar(nama, email, pesan, tanggal)
            VALUES ('$nama', '$email', '$komen', '".date('Y-m-d')."')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>
<div id="section">
    <div id="table">
        <h2>Comments</h2>
        <table width="100%">
            <thead>
                <th>Nama</th>
                <th width="25%">Email</th>
                <th width="30%">Komentar</th>
                <th width="25%">Tanggal</th>
            </thead>
            <tbody id="comm">
            <?php 
                    $sql = "SELECT * FROM komentar ORDER BY tanggal DESC";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                          echo "<tr><td>".$row["nama"]."</td><td>".$row["email"]."</td><td>".$row["pesan"]."</td><td>".$row["tanggal"]."</td></tr>";
                        }
                    }
            ?>
            </tbody>
        </table>
    </div>
</div>
<?php include("footer.php");
    $conn->close();
?>