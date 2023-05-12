<?php get_header();?>
<div class="container">
  <div class="tudo">
   <?php while(have_posts()) : the_post(); ?>
    <div class="col-md-9 wow fadeInUp">
       <div class="row">
       <div class="col-md-5 col-md-offset-2 col-xs-12">
        <h3 class="h3-single"><?php the_title(); ?></h3>
        </div>
        </div>
        <div class="row">
        
        <div id="main_area myCarousel"> 
               
                <!-- Slider -->
                <div class="row">
                    <div class="col-xs-12" id="slider">
                        <!-- Top part of the slider --> 
                        <div class="row">
                            <div class="col-sm-8" id="carousel-bounding-box">
                               
                                <div class="carousel slide" id="single">
                                   <ol class="carousel-indicators">
                                        <li data-target="#single" data-slide-to="0" class="active"></li>
                                        <li data-target="#single" data-slide-to="1"></li>
                                        <li data-target="#single" data-slide-to="2"></li>
                                        <li data-target="#single" data-slide-to="3"></li>
                                        <li data-target="#single" data-slide-to="4"></li>
                                    </ol>
                                    <!-- Carousel items --> 
                                    <div class="carousel-inner carousel-single">
                                      <?php
                                        $foto1=get_field("foto_1");
                                        $foto2=get_field("foto_2");
                                        $foto3=get_field("foto_3");
                                        $foto4=get_field("foto_4");
                                        $foto5=get_field("foto_5");  
                                        ?>
                                        <div class="active item" data-slide-number="0" id="0">
                                        <img src="<?php echo $foto1; ?>"></div>

                                        <div class="item" data-slide-number="1" id="1">
                                        <img src="<?php echo $foto2; ?>"></div>

                                        <div class="item" data-slide-number="2" id="2">
                                        <img src="<?php echo $foto3; ?>"></div>

                                        <div class="item" data-slide-number="3" id="3">
                                        <img src="<?php echo $foto4;?>"></div>

                                        <div class="item" data-slide-number="4" id="4">
                                        <img src="<?php echo $foto5; ?>"></div>
