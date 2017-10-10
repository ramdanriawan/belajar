<?php /**
 *
 */
class ctest extends CI_Controller
{

  function index($kata, $umur = 16)
  {
    $this->load->model("mtest");

    $data["kata"] = $kata;
    $data["umur"] = $umur;
    $this->load->view("vtest", $data);
  }

  function test($test){
    echo $test;
  }
}
 ?>
