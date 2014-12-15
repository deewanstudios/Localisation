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
		<div class="container_24 ">
        	<div class="container_24 grid_19 fright ">

					<h2><?php echo $results[2]["page_Title"]; ?></h2>
					<p><?php echo $results[2]["content"]; ?></p>

            </div>

	</section>

	<div class="clear"></div>
