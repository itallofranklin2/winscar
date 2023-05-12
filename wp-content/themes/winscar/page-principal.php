<?php get_header(); ?>
<!--<div class="header">
    <p>Uma nova forma</p>
    <p style="margin-left: 90px;">de comprar </p>
    <p style="margin-left: 60px;"> seu carro !</p>
</div>
     Header Carousel --> 
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
 
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
           
            <div class="item active">
                <div class="fill img1"></div>
                <div class="carousel-caption">
                    <!--<h2>Programação</h2>-->
                </div>
            </div> 
            <div class="item">
                <div class="fill img2"></div>
                <div class="carousel-caption">
                    <!--<h2>Programação</h2>-->
                </div>
            </div>
            <div class="item">
                <div class="fill img3"></div>
                <div class="carousel-caption">
                    <!--<h2>Marketing</h2>-->
                </div>
            </div>
            <div class="item">
                <div class="fill img4"></div>
                <div class="carousel-caption">
                    <!--<h2>Aplicativos</h2>-->
                </div>
            </div>
            <!--<div class="text"></div>-->
        </div>
         
        <!-- Controls -->
        <a class="left carousel-control controle" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control controle" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

   
  <section id="quemsomos">
      <div class="container wow fadeInUp"> 
        <div class="col-md-6 wow fadeInUp">
            <?php while ( have_posts() ) : the_post() ?>
          <h2><?php the_field('titulo'); ?></h2>
          <p><?php the_field('quemsomos'); ?></p>
          <?php endwhile; ?>
        </div>
         <div class="col-md-6 wow fadeInRight">
            <img class="carro-home" src="<?php the_field('lugar-video');?>" width="100%" style="margin-top:80px;" alt="">
             <!--<iframe width="100%" height="350" src="https://www.youtube.com/embed/-frdH0j5hHI" frameborder="0" allowfullscreen></iframe>-->
         </div>
      </div>
  </section>
  
  
  
  
  
  
  <!--Content Page-->
        <div class="container">
         <div class="row conteudo-page-carro-desktop page-carros-home">  
            <?php 
             $args = array(
                 'post_type' => 'Carro',
                'posts_per_page' => 4, 
                 's' => $s,
             );
             $conteudo = new WP_Query($args);
       ?>  
       <?php  get_search_form(); ?>  
            <h2>Últimos lançamentos</h2> 
             <?php  if($conteudo->have_posts()) :?> 
              <?php  while($conteudo->have_posts()) : $conteudo->the_post(); ?>
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
              <a href="<?php bloginfo('url')?>/carros" class="btn dropdown-winscar">Visualizar mais</a>
           </div>
           </div>
           <!--End Content Page-->
  
  
  
  
  
  
  <section class="link-carro">
        
        <div class="compre-2">
             <div class="box-carro compre">
                <div class="container">
                     <div class="col-md-5 wow fadeInLeft">
                        <?php while ( have_posts() ) : the_post() ?>
                         <h2>Compre</h2>
                         <p>Entre com página "Compre" encontre o seu estilo de carro. Você pode fazer uma busca rápida pelo o celular e pode fazer busca por filtros na versão para computador. Os melhores preços de carros semi novos, você encontra aqui.</p>
                         <a href="<?php bloginfo('url')?>/carros" class="btn-winscar">Ir para a página >></a>
                     </div>
                     <div class="col-md-6 col-md-offset-1 link-carro-2 wow fadeInRight">
                         <img src="<?php the_field('link-imagem1');?>" width="100%" alt="">
                     </div>
                     <?php endwhile; ?>
                 </div>
             </div>
         </div>
         
         <div class="ganhe-2">
             <div class="box-carro ganhe">
                <div class="container">
                     <div class="col-md-6 link-carro-2 wow fadeInLeft">
                        <?php while ( have_posts() ) : the_post() ?>
                         <img src="<?php the_field('link-imagem2');?>" width="100%" alt="">
                     </div>
                     <div class="col-md-5 col-md-offset-1 wow fadeInRight">
                         <h2>Ganhe</h2>
                         <p>Para começar a fazer indicações é muito simples, basta preencher nosso formulário com seus dados pessoais, como nome, contato, endereço e etc. Nós vamos enviar para você um cartão digital, por e-mail, onde você poderá compartilhar online e fazer impressão para ter seus cartões físico também.</p>
                         <a href="<?php bloginfo('url')?>/ganhar" class="btn-winscar">Ir para a página >></a>
                     </div>
                     <?php endwhile; ?>
                 </div>
             </div>
         </div>
         
         <div class="venda-2">
             <div class="box-carro venda">
                <div class="container">
                     <div class="col-md-5 wow fadeInLeft">
                        <?php while ( have_posts() ) : the_post() ?>
                         <h2>Venda</h2>
                         <p>Preencha o formulário com a informações pedida. Seu carro irá passar por uma avaliação, para ser cadastrado no nosso sistema e em breve vai ao ar em nosso site.</p>
                         <a href="<?php bloginfo('url')?>/vendas" class="btn-winscar">Ir para a página >></a>
                     </div>
                     <div class="col-md-6 col-md-offset-1 link-carro-2 venda-img wow fadeInRight">
                         <img src="<?php the_field('link-imagem3');?>" width="100%" alt="">
                     </div>
                 </div>
                 <?php endwhile; ?>
             </div>
         </div>
      
  </section>
  
  <section>
        
        <div class="link-carro-mobile">
        
             <!--<div class="box-carro">
                <div class="container">
                     <div class="col-md-5 wow fadeInLeft">
                        <div class="row">
                          <img src="<?php // the_field('link-imagem1');?>" width="100%" alt="">
                         </div>
                         <div class="row">
                         <h2>Compre</h2>
                         <p>Entre com página "Compre" encontre o seu estilo de carro. Você pode fazer uma busca rápida pelo o celular e pode fazer busca por filtros na versão para computador. Os melhores preços de carros semi novos, você encontra aqui..</p>
                         </div>
                         <a href="<?php // bloginfo('url')?>/carros" class="btn-winscar">Ir para a página ></a>
                     </div>
                     
                 </div>
             </div>-->
         
         
         
             <div class="box-carro">
                <div class="container">
                     <?php while ( have_posts() ) : the_post() ?>
                         <img src="<?php the_field('link-imagem2');?>" width="100%" alt="">
                     
                     <div class="col-md-5 col-md-offset-1 wow fadeInRight">
                         <h2>Ganhe</h2>
                         <p>Para começar a fazer indicações é muito simples, basta preencher nosso formulário com seus dados pessoais, como nome, contato, endereço e etc. Nós vamos enviar para você um cartão digital, por e-mail, onde você poderá compartilhar online e fazer impressão para ter seus cartões físico também.</p>
                         <a href="<?php bloginfo('url')?>/ganhar" class="btn-winscar">Ir para a página ></a>
                     </div>
                 </div>
                 <?php endwhile; ?>
             </div>
         
         
         
             <div class="box-carro">
                <div class="container">
                     <div class="col-md-5 wow fadeInLeft">
                        <?php while ( have_posts() ) : the_post() ?>
                         <img src="<?php the_field('link-imagem3');?>" width="100%" alt="">
                     
                         <h2>Venda</h2>
                         <p>Preencha o formulário com a informações pedida. Seu carro irá passar por uma avaliação, para ser cadastrado no nosso sistema e em breve vai ao ar em nosso site.</p>
                         <a href="<?php bloginfo('url')?>/vendas" class="btn-winscar">Ir para a página ></a>
                     </div>
                     <?php endwhile; ?>
                 </div>
             </div>
         </div>
      
  </section>
  <!--
  <section id="ganhedegraca" class="parallax">
           <h3 style="text-align:center; color:white;">Ganhe seu carro de Graça</h3>
                    <a style="text-align:center; color:white;" class="parallax-button" href="ganhedegraca.php">Saiba mais</a>
            <div class="hoverzoom parallax">
                <!--<img src="img/parallax/carro1.jfif">--
                <div class="retina">
                   
                </div>
            </div>--
  </section>-->
  

          
