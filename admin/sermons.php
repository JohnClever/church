<?php
  include 'components/components.php';
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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
  <link href="sweetalert2.css" rel="stylesheet">
</head>

<body class="app">
  <div id="loader">
    <div class="spinner"></div>
  </div>
  <script type="47ea7ae42522b110868c5a89-text/javascript">window.addEventListener('load', () => {
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
          <div class="container-fluid">
            <h4 class="c-grey-900 mT-10 mB-30">Table of Sermons</h4>
            <div class="row">
              <div class="col-md-12">
                <div class="bgc-white bd bdrs-3 p-20 mB-20">
                  <h4 class="c-grey-900 mB-20">Data</h4>
                  <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Preacher</th>
                        <th>Date</th>
                        <th>Audio</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>Title</th>
                        <th>Preacher</th>
                        <th>Date</th>
                        <th>Audio</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php
                        include 'db.php';
                        $sql = "SELECT * FROM sermons";
                        $query = mysqli_query($conn, $sql);

                        while($data = mysqli_fetch_array($query)) {
                          echo '
                            <tr class="'.$data["id"].'">
                              <td>'.$data["serm_title"].'</td>
                              <td>'.$data["serm_preacher"].'</td>
                              <td>'.$data["serm_date"].'</td>
                              <td>
                                  <button data="editSermon" class="btn btn-primary" value="'.$data["serm_id"].'"><i class="fa fa-pencil"></i></button>
                                  <button data="deleteSermon" class="btn btn-danger" value="'.$data["serm_id"].'"><i class="fa fa-trash"></i></button>  
                              </td>
                            </tr>
                          ';
                        }
                      
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600"><span>Copyright © <?php echo date('Y');?> Designed by <a
            href="" target="_blank">ICGC - Communications Department</a>. All rights reserved.</span>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"
          type="47ea7ae42522b110868c5a89-text/javascript"></script>
        <script type="47ea7ae42522b110868c5a89-text/javascript">
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
      </script>
      </footer>
    </div>
  </div>
  <script type="47ea7ae42522b110868c5a89-text/javascript" src="vendor.js"></script>
  <script type="47ea7ae42522b110868c5a89-text/javascript" src="bundle.js"></script>
  <script src="rocket-loader.min.js"
    data-cf-settings="47ea7ae42522b110868c5a89-|49" defer=""></script>
  <script type="text/javascript" src="lib/jquery.js"></script>
  <script type="text/javascript" src="lib/jquery.redirect.js"></script>
  <script type="text/javascript" src="lib/sweetalert2.all.js"></script>
  <script type="text/javascript" src="lib/back.js"></script>
</body>
</html>