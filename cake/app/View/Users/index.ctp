<!-- user in cake-->

<!-- user search in cake-->
<div class="container text-right">
    <div class="pull-left" style="padding-left:13em">
        <h1 class="deepshadow">Quiz Game</h1></div>
    <table class="pull-right">
        <tr>
            <td> <!--   rank in cake-->
                <button class="btn btn-default" style="margin-top:3.5em;margin-right:1em"><img src="https://cdn2.iconfinder.com/data/icons/fatcow/16x16/crown_gold.png" />Ranking</button></td>
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
</div><!-- end user search in cake-->


<div class="row" style="margin-top:2em">

    <!-- user icon in cake-->
    <div class="col-sm-2" style="margin-top:1em">
        <div class="container-fluid">

            <button type="button" class="circular_profile_user btn btn-danger" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><span class="badge " style="margin-top:7em;margin-left:5em">+</span></button>
            <div style="margin-top:1em"><span class="label label-info"><?php echo $User['User']['firstname'] ?> <?php echo $User['User']['lastname'] ?></span></div>
            <div class="collapse " id="collapseExample">
                <?php echo $this->Html->link("", array('controller' => 'users','action'=> 'profile'), array( 'class' => 'circular_profile_info_user btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Profile Info'))?>
                <?php echo $this->Html->link("", array('controller' => 'users','action'=> 'badge'), array( 'class' => 'circular_badges_user btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Badges'))?>
                <?php echo $this->Html->link("", array('controller' => 'decks','action'=> 'add'), array( 'class' => 'circular_add btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Add Quiz'))?>
                <?php echo $this->Html->link("", array('controller' => 'users','action'=> 'logout'), array( 'class' => 'circular_logout btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Log Out'))?>
            </div>
        </div>
    </div><!--end  user icon in cake-->
    <!-- user info field in cake-->
    <div class="col-sm-10" >
        <div class="container-fluid showcontent">
        </div>
    </div><!--end user info field in cake-->
</div>

</div>
