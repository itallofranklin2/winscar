<?php get_header(); ?>
 <div class="pag-venda wow fadeInUp">
    <div class="container">
        <h2>Venda seu carro conosco !</h2>
        <div class="col-md-12">
          <div class="row">
            <h3>Como vendemos seu carro ?</h3>
            <p>Com a Winscar, vender seu carro nunca foi tão fácil, tão rapído e tão simples de ser vendido, além de ser uma plataforma que liga compradores a vendedores, a winscar tem um plano, onde fazemos o seu marketing em todas as plataformas de vendas de carro do Brasil, dando mais visibilidade para o seu carro e mais credibilidade para a empresa.</p>
          </div>
        </div>
        <div class="col-md-12">
           <div class="form-ganha-carro">
           <h2>Preencha os seus dados e entraremos em contato com você em breve !</h2>
            <?php while ( have_posts() ) : the_post() ?>
            <?php the_content(); ?>
            <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>