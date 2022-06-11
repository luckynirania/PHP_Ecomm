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
		            <h1 class="page-header"><?php echo 'About Us'; ?></h1>
					<div class="row-sm-9">
						<div class="box box-solid" >
							<div class="box-header with-border">
								<h3 class="box-title"><b>We thrive on customer Satisfaction</b></h3>
							</div>
							<div class="box-body">
								<h3 class="box-title"><b>Delivery and Logistics</b></h3>
								<p> Our Operations and award-winning Customer Service teams are at the heart of our mission to be Earth's most customer-centric company. Together, we create, we build, and we take ownership for what we do—whether we're developing new technology in-house, launching an our fulfillment center, or delighting our customers by delivering packages directly to them. We're constantly creating the ideas, services, and products that make life easier for millions of customers. </p>
								<h3 class="box-title"><b>What we Do</b></h3>
								<p> Although our business has evolved over the years, one constant is customers' desire for lower prices, better selection, and convenient services. Today, our shoppers can find what they're looking for online and in person. From delivering fresh produce to their doorstep to creating and distributing movies, music, and more, we are always finding new ways to delight our customers. </p>
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