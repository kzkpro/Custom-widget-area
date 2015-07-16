<?php
function help_page(){
 ?>
	

	<div class="wrap cwa">
	 
	    <div id="icon-themes" class="icon32"><br /></div>
		<ul class="tabs">
			<li>
				<h3><a href="<?php echo admin_url();?>admin.php?page=custom_widget_area"><?php _e( 'Custom widget area', 'wp-custom-widget-area' ); ?></a></h3>
			</li>
			<li>
				<h3><a href="<?php echo admin_url();?>admin.php?page=custom_menu_location"><?php _e( 'Custom menu location', 'wp-custom-widget-area' ); ?></a></h3>
			</li>
			<li class="active">
				<h3><a href="<?php echo admin_url();?>admin.php?page=cwa_help"><?php _e( 'Help', 'wp-custom-widget-area' ); ?></a></h3>
			</li>
		</ul>
	    

		<div class="welcome-panel custom-wp">
			<div id="tab-container" class="tab-container">
			  <ul class='etabs'>
			    <li class='tab'><a href="#custom-widget-area"><span class="wp-menu-image dashicons-before dashicons-editor-help"></span>Custom widget area</a></li>
			    <li class='tab'><a href="#custom-menu-location"><span class="wp-menu-image dashicons-before dashicons-editor-help"></span>Custom menu location</a></li>
			  </ul>
			  <div class="tab-content">
				  <div id="custom-widget-area">
				    <div class="how-to">
						<h3>How to use?</h3>
						<p>
							<ol class="list">
								<li>Create a new Widget area.</li>
								<li>Click on the "get code" link.</li>
								<li>Copy the code and Paste it in a wordpress theme where you want to display it.</li>
							</ol>
						</p>
						<br/>
						<h4 style="margin-top: 0;">How to Use it in page or post content?</h4>
						<p>
							<ol class="list">
								<li>Click on the "get shortcode" link form widget area table below.</li>
								<li>Copy the shortcode and Paste it in a post or page editor where you want to display it.</li>
							</ol>
						</p>	
						<br/>
						<h4 style="margin-top: 0;">How to customize widget style?</h4>
						<p>
							<ol class="list">
								<li>Click on the advance link while creating new widget area and add widget class.</li>
								<li>Add custom css targeting your widget area class. i.e. <br>
								<code>
									.mynewwidgetareaclass a{
										color: red;
									} 
								</code><br>
								at the bottom of your style.css 
								where ".mynewwidgetareaclass" is your widget area class.
								</li>
							</ol>
						</p>	
					</div>
				  </div>
				  <div id="custom-menu-location">
				    <div class="how-to">
						<h3>How to use?</h3>
						<p>
							<ol class="list">
								<li>Create a new Menu Location.</li>
								<li>Click on the "get code" link from table below.</li>
								<li>Copy the code and Paste it in a wordpress theme where you want to display it.</li>
							</ol>
						</p>
						<br/>
						<h4 style="margin-top: 0;">How to Use it in page or post content?</h4>
						<p>
							<ol class="list">
								<li>Click on the "get shortcode" link form table below.</li>
								<li>Copy the shortcode and Paste it in a post or page editor where you want to display it.</li>
							</ol>
						</p>	
						<br/>
						<h4 style="margin-top: 0;">How to customize menu style?</h4>
						<p>
							<ol class="list">
								<li>Pass the extra arguments while calling function<br>
									i.e.<br>
									<code>
										wp_nav_menu( array( 'theme_location'	=> 'footer-location', 'menu_class'      => 'Cwa-menu', [arguments] => ['values']...	) );
									</code> 
									<br>
									<a href="https://codex.wordpress.org/Function_Reference/wp_nav_menu" target="_blank" > Cick here </a> to know more about available Parameters.
									<br>
									<pre style="word-wrap: break-word;">[Note: for shortcode pass arguments like <code>[menu theme_location='footer-location' 'menu_class'='Cwa-menu' [arguments]=[values]...]</code></pre>
								</li>
								<li>Make sure you have passed custom menu class options i.e. 'menu_class' like in above code.</li>
								<li>Add custom css targeting your menu_class or container_class etc. i.e. <br>
								<code>
									.Cwa-menu a{
										color: red;
									} 
								</code><br>
								at the bottom of your style.css.
								</li>
							</ol>
						</p>	
					</div>
				  </div>
			  </div>
			</div>
		</div>
	</div>

<?php 
}
?>