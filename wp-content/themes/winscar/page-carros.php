<?php get_header(); ?>
<script> $(function(){ var nav = $('#imagem-fixa'); $(window).scroll(function () {if ($(this).scrollTop() > 0) { 
					nav.addClass("imagem-fixa"); 
				} else { 
					nav.removeClass("imagem-fixa"); 
				} 
			});  
		});
	</script>
<section class="pesquisa">
   <div class="container wow fadeInUp"> 
       
       
        
       
       <?php 
       if($_GET['estado'] && !empty($_GET['estado']))
       {
          $estado = $_GET['estado']; 
          
       } 
       ?>
        <?php 
       if($_GET['marca'] && !empty($_GET['marca']))
       {
          $marca = $_GET['marca'];
            
       }
       ?>
       <?php 
       if($_GET['ano_menor'] && !empty($_GET['ano_menor']))
       {
          $ano_menor = $_GET['ano_menor'];
       } else{
           $ano_menor = 0;
       }
       ?>
       <?php 
       if($_GET['ano_maior'] && !empty($_GET['ano_maior']))
       {
          $ano_maior = $_GET['ano_maior'];
       } else{
           $ano_maior = 999999;
       }
       ?>
       <?php 
       if($_GET['minprice'] && !empty($_GET['minprice']))
       {
          $minprice = $_GET['minprice'];
       } else {
        $minprice = 0;
       }
       ?>
       <?php 
       if($_GET['maxprice'] && !empty($_GET['maxprice']))
       {
          $maxprice = $_GET['maxprice']; 
       } else{
        $maxprice = 999999;
       }
       ?>
       
       <?php 
       if($_GET['valor_menor'] && !empty($_GET['valor_menor']))
       {
          $valor_menor = $_GET['valor_menor']; 
       } else{
           $valor_menor = 0;
       }
       ?>
       
       <?php 
       if($_GET['valor_maior'] && !empty($_GET['valor_maior']))
       {
          $valor_maior = $_GET['valor_maior']; 
       } else{
           $valor_maior = 999999;
       }
       ?>
       
       <?php 
       if($_GET['km_menor'] && !empty($_GET['km_menor']))
       {
          $km_menor = $_GET['km_menor']; 
       } else{
           $km_menor = 0;
       }
       ?>
       
       <?php 
       if($_GET['km_maior'] && !empty($_GET['km_maior']))
       {
          $km_maior = $_GET['km_maior']; 
       } else{
           $km_maior = 999999;
       }
       ?>
       <?php 
           if($_GET['portas'] && !empty($_GET['portas']))
           {
              $portas = $_GET['portas']; 
           }
           ?>
           <?php 
               if($_GET['cor'] && !empty($_GET['cor']))
               {
                  $cor = $_GET['cor']; 
               }
               ?>
               
       <form action="<?php echo home_url( '/carros' ); ?>" method="get">
        <ul class="ul-search form-filtro">
               <!--<li class="drop-wisncar">
                    <button class="btn dropdown-winscar">Destaques</button>
                </li>-->

                <div class="row">
                    <div class="col-md-1 col-md-push-0" style="margin-top: 26px;">
                        <li>
                            <button class="btn dropdown-winscar">Todos</button>
                        </li>    
                    </div>
                <div class="col-md-9 col-md-push-0">
                
                        <li>
                             <div class="col-md-12">
                                  <label>Marca</label>
                                      <?php 
                                        $field_key_marca = "field_59b75d24222d7";
                                        $values_marca = get_field_object($field_key_marca); ?>

                                       <?php if(is_array($values_marca)){ ?>
                                        <select name="marca" id="marca_carro" class="btn-search-winscar">
                                        <?php foreach ($values_marca['choices'] as $k => $v){ ?>
                                            <option value="<?php echo $k ?>" checked="checked" ><?php echo $v ?></option>
                                        <?php } ?> 
                                            </select>
                                        <?php
                                        }
                                       ?>
                               </div>
                        </li>


                       <!--<li>
                         <label>Modelo</label>
                         <?php //get_template_part('modelos', get_post_format()); ?>
                        </li>-->

                       <li>
                           <div class="col-md-12">
                             <label>Ano</label>
                                <div class="col-md-6">
                                       <?php
                                        $field_key_ano_menor = "field_59b75d5b222da";
                                        $values_ano_menor = get_field_object($field_key_ano_menor); ?>

                                        <?php if(is_array($values_ano_menor)){ ?>
                                        <select name="ano_menor" id="ano" class="btn-search-winscar">
                                        <?php foreach ($values_ano_menor['choices'] as $k => $v){ ?>
                                            <option value="<?php echo $k ?>" checked="checked" ><?php echo $v ?></option>
                                        <?php } ?> 
                                            </select>
                                        <?php
                                        }
                                      ?>
                                 </div>
                                
                                 <div class="col-md-6">
                                      <?php
                                        $field_key_ano_maior = "field_59b75d5b222da";
                                        $values_ano_maior = get_field_object($field_key_ano_maior); ?>

                                        <?php if(is_array($values_ano_maior)){ ?>
                                        <select name="ano_maior" id="ano" class="btn-search-winscar">
                                        <?php foreach ($values_ano_maior['choices'] as $k => $v){ ?>
                                            <option value="<?php echo $k ?>" checked="checked" ><?php echo $v ?></option>
                                        <?php } ?> 
                                            </select>
                                        <?php
                                        }
                                      ?>
                                </div>
                          </div>
                      </li>


                      <li>
                           <div class="col-md-12">
                              <label>Estado</label>
                                  <?php
                                    $field_key_estado = "field_5a058e3631ba1";
                                    $values_estado = get_field_object($field_key_estado); ?>

                                    <?php if(is_array($values_estado)){ ?>
                                    <select placeholder="Estado" name="estado" class="btn-search-winscar">
                                    <?php foreach ($values_estado['choices'] as $k => $v){ ?>
                                        <option value="<?php echo $k ?>" checked="checked" ><?php echo $v ?></option>
                                    <?php } ?> 
                                        </select>
                                    <?php
                                    }
                                  ?>
                          </div>
                      </li>
              </div>
              
              <div class="col-md-3 col-md-push-9" style="margin-top: -65px; margin-left: 50px;">
                 
                 <!-- <div class="col-md-8">
                    <li>
                      <label style="color:transparent !important;">filtrar</label>
                      <input type="button" value="Mais Filtros" class="btn-search-winscar" onclick="processaAjax()"></input>
                    </li>
                  </div>-->
                  <div class="col-md-12 col-md-pull-2">
                  <li><label style="color:transparent !important; float: rigth;">buscar</label><button class="btn-search-winscar" type="submit" name="">Buscar</button></li></div>
                  
              </div>
              <script>
                function processaAjax(){
                    var xmlHttp = new XMLHttpResquest();
                    console.log(this.responseText);
                    xmlHttp.onreadystatechange = function(){
                        if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
                            document.getElementById("pricekm").innerHTML = xmlHttp.responseText;
                        };
                    };
                    
                    xmlHttp.open("GET", "resposta.html", true);
                    xmlHttp.send();
                };
                    
              </script>
              
              
              </div>
              
              
              <div id="pricekm" class="row" style="margin-top:30px;">
                  <li class="preco">
                   
                    <div class="col-md-4">
                        <label>Preço</label>
                        <div class="col-md-6">
                           <?php
                                $field_key_valor_menor = "field_5a1dd2b366f87";
                                $values_valor_menor = get_field_object($field_key_valor_menor); ?>

                                <?php if(is_array($values_valor_menor)){ ?>
                                <select name="valor_menor" class="btn-search-winscar">
                                <?php foreach ($values_valor_menor['choices'] as $k => $v){ ?>
                                    <option value="<?php echo $k ?>" checked="checked" ><?php echo $v ?></option>
                                <?php } ?> 
                                    </select>
                                <?php
                                }
                              ?> 
                            
                        </div>
                        <div class="col-md-6">
                           <?php
                                $field_key_valor_maior = "field_5a1dd2b366f87";
                                $values_valor_maior = get_field_object($field_key_valor_maior); ?>

                                <?php if(is_array($values_valor_maior)){ ?>
                                <select name="valor_maior" class="btn-search-winscar">
                                <?php foreach ($values_valor_maior['choices'] as $k => $v){ ?>
                                    <option value="<?php echo $k ?>" checked="checked" ><?php echo $v ?></option>
                                <?php } ?> 
                                    </select>
                                <?php
                                }
                              ?>
                            
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <label>Quilometragem</label>
                        <div class="col-md-6">
                            <?php
                                $field_key_km_menor = "field_59b75dd8222de";
                                $values_km_menor = get_field_object($field_key_km_menor); ?>

                                <?php if(is_array($values_km_menor)){ ?>
                                <select name="km_menor" class="btn-search-winscar">
                                <?php foreach ($values_km_menor['choices'] as $k => $v){ ?>
                                    <option value="<?php echo $k ?>" checked="checked" ><?php echo $v ?></option>
                                <?php } ?> 
                                    </select>
                                <?php
                                }
                              ?>
                        </div>
                        <div class="col-md-6">
                            <?php
                                $field_key_km_maior = "field_59b75dd8222de";
                                $values_km_maior = get_field_object($field_key_km_maior); ?>

                                <?php if(is_array($values_km_maior)){ ?>
                                <select name="km_maior" class="btn-search-winscar">
                                <?php foreach ($values_km_maior['choices'] as $k => $v){ ?>
                                    <option value="<?php echo $k ?>" checked="checked" ><?php echo $v ?></option>
                                <?php } ?> 
                                    </select>
                                <?php
                                }
                              ?>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="col-md-6">
                           <label>Cor</label>
                           
                            <?php
                                $field_key_cor = "field_59b75d89222dc";
                                $values_cor = get_field_object($field_key_cor); ?>

                                <?php if(is_array($values_cor)){ ?>
                                <select name="cor" class="btn-search-winscar">
                                <?php foreach ($values_cor['choices'] as $k => $v){ ?>
                                    <option value="<?php echo $k ?>" checked="checked" ><?php echo $v ?></option>
                                <?php } ?> 
                                    </select>
                                <?php
                                }
                              ?>
                        </div>
                        <div class="col-md-6">
                           <label>Número de portas</label>
                           
                            <?php
                                $field_key_portas = "field_59b75d7d222db";
                                $values_portas = get_field_object($field_key_portas); ?>

                                <?php if(is_array($values_portas)){ ?>
                                <select name="portas" class="btn-search-winscar">
                                <?php foreach ($values_portas['choices'] as $k => $v){ ?>
                                    <option value="<?php echo $k ?>" checked="checked" ><?php echo $v ?></option>
                                <?php } ?> 
                                    </select>
                                <?php
                                }
                              ?>
                        </div>
                    </div>
              <!--<input type="range" name="points" min="<?php $minprice; ?>" max="<?php $maxprice; ?>">-->
              </li>
              
               
              </div>
             
              
              
              
              </ul>
              <!--<input type="submit" class="search-submit btn-search-winscar"
                           value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />-->
            </form>
      <?php
             $pagination = get_query_var('paged');
             $args = array(
                 'post_type' => 'Carro',
                 'posts_per_page' => 8, 
                 
                 'meta_query' => array(

                         array(
                            'key' => 'estado',
                             'value' => $estado,
                             'type' => 'CHAR',
                             'compare' => 'LIKE',  
                          ),

                          array(
                            'key' => 'marca',
                             'value' => $marca,
                             'type' => 'CHAR',
                             'compare' => 'LIKE',  
                          ),

                          array(
                            'key' => 'ano',
                             'value' => array($ano_menor, $ano_maior),
                             'type' => 'NUMERIC',
                             'compare' => 'BETWEEN',  
                          ),
                     
                         array(
                             'key' => 'quilometragem',
                             'type' => 'NUMERIC',
                             'value' => array($km_menor, $km_maior),
                             'compare' => 'BETWEEN',
                             ),
                     
                        array(
                            'key' => 'valor',
                            'type' => 'NUMERIC',
                            'value' => array($valor_menor, $valor_maior),
                            'compare' => 'BETWEEN',
                        ),
                     
                         
                     
                         array(
                            'key' => 'cor',
                             'value' => $cor,
                             'type' => 'CHAR',
                             'compare' => 'LIKE',  
                          ),
                         
                         array(
                            'key' => 'portas',
                             'value' => $portas,
                             'type' => 'CHAR',
                             'compare' => 'LIKE',  
                          ),
                         
                     ),
                 's' => $s,
                 'paged' => $pagination,
             );
             $conteudo = new WP_Query($args);
       ?>  
       <?php get_search_form(); ?>
       <?php/* get_template_part('filter', get_post_format()); */?> 
       <!--Starter Pagination-->
       <div class="container">
       <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
          <nav class="Page navigation">
             <ul class="pagination">
                  
                
                    <?php previous_posts_link('Anterior', $conteudo->max_num_pages);?>
                
               <?php if (have_posts()) : ?>
                    <a class="page-numbers"><?php echo paginate_links(array('total' => $conteudo->max_num_pages,)); ?></a>
                <?php endif; ?>
                 
                    <?php next_posts_link('Próximo', $conteudo->max_num_pages);?>
                   
                 
             </ul>
            </nav>
            </div>
         </div>
         </div>
         <!--End Pagination--> 
         <!--Content Page-->
         <div class="row conteudo-page-carro-desktop">     
             <?php if($conteudo->have_posts()) :?> 
              <?php while($conteudo->have_posts()) : $conteudo->the_post(); ?>
               <div class="col-xs-6 col-sm-6 col-md-3 wow fadeInUp">
                <div class="thumbnail">
                 <a href="<?php the_permalink(); ?>">
                 <?php if(has_post_thumbnail()){ the_post_thumbnail(); }?>
                  <div class="caption">
                  <h3><?php the_title(); ?></h3>
                    <?php $preco=get_field("preco");?>
                    <?php $quilometragem=get_field("quilometragem");?>
                    <?php $estado=get_field("estado");?>
                    <?php $marca=get_field("marca");?>
                    <?php $ano=get_field("ano");?>
                    
                    <?php $km_detalhado=get_field("km_detalhado");  
                          $preco_detalhado=get_field("preco_detalhado"); 
                      $marca=get_field("marca"); 
                      ?>
                          
                    <p class="p-page-carros">Marca : <?php echo $marca; ?></p>
                    <p class="p-page-carros">ano : <?php echo $ano; ?></p>
                    <p class="p-page-carros maior">Quilometragem : <?php echo $km_detalhado; ?> Km</p>
                    <p class="p-page-carros menor">Km : <?php echo $km_detalhado; ?> Km</p>
                    <p  class="p-page-carros">Preço : <?php echo $preco_detalhado; ?> R$</p>
                    <p><a href="<?php the_permalink(); ?>" class="btn-view-winscar" role="button">Visualizar</a></p>
                  </div>
                  </a>
                </div>
              </div>
              <?php endwhile; ?>
              
              <?php endif; ?>
              
           </div>
           <!--End Content Page-->
           <!--Pagination-->
           
           <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                  <nav class="Page navigation">
                     <ul class="pagination">
                        
                       
                            <?php previous_posts_link('Anterior', $conteudo->max_num_pages);?>
                         
                        <?php if (have_posts()) : ?>
                            <a class="page-numbers"><?php echo paginate_links(array('total' => $conteudo->max_num_pages,)); ?></a>
                         <?php endif; ?>  
                        
                            <?php next_posts_link('Próximo', $conteudo->max_num_pages);?>
                          
                         
                     </ul>
                    </nav>
               </div>
         </div>
           
       </div>
   
</section>
<?php get_footer(); ?>