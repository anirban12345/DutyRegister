	<?php if($this->session->userdata('successmsg')){?>
				<script>
					swal("<?=$this->title?>", "<?php echo $this->session->userdata('successmsg'); ?>", "success");
				</script>
	<?php } ?> 
	<?php if($this->session->userdata('errmsg')){?>
			  <script>
					swal("<?=$this->title?>", "<?php echo $this->session->userdata('errmsg'); ?>", "error");
			  </script>
	<?php } ?> 