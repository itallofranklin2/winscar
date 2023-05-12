<?php get_header(); ?>
<section class="ganhedegraca wow fadeInUp">
<div class="container">
    <h2>Quer ganhar seu carro de graça ?</h2>
    <h3>Com a winscar, você pode !</h3>
    <div class="row">
        <div class="col-md-12">
           <h4>Para participar é simples !</h4>
            <p>Basta se cadastrar no formulário abaixo e indicar uma pessoa, seja familiar, conhecido ou amigo. Acumule pontos a cada compra feita por essa pessoa e sair com um carro semi novo de sua escolha e de graça. O poder está na sua mão ! Faça acontecer ! Vamos enviar para o seu e-mail, um cartão de visita onde você poderá enviar de forma online e poderá fazer a impressão do cartão para tê-los em mão.</p>
        </div>
        <div class="col-md-12">
          <div class="form-ganha-carro">
          <h2>Preencha nosso formulário</h2>
           <?php while ( have_posts() ) : the_post() ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
</section>
<?php get_footer(); ?>