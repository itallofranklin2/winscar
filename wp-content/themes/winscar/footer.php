<section id="contato">
   <!-- LightWidget WIDGET --<script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/75666806af4957428962cd6f8ce47337.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden; margin-top:0; margin-bottom:60px;"></iframe>-->

                <?php $footer = get_post(123); ?>
    <div class="container">
       <div class="row">
        <div class="col-md-3 wow fadeInUp">
            <p><?php echo get_field('indroducao', 123); ?></p>
        </div>
        <div class="col-md-3 wow fadeInUp">
           <?php


                if( have_rows('info_contato', 123) ):


                    while ( have_rows('info_contato', 123) ) : the_row();

                       ?>

                   <a href="#"><?php the_sub_field('label'); ?><small><?php the_sub_field('contato');?></small> <img src="<?php the_sub_field('icone_contato');?>" alt=""></a>     

                   <?php
                    endwhile;

                else :

                    // no rows found

                endif;

                ?>
                
            <!--<a>Telefone : <small> +55 86 9968-4829 </small> <img src="img/icones-midias/telefone.png" alt=""></a>
            <a>Whatsapp : <small> +55 86 9968-4829 </small> <img src="img/icones-midias/whatsapp.png" alt=""></a>
            <a>Facebook <img src="img/icones-midias/facebook-logo-outline.png" alt=""></a>
            <a>Instagram <img src="img/icones-midias/intagram.png" alt=""></a>
            <a>E-mail : <small> Sadjan@winscar.com.br </small><img src="img/icones-midias/e-mail.png" alt=""></a>
            <a>Twitter <img src="img/icones-midias/twitter-social-outlined-logo.png" alt=""></a>
            <a>Youtube <img src="img/icones-midias/youtube.png" alt=""></a>-->
        </div>
        <div class="col-md-6 wow fadeInUp">
         <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fwinscaroficial%2F&tabs=timeline&width=500&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe><!--
          <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ffrontlancer%2F&tabs=timeline&width=500&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="100%" height="300" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
           <!-- <form action=""> 
                <div class="row">
                   <h4>Entre em contato conosco !</h4>
                    <div class="col-md-6">
                        <input type="text" placeholder="Seu nome"><br>
                        <input type="text" placeholder="Seu telefone">
                    </div>
                    <div class="col-md-6">
                        <input type="text" placeholder="Seu E-mail"><br>
                        <input type="text" placeholder="Seu celular">
                    </div>
                </div>
                <div class="row">
                    <textarea name="" placeholder="Assunto" id=""></textarea>
                </div>
            </form>-->
        </div>
    </div>
    </div>
</section>

    <footer>
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 wow fadeInUp">
                    <span class="copyright">Winscar &copy; com você desde 2017.</span>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -- 
    <script src=""></script>-->
<script src="<?php echo get_template_directory_uri(); ?>/js/busca.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/text-carousel.js"></script>
   
   
   
   
    <script src="<?php echo get_template_directory_uri(); ?>/js/minhabelezaweb.js/js/js/main.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/minhabelezaweb.js/js/js/jquery.stellar.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/minhabelezaweb.js/js/jquery-2.1.1.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/minhabelezaweb.js/js/pace.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/minhabelezaweb.js/js/bootstrap.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/minhabelezaweb.js/js/classie.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/minhabelezaweb.js/js/cbpAnimatedHeader.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/minhabelezaweb.js/js/wow.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/minhabelezaweb.js/js/inspinia.js"></script>
    <!-- Bootstrap Core JavaScript --
    <script src="js/bootstrap.min.js"></script>

    <script src="js/text-carousel.js"></script>
   
    <!-- Script to Activate the Carousel --> 
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
