<div class="row"><!--pagination row-->

<div class="col-md-12 text-center">
	<ul class="pagination pagination-lg change-pagination">

	 <?php
	 include('connect.php');


     $pagination_sql=mysqli_query($con,"select * from bid_product where status='approved' ");
     $count=mysqli_num_rows($pagination_sql);
     $total_pages=ceil($count/$per_page);
     for($i=1;$i<=$total_pages;$i++){
     	echo '<li><a href="index.php?page='.$i.'">'.$i.'</a></li>';
     	
     }
	 ?>
		
	</ul>
</div>

</div>