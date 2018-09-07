<script type="text/javascript">
$(document).ready(function () {

//$(".kriscelgwapa").autoHidingNavbar();

  
$('body').append('<div id="toTop" class="btn btn-info"><i class="fa fa-arrow-up"></i>Back to Top</div>');
$(window).scroll(function () {
			
			if ($(this).scrollTop() != 0) {
				$('#toTop').fadeIn();
				
			} else {
				$('#toTop').fadeOut();
			}
			
}); 
$('#toTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
});

var winHeight = $(window).height(), 
    docHeight = $(document).height(),
    progressBar = $('progress'),
    max, value;

$(document).on('scroll', function(){
	var winHeight = $(window).height(), 
    docHeight = $(document).height(),
    progressBar = $('progress'),
    max, value;	
  /* Set the max scrollable area */
  max = (docHeight - winHeight)+50;
  progressBar.attr('max', max);
     value = $(window).scrollTop();
     progressBar.attr('value', value);
  });
$(window).on('resize', function() {
location.reload(true);
  var winHeight = $(window).height(), 
    docHeight = $(document).height(),
    progressBar = $('progress'),
    max, value;
  max = (docHeight - winHeight)+50;
  progressBar.attr('max', max);
  value =  $(window).scrollTop();
  progressBar.attr('value', value);
});
});
</script>