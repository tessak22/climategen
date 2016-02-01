<?php

// get ancestors of pages
$arr_ancestors = ('page' == get_post_type()) ? get_ancestors($post->ID, 'page') : array();

if (PAGE_EDUCATION == $post->ID) {
    get_template_part('inc/education');
    get_template_part('inc/upcoming-events');
    get_template_part('inc/entry-terms');
}

if (PAGE_YEAMN == $post->ID) {
    get_template_part('inc/yeamn');
    get_template_part('inc/upcoming-events');
}

if (PAGE_MIDWESTYOUTHCLIMATEMOVEMENT == $post->ID) {
    get_template_part('inc/midwestyouthclimatemovement');
    get_template_part('inc/upcoming-events');
}

if (PAGE_MENTORSHIPPROGRAM == $post->ID) {
    get_template_part('inc/mentorshipprogram');
    get_template_part('inc/upcoming-events');
}

if (PAGE_POLICYCONNECTIONS == $post->ID) {
    get_template_part('inc/policyconnections');
    get_template_part('inc/upcoming-events');
}

if (PAGE_CLIMATE_MN_STORIES == $post->post_parent) {
    get_template_part('inc/entry-terms');
}

/**
 * test for page: Online Curriculum
 * current or parent
 */
if (PAGE_ONLINE_CURRICULUM == $post->ID || PAGE_ONLINE_CURRICULUM == $post->post_parent) {
    get_template_part('inc/entry-terms');
}

if (PAGE_CURRICULA_SEARCH_RESULTS == $post->ID) {
    get_template_part('inc/curricula-search-results');
}

if (PAGE_PROF_DEV_SEARCH_RESULTS == $post->ID) {
    get_template_part('inc/professional-development-search-results');
}

if (PAGE_CONTACT_US == $post->ID) {
    get_template_part('inc/contact-us');
}

if (PAGE_EVENTS == $post->ID) {
    get_template_part('inc/community-events-list');
}

if (PAGE_OUR_TEAM == $post->ID) {
    get_template_part('inc/our-team');
}

/**
 * test for page: Professional Development
 * current or ancestor
 */
if (PAGE_PROFESSIONAL_DEVELOPMENT == $post->ID || in_array(PAGE_PROFESSIONAL_DEVELOPMENT, $arr_ancestors)) {
    get_template_part('inc/professional-development-search');
}

/**
 * test for page: Climate Change and Energy Curricula
 * current or parent
 */
if (PAGE_CLIMATE_CURRICULA == $post->ID || PAGE_CLIMATE_CURRICULA == $post->post_parent) {
    get_template_part('inc/curricula-search');
    get_template_part('inc/entry-terms');
}
