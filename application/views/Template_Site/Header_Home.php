<?php
if ($this->session->userdata('login_user')) {
    $currentUser = $this->session->userdata('login_user');

    $user_name = $currentUser[0]->Users_Name;
}
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
    
      @media only screen and (max-width: 768px) {
                .btnres {
                    width: 90px;
                   font-size: 10px;
                }
                .btnre_font{
                    
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
          box-shadow: rgba(0,0,0,0.8) 0 0 10px;
          border-bottom: #707070 2px solid;
          ">
        <div class="container">
            <!-- navbar-header -->
            <div class="logo-box d-flex">
                <a class="logo" href="<?php echo base_url(); ?>"><img style="width: 230px; height: 68px" class="img-responsive" src="<?php echo base_url(); ?>assets/images/logo/wps logo.png" alt="Logo"></a>
            </div>
            <!-- /navbar-header -->

            <!-- <div class="navbar-left">
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active "><a href="<?php echo base_url(); ?>" >Home <span class=""></span></a>

                        </li>


                        <li><a href="<?php echo base_url(); ?>Home/Help">Help/Support</a></li> 
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
            </div> -->

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

                <?php // if($currentUser){   ?>
                <!--                        <ul class="sign-in-user">
                                            <li><i class="fa fa-user"><a href="">&nbsp;</a> </i></li>
                                            
                                            
                                        </ul>-->
                <?php // }   ?>

                <!-- sign-in -->					
                <!-- sign-in -->

                <?php
                if ($this->session->userdata('login_user')) {
                    ?>

                    <ul class="sign-in">
                        <!--<li><i class=""></i></li>-->
                        <li><a href="<?php echo base_url(); ?>Profile"><?php echo $currentUser[0]->Users_Name; ?>'s Profile </a></li>

                    </ul><!-- sign-in -->	

                    <?php } else {
                    ?>
                    <ul class="sign-in">
                        <li><i class=""></i></li>
                        <li><a href="<?php echo base_url(); ?>Sign_In"> Sign In  /</a></li>
                        <li><a href="<?php echo base_url(); ?>Register">Register</a></li>
                    </ul><!-- sign-in -->	
                <?php }
                ?>
                <a href="<?php echo base_url(); ?>Post_Ad" class="btnres btn btn-primary " style="animation-name: anim;
                   animation-duration: 1s;
                   animation-iteration-count: infinite;
                   animation-direction: alternate;
                   animation-timing-function: linear;
                   background-color: #299dfd;
                   border-color: #FDC45B;

                   border-width: 1px;
                   border-style: solid;
                   border-radius: 5px;
                   color: #fff;
                   text-shadow: 0 0 3px #000;"><h6>Post Your Ad</h6></a>
            </div>
            <!-- nav-right -->
        </div><!-- container -->
    </nav><!-- navbar -->
</header>