<div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Data User</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>back/home_back">Home</a></li>
                        <li class="breadcrumb-item active">Edit User</li>
                    </ol>
                </div>
            </div>
                    <!-- /.col-lg-12 

<!-- /.row -->
             <div class="card">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0" align="center">Edit User</h3>
                            <p class="text-muted m-b-30 font-13" align="center"> Form Registrasi </p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                        <?php 
  if ($this->session->flashdata('sukses')) {
    echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
  }
  echo validation_errors('<p class="warning" style="margin: 10px 20px;">','</p>');
   ?>
          <div class="about-top-info">
            
             <!--  <div class="col-md-4 about-img">
               <img src="<?php echo base_url() ?>asset/front/images/icon-doc.png" alt=""/>
             </div> -->
              <div class="col-md-12 about-desc" align="center">
                <div class="col-md-6" align="center">
                            <?php 
                            foreach($data_user as $list) { ?>
                               
                                <div class="col-sm-12 col-xs-12">
                                    <form class="form-horizontal" method="post" action="<?php echo base_url() ?>back/user/edit_aksi">
                                    <div class="control-group">
                                    <input type="hidden" name="id_user" class="form-control" value="<?php echo $list['id_user']; ?>" />
                                    </div>
                                       <div class="control-group">
                                    <label class="control-label">No Pendaftaran <i style="color:red">*</i></label>
                                    <div class="controls">
                                   
                                        <input type="text" class="form-control" name="kode_pendaftaran" id="kode_pendaftaran" readonly="readonly" value="<?php echo $list['kode_pendaftaran']; ?>"/>
                                        <small><?php echo form_error('kode') ?></small>
                                    </div>
                                </div>
                                        <div class="form-group">
                                            <label for="exampleInputuname">Nama</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="nama" id="nama" placeholder="nama" value="<?php echo $list['nama']; ?>">
                                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Enter alamat" value="<?php echo $list['alamat']; ?>">
                                                <div class="input-group-addon"><i class="ti-home"></i></div>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                                        <label class="control-label">Jenis Kelamin</label>
                                                        <div class="radio-list">
                                                            <label class="radio-inline p-0">
                                                                <div class="radio radio-info">
                                                                    <input type="radio" name="jenis_kelamin" id="radio1"  value="L"<?php if($list['jenis_kelamin'] == 'L'){ echo 'checked'; } ?>>
                                                                    <label for="radio1">Laki-laki</label>
                                                                </div>
                                                            </label>
                                                            <label class="radio-inline">
                                                                <div class="radio radio-info">
                                                                    <input type="radio" name="jenis_kelamin" id="radio2"  value="P"<?php if($list['jenis_kelamin'] == 'P'){ echo 'checked'; } ?>>
                                                                    <label for="radio2">Perempuan </label>
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                          <div class="form-group">
                                            <label for="exampleInputuname">User Name</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="username" id="Username" placeholder="Username" value="<?php echo $list['username']; ?>">
                                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputpwd1">Password</label>
                                            <div class="input-group">
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter pwd" value="">
                                                <div class="input-group-addon"><i class="ti-lock"></i></div>
                                            </div>
                                        </div>
                                         <?php $level= $this->session->userdata('level'); 
                                if($level==1){?>
                                                    <div class="form-group">
                                                        <label class="control-label">Level</label>
                                                        <select class="form-control" name="id_level" >
                                                              <?php 
                    foreach($data_level as $row_level) { ?>
                    <option value="<?php echo $row_level->id_level?>"<?php if($list['id_level'] == ($row_level->id_level)){ echo 'selected'; } ?>><?php echo $row_level->level?></option>
                    <?php } ?>
                                                        </select> <span class="help-block"> Select your Level </span> </div>
                                                </div>
                                       <?php } }?>
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10"><i class="fa fa-check"></i> Submit</button>
                                            <button type="reset" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div></div></div></div></div>