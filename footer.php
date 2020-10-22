<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 footer-column wow fadeInUp">
                <?php
                    if ( function_exists('dynamic_sidebar') )
                        dynamic_sidebar('footer_column_1');
                ?>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 footer-column wow fadeInUp">
                <?php
                    if ( function_exists('dynamic_sidebar') )
                        dynamic_sidebar('footer_column_2');
                ?>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 footer-column wow fadeInUp">
                <?php
                    if ( function_exists('dynamic_sidebar') )
                        dynamic_sidebar('footer_column_3');
                ?>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 footer-column wow fadeInUp">
                <?php
                    if ( function_exists('dynamic_sidebar') )
                        dynamic_sidebar('footer_column_4');
                ?>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/utils/wow/wow.min.js"></script>
<script async src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/sticky-menu.min.js"></script>
<script async src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/toggle-nav.min.js"></script>
<script async src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/typed.min.js"></script>
<script defer src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/utils/slick/slick.min.js"></script>
<script defer src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/utils/creep/jquery.creep.min.js"></script>
<script defer src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/utils/particlesjs/particles.min.js"></script>
<script defer src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/utils/resizesensor/resizesensor.min.js"></script>
<script defer src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/utils/sticky-sidebar/sticky-sidebar.min.js"></script>
<script defer src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/custom.min.js"></script>

<?php wp_footer() ?>
</div>
<script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "/wp-content/uploads/metrika/tag.js", "ym"); ym(38455475, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/38455475" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</html>