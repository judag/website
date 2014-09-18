@extends('layouts.main')

@section('main')

<!-- Hero -->
<div id="hero">
    <div class="wrapper">
        <h1>A framework for WordPress developers.</h1>
        <p>Build custom websites and applications with WordPress.</p>
        <a href="#" class="primary-button">Get started</a>
        <img id="hero-editor" src="{{ themosis_assets() }}/images/editor.png" alt="Themosis + WordPress Editor"/>
    </div>
</div>
<!-- End hero -->

<!-- Features -->
<div id="features">
    <div class="wrapper">
        <h1>Features you'll love...</h1>
        <div id="features__list" class="clearfix">
            <div class="col-25 left">
                <div class="features__inner">
                    <h3>Fine tuned routing</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat magna at dignissim suscipit.</p>
                </div>
            </div>
            <div class="col-25 left">
                <div class="features__inner">
                    <h3>Better templates</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat magna at dignissim suscipit.</p>
                </div>
            </div>
            <div class="col-25 left">
                <div class="features__inner">
                    <h3>Composer ready</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat magna at dignissim suscipit.</p>
                </div>
            </div>
            <div class="col-25 left">
                <div class="features__inner">
                    <h3>Stay true to WordPress</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat magna at dignissim suscipit.</p>
                </div>
            </div>
        </div>
        <h1>and more...</h1>
        <h3 id="features__others">Custom post type, Metabox, Custom fields, Controllers, Models, Pages and Settings, Options, Assets, Forms, Validation, Ajax...</h3>
        <a class="primary-button" href="#" title="Documentation">Documentation</a>
    </div>
</div>
<!-- End features -->

<!-- Social -->
<div id="social">
    <div class="wrapper">
        <div id="social__items" class="clearfix">
            <div id="newsletter" class="col-50 left">
                <div>
                    <h2>Stay tuned by signing up</h2>
                </div>
            </div>
            <div id="twitter" class="col-50 left">
                <div>
                    <h2>Follow us on Twitter</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End social -->

@stop