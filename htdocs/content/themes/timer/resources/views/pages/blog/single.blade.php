@extends('layout.app')

@section('content')

<!--
        ==================================================
        Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>{{ $post->post_title }}</h2>
                        </div>
                    </div>
                </div>
            </div>
            </section><!--/#Page header-->
            <section class="single-post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="post-img">
                                <img class="img-responsive" alt="" src="{{ wp_get_attachment_url( get_post_thumbnail_id($post->ID) ) }}">
                            </div>
                            <div class="post-content">
                                {!! apply_filters('the_content', $post->post_content) !!}
                            </div>
                            <ul class="social-share">
                                <h4>Share this article</h4>
                                <li>
                                    <a href="#" class="Facebook">
                                        <i class="ion-social-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="Twitter">
                                        <i class="ion-social-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="Linkedin">
                                        <i class="ion-social-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="Google Plus">
                                        <i class="ion-social-googleplus"></i>
                                    </a>
                                </li>
                                
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </section>

@endsection