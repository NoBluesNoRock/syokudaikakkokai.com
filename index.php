<?php get_header(); ?>

<main class="py-12 bg-bg min-h-screen">
    <div class="container mx-auto px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-300 border border-gray-100 group">
                    <a href="<?php the_permalink(); ?>" class="block h-full flex flex-col">
                        <div class="h-56 overflow-hidden bg-gray-200 relative">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover transition-transform duration-700 group-hover:scale-110')); ?>
                            <?php else : ?>
                                <div class="flex items-center justify-center h-full text-gray-400 bg-gray-100">No Image</div>
                            <?php endif; ?>
                            <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <div class="p-8 flex-grow flex flex-col justify-between">
                            <div>
                                <time class="block text-accent font-bold mb-3 text-sm tracking-wide"><?php echo get_the_date('Y.m.d'); ?></time>
                                <h2 class="text-xl font-bold leading-relaxed text-text group-hover:text-accent transition-colors"><?php the_title(); ?></h2>
                            </div>
                            <div class="mt-6 text-right">
                                <span class="text-xs font-bold text-gray-400 uppercase tracking-widest group-hover:text-accent transition-colors">Read More &rarr;</span>
                            </div>
                        </div>
                    </a>
                </article>
            <?php endwhile; else : ?>
                <p class="col-span-full text-center text-gray-500">No posts found.</p>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
