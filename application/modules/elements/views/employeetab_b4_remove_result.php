<?php 
$cur_url = current_url();
if(!empty($this->input->get('EC'))){
    $ExEc=$this->input->get('EC');
}else{
    $ExEc='';
}
?>
<section>
<nav>
    <ol class="cd-breadcrumb triangle">
        <li <?php if (strpos($cur_url, 'employee/personal_details') !== false) {  echo 'class="current"'; } ?>>
            <a <?php if (empty($this->input->get('EC'))){ echo 'href="'.base_url().'employee/personal_details"'; }else{ echo 'href="'.base_url().'employee/personal_details?EC='.$ExEc.'"'; } ?>>Personal</a> 
        </li>
        <li <?php if (strpos($cur_url, 'employee/service_details') !== false) {  echo 'class="current"'; } ?>>
            <a <?php if (empty($this->input->get('EC'))){ echo 'href="'.base_url().'employee/service_details"'; }else{ echo 'href="'.base_url().'employee/service_details?EC='.$ExEc.'"'; } ?>>Service</a> 
        </li>
        <li <?php if (strpos($cur_url, 'employee/academic_details') !== false) {  echo 'class="current"'; } ?>>
            <a <?php if (empty($this->input->get('EC'))){ echo 'href="'.base_url().'employee/academic_details"'; }else{ echo 'href="'.base_url().'employee/academic_details?EC='.$ExEc.'"'; } ?>>Academic</a> 
        </li>
        <li <?php if (strpos($cur_url, 'employee/result_details') !== false) {  echo 'class="current"'; } ?>>
            <a <?php if (empty($this->input->get('EC'))){ echo 'href="'.base_url().'employee/result_details"'; }else{ echo 'href="'.base_url().'employee/result_details?EC='.$ExEc.'"'; } ?>>Result</a> 
        </li>
        <li <?php if (strpos($cur_url, 'employee/family_details') !== false) {  echo 'class="current"'; } ?>>
            <a <?php if (empty($this->input->get('EC'))){ echo 'href="'.base_url().'employee/family_details"'; }else{ echo 'href="'.base_url().'employee/family_details?EC='.$ExEc.'"'; } ?>>Family</a> 
        </li>
        <li <?php if (strpos($cur_url, 'employee/payscale_section') !== false) {  echo 'class="current"'; } ?>>
            <a <?php if (empty($this->input->get('EC'))){ echo 'href="'.base_url().'employee/payscale_section"'; }else{ echo 'href="'.base_url().'employee/payscale_section?EC='.$ExEc.'"'; } ?>>Pay-Level</a> 
        </li>
        <li <?php if (strpos($cur_url, 'employee/award_section') !== false) {  echo 'class="current"'; } ?>>
            <a <?php if (empty($this->input->get('EC'))){ echo 'href="'.base_url().'employee/award_section"'; }else{ echo 'href="'.base_url().'employee/award_section?EC='.$ExEc.'"'; } ?>>Awards</a> 
        </li>
        <li <?php if (strpos($cur_url, 'employee/training_section') !== false) {  echo 'class="current"'; } ?>>
            <a <?php if (empty($this->input->get('EC'))){ echo 'href="'.base_url().'employee/training_section"'; }else{ echo 'href="'.base_url().'employee/training_section?EC='.$ExEc.'"'; } ?>>Training</a> 
        </li>
        <li <?php if (strpos($cur_url, 'employee/performance_section') !== false) {  echo 'class="current"'; } ?>>
            <a <?php if (empty($this->input->get('EC'))){ echo 'href="'.base_url().'employee/performance_section"'; }else{ echo 'href="'.base_url().'employee/performance_section?EC='.$ExEc.'"'; } ?>>APAR</a> 
        </li>
        <li <?php if (strpos($cur_url, 'employee/promotion') !== false) {  echo 'class="current"'; } ?>>
            <a <?php if (empty($this->input->get('EC'))){ echo 'href="'.base_url().'employee/promotion"'; }else{ echo 'href="'.base_url().'employee/promotion?EC='.$ExEc.'"'; } ?>>Promotion</a> 
        </li>
        <li <?php if (strpos($cur_url, 'employee/financial') !== false) {  echo 'class="current"'; } ?>>
            <a <?php if (empty($this->input->get('EC'))){ echo 'href="'.base_url().'employee/financial"'; }else{ echo 'href="'.base_url().'employee/financial?EC='.$ExEc.'"'; } ?>>Financial Upgradation</a> 
        </li>
        <li <?php if (strpos($cur_url, 'employee/teacher_exchange') !== false) {  echo 'class="current"'; } ?>>
            <a <?php if (empty($this->input->get('EC'))){ echo 'href="'.base_url().'employee/teacher_exchange"'; }else{ echo 'href="'.base_url().'employee/teacher_exchange?EC='.$ExEc.'"'; } ?>>Teacher Exchange Program</a> 
        </li>
        <li <?php if (strpos($cur_url, 'employee/foreign_visit') !== false) {  echo 'class="current"'; } ?>>
            <a <?php if (empty($this->input->get('EC'))){ echo 'href="'.base_url().'employee/foreign_visit"'; }else{ echo 'href="'.base_url().'employee/foreign_visit?EC='.$ExEc.'"'; } ?>>Foreign Visit</a> 
        </li>
    </ol>
    </nav>
</section>