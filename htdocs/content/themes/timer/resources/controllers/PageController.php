<?php

namespace Theme\Controllers;

use \WP_Post;
use Themosis\Route\BaseController;

class PageController extends BaseController
{
    public function homepage()
    {
        return view('pages.homepage');
    }

    // BLOG
    public function singleBlog(WP_Post $post) {

    	return view('pages.blog.single', compact('post'));
    }

    public function archiveBlog() {

    	$posts = '';

    	return view('pages.blog.archive', compact('posts'));
    }

    // SERVICES
    public function singleService(WP_Post $post) {

    	$service = \Theme\Models\Service::create($post);

    	return view('pages.services.single', compact('service'));
    }

    public function archiveService() {

    	$services = \Theme\Models\Service::getAll();

    	return view('pages.services.archive', compact('services'));
    }

    // Any page
    public function page(WP_Post $post) {
        return view('pages.page', compact('post'));
    }

    // Contact template
    public function contact(WP_Post $post) {
        return view('pages.contact', compact('post'));
    }

}
