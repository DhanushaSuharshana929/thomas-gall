<?php

include_once(dirname(__FILE__) . '/../../class/include.php');



if (isset($_POST['create'])) {



    $ACTIVITY = new Activities(NULL);

    $VALID = new Validator();

    $ACTIVITY->activity_type = $_POST['activity_type'];

    $ACTIVITY->title = $_POST['title'];

    $ACTIVITY->short_description = $_POST['short_description'];

    $ACTIVITY->description = $_POST['description'];

    $dir_dest = '../../upload/activity';
    $dir_dest_thumb = '../../upload/activity/thumb/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;
    $img = Helper::randamId();

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 600;
        $handle->image_y = 435;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }


        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 148;
        $handle->image_y = 107;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $ACTIVITY->image_name = $imgName;

    $ACTIVITY->create();



    $result = ["status" => 'success'];

    echo json_encode($result);

    exit();
}



if (isset($_POST['update'])) {

   $dir_dest = '../../upload/activity/';
    $dir_dest_thumb = '../../upload/activity/thumb/';

    $handle = new Upload($_FILES['image']);

    $img = $_POST ["oldImageName"];

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 600;
        $handle->image_y = 435;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $img = $handle->file_dst_name;
        }


        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $img;
        $handle->image_x = 148;
        $handle->image_y = 107;

        $handle->Process($dir_dest_thumb);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $img = $handle->file_dst_name;
        }
    }



    $ACTIVITY = new Activities($_POST['id']);

    $ACTIVITY->activity_type = $_POST['activity_type'];

    $ACTIVITY->image_name = $_POST['oldImageName'];

    $ACTIVITY->title = $_POST['title'];

    $ACTIVITY->short_description = $_POST['short_description'];

    $ACTIVITY->description = $_POST['description'];

    $ACTIVITY->update();





    $result = ["id" => $_POST['id']];

    echo json_encode($result);

    exit();
}



if (isset($_POST['save-data'])) {



    foreach ($_POST['sort'] as $key => $img) {

        $key = $key + 1;



        $ACTIVITY = Activities::arrange($key, $img);



        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}