// some scripts

//mobilenavbar
//Bootstrap navbar offcanvas on mobile screen https://bootstrap-menu.com/detail-offcanvas-mobile.html

  $("[data-trigger]").on("click", function(e){
      e.preventDefault();
      e.stopPropagation();
      var offcanvas_id =  $(this).attr('data-trigger');
      $(offcanvas_id).toggleClass("show");
      $('body').toggleClass("offcanvas-active");
      $(".screen-overlay").toggleClass("show");
  }); 

  $(".btn-close, .screen-overlay").click(function(e){
      $(".screen-overlay").removeClass("show");
      $(".mobile-offcanvas").removeClass("show");
      $("body").removeClass("offcanvas-active");
  }); 

// jquery ready start
$(document).ready(function() {
	// jQuery code

//var contact_us = 
//'<a href="contactus.php" class="btn btn-info rounded px-4" style="font-size:13px; z-index:500; position: fixed; bottom:20px; right:10px;" target=”_blank”>Contact Us</a>';

//$('body').prepend(contact_us);
    
	//////////////////////// Like Button.
    $('.like-btn').on('click', function() {
        $(this).toggleClass('is-active');
      });
    
}); 


// ba-Slider (After-Before)
// Call & init
$(document).ready(function(){
  $('.ba-slider').each(function(){
    var cur = $(this);
    // Adjust the slider
    var width = cur.width()+'px';
    cur.find('.resize img').css('width', width);
    // Bind dragging events
    drags(cur.find('.handle'), cur.find('.resize'), cur);
  });
});

// Update sliders on resize. 
// Because we all do this: i.imgur.com/YkbaV.gif
$(window).resize(function(){
  $('.ba-slider').each(function(){
    var cur = $(this);
    var width = cur.width()+'px';
    cur.find('.resize img').css('width', width);
  });
});

function drags(dragElement, resizeElement, container) {
	
  // Initialize the dragging event on mousedown.
  dragElement.on('mousedown touchstart', function(e) {
    
    dragElement.addClass('draggable');
    resizeElement.addClass('resizable');
    
    // Check if it's a mouse or touch event and pass along the correct value
    var startX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;
    
    // Get the initial position
    var dragWidth = dragElement.outerWidth(),
        posX = dragElement.offset().left + dragWidth - startX,
        containerOffset = container.offset().left,
        containerWidth = container.outerWidth();
 
    // Set limits
    minLeft = containerOffset + 10;
    maxLeft = containerOffset + containerWidth - dragWidth - 10;
    
    // Calculate the dragging distance on mousemove.
    dragElement.parents().on("mousemove touchmove", function(e) {
    	
      // Check if it's a mouse or touch event and pass along the correct value
      var moveX = (e.pageX) ? e.pageX : e.originalEvent.touches[0].pageX;
      
      leftValue = moveX + posX - dragWidth;
      
      // Prevent going off limits
      if ( leftValue < minLeft) {
        leftValue = minLeft;
      } else if (leftValue > maxLeft) {
        leftValue = maxLeft;
      }
      
      // Translate the handle's left value to masked divs width.
      widthValue = (leftValue + dragWidth/2 - containerOffset)*100/containerWidth+'%';
			
      // Set the new values for the slider and the handle. 
      // Bind mouseup events to stop dragging.
      $('.draggable').css('left', widthValue).on('mouseup touchend touchcancel', function () {
        $(this).removeClass('draggable');
        resizeElement.removeClass('resizable');
      });
      $('.resizable').css('width', widthValue);
    }).on('mouseup touchend touchcancel', function(){
      dragElement.removeClass('draggable');
      resizeElement.removeClass('resizable');
    });
    e.preventDefault();
  }).on('mouseup touchend touchcancel', function(e){
    dragElement.removeClass('draggable');
    resizeElement.removeClass('resizable');
  });
}

// End ba-Slider (After-Before)
// jquery end

