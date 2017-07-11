<?php include('admin_header.php'); ?>
<style>
  .modal-dialog {}
.thumbnail {margin-bottom:6px;}

.carousel-control.left,.carousel-control.right{
  background-image:none;
}
  </style>
  <div id="page-wrapper">
            <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <h1 class="page-header">Gallery</h1>
<div class="container-fluid">
    
    <div class="row">
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 1" href="#"><img class="thumbnail img-responsive" src="images/img/1.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 2" href="#"><img class="thumbnail img-responsive" src="images/img/2.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 3" href="#"><img class="thumbnail img-responsive" src="images/img/3.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 4" href="#"><img class="thumbnail img-responsive" src="images/img/4.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 5" href="#"><img class="thumbnail img-responsive" src="images/img/5.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 6" href="#"><img class="thumbnail img-responsive" src="images/img/6.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 7" href="#"><img class="thumbnail img-responsive" src="images/img/7.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 8" href="#"><img class="thumbnail img-responsive" src="images/img/8.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 9" href="#"><img class="thumbnail img-responsive" src="images/img/9.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 10" href="#"><img class="thumbnail img-responsive" src="images/img/10.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 11" href="#"><img class="thumbnail img-responsive" src="images/img/11.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 12" href="#"><img class="thumbnail img-responsive" src="images/img/12.jpg"></a></div>
	  <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 13" href="#"><img class="thumbnail img-responsive" src="images/img/13.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 14" href="#"><img class="thumbnail img-responsive" src="images/img/14.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 15" href="#"><img class="thumbnail img-responsive" src="images/img/15.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 16" href="#"><img class="thumbnail img-responsive" src="images/img/16.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 17" href="#"><img class="thumbnail img-responsive" src="images/img/17.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 18" href="#"><img class="thumbnail img-responsive" src="images/img/18.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 19" href="#"><img class="thumbnail img-responsive" src="images/img/19.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 20" href="#"><img class="thumbnail img-responsive" src="images/img/20.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 21" href="#"><img class="thumbnail img-responsive" src="images/img/21.jpg"></a></div>
	  <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 22" href="#"><img class="thumbnail img-responsive" src="images/img/22.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 23" href="#"><img class="thumbnail img-responsive" src="images/img/23.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 24" href="#"><img class="thumbnail img-responsive" src="images/img/24.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 25" href="#"><img class="thumbnail img-responsive" src="images/img/25.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 26" href="#"><img class="thumbnail img-responsive" src="images/img/26.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 27" href="#"><img class="thumbnail img-responsive" src="images/img/27.jpg"></a></div>
      <div class="col-lg-3 col-sm-4 col-xs-6"><a title="Image 28" href="#"><img class="thumbnail img-responsive" src="images/img/28.jpg"></a></div>
    </div>
    
</div>
<div class="modal" id="myModal" role="dialog">
  <div class="modal-dialog">
  <div class="modal-content">
	<div class="modal-header">
		<button class="close" type="button" data-dismiss="modal">×</button>
		<h3 class="modal-title"></h3>
	</div>
	<div class="modal-body">
		<div id="modalCarousel" class="carousel">
          <div class="carousel-inner"></div>
          <a class="carousel-control left" href="#modalCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="carousel-control right" href="#modalCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
	</div>
	<div class="modal-footer">
		<button class="btn btn-default" data-dismiss="modal">Close</button>
	</div>
   </div>
  </div>
</div>
</div>
<div class="col-lg-2">
</div>
</div>
</div>
</div>
</body>

<script>

/* copy loaded thumbnails into carousel */
$('.row .thumbnail').on('load', function() {
  
}).each(function(i) {
  if(this.complete) {
  	var item = $('<div class="item"></div>');
    var itemDiv = $(this).parents('div');
    var title = $(this).parent('a').attr("title");
    
    item.attr("title",title);
  	$(itemDiv.html()).appendTo(item);
  	item.appendTo('.carousel-inner'); 
    if (i==0){ // set first item active
     item.addClass('active');
    }
  }
});

/* activate the carousel */
$('#modalCarousel').carousel({interval:false});

/* change modal title when slide changes */
$('#modalCarousel').on('slid.bs.carousel', function () {
  $('.modal-title').html($(this).find('.active').attr("title"));
})

/* when clicking a thumbnail */
$('.row .thumbnail').click(function(){
    var idx = $(this).parents('div').index();
  	var id = parseInt(idx);
  	$('#myModal').modal('show'); // show the modal
    $('#modalCarousel').carousel(id); // slide carousel to selected
  	
});
</script>
</html>

  
  
  
            
         


