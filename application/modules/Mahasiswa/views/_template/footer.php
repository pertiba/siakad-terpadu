		
				</section><!--/content-->
		</div>
	</div>

			<footer class="main-footer">
			   <div class="container text-center">
			     <small>Copyright &copy; 2016 - <?php echo date('Y'); ?> <a href="">IT Division</a> STIE Pertiba Pangkalpinang. All rights
			      reserved.<small>
			   </div>
			</footer>
		    <div class="modal animated shake modal-danger" id="logout" tabindex="-1" data-backdrop="static" data-keyboard="false">
		      <div class="modal-dialog modal-sm">
		        <div class="modal-content">
		          <div class="modal-header">
		            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		            <h4 class="modal-title"><i class="fa fa-question-circle"></i> Question!</h4>
		            <span>Hai, Yakin anda akan Keluar dari sistem?</span>
		          </div>
		          <div class="modal-footer">
		            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tidak</button>
		            <a href="<?php echo site_url("mahasiswa/login/signout?from_url=" . current_url()) ?>" type="button" class="btn btn-outline"> Iya </a>
		          </div>
		        </div>
		      </div>
		    </div>
</div>
		<script src="<?php echo base_url("assets/plugins/jQuery/jquery-2.2.3.min.js"); ?>"></script>
		<script src="<?php echo base_url("assets/bootstrap/js/bootstrap.min.js"); ?>"></script>
		<script src="<?php echo base_url("assets/plugins/slimScroll/jquery.slimscroll.min.js"); ?>"></script>
		<script src="<?php echo base_url("assets/plugins/fastclick/fastclick.js"); ?>"></script>
		<script src="<?php echo base_url("assets/dist/js/app.min.js"); ?>"></script>
		<script src="<?php echo base_url("assets/dist/js/jquery.tableCheckbox.js"); ?>"></script>
		<script src="<?php echo base_url("assets/dist/js/jquery.printPage.js"); ?>"></script>
		<script src="<?php echo base_url("assets/plugins/bootstrap-notify/bootstrap-notify.min.js"); ?>"></script>
		<script type="text/javascript"> 
			var base_url 	= '<?php echo site_url('mahasiswa'); ?>';
			var base_path 	= '<?php echo base_url('assets'); ?>';
			var current_url = '<?php echo current_url(); ?>';
		</script>
		<?php 

		/**
		 * Load js from loader core
		 *
		 * @return CI_OUTPUT
		 **/
		if(isset($js) ==! FALSE) : foreach($js as $file) :  ?>
				<script src="<?php echo $file; ?>"></script>
		<?php endforeach; endif; ?>
	</body>
</html>