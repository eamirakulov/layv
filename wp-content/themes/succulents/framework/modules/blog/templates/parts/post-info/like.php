<?php if(succulents_qodef_core_plugin_installed()) { ?>
    <div class="qodef-blog-like">
        <?php if( function_exists('succulents_qodef_get_like') ) succulents_qodef_get_like(); ?>
    </div>
<?php } ?>