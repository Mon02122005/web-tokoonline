<?php
    require "koneksi.php";

    $queryProduk = mysqli_query($con,"SELECT id, nama, harga, foto, detail FROM produk LIMIT 6");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online | Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require "navbar.php" ?>
    
    <!-- banner -->
    <div class="container-fluid d-flex align-items-center banner">
        <div class="container text-center text-white">
            <h1>Cyber Electro ID</h1>
            <h3>Mau Cari Apa?</h3>
            <div class="col-md-8 offset-md-2">
                <form method="get" action="produk.php">
                    <div class="input-group input-group-lg my-4">
                        <input type="text" class="form-control" placeholder="Nama Produk" aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword">
                        <button type="submit" class="btn warna2 text-white">Telusuri</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- highlight kategori -->
    <div class="container-fluid  py-5">
        <div class="container text-center">
            <h3>Kategori Terlaris</h3>

            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-laptop-asus d-flex justify-content-center align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Laptop Asus">Laptop Asus</a></h4>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-laptop-acer d-flex justify-content-center align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Henpone Samsung">Henpone Samsung</a></div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="highlighted-kategori kategori-laptop-hp d-flex justify-content-center align-items-center">
                        <h4 class="text-white"><a class="no-decoration" href="produk.php?kategori=Sepeda Lipat">Sepeda Lipat</a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- tentang kami -->
    <div class="container-fluid warna3 py-5">
        <div class="container text-center text-white">
            <h3>Tentang Kami</h3>
            <p class="fs-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis obcaecati reprehenderit perspiciatis totam tempore minima tempora soluta quaerat nesciunt. Alias, ratione! Ea officia dignissimos modi impedit consequatur excepturi atque recusandae eligendi hic et architecto porro magnam fuga, quod quae eum earum natus repellendus quo adipisci quas. Id tempora qui a pariatur nam error fuga veritatis harum magni esse, omnis similique facilis fugit fugiat libero aspernatur nemo cumque saepe aperiam quibusdam eligendi assumenda, perferendis commodi. Sunt vel quas velit doloribus ad!</p>
        </div>
    </div>

    <!-- produk -->
    <div class="container-fluid py-5">
        <div class="container text-center">
            <h3>Produk</h3>

            <div class="row mt-5">
                <?php while($data = mysqli_fetch_array($queryProduk)){ ?>
                <div class="col-sm-6 col-md-4 mb-3">
                    <div class="card h-100">
                        <div class="image-box">
                            <img class="card-img-top" src="image/<?php echo $data['foto']; ?>" alt="...">
                        </div>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $data['nama']; ?></h4>
                                <p class="card-text text-truncate"><?php echo $data['detail']; ?></p>
                                <p class="card-text text-harga">Rp. <?php echo $data['harga']; ?></p>
                                <a href="produk-detail.php?nama=<?php echo $data['nama']; ?>" class="btn warna2 text-white">Detail</a>
                            </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <a href="produk.php" class="btn btn-outline warna2 text-white mt-3">Lihat Selengkapnya</a>
        </div>
    </div>

    <!-- footer -->
    <?php require "footer.php"; ?>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>
</html>