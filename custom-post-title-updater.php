<?php
/**
 * Plugin Name: Custom Post Title Updater
 * Description: Atualiza automaticamente os títulos SEO dos posts filhos ao publicar ou atualizar o post pai.
 * Version: 2.0
 * Author: APKGrátis.com.br
 */

// Hook para detectar quando um post é publicado ou atualizado
add_action('save_post', 'update_posts_seo_title_and_app_type', 10, 3);

function update_posts_seo_title_and_app_type($post_id, $post, $update) {
    // Certifique-se de que é um post do tipo "post" (não páginas ou custom post types)
    if ($post->post_type !== 'post') {
        return;
    }

    // Evitar loops infinitos ao salvar o mesmo post
    remove_action('save_post', 'update_posts_seo_title_and_app_type', 10);

    // Atualizar o campo "Tipo de aplicação:" (app_type) do post atual para 1
    update_post_meta($post_id, 'app_type', '1');
    error_log("Campo 'Tipo de aplicação:' (app_type) do post atual (ID: {$post_id}) atualizado para 1.");

    // Obter os posts filhos do post pai atual
    $child_posts = get_children([
        'post_parent' => $post_id,
        'post_type'   => 'post',
        'post_status' => 'publish',
    ]);

    if (!empty($child_posts)) {
        foreach ($child_posts as $child_post) {
            // Atualizar o campo personalizado de título SEO do Rank Math para "%title% %sep% %sitename%"
            $updated_seo_title = '%title% %sep% %sitename%';
            update_post_meta($child_post->ID, 'rank_math_title', $updated_seo_title);

            // Atualizar o campo "Tipo de aplicação:" (app_type) para 1
            update_post_meta($child_post->ID, 'app_type', '1');
            error_log("Campo 'Tipo de aplicação:' (app_type) do post filho (ID: {$child_post->ID}) atualizado para 1.");

            error_log("Título SEO do post filho (ID: {$child_post->ID}) atualizado para: {$updated_seo_title}"); // Diagnóstico
        }
    } else {
        error_log("Nenhum post filho encontrado para o post pai ID: {$post_id}."); // Diagnóstico
    }

    // Reativar o hook
    add_action('save_post', 'update_posts_seo_title_and_app_type', 10, 3);
}
