
<div class="full_division">
    <div class="student_search">
        <div class="search_font_type">
        Student  Search
        </div>

    </div>
    <div class="type_student_search">
        <?php
        if($this->session->userdata('execption')){
            ?>
        <div class="wrong">
        <?php
          echo "<h3>".$this->session->userdata('execption')."</h3>";   
           $this->session->unset_userdata('execption');
         ?>
               </div>
            <?php
        }
        ?>
     

        <form action="<?php echo base_url();?>search_controller/SearchResult/<?php echo $encripted_school_id ?>" method="post">
        <table align="center" style="margin-top: 15px;">
            
     
            <tr>
                
                <td id="font_search_type">Select Class:</td>
                <td>
                    <select class="select_option_type_gen_type_student" name="search_class" onchange="makerequest(this.value,'roll','<?php echo $encripted_school_id;?>')">
                        <option value=" ">------Class------</option>
                        <option value="6">Six</option>
                        <option value="7">Seven</option>
                        <option value="8">Eight</option>
                        <option value="9">Nine</option>
                        <option value="10">Ten</option>
                    </select>
                    
                </td>
                
            </tr>
           
            <tr>
                <td>Student Roll:</td>
                <td>
                    <select class="select_option_type_gen_type_student" id="roll" name="search_roll">
                        <option>Select Roll</option>
                        <option></option>
                    </select>
                    
                        
                  
                </td>
            </tr>
       
        </table>
                
              
       <button class="submit" type="submit">Search</button>
        </form>
         
        
    </div>
</div>