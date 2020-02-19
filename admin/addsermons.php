<?php include 'components/components.php';?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
  <title>ICGC</title>
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
  <link href="lib/sweetalert2.css" rel="stylesheet">
</head>

<body class="app">
  <div id="loader">
    <div class="spinner"></div>
  </div>
  <script type="d1c9d1c15d23f11be9e9f4a4-text/javascript">window.addEventListener('load', () => {
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
          <div class="row gap-20 masonry pos-r">
            <div class="masonry-sizer col-md-6 "></div>
            <div class="masonry-item col-md-8">
              <div class="bgc-white p-20 bd">
                <h6 class="c-grey-900">Add sermon</h6>
                <div class="mT-30">
                  <form id="form" class="addSermon">

                    <div class="form-group">
                      <label for="serm_title">Title of sermon</label>
                      <input name="serm_title" type="text" class="form-control" id="serm_title" placeholder="Title of Sermon">
                    </div>

                    <div class="form-row">

                      <div class="form-group col-md-6">
                        <label for="serm_preacher">Preacher of sermon</label>
                        <input type="text" name="serm_preacher" class="form-control" id="serm_preacher" placeholder="Preacher of the sermon">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="serm_date">Date of sermon</label>
                        <input name="serm_date" type="date" class="form-control" id="serm_date">
                      </div>

                    </div>

                    <div class="form-group">
                      <label for="serm_audio">Sermon</label>
                      <input name="serm_audio" type="file" class="form-control" id="serm_audio">
                    </div>

                    <!-- <div class="form-group">
                      <div class="checkbox checkbox-circle checkbox-info peers ai-c">
                        <input type="checkbox" id="inputCall2" name="inputCheckboxesCall" class="peer">
                        <label for="inputCall2" class="peers peer-greed js-sb ai-c">
                          <span class="peer peer-greed">Call John for Dinner</span>
                        </label>
                      </div>
                    </div> -->
                    
                    <button type="submit" class="btn btn-primary">Add Sermon</button>

                  </form>
                </div>
              </div>
            </div>


            <!-- <div class="masonry-item col-md-6">
              <div class="bgc-white p-20 bd">
                <h6 class="c-grey-900">Horizontal Form</h6>
                <div class="mT-30">
                  <form>
                    <div class="form-group row"><label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10"><input type="email" class="form-control" id="inputEmail3"
                          placeholder="Email"></div>
                    </div>
                    <div class="form-group row"><label for="inputDate of sermon3"
                        class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-10"><input type="password" class="form-control" id="inputPassword3"
                          placeholder="Password"></div>
                    </div>
                    <fieldset class="form-group">
                      <div class="row">
                        <legend class="col-form-legend col-sm-2">Radios</legend>
                        <div class="col-sm-10">
                          <div class="form-check"><label class="form-check-label"><input class="form-check-input"
                                type="radio" name="gridRadios" id="gridRadios1" value="option1" checked="checked">
                              Option one is this and that&mdash;be sure to include why it's great</label></div>
                          <div class="form-check"><label class="form-check-label"><input class="form-check-input"
                                type="radio" name="gridRadios" id="gridRadios2" value="option2"> Option two can be
                              something else and selecting it will deselect option one</label></div>
                          <div class="form-check disabled"><label class="form-check-label"><input
                                class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3"
                                disabled="disabled"> Option three is disabled</label></div>
                        </div>
                      </div>
                    </fieldset>
                    <div class="form-group row">
                      <div class="col-sm-2">Checkbox</div>
                      <div class="col-sm-10">
                        <div class="form-check"><label class="form-check-label"><input class="form-check-input"
                              type="checkbox"> Check me out</label></div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-10"><button type="submit" class="btn btn-primary">Sign in</button></div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="masonry-item col-md-6">
              <div class="bgc-white p-20 bd">
                <h6 class="c-grey-900">Disabled Forms</h6>
                <div class="mT-30">
                  <form>
                    <fieldset disabled="disabled">
                      <div class="form-group"><label for="disabledTextInput">Disabled input</label><input type="text"
                          id="disabledTextInput" class="form-control" placeholder="Disabled input"></div>
                      <div class="form-group"><label for="disabledSelect">Disabled select menu</label><select
                          id="disabledSelect" class="form-control">
                          <option>Disabled select</option>
                        </select></div>
                      <div class="form-check"><label class="form-check-label"><input class="form-check-input"
                            type="checkbox"> Can't check this</label></div><button type="submit"
                        class="btn btn-primary">Submit</button>
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
            <div class="masonry-item col-md-6">
              <div class="bgc-white p-20 bd">
                <h6 class="c-grey-900">Validation</h6>
                <div class="mT-30">
                  <form class="container" id="needs-validation" novalidate>
                    <div class="row">
                      <div class="col-md-6 mb-3"><label for="validationCustom01">First name</label><input type="text"
                          class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                      </div>
                      <div class="col-md-6 mb-3"><label for="validationCustom02">Last name</label><input type="text"
                          class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-3"><label for="validationCustom03">City</label><input type="text"
                          class="form-control" id="validationCustom03" placeholder="City" required>
                        <div class="invalid-feedback">Please provide a valid city.</div>
                      </div>
                      <div class="col-md-3 mb-3"><label for="validationCustom04">State</label><input type="text"
                          class="form-control" id="validationCustom04" placeholder="State" required>
                        <div class="invalid-feedback">Please provide a valid state.</div>
                      </div>
                      <div class="col-md-3 mb-3"><label for="validationCustom05">Zip</label><input type="text"
                          class="form-control" id="validationCustom05" placeholder="Zip" required>
                        <div class="invalid-feedback">Please provide a valid zip.</div>
                      </div>
                    </div><button class="btn btn-primary" type="submit">Submit form</button>
                  </form>
                  <script
                    type="d1c9d1c15d23f11be9e9f4a4-text/javascript">!function(){"use strict";window.addEventListener("load",function(){var t=document.getElementById("needs-validation");t.addEventListener("submit",function(e){!1===t.checkValidity()&&(e.preventDefault(),e.stopPropagation()),t.classList.add("was-validated")},!1)},!1)}()</script>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </main>
      <?php foot();?>
    </div>
  </div>
  <script type="d1c9d1c15d23f11be9e9f4a4-text/javascript" src="vendor.js"></script>
  <script type="d1c9d1c15d23f11be9e9f4a4-text/javascript" src="bundle.js"></script>
  <script src="rocket-loader.min.js" data-cf-settings="d1c9d1c15d23f11be9e9f4a4-|49" defer=""></script>
  <script type="text/javascript" src="lib/jquery.js"></script>
  <script type="text/javascript" src="lib/sweetalert2.all.js"></script>
  <script type="text/javascript" src="lib/back.js"></script>
</body>

</html>