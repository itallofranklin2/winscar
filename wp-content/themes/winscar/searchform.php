
<!--<li class="dropdown drop-wisncar"  id="filtroMarca">
          <button class="btn dropdown-toggle  dropdown-winscar" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Marca
            <span class="caret"></span>
          </button>
          <?php
            $field_key_marca = "field_59b75d24222d7";
            $values_marca = get_field_object($field_key_marca); ?> 
            <?php $marcando = explode (',' , $_GET['marca']); ?>

           <?php if(is_array($values_marca)){ ?>
            <ul class="dropdown-menu ul_filter_winscar" aria-labelledby="dropdownMenu1" id="filtroMarca">
           <?php foreach ($values_marca['choices'] as $k => $v) : ?>
                <li value="<?php $k; ?>"  <?php if(in_array($k, $marcando)) : ?>  checked="cheked" <?php endif; ?> ><?php $v; ?></li>
             <?php  endforeach; ?>
            </ul>
            <?php } ?>
        </li>-->


<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label> 
        <span class="label-search"><?php echo _x( 'Procura rápida', 'Procura rápida' ) ?></span>
        <input type="search" class="search-field input-search-winscar"
            placeholder="<?php echo esc_attr_x( 'Insira o nome do carro...', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    <input type="submit" class="search-submit btn-search-pesquisar btn-search"
        value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form> 

 