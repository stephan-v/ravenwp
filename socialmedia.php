<div class="twitter">
	<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>

	<a href="http://twitter.com/share" 
	class="twitter-share-button"
    data-url="<?php the_permalink(); ?>"
    data-via="ravenwebdesigns"
    data-text="<?php the_title(); ?>"
    data-related="Stephan:Eigenaar Raven Webdesign"
    data-count="none">Tweet</a>
</div>

<div class="facebook">
	<div id="fb-root"></div>
	<script>
	(function(d, s, id) {
		 var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/nl_NL/all.js#xfbml=1";
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>

	<div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-type="button"></div>
</div>

<div class="google">
	<script type="text/javascript">
		(function() {
			var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
			po.src = 'https://apis.google.com/js/plusone.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		})();
	</script>

	<div class="g-plus" data-action="share"></div>
</div>