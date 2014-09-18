@extends('layouts.main')

@section('main')

    @loop

        <!-- Hero -->
        <div id="hero">
            <div class="wrapper">
                <h1>{{{ Meta::get(Loop::id(), 'hero-title') }}}</h1>
                <p>{{{ Meta::get(Loop::id(), 'hero-baseline') }}}</p>
                <a href="{{ get_permalink(Meta::get(Loop::id(), 'hero-button-url')) }}" class="primary-button">{{{ Meta::get(Loop::id(), 'hero-button-text') }}}</a>
                <?php
                    $image = wp_get_attachment_image_src(Meta::get(Loop::id(), 'hero-image'), 'full');
                ?>
                <img id="hero-editor" src="{{ $image[0] }}" alt="Themosis + WordPress Editor"/>
            </div>
        </div>
        <!-- End hero -->

        <!-- Features -->
        <div id="features">
            <div class="wrapper">
                <h1>{{{ Meta::get(Loop::id(), 'features-title') }}}</h1>
                <?php
                    $features = Meta::get(Loop::id(), 'features');
                ?>
                @if(!empty($features))
                    <div id="features__list" class="clearfix">
                        @foreach($features as $feature)
                            <div class="col-25 left">
                            <div class="features__inner">
                                <h3>{{{ $feature['title'] }}}</h3>
                                {{ apply_filters('the_content', $feature['text']) }}
                            </div>
                        </div>
                        @endforeach
                    </div>
                @endif
                <h1>{{{ Meta::get(Loop::id(), 'features-more-title') }}}</h1>
                <h3 id="features__others">{{{ Meta::get(Loop::id(), 'features-more') }}}</h3>
                <a class="primary-button" href="{{ get_permalink(Meta::get(Loop::id(), 'features-button-link')) }}" title="Documentation">{{{ Meta::get(Loop::id(), 'features-button-text') }}}</a>
            </div>
        </div>
        <!-- End features -->

        <!-- Social -->
        <div id="social">
            <div class="wrapper">
                <div id="social__items" class="clearfix">
                    <div id="newsletter" class="col-50 left">
                        <div>
                            <h2>{{{ Meta::get(Loop::id(), 'social-newsletter') }}}</h2>
                            <form action="http://email.jlambe.be/t/j/s/ulkuv/" method="post">
                                <input id="fieldEmail" name="cm-ulkuv-ulkuv" type="email" placeholder="Enter your e-mail..." required />
                                <button type="submit" class="secondary-button"><?php _e('Sign up'); ?></button>
                            </form>
                        </div>
                    </div>
                    <div id="twitter" class="col-50 left">
                        <div>
                            <h2>{{{ Meta::get(Loop::id(), 'social-twitter') }}}</h2>
                            <a href="https://twitter.com/Themosis" class="twitter-follow-button" data-show-count="false" data-size="large" data-dnt="true">Follow @Themosis</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End social -->

    @endloop

@stop