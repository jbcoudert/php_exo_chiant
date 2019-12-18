$(document).ready(function () {
    $(".variable").mousemove(function(e) {
        parallaxIt(e, ".slide", -30);
        // parallaxIt(e, ".img2", -30);
        parallaxIt(e, ".img1", 0);
    });
     
    $(".condition").mousemove(function(e) {
    parallaxIt2(e, ".slide", -30);
    // parallaxIt(e, ".img2", -30);
    parallaxIt2(e, ".img1", 0);
    });
      
      function parallaxIt(e, target, movement) {
        var $this = $(".variable");
        var relX = e.pageX - $this.offset().left;
        var relY = e.pageY - $this.offset().top;
      
        TweenMax.to(target, 1, {
          x: (relX - $this.width() / 2) / $this.width() * movement,
          y: (relY - $this.height() / 2) / $this.height() * movement
        });
      }

      function parallaxIt2(e, target, movement) {
        var $this = $(".condition");
        var relX = e.pageX - $this.offset().left;
        var relY = e.pageY - $this.offset().top;
      
        TweenMax.to(target, 1, {
          x: (relX - $this.width() / 2) / $this.width() * movement,
          y: (relY - $this.height() / 2) / $this.height() * movement
        });
      }
})