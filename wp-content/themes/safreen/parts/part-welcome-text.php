<?php

				$safreen_welcome_section =  esc_html(get_theme_mod ('safreen_welcome'));
				$safreen_welcome_section = html_entity_decode(get_theme_mod ('safreen_welcome'));
				
if( !empty($safreen_welcome_section) ):
echo  '<div id="callout">';
				
echo  '<div class="row">';

echo $safreen_welcome_section;

					echo '</div>';
					echo '</div>';

				endif;
					?>