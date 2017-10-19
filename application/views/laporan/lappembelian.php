<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <title><?=$title?></title>
    <link rel="stylesheet" href="<?=base_URL()?>assets/pdf/style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="<?=base_URL()?>uploads/pengaturan/logo/logo2.png" alt="logo">
      </div>
      <h1>Laporan Data Pembelian</h1>
    </header>

    <main>
      <table>
        <thead>
          <tr>
            <th width="8%" style="text-align: center;">NO</th>
            <th style="text-align: center;">NO PEMBELIAN</th>
            <th style="text-align: left;">BARANG</th>
            <th style="text-align: center;">JENIS</th>
            <th style="text-align: center;">SATUAN</th>
            <th style="text-align: center;">HARGA</th>
            <th style="text-align: center;">JUMLAH</th>
          </tr>
        </thead>
        <tbody>

          <?php 
            $no = 1; 
            foreach($pembelian as $p) :
          ?>

          <tr>
            <td style="text-align: center;"><?=$no?>.</td>
            <td style="text-align: center;"><?=$p['nopembelian']?></td>
            <td style="text-align: left;"><?=getBarang($p['kodebarang'])?></td>
            <td style="text-align: center;"><?=getJenis($p['kodejenis'])?></td>
            <td style="text-align: center;"><?=getSatuan($p['kodesatuan'])?></td>
            <td style="text-align: center;">Rp.  <?=getRupiah($p['hargapembelian'])?></td>
            <td style="text-align: center;"><?=$p['jumlahpembelian']?></td>
          </tr>
          <tr></tr>
          <tr>

          <?php $no++; endforeach; ?>
          
          <td colspan="8" class="grand total"></td>
            
          </tr>

        </tbody>
      </table>
      <!--
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
      -->
      </div>
    </main>

    <footer>
      Hak Cipta &copy; &nbsp; <?=date('Y')?> &nbsp; <a href="<?=base_URL()?>">SIIB - CV INDO GRAFIKA </a><span class="pull-right">All Right Reserved</span>
    </footer>

  </body>
</html>