<?php


$currentUser = $this->session->userdata('login_user');


if($currentUser){
    $user_name = $currentUser[0]->Users_Name;
$phone = $currentUser[0]->Phone_No;
$is_member = $currentUser[0]->Is_member;
}


// var_dump($currentUser);die;    

//var_dump($Branch_Name);



//var_dump($MessageData);die;
?>



<style>
    @keyframes anim {
	to {
		background-color: #00679b;
		border-color: #00679b;
	}
}
@keyframes anim-half {
	50% {
		background-color: #4bc3ff;
		border-color: #00679b;
	}
}
</style>
<header id="header" class="clearfix" >
            <!-- navbar -->
            <nav  class="navbar navbar-default" style="background-color: #e7e7e7;
 margin: 0 auto;
 width: 100%;
 padding: 0;
 text-align: center;
/* border-radius */
 -webkit-border-radius: 5px;
 -moz-border-radius: 2px;
 border-radius: 5px;
/* box-shadow */
 -webkit-box-shadow: rgba(0,0,0,0.8) 0px 0 10px;
 -moz-box-shadow: rgba(0,0,0,0.8) 0 0 10px;
 box-shadow: rgba(0,0,0,0.8) 0 0 10px;">
                <div class="container">
                    <!-- navbar-header -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img style="width: 130px; height: 30px" class="img-responsive" src="<?php echo base_url(); ?>assets/Site/images/sellfree.png" alt="Logo"></a>
                    </div>
                    <!-- /navbar-header -->

                    <div class="navbar-left">
                        <div class="collapse navbar-collapse" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active "><a href="<?php echo base_url(); ?>" >Home <span class=""></span></a>

                                </li>


                                <li><a href="faq.html">Help/Support</a></li> 
                                <li style="animation-name: anim;
	animation-duration: 1s;
	animation-iteration-count: infinite;
	animation-direction: alternate;
	animation-timing-function: linear;
        background-color: #299dfd;
        border-color: #003d5c;

	border-width: 2px;
	border-style: solid;
        border-radius: 5px;
	color: #fff;
	text-shadow: 0 0 3px #000;"><a href="<?php echo base_url(); ?>All_Ads/" style=" color: #ffffff; border-radius: 5px;">All Ads</a></li>

                            </ul>
                        </div>
                    </div>

                    <!-- nav-right -->
                    <div class="nav-right">
                        <!-- language-dropdown -->
                        <!--					<div class="dropdown language-dropdown">
                                                                        <i class="fa fa-globe"></i> 						
                                                                        <a data-toggle="dropdown" href="#"><span class="change-text">United Kingdom</span> <i class="fa fa-angle-down"></i></a>
                                                                        <ul class="dropdown-menu language-change">
                                                                                <li><a href="#">United Kingdom</a></li>
                                                                                <li><a href="#">United States</a></li>
                                                                                <li><a href="#">China</a></li>
                                                                                <li><a href="#">Russia</a></li>
                                                                        </ul>								
                                                                </div> language-dropdown -->

                        <?php if($currentUser){ ?>
                        <ul class="sign-in-user">
                            <li><i class="fa fa-user"><a href="">&nbsp;<?php echo $user_name; ?></a> </i></li>
                            
                            
                        </ul>
                        <?php } ?>
                        
                        <!-- sign-in -->					
                        <!-- sign-in -->					
                        <ul class="sign-in">
                            <li><i class=""></i></li>
                            <li><a href="<?php echo base_url(); ?>Sign_In"> Sign In </a></li>
                            <li><a href="<?php echo base_url(); ?>Register">Register</a></li>
                        </ul><!-- sign-in -->					

                        <a href="ad-post.html" class="btn" style="animation-name: anim;
	animation-duration: 1s;
	animation-iteration-count: infinite;
	animation-direction: alternate;
	animation-timing-function: linear;
        background-color: #299dfd;
        border-color: #FDC45B;

	border-width: 5px;
	border-style: solid;
        border-radius: 5px;
	color: #fff;
	text-shadow: 0 0 3px #000;">Post Your Ad</a>
                    </div>
                    <!-- nav-right -->
                </div><!-- container -->
            </nav><!-- navbar -->
        </header>