@extends('layouts.main')

@section('main')

<div class="docs-wrapper">
    <div class="wrapper clearfix">
        <article class="docs col-75 left">
            @loop
                <div>
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
        </article>
        <!-- Sidebar -->
        <aside class="sidebar col-25 left">
            <div>
                <h2>Documentation</h2>
                <?php
                    if (function_exists('dynamic_sidebar'))
                    {
                        dynamic_sidebar('docs-sidebar');
                    }
                ?>
            </div>
        </aside>
        <!-- End sidebar -->
    </div>
</div>

@stop