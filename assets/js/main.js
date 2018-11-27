(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v3.1&appId=245413946192792&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));



function initMap() {
    // The location of Uluru    
    var uluru = {lat: 10.729331, lng: 106.699784};
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 15, center: uluru});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: uluru, map: map});
  }

  $(window).scroll(function(e){
    var scrollTop = $(this).scrollTop();
    if(scrollTop > 1){ $('#navbar').css('padding','0 10px')     }
    // หุบ
    else{   $('#navbar').css('padding',' 10px')    }
    // ขยาย
})


$('.to-top').click(function(){
    $('html, body').animate({scrollTop:'0px'}, 800);
})
  


$('.jarallax').jarallax({});