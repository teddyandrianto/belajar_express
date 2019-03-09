  <div class="container" style="margin-top: 70px;">
    <div class="box">
            <div class="box-header">
             <div class="box-header ui-sortable-handle" style="cursor: move;">
              <h3 class="box-title">Data Pendaftar LAB-RPL GDC</h3>
              <a href="<?php echo base_url('admin/export_data_daftar') ?>" class="btn btn-success pull-right"><i class="fas fa-table"></i> Export Excel</a>
            </div>
  <div class="box-body">
  <div class="table-responsive">
  
  <table  id="mydat" class="table table-bordered table-hover dataTables">
    <thead>
      <tr>
 
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Angkatan</th>
     <!--    <th>Email</th> -->
        <th>line ID</th>
         <th>Telegram</th> 
        <th>Telpon</th>
        <th>Devisi</th>
        <th>Photo</th>
        <th>Resume</th>
        <th>CV</th>
        <th>Mot Let</th>
        <th>Share</th>
        <th>Portofolio</th>
        <th>Status</th>
        </tr>
    </thead>
    </tbody>
  </table>
</div>
</div>
<?php foreach ($data as $d) { ?>
      <div class="modal fade " id="photo<?php echo $d->id_daftar ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-xs"" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Photo Profile <b><?php echo $d->nama ?></b></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <center>
            <img src="<?php echo base_url("assets/poto/").$d->poto ?>" class="img-responsive" width="300" hieght="400">
            </center>
           
          </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
      </div>
      </div>
<div class="modal fade " id="resume<?php echo $d->id_daftar ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg"" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Resume <b><?php echo $d->nama ?></b></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            
              <div class="form-group">
                <textarea class="form-control" id="message-text" cols="133%" rows="18%"><?php echo $d->resume?></textarea>
              </div>
           
          </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
      </div>
      </div>
        <div class="modal fade " id="cv<?php echo $d->id_daftar ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg"" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">CV Kreatif <b><?php echo $d->nama ?></b></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           
            <?php $extensi = explode(".",$d->cv_kreatif);
            $dat = $extensi[1];
              if($dat=="pdf" or $dat=="Pdf" or $dat=="PDF"){
             ?>
            <div class='embed-responsive' style='padding-bottom:50%'>
              <embed class="responsive" type="application/pdf" src="<?php echo base_url('assets/cv_kreatif/').$d->cv_kreatif ?>#zoom=85&scrollbar=0&toolbar=1&navpanes=0" width='100%' height='100%'>
            </div>
          <?php }else{ ?>
              <div  class="text-center">
              <img width="80%" src="<?php echo base_url('assets/cv_kreatif/').$d->cv_kreatif ?>">
            
              </div>
         <?php } ?>
              
           
              
              
           
          </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
      </div>
      </div>
        <div class="modal fade " id="mot<?php echo $d->id_daftar ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg"" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Mottivation Letter <b><?php echo $d->nama ?></b></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <div class="form-group">
                <textarea class="form-control" id="message-text" cols="133%" rows="18%"><?php echo $d->motivation_letter?></textarea>
              </div>
           
          </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
      </div>
      </div>
        <div class="modal fade " id="share<?php echo $d->id_daftar ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg"" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Share Info Rekrutasi <b><?php echo $d->nama ?></b></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
               <div class="embed-responsive embed-responsive-16by9">
               <center>
              <iframe class="embed-responsive-item" src="<?php echo base_url("assets/share_info_rekrutasi/").$d->share_info_rekrutasi ?>">
              </iframe>
            </center>
            </div>
            
           
          </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
      </div>
      </div>
<?php } ?>

</div>
</div>
</div>
</body>

<script type="text/javascript" language="javascript" >  
 $(document).ready(function(){  
      $('#add_button').click(function(){  
           $('#user_form')[0].reset();  
          
      })  
      var dataTable = $('#mydat').DataTable({  
         
           "processing":false,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url().'admin/fetch_daftar'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[4,5,6,8,9,10,11,12,14],  
                     "orderable":false,  
                },  
           ],  
      });
     

      
      $(document).on('click', '.chack', function(){  
           var id_daftar = $(this).attr("id");  
                $.ajax({  
                     url:"<?php echo base_url('admin/chack/')?>"+id_daftar,  
                     method:"POST",   
                     data:{id_daftar:id_daftar},  
                     success:function(data)  
                     {  
                          dataTable.ajax.reload(null, false);  
                     }  
                });  
             
      });      
       setInterval(function() {
               dataTable.ajax.reload(null, false);
            }, 5000 );
 });  
 </script>  

