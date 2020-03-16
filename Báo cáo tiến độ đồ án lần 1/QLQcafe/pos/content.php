 <?php
 	
 	require_once('menu.php');
 ?>
 <div class="content">
    	<div class="left">
        	<div class="area">
            	<?php
					$area="select * from areas";
					$run_area=mysql_query($area);
					while($row=mysql_fetch_array($run_area)){?>
                    <button class="branchname"><?php echo $row['branchname'] ?></button>
                <?php
					}
				?>
            </div>
       
        <div class="table">
        	<ul>
            	<?php
					$table="select * from table";
					$run_table=mysql_query($table);
					

					while($row_table=mysql_fetch_array($run_table)){
				?>
                	<li <?php if($row_table['status']==1){echo 'class="tb-active"';}  ?> id="<?php echo $row_table['id_table']; ?>" onClick="cms-load-pos(<?php echo $row_table['id_table']; ?>)"><?php  echo $row_table['tableName']; ?></li>
                <?php
					}
				?>
            </ul>
        </div>
        
</div>
        <div class="right">
        
        </div>
</div>