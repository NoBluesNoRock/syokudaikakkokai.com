<footer class="bg-text text-white py-16 text-center border-t-4 border-accent">
    <div class="container mx-auto px-6">
        <nav class="mb-10">
            <?php wp_nav_menu(array(
                'theme_location' => 'footer',
                'container' => false,
                'menu_class' => 'flex justify-center flex-wrap gap-8 list-none p-0 m-0 [&_a]:text-gray-400 [&_a]:text-xs [&_a]:font-bold [&_a]:uppercase [&_a]:tracking-widest [&_a]:transition-colors [&_a:hover]:text-white'
            )); ?>
        </nav>
        <p class="text-gray-500 text-[10px] tracking-widest uppercase">&copy; <?php echo date('Y'); ?> 燭台（怪） All Rights Reserved.</p>
    </div>
    <?php wp_footer(); ?>
</footer>
</body>
</html>
