<?php
                
                $field = get_field_object('marca');
                $value = $field['value'];
                $label = $field['choices'][ $value ];
                ?>
                <p>Color: <span class="color-<?php echo $value; ?>"><?php echo $label; ?></span></p>
                
                
                <?php
                
                $color = get_field('marca');
                ?>
                <p>Color: <span class="color-<?php echo $color['value']; ?>"><?php echo $color['label']; ?></span></p>
                
                <?php if( get_field('marca') == 'red' ): ?>
                    <p>Selected the Red choice!</p>
                <?php endif; ?>
                 <?php
                // vars	
                $colors = get_field('marca');
                // check
                if( $colors ): ?>
                <p>Color: <?php echo implode(', ', $colors); ?></p>
                <?php endif; ?>
                
               
              
              
             
            
           
          
         
        
          
                
               
                <?php $marca=get_field("marca");?>
                <!--<select data-placeholder="Selecione" class="chosen-select select-winscar" tabindex="2" id="">
                    <option value='acura'<?php echo ($marca=='acura')?'selected':''; ?>>Acura</option>
                    <option value="sao-paulo" >São Paulo</option>
                </select>-->
                    <style>
                        #country {display: none;}
                        .intro {display: block;}
                    </style>
                    <script>
                        $(document).ready(function(){
                         $("#continent").change(function(){
                           if ('option' == 'Centro') {
                            $("#country").addClass("intro");
                           }
                           else ('option' == 'Zona Norte') {
                            $("#country").addClass("intro");
                           }
                           else ('option' == 'Zona Oeste') {
                            $("#country").addClass("intro");
                           }
                          });
                         });
                    </script>
                <select data-placeholder="Selecione" class="chosen-select" style="width:170px; margin: 4px;" tabindex="2" id="continent" onchange="countryChange(this);">
                    <option value="empty">Todos</option>
                    <option value="acura">acura</option>
                    <option value="Zona Norte">Zona Norte</option>
                    <option value="Zona Oeste">Zona Oeste</option>
                    <option value="Centro">Centro</option>
                    <option value="Baixada">Baixada</option>
                </select>
                <select id="country">
                    <option value="0">Informe um bairro</option>
                </select>
                
               
              
                   
          
         
          
          
          
         
          <div class="row">
              <div id="archive-filters">
               <?php 
                  $field = get_field_object('combustivel');
                  $values = explode(',', $_GET['combustivel']); 
                  ?>
                  <ul>
                      <?php foreach( $field['choices'] as $choice_value => $choice_label ): ?>
                      <li>
                          <input type="checkbox" value="<?php echo $choice_value; ?>" <?php if(in_array($choice_value, $values) ) :?> checked="cheked"<?php endif; ?> ><?php echo $choice_label; ?></li>
                      </li>
                      <?php endforeach; ?>
                  </ul>
              </di>
                <script type="text/javascript"> 
                  (function($) {
                      $('#archive-filters').on('change', 'input[type="checkbox"]' , function(){
                          //vars
                          var $ul = $(this).closest('ul'),
                              vals = [];
                          
                          $ul.find('input:checked').each(function(){
                              vals.push( $(this).val() );
                          });
                          vals = vals.join(",");
                          window.location.replace('<?php echo home_url('carros/'); ?>?s=' + vals);
                          
                          console.log( vals );
                      });
                  })(jQuery);
                </script>

                
          </div>
       
      
     
    <div id="archive-filters">
              
               <?php  
                  $field_key_combustivel = "field_59b75d94222dd";
                  $values_combustivel = get_field_object($field_key_combustivel); 
                  ?>
                  <?php if(is_array($values_combustivel)){ ?>
                      <?php foreach($values_combustivel['choices'] as $k => $s ){ ?>
                      <li>
                          <input type="checkbox" name="combustivel" value="<?php echo $k; ?>" checked="checked"><?php echo $s; ?></li>
                      </li>
                      <?php } ?>
                  <?php } ?>
              </div>
              <!--<script type="text/javascript"> 
                  (function($) {
                      $('#archive-filters').on('change', 'input[type="checkbox"]' , function(){
                          //vars
                          var $ul = $(this).closest('ul'),
                              vals = [];
                          
                          $ul.find('input:checked').each(function(){
                              vals.push( $(this).val() );
                          });
                          vals = vals.join(",");
                          window.location.replace('<?php echo home_url('/carros'); ?>?combustivel=' + vals);
                          
                          console.log( vals );
                      });
                  })(jQuery);
                </script>-->
   
  
 














