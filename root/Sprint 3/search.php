<?php
    
    $con = new PDO("mysql:host=localhost;dbname=tes",'root','');

    if (isset($_POST['cari'])){
        $str = $_POST['keyword'];
        $sth = $con->prepare("SELECT kategori FROM 'keyword' WHERE nama = '$str'");

        $sth->setFetchMode(PDO:: FETCH_OBJ);
        $sth-> execute();

        if($row = $sth->fetch())
        {
            ?>
            <br><br><br>
            <table>
                <tr>
                    <th>Gambar</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Stok</th>
                </tr>
                <tr>
                    <td><?php echo $row->gambar; ?></td>
                    <td><?php echo $row->nama; ?></td>
                    <td><?php echo $row->harga; ?></td>
                    <td><?php echo $row->stok; ?></td>
                </tr>
            </table>
            <?php
        }
        
        else{
            echo "Barang tidak ditemukan";
        }
    }

  	?>
