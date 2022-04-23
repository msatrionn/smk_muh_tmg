<style>
.berita{
	margin-top: 650px;
}
.mt-50 {
    margin-top: 50px
}

.mb-50 {
    margin-bottom: 50px
}

.card-header:not([class*=bg-]):not([class*=alpha-]) {
    background-color: transparent;
    padding-top: 1.25rem
}
.media-title a{
	color: #000 ;
	font-weight: bolder;
	font-size: 25px;
}

.header-elements-inline {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap
}

a {
    text-decoration: none !important;
    color: red
}

.img-preview {
    max-height: 5rem
}
.shadows{
    box-shadow: 0 8px 17px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    transition: all .55s ease-in-out;
  
}
</style>
    
<div class="container d-flex justify-content-center mt-50 mb-50">
    <div class="card shadows">
        <div class="card-header header-elements-inline">
            <h6 class="card-title" style="text-align: center;width:100%">Review Kegiatan SMK Muhammadiyah 1 Temanggung</h6>
            <div class="header-elements">
                <div class="list-icons mb-2"> <a class="fa fa-close" data-action="collapse" data-abc="true"></a> </div>
            </div>
        </div>
        <div class="card-body pb-0">
            <div class="row">
                <div class="col-xl-12">
				<?php foreach ($data->result() as $row) :?>
				
                    <div class="media flex-column flex-sm-row mt-0 mb-3">
                        <div class="mr-sm-3 mb-2 mb-sm-0">
                            <div class="card-img-actions"> <a href="#" data-abc="true"> 
								<img src="<?php echo base_url('file/news/'.$row->foto) ?>" width="200px" style="object-fit: cover;" class="img-fluid img-preview rounded" alt=""> </a> </div>
                        </div>
						
                        <div class="media-body">
                            <h6 class="media-title"><a href="#" data-abc="true"><?php echo $row->judul ?></a></h6>
                            <ul class="list-inline list-inline-dotted text-muted mb-2">
                                <li class="list-inline-item"><i class="fa fa-book mr-2"></i><?php echo $row->created_at ?></a></li>
                            </ul>
							<?php echo $row->deskripsi ?></a>
                        </div>
                    </div>
					<?php endforeach ?>
                    <!-- <div class="media flex-column flex-sm-row mt-0 mb-3">
                        <div class="mr-sm-3 mb-2 mb-sm-0">
                            <div class="card-img-actions"> <a href="#" data-abc="true"> <img src="https://i.imgur.com/I2Gq4ML.jpg" class="img-fluid img-preview rounded" alt=""> </a> </div>
                        </div>
                        <div class="media-body">
                            <h6 class="media-title"><a href="#" data-abc="true">Hybris Developer</a></h6>
                            <ul class="list-inline list-inline-dotted text-muted mb-2">
                                <li class="list-inline-item"><i class="fa fa-video-camera mr-2"></i> Video tutorials</li>
                            </ul> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        </div>
                    </div> -->
                </div>
                <!-- <div class="col-xl-6">
                    <div class="media flex-column flex-sm-row mt-0 mb-3">
                        <div class="mr-sm-3 mb-2 mb-sm-0">
                            <div class="card-img-actions"> <a href="#" data-abc="true"> <img src="https://i.imgur.com/4Iu9qtM.jpg" class="img-fluid img-preview rounded" alt=""> </a> </div>
                        </div>
                        <div class="media-body">
                            <h6 class="media-title"><a href="#" data-abc="true">React Native 2nd Editions</a></h6>
                            <ul class="list-inline list-inline-dotted text-muted mb-2">
                                <li class="list-inline-item"><i class="fa fa-video-camera mr-2"></i> Video tutorials</li>
                            </ul> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        </div>
                    </div>
                    <div class="media flex-column flex-sm-row mt-0 mb-3">
                        <div class="mr-sm-3 mb-2 mb-sm-0">
                            <div class="card-img-actions"> <a href="#" data-abc="true"> <img src="https://i.imgur.com/8pHTmIb.jpg" class="img-fluid img-preview rounded" alt=""> </a> </div>
                        </div>
                        <div class="media-body">
                            <h6 class="media-title"><a href="#" data-abc="true">Python Architect 3rd Edition</a></h6>
                            <ul class="list-inline list-inline-dotted text-muted mb-2">
                                <li class="list-inline-item"><i class="fa fa-question-circle mr-2"></i> FAQ section</li>
                            </ul> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                        </div>
                    </div>
                </div> -->
            </div>
			<div class="row">
				<div class="col">
					<!--Tampilkan pagination-->
					<?php echo $pagination; ?>
				</div>
			</div>
        </div>
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
