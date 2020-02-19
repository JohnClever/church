<?php
include 'db.php';

if(isset($_POST)) {

    $response = array();
    $response['status'] = '';
    $response['message'] = ''; 

    switch ($_POST['target']) {
        case 'addEvent':
            $data = array();

            foreach ($_POST as $key => $value) {
                if(empty($value)) {
                    $data[$key] = 'empty';
                    $response['message'] = 'Empty Fields'; 
                    $response['status'] = 'error';
                }
            }

            extract($_POST);

            if($response['status'] != 'error') {
                if(!isset($_FILES['evnt_image']) || empty($_FILES['evnt_image'])) {
                    $data['evnt_image'] = 'No file selected';
                    $response['status'] = 'error';
                    $response['message'] = 'No image uploaded';

                } else {
                    extract($_FILES);

                    $fileType = explode('/', $evnt_image['type']);
                    $fileType = end($fileType);

                    if(!in_array(strtolower($fileType), array('jpeg', 'jpg', 'png'))) {
                        $data['evnt_image'] = 'File is invalid';
                        $response['status'] = 'error';
                        $response['message'] = 'Invalid file format, Please select either png, jpeg, jpg formats!!!';

                    } else {
                        $filename = uniqid('event').'.'.strtolower($fileType);
                        $file_dest = '../images/'.$filename;

                        if(move_uploaded_file($evnt_image['tmp_name'], $file_dest)) {
                            $sql = "INSERT INTO events (evnt_name, evnt_des, evnt_date, evnt_image) VALUES ('$evnt_name', '$evnt_des', '$evnt_date', '$filename')";
                            $query = mysqli_query($conn, $sql);

                            if($query) {
                                $response['status'] = 'success';
                                $response['message'] = 'Data entered successfully';
                            } else {
                                $response['status'] = 'error';
                                $response['message'] = 'Opps, Couldn\'t stored data!!!';
                            }

                        } else {
                            $response['status'] = 'error';
                            $response['message'] = 'Couldn\'t upload file!!!';
                        }
                    }
                }
            }

            $response['data'] = $data;
            echo json_encode($response);

            break;
        

        case 'editEvent':
            $data = array();

            foreach ($_POST as $key => $value) {
                if(empty($value)) {
                    $data[$key] = 'empty';
                    $response['message'] = 'Empty Fields'; 
                    $response['status'] = 'error';
                }
            }

            extract($_POST);

            if($response['status'] != 'error') {
                if(!isset($_FILES['evnt_image']) || empty($_FILES['evnt_image'])) {
                    $sql = "UPDATE events SET evnt_name = '$evnt_name', evnt_des = '$evnt_des', evnt_date = '$evnt_date' WHERE id = $id";
                    $query = mysqli_query($conn, $sql);

                    if($query) {
                        $response['status'] = 'success';
                        $response['message'] = 'Data update successfully';
                    } else {
                        $response['status'] = 'error';
                        $response['message'] = 'Opps, Couldn\'t update data!!!';
                    }


                } else {
                    extract($_FILES);

                    $fileType = explode('/', $evnt_image['type']);
                    $fileType = end($fileType);

                    if(!in_array(strtolower($fileType), array('jpeg', 'jpg', 'png'))) {
                        $data['evnt_image'] = 'File is invalid';
                        $response['status'] = 'error';
                        $response['message'] = 'Invalid file format, Please select either png, jpeg, jpg formats!!!';

                    } else {
                        $filename = uniqid('event').'.'.strtolower($fileType);
                        $file_dest = '../images/'.$filename;

                        if(move_uploaded_file($evnt_image['tmp_name'], $file_dest)) {
                            $sql = "UPDATE events SET evnt_name = '$evnt_name', evnt_des = '$evnt_des', evnt_date = '$evnt_date', evnt_image = '$evnt_image' WHERE id = $id";
                            $query = mysqli_query($conn, $sql);

                            if($query) {
                                $response['status'] = 'success';
                                $response['message'] = 'Data updated successfully';
                            } else {
                                $response['status'] = 'error';
                                $response['message'] = 'Opps, Couldn\'t update data!!!';
                            }

                        } else {
                            $response['status'] = 'error';
                            $response['message'] = 'Couldn\'t upload file!!!';
                        }
                    }
                }
            }

            $response['data'] = $data;
            echo json_encode($response);

            break;

        case 'addSermon':
            $data = array();

            foreach ($_POST as $key => $value) {
                if(empty($value)) {
                    $data[$key] = 'empty';
                    $response['message'] = 'Empty Fields'; 
                    $response['status'] = 'error';
                }
            }

            extract($_POST);

            if($response['status'] != 'error') {
                if(!isset($_FILES['serm_audio']) || empty($_FILES['serm_audio'])) {
                    $data['serm_audio'] = 'No file selected';
                    $response['status'] = 'error';
                    $response['message'] = 'No image uploaded';

                } else {
                    extract($_FILES);

                    $fileType = explode('/', $serm_audio['type']);
                    $fileType = end($fileType);

                    if(!in_array(strtolower($fileType), array('mp4', 'mp3', 'wav'))) {
                        $data['evnt_image'] = 'File is invalid';
                        $response['status'] = 'error';
                        $response['message'] = 'Invalid file format, Please select either mp3, mp4, wav formats!!!';

                    } else {
                        $filename = uniqid('sermons').'.'.strtolower($fileType);
                        $file_dest = '../sermons/'.$filename;

                        if(move_uploaded_file($evnt_image['tmp_name'], $file_dest)) {
                            $sql = "INSERT INTO sermons (serm_title, serm_date, serm_preacher, serm_audio) VALUES ('$serm_title', '$serm_date', '$serm_preacher', '$serm_audio')";
                            $query = mysqli_query($conn, $sql);

                            if($query) {
                                $response['status'] = 'success';
                                $response['message'] = 'Data entered successfully';
                            } else {
                                $response['status'] = 'error';
                                $response['message'] = 'Opps, Couldn\'t stored data!!!';
                            }

                        } else {
                            $response['status'] = 'error';
                            $response['message'] = 'Couldn\'t upload file!!!';
                        }
                    }
                }
            }

            $response['data'] = $data;
            echo json_encode($response);

            break;
        
        default:
           
            break;
    }

}