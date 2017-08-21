<?php
/*
 * Used to populate the sidebar when the first-choice widget area is empty,
 * but an empty sidebar is inappropriate.
 *
 * @package Largo
 */
the_widget('largo_about_widget', array(
	'title' => __('About This Site', 'largo'))
);

the_widget('largo_follow_widget', array(
	'title' => __('Follow Us', 'largo'))
);

if ( get_theme_mod( 'donate_link', '' ) ) {
	the_widget('largo_donate_widget', array(
		'title' => __('Support ' . get_bloginfo('name'), 'largo'),
		'cta_text' => __('We depend on your support. A generous gift in any amount helps us continue to bring you this service.', 'largo'),
		'button_text' => __('Donate Now', 'largo'),
		'button_url' => esc_url( get_theme_mod( 'donate_link', '' ) ),
		'widget_class' => 'default'
		)
	);
}

the_widget( 'largo_featured_widget', array(
		'term' => 'sidebar-featured',
		'title' => __('We Recommend', 'largo'),
		'widget_class' => 'default',
		'num_posts' => 5,
		'num_sentences' => 2
	)
);
