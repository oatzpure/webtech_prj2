<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<!-- CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
</head>

<body>
<!-- layout in cake-->
<div class="container" >

<!-- admin in cake--> 

<!-- admin search in cake-->
<div class="container text-right">
  <div class="row ">
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
      <h1 class="deepshadow">Quiz Game</h1>
    </div>
    <div class="col-sm-3" style="margin-top:4.15em">
      <button class="btn btn-default" > <img src="https://cdn2.iconfinder.com/data/icons/fatcow/16x16/crown_gold.png" />Ranking </button>
      <!--   search in cake--> 
    </div>
    <div class="col-sm-3" style="margin-top:3.5em">
      <form class="navbar-form " role="search" >
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" required="required">
        </div>
        <button type="submit" class="btn btn-default"> <img src="https://cdn1.iconfinder.com/data/icons/hawcons/32/698627-icon-111-search-20.png" /> </button>
      </form>
    </div>
  </div>
</div>
<!-- end admin search in cake-->

<div class="row" style="margin-top:2em"> 
  
  <!-- admin icon in cake-->
  <div class="col-sm-2" style="margin-top:1em">
        <div class="container-fluid">

            <button type="button" class="circular_profile_user btn btn-danger" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><span class="badge " style="margin-top:7em;margin-left:5em">+</span></button>
            <div class="collapse " id="collapseExample">
                <?php echo $this->Html->link("", array('controller' => 'users','action'=> 'profile'), array( 'class' => 'circular_profile_info_user btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Profile Info'))?>
                <?php echo $this->Html->link("", array('controller' => 'users','action'=> 'badge'), array( 'class' => 'circular_badges_user btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Badges'))?>
                <?php echo $this->Html->link("", array('controller' => 'decks','action'=> 'add'), array( 'class' => 'circular_add btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Add Quiz'))?>
                <?php echo $this->Html->link("", array('controller' => 'users','action'=> 'logout'), array( 'class' => 'circular_logout btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Log Out'))?>
      </div>
    </div>
  </div>
  <!--end  admin icon in cake--> 
  <!-- play field in cake-->
  <div class="col-sm-10" >
    <div class="container-fluid showcontent_nofixes">
    	<div class="badges text-center">
        	<h2>Badges</h2>
            <!--this part put in php loop pull badges that match with username-->
            <div class="row">
            	<div class="col-sm-2"></div>
                <div class="col-sm-8">
                	<div class="row badgestyle1">            	
            			<div class="col-sm-2 badgestyle2">this part pull img if hav</div>
                		<div class="col-sm-8 text-left  ">this part is description of badges</div>               
            		</div>
                </div>
                <div class="col-sm-2"></div>
            </div>
            <!--end-->
        </div>    
    </div>
    <!--end play field in cake--> 
  </div>
</div>
<!-- end layout in cake-->
</body>
<script>
$(document).ready(function() {
	$('[data-toggle="tooltip"]').tooltip()
});

</script>
</html>