<section id="comofunciona">
      <div class="container wow fadeInUp">
       <?php while ( have_posts() ) : the_post() ?>
        <h2>Com a winscar, você pode...</h2>
        
        <?php

        // check if the repeater field has rows of data
        if( have_rows('icones') ): ?>
       <div class="row">
            <?php while ( have_rows('icones') ) : the_row(); ?>
               
            <div class="col-md-3 wow fadeInUp">
                    <img src="<?php the_sub_field('imagem'); ?>" alt="">
                    <p><?php the_sub_field('texto'); ?></p>
            </div>
            
        <?php
          endwhile;

        else :

            // no rows found

        endif;

        ?>
        
         </div>
        <?php endwhile; ?>
      </div>
  </section>
 
 <!-- <section class="depoimentos" name="depoimentos">
  <h2>Depoimentos</h2>
  <div class="container">
    <!-- <div class="tcb-simple-carousel">--
       <div id="depoimentos" class="carousel slide">
         <div class="carousel-inner" role="listbox">
           <?php // query_posts(array(  'post_type' => 'depoimentos', ) );  ?> 
           <?php //if(have_posts()) : while( have_posts()) : the_post(); ?>  
              <div class="item item-depoimentos">
                <div class="content">
                  <div class="imagem"><?php // the_post_thumbnail(); ?></div>
                  <div class="conteudo"><?php // the_content() ?> <strong><?php // the_title() ?></strong> </div>
                 </div> <!-- acaba content --
              </div> <!-- acaba item --
           <?php// endwhile; endif; wp_reset_query();?>
         </div> <!-- acaba inner --
         <div class="carousel-controls">        
           <a class="left carousel-control" href="#depoimentos" data-slide="prev"><span class="icon-prev"></span></a>
           <a class="right carousel-control" href="#depoimentos" data-slide="next"><span class="icon-next"></span></a>   
         </div> <!-- acaba controls -->               
       </div> <!-- acaba myCarousel -- 
    </div> <!-- acaba tcb -->               
  </div> <!-- acaba container -->    
</section>
  
  
  
  <section id="parceiros">
      <div class="container wow fadeInUp">
        <h2>Parceiros</h2>
        <?php while ( have_posts() ) : the_post() ?>
        <?php

            if( have_rows('parceiros_post', 123) ):

                while ( have_rows('parceiros_post', 123) ) : the_row();

                   ?>
                        
                    <div class="col-md-4">
                      <img src="<?php the_sub_field('parceiros-img');?>" alt="" width="100%">
                    </div>
                
            <?php
                endwhile;
            else :
                // no rows found
            endif;
            ?>

      <?php endwhile; ?>
          </div>
      
</section>
  
  
 
  
<?php get_footer(); ?>