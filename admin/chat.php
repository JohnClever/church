<?php
include 'components/components.php';
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <title>Chat</title>
  <style>
    #loader {
      transition: all .3s ease-in-out;
      opacity: 1;
      visibility: visible;
      position: fixed;
      height: 100vh;
      width: 100%;
      background: #fff;
      z-index: 90000
    }

    #loader.fadeOut {
      opacity: 0;
      visibility: hidden
    }

    .spinner {
      width: 40px;
      height: 40px;
      position: absolute;
      top: calc(50% - 20px);
      left: calc(50% - 20px);
      background-color: #333;
      border-radius: 100%;
      -webkit-animation: sk-scaleout 1s infinite ease-in-out;
      animation: sk-scaleout 1s infinite ease-in-out
    }

    @-webkit-keyframes sk-scaleout {
      0% {
        -webkit-transform: scale(0)
      }

      100% {
        -webkit-transform: scale(1);
        opacity: 0
      }
    }

    @keyframes sk-scaleout {
      0% {
        -webkit-transform: scale(0);
        transform: scale(0)
      }

      100% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 0
      }
    }
  </style>
  <link href="style.css" rel="stylesheet">
</head>

<body class="app">
  <div id="loader">
    <div class="spinner"></div>
  </div>
  <script type="d9d9f2faa31670180653e000-text/javascript">
    window.addEventListener('load', () => {
        const loader = document.getElementById('loader');
        setTimeout(() => {
          loader.classList.add('fadeOut');
        }, 300);
      });</script>
  <div>
    <?php sidebar();?>
    <div class="page-container">
      <?php head();?>
      <main class="main-content bgc-grey-100">
        <div id="mainContent">
          <div class="full-container">
            <div class="peers fxw-nw pos-r">
              <div class="peer bdR" id="chat-sidebar">
                <div class="layers h-100">
                  <div class="bdB layer w-100"><input type="text" placeholder="Search contacts..." name="chatSearch"
                      class="form-constrol p-15 bdrs-0 w-100 bdw-0"></div>
                  <div class="layer w-100 fxg-1 scrollable pos-r">
                    <div class="peers fxw-nw ai-c p-20 bdB bgc-white bgcH-grey-50 cur-p">
                      <div class="peer"><img src="../../../randomuser.me/api/portraits/men/1.jpg" alt=""
                          class="w-3r h-3r bdrs-50p"></div>
                      <div class="peer peer-greed pL-20">
                        <h6 class="mB-0 lh-1 fw-400">John Doe</h6><small class="lh-1 c-green-500">Online</small>
                      </div>
                    </div>
                    <div class="peers fxw-nw ai-c p-20 bdB bgc-white bgcH-grey-50 cur-p">
                      <div class="peer"><img src="../../../randomuser.me/api/portraits/men/2.jpg" alt=""
                          class="w-3r h-3r bdrs-50p"></div>
                      <div class="peer peer-greed pL-20">
                        <h6 class="mB-0 lh-1 fw-400">Moo Doe</h6><small class="lh-1 c-amber-500">Away</small>
                      </div>
                    </div>
                    <div class="peers fxw-nw ai-c p-20 bdB bgc-white bgcH-grey-50 cur-p">
                      <div class="peer"><img src="../../../randomuser.me/api/portraits/men/3.jpg" alt=""
                          class="w-3r h-3r bdrs-50p"></div>
                      <div class="peer peer-greed pL-20">
                        <h6 class="mB-0 lh-1 fw-400">Adam Jones</h6><small class="lh-1 c-grey-500">Offline</small>
                      </div>
                    </div>
                    <div class="peers fxw-nw ai-c p-20 bdB bgc-white bgcH-grey-50 cur-p">
                      <div class="peer"><img src="../../../randomuser.me/api/portraits/men/4.jpg" alt=""
                          class="w-3r h-3r bdrs-50p"></div>
                      <div class="peer peer-greed pL-20">
                        <h6 class="mB-0 lh-1 fw-400">Mizo Doe</h6><small class="lh-1 c-red-500">Busy</small>
                      </div>
                    </div>
                    <div class="peers fxw-nw ai-c p-20 bdB bgc-white bgcH-grey-50 cur-p">
                      <div class="peer"><img src="../../../randomuser.me/api/portraits/men/1.jpg" alt=""
                          class="w-3r h-3r bdrs-50p"></div>
                      <div class="peer peer-greed pL-20">
                        <h6 class="mB-0 lh-1 fw-400">John Doe</h6><small class="lh-1 c-green-500">Online</small>
                      </div>
                    </div>
                    <div class="peers fxw-nw ai-c p-20 bdB bgc-white bgcH-grey-50 cur-p">
                      <div class="peer"><img src="../../../randomuser.me/api/portraits/men/2.jpg" alt=""
                          class="w-3r h-3r bdrs-50p"></div>
                      <div class="peer peer-greed pL-20">
                        <h6 class="mB-0 lh-1 fw-400">Moo Doe</h6><small class="lh-1 c-amber-500">Away</small>
                      </div>
                    </div>
                    <div class="peers fxw-nw ai-c p-20 bdB bgc-white bgcH-grey-50 cur-p">
                      <div class="peer"><img src="../../../randomuser.me/api/portraits/men/3.jpg" alt=""
                          class="w-3r h-3r bdrs-50p"></div>
                      <div class="peer peer-greed pL-20">
                        <h6 class="mB-0 lh-1 fw-400">Adam Jones</h6><small class="lh-1 c-grey-500">Offline</small>
                      </div>
                    </div>
                    <div class="peers fxw-nw ai-c p-20 bdB bgc-white bgcH-grey-50 cur-p">
                      <div class="peer"><img src="../../../randomuser.me/api/portraits/men/4.jpg" alt=""
                          class="w-3r h-3r bdrs-50p"></div>
                      <div class="peer peer-greed pL-20">
                        <h6 class="mB-0 lh-1 fw-400">Mizo Doe</h6><small class="lh-1 c-red-500">Busy</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="peer peer-greed" id="chat-box">
                <div class="layers h-100">
                  <div class="layer w-100">
                    <div class="peers fxw-nw jc-sb ai-c pY-20 pX-30 bgc-white">
                      <div class="peers ai-c">
                        <div class="peer d-n@md+"><a href="#" title="" id="chat-sidebar-toggle"
                            class="td-n c-grey-900 cH-blue-500 mR-30"><i class="ti-menu"></i></a></div>
                        <div class="peer mR-20"><img src="../../../randomuser.me/api/portraits/men/12.jpg" alt=""
                            class="w-3r h-3r bdrs-50p"></div>
                        <div class="peer">
                          <h6 class="lh-1 mB-0">John Doe</h6><i class="fsz-sm lh-1">Typing...</i>
                        </div>
                      </div>
                      <div class="peers"><a href="#" class="peer td-n c-grey-900 cH-blue-500 fsz-md mR-30" title=""><i
                            class="ti-video-camera"></i> </a><a href="#"
                          class="peer td-n c-grey-900 cH-blue-500 fsz-md mR-30" title=""><i class="ti-headphone"></i>
                        </a><a href="#" class="peer td-n c-grey-900 cH-blue-500 fsz-md" title=""><i
                            class="ti-more"></i></a></div>
                    </div>
                  </div>
                  <div class="layer w-100 fxg-1 bgc-grey-200 scrollable pos-r">
                    <div class="p-20 gapY-15">
                      <div class="peers fxw-nw">
                        <div class="peer mR-20"><img class="w-2r bdrs-50p"
                            src="../../../randomuser.me/api/portraits/men/11.jpg" alt=""></div>
                        <div class="peer peer-greed">
                          <div class="layers ai-fs gapY-5">
                            <div class="layer">
                              <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                <div class="peer mR-10"><small>10:00 AM</small></div>
                                <div class="peer-greed"><span>Lorem Ipsum is simply dummy text of</span></div>
                              </div>
                            </div>
                            <div class="layer">
                              <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                <div class="peer mR-10"><small>10:00 AM</small></div>
                                <div class="peer-greed"><span>the printing and typesetting industry.</span></div>
                              </div>
                            </div>
                            <div class="layer">
                              <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                <div class="peer mR-10"><small>10:00 AM</small></div>
                                <div class="peer-greed"><span>Lorem Ipsum has been the industry's</span></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="peers fxw-nw ai-fe">
                        <div class="peer ord-1 mL-20"><img class="w-2r bdrs-50p"
                            src="../../../randomuser.me/api/portraits/men/12.jpg" alt=""></div>
                        <div class="peer peer-greed ord-0">
                          <div class="layers ai-fe gapY-10">
                            <div class="layer">
                              <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                <div class="peer mL-10 ord-1"><small>10:00 AM</small></div>
                                <div class="peer-greed ord-0"><span>Heloo</span></div>
                              </div>
                            </div>
                            <div class="layer">
                              <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                <div class="peer mL-10 ord-1"><small>10:00 AM</small></div>
                                <div class="peer-greed ord-0"><span>??</span></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="layer w-100">
                    <div class="p-20 bdT bgc-white">
                      <div class="pos-r"><input type="text" class="form-control bdrs-10em m-0"
                          placeholder="Say something..."> <button type="button"
                          class="btn btn-primary bdrs-50p w-2r p-0 h-2r pos-a r-1 t-1"><i
                            class="fa fa-paper-plane-o"></i></button></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600"><span>Copyright © 2017 Designed by <a
            href="https://colorlib.com/" target="_blank" title="Colorlib">Colorlib</a>. All rights reserved.</span>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
          type="d9d9f2faa31670180653e000-text/javascript"></script>
        <script type="d9d9f2faa31670180653e000-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
      </footer>
    </div>
  </div>
  <script type="d9d9f2faa31670180653e000-text/javascript" src="vendor.js"></script>
  <script type="d9d9f2faa31670180653e000-text/javascript" src="bundle.js"></script>
  <script src="rocket-loader.min.js" data-cf-settings="d9d9f2faa31670180653e000-|49" defer=""></script>
</body>
<!-- Mirrored from colorlib.com/polygon/adminator/chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Feb 2020 20:41:21 GMT -->

</html>