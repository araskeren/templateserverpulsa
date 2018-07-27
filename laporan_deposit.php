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
      <h1>Data Deposit Anda</h1>
      <div class="nav">
        <button type="navlink" onclick="openContent(event,'harian')" class="active">Harian</button>
        <button type="navlink" onclick="openContent(event,'mingguan')">Mingguan</button>
        <button type="navlink" onclick="openContent(event,'bulanan')">Bulanan</button>
      </div>
      <div class="navcontent" id="harian" style="display:block;">
        <div class="full">
          <table>
            <tr>
              <th>No</th>
              <th>Bank</th>
              <th>Nominal Request</th>
              <th>Nominal Transfer</th>
              <th>Status</th>
              <th>Expire</th>
              <th>Tgl Request</th>
              <th>Tgl Update</th>
            </tr>
            <tr>
              <td>1</td>
              <td>BCA</td>
              <td>Rp.50.000</td>
              <td>Rp.50.350</td>
              <td>Pending</td>
              <td>15/Oct/2017 23:59</td>
              <td>15/Oct/2017 07:00</td>
              <td>15/Oct/2017 21:00</td>
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
              <th>Bank</th>
              <th>Nominal Request</th>
              <th>Nominal Transfer</th>
              <th>Status</th>
              <th>Expire</th>
              <th>Tgl Request</th>
              <th>Tgl Update</th>
            </tr>
            <tr>
              <td>1</td>
              <td>BCA</td>
              <td>Rp.50.000</td>
              <td>Rp.50.350</td>
              <td>Pending</td>
              <td>15/Oct/2017 23:59</td>
              <td>15/Oct/2017 07:00</td>
              <td>15/Oct/2017 21:00</td>
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
              <th>Bank</th>
              <th>Nominal Request</th>
              <th>Nominal Transfer</th>
              <th>Status</th>
              <th>Expire</th>
              <th>Tgl Request</th>
              <th>Tgl Update</th>
            </tr>
            <tr>
              <td>1</td>
              <td>BCA</td>
              <td>Rp.50.000</td>
              <td>Rp.50.350</td>
              <td>Pending</td>
              <td>15/Oct/2017 23:59</td>
              <td>15/Oct/2017 07:00</td>
              <td>15/Oct/2017 21:00</td>
            </tr>
            <tr>
              <td>2</td>
              <td>BCA</td>
              <td>Rp.50.000</td>
              <td>Rp.50.350</td>
              <td>Failed</td>
              <td>20/Oct/2017 23:59</td>
              <td>20/Oct/2017 07:00</td>
              <td>20/Oct/2017 21:00</td>
            </tr>
            <tr>
              <td>3</td>
              <td>BRI</td>
              <td>Rp.50.000</td>
              <td>Rp.50.350</td>
              <td>Succes</td>
              <td>21/Oct/2017 23:59</td>
              <td>21/Oct/2017 07:00</td>
              <td>21/Oct/2017 21:00</td>
            </tr>
          </table>
        </div>
      </div>

    </div>
  </body>
</html>
