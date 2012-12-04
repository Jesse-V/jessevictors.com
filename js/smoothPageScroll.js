/*
	Performs smooth page scrolling so that the browser follows any href="#anchor links smoothly, instead of jumping down the page to the right location.
	Adapted from http://css-tricks.com/examples/SmoothPageScroll/
*/
$(function()
{
	ANIMATION_SPEED = 1100; //time it takes to get to target

	function filterPath(string)
	{
		return string
		.replace(/^\//,'')
		.replace(/(index|default).[a-zA-Z]{3,4}$/,'')
		.replace(/\/$/,'');
	}

	var locationPath = filterPath(location.pathname);
	var scrollElem = scrollableElement('html', 'body');

	// Any links with hash tags in them (can't do ^= because of fully qualified URL potential)
	$('a[href*=#]').each(function()
	{
		// Ensure it's a same-page link
		var thisPath = filterPath(this.pathname) || locationPath;
		if (  locationPath == thisPath && (location.hostname == this.hostname || !this.hostname) && this.hash.replace(/#/,'') )
		{
				// Ensure target exists
				var $target = $(this.hash), target = this.hash;
				if (target)
				{
					// Find location of target
					var targetOffset = $target.offset().top;
					$(this).click(function(event)
					{
						event.preventDefault(); // Prevent jump-down

						// Animate to target
						$(scrollElem).animate({scrollTop: targetOffset}, ANIMATION_SPEED, function()
						{
							location.hash = target; // Set hash in URL after animation successful
						});
					});
				}
		}
	});

	// Use the first element that is "scrollable"  (cross-browser fix?)
	function scrollableElement(els)
	{
		for (var i = 0, argLength = arguments.length; i < argLength; i++)
		{
			var el = arguments[i],
			$scrollElement = $(el);
			if ($scrollElement.scrollTop() > 0)
			{
				return el;
			}
			else
			{
				$scrollElement.scrollTop(1);
				var isScrollable = $scrollElement.scrollTop() > 0;
				$scrollElement.scrollTop(0);
				if (isScrollable)
					return el;
			}
		}
		return [];
	}
});