<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
					<h1 class="page-header"><?php echo 'Contact Us'; ?></h1>
					<div class="row-sm-9">
						<div class="box box-solid">
							<div class="box-body">
								<h3 class="box-title"><b>Call Us</b></h3>
								<p> Aman's Phone :- </p>
								<h3 class="box-title"><b>Email Us</b></h3>
								<p> Aman's Email :- </p>
								<h3 class="box-title"><b>Write Us</b></h3>
								<p> Aman's Address :- </p>
								
							</div>
						</div>
					</div>
		       		
	        	</div>
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>