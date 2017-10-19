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
      <h1>Laporan Data Pemasok Barang</h1>
    </header>

    <main>
      <table>
        <thead>
          <tr>
            <th style="text-align: center">NO</th>
            <th style="text-align: center">KODE PEMASOK</th>
            <th style="text-align: left">NAMA PEMASOK</th>
            <th style="text-align: left">TELP / HP</th>
            <th style="text-align: left">EMAIL</th>
            <th style="text-align: left">ALAMAT</th>
          </tr>
        </thead>
        <tbody>

          <?php 
            $no = 1; 
            foreach($pemasok as $p)  :
          ?>

          <tr>
            <td style="text-align: center"><?=$no?>.</td>
            <td style="text-align: center"><?=$p->kodepemasok?></td>
            <td style="text-align: left"><?=$p->namapemasok?></td>
            <td style="text-align: left"><?=$p->telp?></td>
            <td style="text-align: left"><?=$p->email?></td>
            <td style="text-align: left"><?=$p->alamat?></td>
          </tr>
          <tr></tr>
          <tr>

          <?php $no++; endforeach; ?>
          
          <td colspan="5" class="grand total">TOTAL PEMASOK BARANG : </td>
            <td class="grand total" style="text-align: center"><?=$pmk?></td>
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