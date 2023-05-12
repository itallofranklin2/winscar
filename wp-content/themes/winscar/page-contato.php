<?php get_header(); ?>
 <section id="contact">
   <div class="container">
   <div class="row">
   <div class="col-md-5 wow fadeInLeft">
           <h2>Tire suas dúvidas</h2>
           <p><span>Esse é o canal para você tirar suas dúvidas através do site, preencha o formulário, faça a pergunta e em breve, vamos lhe mandar um e-mail com a resposta !</span>
           <span>Nos ajude a melhorar nossos serviços, para você, fale conosco e mostre sua idéia para facilitar sua vida e de outros clientes. Sua opinião e avaliação sobre nosso atendimento e nossos serviços, é de extrema importância para a empresa.</span></p>
   </div>
<div class="col-md-6 col-md-offset-1 wow fadeInRight" style="margin-top:50px;">
       <?php while ( have_posts() ) : the_post() ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
        
   </div>
 </div>
 <div class="row">
    <?php


                if( have_rows('icone-img', 123) ):


                    while ( have_rows('icone-img', 123) ) : the_row();

                       ?>
                        
                   <!-- <div class="icones-footer col-md-1 wow fadeInUp" style="margin-left:50px;">
                <img  class="icones-contatos" src="<?php the_sub_field('icones-imagens');?>" alt="" width="100%" style="display:block;">
                <p style="font-size:22px; text-align:left;"><?php the_sub_field('texto-icones')?></p>
                </div>-->
                
               <?php
                    endwhile;

                else :

                    // no rows found

                endif;

                ?>
     </div>
     <div class="row">
         <div class="col-md-4">
             <!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/42db9249c0d65383ba6d634184e25785.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>

         </div>
         <div class="col-md-4">
             <blockquote class="twitter-tweet" data-lang="pt"><p lang="pt" dir="ltr">Estamos chegando no mercado brasileiro para surpreender, fique por dentro de novidades incríveis que vão acontecer com a Winscar e que poderá influenciar você também a realizar seu sonho de ganhar um carro novo, totalmente de graça ! Conheça mais e Compartilhe mais !!! <a href="https://t.co/0mIFNiIJ1D">pic.twitter.com/0mIFNiIJ1D</a></p>&mdash; winscar (@Winscar_oficial) <a href="https://twitter.com/Winscar_oficial/status/950543090686849025?ref_src=twsrc%5Etfw">9 de janeiro de 2018</a></blockquote>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

         </div>
         <div class="col-md-4">
             <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fwinscaroficial%2F&tabs=timeline&width=350&height=464&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
         </div>
     </div>
            <div class="row">
                    <p style="font-size:20px; text-align:center; font-weight:600; margin-top:20px;">Winscar &copy; com você desde 2017.</p>
            </div>
        
     </div>
    
 </section>
 <script src="<?php echo get_template_directory_uri(); ?>/js/minhabelezaweb.js/js/js/main.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/minhabelezaweb.js/js/js/jquery.stellar.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/minhabelezaweb.js/js/jquery-2.1.1.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/minhabelezaweb.js/js/pace.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/minhabelezaweb.js/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/minhabelezaweb.js/js/classie.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/minhabelezaweb.js/js/cbpAnimatedHeader.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/minhabelezaweb.js/js/wow.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/minhabelezaweb.js/js/inspinia.js"></script>