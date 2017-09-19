/**for slider**/
$(document).ready(function(){
  $('#mobiSlider').slick({
  });
});

/**for the back button**/
function goBack() {
    window.history.back();
}


/**ajax function get all content related with searchbar keyword**/

function searchAll() {

  var searchvalue = $('.searchBar').val();
  console.log(searchvalue);
  var formData = new FormData();
  formData.append('searchvalue', searchvalue);
  
  $.ajax({
    url:"../phpcode/searchall.php", 
    type: "POST",
    data:  formData,
    dataType: "json",
    contentType: false,
    cache: false,
    processData: false,

      success:function(data) {
        console.log('success');
        $('.searchTest').empty();
		if(data.length<=0){
			$('.searchTest').append('عذرا، لم يتم العثور على نتائج. جرب توضيح البحث، أو استخدم التنقل أعلاه لتحديد موقع المحتوى الذي  تبحث عنه. '); 
		}
		else{
        for (var i = 0; i < data.length; i++){
           $('.searchTest').append(data[i]['block_html']); 
        }
		}
       // $('#searchTest').append(data[0]['block_html']); 
     }
  });
}

$(document).on('click','.lupa', function(){
  console.log('button pressed');//click works

  searchAll();

});

/**for prev and next buttons**/

(function($) {

  $.fn.quickPager = function(options) {

    var defaults = {
        pageSize: 10,
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

  $(".next").click(function(e) {
    e.preventDefault();
    $("li.currentPage").next("li[class^=simplePageNav]").find("a").click();
  });
  $(".prev").click(function(e) {
    e.preventDefault();
    $("li.currentPage").prev("li[class^=simplePageNav]").find("a").click();
  });

