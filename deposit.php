<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <script src="JS/script.js" charset="utf-8"></script>
    <script src="JS/jquery-3.2.1.min.js" charset="utf-8"></script>
    <title>Deposit</title>
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
      <h1>Request Deposit</h1>
        <div class="md">
          <div>
            <form action="laporan_deposit.html" method="post">
              <div class="from-group">
                <label for="">Pilih Produk</label>
                <select id="country" name="country">
                  <option value="" selected disabled>Pilih..</option>
                  <option value="BCA">BCA</option>
                  <option value="BNI">BNI</option>
                  <option value="BRI">BRI</option>
                  <option value="MANDIRI">MANDIRI</option>
                  <option value="MUAMALAT">MUAMALAT</option>
                </select>
              </div>
              <div class="from-group">
                <label for="">Nominal</label>
                <input type="text" name="" value="" onkeypress='return event.charCode >= 48 && event.charCode <= 57' placeholder="Masukan Nominal MISAL 50000">
              </div>
              <br>
              <div class="form-footer">
                <button type="button" class="btn btnabu" name="button" onclick="clearNominal()">Reset</button>
                  <button type="submit" class="btn btnijo" name="button">Submit</button>
              </div>
            </form>
          </div>
          <div>
            <h2>Penjelasan Form</h2>
            <dl>
                <dt>Bank</dt>
                <dd>Silakan pilih bank tujuan transfer.</dd>
                <dt>Nominal</dt>
                <dd>Ketik nominal yang ingin Anda deposit. Nominal ini harus kelipatan 1000, contoh: 10000, 11000, 16000, 20000, 100000, 500000, 510000, dst</dd>
                <dt>Klik 'Submit'</dt>
                <dd>Setelah diisi semua, klik 'Submit'. Perhatikan pesan yang muncul.</dd>
                <dd>Anda HARUS mentransfer sesuai nominal yang kami sebutkan, agar sistem dapat mengenali dana transfer Anda.</dd>
                <dd>Maksimal transfer dana adalah 1x24jam dari tanggal request. Jika melebihi batas waktu dan belum transfer, Maka Anda harus request deposit ulang.</dd>
                <dd>Dana akan masuk ke saldo Anda maksimal 15 menit setelah dana kami terima.</dd>
            </dl>
          </div>
        </div>
    </div>
  </body>
</html>
