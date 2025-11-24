<?php get_header(); ?>

<main>
    <!-- Hero Section -->
    <section class="relative w-full h-[60vh] min-h-[400px] overflow-hidden flex items-center justify-center">
        <div class="absolute top-0 left-0 w-full h-full -z-10">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.png" alt="燭台（怪）" class="w-full h-full object-cover animate-pulse-slow">
            <div class="absolute inset-0 bg-hero-overlay"></div>
        </div>
        <div class="text-center text-white drop-shadow-lg animate-fade-in-up">
            <h2 class="text-5xl md:text-7xl font-bold tracking-widest uppercase bg-black-transparent backdrop-blur-sm px-10 py-6 border-y-2 border-accent/50">We are 燭台（怪）</h2>
        </div>
    </section>

    <!-- Live Schedule Section -->
    <section id="live-schedule" class="py-24 bg-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-accent to-transparent opacity-50"></div>
        <div class="container mx-auto px-6">
            <h2 class="text-4xl md:text-5xl text-center mb-16 font-extrabold tracking-widest relative w-fit mx-auto text-text">
                LIVE SCHEDULE
                <span class="block w-16 h-1 bg-accent mx-auto mt-6 rounded-full"></span>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                <?php
                $today = date('Y-m-d');
                $live_query = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'post_status' => array('publish', 'future'),
                    'date_query' => array(
                        array(
                            'after' => $today,
                            'inclusive' => true,
                        ),
                    ),
                    'orderby' => 'date',
                    'order' => 'ASC',
                ));
                if ($live_query->have_posts()) :
                    while ($live_query->have_posts()) : $live_query->the_post(); ?>
                        <article class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 border border-gray-100 group">
                            <a href="<?php the_permalink(); ?>" class="block h-full flex flex-col">
                                <div class="h-56 overflow-hidden bg-gray-200 relative">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover transition-transform duration-700 group-hover:scale-110')); ?>
                                    <?php else : ?>
                                        <div class="flex items-center justify-center h-full text-gray-400 bg-gray-100">No Image</div>
                                    <?php endif; ?>
                                    <div class="absolute top-4 left-4 bg-accent text-white text-xs font-bold px-3 py-1 rounded shadow-md uppercase tracking-wider">Upcoming</div>
                                </div>
                                <div class="p-8 flex-grow flex flex-col justify-between">
                                    <div>
                                        <time class="block text-accent font-bold mb-3 text-sm tracking-wide"><?php echo get_the_date('Y.m.d D'); ?></time>
                                        <h3 class="text-xl font-bold leading-relaxed text-text group-hover:text-accent transition-colors"><?php the_title(); ?></h3>
                                    </div>
                                    <div class="mt-6 text-right">
                                        <span class="text-xs font-bold text-gray-400 uppercase tracking-widest group-hover:text-accent transition-colors">More Info &rarr;</span>
                                    </div>
                                </div>
                            </a>
                        </article>
                    <?php endwhile;
                    wp_reset_postdata();
                else : ?>
                    <p class="text-center col-span-full text-gray-500 py-12 bg-gray-50 rounded-lg">No upcoming live shows.</p>
                <?php endif; ?>
            </div>
            <div class="text-center mt-16 relative z-10">
                <a href="<?php echo get_post_type_archive_link('post'); ?>" class="inline-block px-12 py-4 border-2 border-text text-text font-bold tracking-widest hover:bg-text hover:text-white transition-all duration-300 uppercase text-sm">View All Schedule</a>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section id="info" class="py-24 bg-bg border-y border-gray-200">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl md:text-5xl text-center mb-16 font-extrabold tracking-widest relative w-fit mx-auto text-text">
                INFORMATION
                <span class="block w-16 h-1 bg-accent mx-auto mt-6 rounded-full"></span>
            </h2>
            <ul class="max-w-4xl mx-auto list-none p-0 bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                <?php
                $info_query = new WP_Query(array(
                    'post_type' => 'info',
                    'posts_per_page' => 5,
                ));
                if ($info_query->have_posts()) :
                    while ($info_query->have_posts()) : $info_query->the_post(); ?>
                        <li class="border-b border-gray-100 last:border-none">
                            <a href="<?php the_permalink(); ?>" class="flex flex-col md:flex-row py-6 px-8 items-start md:items-center transition-all duration-300 hover:bg-gray-50 group">
                                <time class="min-w-[140px] font-bold text-gray-400 group-hover:text-accent transition-colors text-sm tracking-wide mb-2 md:mb-0"><?php echo get_the_date('Y.m.d'); ?></time>
                                <span class="text-lg font-medium text-text group-hover:translate-x-2 transition-transform duration-300"><?php the_title(); ?></span>
                            </a>
                        </li>
                    <?php endwhile;
                    wp_reset_postdata();
                endif; ?>
            </ul>
        </div>
    </section>

    <!-- Discography Section -->
    <section id="discography" class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl md:text-5xl text-center mb-16 font-extrabold tracking-widest relative w-fit mx-auto text-text">
                MUSIC & GOODS
                <span class="block w-16 h-1 bg-accent mx-auto mt-6 rounded-full"></span>
            </h2>
            <div class="grid grid-cols-3 gap-4 md:gap-10">
                <?php
                $disco_query = new WP_Query(array(
                    'post_type' => 'discography',
                    'posts_per_page' => 6,
                ));
                if ($disco_query->have_posts()) :
                    while ($disco_query->have_posts()) : $disco_query->the_post(); 
                        $price = get_post_meta(get_the_ID(), 'price', true);
                    ?>
                        <article class="group cursor-pointer">
                            <a href="<?php the_permalink(); ?>" class="block">
                                <div class="relative aspect-square overflow-hidden rounded-xl shadow-md group-hover:shadow-xl transition-all duration-500">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover transition-transform duration-700 group-hover:scale-110')); ?>
                                    <?php else : ?>
                                        <div class="flex items-center justify-center h-full text-gray-400 bg-gray-100">No Image</div>
                                    <?php endif; ?>
                                    <div class="absolute inset-0 bg-black/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                    <?php if ($price) : ?>
                                        <span class="absolute bottom-0 right-0 bg-black/80 backdrop-blur text-white px-2 py-1 md:px-4 md:py-2 text-[10px] md:text-sm font-bold tracking-wider">¥<?php echo esc_html($price); ?></span>
                                    <?php endif; ?>
                                </div>
                                <h3 class="mt-4 md:mt-6 text-center font-bold text-xs md:text-lg text-text group-hover:text-accent transition-colors line-clamp-2"><?php the_title(); ?></h3>
                            </a>
                        </article>
                    <?php endwhile;
                    wp_reset_postdata();
                endif; ?>
            </div>
            <div class="text-center mt-16">
                <a href="<?php echo get_post_type_archive_link('discography'); ?>" class="inline-block px-12 py-4 border-2 border-text text-text font-bold tracking-widest hover:bg-text hover:text-white transition-all duration-300 uppercase text-sm">View All Items</a>
            </div>
        </div>
    </section>

    <!-- Members Section -->
    <section id="members" class="py-24 bg-bg border-t border-gray-200">
        <div class="container mx-auto px-6">
            <h2 class="text-4xl md:text-5xl text-center mb-16 font-extrabold tracking-widest relative w-fit mx-auto text-text">
                MEMBERS
                <span class="block w-16 h-1 bg-accent mx-auto mt-6 rounded-full"></span>
            </h2>
            <div class="grid grid-cols-3 gap-4 md:gap-12 text-center max-w-5xl mx-auto">
                <?php
                $member_query = new WP_Query(array(
                    'post_type' => 'member',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                ));
                if ($member_query->have_posts()) :
                    while ($member_query->have_posts()) : $member_query->the_post(); ?>
                        <div class="member-card group">
                            <div class="w-full aspect-square md:w-64 md:h-64 mx-auto mb-4 md:mb-8 rounded-full overflow-hidden border-2 md:border-4 border-white shadow-lg group-hover:shadow-2xl group-hover:border-accent transition-all duration-500 relative">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium', array('class' => 'w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 grayscale group-hover:grayscale-0')); ?>
                                <?php endif; ?>
                            </div>
                            <h3 class="text-sm md:text-2xl font-bold text-text tracking-wider group-hover:text-accent transition-colors"><?php the_title(); ?></h3>
                            <div class="w-4 md:w-8 h-1 bg-gray-300 mx-auto mt-2 md:mt-4 group-hover:bg-accent transition-colors duration-300"></div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
