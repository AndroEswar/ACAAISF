$(document).ready(function () {

$(".navbar-fixed-top").autoHidingNavbar()
  
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
  max = (docHeight - winHeight)+100;
  progressBar.attr('max', max);
     value = $(window).scrollTop();
     progressBar.attr('value', value);
  });
$(window).on('resize', function() {
//location.reload(true);
  var winHeight = $(window).height(), 
    docHeight = $(document).height(),
    progressBar = $('progress'),
    max, value;
  max = (docHeight - winHeight)+100;
  progressBar.attr('max', max);
  value =  $(window).scrollTop();
  progressBar.attr('value', value);
});

$(function () {
    $('a[href="#search"]').on('click', function(event) {
        event.preventDefault();
        $('#search').addClass('open');
        $('#search > form > input[type="search"]').focus();
    });
    
    $('#search, #search button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27 || event.keyCode == 13) {
            $(this).removeClass('open');
        }
    });
});
$(function () {
    $( '#searchable-container' ).searchable({
        searchField: '#search_box',
        selector: '.row',
        childSelector: '.my_selector',
        show: function( elem ) {
            elem.slideDown(100);
        },
        hide: function( elem ) {
            elem.slideUp( 100 );
        }
    })
});



});
