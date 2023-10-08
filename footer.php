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



		<footer>
			<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-6 col-xl-4 text-white footer-bg1 p-3 p-md-5">
						<div class="h3">Get in Touch</div>
						<div>
							<svg width="106" height="12" viewBox="0 0 106 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<line y1="5.92041" x2="48.1818" y2="5.92041" stroke="white"/>
							<line x1="57.8184" y1="5.31812" x2="106" y2="5.31812" stroke="white"/>
							<circle cx="52.9998" cy="5.81818" r="5.31818" stroke="white"/>
							</svg>
						</div>
						<div>
							<div class="d-flex align-items-center my-3 footer_text">
								<span class="footer-icons_wrapper me-2"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M31.6673 15.0008C31.6711 17.3823 30.9426 19.7073 29.5807 21.6608H29.584L21.4057 34.4675C21.255 34.7036 21.0473 34.8979 20.8018 35.0325C20.5562 35.1671 20.2807 35.2377 20.0007 35.2377C19.7206 35.2377 19.4451 35.1671 19.1995 35.0325C18.954 34.8979 18.7463 34.7036 18.5957 34.4675L10.4573 21.7125C9.40267 20.2127 8.71635 18.4855 8.45402 16.6709C8.19169 14.8563 8.36073 13.0054 8.94744 11.2683C9.53415 9.53124 10.522 7.95691 11.8309 6.67299C13.1398 5.38908 14.7328 4.43172 16.4809 3.87857C18.2289 3.32543 20.0827 3.19206 21.892 3.48928C23.7012 3.78651 25.4149 4.50597 26.8941 5.5893C28.3733 6.67264 29.5763 8.08935 30.4056 9.72454C31.2349 11.3597 31.6672 13.1674 31.6673 15.0008ZM20.0007 21.6675C21.7688 21.6675 23.4645 20.9651 24.7147 19.7149C25.9649 18.4646 26.6673 16.769 26.6673 15.0008C26.6673 13.2327 25.9649 11.537 24.7147 10.2868C23.4645 9.03655 21.7688 8.33417 20.0007 8.33417C18.2325 8.33417 16.5368 9.03655 15.2866 10.2868C14.0364 11.537 13.334 13.2327 13.334 15.0008C13.334 16.769 14.0364 18.4646 15.2866 19.7149C16.5368 20.9651 18.2325 21.6675 20.0007 21.6675Z" fill="white"/>
								</svg>
								</span>
								SNR College Road, Avarampalayam, Coimbatore-641006
							</div>
							<div class="d-flex align-items-center mb-3  footer_text">
								<span class="me-2 footer-icons_wrapper"><svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M1 7.76074V25.3341L9.78668 16.5474L1 7.76074Z" fill="white"/>
									<path d="M2.74609 6L13.8702 17.1241C15.2751 18.529 17.7254 18.529 19.1303 17.1241L30.2544 6H2.74609Z" fill="white"/>
									<path d="M20.8844 18.8776C19.7151 20.0482 18.1576 20.6942 16.501 20.6942C14.8443 20.6942 13.2869 20.0482 12.1176 18.8776L11.541 18.301L2.76172 27.0803H30.2402L21.461 18.301L20.8844 18.8776Z" fill="white"/>
									<path d="M23.2129 16.5474L31.9996 25.3341V7.76074L23.2129 16.5474Z" fill="white"/>
									</svg>

								</span>
								office@srmslcbe.com
							</div>
							<div class="d-flex align-items-center mb-3  footer_text">
								<span class="me-2 footer-icons_wrapper"><svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M29.2917 24.2173C28.5046 26.6092 25.4208 27.8025 23.2176 27.6036C20.2085 27.3316 16.9343 25.7354 14.4489 23.9776C10.7956 21.3937 7.37343 17.3972 5.37931 13.1558C3.97 10.1588 3.6538 6.47337 5.74992 3.74157C6.52512 2.73181 7.36493 2.19293 8.62294 2.13003C10.3706 2.04503 10.6154 3.0446 11.2155 4.60174C11.6626 5.7662 12.2593 6.95446 12.5925 8.16141C13.2164 10.4138 11.0353 10.5073 10.7599 12.3484C10.5899 13.5094 11.9958 15.0666 12.6316 15.8944C13.8571 17.5068 15.3581 18.8897 17.0652 19.9794C18.0342 20.5897 19.5948 21.6895 20.7032 21.0827C22.41 20.1477 22.2502 17.2697 24.6354 18.2438C25.8713 18.7469 27.0681 19.4728 28.2479 20.1086C30.072 21.0895 29.987 22.106 29.2917 24.2173C29.8119 22.6398 28.7715 25.7949 29.2917 24.2173Z" fill="white"/>
									</svg>

								</span>
								+91-422-2562799
							</div>

						</div>

						<hr class="footer-hr-line my-4">

						<div class="footer-social_icons d-flex justify-content-evenly align-items-center ">
						<a target="_blank" href="#"><div class="footer-social_icons_wrapper">
							<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M16.3793 5.76345H18.416V2.31845C17.4299 2.21591 16.4391 2.16528 15.4477 2.16678C12.501 2.16678 10.486 3.96511 10.486 7.25845V10.0968H7.16016V13.9534H10.486V23.8334H14.4727V13.9534H17.7877L18.286 10.0968H14.4727V7.63761C14.4727 6.50011 14.776 5.76345 16.3793 5.76345Z" fill="white"/>
								</svg>
							</div></a>

							<a target="_blank" href="#"><div class="footer-social_icons_wrapper">
							<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M17.7661 23.2142H8.23278C6.78798 23.2142 5.40235 22.6403 4.38073 21.6186C3.3591 20.597 2.78516 19.2114 2.78516 17.7666V8.23326C2.78516 6.78847 3.3591 5.40284 4.38073 4.38122C5.40235 3.35959 6.78798 2.78564 8.23278 2.78564H17.7661C19.2109 2.78564 20.5965 3.35959 21.6182 4.38122C22.6398 5.40284 23.2137 6.78847 23.2137 8.23326V17.7666C23.2137 19.2114 22.6398 20.597 21.6182 21.6186C20.5965 22.6403 19.2109 23.2142 17.7661 23.2142Z" stroke="white" stroke-miterlimit="10"/>
								<path d="M12.9991 17.7665C15.6316 17.7665 17.7658 15.6324 17.7658 12.9998C17.7658 10.3673 15.6316 8.23315 12.9991 8.23315C10.3665 8.23315 8.23242 10.3673 8.23242 12.9998C8.23242 15.6324 10.3665 17.7665 12.9991 17.7665Z" stroke="white" stroke-miterlimit="10"/>
								<path d="M19.1282 7.55233C19.5043 7.55233 19.8092 7.24746 19.8092 6.87138C19.8092 6.4953 19.5043 6.19043 19.1282 6.19043C18.7521 6.19043 18.4473 6.4953 18.4473 6.87138C18.4473 7.24746 18.7521 7.55233 19.1282 7.55233Z" stroke="white" stroke-miterlimit="10"/>
								</svg>

							</div></a>


							<a target="_blank" href="#"><div class="footer-social_icons_wrapper">
							<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M23.9949 10.6389C24.0444 9.1584 23.7315 7.68898 23.0855 6.36707C22.6472 5.82466 22.0389 5.45862 21.3666 5.33273C18.5859 5.07159 15.7936 4.96455 13.0019 5.01208C10.2203 4.96239 7.43809 5.06597 4.66713 5.32239C4.1193 5.42553 3.61232 5.69148 3.20805 6.0878C2.30862 6.9463 2.20868 8.41507 2.10875 9.65628C1.96375 11.8879 1.96375 14.1272 2.10875 16.3588C2.13766 17.0574 2.23816 17.7509 2.40856 18.4275C2.52906 18.9499 2.77285 19.4332 3.11811 19.8342C3.52512 20.2515 4.04391 20.5326 4.60717 20.641C6.76173 20.9162 8.93266 21.0303 11.1031 20.9823C14.6009 21.034 17.6689 20.9823 21.2966 20.6927C21.8737 20.591 22.4071 20.3095 22.8257 19.8859C23.1055 19.5962 23.3144 19.2416 23.4353 18.8516C23.7927 17.7165 23.9682 16.5286 23.955 15.3348C23.9949 14.7556 23.9949 11.2595 23.9949 10.6389ZM10.7433 15.9554V9.55284L16.6596 12.7696C15.0006 13.7212 12.812 14.797 10.7433 15.9554Z" fill="white"/>
							</svg>

							</div></a>


							<a target="_blank" href="#"><div class="footer-social_icons_wrapper">
							<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M23.8327 6.28332C23.0184 6.63659 22.1572 6.87012 21.276 6.97665C22.2057 6.42125 22.9024 5.5475 23.2368 4.51748C22.3632 5.03755 21.4068 5.40397 20.4093 5.60082C19.7426 4.87777 18.8547 4.39647 17.885 4.23241C16.9152 4.06834 15.9184 4.23079 15.051 4.69427C14.1835 5.15776 13.4944 5.89606 13.0917 6.79339C12.689 7.69072 12.5956 8.69632 12.826 9.65248C11.0596 9.56314 9.33166 9.10318 7.75456 8.3025C6.17746 7.50182 4.78643 6.37832 3.67185 5.00498C3.28091 5.68767 3.07549 6.46079 3.07602 7.24748C3.07463 7.97806 3.25392 8.69765 3.59792 9.34218C3.94192 9.9867 4.43995 10.5362 5.04768 10.9416C4.34132 10.9224 3.65006 10.7329 3.03268 10.3891V10.4433C3.03798 11.4669 3.39668 12.4573 4.04811 13.2469C4.69954 14.0366 5.60371 14.5769 6.60768 14.7767C6.22121 14.8943 5.81996 14.9563 5.41602 14.9608C5.1364 14.9576 4.85747 14.9322 4.58185 14.885C4.86775 15.7655 5.42102 16.5351 6.16468 17.0865C6.90834 17.6379 7.80539 17.9438 8.73102 17.9616C7.16798 19.1915 5.23822 19.8627 3.24935 19.8683C2.88723 19.8695 2.5254 19.8478 2.16602 19.8033C4.19665 21.1144 6.56306 21.8104 8.98018 21.8075C10.6482 21.8248 12.3029 21.5096 13.8477 20.8802C15.3925 20.2509 16.7965 19.32 17.9775 18.142C19.1585 16.964 20.093 15.5625 20.7263 14.0193C21.3596 12.4761 21.6791 10.8222 21.666 9.15415C21.666 8.96998 21.666 8.77498 21.666 8.57998C22.5161 7.94603 23.2493 7.16886 23.8327 6.28332Z" fill="white"/>
								</svg>

							</div></a>

						</div>

					</div>
					<div class="col-12 col-md-6 col-xl-3 footer-bg2  p-3 p-md-5">
						<div class="footer-title-text h3">About the School</div>
						<div>
						<svg width="106" height="12" viewBox="0 0 106 12" fill="none" xmlns="http://www.w3.org/2000/svg">
						<line y1="5.92041" x2="48.1818" y2="5.92041" stroke="#EF0F42"/>
						<line x1="57.8184" y1="5.31812" x2="106" y2="5.31812" stroke="#EF0F42"/>
						<circle cx="52.9998" cy="5.81818" r="5.31818" stroke="#EF0F42"/>
						</svg>

						</div>
						<div class="my-4">Sri Ramakrishna Matric Higher Secondary School, Coimbatore was started in the year 1983. It is duly recognized by the Department of Education, Government of Tamilnadu. The school has classes from LKG to Std 12.</div>

						<a class="btn px-4 py-2 custom-blue-btn" href="#">Get Brochure</a>
					</div>
					<div class="col-12 col-sm footer-bg2  p-3 p-md-5">
						<div class="footer-title-text h3">Quick Link</div>
						<div>
						<svg width="106" height="12" viewBox="0 0 106 12" fill="none" xmlns="http://www.w3.org/2000/svg">
						<line y1="5.92041" x2="48.1818" y2="5.92041" stroke="#EF0F42"/>
						<line x1="57.8184" y1="5.31812" x2="106" y2="5.31812" stroke="#EF0F42"/>
						<circle cx="52.9998" cy="5.81818" r="5.31818" stroke="#EF0F42"/>
						</svg>

						</div>
						<div  class="footer-link-items_wrapper mt-4">

						<?php 
						// Replace 'custom-menu' with the name or location of your custom menu
						$menu_items = wp_get_nav_menu_items('quick-link');

						if ($menu_items) {
							foreach ($menu_items as $menu_item) {
								// Output or manipulate each menu item as needed
								$class = 'custom_footer--link-item '; // Add your custom class name here
								echo '<div class="mb-3"><a href="' . esc_url($menu_item->url) . '" class="' . esc_attr($class) . '">' . esc_html($menu_item->title) . '</a></div>';
							}
						}
						?>
						</div>
					</div>
					<div class="col-12 col-sm footer-bg2  p-3 p-md-5">
						<div class="footer-title-text h3">Useful Links</div>
						<div>
						<svg width="106" height="12" viewBox="0 0 106 12" fill="none" xmlns="http://www.w3.org/2000/svg">
						<line y1="5.92041" x2="48.1818" y2="5.92041" stroke="#EF0F42"/>
						<line x1="57.8184" y1="5.31812" x2="106" y2="5.31812" stroke="#EF0F42"/>
						<circle cx="52.9998" cy="5.81818" r="5.31818" stroke="#EF0F42"/>
						</svg>

						</div>
						<div  class="footer-link-items_wrapper mt-4">

						<?php 
						// Replace 'custom-menu' with the name or location of your custom menu
						$menu_items = wp_get_nav_menu_items('useful-link');

						if ($menu_items) {
							foreach ($menu_items as $menu_item) {
								// Output or manipulate each menu item as needed
								$class = 'custom_footer--link-item '; // Add your custom class name here
								echo '<div class="mb-3"><a href="' . esc_url($menu_item->url) . '" class="' . esc_attr($class) . '">' . esc_html($menu_item->title) . '</a></div>';
							}
						}
						?>
						</div>
					</div>
				</div>

			<section class="footer-copyright-section p-3 px-md-5">
			<div class="d-flex justify-content-between  align-items-center flex-wrap gap-3">
				<div>© Copyright <?php 
				$currentYear = date("Y");
				echo $currentYear;
				?>, All Rights Reserved by Sri Ramakrishna Matriculation Higher Secondary School. </div>
				<div class="d-flex align-items-center">
					<span class="me-2">
						<img height="32" width="32" class="img-fluid" src="https://srms.brightbridge.co/wp-content/uploads/2023/10/bbit_discord-png-1.png" alt="">
					</span>Powered by Bright Bridge
				</div>
			</div>
			</section>
			</div>
		</footer>
		















	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>
</body>
</html>
