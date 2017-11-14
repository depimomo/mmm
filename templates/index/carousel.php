<div class="container-fluid nopad">
	<div id="myCarousel" class="carousel slide" data-ride="carousel" style="z-index:0;margin:0%;padding:0%;">
		<ol class="carousel-indicators">
			<?php
				$i = 0;

				$list = mysqli_query($conn, "SELECT COUNT(*) FROM mi_banner WHERE banner_active = 'Y' AND banner_type = 'HOME'");

                while ($row = mysqli_fetch_assoc($list)) {
                    $count = $row['COUNT(*)'];
                    for ($i=0; $i < $count ; $i++) { 
                    	echo "<li data-target='#myCarousel' data-slide-to='".$i."'";
	                    if ($i == 0){
	                    	echo "class='active'";
	                    }
	                    echo "></li>";
                    }
                  }
			?>
		</ol>

		<div class="carousel-inner">
			<?php
				$i = 0;
				$list = mysqli_query($conn, "SELECT * FROM mi_banner WHERE banner_active = 'Y' AND banner_type = 'HOME'");

                while ($row = mysqli_fetch_assoc($list)) {
                    $url = $row['banner_url'];
                    echo "<div class='item";
                    if ($i == 0){
                    	echo " active";
                    }
                    echo "'><img src='".$url."'></div>";
                    $i++;
                  }
			?>
		</div>

		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>