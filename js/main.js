$(document).ready(function(){
  let arrayCurrent = [];
  $( ".c-btn__list" ).change(function() {
    let value = $(this).val();
    // console.log($(this).val());
    let content = $('#cars').find('option:selected').text();
    $(".c-btn.c-btn--small").text(content);
    if(value){
      if($.inArray(value, arrayCurrent) === -1){
        arrayCurrent = [];
        arrayCurrent.push(value);
        // console.log(arrayCurrent);
        getListCurrent(arrayCurrent);
      }  
      }else{
        if($.inArray(value, arrayCurrent) !== -1){
          arrayCurrent = arrayCurrent.filter(item => item != value);
          // console.log(arrayCurrent);
          getListCurrent(arrayCurrent);
          }
      }
        
  });

  function getListCurrent(arrayCurrent){
    let link = "";
    $( ".loader-container" ).addClass( "active" );
    
     if(arrayCurrent.toString() == 'all'){
      link = "http://mission27.demo/wp-json/wp/v2/posts";
    }
    else if(arrayCurrent.length > 0){
      link = "http://mission27.demo/wp-json/wp/v2/posts?categories=" + arrayCurrent.toString();
      // link = "http://103.77.160.168/~aglstaff/huynhphuchau/task14/wp-json/wp/v2/services?services-san-pham=" + arraykey.toString();
    }
    else{
      link = "http://mission27.demo/wp-json/wp/v2/posts";
      // link = "http://103.77.160.168/~aglstaff/huynhphuchau/task14/wp-json/wp/v2/services";
    }
    $.ajax({
      url: link,
      success: function(result){
        $( ".loader-container" ).removeClass( "active" );
        $('#c-listcurrent').empty();
        for(let i = 0; i < result.length - 5; i++){
          var text =""
          let item = result[i];
          let dateTime = item.date;
          let b = dateTime.substring(0, 10);
          let c = b.replace('-', '/');
          let date = c.replace('-', '/');
          text += `<li>
          <span class="datepost">${date}</span>`
          for(let a = 0; a < item.categories.length; a++){
            text += `<a class="c-label" href="${item.categories[a].category_link}">${item.categories[a].category_name}</a>`
          }
          text += `<a href="${item.link}"> ${item.title.rendered} </a>
          </li>`
          $('#c-listcurrent').append(
            text
          );
        }
        // $("#c-listcurrent").empty();
        // $("#c-listcurrent").append(result.length);
      }
    });
  }
  getListCurrent(arrayCurrent);

});
// http://mission27.demo/wp-json/wp/v2/posts?categories=2