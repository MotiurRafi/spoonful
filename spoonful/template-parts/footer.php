<footer class=footer>
	<div class=footer-top>
		<div class=container>
			<div class=row>
				<div class="col-md-4 widget-area ">
					<div id=text-2 class="widget footer-column clear widget_text">
						<h3 class="footer-title">About Us</h3>
						<div class=textwidget>
							<p>Restaurant metus dibus eudui aolicitudin istique lacus in the vestibulum congue est
								vitae maximus duru ne lacus in massa tristique aharetra ne ut isum.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 widget-area ">
					<div id=candore-contact-widget-2 class="widget footer-column clear widget_candore-contact-widget">
						<h3 class="footer-title">Contact Info</h3>
						<div class=footer-contact>
							<p class=footer-contact-text>
								<a href=# target=_blank class=footer-contact-link>
									<?php
									$address_id = 154;
									setup_postdata(get_post($address_id));
									$address_with_tags = get_the_content();
									$address = wp_strip_all_tags($address_with_tags);
									echo esc_html($address);
									wp_reset_postdata();
									?>
								</a>
							</p>
							<div class=footer-contact-info>
								<p class=footer-contact-phone>
									<span class=icon><i class='bx bx-phone-call'></i></span>
									<?php
									$contact_no_id = 69;
									setup_postdata(get_post($contact_no_id));
									$contact_no_with_tags = get_the_content();
									$contact_number = wp_strip_all_tags($contact_no_with_tags);
									?>
									<a href=""><?php echo esc_html($contact_number); ?></a>
									<?php
									// Reset Post Data
									wp_reset_postdata();
									?>
								</p>
								<p class=footer-contact-mail>
									<?php
									$email_id = 155;
									setup_postdata(get_post($email_id));
									$email_with_tags = get_the_content();
									$email = wp_strip_all_tags($email_with_tags);
									?>
									<a href=""><?php echo esc_html($email); ?></a>
									<?php
									// Reset Post Data
									wp_reset_postdata();
									?>
								</p>
							</div>
							<div class=footer-about-social-list>
								<a href=# target=_blank><i class='bx bxl-facebook'></i></a>
								<a href=# target=_blank><i class='bx bxl-twitter'></i></a>
								<a href=# target=_blank><i class='bx bxl-instagram'></i></a>
								<a href=# target=_blank><i class='bx bxl-pinterest-alt'></i></a>
								<a href=# target=_blank><i class='bx bxl-youtube'></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 widget-area ">
					<div id=mc4wp_form_widget-2 class="widget footer-column clear widget_mc4wp_form_widget">
						<h3 class="footer-title">Subscribe</h3>
						<form id=mc4wp-form-1 class="mc4wp-form mc4wp-form-211" method=post data-id=211 data-name=Form>
							<div class=mc4wp-form-fields>
								<p>
									Want to be notified when we launch a new template or an udpate. Just sign up and
									we'll send you a notification by email.</p>
								<input type=email name=EMAIL placeholder="Your Email" required>
								<input type=submit value=Subscribe>
							</div><label style="display: none !important;">Leave this field empty if you're human:
								<input type=text name=_mc4wp_honeypot value tabindex=-1 autocomplete=off></label><input type=hidden name=_mc4wp_timestamp value=1699201561><input type=hidden name=_mc4wp_form_id value=211><input type=hidden name=_mc4wp_form_element_id value=mc4wp-form-1>
							<div class=mc4wp-response></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class=footer-bottom>
		<div class=container>
			<div class=row>
				<div class=col-md-12>
					<div class=footer-bottom-inner>
						<p class=footer-bottom-copy-right>
							© Copyright 2023 by <a href="">noone.net</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php wp_footer() ?>
</body>

</html>