<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <script src="JS/script.js" charset="utf-8"></script>
    <script src="JS/jquery-3.2.1.min.js" charset="utf-8"></script>

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
      <h1>Pembelian</h1>
        <div class="full">
          <div class="nav">
            <button type="navlink" onclick="openContent(event,'pulsa')">Pulsa</button>
            <button type="navlink" onclick="openContent(event,'paket-data')">Paket Data</button>
          </div>
          <div id="pulsa" class="navcontent" style="display:block;">
            <div class="md">
              <div>
                <h2>Pembelian Pulsa</h2>
                <br>
                <form class="" action="laporan_pembelian-pulsa.html" method="post">
                  <div class="from-group">
                    <label for="">No Hp</label>
                    <input id="nohpa" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="nohp" maxlength="13" placeholder="Masukkan No HP Pembeli Contoh : 087812345676">
                  </div>
                  <br>
                  <div class="from-group">
                    <label for="">Pilih Produk</label>
                    <select id="operator" name="country">
                      <option value="" selected disabled>Pilih..</option>
                    </select>
                  </div>
                  <br>
                  <div class="from-group">
                    <label for="">Pin Transaksi</label>
                    <input type="text" name="" value="" placeholder="Masukkan Pin Transaksi Anda Contoh : 1234">
                  </div>
                  <br>
                  <div class="form-footer">
                    <button type="button" class="btn btnabu" name="reset" onclick="clearData();">Reset</button>
                    <button type="submit" class="btn btnijo" name="beli">Beli</button>
                  </div>
                </form>

              </div>
              <div>
                <h2>Penjelasan Form</h2>
                <dl>
                  <dt>Nomor HP Pembeli</dt>
                  <dd>Masukkan NoHP yang akan diisi</dd>
                  <dt>Pilih Produk</dt>
                  <dd>Pilih Produk/Nominal Yang diinginkan</dd>
                  <dt>PIN Transaksi</dt>
                  <dd>Masukkan 4 digit PIN transaksi Anda</dd>
                  <dt>Klik 'Beli'</dt>
                  <dd>Setelah diisi semua, klik 'Beli'. Untuk melakukan proses transaksi</dd>
                  <dt>Lihat transaksi yang telah diproses</dt>
                  <dd>Untuk melihat status transaksi silahkan <a href="laporan_pembelian-pulsa.html">Klik Disini</a></dd>
                </dl>
              </div>
            </div>
          </div>
          <div id="paket-data" class="navcontent">
            <div class="md">
              <div>
                <h2>Paket Data</h2>
                <br>
                <form class="" action="laporan_pembelian-paket-data.html" method="post">
                  <div class="from-group">
                    <label for="">No Hp</label>
                    <input id="no-tujuan" type="text" onkeypress='return event.charCode >= 48 && event.charCode <= 57' name="nohp" maxlength="13" name="" value="" placeholder="Masukkan No HP Pembeli Contoh : 087812345676">
                  </div>
                  <br>
                  <div class="from-group">
                    <label for="">Pilih Produk</label>
                    <select id="pkt-data" name="country">
                      <option value="" selected disabled>Pilih..</option>
                    </select>
                  </div>
                  <br>
                  <div class="from-group">
                    <label for="">Pin Transaksi</label>
                    <input type="text" name="" value="" placeholder="Masukkan Pin Transaksi Anda Contoh : 1234">
                  </div>
                  <br>
                  <div class="form-footer">
                    <button type="button" class="btn btnabu" name="button" onclick="clearData();">Reset</button>
                      <button type="submit" class="btn btnijo" name="button">Beli</button>
                  </div>
                </form>

              </div>
              <div>
                <h2>Penjelasan Form</h2>
                <dl>
                  <dt>Nomor HP Pembeli</dt>
                  <dd>Masukkan NoHP yang akan diisi</dd>
                  <dt>Pilih Produk</dt>
                  <dd>Pilih Produk/Nominal Yang diinginkan</dd>
                  <dt>PIN Transaksi</dt>
                  <dd>Masukkan 4 digit PIN transaksi Anda</dd>
                  <dt>Klik 'Beli'</dt>
                  <dd>Setelah diisi semua, klik 'Beli'. Untuk melakukan proses transaksi</dd>
                  <dt>Lihat transaksi yang telah diproses</dt>
                  <dd>Untuk melihat status transaksi silahkan <a href="laporan_pembelian-paket-data.html">Klik Disini</a></dd>
                </dl>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
  <script type="text/javascript">
  $(document).ready(function(){
    $('#no-tujuan').on('input',function(e){
      var a=$(this).val();
      // console.log(a.length);
      if(a.length==4){
        if(a=="0878"){
          console.log("XL");
          $('#pkt-data').append(
            new Option("XTRA COMBO 30GB* (Rp 69.000 (PROMO)","XL-PKDT-30GB"),
            new Option("XTRA COMBO 18GB* (Rp 99.000 (PROMO)","XL-PKDT-18GB")
          );
        }else if (a=="0856") {
          console.log("Indosat");
          $('#pkt-data').append(
            new Option("INDOSAT 30GB* (Rp 79.000 (PROMO)","IND-PKDT-30GB"),
            new Option("INDOSAT 18GB* (Rp 109.000 (PROMO)","IND-PKDT-18GB")
          );
        }else if (a=="0812") {
          console.log("Simpati");
          $('#pkt-data').append(
            new Option("SIMPATI LOOP 30GB* (Rp 79.000 (PROMO)","TSEL-PKDT-30GB"),
            new Option("SIMPATI LOOP 18GB* (Rp 109.000 (PROMO)","TSEL-PKDT-18GB")
          );
        }
      }else if(a.length<4){
        $('#pkt-data').find('option').remove().end().append('<option value="" selected disabled>Pilih..</option>');
      }
    });
    $('#nohpa').on('input',function(e){
      var a=$(this).val();
      // console.log(a.length);
      if(a.length==4){
        if(a=="0878"){
          console.log("XL");
          $('#operator').append(
            new Option("XL 5000 (Rp.5.250)","XL5"),
            new Option("XL 10.000 (Rp.10.250)","XL10")
          );
        }else if (a=="0856") {
          console.log("Indosat");
          $('#operator').append(
            new Option("Indosat 5000 (Rp.5.250)","IND5"),
            new Option("Indosat 10.000 (Rp.10.250)","IND10")
          );
        }else if (a=="0812") {
          console.log("Simpati");
          $('#operator').append(
            new Option("Telkomsel 5000 (Rp.5.250)","TSEL5"),
            new Option("Telkomsel 10.000 (Rp.10.250)","TSEL10")
          );
        }
      }else if(a.length<4){
        $('#operator').find('option').remove().end().append('<option value="" selected disabled>Pilih..</option>');
      }
    });
  });
  </script>

</html>
