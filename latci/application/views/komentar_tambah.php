<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ubah Data</title>
  </head>
  <body>
    <h3><?php echo anchor("ckomentar/update_komentar", "Tambah Data"); ?></h3>
    <h3>Data Komentar</h3>

    <table border="1">
      <tr>
        <td>No.</td>
        <td>Nama</td>
        <td>URL</td>
        <td>Pesan</td>
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
