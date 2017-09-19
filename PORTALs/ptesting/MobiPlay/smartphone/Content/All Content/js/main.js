$( document ).ready(function() {

function getMoreCategories() {
	$.ajax({
	url:"../Gameslist/getallgames.php", 
	dataType: "json",
	contentType: false,
	cache: false,
	processData: false,
	  success:function(data) {
		console.log();
		$('.allgames').empty();
		if(data.length<=0){
			console.log(data);
			$('.allgames').append('No More Games'); //design of this is left
		}
		else{
			var type_of_content;
			var i,j,contentimage,contentlink,contentname;
		for (i = 0; i < data.length; i++){
			
			type_of_content=data[i][0]['type_of_content'];

			$('.allgames').append('<div class="row"><div class="col-xs-12" style="position: relative;"><div class="col-xs-12 tag"><p>'+type_of_content+'</p><a href="../Gameslist/gameslist.php?game='+type_of_content+'"><button class="more">More<img style="padding-left: 1px; transform: rotate(-90deg); width: 15px" src="http://zmobs.com/ptesting/MobiPlay/smartphone/img/arrow_left.png"></button></a></div></div></div><div class="row"><div class="col-xs-12"><div class="game-section">');
			
			for(j=0;j<data[i].length;j++){
				contentlink=data[i][j]['link'];
				contentimage=data[i][j]['images'];
				contentname=data[i][j]['content'];
				$('.allgames').append('<a href="../Gameslist/playgames.php?src=http://zmobs.com/allgames/'+contentlink+'&categories='+type_of_content+'"><div class="col-xs-6 game-container"><img src="../../'+contentimage+'" style="width: 100%; height:300px"><p class="game-text">'+contentname+'</p></div></a>');
			}
			$('.allgames').append('</div></div></div>');
		}
		} 
	 }
	});
}
$(document).on('click','#morecategories', function(){
	getMoreCategories();
});


//for prev and next of more games
(function($) {

	$.fn.quickPager = function(options) {

    var defaults = {
        pageSize: 4,
        currentPage: 1,
        holder: null,
        pagerLocation: "after"
    };

    var options = $.extend(defaults, options);


    return this.each(function() {


        var selector = $(this); 
        var pageCounter = 1;
        var x = 0;

        if( selector.parent("div.simplePagerContainer").length == 0 ) {
            selector.wrap("<div class='simplePagerContainer'></div>");
        }

        selector.parents(".simplePagerContainer").find("ul.simplePagerNav").remove();

        selector.children().each(function(i){ 
            $(this)[0].className = $(this)[0].className.replace(/\bsimplePagerPage.*?\b/g, '');
            if(!$(this).is(":hidden")) {
                if(x < pageCounter*options.pageSize && x >= (pageCounter-1)*options.pageSize) {
                    $(this).addClass("simplePagerPage"+pageCounter);
                }
                else {
                    $(this).addClass("simplePagerPage"+(pageCounter+1));
                    pageCounter ++;
                }   
                x++;
            }
        });

        // show/hide the appropriate regions 
        selector.children().hide();
        selector.children(".simplePagerPage"+options.currentPage).show();

        if(pageCounter <= 1) {
            return;
        }

        //Build pager navigation
        var pageNav = "<ul class='simplePagerNav'>";

        for (i=1;i<=pageCounter;i++){
            if (i==0) {

            }
            if (i==options.currentPage) {
                pageNav += "<li class='currentPage simplePageNav"+i+"'><a rel='"+i+"' href='#'>"+i+"</a></li>"; 
            }
            else {
                pageNav += "<li class='simplePageNav"+i+"'><a rel='"+i+"' href='#'>"+i+"</a></li>";
            }
        }
        
        pageNav += "</ul>";

        if(!options.holder) {
            switch(options.pagerLocation)
            {
            case "before":
                selector.before(pageNav);
            break;
            case "both":
                selector.before(pageNav);
                selector.after(pageNav);
            break;
            default:
                selector.after(pageNav);
            }
        }
        else {
            $(options.holder).append(pageNav);
        }

        //pager navigation behaviour
        selector.parent().find(".simplePagerNav a").click(function() {

            //grab the REL attribute 
            var clickedLink = $(this).attr("rel");
            options.currentPage = clickedLink;

            if(options.holder) {
                $(this).parent("li").parent("ul").parent(options.holder).find("li.currentPage").removeClass("currentPage");
                $(this).parent("li").parent("ul").parent(options.holder).find("a[rel='"+clickedLink+"']").parent("li").addClass("currentPage");
            }
            else {
                //remove current current (!) page
                $(this).parent("li").parent("ul").parent(".simplePagerContainer").find("li.currentPage").removeClass("currentPage");
                //Add current page highlighting
                $(this).parent("li").parent("ul").parent(".simplePagerContainer").find("a[rel='"+clickedLink+"']").parent("li").addClass("currentPage");
            }

            //hide and show relevant links
            selector.children().hide();         
            selector.find(".simplePagerPage"+clickedLink).show();

            return false;
        });
    });
}
})(jQuery);

	$("ul.paging").quickPager();

	$("#next").click(function(e) {
		e.preventDefault();
		$("li.currentPage").next("li[class^=simplePageNav]").find("a").click();
	});
	$("#prev").click(function(e) {
		e.preventDefault();
		$("li.currentPage").prev("li[class^=simplePageNav]").find("a").click();
	});
   
var size_li,x;

//for search here
function searchAll() {

  var searchvalue = $('.searchBar').val();
  var formData = new FormData();
  formData.append('searchvalue', searchvalue);
  
  $.ajax({
    url:"../Gameslist/searchgames.php", 
    type: "POST",
    data:  formData,
    dataType: "json",
    contentType: false,
    cache: false,
    processData: false,
      success:function(data) {
        $('.searchTest').empty();
		if(data.length<=0){
			$('.searchTest').append('No games found!'); 
		}
		else{
		var linkcontent,imagecontent,contentname,type_of_content;
		 $('.searchTest').append('<div class="row"><div class="col-xs-12"><div class="game-section">');
		 var list = $(".searchTest").append('<ul id="mylist"></ul>').find('ul');
			for (var i = 0; i < data.length; i++){
				if(i<4){
				linkcontent=data[i]['link'];
				imagecontent=data[i]['images'];
				contentname=data[i]['content'];
				type_of_content=data[i]['type_of_content'];
				list.append('<li><a href="../Gameslist/playgames.php?src=http://zmobs.com/allgames/'+linkcontent+'&categories='+type_of_content+'"><div class="col-xs-6 game-container"><img src="../../'+imagecontent+'" style="width: 100%; height:300px"><p class="game-text">'+contentname+'</p></div></a></li>');
				}
			}
		   //$('.searchTest').append('</div></div><div class="col-xs-12 dream-container"><div class="col-xs-6 nopad"><button class="continue-dream prev" id="loadMore"><span >Load More</span></button></div><div class="col-xs-6 nopad"><button style="float: right;" class="continue-dream next" id="showLess"><span>Show Less</span></button></div></div>');
		   $('.searchTest').append('</div></div>');
		   
		   $("#mylist").css("list-style","none");
		   
		}
       // $('#searchTest').append(data[0]['block_html']); 
     },
	 complete: function (data) {
        size_li = $("#myList li").length;
		console.log(size_li);
		x=4;
		$('#myList li:lt('+x+')').show();
     }
    
  });
}

$(document).on('click','.lupa', function(){
  searchAll();
});


$(document).on('click','#loadMore', function(){
	//alert($("#myList li").length);
	 x= (x+5 <= size_li) ? x+5 : size_li;
     $('#myList li:lt('+x+')').show();
  
});
  $(document).on('click','#showLess', function(){
   x=(x-5<0) ? 3 : x-5;
   $('#myList li').not(':lt('+x+')').hide();
});
  
   


});
