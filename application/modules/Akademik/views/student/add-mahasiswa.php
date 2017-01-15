<div class="row">
	<div class="col-md-8 col-md-offset-2 col-xs-12"><?php echo $this->session->flashdata('alert'); ?></div>
	<dov class="col-md-12">
		<div class="box box-primary">
<?php  
/**
 * Open Form
 *
 * @var string
 **/
echo form_open(site_url("akademik/student/create"), array('class' => 'form-horizontal', 'id' => 'form-add-mahasiswa'));
?>			
			<div class="box-header with-border">
				<div class="col-md-6 col-md-offset-1">
					<h3 class="box-title">Bagian 1</h3> <span><i class="fa fa-angle-double-right"></i> Identitas Mahasiswa</span>
				</div>
			</div>
			<div class="box-body" style="margin-top: 10px;">
				<div class="form-group">
					<label for="name" class="control-label col-md-3">Nama : <strong class="text-red">*</strong></label>
					<div class="col-md-7">
						<input type="text" name="name" class="form-control" value="" required="required">
					</div>
				</div>
				<div class="form-group">
					<label for="name" class="control-label col-md-3">Jenis Kelamin : <strong class="text-red">*</strong></label>
					<div class="col-md-6">
				       	<div class="radio radio-inline radio-info">
				           <input name="gender" type="radio" required="" value="laki-laki"> <label for="gender"> Laki-laki</label>
				       	</div>
				       	<div class="radio radio-inline radio-info">
				           <input name="gender" type="radio" required="" value="perempuan"> <label for="gender"> Perempuan</label>
				       	</div>
					</div>
				</div>
				<div class="form-group">
					<label for="place_of_birts" class="control-label col-md-3">Tempat, Tanggal Lahir : <strong class="text-red">*</strong></label>
					<div class="col-md-4">
						<input type="text" name="place_of_birts" class="form-control" value="" required="">
					</div>
					<div class="col-md-3">
					  	<div class="input-group">
					    	<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
					    	<input type="text" class="form-control" name="birts" id="datepicker" value="" required="" placeholder="Ex : 1996-03-31">
					  	</div>
						<p class="help-block"><?php echo form_error('birts', '<small class="text-red">', '</small>'); ?></p>
					</div>
				</div>
				<div class="form-group">
					<label for="name" class="control-label col-md-3">Agama : <strong class="text-red">*</strong></label>
					<div class="col-md-3">
				       	<?php  
				       	/**
				       	 * Form Dropdown Agama
				       	 *
				       	 * @var string
				       	 **/
				       	echo form_dropdown('religion', 
				       		array(
				       			'' => "-- PILIH --",
				       			'islam' => "Islam",
				       			'kristen' => "Kristen",
				       			'hindu' => "Hindu",
				       			'buddha' => "Buddha",
				       			'konghucu' => "Konghucu"
				       		), 
				       		set_value('religion'),
				       		array('class' => 'form-control', 'required' => 'required')
				       	);
				       	?>
					</div>
				</div>
				<div class="form-group">
					<label for="jobs" class="control-label col-md-3">Pekerjaan : </label>
					<div class="col-md-6">
						<input type="text" name="jobs" class="form-control" value="">
					</div>
				</div>
				<div class="form-group">
					<label for="address" class="control-label col-md-3">Alamat : </label>
					<div class="col-md-6">
						<textarea name="address" class="form-control" cols="30" rows="3"></textarea>
					</div>
				</div>
			</div>
			<div class="box-header with-border">
				<div class="col-md-6 col-md-offset-1">
					<h3 class="box-title">Bagian 2</h3> <span><i class="fa fa-angle-double-right"></i> Informasi Sekolah Asal</span>
				</div>
			</div>
			<div class="box-body">
				<div class="form-group">
					<label for="school_name" class="control-label col-md-3">Nama Sekolah : <strong class="text-red">*</strong></label>
					<div class="col-md-7">
						<input type="text" name="school_name" class="form-control" value="" required="">
					</div>
				</div>
				<div class="form-group">
					<label for="school_study" class="control-label col-md-3">Jurusan <small>(yang ditempuh)</small> : </label>
					<div class="col-md-6">
						<input type="text_study" name="school_study" class="form-control" value="">
					</div>
				</div>
				<div class="form-group">
					<label for="school_address" class="control-label col-md-3">Alamat Sekolah  : </label>
					<div class="col-md-6">
						<textarea name="school_address" class="form-control" cols="30" rows="3"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="graduation_year" class="control-label col-md-3">Tahun Lulus  : </label>
					<div class="col-md-2">
				       	<?php  
				       	/**
				       	 * Form Dropdown Tahun Lulus
				       	 *
				       	 * @var string
				       	 **/
				       	$tahun = date('Y') - 5;
				       	$option_year[] = "-- PILIH --";
				       	for($tahun; $tahun <= date('Y'); $tahun++)
				       		$option_year[$tahun] = $tahun;

				       	echo form_dropdown('graduation_year', 
				       		$option_year, 
				       		NULL,
				       		array('class' => 'form-control')
				       	);
				       	?>
					</div>
				</div>
				<div class="form-group">
					<label for="grade_value" class="control-label col-md-3">Nilai Kelulusan  : </label>
					<div class="col-md-2">
						<input type="text" name="grade_value" class="form-control" value="">
					</div>
				</div>
				<div class="form-group">
					<label for="certificate_number" class="control-label col-md-3">Nomor Ijazah : </label>
					<div class="col-md-7">
						<input type="text" name="certificate_number" class="form-control" value="">
					</div>
				</div>
			</div>
			<div class="box-header with-border">
				<div class="col-md-6 col-md-offset-1">
					<h3 class="box-title">Bagian 3</h3> <span><i class="fa fa-angle-double-right"></i> Identitas Orang Tua</span>
				</div>
			</div>
			<div class="box-body">
				<div class="form-group">
					<label for="father_name" class="control-label col-md-3">Nama Ayah :</label>
					<div class="col-md-7">
						<input type="text" name="father_name" class="form-control" value="">
					</div>
				</div>
				<div class="form-group">
					<label for="father_jobs" class="control-label col-md-3">Pekerjaan : </label>
					<div class="col-md-6">
						<input type="text" name="father_jobs" class="form-control" value="">
					</div>
				</div>
				<div class="form-group">
					<label for="mother_name" class="control-label col-md-3">Nama Ibu : 	</label>
					<div class="col-md-7">
						<input type="text" name="mother_name" class="form-control" value="">
					</div>
				</div>
				<div class="form-group">
					<label for="mother_jobs" class="control-label col-md-3">Pekerjaan : </label>
					<div class="col-md-6">
						<input type="text" name="mother_jobs" class="form-control" value="">
					</div>
				</div>
				<div class="form-group">
					<label for="parent_address" class="control-label col-md-3">Alamat Orang Tua  : </label>
					<div class="col-md-6">
						<textarea name="parent_address" class="form-control" cols="30" rows="3"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label for="phone_number" class="control-label col-md-3">Nomor Telepon Orang Tua : </label>
					<div class="col-md-6">
						<input type="text" name="phone_number" class="form-control" value="">
					</div>
				</div>
				<div class="form-group">
					<label for="phone_number" class="control-label col-md-3">Kisaran Pendapatan : </label>
					<div class="col-md-8">
				       	<div class="radio radio-info">
				           <input name="revenue" type="radio" value="Rp. 500,000,00 - 1,000,000,00"> <label for="revenue"> Rp. 500,000,00 - 1,000,000,00</label>
				       	</div>
				       	<div class="radio radio-info">
				           <input name="revenue" type="radio" value="Rp. 1,000,000,00 - 2,000,000,00"> <label for="revenue"> Rp. 1,000,000,00 - 2,000,000,00</label>
				       	</div>
				       	<div class="radio radio-info">
				           <input name="revenue" type="radio" value="Rp. 2,000,000,00 - 3,500,000,00"> <label for="revenue"> Rp. 2,000,000,00 - 3,500,000,00</label>
				       	</div>
				       	<div class="radio radio-info">
				           <input name="revenue" type="radio" value="Rp. 3,500,000,00"> <label for="revenue"> > Rp. 3,500,000,00</label>
				       	</div>
					</div>
				</div>
			</div>
			<div class="box-header with-border">
				<div class="col-md-6 col-md-offset-1">
					<h3 class="box-title">Bagian 4</h3> <span><i class="fa fa-angle-double-right"></i> Informasi Akademik</span>
				</div>
			</div>
			<div class="box-body">
				<div class="form-group">
					<label for="npm" class="control-label col-md-3">NPM : <strong class="text-red">*</strong></label>
					<div class="col-md-4">
						<input type="text" name="npm" class="form-control" value="" required="">
					</div>
				</div>
				<div class="form-group">
					<label for="study" class="control-label col-md-3">Jurusan : <strong class="text-red">*</strong></label>
					<div class="col-md-7">
						<input type="text" name="study" class="form-control" value="" required="">
					</div>
				</div>
				<div class="form-group">
					<label for="concentration" class="control-label col-md-3">Konsentrasi :</label>
					<div class="col-md-3">
				       	<?php  
				       	/**
				       	 * Form Dropdown Agama
				       	 *
				       	 * @var string
				       	 **/
				       	echo form_dropdown('concentration', 
				       		array(
				       			'' => "-- PILIH --",
				       			'1' => "Pemasaran",
				       			'2' => "Keuangan",
				       		), 
				       		NULL,
				       		array('class' => 'form-control')
				       	);
				       	?>
					</div>
				</div>
				<div class="form-group">
					<label for="ladder" class="control-label col-md-3">Jenjang : <strong class="text-red">*</strong></label>
					<div class="col-md-4">
				       	<div class="radio radio-inline radio-info">
				           <input name="ladder" type="radio" value="Strata 1" required=""> <label for="gender"> Strata 1</label>
				       	</div>
				       	<div class="radio radio-inline radio-info">
				           <input name="ladder" type="radio" value="Pasca Sarjana" required=""> <label for="gender"> Pasca Sarjana</label>
				       	</div>
					</div>
				</div>
				<div class="form-group">
				   	<label class="control-label col-md-3">Kelas : </label>
				   	<div class="col-md-2">
					   	<select name="class" class="form-control">
					        <option value="">-- PILIH --</option>
					        <option value="pagi">Pagi</option>
					        <option value="sore">Sore</option>
					        <option value="malam">Malam</option>
					   	</select>	
					</div>
				</div>
				<div class="form-group">
					<label for="register_year" class="control-label col-md-3">Tahun Masuk :</label>
					<div class="col-md-2">
				       	<?php  
				       	/**
				       	 * Form Dropdown Tahun Masi
				       	 *
				       	 * @var string
				       	 **/
				       	$tahun = date('Y') - 5;
				       	$reg_year[] = "-- PILIH --";
				       	for($tahun; $tahun <= date('Y'); $tahun++)
				       		$reg_year[$tahun] = $tahun;

				       	echo form_dropdown('register_year', 
				       		$reg_year, 
				       		NULL,
				       		array('class' => 'form-control')
				       	);
				       	?>
					</div>
				</div>
			</div>
			<div class="box-footer with-border">
				<div class="col-md-3">
					<strong class="text-red">* </strong> : <small>Field wajib diisi!</small>
				</div>
				<div class="col-md-6">
					<a href="<?php echo site_url('akademik/student') ?>" class="btn btn-app"><i class="fa fa-reply"></i> Kembali</a>
					<button type="submit" class="btn btn-app pull-right"><i class="fa fa-save"></i> Simpan Data</button>
				</div>
			</div>
<?php  
// End form Close
echo form_close();
?>
		</div>
	</div>
</div>