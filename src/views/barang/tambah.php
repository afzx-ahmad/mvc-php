<div class="container">
    <h2 class="header">Tambah Barang</h2>

    <form class="form-container">
        <div class="input-group">
            <label for="namaBarang">Nama Barang: </label>
            <input type="text" name="namaBarang" id="namaBarang">
        </div>
        <div class="input-group">
            <label for="jumlah">Jumlah: </label>
            <input type="number" name="jumlah" id="jumlah">
        </div>
        <div class="input-group">
            <label for="hargaSatuan">Harga Satuan: </label>
            <input type="number" step="any" name="hargaSatuan" id="hargaSatuan">
        </div>
        <div class="input-group">
            <label for="tanggalKadaluarsa">Tanggal Kadaluarsa: </label>
            <input type="date" name="tanggalKadaluarsa" id="tanggalKadaluarsa">
        </div>

        <button type="submit" class="btn primary">
            <i class="fa-solid fa-floppy-disk"></i> Simpan
        </button>
    </form>
</div>