<li>
                  <?php  
                  $field_key_combustivel = "field_59b75d94222dd";
                  $values_combustivel = get_field_object($field_key_combustivel); 
                  ?>
                  
                      <?php foreach($values_combustivel['choices'] as $k => $s ){ ?>
                      <li>
                          <input type="checkbox" name="combustivel" value="<?php echo $k; ?>"<?php if(is_array($values_combustivel)){ ?> checked="checked"<?php } ?>><?php echo $s; ?></li>
                      
                      
                  <?php } ?>
                </li>





<?php 
                   if(!empty($_GET['combustivel']))
                   {
                      $combustivel = explode (',' , $_GET['combustivel']); 
                   }
                   ?>








array(
                            'key' => 'combustivel',
                             'value' => $combustivel,
                             'compare' => 'IN',  
                             ),



















<div id="archive-filters">
<?php $key = 'field_59b75d94222dd' ;?>
<?php $name = 'combustivel' ;?>
<?php foreach( $GLOBALS['my_query_filters'] as $key => $name ): 
	// get the field's settings without attempting to load a value
	$field = get_field_object($key, false, false);
	// set value if available
	if( isset($_GET[ $name ]) ) {
		$field['value'] = explode(',', $_GET[ $name ]);	
	}
	// create filter
	?>
	<div class="filter" data-filter="<?php echo $name; ?>">
		<?php create_field( $field ); ?>
	</div>
<?php endforeach; ?>
</div>

<script type="text/javascript">
(function($) {
	// change
	$('#archive-filters').on('change', 'input[type="checkbox"]', function(){
		// vars
		var url = '<?php echo home_url('carros'); ?>';
			args = {};
		// loop over filters
		$('#archive-filters .filter').each(function(){
			// vars
			var filter = $(this).data('filter'),
				vals = [];
			// find checked inputs
			$(this).find('input:checked').each(function(){
				vals.push( $(this).val() );
			});
			// append to args
			args[ filter ] = vals.join(',');
		});
		// update url
		url += '?';
		// loop over args
		$.each(args, function( name, value ){
			url += name + '=' + value + '&';
		});
		// remove last &
		url = url.slice(0, -1);
		// reload page
		window.location.replace( url );
	});
})(jQuery);
</script>






















<script>

	(function( $ ) {
		$('.selectpicker').selectpicker('refresh');
		
		  var showLoading = function() {
		  	$.blockUI({ message: '<div class="loading" > <img src="/images/logo.png?1461618131"  style="max-width:100%" /> <br/><div id="loaderImage"></div> <span class="text" >Aguarde...</span> </div>' });
		  	new imageLoader(cImageSrc, 'startAnimation()');
		  }
		  var hideLoading = function() {
		  	$.unblockUI();
		  }
		$('#current_store').on('change', function() {
			showLoading();
			new Ajax.Request('/site/update_current_store', {asynchronous:true, evalScripts:true, parameters:'store_id=' + $(this).val() + '&authenticity_token=' + encodeURIComponent('7U80dYdcFOeTAxwc+JjzhRZ8YNyGkj/yR4Tqe1UKDJI=')})
		});

		var selected_stores 	= [];
		var stores_selected_elm = $('#stores-selected select');

	  	$('#stores-selected .bootstrap-select').on('show.bs.dropdown', function() {
	  		selected_stores = stores_selected_elm.val() || [];
	  	});

	  	$('#stores-selected select').on('change', function() {
	  		var new_selected_stores = stores_selected_elm.val() || [];
	  		if(!arraysAreIdentical(new_selected_stores, selected_stores)) {						
				var params = '';
				$.each(new_selected_stores, function(index, value) {
					params +=  (index == 0) ? ('stores_id[]=' + value) : ('&stores_id[]=' + value);
				});

				$('#stores-selected .dropdown-menu').css('display', 'none');
				showLoading();
				new Ajax.Request('/site/update_store_city', {asynchronous:true, evalScripts:true, parameters:params + '&authenticity_token=' + encodeURIComponent('7U80dYdcFOeTAxwc+JjzhRZ8YNyGkj/yR4Tqe1UKDJI=')})
	  		}

	  	});

	  	var select_default_text = 'Visualizar também carros de';
	  	var filter_options      = $('#stores-selected .filter-option');
	  	var insert_select_text  = function() {
	  		
		  		if (!/Visualizar também carros de/i.test(filter_options.text())) {
		  			filter_options.prepend(select_default_text);
		  		};
	  		
	  	}

	  	insert_select_text();

	  	$('#stores-selected .dropdown-menu a').on('click', function() {
		   setTimeout(function() {
		   	  insert_select_text();
		   }, 1);
	  	});
	})(jQuery);

</script>





















<!--O que estava na single-->


<script src="<?php echo get_template_directory_uri(); ?>/terseBanner-master/lib/highlight.pack.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/terseBanner-master/lib/jquery-1.11.3.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/terseBanner-master/dist/jquery.terseBanner.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/terseBanner-master/example/script.js"></script>
