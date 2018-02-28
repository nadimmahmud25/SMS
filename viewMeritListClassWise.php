<?php
$this->load->view("school_home/collect_info.php");
$obj_for_merit_list=new Collect_Info();
?>
<script>
	$(function() {
		$( "#tabs" ).tabs({
			event: "mouseover"
		});
	});
	</script>
<?php

//echo $class_wise_merit_list;
?>
<div id="tabs">
	<ul>
		<li><a href="#tabs-1">Six</a></li>
		<li><a href="#tabs-2">Seven</a></li>
		<li><a href="#tabs-3">Eight</a></li>
		<li><a href="#tabs-4">Nine</a></li>
		<li><a href="#tabs-5">Ten</a></li>
	</ul>
    
	<div id="tabs-1">
            <?php
        $six=$obj_for_merit_list->merit_list($encripted_school_id,'6');            
                    if(count($six)>0){
                     $class=6;
                        $obj_for_merit_list->viewMeritListByTable($encripted_school_id,$six,$class);
                    }
                    else{
                        echo "<center>There have no student in merit list.</center>";
                    }
                    ?>
	</div>
    
	<div id="tabs-2">
        <?php
        $seven=$obj_for_merit_list->merit_list($encripted_school_id,'7');
                    if(count($seven)>0){
                     $class=7;
                        $obj_for_merit_list->viewMeritListByTable($encripted_school_id,$seven,$class);
                    }
                    else{
                        echo "<center>There have no student in merit list.</center>";
                    }        
        ?>           
	</div>
    
	<div id="tabs-3">
        <?php
        $eight=$obj_for_merit_list->merit_list($encripted_school_id,'8');
                    if(count($eight)>0){
                     $class=8;
                        $obj_for_merit_list->viewMeritListByTable($encripted_school_id,$eight,$class);
                    }
                    else{
                        echo "<center>There have no student in merit list.</center>";
                    }         
        ?>             
	</div>
    
	<div id="tabs-4">
        <?php
        $nine=$obj_for_merit_list->merit_list($encripted_school_id,'9');
                    if(count($nine)>0){
                     $class=9;
                        $obj_for_merit_list->viewMeritListByTable($encripted_school_id,$nine,$class);
                    }
                    else{
                        echo "<center>There have no student in merit list.</center>";
                    }         
        ?>            
	</div>
    
	<div id="tabs-5">
        <?php
        $ten=$obj_for_merit_list->merit_list($encripted_school_id,'10');
                    if(count($ten)>0){
                     $class=10;
                        $obj_for_merit_list->viewMeritListByTable($encripted_school_id,$ten,$class);
                    }
                    else{
                        echo "<center>There have no student in merit list.</center>";
                    }            
        ?>
	</div>
</div>