<?php
for($i=6;$i<=10;$i++){
    for($j=0;$j<=6;$j++){
     if(!isset($class_wise_result[$j][$i])){
         $class_wise_result[$j][$i]=0;
     }   
    }
}
//echo "<pre>";
//print_r($class_wise_result);
//echo "</pre>";
	include "application/libraries/libchart/classes/libchart.php";
	$chart_of_class_six = new LineChart();
	$six_dataSet = new XYDataSet();
	$six_dataSet->addPoint(new Point("A+", $class_wise_result[0][6]));
	$six_dataSet->addPoint(new Point("A", $class_wise_result[1][6]));
	$six_dataSet->addPoint(new Point("A-", $class_wise_result[2][6]));
	$six_dataSet->addPoint(new Point("B", $class_wise_result[3][6]));
	$six_dataSet->addPoint(new Point("C", $class_wise_result[4][6]));
	$six_dataSet->addPoint(new Point("D", $class_wise_result[5][6]));
	$six_dataSet->addPoint(new Point("F", $class_wise_result[6][6]));
	$chart_of_class_six->setDataSet($six_dataSet);  
	$chart_of_class_six->setTitle("Class Six Result Overview");
	$chart_of_class_six->render("image/report/ClassSixResultOverview.png");   
        
 //---------for class seven 
        	$chart_of_class_seven = new HorizontalBarChart();
	$seven_dataSet = new XYDataSet();
	$seven_dataSet->addPoint(new Point("A+", $class_wise_result[0][7]));
	$seven_dataSet->addPoint(new Point("A", $class_wise_result[1][7]));
	$seven_dataSet->addPoint(new Point("A-", $class_wise_result[2][7]));
	$seven_dataSet->addPoint(new Point("B", $class_wise_result[3][7]));
	$seven_dataSet->addPoint(new Point("C", $class_wise_result[4][7]));
	$seven_dataSet->addPoint(new Point("D", $class_wise_result[5][7]));
	$seven_dataSet->addPoint(new Point("F", $class_wise_result[6][7]));
	$chart_of_class_seven->setDataSet($seven_dataSet);  
	$chart_of_class_seven->setTitle("Class Seven Result Overview");
	$chart_of_class_seven->render("image/report/ClassSevenResultOverview.png");

         //---------for class eight 
        	$chart_of_class_eight = new PieChart();
	$eight_dataSet = new XYDataSet();
	$eight_dataSet->addPoint(new Point("A+", $class_wise_result[0][8]));
	$eight_dataSet->addPoint(new Point("A", $class_wise_result[1][8]));
	$eight_dataSet->addPoint(new Point("A-", $class_wise_result[2][8]));
	$eight_dataSet->addPoint(new Point("B", $class_wise_result[3][8]));
	$eight_dataSet->addPoint(new Point("C", $class_wise_result[4][8]));
	$eight_dataSet->addPoint(new Point("D", $class_wise_result[5][8]));
	$eight_dataSet->addPoint(new Point("F", $class_wise_result[6][8]));
	$chart_of_class_eight->setDataSet($eight_dataSet);  
	$chart_of_class_eight->setTitle("Class Eight Result Overview");
	$chart_of_class_eight->render("image/report/ClassEightResultOverview.png");

         //---------for class nine 
        	$chart_of_class_nine = new HorizontalBarChart();
	$nine_dataSet = new XYDataSet();
//        $class_wise_result[0][9]=1;
	$nine_dataSet->addPoint(new Point("A+",$class_wise_result[0][9]));
	$nine_dataSet->addPoint(new Point("A", $class_wise_result[1][9]));
	$nine_dataSet->addPoint(new Point("A-", $class_wise_result[2][9]));
	$nine_dataSet->addPoint(new Point("B", $class_wise_result[3][9]));
	$nine_dataSet->addPoint(new Point("C", $class_wise_result[4][9]));
	$nine_dataSet->addPoint(new Point("D", $class_wise_result[5][9]));
	$nine_dataSet->addPoint(new Point("F", $class_wise_result[6][9]));
	$chart_of_class_nine->setDataSet($nine_dataSet);  
	$chart_of_class_nine->setTitle("Class Nine Result Overview");
	$chart_of_class_nine->render("image/report/ClassNineResultOverview.png");
        
         //---------for class ten 
        	$chart_of_class_ten = new VerticalBarChart();
	$ten_dataSet = new XYDataSet();
	$ten_dataSet->addPoint(new Point("A+", $class_wise_result[0][10]));
	$ten_dataSet->addPoint(new Point("A", $class_wise_result[1][10]));
	$ten_dataSet->addPoint(new Point("A-", $class_wise_result[2][10]));
	$ten_dataSet->addPoint(new Point("B", $class_wise_result[3][10]));
	$ten_dataSet->addPoint(new Point("C", $class_wise_result[4][10]));
	$ten_dataSet->addPoint(new Point("D", $class_wise_result[5][10]));
	$ten_dataSet->addPoint(new Point("F", $class_wise_result[6][10]));
	$chart_of_class_ten->setDataSet($ten_dataSet);  
	$chart_of_class_ten->setTitle("Class Ten Result Overview");
	$chart_of_class_ten->render("image/report/ClassTenResultOverview.png");
?>