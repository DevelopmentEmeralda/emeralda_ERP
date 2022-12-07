<!-- Home Kota -->

<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-6">
        <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-nasabah"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
    </div>
    <div class="col-md-3">
        <a href="<?php echo base_url('Nasabah/export'); ?>" class="form-control btn btn-default"><i class="glyphicon glyphicon glyphicon-floppy-save"></i> Export Data Excel</a>
    </div>
    <div class="col-md-3">
        <button class="form-control btn btn-default" data-toggle="modal" data-target="#import-nasabah"><i class="glyphicon glyphicon glyphicon-floppy-open"></i> Import Data Excel</button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th style="text-align: center;">Aksi</th>
          <th>#</th>
          <th>Id Pinjaman</th>
          <th>NIK</th>
          <th>Nama Nasabah</th>
          <th>No Telepon</th>
          <th>Tanggal Pengajuan</th>
          <th>Produk</th>
          <th>Pengajuan</th>
          <th>Status</th>
          <th>Status OJK</th>
          <!-- <th>Email</th> -->
          
        </tr>
      </thead>
      <tbody id="data-nasabah">
      
      </tbody>
    </table>
  </div>
</div>

<?php echo $modal_tambah_nasabah; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataNasabah', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>
<?php
  $data['judul'] = 'Nasabah';
  $data['url'] = 'Nasabah/import';
  echo show_my_modal('modals/modal_import', 'import-nasabah', $data);
?>