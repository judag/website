(function($)
{
    /**
     * Handle docs sidebar
     */
    var sidebar = $('aside.sidebar'),
        wrapperHeight = $('body>div>.wrapper').height(),
        stickSidebar = function(elem, max){

            var y = elem.position().top,
                win = $(window),
                scrollTop = win.scrollTop(),
                top = scrollTop - y,
                elemHeight = elem.outerHeight() + 200; // Minimum offset

            if (y <= scrollTop)
            {
                if (top > (max - elemHeight) )
                {
                    top = max - elemHeight;
                }
            }
            else
            {
               top = 0;
            }

            elem.css('marginTop', top);

        };

    // Check if the element exists in the DOM.
    if (sidebar.length)
    {
        stickSidebar(sidebar, wrapperHeight);
    }

    $(window).on('resize scroll', function()
    {
        // Check if the element exists in the DOM.
        if (sidebar.length)
        {
            stickSidebar(sidebar, wrapperHeight);
        }
    });

})(jQuery);