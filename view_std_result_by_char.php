<script type="text/javascript">
	$(function() {
		$( "#accordion" ).accordion();
	});
</script>
<?php
$this->load->view("resultLibCharCreate.php")
?>
<div id="accordion">
    <h3><a href="#" class="basic">View Class Six Result By Line Chart</a></h3>
        <div id="one">
    <img src="<?php echo base_url();?>image/report/ClassSixResultOverview.png">
	</div>
    <h3><a href="#" class="basic">View Class Seven Result By Horizontal Bar Chart</a></h3>
        <div id="one">
    <img src="<?php echo base_url();?>image/report/ClassSevenResultOverview.png">
	</div>
    <h3><a href="#" class="basic">View Class Eight Result By Pie Chart</a></h3>
        <div id="one">
    <img src="<?php echo base_url();?>image/report/ClassEightResultOverview.png">
	</div>
    <h3><a href="#" class="basic">View Class Nine Result By Horizontal Bar Char</a></h3>
        <div id="one">
    <img src="<?php echo base_url();?>image/report/ClassNineResultOverview.png">
	</div>
    <h3><a href="#" class="basic">View Class Ten Result By Vertical Bar Chart</a></h3>
        <div id="one">
    <img src="<?php echo base_url();?>image/report/ClassTenResultOverview.png">
	</div>
</div>

