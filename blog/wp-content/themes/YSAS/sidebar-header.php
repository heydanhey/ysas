<?php theme_print_sidebar('header-widget-area'); ?>


    <div class="art-shapes">
        
            </div>






                
<?php if (!theme_has_header_image() || theme_show_flash()) : ?>
<div id="art-flash-area">
                    <div id="art-flash-container">
                    <object width="100%" height="226" id="art-flash-object" data="<?php bloginfo('template_url'); ?>/images/flash.swf" type="application/x-shockwave-flash">
                        <param name="quality" value="high" />
                    	<param name="scale" value="exactfit" />
                    	<param name="wmode" value="transparent" />
                    	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent" />
                        <param name="swfliveconnect" value="true" />
                        <!--[if !IE]>-->
                        <object type="application/x-shockwave-flash" data="<?php bloginfo('template_url'); ?>/images/flash.swf" width="100%" height="226">
                            <param name="quality" value="high" />
                    	    <param name="scale" value="exactfit" />
                            <param name="wmode" value="transparent" />
                                                    	    <param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.50&amp;framerate1=24&amp;loop=true&amp;wmode=transparent" />
                            <param name="swfliveconnect" value="true" />
                        <!--<![endif]-->
                          	<div class="art-flash-alt"><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></div>
                        <!--[if !IE]>-->
                        </object>
                        <!--<![endif]-->
                    </object>
                    </div>
                    </div>
<?php endif; ?>

<?php if (theme_get_option('theme_use_default_menu')) { wp_nav_menu( array('theme_location' => 'primary-menu') );} else { ?><nav class="art-nav">
    <?php
	echo theme_get_menu(array(
			'source' => theme_get_option('theme_menu_source'),
			'depth' => theme_get_option('theme_menu_depth'),
			'menu' => 'primary-menu',
			'class' => 'art-hmenu'
		)
	);
	get_sidebar('nav'); 
?> 
    </nav><?php } ?>

                    
