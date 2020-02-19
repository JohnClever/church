<?php


function sidebar() {

    echo '
        <div class="sidebar">
            <div class="sidebar-inner">
                <div class="sidebar-logo">
                    <div class="peers ai-c fxw-nw">
                    <div class="peer peer-greed"><a class="sidebar-link td-n" href="index.html" class="td-n">
                        <div class="peers ai-c fxw-nw">
                            <div class="peer">
                            <div class="logo"><img src="assets/static/images/logo.png" alt=""></div>
                            </div>
                            <div class="peer peer-greed">
                            <h5 class="lh-1 mB-0 logo-text">Admin</h5>
                            </div>
                        </div>
                        </a></div>
                    <div class="peer">
                        <div class="mobile-toggle sidebar-toggle"><a href="#" class="td-n"><i
                            class="ti-arrow-circle-left"></i></a></div>
                    </div>
                    </div>
                </div>
                <ul class="sidebar-menu scrollable pos-r">


                    <li class="nav-item mT-30 active">
                        <a class="sidebar-link" href="index.php" default>
                            <span class="icon-holder">
                                <i class="c-blue-500 ti-home"></i> 
                            </span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="javascript:void(0);">
                            <span class="icon-holder">
                                <i class="c-blue-500 ti-view-list-alt"></i> 
                            </span>
                            <span class="title">Events</span> 
                            <span class="arrow"><i class="ti-angle-right"></i></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropdown"><a href="events.php"><span>Show Events</span></a></li>
                            <li class="nav-item dropdown"><a href="addevents.php"><span>Add Events</span></a></li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="javascript:void(0);">
                            <span class="icon-holder">
                                <i class="c-blue-500 ti-view-list-alt"></i> 
                            </span>
                            <span class="title">Sermons</span> 
                            <span class="arrow"><i class="ti-angle-right"></i></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropdown"><a href="sermons.php"><span>Show Sermons</span></a></li>
                            <li class="nav-item dropdown"><a href="addsermons.php"><span>Add Sermons</span></a></li>
                        </ul>
                    </li>



                  
                </ul>
            </div>
        </div>
    ';

}

function head() {
    echo '
        <div class="header navbar">
            <div class="header-container">
            <ul class="nav-left">
                <li><a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);"><i class="ti-menu"></i></a>
                </li>
            </ul>
            <ul class="nav-right">
                <li class="notifications dropdown">
                <span class="counter bgc-blue">3</span> 
                    <a href="#" class="dropdown-toggle no-after" data-toggle="dropdown"><i class="ti-email"></i></a>
                <ul class="dropdown-menu">
                    <li class="pX-20 pY-15 bdB"><i class="ti-email pR-10"></i> 
                    <span class="fsz-sm fw-600 c-grey-900">Emails</span>
                    </li>


                    <li>
                    <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">

                        <li>
                        <a href="#" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                            <div class="peer peer-greed">
                            <div>
                                <div class="peers jc-sb fxw-nw mB-5">
                                <div class="peer">
                                    <p class="fw-500 mB-0">John Doe</p>
                                </div>
                                <div class="peer"><small class="fsz-xs">5 mins ago</small></div>
                                </div><span class="c-grey-600 fsz-sm">Message</span>
                            </div>
                            </div>
                        </a>
                        </li>

                    </ul>
                    </li>
                    <li class="pX-20 pY-15 ta-c bdT">
                    <span>
                        <a href="#" class="c-grey-600 cH-blue fsz-sm td-n">View All Email<i class="fs-xs ti-angle-right mL-10"></i></a>
                    </span>
                    </li>
                </ul>
                </li>


                <li class="dropdown"><a href="#" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1"
                    data-toggle="dropdown">
                    <div class="peer mR-10"><img class="w-2r bdrs-50p" src="assets/men/10.jpg"
                        alt=""></div>
                    <div class="peer"><span class="fsz-sm c-grey-900">John Doe</span></div>
                </a>
                <ul class="dropdown-menu fsz-sm">
                    <li><a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-settings mR-10"></i>
                        <span>Setting</span></a></li>
                    <li><a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-user mR-10"></i>
                        <span>Profile</span></a></li>
                    <li><a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-email mR-10"></i>
                        <span>Messages</span></a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-power-off mR-10"></i>
                        <span>Logout</span></a></li>
                </ul>
                </li>


            </ul>
        </div>
    </div>
    
    ';
}

function foot() {
    echo '
        <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600"><span>Copyright © 2017 Designed by <a
        href="https://colorlib.com/" target="_blank" title="Colorlib">Colorlib</a>. All rights reserved.</span>
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
            type="d1c9d1c15d23f11be9e9f4a4-text/javascript"></script>
            <script type="d1c9d1c15d23f11be9e9f4a4-text/javascript">
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag("js", new Date());

            gtag("config", "UA-23581568-13");
            </script>
        </footer>
        
    ';
}

?>
