<?php

/**
 * Description of ActivityTypes
 *
 * @author U s E r ¨
 */
class ActivityType {

    public $id;
    public $name;
    public $short_description;
    public $description;
    public $image_name;
    public $sort;

    public function __construct($id) {
        if ($id) {

            $db = new Database();

            $id = mysql_real_escape_string($id);



            $query = "SELECT * FROM `tour_type` WHERE `id`=" . $id;



            $result = mysql_fetch_array($db->readQuery($query));

            $this->id = $result['id'];
            $this->name = $result['name'];
            $this->short_description = $result['short_description'];
            $this->description = $result['description'];
            $this->image_name = $result['image_name'];
            $this->sort = $result['sort'];

            return $this;
        }
    }

    public function create() {

        $db = new Database();

        $name = mysql_real_escape_string($this->name);
        $short_description = mysql_real_escape_string($this->short_description);
        $description = mysql_real_escape_string($this->description);


        $query = "INSERT INTO `tour_type` (`name`,`short_description`,`image_name`,`description`,`sort`) VALUES  ('"
                . $name . "', '"
                . $short_description . "', '"
                . $this->image_name . "', '"
                . $description . "', '"
                . $this->sort . "')";



        $result = $db->readQuery($query);

        if ($result) {
            $last_id = mysql_insert_id();

            return $this->__construct($last_id);
        } else {
            return FALSE;
        }
    }

    public function all() {

        $query = "SELECT * FROM `tour_type` ORDER BY sort ASC";
        $db = new Database();
        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function update() {

        $db = new Database();

        $name = mysql_real_escape_string($this->name);
        $short_description = mysql_real_escape_string($this->short_description);
        $description = mysql_real_escape_string($this->description);


        $query = "UPDATE  `tour_type` SET "
                . "`name` ='" . $name . "', "
                . "`short_description` ='" . $short_description . "', "
                . "`image_name` ='" . $this->image_name . "', "
                . "`description` ='" . $description . "', "
                . "`sort` ='" . $this->sort . "' "
                . "WHERE `id` = '" . $this->id . "'";


        $result = $db->readQuery($query);

        if ($result) {
            return $this->__construct($this->id);
        } else {
            return FALSE;
        }
    }

    public function delete() {

        unlink(Helper::getSitePath() . "upload/tour_type/" . $this->image_name);

        $query = 'DELETE FROM `tour_type` WHERE id="' . $this->id . '"';

        $db = new Database();

        return $db->readQuery($query);
    }

    public function GetActivityTypeById($id) {

        $query = "SELECT * FROM `tour_type` WHERE `id` = '" . $id . "' ORDER BY `sort` ASC";

        $db = new Database();

        $result = $db->readQuery($query);
        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function arrange($key, $img) {
        $query = "UPDATE `tour_type` SET `sort` = '" . $key . "'  WHERE id = '" . $img . "'";
        $db = new Database();
        $result = $db->readQuery($query);
        return $result;
    }

}
