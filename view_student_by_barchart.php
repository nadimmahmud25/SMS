<?php
        foreach($counted_student as $value){
            $class=$value->class;
            $query_by_class=$this->db->query("SELECT * FROM tbl_add_student WHERE md5(school_id)='$encripted_school_id' AND class='$class'");
            $total_student[$value->class]=$query_by_class->num_rows();
        }
	include "application/libraries/libchart/classes/libchart.php";
	$chart = new VerticalBarChart();
	$dataSet = new XYDataSet();
        if(empty($total_student[6])){
            $total_student[6]=0;
        }
        if(empty($total_student[7])){
            $total_student[7]=0;
        }
        if(empty($total_student[8])){
            $total_student[8]=0;
        }
        if(empty($total_student[9])){
            $total_student[9]=0;
        }
        if(empty($total_student[10])){
            $total_student[10]=0;
        }
        if(isset($total_student[6])){
	$dataSet->addPoint(new Point("Six", $total_student[6]));
        }
        if(isset($total_student[7])){        
	$dataSet->addPoint(new Point("Seven", $total_student[7]));
        }
        if(isset($total_student[8])){        
	$dataSet->addPoint(new Point("Eight", $total_student[8]));
        }
        if(isset($total_student[9])){        
	$dataSet->addPoint(new Point("Nine", $total_student[9]));
        }
        if(isset($total_student[10])){        
	$dataSet->addPoint(new Point("Ten", $total_student[10]));
        }
	$chart->setDataSet($dataSet);  

	$chart->setTitle("Student Overview");
	$chart->render("image/report/VerticalBarChart.png");   
?>
<div class="student_overview">
    <img src="<?php echo base_url();?>image/report/VerticalBarChart.png">
</div>