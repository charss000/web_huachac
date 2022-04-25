<?php

class mpw_widget extends WP_Widget {

    function mpw_widget(){
        $widget_ops = array('classname' => 'widget_social', 'description' => "Agregar Iconos Sociales" );
        $this->WP_Widget('mpw_widget', "Iconos Sociales", $widget_ops);
    }

    function widget($args,$instance){
       // PART 1: Extracting the arguments + getting the values
    extract($args, EXTR_SKIP);
    $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
    $icono = empty($instance['city']) ? '' : $instance['city'];
    $url = empty($instance['url']) ? '' :  apply_filters('widget_title', $instance['url']);
    // Before widget code, if any
    echo (isset($before_widget)?$before_widget:'');

    // PART 2: The title and the text output
   
  
	switch ($icono){
		case 'Facebook':
			echo $content = '<a href="https://'.$url.'" target="_blank"><i class="fa fa-facebook"></i></a>';
			break;
		case 'Instagram':
			echo $content = '<a href="https://'.$url.'" target="_blank"><i class="fa fa-instagram"></i></a>';
			break;
		case 'WhatsApp':
			echo $content = '<a href="https://api.whatsapp.com/send?phone='.'[+51]['.$url.']"'.'><i class="fa fa-whatsapp" target="_blank"></i></a>';
			break;
		case 'Youtube':
			echo $content = '<a href="https://'.$url.'" target="_blank"><i class="fa fa-youtube"></i></a>';
			break;
		case 'Linkedin':
			echo $content = '<a href="https://'.$url.'" target="_blank"><i class="fa fa-linkedin"></i></a>';
			break;
		case 'Pinterest':
			echo $content = '<a href="https://'.$url.'" target="_blank"><i class="fa fa-pinterest-square"></i></a>';
			break;
		case 'Twitter':
			echo $content = '<a href="https://'.$url.'" target="_blank"> <i class="fa fa-twitter"></i></a>	';
			break;
		case 'Telegram':
			echo $content = '<a href="https://'.$url.'" target="_blank"> <i class="fa fa-telegram"></i> </a>	';
			break;
		case 'Dribbble':
            echo $content = '<a href="https://'.$url.'" target="_blank"> <i class="fa fa-dribbble"></i></a>';
            break;  
		case 'Correo':
            echo $content = '<a href="https://'.$url.'" target="_blank"> <i class="fa fa-envelope"></i></a>';
            break;
        case 'Page':
            echo $content = '<a href="https://'.$url.'"  target="_blank"> <i class="fa fa-thumbs-up"></i></a>';
            break;
	
	}	
	
		

    // After widget code, if any  
    echo (isset($after_widget)?$after_widget:'');
    }

    function update($new_instance, $old_instance){
        $instance = $old_instance;
    $instance['title'] = $new_instance['title'];
    $instance['city'] = $new_instance['city'];
	$instance['url'] = $new_instance['url'];
    return $instance;
    }

    function form($instance){
      
        // PART 1: Extract the data from the instance variable
     $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
     $title = $instance['title'];
     $icono = $instance['city'];   
     $url = $instance['url']; 
     // PART 2-3: Display the fields
     ?>
    

     <!-- PART 3: Para Seleccionar las Redes Sociales -->
     <p>
      <label for="<?php echo $this->get_field_id('text'); ?>">Red Social: 
        <select class='widefat' id="<?php echo $this->get_field_id('city'); ?>"
                name="<?php echo $this->get_field_name('city'); ?>" type="text">
			<option value='Facebook'<?php echo ($icono=='Facebook')?'selected':''; ?>>
				Facebook
			</option>
			<option value='Instagram'<?php echo ($icono=='Instagram')?'selected':''; ?>>
			Instagram
			</option> 
			<option value='WhatsApp'<?php echo ($icono=='WhatsApp')?'selected':''; ?>>
				WhatsApp
			</option> 
			<option value='Twitter'<?php echo ($icono=='Twitter')?'selected':''; ?>>
			Twitter
			</option> 
			<option value='Telegram'<?php echo ($icono=='Telegram')?'selected':''; ?>>
			Telegram
			</option> 
			<option value='Youtube'<?php echo ($icono=='Youtube')?'selected':''; ?>>
				Youtube
			</option> 
			
			<option value='Pinterest'<?php echo ($icono=='Pinterest')?'selected':''; ?>>
			Pinterest
			</option> 
			<option value='Linkedin'<?php echo ($icono=='Linkedin')?'selected':''; ?>>
			Linkedin
			</option> 
			<option value='Dribbble'<?php echo ($icono=='Dribbble')?'selected':''; ?>>
			Dribbble
			</option> 
			<option value='Correo'<?php echo ($icono=='Correo')?'selected':''; ?>>
			Correo
			</option> 
				<option value='Page'<?php echo ($icono=='Page')?'selected':''; ?>>
			Pagina
			</option> 
	
        </select>                
      </label>
     </p>
	  <!-- PART 2: Widget Title field START -->
	  <p>
      <label for="<?php echo $this->get_field_id('url'); ?>">Url/Numero: 
        <input type="text"  class="widefat"
      id="<?php echo $this->get_field_id('url'); ?>" 
      name="<?php echo $this->get_field_name('url'); ?>"
      value="<?php echo attribute_escape($url); ?>">
      </label>
      
      <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" 
               name="<?php echo $this->get_field_name('title'); ?>" type="hidden" 
               value="<?php echo ($icono); ?>"   />
      </p>
      <!-- Widget Title field END -->
        <?php
    }
}

?>