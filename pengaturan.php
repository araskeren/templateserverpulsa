<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <title></title>
  </head>
  <body>
    <div class="menu">
      <h1>Sistem-Pulsa</h1>
      <hr>
      <div class="profile">
        <img class="imgprofile"src="images/profile.jpg" alt="">
        <p>Damis Bachtiar</p>
        <p>Administrator</p>
        <p>Saldo Rp.50.000</p>
      </div>
      <hr>
      <ul>
        <li><a href="pembelian.html">Pembelian</a></li>
        <li><a href="laporan.html">Laporan</a></li>
        <li><a href="deposit.html">Deposit</a></li>
        <li><a href="pengaturan.html">Pengaturan</a></li>
      </ul>
    </div>
    <div class="main">
      <h1>Update Biodata</h1>
        <div class="md">
          <div>
            <form class="" onsubmit="return Notif()" method="post">
              <div class="from-group">
                <label for="">Nama</label>
                <input type="text" name="" value="Damis Bachtiar">
              </div>
              <div class="from-group">
                <label for="">Alamat</label>
                <input type="text" name="" value="Semarang">
              </div>
              <div class="from-group">
                <label for="">Email</label>
                <input type="text" name="" value="damisbachtiar@merahputih.id">
              </div>
              <div class="from-group">
                <label for="">No Hp</label>
                <input type="text" name="" value="083842350963">
              </div>
              <div class="from-group">
                <label for="">Pin Transaksi</label>
                <input type="text" name="" value="" placeholder="Masukan Pin Anda">
              </div>
              <br>
              <div class="form-footer">
                <button type="button" class="btn btnabu" name="button">Reset</button>
                  <button type="submit" class="btn btnijo" name="button">Update</button>
              </div>
            </form>
          </div>
          <div>
            <h2>Penjelasan Form</h2>
            <dl>
              <dt>Nama</dt>
              <dd>Isi nama lengkap Anda</dd>
              <dt>Alamat</dt>
              <dd>Alamat Anda tinggal sekarang</dd>
              <dt>Email</dt>
              <dd>Email untuk konfirmasi keamanan, dan juga untuk transaksi</dd>
              <dt>Nomor HP</dt>
              <dd>NoHP untuk konfirmasi keamanan, dan juga untuk transaksi</dd>
              <dt>PIN Transaksi</dt>
              <dd>Masukkan 4 digit PIN transaksi Anda</dd>
            </dl>
          </div>
        </div>

    </div>
    <script>
function Notif() {
    alert("Data Telah Tersimpan");
}
</script>
  </body>
</html>
