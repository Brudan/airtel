<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Enos
 * Date: 20/06/13
 * Time: 19:08
 * To change this template use File | Settings | File Templates.
 */

if (!$this->ion_auth->logged_in()){
    //redirect them to the login page
    redirect('auth', 'refresh');
}

?>
<html>
    <head>
        <title><?php echo $title ?></title>
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/screen.css" type="text/css" media="screen, projection">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/print.css" type="text/css" media="print">
        <!--[if IE]>
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/ie.css" type="text/css" media="screen, projection">
        <![endif]-->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css" type="text/css" media="screen, projection">
        <script src="<?php echo base_url()?>assets/js/jquery-1.10.1.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div>
            <div class="top">
                <p>Airtel index page here</p>
                <br />
                <br />
            </div>
            <div class="main">
                <div class="nav">
                    <?php $this->load->view('templates/nav'); ?>
                </div>
