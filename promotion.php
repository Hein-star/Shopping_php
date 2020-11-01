<?php 
	require('frontendheader.php');
?>


<!-- Subcategory Title -->
	<div class="jumbotron jumbotron-fluid bg-success">
  		<div class="container">
    		<h1 class="text-center text-white"> Promotion Item </h1>
  		</div>
	</div>
	
	<!-- Content -->
	<div class="container mt-5">


		<div class="row">
            <div class="col">
                <div class="bbb_viewed_title_container">
                    <h3 class="bbb_viewed_title text-success"> Discount Items </h3>
                    <div class="bbb_viewed_nav_container">
                        <div class="bbb_viewed_nav bbb_viewed_prev"><i class="icofont-rounded-left text-success"></i></div>
                        <div class="bbb_viewed_nav bbb_viewed_next"><i class="icofont-rounded-right text-success"></i></div>
                    </div>
                </div>
                <div class="bbb_viewed_slider_container">
                    <div class="owl-carousel owl-theme bbb_viewed_slider">
						<?php 
							$sql = "SELECT * FROM items WHERE discount != '' ORDER BY rand() limit 8";
						    $stmt = $conn->prepare($sql);
						    $stmt->execute();

						    $items = $stmt->fetchAll();

						    foreach($items as $item):
						    $itid = $item['id'];
					        $itname = $item['name'];
					        $itphoto = $item['photo'];
					        $itcodeno = $item['codeno'];
					        $itprice = $item['price'];
					        $itdiscount = $item['discount'];
						?>
					    <div class="owl-item">
					        <div class="bbb_viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
					        	<a href="detail.php?id=<?= $itid ?>" class="text-decoration-none text-secondary">

						            <div class="pad15">
						        		<img src="<?= $itphoto ?>" class="img-fluid">
						            	<p > 
						            		<?= substr($itname, 0, 10) . '...'; ?>  
						            	</p>
						            	<p class="item-price">
						            		<?php if($itdiscount):?>

								        	<strike> <?= $itprice ?> Ks </strike> 
								        	<span class="d-block text-success"><?= $itdiscount ?> Ks</span>

								        	<?php else: ?>
								        	<span class="d-block text-success"><?= $itprice ?> Ks</span>

											<?php endif ?>
						            	</p>

						                <div class="star-rating">
											<ul class="list-inline">
												<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
												<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
												<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
												<li class="list-inline-item"><i class='bx bxs-star' ></i></li>
												<li class="list-inline-item"><i class='bx bxs-star-half' ></i></li>
											</ul>
										</div>

										<a href="cart.php" class="addtocartBtn text-decoration-none btn-outline-success" 
										data-id="<?= $itid ?>"
										data-name="<?= $itname; ?>" data-photo="<?= $itphoto; ?>" data-codeno="<?= $itcodeno; ?>" data-price="<?= $itprice; ?>" data-discount="<?= $itdiscount; ?>" >Add to Cart</a>
						        	</div>
						        </a>
					        </div>
					    </div>

					<?php endforeach ?>

					</div>
                </div>
            </div>
        </div>

	</div>


<?php 
	require('frontendfooter.php');
?>