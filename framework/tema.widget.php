<?php

function registrar_widget()
{
    register_sidebar(array(
        'name'          => "Rodapé - Coluna 1",
        'id'            => 'rodape-widget-1',
        'before_widget' => '<div id="%1$s" class="widget-content %2$s">',
        'after_widget'  => '</div>',
    ));

    register_sidebar(array(
        'name'          => "Rodapé - Coluna 2",
        'id'            => 'rodape-widget-2',
        'before_widget' => '<div id="%1$s" class="widget mb-3 col-lg-4 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => "Rodapé - Coluna 3",
        'id'            => 'rodape-widget-3',
        'before_widget' => '<div id="%1$s" class="widget mb-3 col-lg-4 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => "Rodapé - Coluna 4",
        'id'            => 'rodape-widget-4',
        'before_widget' => '<div id="%1$s" class="widget mb-3 col-lg-4 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));    
    
    register_sidebar(array(
        'name'          => "Rodapé - Políticas",
        'id'            => 'rodape-politics',
        'before_widget' => '<div id="%1$s" class="widget mb-3 col-lg-4 %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));

}

add_action('widgets_init', 'registrar_widget');
