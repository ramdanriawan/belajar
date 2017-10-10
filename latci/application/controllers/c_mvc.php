<?php /**
 *
 */
class c_mvc extends CI_Controller
{

  function index()
  {
    $this->load->model("m_mvc");
    $data = $this->m_mvc->mvc();
    $this->load->view("v_mvc", $data);
  }
}
 ?>
