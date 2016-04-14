$(function(){

// $('area').magnificPopup({
//   type:'inline',
//   midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
// });

//otra
$('area').magnificPopup({
  //delegate: 'a',
  removalDelay: 500, //delay removal by X to allow out-animation
  closeOnContentClick: false,
  callbacks: {
    beforeOpen: function() {
       this.st.mainClass = this.st.el.attr('data-effect');
    }
  },
  midClick: true // allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source.
});

});









$(document).ready(function(e) {
    $('img[usemap]').rwdImageMaps();
});