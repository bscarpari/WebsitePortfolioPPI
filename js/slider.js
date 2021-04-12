// Grabbing
(function () {
    var x,
        y,
        top,
        left,
        down,
        moved;

    $("#items").mousedown(function (e) {
        e.preventDefault();
        moved = false;
        down = true;
        x = e.pageX;
        y = e.pageY;
        left = $(this).scrollLeft();
        $(this).addClass("grabbing");
    });

    $("#items .item").mousedown(function (e) {
        e.preventDefault();
    });

    $("#items").mousemove(function (e) {
        if (down) {
            moved = true;
            var newX = e.pageX;
            var newY = e.pageY;
            $("#items").scrollLeft(left - newX + x);
        }
    });

    $("#items").mouseup(function (e) {
        down = false;
        $(this).removeClass("grabbing");
    });

    $(".item").click(function (e) {
        if (moved) {
            e.preventDefault();
        }
    });
})();

// Scroll
const scrollWheel = event => {
    if (event.deltaY < 0) {
      event.target.scrollBy(600, 0)
    } else {
      event.target.scrollBy(-600, 0)
    }
  }
  
  let count = 0
  setInterval(function () {
    count += 100;
    if (count > 4000){
      count = 0;
    }
    document.querySelector("#items").scrollTo(count, 0);
  }, 1500)
  