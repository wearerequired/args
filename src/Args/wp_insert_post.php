<?php

declare(strict_types=1);

namespace Args;

/**
 * Arguments for the `wp_insert_post()` function in WordPress.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_insert_post/
 */
class wp_insert_post extends Base {
	/**
	 * The post ID. If equal to something other than 0, the post with that ID will be updated. Default 0.
	 */
	public int $ID;

	/**
	 * The ID of the user who added the post. Default is the current user ID.
	 */
	public int $post_author;

	/**
	 * The date of the post. Default is the current time.
	 */
	public string $post_date;

	/**
	 * The date of the post in the GMT timezone. Default is the value of `$post_date`.
	 */
	public string $post_date_gmt;

	/**
	 * The post content. Default empty.
	 */
	public string $post_content;

	/**
	 * The filtered post content. Default empty.
	 */
	public string $post_content_filtered;

	/**
	 * The post title. Default empty.
	 */
	public string $post_title;

	/**
	 * The post excerpt. Default empty.
	 */
	public string $post_excerpt;

	/**
	 * The post status. Default 'draft'.
	 */
	public string $post_status;

	/**
	 * The post type. Default 'post'.
	 */
	public string $post_type;

	/**
	 * Whether the post can accept comments. Accepts 'open' or 'closed'. Default is the value of 'default_comment_status' option.
	 */
	public string $comment_status;

	/**
	 * Whether the post can accept pings. Accepts 'open' or 'closed'. Default is the value of 'default_ping_status' option.
	 */
	public string $ping_status;

	/**
	 * The password to access the post. Default empty.
	 */
	public string $post_password;

	/**
	 * The post name. Default is the sanitized post title when creating a new post.
	 */
	public string $post_name;

	/**
	 * Space or carriage return-separated list of URLs to ping. Default empty.
	 */
	public string $to_ping;

	/**
	 * Space or carriage return-separated list of URLs that have been pinged. Default empty.
	 */
	public string $pinged;

	/**
	 * The date when the post was last modified. Default is the current time.
	 */
	public string $post_modified;

	/**
	 * The date when the post was last modified in the GMT timezone. Default is the current time.
	 */
	public string $post_modified_gmt;

	/**
	 * Set this for the post it belongs to, if any. Default 0.
	 */
	public int $post_parent;

	/**
	 * The order the post should be displayed in. Default 0.
	 */
	public int $menu_order;

	/**
	 * The mime type of the post. Default empty.
	 */
	public string $post_mime_type;

	/**
	 * Global Unique ID for referencing the post. Default empty.
	 */
	public string $guid;

	/**
	 * Array of category IDs. Defaults to value of the 'default_category' option.
	 *
	 * @var int[]
	 */
	public array $post_category;

	/**
	 * Array of tag names, slugs, or IDs. Default empty.
	 *
	 * @var mixed[]
	 */
	public array $tags_input;

	/**
	 * Array of taxonomy terms keyed by their taxonomy name. Default empty.
	 *
	 * @var mixed[]
	 */
	public array $tax_input;

	/**
	 * Array of post meta values keyed by their post meta key. Default empty.
	 *
	 * @var mixed[]
	 */
	public array $meta_input;
}
