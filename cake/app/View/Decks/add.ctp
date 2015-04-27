<?php
/**
 * Created by PhpStorm.
 * User: OPTIMUS
 * Date: 26/4/2558
 * Time: 0:16
 */
?>
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
            <div class="collapse " id="collapseExample">
                <?php echo $this->Html->link("", array('controller' => 'users','action'=> 'profile'), array( 'class' => 'circular_profile_info_user btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Profile Info'))?>
                <?php echo $this->Html->link("", array('controller' => 'users','action'=> 'badge'), array( 'class' => 'circular_badges_user btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Badges'))?>
                <?php echo $this->Html->link("", array('controller' => 'decks','action'=> 'add'), array( 'class' => 'circular_add btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Add Quiz'))?>
                <?php echo $this->Html->link("", array('controller' => 'users','action'=> 'logout'), array( 'class' => 'circular_logout btn btn-danger','data-placement' => 'right','data-toggle'=>'tooltip','data-original-title'=>'Log Out'))?>
            </div>
        </div>
    </div><!--end  user icon in cake-->
    <!-- user info field in cake-->

    <!-- play field in cake-->
    <div class="col-sm-10" >
        <div class="container-fluid showcontent_nofixes">
            <div class="addDeck text-center">
                <h2>Add Deck</h2>
                <div class="container-fluid">
                <?php echo $this->Form->create('Deck',array(
                    'enctype' => 'multipart/form-data',
                    'url' => [
                        'controller' => 'decks',
                        'action' => 'add'
                    ],
                    'class' =>'form-horizontal decorform',
                    'style' => 'margin-top:2em;padding-left:2em'

                )); ?>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">





                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', 'Deck Name', array('class'=>'col-sm-3 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('deckname', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'deckname',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>


                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', 'Description', array('class'=>'col-sm-3 control-label'));?>
                                <div class="col-sm-5" >
                                    <?php echo $this->Form->input('description', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'textarea',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control',
                                        'row' => '5'
                                    ]);
                                    ?>
                                </div>
                            </div>
                            <div class="form-group text-left">
                            	 <?php echo$this->Form->label('Deck.name', 'Categories', array('class'=>'col-sm-3 control-label'));?>
                            	 <div class="col-sm-3" >
                                 	<select class="form-control">
  										<option value="volvo">test</option>
  										<option value="saab">test</option>
  										<option value="opel">test</option>
  										<option value="audi">test</option>
									</select>
                                   
                                </div>
                            </div>                          
                             
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                    <div id="cardindeck">
                        <div class="col-sm-12 badgestyle1" id='card1' style="padding-top:1em;padding-bottom:1em">

                            <form class="form-horizontal">
                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', '1.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('ans1', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control'
										
										
                                    ]);
                                    ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 text-left" >
                                    <div><img  id="cardP1" src="#" class="img-thumbnail"  style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Front');?>
                                    <?php echo $this->Form->input('front1', [
                                        'id' => 'cardU1',
										'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required',
										
										
                                    ]);
                                    ?>
                                </div>

                                <div class="col-sm-4 text-left" >
                                    <div><img class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Back');?>
                                    <?php echo $this->Form->input('back1', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required',
										'onchange' => 'readURL(this);'
                                    ]);
                                    ?>
                                </div>
                            </div>




                            <br>
                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', '2.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('ans2', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Front');?>
                                    <?php echo $this->Form->input('front2', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>

                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Back Front');?>
                                    <?php echo $this->Form->input('back2', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>
                            </div>



                            <br>
                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', '3.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('ans3', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Front');?>
                                    <?php echo $this->Form->input('front3', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>

                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Back Front');?>
                                    <?php echo $this->Form->input('back3', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>
                            </div>





                            <br>
                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', '4.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('ans4', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Front');?>
                                    <?php echo $this->Form->input('front4', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>

                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Back Front');?>
                                    <?php echo $this->Form->input('back4', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>
                            </div>




                            <br>
                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', '5.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('ans5', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Front');?>
                                    <?php echo $this->Form->input('front5', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>

                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Back Front');?>
                                    <?php echo $this->Form->input('back5', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>
                            </div>


                            <br>


                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', '6.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('ans6', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Front');?>
                                    <?php echo $this->Form->input('front6', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>

                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Back Front');?>
                                    <?php echo $this->Form->input('back6', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>
                            </div>


                            <br>
                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', '7.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('ans7', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Front');?>
                                    <?php echo $this->Form->input('front7', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>

                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Back Front');?>
                                    <?php echo $this->Form->input('back7', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>
                            </div>

                            <br>
                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', '8.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('ans8', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Front');?>
                                    <?php echo $this->Form->input('front8', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>

                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Back Front');?>
                                    <?php echo $this->Form->input('back8', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>
                            </div>


                            <br>
                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', '9.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('ans9', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Front');?>
                                    <?php echo $this->Form->input('front9', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>

                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Back Front');?>
                                    <?php echo $this->Form->input('back9', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>
                            </div>

                            <br>
                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', '10.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('ans10', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Front');?>
                                    <?php echo $this->Form->input('front10', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>

                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Back Front');?>
                                    <?php echo $this->Form->input('back10', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>
                            </div>


                            <br>
                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', '11.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('ans11', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Front');?>
                                    <?php echo $this->Form->input('front11', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>

                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Back Front');?>
                                    <?php echo $this->Form->input('back11', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>
                            </div>

                            <br>
                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', '12.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('ans12', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Front');?>
                                    <?php echo $this->Form->input('front12', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>

                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Back Front');?>
                                    <?php echo $this->Form->input('back12', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>
                            </div>

                            <br>
                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', '13.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('ans13', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Front');?>
                                    <?php echo $this->Form->input('front13', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>

                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Back Front');?>
                                    <?php echo $this->Form->input('back13', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>
                            </div>

                            <br>
                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', '14.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('ans14', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Front');?>
                                    <?php echo $this->Form->input('front14', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>

                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Back Front');?>
                                    <?php echo $this->Form->input('back14', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>
                            </div>


              <br>
                            <div class="form-group text-left">
                                <?php echo$this->Form->label('Deck.name', '15.) Card Answer', array('class'=>'col-sm-2 control-label'));?>
                                <div class="col-sm-3" >
                                    <?php echo $this->Form->input('ans15', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'text',
                                        'required',
                                        'placeholder' => 'Description',
                                        'class' => 'form-control'
                                    ]);
                                    ?>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Card Front');?>
                                    <?php echo $this->Form->input('front15', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>

                                <div class="col-sm-4 text-left" >
                                    <div><img src="" class="img-thumbnail" style="width:150px;height:150px" /></div>
                                    <?php echo$this->Form->label('Deck.name', 'Back Front');?>
                                    <?php echo $this->Form->input('back15', [
                                        'label' => false,
                                        'div' => false,
                                        'type' => 'file',
                                        'required'
                                    ]);
                                    ?>
                                </div>
                            </div>

                        </div>
                    </div>



                    <div class="row"><!--this part hav to connect to form that in upper part-->
                        <div class="col-sm-4"></div>
                        <div class="col-sm-2"><?php echo $this->Form->submit('Submit', [
                                'class' => 'btn btn-primary'
                            ]);?></div>
                        <div class="col-sm-2"><?php echo $this->Html->link('Cancel', array('controller' => 'users','action'=> 'index'),
                                array( 'class' => 'btn btn-danger'))?></div>
                        <div class="col-sm-4"></div>
                    </div>
                <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
        <!--end play field in cake-->
    </div>

</div>
<script>
 {function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#cardP1').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
   	 }
	}

  $("#cardU1").change(function(){readURL(this);});
 }
  </script>