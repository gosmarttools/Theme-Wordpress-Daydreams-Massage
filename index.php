<?php
/**
 * Main Template File (Fallback for Daydreams Massage Jakarta)
 *
 * @package Daydreams_Massage_Jakarta
 */

get_header();
?>

<main id="primary" class="site-main">
    <?php
    if (have_posts()) :
        // If front-page is loaded or custom query
        if (is_front_page()) :
            get_template_part('front-page');
        else :
            ?>
            <div class="max-w-4xl mx-auto px-4 py-16">
                <?php
                while (have_posts()) :
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white p-8 rounded-3xl shadow-sm border border-slate-200 mb-8'); ?>>
                        <header class="entry-header mb-6">
                            <?php the_title('<h1 class="text-3xl font-bold font-serif text-navy-900 mb-4">', '</h1>'); ?>
                        </header>
                        <div class="entry-content text-slate-700 leading-relaxed space-y-4">
                            <?php the_content(); ?>
                        </div>
                    </article>
                    <?php
                endwhile;
                ?>
            </div>
            <?php
        endif;
    else :
        ?>
        <div class="max-w-xl mx-auto px-4 py-24 text-center">
            <h2 class="text-2xl font-bold text-navy-900 font-serif mb-3">Sorry Nampaknya Halaman ini Tidak Ditemukan</h2>
            <p class="text-slate-600 mb-6">Maaf, konten yang Anda cari tidak tersedia. Silakan kembali ke beranda.</p>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex items-center px-6 py-3 rounded-full bg-navy-900 text-white font-semibold text-sm">
                Kembali ke Beranda
            </a>
        </div>
        <?php
    endif;
    ?>
</main>

<?php
get_footer();
