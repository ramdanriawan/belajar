<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Komentar Ubah</title>
  </head>
  <body>
    <h3>Form Ubah Data</h3>

    <?php echo form_open("ckomentar/update_komentar/".$hasil->id) ?>

    <table>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td>
          <?php
          $nama = [
            "name" => "nama",
            "maxlength" => "30",
            "value" => $hasil->nama,
            "size" => "30"
          ]; ?>

          <?php echo form_input($nama); ?>
        </td>
      </tr>

      <tr>
        <td>URL</td>
        <td>:</td>
        <td>
          <?php
          $url = [
            "name" => "url",
            "maxlength" => "30",
            "value" => $hasil->url
          ];
          echo form_input($url); ?>
        </td>
      </tr>

      <tr>
        <td>pesan</td>
        <td>:</td>
        <td>
          <?php
          $pesan = ["name" => "pesan", "value" => $hasil->pesan, "cols" => "30", "rows" => "3"];
          echo form_textarea($pesan); ?>
        </td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td><?php
        echo
        form_submit("submit", "simpan", 'id="submit"'); ?>
      </td>
      </tr>
    </table>

    <?php echo form_close(); ?>
  </body>
</html>
