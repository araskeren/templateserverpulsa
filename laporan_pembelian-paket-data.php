<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <script src="JS/script.js" charset="utf-8"></script>
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
      <h1>Laporan Penjualan Paket Data</h1>
      <div class="nav">
        <button type="navlink" onclick="openContent(event,'harian')">Harian</button>
        <button type="navlink" onclick="openContent(event,'mingguan')">Mingguan</button>
        <button type="navlink" onclick="openContent(event,'bulanan')">Bulanan</button>
      </div>
      <div class="navcontent" id="harian" style="display:block;">
        <div class="full">
          <table>
            <tr>
              <th>No</th>
              <th>TrxID</th>
              <th>NoTujuan</th>
              <th>Kode Pembelian</th>
              <th>Harga</th>
              <th>Status</th>
              <th>Pengirim</th>
              <th>Tanggal</th>
            </tr>
            <tr>
              <td>1</td>
              <td>101</td>
              <td>083842350963</td>
              <td>XL-PKDT-30GB</td>
              <td>Rp 69.000 (PROMO)</td>
              <td>Terkirim</td>
              <td>H2H Cell</td>
              <td>12/Agst/2017</td>
            </tr>
            <tr>
              <td>2</td>
              <td>102</td>
              <td>083842350963</td>
              <td>XL-PKDT-18GB</td>
              <td>Rp 99.000 (PROMO)</td>
              <td>Terkirim</td>
              <td>H2H Cell</td>
              <td>12/Agst/2017</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="navcontent" id="mingguan">
        <div class="header">
          <div class="judul">Range:</div>
          <div class="tanggal">
            <form action="#">
            <span>Tgl Mulai</span>
            <input type="date" name="tglRange" min="2017-01-01">
            <span>Tgl Selesai</span>
            <input type="date" name="tglRange" min="2017-01-01">
            <input type="submit">
            </form>
          </div>
        </div>
        <div class="full">
          <table>
            <tr>
              <th>No</th>
              <th>TrxID</th>
              <th>NoTujuan</th>
              <th>Kode Pembelian</th>
              <th>Harga</th>
              <th>Status</th>
              <th>Pengirim</th>
              <th>Tanggal</th>
            </tr>
            <tr>
              <td>1</td>
              <td>101</td>
              <td>083842350963</td>
              <td>XL-PKDT-30GB</td>
              <td>Rp 69.000 (PROMO)</td>
              <td>Terkirim</td>
              <td>H2H Cell</td>
              <td>12/Agst/2017</td>
            </tr>
            <tr>
              <td>2</td>
              <td>102</td>
              <td>083842350963</td>
              <td>XL-PKDT-18GB</td>
              <td>Rp 99.000 (PROMO)</td>
              <td>Terkirim</td>
              <td>H2H Cell</td>
              <td>13/Agst/2017</td>
            </tr>
            <tr>
              <td>3</td>
              <td>103</td>
              <td>083842350963</td>
              <td>XL-PKDT-18GB</td>
              <td>Rp 120.000</td>
              <td>Terkirim</td>
              <td>H2H Cell</td>
              <td>15/Agst/2017</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="navcontent" id="bulanan">
        <div class="header">
          <div class="judul">Bulan:</div>
          <div class="tanggal">
            <form action="/action_page.php">
              <input type="month" name="tanggal" value="2017-08" class="form-control">
              <input type="submit">
            </form>
          </div>
        </div>
        <div class="full">
          <table>
            <tr>
              <th>No</th>
              <th>TrxID</th>
              <th>NoTujuan</th>
              <th>Kode Pembelian</th>
              <th>Harga</th>
              <th>Status</th>
              <th>Pengirim</th>
              <th>Tanggal</th>
            </tr>
            <tr>
              <td>1</td>
              <td>101</td>
              <td>083842350963</td>
              <td>XL-PKDT-30GB</td>
              <td>Rp 69.000 (PROMO)</td>
              <td>Terkirim</td>
              <td>H2H Cell</td>
              <td>12/Agst/2017</td>
            </tr>
            <tr>
              <td>2</td>
              <td>102</td>
              <td>083842350963</td>
              <td>XL-PKDT-18GB</td>
              <td>Rp 99.000 (PROMO)</td>
              <td>Terkirim</td>
              <td>H2H Cell</td>
              <td>13/Agst/2017</td>
            </tr>
            <tr>
              <td>3</td>
              <td>103</td>
              <td>083842350963</td>
              <td>XL-PKDT-18GB</td>
              <td>Rp 120.000</td>
              <td>Terkirim</td>
              <td>H2H Cell</td>
              <td>15/Agst/2017</td>
            </tr>
            <tr>
              <td>4</td>
              <td>104</td>
              <td>083842350963</td>
              <td>XL-PKDT-1GB</td>
              <td>Rp 12.000</td>
              <td>Terkirim</td>
              <td>H2H Cell</td>
              <td>30/Agst/2017</td>
            </tr>
          </table>
        </div>
      </div>


    </div>
  </body>
</html>
