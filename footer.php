			<?php
				// If Single or Archive (Category, Tag, Author or a Date based page).
				if ( is_single() || is_archive() ) :
			?>
					</div><!-- /.col -->

					<?php
						get_sidebar();
					?>

				</div><!-- /.row -->
			<?php
				endif;
			?>
		</main><!-- /#main -->
		<footer id="footer">

		<div class="container">
      <div class="row" style="background:#EDEDED;">
		
         <div class="col-lg-4 col-md-6">
		 <div class="foot_sec_one">
         <?php
                if(is_active_sidebar('footer1')){
                    dynamic_sidebar('footer1');
                }
                ?>
         </div>
		 </div>
		 <div class="col-lg-4 col-md-6">
		 <div class="foot_sec_two">
         <?php
                if(is_active_sidebar('footer2')){
                    dynamic_sidebar('footer2');
                }
                ?>
         </div>
		</div>
		 <div class="col-lg-2 col-md-6">
		 <div class="foot_sec_two">
         <?php
                if(is_active_sidebar('footer3')){
                    dynamic_sidebar('footer3');
                }
                ?>
         </div>
			</div>
		 <div class="col-lg-2 col-md-6">
		 <div class="foot_sec_two">
         <?php
                if(is_active_sidebar('footer4')){
                    dynamic_sidebar('footer4');
                }
                ?>
         </div>
			</div>
			</div>
			</div>
			
			<div class="container">
			<section class="footet-bottom">
				<div class="row">
					<div class="col-md-9">
						<p>© Copyright 2023, All Rights Reserved by Sri Ramakrishna Matriculation Higher Secondary School.</p>
					</div>
					<div class="col-md-3 d-flex">
					<img class="footer_icon" src="http://localhost/srms/wp-content/uploads/2023/09/bbit_discord-png-1.png" alt="" title=""><p> Powered by Bright Bridge </p>
					</div>
				</div><!-- /.row -->
				</section>
			</div><!-- /.container -->
			
		</footer><!-- /#footer -->
	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>
</body>
</html>
