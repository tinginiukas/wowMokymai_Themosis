<!--
            ==================================================
            Footer Section Start
            ================================================== -->
            <footer id="footer">
                <div class="container">
                    <div class="col-md-8">
                        <p class="copyright">Copyright: <span>2015</span> . Design and Developed by <a href="http://www.Themefisher.com">Themefisher</a></p>
                    </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <ul class="social">
                            @foreach(Option::get('theme-settings', 'social-networks') as $item)
                            <li>
                                <a href="{{ $item['url'] }}">
                                    <i class="{{ $item['icon'] }}"></i>
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </footer> <!-- /#footer -->
                
            <?php wp_footer(); ?>
        </body>
    </html>