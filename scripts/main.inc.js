
var contactMessageMaxLength = 2500;

$(document).ready(function() {
	
	switch($('body').attr("id"))
	{
		case "index":
			page_index();
			break;
		case "blog":
			page_blog();
			break;
		default:
			//FOR NOW, DO NOTHING
			break;
	}//switch
});

function page_index()
{
		
	$('.group_cover').fancybox({
		helpers : {
			title: {
				type: 'over'
			}
		},
        padding : 0,
		beforeLoad: function() {
            var el, id = $(this.element).data('title-id');

            if (id) {
                el = $('#' + id);
            
                if (el.length) {
                    this.title = el.html();
                }
            }
        }
	});
	
	$('.group_illustrations').fancybox({
		helpers : {
			title: {
				type: 'over'
			}
		},
        padding : 0,
		beforeLoad: function() {
            var el, id = $(this.element).data('title-id');

            if (id) {
                el = $('#' + id);
            
                if (el.length) {
                    this.title = el.html();
                }
            }
        }
	});
	
	
	$('.group_sketches').fancybox({
		helpers : {
			title: {
				type: 'over'
			}
		},
        padding : 0,
		beforeLoad: function() {
            var el, id = $(this.element).data('title-id');

            if (id) {
                el = $('#' + id);
            
                if (el.length) {
                    this.title = el.html();
                }
            }
        }
	});
	
	$('.link_updates').fancybox();
	
	$('.navi a').smoothScroll();
	jQuery.easing.def = "easeInOutQuart";

	$('#more_sketches').click(function(e){
		if($('#more_sketches').text() == "more")
		{
			$('#sketches_entries').animate({height: "2000"}, 1500, 'easeInOutQuart');
			$('#more_sketches').text('less');
		}else{
			$('#sketches_entries').animate({height: "470"}, 1500, 'easeInOutQuart');
			$('#more_sketches').text('more');
		}//
	});
	
	$('#more_illustrations').click(function(e){
		if($('#more_illustrations').text() == "more")
		{
			$('#illustrations_entries').animate({height: "1930"}, 1500, 'easeInOutQuart');
			$('#more_illustrations').text('less');
		}else{
			$('#illustrations_entries').animate({height: "470"}, 1500, 'easeInOutQuart');
			$('#more_illustrations').text('more');
		}//
	});

	
	$('.slides_container').carouFredSel({
		responsive: true,
		auto: true,
		width: '100%',
		items: {
			width: 460,
			visible: {
				min: 3,
				max: 3
			}
		},
		scroll: {
			items:	1,
			duration: 1000,
			pauseOnHover: true,
			easing: "easeInOutQuint",
        	fx: "directscroll"
		},
    	auto: {
        	pauseDuration: 1000,
        	delay: 1000,
        	onPauseStart: function( percentage, duration ) {
            	$('.slides_container').trigger("currentVisible", function( items ) {
					$(items[1]).find('div').show();
				});
        	},
			onPauseEnd: function( percentage, duration ) {
           		$('.slides_container').trigger("currentVisible", function( items ) {
					$(items).find('div').hide();
				});
        	}
    	}
	});

	
	$(".bullet").click(function(e) {
		e.preventDefault();
		element_id = $(this).attr('id');
		slide_id = '#slide_'+element_id.substring(8,10);		
		$('.slides_container').trigger("slideTo", [slide_id, -1]);
		$(".slides_container li").find('div').hide();
	});
	
	$("#prev").click(function(e){ $('.slides_container').trigger("slideTo", [$(this), -1]); $(".slides_container li").find('div').hide(); });
	
	$("#next").click(function(e){ $('.slides_container').trigger("slideTo", [$(this), 1]);	$(".slides_container li").find('div').hide();});
	
	$(".slides_container li").hover(function(){ $(this).find('div').addClass('hover').show();  }, function(){ $(this).find('div').removeClass('hover').hide(); });
	
	
	$('#news_section a').removeClass().removeAttr('onclick').removeAttr('name').addClass('link_updates');
	
	$('.link_updates').each(function(param){
		$link = 'images/gallery/'+$(this).html().replace(' ', '_') + '.gif';
		if( $(this).attr('href') != 'mailto:james.doe@gmail.com')
			{
				$(this).attr('href', $link);
				$(this).attr('data-fancybox-group','gallery');
			}
		else{ $(this).removeClass('link_updates'); }
	});	
	
	init_contactme_elements();
}//page_index()


function page_blog()
{
	$(window).scroll(function(){
 
        var wintop = $(window).scrollTop(), docheight = $(document).height(), winheight = $(window).height();
        var  scrolltrigger = 0.95;

		if ((wintop/(docheight-winheight)) > 0.9) {
			$('#loader').show();
		}else{$('#loader').hide();}

        if  ((wintop/(docheight-winheight)) > scrolltrigger) {
			//var num_of_entries = 0;
			setTimeout(function(){
        		$('article.displaynone:first').removeClass("displaynone");	
				$('#loader').hide();
			}, 50);
        }//
		
		if($('article.displaynone').size() == 0){ $('#loader').remove(); }
		
    });
}//page_blog()


function init_contactme_elements()
{
	$('#contact_name').click(function(e){e.preventDefault(); if($('#contact_name').val()=='[type your name][required]'){$('#contact_name').val('');}});
	$('#contact_name').blur(function(e){e.preventDefault(); if($('#contact_name').val().trim() == ''){$('#contact_name').val('[type your name][required]');}});
	
	$('#contact_email').click(function(e){e.preventDefault(); if($('#contact_email').val()=='[type your email][required]'){$('#contact_email').val('');}});
	$('#contact_email').blur(function(e){e.preventDefault(); if($('#contact_email').val().trim() == ''){$('#contact_email').val('[type your email][required]');}});
	
	$('#contact_regarding').click(function(e){e.preventDefault(); if($('#contact_regarding').val()=='[regarding][not required]'){$('#contact_regarding').val('');}});
	$('#contact_regarding').blur(function(e){e.preventDefault(); if($('#contact_regarding').val().trim() == ''){$('#contact_regarding').val('[regarding][not required]');}});
	
	$('#contact_message').click(function(e){e.preventDefault(); if($('#contact_message').val()=='[type your message][required]'){$('#contact_message').val('');}});
	$('#contact_message').blur(function(e){e.preventDefault(); if($('#contact_message').val().trim() == ''){$('#contact_message').val('[type your message][required]');}});

	$('#contact_message').keyup(function(e){e.preventDefault(); countChars('#contact_message','#scounter',contactMessageMaxLength);});
	
	$('#contact_send').click(function(e){ e.preventDefault(); alert("This is a demo site. To contact me please send an email the address: mail@jamesdoe.com"); });
	
}//init_contactme_elements()

function countChars(fieldID,counterID,maxChars)
{
	var remainingChars = maxChars-$(fieldID).val().length;
	console.log($(fieldID).val().length+'  '+remainingChars);
	$(counterID).text(remainingChars);
	if(remainingChars<=99) {$(counterID).addClass("highlightred");}
	if(remainingChars>99) {$(counterID).removeClass("highlightred");}
}//countChars(elementID)