<!--
                                        <div class="item" data-slide-number="5">
                                        <img src="img/carro/palio/palio2.jfif"></div>-->
                               
                                    </div><!-- Carousel nav -->
                                    <a class="left carousel-control" href="#single" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                    </a>
                                    <a class="right carousel-control" href="#single" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                    </a>                                
                                    </div>
                            </div>
                          <?php 
                          $codigo=get_field("codigo");  
                          $marca=get_field("marca");  
                          $modelo=get_field("modelo");  
                          $versao=get_field("versao");  
                          $ano=get_field("ano");  
                          $portas=get_field("portas");  
                          $cor=get_field("cor");  
                          $combustivel=get_field("combustivel");  
                          $placa=get_field("placa");  
                          $km_detalhado=get_field("km_detalhado");  
                          $preco_detalhado=get_field("preco_detalhado");  
                            ?>
                            <div class="col-sm-3 wow fadeInRight mobile-detalhes" id="carousel-text">
                               <p><span>Legenda :</span> <?php echo $codigo; ?></p>
                               <p><span>Marca :</span> <?php echo $marca; ?></p>
                               <!--<p><span>Modelo :</span> <?php// echo $modelo; ?></p>
                               <p><span>Versão :</span> <?php //echo $versao; ?></p>-->
                               <p><span>Ano :</span> <?php echo $ano; ?></p>
                               <p><span>N. Portas :</span> <?php echo $portas; ?></p>
                               <p><span>Cor :</span> <?php echo $cor; ?></p>
                               <?php // combustivel
                                $field = get_field_object( 'combustivel' );
                                $value = $field['value'];
                                $choices = $field['choices'];
                                if ( $value ):
                                    foreach ( $value as $v ):
                                        echo '<p><span> Combustivél :</span>' . $choices[ $v ] . '</p>';
                                    endforeach;
                                endif; ?>
                               <p><span>Quilometragem :</span> <?php echo $km_detalhado; ?></p>
                               <p><span>Preço :</span> <?php echo $preco_detalhado; ?> R$</p>
                                <style>
                                    span{
                                        font-weight: 600;
                                    }
                                    p{
                                        font-size: 18px;
                                    }
                                </style>
                                                             
                            </div>

                            <div id="slide-content" style="display: none;">
                                <div id="slide-content-0">
                                     <h2>Slider One</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2014 - <a href="#carousel-selector-0">Read more</a></p>
                                </div>

                                <div id="slide-content-1">
                                    <h2>Slider Two</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2014 - <a href="#carousel-selector-1">Read more</a></p>
                                </div>

                                <div id="slide-content-2">
                                    <h2>Slider Three</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2014 - <a href="#carousel-selector-2">Read more</a></p>
                                </div>

                                <div id="slide-content-3">
                                    <h2>Slider Four</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2014 - <a href="#carousel-selector-3">Read more</a></p>
                                </div>

                                <div id="slide-content-4">
                                    <h2>Slider Five</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2014 - <a href="#carousel-selector-4">Read more</a></p>
                                </div>

                               <!-- <div id="slide-content-5">
                                    <h2>Slider Six</h2>
                                    <p>Lorem Ipsum Dolor</p>
                                    <p class="sub-text">October 24 2014 - <a href="#carousel-selector-5">Read more</a></p>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div><!--/Slider-->
               
                <!--<script>
                    $(document).ready(function(){
                        
                        $("#foto0").click(function(){
                            alert("Itallo feio!")
                        }
                        $("#foto1").click(function(){
                            $("#0").removeClass('class', 'active item');
                            $("#1").addClass('class', 'active item');
                            $("#2").removeClass('class', 'active item');
                            $("#3").removeClass('class', 'active item');
                            $("#4").removeClass('class', 'active item');
                        }
                        $("#foto2").click(function(){
                            $("#0").removeClass('class', 'active item');
                            $("#1").removeClass('class', 'active item');
                            $("#2").addClass('class', 'active item');
                            $("#3").removeClass('class', 'active item');
                            $("#4").removeClass('class', 'active item');
                        }
                        $("#foto3").click(function(){
                            $("#0").removeClass('class', 'active item');
                            $("#1").removeClass('class', 'active item');
                            $("#2").removeClass('class', 'active item');
                            $("#3").addClass('class', 'active item');
                            $("#4").removeClass('class', 'active item');
                        }
                        $("#foto4").click(function(){
                            $("#0").removeClass('class', 'active item');
                            $("#1").removeClass('class', 'active item');
                            $("#2").removeClass('class', 'active item');
                            $("#3").removeClass('class', 'active item');
                            $("#4").addClass('class', 'active item');
                        }
                    $.noConflict();
                    });
                </script>-->
                <div class="row hidden-xs" id="slider-thumbs">
                        <!-- Bottom switcher of slider -->
                        <ul class="hide-bullets">
                            <li class="col-sm-2 col-xs-6">
                                <a class="thumbnail" data-target="#single" data-slide-to="0"><img src="<?php echo $foto1; ?>"></a>
                            </li>

                            <li class="col-sm-2 col-xs-6">
                                <a class="thumbnail" data-target="#single" data-slide-to="1"><img src="<?php echo $foto2; ?>"></a>
                            </li>

                            <li class="col-sm-2 col-xs-6">
                                <a class="thumbnail" data-target="#single" data-slide-to="2"><img src="<?php echo $foto3; ?>"></a>
                            </li>

                            <li class="col-sm-2 col-xs-6">
                                <a class="thumbnail" data-target="#single" data-slide-to="3"><img src="<?php echo $foto4; ?>"></a>
                            </li>

                            <li class="col-sm-2 col-xs-6">
                                <a class="thumbnail" data-target="#single" data-slide-to="4"><img src="<?php echo $foto5; ?>"></a>
                            </li>

                            <!--<li class="col-sm-2">
                                <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/170x100&text=six"></a>
                            </li>-->
                        </ul>                 
                </div>
        </div>
        
       <h3 class=" wow fadeInLeft">Opcionais/Adicionais</h3>
           <?php

            // vars	
            $colors = get_field('opicionais');


            // check
            if( $colors ): ?>
            <row class="col-sm-10 col-xs-12 tabela-opicionais wow fadeInLeft">
                <?php foreach( $colors as $color ): ?>
                    <div class="col-sm-6 td"><?php echo $color; ?></div>
                <?php endforeach; ?>
            </row>
            <?php endif; ?>
    </div>
    </div>
    <div class="col-md-3 wow fadeInRight">
      <div class="box-form-single">
      <h5>Mande sua proposta.</h5>
       <?php the_content(); ?>
       </div>
    </div>
    
    
    <?php endwhile; ?>
    </div>
</div>


  <!-- <script type="text/javascript">
          jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
       $('[id^=carousel-selector-]').click( function(){
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
     


        </script>-->
        

        
<?php get_footer(); ?>

<!-- Marcas --
Acura
Agrale
Alfa Romeo
AM Gen
Asia Motors
ASTON MARTIN
Audi
BMW
BRM
Buggy
Bugre
Cadillac
CBT Jipe
CHANA
CHANGAN
CHERY
Chrysler
Citroën
Cross Lander
Daewoo
Daihatsu
Dodge
Engesa
Envemo
Ferrari
Fiat
Fibravan
Ford
FOTON
Fyber
GEELY
GM - Chevrolet
GREAT WALL
Gurgel
HAFEI
Honda
Hyundai
Isuzu
JAC
Jaguar
Jeep
JINBEI
JPX
Kia Motors
Lada
LAMBORGHINI
Land Rover
Lexus
LIFAN
LOBINI
Lotus
Mahindra
Maserati
Matra
Mazda
Mercedes-Benz
Mercury 
MG
MINI
Mitsubishi
Miura
Nissan
Peugeot
Plymouth
Pontiac
Porsche
RAM
RELY
Renault
Rolls-Royce
Rover
Saab
Saturn
Seat
SHINERAY
smart
SSANGYONG
Subaru
Suzuki
TAC
Toyota
Troller
Volvo
VW - VolksWagen
Wake
Walk -------------------->


