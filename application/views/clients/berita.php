<style>
.berita{
	margin-top: 650px;
}
a:hover{
 text-decoration:none;    
}

.widget.single-news {
    margin-bottom: 20px;
    position: relative;
}

.widget.single-news .image img {
	object-fit: cover;
    display: block;
    width: 100%;
}

.widget.single-news .image .gradient {
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjxzdmcgeG1sbnM9Imh0d…IxIiBoZWlnaHQ9IjEiIGZpbGw9InVybCgjbGVzc2hhdC1nZW5lcmF0ZWQpIiAvPjwvc3ZnPg==);
    background-image: -webkit-linear-gradient(bottom, #000000 0%, rgba(0, 0, 0, 0.05) 100%);
    background-image: -moz-linear-gradient(bottom, #000000 0%, rgba(0, 0, 0, 0.05) 100%);
    background-image: -o-linear-gradient(bottom, #000000 0%, rgba(0, 0, 0, 0.05) 100%);
    background-image: linear-gradient(to top, #000000 0%, rgba(0, 0, 0, 0.05) 100%);
}

.widget.single-news .details {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 20px;
}

.widget.single-news .details .category {
    font-size: 11px;
    text-transform: uppercase;
    margin-bottom: 10px;
}

.widget.single-news .details .category a {
    color: #fff;
    zoom: 1;
    -webkit-opacity: 0.5;
    -moz-opacity: 0.5;
    opacity: 0.5;
    -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=50);
    filter: alpha(opacity=50);
}

.widget.single-news .details h3 {
    margin: 0;
    padding: 0;
    margin-bottom: 10px;
    font-size: 19px;
}

.widget.single-news .details h3 a {
    color: #fff;
    zoom: 1;
    -webkit-opacity: 0.8;
    -moz-opacity: 0.8;
    opacity: 0.8;
    -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=80);
    filter: alpha(opacity=80);
}

.widget.single-news .details:hover time {
    position: relative;
    display: block;
    color: #fff;
    font-size: 13px;
    margin-bottom: -20px;
    -webkit-transition: all 350ms cubic-bezier(0.175, 0.885, 0.320, 1.275);
    -moz-transition: all 350ms cubic-bezier(0.175, 0.885, 0.320, 1.275);
    -o-transition: all 350ms cubic-bezier(0.175, 0.885, 0.320, 1.275);
    transition: all 350ms cubic-bezier(0.175, 0.885, 0.320, 1.275);
    zoom: 1;
    -webkit-opacity: 0;
    -moz-opacity: 0;
    opacity: 0;
    -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=0);
    filter: alpha(opacity=0);
}
.text-desc {
   overflow: hidden;
   text-overflow: ellipsis;
   display: -webkit-box;
   -webkit-line-clamp: 3; /* number of lines to show */
   -webkit-box-orient: vertical;
}
.titl{
	text-align: center;
}
.line{
	width: 100%;
	margin-bottom: 20px;
}
.inner-line{
	text-align: center;
	margin: 0 auto;
	width: 70%;
	height: 2px;
	border-radius: 50px;
	background: #000;
}
</style>
    
<h2 class="titl">Review Berita SMK Muhammadiyah 1 Temanggung</h2>

<div class="line">
	<div class="inner-line"></div>
</div>
<div class="container bootstrap snippets bootdey">
    <div class="row">
	<?php foreach ($data->result() as $row) :?>
		<div class="col-sm-4">
		<div class="widget single-news">
			<div class="image">
			<img src="<?php echo base_url('file/news/'.$row->foto) ?>" height="200px" width="100%"  class="img-responsive">
			<span class="gradient"></span>
			</div>
			<div class="details">
			<div class="category"><a href=""><?php echo $row->judul ?></a></div>
			<h3><a href="<?php echo base_url('homepage/news_detail/'.$row->id) ?>" class="text-desc"><?php echo $row->deskripsi ?></a></h3>
			<time><?php echo $row->created_at ?></time>
			</div>
		</div>
		</div>
		<?php endforeach ?>
	</div>
</div>
<div class="row">
	<div class="col">
		<!--Tampilkan pagination-->
		<?php echo $pagination; ?>
	</div>
</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
<script>
		// Wrap every letter in a span
	var textWrapper = document.querySelector('.ml2');
	textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

	anime.timeline({loop: true})
	.add({
		targets: '.ml2 .letter',
		scale: [4,1],
		opacity: [0,1],
		translateZ: 0,
		easing: "easeOutExpo",
		duration: 950,
		delay: (el, i) => 70*i
	}).add({
		targets: '.ml2',
		opacity: 0,
		duration: 1000,
		easing: "easeOutExpo",
		delay: 1000
	});
	</script>
