
<?php
  $no = 1;
  foreach ($dataNasabah as $nasabah) {
    ?>
    <tr>
      <td class="text-center" style="min-width:50px;">

          <span style="color: #ff0000">
            <div class="dropdown">
          
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" >
            Action
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li class="detail-dataNasabah" data-id="<?php echo $nasabah->id; ?>"><a href="#">Detail Nasabah</a></li>
            <li class="detail-dataNasabahSLIK" data-id="<?php echo $nasabah->id; ?>"> <a href="#">Cetak SLIK OJK</a></li>
            <li class="update-dataNasabah" data-id="<?php echo $nasabah->id; ?>"><a href="#">Update Riwayat SLIK OJK</a></li>
           <!--  <li class="detail-dataNasabah" data-id="<?php echo $nasabah->id; ?>"><a href="#">Mutasi Rekening</a></li>
            <li class="detail-dataNasabah" data-id="<?php echo $nasabah->id; ?>"><a href="#">Analisa Kredit</a></li> -->
           

            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </div>
      </span>
    </td>
      <td><?php echo $no; ?></td>
      <td><?php echo $nasabah->id; ?></td>
      <td><?php echo $nasabah->nik; ?></td>
      <td><?php echo $nasabah->full_name; ?></td>
      <td><?php echo $nasabah->no_telepon; ?></td>
      <td><?php echo date_format(date_create($nasabah->tanggal), 'd/m/Y'); ?></td>
      <td><?php echo $nasabah->nama_produk; ?></td>
      <td align="right"><?php echo number_format($nasabah->pengajuan); ?></td>
      <td><?php echo $nasabah->status_kredit; ?></td>
      <td><?php echo $nasabah->status_slik; ?></td>


      <!-- <td><?php echo $nasabah->email; ?></td> -->
      

    </tr>
    <?php
    $no++;
  }
?>