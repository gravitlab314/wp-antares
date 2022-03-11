<?php 
/**
 * 
 * Header for a static home page 
 * 
 * @package wp-antares
 * 
 */?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head();?>
    </head>
    <body class="antares-body">
        <?php get_template_part( 'components/navbar/navbar', 'top' );?>
