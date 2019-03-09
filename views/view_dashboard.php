

<div class="container" style="margin-top: 70px;">
  <div class="row">
    <div class="col-lg-4 col-xs-12 col-sm-4">
          <!-- small box -->
          <div class="row" >
             <div id="load_content"> 
          <div class="col-lg-12">
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3><?php echo $this->admin_model->getpendaftar() ?></h3>
                <p>Person</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="<?php echo base_url('admin/data_pendaftar') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
           <div class="col-lg-6">
            <div class="small-box bg-blue">
              <div class="inner">
                <h3><?php echo $this->admin_model->getpendaftarchack('2') ?></h3>
                <p>Lolos Tahap Berkas</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="<?php echo base_url('admin/data_pendaftar_lolos/2') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="small-box bg-blue">
              <div class="inner">
                <h3><?php echo $this->admin_model->getpendaftarchack('4') ?></h3>
                <p>Lolos Tahap wawancara</p>
              </div>
              <div class="icon">
                <i class="fa fa-users"></i>
              </div>
              <a href="<?php echo base_url('admin/data_pendaftar_lolos/4') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        </div>

      <div class="row">
          <div class="col-lg-12">
      <div class="info-box bg-green" id="bg-green">
            <span class="info-box-icon" style="font-size: 30px">2018</span>

            <div class="info-box-content">
              <span class="info-box-text">Person</span>
              <span class="info-box-number"><?php echo  $this->admin_model->gettahun('2018') ?></span>

              <div class="progress">
                <div class="progress-bar" style="width: <?php echo  $this->admin_model->gettahun('2018')/$this->admin_model->getpendaftar()*100 ?>%"></div>
              </div>
              <span class="progress-description">
                    <?php echo  number_format($this->admin_model->gettahun('2018')/$this->admin_model->getpendaftar()*100,1) ?>% Increase 
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          </div>
          <div class="col-lg-12">
          <div class="info-box bg-red" id="bg-red">
            <span class="info-box-icon"style="font-size: 30px">2017</span>

            <div class="info-box-content">
              <span class="info-box-text">Person</span>
              <span class="info-box-number"><?php echo  $this->admin_model->gettahun('2017') ?></span>

              <div class="progress">
                <div class="progress-bar" style="width: <?php echo  number_format($this->admin_model->gettahun('2017')/$this->admin_model->getpendaftar()*100,1) ?>%"></div>
              </div>
              <span class="progress-description">
                    <?php echo  number_format($this->admin_model->gettahun('2017')/$this->admin_model->getpendaftar()*100,1) ?>% Increase
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
        <div class="col-lg-12">
          <div class="info-box bg-yellow" id="bg-yellow">
            <span class="info-box-icon" style="font-size: 30px">2016</span>

            <div class="info-box-content">
              <span class="info-box-text">Person</span>
              <span class="info-box-number"><?php echo  $this->admin_model->gettahun('2016') ?></span>

              <div class="progress">
                <div class="progress-bar" style="width: <?php echo  number_format($this->admin_model->gettahun('2016')/$this->admin_model->getpendaftar()*100,1) ?>%"></div>
              </div>
              <span class="progress-description">
                    <?php echo  number_format($this->admin_model->gettahun('2016')/$this->admin_model->getpendaftar()*100,1) ?>% Increase
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
        </div>
          </div>

        </div>
        <div class="col-xs-12 col-sm-8 col-lg-8">
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bar Chart</h3>

              <div class="box-tools pull-right">
              </div>
            </div>
            <div class="box-body">
              <div class="chart">
                <canvas id="myChart" width="100" height="60"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          
        </div>
  </div>
  
</div>

</div>
</body>

