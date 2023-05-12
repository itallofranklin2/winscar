<?php /* Template Name: Filter */ ?>
<?php get_header(); ?>
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
       <form action="<?php echo home_url( '/' ); ?>" method="get" id="estado">
                <li class="drop-wisncar">
                    <button class="btn dropdown-winscar">Destaques</button>
                </li>

                <li class="drop-wisncar">
                    <button class="btn dropdown-winscar">Todos</button>
                </li> 
                
                

                
                
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
              
               <?php get_template_part('modelos', get_post_format()); ?>
               
           
               <?php
                $field_key_ano = "field_59b75d5b222da";
                $values_ano = get_field_object($field_key_ano); ?>

                <?php if(is_array($values_ano)){ ?>
                <select name="ano" id="ano" class="btn-search-winscar">
                <?php foreach ($values_ano['choices'] as $k => $v){ ?>
                    <option value="<?php echo $k ?>" checked="checked" ><?php echo $v ?></option>
                <?php } ?> 
                    </select>
                <?php
                }
              ?>
               
              <?php
                $field_key_estado = "field_5a058e3631ba1";
                $values_estado = get_field_object($field_key_estado); ?>

                <?php if(is_array($values_estado)){ ?>
                <select name="estado" class="btn-search-winscar">
                <?php foreach ($values_estado['choices'] as $k => $v){ ?>
                    <option value="<?php echo $k ?>" checked="checked" ><?php echo $v ?></option>
                <?php } ?> 
                    </select>
                <?php
                }
              ?>
              <input type="submit" class="search-submit btn-search-winscar"
                           value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
            </form>
      <?php
             $pagination = get_query_var('paged');
             $args = array(
                 'post_type' => 'Carro',
                 'posts_per_page' => -1,    
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
                     ),
                 'paged' => $pagination,
             );
             $conteudo = new WP_Query($args);
       ?>  
       <?php get_search_form(); ?>
       
      
       <!--Starter Pagination-->
       <div class="row">
        
         <h2>Você procurou por <?php the_search_query(); ?></h2>
          <nav class="Page navigation">
             <ul class="pagination">
                  <?php if (have_posts()) : ?>
                <li style="margin:0px !important;">
                    <?php previous_posts_link('Anterior', $conteudo->max_num_pages);?>
                 </li>
                 <li style="margin:0px !important;">
                    <?php echo paginate_links(array('total' => $conteudo->max_num_pages,)); ?>
                 </li>
                 <li style="margin:0px !important;">
                    <?php next_posts_link('Próximo', $conteudo->max_num_pages);?>
                 </li>   
             </ul>
            </nav>
            <!--Pagination-->
           <?php endif; ?>
         </div>
         <!--End Pagination-->
         <!--Content Page-->
         <div class="row"> 
             <?php if($conteudo->have_posts()) :?>
              <?php while($conteudo->have_posts()) : $conteudo->the_post(); ?>
               <div class="col-sm-6 col-md-3 wow fadeInUp">
                <div class="thumbnail">
                 <a href="<?php the_permalink(); ?>">
                 <?php if(has_post_thumbnail()){ the_post_thumbnail(); }?>
                  <div class="caption">
                  <h3><?php the_title(); ?></h3>
                    <?php $preco=get_field("preco");?>
                    <?php $quilometragem=get_field("quilometragem");?>
                    <?php $estado=get_field("estado");?>
                    <p>Quilometragem : <?php echo $quilometragem; ?> Km</p>
                    <p>Preço : <?php echo $preco; ?> R$</p>
                    <p>Estado : <?php echo $estado; ?></p>
                    <p><a href="<?php the_permalink(); ?>" class="btn-view-winscar" role="button">Visualizar</a></p>
                  </div>
                  </a>
                </div>
              </div>
              <?php endwhile; wp_reset_query(); ?>
             <?php endif; ?>
              
           </div>
           <!--End Content Page-->
       </div>
   </div>
</section>

<?php get_footer(); ?>