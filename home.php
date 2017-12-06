<?php
get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

    <div class="text-center">
        <div class="callout large">
            <div class="callout secondary">
                <h2>Latest news post</h2>
            </div>
        </div>

        <div class="grid-x grid-padding-x">
            <main class="small-6 cell">
                <div class="callout secondary">
                    News post
                </div>
                <div class="callout secondary">
                    News post
                </div>
                <div class="callout secondary">
                    News post
                </div>
                <div class="callout secondary">
                    News post
                </div>
                <div class="callout secondary">
                    Pagination Controls
                </div>
            </main>
            <aside class="small-6 cell">
                <div class="callout secondary">
                    <h3>Sidebar of news related functionality</h3>
                    <ul>
                        <li>Issues</li>
                        <li>Events</li>
                        <li>Committee</li>
                        <li>Resources</li>
                        <li>Tags</li>
                    </ul>
                </div>
                <div class="callout secondary">
                    Some sort of CTA to take them to another section of the site (get involved?)
                </div>

            </aside>
        </div>

    </div>

<?php get_template_part('template-parts/inspirational-closing-cta'); ?>

<?php get_footer();
