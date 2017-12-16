<!DOCTYPE html>
<html>
<head>
    <title>Aswaq.com</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href='<?php echo base_url()."assets/shortcut.jpg";?>' >
    
    <!-- Bootstrap CSS -->
    <link href='<?php echo base_url() . "lib/bootstrap/css/bootstrap.min.css"; ?>' rel="stylesheet" type="text/css">
    <link href='<?php echo base_url() . "lib/font-awesome/css/font-awesome.min.css"; ?>' rel="stylesheet" type="text/css">
    <link href='<?php echo base_url() . "css/icons.css"; ?>' rel="stylesheet">
    <style type="text/css">
    	nav#header{margin-bottom: 3em;}
    </style>
  </head>
<body>

   <?php $this->load->view('landing_page_header'); ?>
       
        <!--  main content -->
<div class="container" id="mainContent">
    <?php //$this->load->view('landing_page_registration_1_2'); ?>

</div>


	<?php $this->load->view('footer'); ?>
<script src='<?php echo base_url() . "lib/jquery/jquery.min.js"; ?>' type="text/javascript"></script>
<!--<script src='<php echo base_url() . "lib/popper/popper.min.js"; ?>' type="text/javascript"></script>
<script src='<php echo base_url() . "lib/bootstrap/js/bootstrap.min.js"; ?>' type="text/javascript"></script>-->
<script src='<?php echo base_url() . "lib/sammy/lib/min/sammy-0.7.6.min.js"; ?>' type="text/javascript"></script>
<script src='<?php echo base_url() . "js/h-navigation.js"; ?>' type="text/javascript"></script>
</body>
</html>