<?php 
if(count($all_school_name)>0){
    ?>
<table class="school_list">
    <thead>
        <tr>
    <th>School Name</th>
    <th>Location</th>
    <th>Established</th>
    <th>Action</th>
        </tr>
    </thead>
<tbody>
   <?php 
   $a=0;
       foreach ($all_school_name as $key => $value) {
          $encripted_school_id=md5($value->school_id);
           ++$a;
           if($a%2==0){
               $id='even';
           }
           else{
               $id='odd';
           }
           echo "<tr class='$id'>";
         echo "<td><a target='_blank' href='".base_url()."view_controller/HomeOfSchool/$encripted_school_id'>".$value->school_name."</a></td>"  ;
         echo "<td>";
         
         $this->db->select('*');
         $this->db->from('tbl_thana');
         $this->db->where('thana_id',$value->loc_thana);
         $query_thana=$this->db->get();
         $result_thana=$query_thana->row();
         echo $result_thana->thana.',';
         
         $this->db->select('*');
         $this->db->from('tbl_district');
         $this->db->where('district_id',$value->loc_district);
         $query_district=$this->db->get();
         $result_district=$query_district->row();
         echo $result_district->district;
         
         
             echo "</td>"  ;
             echo "<td>$value->established</td>";
              
              ?>
<td><a target="_blank" href="<?php echo base_url();?>view_controller/HomeOfSchool/<?php echo $encripted_school_id; ?>" class='go_to_link'>Go to school's home</a></td>
             <?php
         echo "</tr>";
       }
       echo "<tr id='paginate_link'>";
       echo "<td colspan='4'>";
               echo $this->pagination->create_links();
               echo "</td>";
       echo "</tr>";
   ?>
</tbody>
    </table>
<?php    
}
else{
    echo "<span class='reg_no_school'>There are no Registered Schools.</span>";
}
?>