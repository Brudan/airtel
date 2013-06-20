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
        <link rel="stylesheet" href="<?php echo base_url()?>css/screen.css" type="text/css" media="screen, projection">
        <link rel="stylesheet" href="<?php echo base_url()?>css/print.css" type="text/css" media="print">
        <!--[if IE]>
        <link rel="stylesheet" href="<?php echo base_url()?>css/ie.css" type="text/css" media="screen, projection">
        <![endif]-->
        <link rel="stylesheet" href="<?php echo base_url()?>css/style.css" type="text/css" media="screen, projection">
    </head>
    <body>
