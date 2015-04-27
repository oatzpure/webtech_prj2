<?php
/**
 * Created by PhpStorm.
 * User: OPTIMUS
 * Date: 26/4/2558
 * Time: 14:41
 */?>
<div class="container" >

	<!-- admin in cake-->

    <!-- admin search in cake-->
    <div class="container text-right">
    	<div class="pull-left" style="padding-left:13em">
    	  <h1 class="deepshadow">Quiz Game</h1></div>
    		<table class="pull-right">
            	<tr>
        			<td> <!--   rank in cake-->
        			<button class="btn btn-default" style="margin-top:3.5em;margin-right:1em"><img src="https://cdn2.iconfinder.com/data/icons/fatcow/16x16/crown_gold.png" /> Ranking</button></td>
       				<td><!--   search in cake-->
    				<form class="navbar-form " role="search" style="margin-top:4em;margin-right:1em">
       					<div class="form-group">
          					<input type="text" class="form-control" placeholder="Search" required="required">
        				</div>
        				<button type="submit" class="btn btn-default"><img src="https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-20.png" />
                 		</button>
      				</form></td>
        		</tr>
        	</table>
    </div><!-- end admin search in cake-->


    <div class="row" style="margin-top:2em">

         <!-- admin icon in cake-->
    	<div class="col-sm-2" style="margin-top:1em">
        	<div class="container-fluid text-center">

        		<button type="button" class="circular_profile btn btn-danger" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><span class="badge " style="margin-top:7em;margin-left:5em">+</span></button>
                <div style="margin-top:1em"><span class="label label-info"><?php echo $User['User']['firstname'] ?> <?php echo $User['User']['lastname'] ?></span></div>
                <div class="collapse " id="collapseExample">
                   <?php echo $this->Html->link("", array('controller' => 'decks','action'=> 'add'), array( 'class' => 'circular_add btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Add Quiz'))?>
                	<?php echo $this->Html->link("", array('controller' => 'decks','action'=> 'add'), array( 'class' => 'circular_add_cate btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Add Category'))?>
                    <?php echo $this->Html->link("", array('controller' => 'decks','action'=> 'add'), array( 'class' => 'circular_manage_quiz btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Manage Quiz'))?>
            		<?php echo $this->Html->link("", array('controller' => 'decks','action'=> 'add'), array( 'class' => 'circular_manage_account btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Manage Account'))?>
            		<?php echo $this->Html->link("", array('controller' => 'users','action'=> 'logout'), array( 'class' => 'circular_logout btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Log Out'))?>
                </div>
            </div>
        </div><!--end  admin icon in cake-->
        <!-- admin info field in cake-->
<div class="col-sm-10" >
    <div class="container-fluid showcontent_nofixes">
    	<h2>Manage Account</h2>
    	<form action="" method="" id="deleteForm">
                <div class="decorform2">
                    <h4 class="decorform3">User Account</h4> 
                    <div id="box">
                        <table class="table-striped table-bordered table-striped" style="width:100%" >
                        	<thead>
                            	<tr>
                					<col class='col-sm-1' />
                					<col class='col-sm-2' />
                					<col class='col-sm-3' />
                					<col class='col-sm-3' />
                					<col class='col-sm-2' />                					
                					<col class='col-sm-1' />
                					<th class='text-center'>User ID</th>
                					<th class='text-center'>Username</th>
                					<th class='text-center'>Firstname</th>
                					<th class='text-center'>Lastname</th>
                					<th class='text-center'>Date Created</th>                					
                					<th class='text-center'></th>
                				</tr>
                             </thead> 
                             <!--loop pull here-->
                            <?php foreach($tests as $test) { ?>
    <tr>
        <td><?php echo $test->id;?></td>
        <td><?php echo $test->username;?></td>
        <td><?php echo $test->firstname;?></td>
        <td><?php echo $test->lastname;?></td>
        <td><?php echo $test->created;?></td>

    </tr>
                        </table>
                       
                    </div>
                </div>
        </form>
        
    </div>
        </div><!--end admin info field in cake-->
    </div>

</div>