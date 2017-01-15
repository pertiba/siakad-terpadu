<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="row">

<?php  
echo form_open(current_url(), array('id' => 'form-lihat-khs', 'method' => 'get'));
?>
		<div class="box pad box-primary">
			<div class="box-header">
				<div class="col-md-8 col-md-offset-2"><?php echo $this->session->flashdata('alert'); ?></div>
			</div>
			<div class="form-horizontal">
				<div class="form-group">
					<label class="control-label col-md-2 col-sm-3">Tahun Ajaran :</label>
					<div class="col-md-3 col-sm-7">
						<select name="thn_ajaran" class="form-control" required="required">
							<option value="">-- PILIH --</option>
							<option value="<?php echo $this->option->get('default_thn_ajaran'); ?>" <?php echo ($this->option->get('default_thn_ajaran')==$this->input->get('thn_ajaran')) ? 'selected' : ''; ?>> <?php echo $this->option->get('default_thn_ajaran'); ?></option>
						</select>
						<div class="hidden-md hidden-lg hidden-xs" style="margin-bottom: 10px;"></div>
					</div>
					<div class="hidden-md hidden-lg hidden-sm" style="margin-bottom: 10px;"></div>
					<label class="control-label col-md-1 col-sm-3">Semester :</label>
					<div class="col-md-3 col-sm-7">
						<select name="semester" class="form-control" required="required">
							<option value="">-- PILIH --</option>
							<option value="ganjil" <?php echo ($this->input->get('semester') == 'ganjil') ? 'selected' : ''; ?>>Ganjil</option>
							<option value="genap" <?php echo ($this->input->get('semester') == 'genap') ? 'selected' : ''; ?>>Genap</option>
						</select>
						<div class="hidden-md hidden-lg hidden-xs" style="margin-bottom: 10px;"></div>
					</div>
					<div class="hidden-md hidden-lg" style="margin-bottom: 10px;"></div>
					<div class="col-md-2 col-sm-9 col-xs-12">
		              	<button class="btn btn-primary btn-flat bg-blue pull-right" id="btn-krs"><i class="fa fa-search"></i> Lihat KHS </button>
					</div>
				</div>
			</div>
<?php 
echo form_close(); 
?>
	<?php 
	/**
	 * Checking KHS data
	 *
	 **/
	if($daftar_nilai) : 
	?>
			<div class="form-horizontal">
				<div class="form-group">
					<hr>
			        <div class="col-xs-12 col-md-8 col-md-offset-2" style="margin-bottom: 10px;">
						<a href="<?php echo site_url('mahasiswa/khs/print') ?>" target="_blank" class="btn btn-default btn-flat pull-right btn-print"><i class="fa fa-print"></i> Cetak</a>
			        </div>
					<div class="col-xs-12 col-md-10 col-md-offset-1">
						<table class="table table-hover table-bordered table-striped table-responsive col-xs-12 mini-font table-black table-bordered-black">
							<thead style="background-color: white;">
								<tr>
									<th rowspan="2">No</th>
									<th rowspan="2"><span class="hidden-xs">Mata Kuliah</span><span class="hidden-lg hidden-md hidden-sm">MK</span></th>
									<th rowspan="2">SKS</th>
									<th colspan="4" class="text-center">Nilai</th>
									<th rowspan="2"><span class="hidden-xs">Nilai Akhir</span><span class="hidden-lg hidden-md hidden-sm">NA</span></th>
									<th rowspan="2"><span class="hidden-xs">Grade</span><span class="hidden-lg hidden-md hidden-sm">G</span></th>
									<th rowspan="2"><span class="hidden-xs">Bobot</span><span class="hidden-lg hidden-md hidden-sm">B</span></th>
								</tr>
								<tr>
									<th><span class="hidden-xs">Kehadiran</span><span class="hidden-lg hidden-md hidden-sm">A</span></th>
									<th><span class="hidden-xs">Tugas</span><span class="hidden-lg hidden-md hidden-sm">TGS</span></th>
									<th>MID</th>
									<th>UAS</th>
								</tr>
							</thead>
							<tbody>
					<?php  
					/**
					 * Start Loops data nilai
					 *
					 * @return data Nilai
					 **/
					$sks = 0;
					$bobot = 0;
					foreach($daftar_nilai as $key => $value) :
					?>
								<tr>
									<td><?php echo ++$key; ?>.</td>
									<td><?php echo $value->course_name; ?></td>
									<td class="text-center"><?php echo $value->sks; ?></td>
									<td class="text-center"><?php echo $value->absent; ?></td>
									<td class="text-center"><?php echo $value->task; ?></td>
									<td class="text-center"><?php echo $value->midterms; ?></td>
									<td class="text-center"><?php echo $value->final; ?></td>
									<td class="text-center"><?php echo $value->point; ?></td>
									<td class="text-center"><?php echo $value->grade; ?></td>
									<td class="text-center"><?php echo $value->quality; ?></td>
								</tr>
					<?php  
					$sks += $value->sks;
					$bobot += $value->quality;
					// End Loop
					endforeach;
					?>
							</tbody>
							<tfoot>
								<tr>
									<th colspan="2"><span class="pull-right">Jumlah SKS :</span></th>
									<th><?php echo $sks; ?></th>
									<th colspan="6"><span class="pull-right">Jumlah Bobot :</span></th>
									<th><?php echo $bobot; ?></th>
								</tr>
								<tr>
									<th colspan="9"><span class="pull-right">Index Prestasi (IP) :</span></th>
									<th><span style="font-size: 15px;"><?php echo str_replace('.', ',', $this->nilai->getIp()); ?></span></th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
	<?php  
	// False Condition
	else :
		if($this->input->get('semester') != '' && $this->input->get('thn_ajaran') != '') :
	?>
			<div class="box-body">
				<hr>
				<div class="col-md-6 col-md-offset-3">
					<div class="callout callout-warning alert-warning animated shake">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Maaf!</strong> <p>Data tidak tersedia pada database kami.</p>
					</div>
				</div>
			</div>
	<?php
		endif;
	// End Condition
	endif;
	?>
		</div>
</div>
<?php
/* End of file index.php */
/* Location: ./application/modules/Mahasiswa/views/krs/index.php */
?>