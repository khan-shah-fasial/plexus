<main>
      <div class="container-fluid">
            <div class="row">
               <div class="col-12">
                  <h1>Career Details</h1>
                  <div class="top-right-button-container">
                    
                    
                  </div>
                 
                  <div class="separator"></div>
               </div>
            </div>
            <div class="row">
               <div class="col-12 mb-4 data-table-rows data-tables-hide-filter">
                    <?php
                       if($this->session->flashdata('Merchantmsg')){
                       ?>
                         <div class="alert alert-success mb-2" role="alert">
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                           </button>

                           <?php
                               echo $this->session->flashdata('Merchantmsg');
                           ?>
                         </div>
                       <?php
                        }
                     ?>
                  <table id="datatableRows" class="data-table responsive nowrap" data-order="[[ 0, &quot;asc&quot; ]]">
                     <thead>
                        <tr>                     
                           <th>Name</th>   
                           <th>Email</th>  
                           <th>Phone</th>   
                           <th>Resume</th>   
                           <th>Message</th>   
                           <th>Status</th>

                        </tr>
                     </thead>
                     <tbody>
                        <?php
                           if(is_array($career) && !empty($career))
                           {
                              foreach($career as $val)
                               {
                        ?>
                           <tr>
                                <td><?php echo $val['cname'];?></td>
                                <td><?php echo $val['cemail'];?></td>
                                <td><?php echo $val['cphone'];?></td>
                                <td style="padding: 10px;"><a href="<?php echo base_url().'upload/staff/'.$val['c_image'];?>" target = "_blank"><?php echo $val['c_image']?></a></td>
                             
                                <td><?php echo $val['cmsg'];?></td>

                                 <td>
                                 <?php 
                                 if($val['c_status']=='1'){
                                    echo "Active";
                                 }
                                 else{ 
                                    echo "De-active"; } 
                                 ?>
                              </td>
                           </tr>
                        <?php
                              }
                           }
                        ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
</main>

