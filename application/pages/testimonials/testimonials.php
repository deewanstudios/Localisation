<section class="padsection">
		<div class="container_24 ">
       	  <div class="grid_5 sub-menu fleft">
            	<ul>
            		<?php foreach ($outcome As $serviceLink): ?>
                	<li><a href="?page=service&link=<?php echo $serviceLink["link"] ?>"><?php echo $serviceLink["linkName"] ?></a></li>

					<?php endforeach ?>
                </ul>
            </div>

        <section class="padsection">
        	<?php foreach ($servicesData AS $service): ?>
		<div class="container_24 ">
        	<div class="container_24 grid_19 fright ">

					<h2><?php echo $service["title"]; ?></h2>

					<p><?php echo $service["content"]; ?></p>

            </div>

           </div>
<?php endforeach; ?>

	</section>

	<div class="clear"></div>
