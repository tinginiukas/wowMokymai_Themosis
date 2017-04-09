<?php
namespace Theme\Models;

use \WP_Query;
use \WP_Post;

class Service
{

	protected static $slug = 'services';

	public static function all() {
		$query = new WP_Query([
			'post_type' => self::$slug,
			'post_per_page' => -1,
			'post_status' => 'publish'
		]);

		return $query->get_posts();
	}

	public static function create(WP_Post $post) {

		$o = new \stdClass();
		$o->id = $post->ID;
		$o->title = $post->post_title;
		$o->content = apply_filters('the_content', $post->post_content);
		$o->thumbnail = get_post_thumbnail_id($post->ID);
		$o->url = get_permalink($post->ID);
		$o->icon = \Meta::get($post->ID, 'service-icon');

		return $o;
	}

	public static function getAll() {
		$posts = self::all();
		
		$records = [];
		
		foreach($posts as $post) {
			$records[] = self::create($post);
		}

		return $records;
	}

}