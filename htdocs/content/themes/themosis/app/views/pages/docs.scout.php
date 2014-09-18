@extends('layouts.main')

@section('main')

<div>
    <div class="wrapper clearfix">
        <div class="col-75 left">
            @loop
                <div class="docs">
                    <?php
                        if (class_exists('\Michelf\MarkdownExtra'))
                        {
                            $html = \Michelf\MarkdownExtra::defaultTransform(get_the_content());
                            $output = str_replace('<pre>', '<pre class="prettyprint">', $html);
                            echo($output);
                        }
                    ?>
                </div>
            @endloop
        </div>
        <!-- Sidebar -->
        <div class="col-25 left">
            <div class="sidebar">
                <h2>Documentation</h2>
            </div>
        </div>
        <!-- End sidebar -->
    </div>
</div>

@stop