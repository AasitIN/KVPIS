<?php echo $this->load->view('elements/header'); ?>
<div id="wrapper">
    <?php echo $this->load->view('elements/left_menu'); ?>
    <?php echo (isset($content))?$content:''; ?>
    <?php echo $this->load->view('elements/footer'); ?>
</div>	


