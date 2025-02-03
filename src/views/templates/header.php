<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="afzxstuff | afzx.ahmad">
        <link rel="stylesheet" href="<?php echo BASE_URL . "/css/style.css"; ?>">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.datatables.net/2.2.1/css/dataTables.dataTables.min.css">
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <div class="row-home">
            <div class="left">
                <h2>Gudangku</h2>
                <input type="text" placeholder="Cari..." id="navSearch">
                <ul id="navMenu">
                    <li>
                        <a href="<?php echo BASE_URL; ?>"><i class="fa-solid fa-house"></i> Home</a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL . "/barang"; ?>"><i class="fa-solid fa-list"></i> Barang</a>
                    </li>
                    <li>
                        <a href="<?php echo BASE_URL . "/kategori"; ?>"><i class="fa-regular fa-object-group"></i> Kategori</a>
                    </li>
                </ul>
            </div>
            <div class="right">
 
