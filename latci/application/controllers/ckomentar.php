<?php
/**
 *
 */
class ckomentar extends CI_Controller
{

  function add_komentar()
  {
    $this->load->view("komentar_tambah");

    if($this->input->post("submit")){
      $this->load->model("mkomentar");
      $this->mkomentar->tambah();
      redirect("ckomentar/index");
    }
  }

  function index(){
    $this->load->model("mkomentar");
    $data["hasil"] = $this->mkomentar->tampil();
    $this->load->view("komentar_tampil", $data);
  }

  function update_komentar($id){
    if ($_POST == NULL) {
      $this->load->model("mkomentar");
      $data["hasil"] = $this->mkomentar->ubah_tampil($id);

      $this->load->view("komentar_ubah", $data);
    }else {
      $this->load->model("mkomentar");
      $this->mkomentar->ubah($id);
      redirect("ckomentar/index");
    }
  }

  function delete_komentar($id){
    $this->db->delete("komentar", [
      "id" => $id
    ]);
    redirect("ckomentar/index");
  }
}
 ?>
