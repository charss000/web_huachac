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
	$color = empty($instance['color']) ? '' :  apply_filters('widget_title', $instance['color']);
	$infoText = empty($instance['infoText']) ? '' :  apply_filters('widget_title', $instance['infoText']);
    // Before widget code, if any
    echo (isset($before_widget)?$before_widget:'');

    // PART 2: The title and the text output
   
  
	switch ($icono){
		case 'Facebook':
			echo $content = '<a href="https://'.$url.'" target="_blank" data-color="'.$color.'" data-text="'.$infoText.'"><i class="fa fa-facebook"></i>
			</a>';
			break;
		case 'Instagram':
			echo $content = '<a href="https://'.$url.'" target="_blank" data-color="'.$color.'" data-text="'.$infoText.'"><i class="fa fa-instagram"></i></a>';
			break;
		case 'WhatsApp':
			echo $content = '<a href="https://api.whatsapp.com/send?phone='.'[+51]['.$url.']"'.' data-color="'.$color.'" data-text="'.$infoText.'"><i class="fa fa-whatsapp" target="_blank"></i></a>';
			break;
		case 'Youtube':
			echo $content = '<a href="https://'.$url.'" target="_blank" data-color="'.$color.'"><i class="fa fa-youtube"></i></a>';
			break;
		case 'Linkedin':
			echo $content = '<a href="https://'.$url.'" target="_blank" data-color="'.$color.'" data-text="'.$infoText.'"><i class="fa fa-linkedin"></i></a>';
			break;
		case 'Pinterest':
			echo $content = '<a href="https://'.$url.'" target="_blank" data-color="'.$color.'" data-text="'.$infoText.'"><i class="fa fa-pinterest-square"></i></a>';
			break;
		case 'Twitter':
			echo $content = '<a href="https://'.$url.'" target="_blank" data-color="'.$color.'" data-text="'.$infoText.'"> <i class="fa fa-twitter"></i></a>	';
			break;
		case 'Telegram':
			echo $content = '<a href="https://'.$url.'" target="_blank" data-color="'.$color.'" data-text="'.$infoText.'"> <i class="fa fa-telegram"></i> </a>	';
			break;
		case 'Dribbble':
            echo $content = '<a href="https://'.$url.'" target="_blank" data-color="'.$color.'" data-text="'.$infoText.'"> <i class="fa fa-dribbble"></i></a>';
            break;  
		case 'Correo':
            echo $content = '<a href="https://'.$url.'" target="_blank" data-color="'.$color.'"> <i class="fa fa-envelope"></i></a>';
            break;
        case 'Page':
            echo $content = '<a href="https://'.$url.'"  target="_blank" data-color="'.$color.'" data-text="'.$infoText.'"> <i class="fa fa-thumbs-up"></i></a>';
            break;
		case 'Sereno':
			echo $content = '<a data-color="'.$color.'" data-text="'.$infoText.'"> <i class="ico-serenazgo-2  Serenazgo desing-icono"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span><span class="path16"></span><span class="path17"></span><span class="path18"></span><span class="path19"></span><span class="path20"></span><span class="path21"></span><span class="path22"></span><span class="path23"></span><span class="path24"></span><span class="path25"></span><span class="path26"></span><span class="path27"></span><span class="path28"></span><span class="path29"></span><span class="path30"></span><span class="path31"></span><span class="path32"></span><span class="path33"></span><span class="path34"></span></i></a>';
			break;
		case 'Revista':
			echo $content = '<a href="https://'.$url.'"    data-color="'.$color.'" data-text="'.$infoText.'"> <i class="ico-acuerdos  desing-icono"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span></i></a>';
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
	$instance['color'] = $new_instance['color'];
	$instance['infoText'] = $new_instance['infoText'];
    return $instance;
    }

    function form($instance){
      
        // PART 1: Extract the data from the instance variable
     $instance = wp_parse_args( (array) $instance, array( 'title' => '' ) );
     $title = $instance['title'];
     $icono = $instance['city'];   
     $url = $instance['url']; 
	 $color = $instance['color']; 
	 $infoText = $instance['infoText']; 
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

			<option value='Sereno'<?php echo ($icono=='Sereno')?'selected':''; ?>>
			Serenazgo
			</option> 
			<option value='Revista'<?php echo ($icono=='Revista')?'selected':''; ?>>
			Revista
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
	  <!--Definimos el color del icono-->
	  <p>
      <label for="<?php echo $this->get_field_id('color'); ?>">Ingrese el color hexadecimal: 
        <input type="text"  class="widefat"
      id="<?php echo $this->get_field_id('color'); ?>" 
      name="<?php echo $this->get_field_name('color'); ?>"
      value="<?php echo attribute_escape($color); ?>">
      </label>
      
      
      </p>
	  <p>
      <label for="<?php echo $this->get_field_id('infoText'); ?>">Ingrese Texto de icono: 
        <input type="text"  class="widefat"
      id="<?php echo $this->get_field_id('infoText'); ?>" 
      name="<?php echo $this->get_field_name('infoText'); ?>"
      value="<?php echo attribute_escape($infoText); ?>">
      </label>
      
      
      </p>
      <!-- Widget Title field END -->
        <?php
    }
}

?>