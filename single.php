<?php get_header(); ?>

<main class="py-16 bg-bg min-h-screen">
    <div class="container mx-auto px-6">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" class="max-w-4xl mx-auto bg-white p-10 md:p-16 rounded-xl shadow-lg border border-gray-100">
                <header class="text-center mb-12 border-b border-gray-100 pb-10">
                    <div class="mb-6">
                        <time datetime="<?php echo get_the_date('c'); ?>" class="text-accent font-bold tracking-widest uppercase text-sm"><?php echo get_the_date('Y.m.d D'); ?></time>
                    </div>
                    <h1 class="text-3xl md:text-5xl font-bold mb-4 leading-tight text-text"><?php the_title(); ?></h1>
                </header>

                <div class="prose max-w-none mb-16 text-text-light leading-loose [&_img]:rounded-xl [&_img]:shadow-md [&_img]:mx-auto [&_h2]:text-2xl [&_h2]:font-bold [&_h2]:mt-12 [&_h2]:mb-6 [&_h2]:text-text [&_h2]:border-l-4 [&_h2]:border-accent [&_h2]:pl-4 [&_p]:mb-6">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="mb-12">
                            <?php the_post_thumbnail('large', array('class' => 'w-full h-auto rounded-xl shadow-md')); ?>
                        </div>
                    <?php endif; ?>
                    
                    <?php the_content(); ?>
                </div>

                <footer class="border-t border-gray-100 pt-10">
                    <?php
                    the_post_navigation(array(
                        'prev_text' => '<span class="block text-xs text-gray-400 uppercase mb-2 tracking-widest">Previous Post</span> <span class="block text-lg font-bold text-text group-hover:text-accent transition-colors">%title</span>',
                        'next_text' => '<span class="block text-xs text-gray-400 uppercase mb-2 tracking-widest text-right">Next Post</span> <span class="block text-lg font-bold text-text group-hover:text-accent transition-colors text-right">%title</span>',
                        'class' => 'flex justify-between gap-8'
                    ));
                    ?>
                </footer>
            </article>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>
