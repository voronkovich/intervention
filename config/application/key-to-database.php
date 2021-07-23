<?php
/**
 * Return array of key to WordPress database options key
 * 
 * @see Application/OptionsApi
 */
namespace Sober\Intervention;

return [
    'general.site-title' => 'blogname',
    'general.tagline' => 'blogdescription',
    'general.wp-address' => 'siteurl',
    'general.site-address' => 'home',
    'general.admin-email' => 'admin_email',
    'general.membership' => 'users_can_register',
    'general.default-role' => 'default_role',
    'general.language' => 'language',
    'general.timezone' => 'timezone_string',
    'general.date-format' => 'date_format',
    'general.time-format' => 'time_format',
    'general.week-starts' => 'start_of_week',
    'writing.default-category' => 'default_category',
    'writing.default-post-format' => 'default_post_format',
    'writing.post-via-email.server' => 'mailserver_url',
    'writing.post-via-email.login' => 'mailserver_login',
    'writing.post-via-email.pass' => 'mailserver_pass',
    'writing.post-via-email.port' => 'mailserver_port',
    'writing.post-via-email.default-category' => 'default_email_category',
    'writing.update-services' => 'ping_sites',
    'reading.front-page' => 'show_on_front',
    'reading.front-page.page' => 'page_on_front',
    'reading.front-page.posts' => 'page_for_posts',
    'reading.posts-per-page' => 'posts_per_page',
    'reading.posts-per-rss' => 'posts_per_rss',
    'reading.rss-excerpt' => 'rss_use_excerpt',
    'reading.discourage-search' => 'blog_public',
    'discussion.post.ping-flag' => 'default_pingback_flag',
    'discussion.post.ping-status' => 'default_ping_status',
    'discussion.post.comments' => 'default_comment_status',
    'discussion.comments.name-email' => 'require_name_email',
    'discussion.comments.registration' => 'comment_registration',
    'discussion.comments.close' => 'close_comments_for_old_posts',
    'discussion.comments.close.days' => 'close_comments_days_old',
    'discussion.comments.cookies' => 'show_comments_cookies_opt_in',
    'discussion.comments.thread' => 'thread_comments',
    'discussion.comments.thread.depth' => 'thread_comments_depth',
    'discussion.comments.pages' => 'page_comments',
    'discussion.comments.pages.per-page' => 'comments_per_page',
    'discussion.comments.pages.default' => 'default_comments_page',
    'discussion.comments.order' => 'comment_order',
    'discussion.emails.comment' => 'comments_notify',
    'discussion.emails.moderation' => 'moderation_notify',
    'discussion.moderation.approve-manual' => 'comment_moderation',
    'discussion.moderation.approve-previous' => 'comment_previously_approved',
    'discussion.moderation.queue-links' => 'comment_max_links',
    'discussion.moderation.queue-keys' => 'moderation_keys',
    'discussion.moderation.disallowed-keys' => 'disallowed_keys',
    'discussion.avatars' => 'show_avatars',
    'discussion.avatars.rating' => 'avatar_rating',
    'discussion.avatars.default' => 'avatar_default',
    'media.sizes.thumbnail.width' => 'thumbnail_size_w',
    'media.sizes.thumbnail.height' => 'thumbnail_size_h',
    'media.sizes.thumbnail.crop' => 'thumbnail_crop',
    'media.sizes.medium.width' => 'medium_size_w',
    'media.sizes.medium.height' => 'medium_size_h',
    'media.sizes.large.width' => 'large_size_w',
    'media.sizes.large.height' => 'large_size_h',
    'media.uploads.organize' => 'uploads_use_yearmonth_folders',
    'permalinks.structure' => 'permalink_structure',
    'permalinks.category-base' => 'category_base',
    'permalinks.tag-base' => 'tag_base',
    'privacy.policy-page' => 'wp_page_for_privacy_policy',
];