<?php

class Route
{
    public function run()
    {
        $router = new App();

        $router->setDefaultController("DefaultApp");
        $router->setDefaultMethod("index");

        $router->get("/barang", ["BarangController", "index"]);
        $router->get("/barang/tambah", ["BarangController", "insert"]);
        $router->get("/barang/edit", ["BarangController", "edit"]);

        $router->get("/kategori", ["KategoriController", "index"]);

        $router->run();
    }
}
