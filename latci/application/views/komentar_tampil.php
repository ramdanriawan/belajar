<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Komentar Tampil</title>
  </head>
  <body>
    <h3><?php echo anchor("ckomentar/add_komentar", "Tambah Data"); ?></h3>
    <h3>Data Komentar</h3>

    <table border="1">
      <tr>
        <td>No.</td>
        <td>Nama</td>
        <td>URL</td>
        <td>Pesan</td>
        <td>Aksi</td>
      </tr>

        <?php $no = 1;
        if(!empty($hasil)){
          foreach ($hasil as $data):
        ?>

        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $data->nama; ?></td>
          <td><?php echo $data->url; ?></td>
          <td><?php echo $data->pesan; ?></td>
          <td><a href='<?php echo base_url() . "index.php/ckomentar/update_komentar/".$data->id; ?>'>Ubah</a> | <a href='<?php echo base_url() . "index.php/ckomentar/delete_komentar/".$data->id; ?>'>Hapus</a></td>
        </tr>

        <?php $no++; endforeach;
      }else {

      ?>

      <tr>
        <td colspan="5"><b>DATA BELUM ADA</b></td>
      </tr>
    <?php } ?>
    </table>
  </body>
</html>
