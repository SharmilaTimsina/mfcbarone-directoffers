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

