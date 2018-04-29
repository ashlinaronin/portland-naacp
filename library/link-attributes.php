<?php

add_filter('next_posts_link_attributes', 'decorated_link_classes_next');
add_filter('previous_posts_link_attributes', 'decorated_link_classes_previous');

function decorated_link_classes_previous() {
	return 'class="decorated-link decorated-link--single-right"';

}

function decorated_link_classes_next() {
	return 'class="decorated-link decorated-link--single-left"';
}