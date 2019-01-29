<section class="page-section footsuscribe">
    <div>
        <div class="row">
            <div class="col-sm-9">
                <div class="row">
                    <div class="col-sm-12">
                        <p class="suscribe-title">¿Quieres enterarte de todas nuestras ofertas y promociones? <span style="font-size: 16px;">¡Únete a Newcar!</span></p>
                    </div>
                    <div class="col-sm-9">
                        <input name="suscribe" id="suscribe-mail" placeholder="Escribe tu email">
                    </div>
                    <div class="col-sm-3">
                        <input type="submit" id="suscribe-submit" value="Suscribirse">
                    </div>
                    <div class="col-sm-12">
                        <div class="politica-text">
                            <p>
                                Taller Newcar, tratará sus datos para el envío de información sobre actividades, productos, servicios y ofertas de Taller Newccar,
                                legitimado en su consentimiento. Le informamos que sus datos no serán comunicados a terceros. Puede ejercitar sus derechos de
                                acceso, rectificación, supresión y otros derechos según se indica en la Política de Privacidad
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div>
                    <p class="suscribe-title">Síguenos!</p>
                </div>
                <div class="social-footer">
                    <div class="socialfooterbtn"><i class="icon-facebook icon-social"></i></div>
                    <div class="socialfooterbtn"><i class="icon-facebook icon-social"></i></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section" style="margin: 0">

    <h3 class="header-title">¿POR QUÉ COMPRAR EN <span class="blue-text">TALLER NEW CAR</span>?</h3>

    <div class="container">
        <div class="chr-menu">
            
            <div class="advtg2" align="center">
                <div><img src="<?php bloginfo('template_url'); ?>/images/icons/mecanico.png"></div>
                <p>Montaje realizado profesionales</p>
            </div>
            
        </div>
    </div>

</section>

<footer class="main-footer">
	<div class="foot">
        <div class="row">
            <div class="col-sm-4">
                <p>Universo Newcar</p>
                <ul class="post-list">
                    <?php

                    $arg =  new WP_Query(array('posts_per_page' => '6', 'category_name' => 'universo_newcar'));
                    
                    if($arg->have_posts()){
                        
                        while($arg->have_posts()){
                            $arg->the_post();

                            echo '<li><a href="'.the_permalink().'">'.the_title().'</a></li>';
                        }
                    }
                    else
                    {
                        echo '<li>Aún no hay contenido cargado en la categoría "Universo Newcar"</li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="col-sm-4">
                <p>Neumáticos</p>
                <ul class="post-list">
                    <li><a href="<?php echo home_url("categoria-producto/neumaticos?cfa_marca=FIRESTONE"); ?>">Firestone</a></li>
                    <li><a href="<?php echo home_url("categoria-producto/neumaticos?cfa_marca=MICHELIN"); ?>">Michelin</a></li>
                    <li><a href="<?php echo home_url("categoria-producto/neumaticos?cfa_marca=CONTINENTAL"); ?>">Continental</a></li>
                    <li><a href="<?php echo home_url("categoria-producto/neumaticos?cfa_marca=PIRELLI"); ?>">Pirelli</a></li>
                    <li><a href="<?php echo home_url("categoria-producto/neumaticos?cfa_marca=BRIDGESTONE"); ?>">Bridgestone</a></li>
                    <li><a href="<?php echo home_url("categoria-producto/neumaticos?cfa_marca=DUNLOP"); ?>">Dunlop</a></li> 
                </ul>
            </div>
            <div class="col-sm-4">
                <p>Consejos prácticos</p>
                <ul class="post-list">
                    <?php
                    $arg =  new WP_Query(array('posts_per_page' => '6', 'category_name' => 'consejos_practicos'));
                    
                    if($arg->have_posts()){
                        
                        while($arg->have_posts()){
                            $arg->the_post();

                            echo '<li><a href="'.the_permalink().'">'.the_title().'</a></li>';
                        }
                    }
                    else
                    {
                        echo '<li>Aún no hay contenido cargado en la categoría "Consejos prácticos"</li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</footer> <!-- main-footer -->

<div class="navbar-foot">
  
  <div class="container">

      <div class="navbar-header">  
          <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo('template_url'); ?>/images/newcarfooter.png" class="header-image" alt=""  style=" height:43px; width:auto; "/></a>
      </div>

      <div id="navbar" class="navbar-collapse collapse">

       <?php
       $args = array(
        'theme_location' => 'footer',
        'menu' => 'top_menu',
        'depth' => 2,
        'container' => false,
        'menu_class' => 'nav navbar-nav'
    );
       
    ?>
    
    <?php wp_nav_menu($args); ?>
</div> 
</div>   
</div>

<div class="copyright">
    <p>Copyright © 2018 Taller Newcar. Todos los derechos reservados.</p>
</div>

<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.11.1.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>

<?php wp_footer();?>

</body>
</html>