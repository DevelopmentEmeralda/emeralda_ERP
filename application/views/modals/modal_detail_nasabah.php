<style>

    </style>
<div class="col-md-12 well">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;"><i class="fa fa-location-arrow"></i> NIK (Dari Nasabah: <b><?php echo $nasabah->nik; ?></b>)</h3>

  


  <div class="box box-body">
      <div class="col-md-12">
        <div class="col-md-1">
          NIK<br>
          Nama<br>
          TTL<br>
          Kelamin<br>
          Telepon<br>
          Email<br>
          Ibu<br>
        </div> 
        <div class="col-md-4">
          <?php
            $nohppengjau ="https://wa.me/".$nasabah->no_telepon;
          ?>
          : <?php echo $nasabah->nik; ?><br>
          : <?php echo $nasabah->full_name; ?><br>
          : <?php echo $nasabah->pob; ?>/<?php echo $nasabah->dob; ?><br>
          : <?php echo $nasabah->jk; ?><br>
          : <a href=<?php echo $nohppengjau; ?>><?php echo $nasabah->no_telepon; ?></a><br>
          : <?php echo $nasabah->email; ?><br>
          : <?php echo $nasabah->ibu_kandung; ?><br>
        </div> 

        <div class="col-lg-2">
          Alamat <br>
          Provinsi <br>
          Kota <br>
          Kec/Kel <br>
          Pendidikan <br> 
          Agama <br>
          Status <br>
        </div> 
        <div class="col-md-5">
          : <?php echo $nasabah->full_address; ?><br>
          : <?php echo $nasabah->provinsi; ?><br>
          : <?php echo $nasabah->kota; ?><br>
          : <?php echo $nasabah->kecamatan; ?> / <?php echo $nasabah->kelurahan; ?><br>
          : <?php echo $nasabah->pendidikan; ?><br>
          : <?php echo $nasabah->agama; ?><br>
          : <?php echo $nasabah->STATUS; ?><br>
        </div>
      </div>
      <div class="col-md-12">

      </div>

      <table class="table table-bordered table-striped" align="center">
        <thead>
          <tr>
            <th style="text-align:center">Penjamin</th>
            <th style="text-align:center">Nama</th>
            <th style="text-align:center">No Hp</th>
            <th style="text-align:center">Alamat</th>
            <th style="text-align:center">KTP Penjamin</th>
          </tr>
        </thead>
        <tbody>
          <tr>

            <td><?php echo $nasabah_penjamin->penjamin; ?></a></td>
            <td><?php echo $nasabah_penjamin->nama; ?></td>
            <td><?php echo $nasabah_penjamin->nohp; ?></td>
            <td><?php echo $nasabah_penjamin->alamat; ?></td>
            <td><?php echo $nasabah_penjamin->ktp; ?></td>
          </tr>  
        </tbody>
      </table>
      <br>

      <table class="table table-bordered table-striped" align="center">
        <thead>
          <tr>
            <th style="text-align:center">KTP</th>
            <th style="text-align:center">KK</th>
            <th style="text-align:center">NPWP</th>
            <th style="text-align:center">Slip Gaji / Bukti Penghasilan</th>
          </tr>
        </thead>
        <tbody>
          <tr>

            <td><?php echo $nasabah_dokumen->ktp; ?></a></td>
            <td><?php echo $nasabah_dokumen->kk; ?></td>
            <td><?php echo $nasabah_dokumen->npwp; ?></td>
            <td><?php echo $nasabah_dokumen->slip_gaji; ?></td>
          </tr>  
        </tbody>
      </table>
      <br>

      <table class="table table-bordered table-striped" align="center">
        <thead>
          <tr>
            <th style="text-align:center">Pekerjaan</th>
            <th style="text-align:center">Jabatan</th>
            <th style="text-align:center">Nama Perusahaan</th>
            <th style="text-align:center">Alamat Perusahaan</th>
            <th style="text-align:center">No Telepon</th>
            <th style="text-align:center">Lama Bekerja</th>
          </tr>
        </thead>
        <tbody>
            <?php
            foreach ($nasabah_job as $nbj) {
              $nohp ="https://wa.me/".$nbj["no_telepon"];
              ?>
            <tr>
              
              <td><?php echo $nbj["pekerjaan"]; ?></a></td>
              <td><?php echo $nbj["jabatan_bidang"]; ?></td>
              <td><?php echo $nbj["nama_perusahaan"]; ?></td>
              <td><?php echo $nbj["alamat_perusahaan"]; ?></td>
              <td><a href=<?php echo $nohp; ?> target="_blank"><?php echo $nbj["no_telepon"]; ?></a></td>
              <td><?php echo $nbj["lama_bekerja"]; ?> Tahun</td>
            </tr>  
            <?php
          }
            ?>
          
        </tbody>
      </table>
      <br>



      <table id="tabel-detail" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th style="text-align:center">Tanggal Pengajuan</th>
            <th style="text-align:center">Produk</th>
            <th style="text-align:center">Deskripsi</th>
            <th style="text-align:center">Pengajuan</th>
            <th style="text-align:center">Col OJK</th>
          </tr>
        </thead>
        <tbody id="data-pegawai">
          <?php
            foreach ($nasabah_produk as $nasabahproduk) {
              ?>
              <tr>
                <td><?php echo $nasabahproduk["tanggal"]; ?></td>
                <td><?php echo $nasabahproduk["produk"]; ?></td>
                <td><?php echo $nasabahproduk["description"]; ?></td>
                <td style="text-align:right"><?php echo number_format($nasabahproduk["pengajuan"]); ?></td>
                <td style="text-align:right"><?php echo $nasabahproduk["status_slik"]; ?></td>
              </tr>
              <?php
            }
          ?>
        </tbody>
      </table>
  </div>

  <div class="text-right">
    <button class="btn btn-danger" data-dismiss="modal"> Close</button>
  </div>
</div>