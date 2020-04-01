<?php

include_once(dirname(__FILE__) . '/../../class/include.php');

if (isset($_POST['create'])) {

    $PAGES = new Page(NULL);
    $VALID = new Validator();

    $PAGES->title = $_POST['title'];
    $PAGES->description = $_POST['description'];

    $dir_dest = '../../upload/page/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 770;
        $handle->image_y = 400;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $PAGES->image_name = $imgName;
    $PAGES->create();
    $result = ["status" => 'success'];
    echo json_encode($result);
    exit();
}

if (isset($_POST['update'])) {
    $dir_dest = '../../upload/page/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_body = TRUE;
        $handle->file_overwrite = TRUE;
        $handle->file_new_name_ext = FALSE;
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = $_POST ["oldImageName"];
        $handle->image_x = 770;
        $handle->image_y = 400;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $PAGES = new Page($_POST['id']);

    $PAGES->image_name = $_POST['oldImageName'];
    $PAGES->title = $_POST['title'];
    $PAGES->description = $_POST['description'];
    $PAGES->update();
    $result = ["id" => $_POST['id']];
    echo json_encode($result);
    exit();
}