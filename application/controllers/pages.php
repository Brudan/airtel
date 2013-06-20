<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Enos
 * Date: 20/06/13
 * Time: 15:37
 * To change this template use File | Settings | File Templates.
 */

class pages extends CI_Controller {

    public function index()
    {
        $this->load->view('index');
    }

}