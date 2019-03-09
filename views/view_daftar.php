	<div class="container" style="margin-top: 70px;">
    <div class="box">
            <div class="box-header">
             <div class="box-header ui-sortable-handle" style="cursor: move;">
              <h3 class="box-title">Data Pendaftar LAB-RPL GDC</h3>
              <a href="<?php echo base_url('admin/export_data_daftar') ?>" class="btn btn-success pull-right"><i class="fas fa-table"></i> Export Excel</a>
            </div>
  <div class="box-body">
  <div class="table-responsive">
  
  <table  id="id_table" class="table table-bordered table-hover dataTables">
    <thead>
      <tr>
        <th></th>
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
    <tbody>
    	<?php $no =1; foreach ($data as $d ) { ?>
      <tr>
         <td>
        <?php if ($d->chack>=1) { ?>
        <a href="<?php echo base_url('admin/chack/').$d->id_daftar.'/0' ?>" class="btn btn-success btn-xs">
        <span class="fa fa-check-square"></span></a>  
        <?php }else{ ?>
        <a href="<?php echo base_url('admin/chack/').$d->id_daftar.'/1' ?>" class="btn btn-info btn-xs">
        <span class="fa fa-minus"></span></a>  
        <?php } ?>  
        </td>
        <td><?php echo $no++ ?></td>
        <td><?php echo $d->nim ?></td>
        <td><?php echo $d->nama ?></td>
        <td><?php echo $d->angkatan ?></td>
        <!-- <td><?php echo $d->email ?></td> -->
        <td><?php echo $d->line_id ?></td>
        <td><?php echo $d->telegram_id ?></td> 
        <td><?php echo $d->no_telpon ?></td>
        <td><?php echo $d->divisi ?></td>
         <td><center><button class="btn btn-xs btn-danger"  data-toggle="modal" data-target="#photo<?php echo $d->id_daftar ?>"><i class="fa fa-eye"></i> view</button></center></td>
        <td><center><button class="btn btn-xs btn-info"  data-toggle="modal" data-target="#resume<?php echo $d->id_daftar ?>"><i class="fa fa-eye"></i> view</button></center></td>
        <td><center><button class="btn btn-xs btn-success" data-toggle="modal" data-target="#cv<?php echo $d->id_daftar ?>"><i class="fa fa-eye"></i> view</button></center></td>
        <td><center><button class="btn btn-xs btn-warning" data-toggle="modal" data-target="#mot<?php echo $d->id_daftar ?>"><i class="fa fa-eye"></i> view</button></center></td>
         <td><center><button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#share<?php echo $d->id_daftar ?>"><i class="fa fa-eye"></i> view</button></center></td>
        <td>
        
                 <?php 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
                 ?>
        	
        </td>
         <td>
        <?php if ($d->chack==2) { ?>
                <span class="label label-default">sudah Lulus</span>  
        <?php }else{ ?>
        <a href="<?php echo base_url('admin/chack/').$d->id_daftar.'/2' ?>" class="btn btn-lulus btn-xs">
        <i class="fa fa-check"></i> Lulus</a>  
        <?php } ?>    
        </td>
      </tr>
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
		      	<div class='embed-responsive' style='padding-bottom:50%'>
		      	<?php $extensi = explode(".",$d->cv_kreatif);
		      	$dat = $extensi[1];
		      		if($dat=="pdf" or $dat=="Pdf" or $dat=="PDF"){
		      	 ?>
		          <embed class="responsive" type="application/pdf" src="<?php echo base_url('assets/cv_kreatif/').$d->cv_kreatif ?>#zoom=85&scrollbar=0&toolbar=1&navpanes=0" width='100%' height='100%'>
		      <?php }else{ ?>
		      <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="100%" height="120%" src="<?php echo base_url('assets/cv_kreatif/').$d->cv_kreatif ?>">
              </iframe>
            </div>
		     <?php } ?>
		          </div>
		          
		       
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
      
    </tbody>
  </table>
</div>
</div>

</div>
</div>
</div>
</body>

