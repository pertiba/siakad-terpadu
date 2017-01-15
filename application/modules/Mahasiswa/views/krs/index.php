<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">

<?php  
echo form_open(site_url('mahasiswa/krs/create'), array('id' => 'form-susun-krs'));
?>
		<div class="box pad box-primary">
			<div class="box-header">
				<div class="col-md-8 col-md-offset-2"><?php echo $this->session->flashdata('alert'); ?></div>
			</div>
			<div class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-md-3">Tahun Ajaran :</label>
					<div class="col-md-6">
						<select name="thn_ajaran" id="thn-ajaran" class="form-control" required="required">
							<option value="">-- PILIH --</option>
							<option value="<?php echo $this->option->get('default_thn_ajaran'); ?>"> <?php echo $this->option->get('default_thn_ajaran'); ?></option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3">Semester :</label>
					<div class="col-md-6">
						<select name="semester" id="get-mk" class="form-control" required="required">
							<option value="">-- PILIH --</option>
							<option value="ganjil">Ganjil</option>
							<option value="genap">Genap</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12 col-md-8 col-md-offset-2">
						<table class="table table-hover table-bordered col-xs-12 mk-repeat">
							<thead>
								<tr>
									<th width="30"></th>
									<th width="100">Kode MK</th>
									<th>Mata Kuliah</th>
									<th>SKS</th>
								</tr>
							</thead>
							<tbody id="mk-repeat"> </tbody>
							<thead>
								<tr>
									<th colspan="3"><small class="pull-right">Total Mata Kuliah :</small></th>
									<th><span id="total-mk"></span></th>
								</tr>
								<tr>
									<th colspan="3"><small class="pull-right">Total SKS :</small></th>
									<th><span id="total-sks"></span></th>
								</tr>
							</thead>
						</table>						
					</div>
				</div>
			</div>
			<div class="box-footer with-border">
				<div class="col-md-8 col-md-offset-2 col-xs-12">
	              <a href="<?php echo current_url(); ?>" class="btn btn-app pull-left">
	                <i class="fa fa-times"></i> Reset
	              </a>
	              <a class="btn btn-app bg-blue pull-right" id="btn-krs">
	                <i class="fa fa-save"></i> Simpan KRS
	              </a>
				</div>
			</div>
		</div>

<div class="modal animated fadeIn modal-info" id="modal-valid-krs" tabindex="-1" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
		    <div class="modal-header">
		       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		       <h4 class="modal-title"><i class="fa fa-question-circle"></i> Question!</h4>
		       <span>Yakin Mata kuliah yang anda pilih, sudah terkoreksi dengan benar?</span>
		    </div>
		    <div class="modal-footer">
		       <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Batal</button>
		       <button type="submit" class="btn btn-outline"> Simpan KRS </button>
		    </div>
		</div>
	</div>
</div>
<?php 
echo form_close(); 
?>
</div>
<?php
/* End of file index.php */
/* Location: ./application/modules/Mahasiswa/views/krs/index.php */
?>