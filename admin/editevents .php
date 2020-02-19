<?php 
  include 'components/components.php';

  if(isset($_SEESION['admin'])) {

  } else if(isset($_POST['id'])) {
    extract($_POST);
    $sql = "SELECT * FROM events WHERE id = $id";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($query);

    extract($data);
  } else {
    

  }


?>
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
                <h6 class="c-grey-900">Edit event</h6>
                <div class="mT-30">
                  <form id="form" class="editEvent">

                    <div class="form-group">
                      <label for="evnt_name">Title of Events</label>
                      <input name="evnt_name" type="text" class="form-control" id="evnt_name" value="<?php echo $evnt_name;?>">
                    </div>

                    <div class="form-row">

                      <div class="form-group col-md-6">
                        <label for="evnt_image">Image of the Event</label>
                        <input name="evnt_image" type="file" class="form-control" id="evnt_image" value="<?php echo $evnt_image;?>">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="evnt_date">Date of Event</label>
                        <input name="evnt_date" type="date" class="form-control" id="evnt_date" value="<?php echo $evnt_date;?>">
                      </div>

                    </div>

                    <div class="form-group">
                      <label for="evnt_des">Description of Events</label>
                      <textarea name="evnt_des" type="text" class="form-control" rows="6" id="evnt_des" placeholder="Description of Event"><?php echo $evnt_name;?>"</textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Add Event</button>

                  </form>
                </div>
              </div>
            </div>
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
  <script src="lib/back.js"></script>

</body>

</html>