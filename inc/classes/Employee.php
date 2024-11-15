<?php

class Employee extends DatabaseObject
{
    public   $id;
    public  $name;
    public  $position;
    public  $office;
    public  $age;
    public  $start_date;
    public  $salary;


//public $last_time;
//public $host;

    protected static $table_name = "employees";
    protected static $db_fields = ['id', 'name', 'position', 'office', 'age', 'start_date', 'salary'];

    public static $required_fields = ['name'];

    protected static $db_fields_table_display_short = ['id', 'name', 'position', 'salary'];

    protected static $db_fields_table_display_full = ['id', 'name', 'position', 'office', 'age', 'start_date', 'salary'];

    protected static $db_field_exclude_table_display_sort = null;

    public static $get_form_element = ['name', 'position', 'office', 'age', 'start_date', 'salary'];
    public static $get_form_element_others = array();

    protected static $form_properties = array(
        "name" => array("type" => "text",
            "name" => 'ip',
            "label_text" => "ip",
            "placeholder" => "ip",
            "required" => true,
        ),

        "salary" => array("type" => "number",
            "name" => 'salary',
            "id" => "login_failed",
            "label_text" => "login_failed",
            'min' => 0,
            "placeholder" => "login_failed",
            "required" => false,
        ),
    );


    protected static $form_properties_search = [
        "search_all" => ["type" => "text",
            "name" => 'search_all',
            "label_text" => "",
            "placeholder" => "Search all",
            "required" => false,
        ],
        "download_csv" => array("type" => "radio",
            [0,
                [
                    "label_all" => "Dnld csv",
                    "name" => "download_csv",
                    "label_radio" => "non",
                    "value" => "No",
                    "id" => "visible_no",
                    "default" => true]],
            [1,
                [
                    "label_all" => "Dnld csv",
                    "name" => "download_csv",
                    "label_radio" => "oui",
                    "value" => "Yes",
                    "id" => "visible_yes",
                    "default" => true]],
        ),
        "id" => ["type" => "number",
            "name" => 'id',
            "id" => "search_id",
            "label_text" => "",
            'min' => 0,
            "placeholder" => "ID",
            "required" => false,
        ],
        "name" => array("type" => "select",
            "name" => 'login_failed',
            "id" => "search_login_failed",
            "class" => "BlacklistIp",
            "label_text" => "",
            "select_option_text" => 'login_failed',
            'field_option_0' => "login_failed",
            'field_option_1' => "login_failed",
            "required" => false,
        ),
    ];

    public static $db_field_search = ['search_all', 'id', 'name', 'position', 'office', 'age', 'start_date', 'salary'];


    public static $page_name = "Employee";
//    public static $page_manage="manage_blacklist.php";
//    public static $page_new="new_blacklist.php";
//    public static $page_edit="edit_blacklist.php";
//    public static $page_delete="delete_blacklist.php";


    public static $page_manage = "/public/admin/crud/ajax/manage_ajax.php?class_name=" . __CLASS__; // "manage_links.php";
    public static $page_new = "/public/admin/crud/ajax/new_ajax.php?class_name=" . __CLASS__;
    public static $page_edit = "/public/admin/crud/ajax/edit_ajax.php?class_name=" . __CLASS__;
    public static $page_delete = "/public/admin/crud/ajax/delete_ajax.php?class_name=" . __CLASS__;
    public static $position_table = "positionRight"; // positionLeft // positionBoth  positionRight


    public static function datatable_get_column_config_type($field)
    {
        $data = [
            'id' => 'num',
            'name' => 'string',
            'position' => 'string',
            'office' => 'string',
            'age' => 'num',
            'start_date' => 'date',
            'salary' => 'num-fmt'
        ];
        return $data[$field];
    }

    public static function datatable_data_to_display($result,$is_position = true)
    {
        // $is_position = true is working only
        $is_position = true;
        $data = [];
        foreach ($result as $row) {
//            $editButton = "<a href='edit.php?id=" . $row->id . "' class='btn btn-primary custom-samesize-btn'>Edit</a>";
//            $deleteButton = "<a href='delete.php?id=" . $row->id . "' class='btn btn-danger custom-samesize-btn'>Delete</a>";
//            $copyButton = "<a href='new.php?copy_id=" . $row->id . "' class='btn btn-info custom-samesize-btn'>Copy</a>";
//            $reviewButton = "<a href='review.php?id=" . $row->id . "' class='btn btn-success custom-samesize-btn'>Review</a>";

            $actionButton = get_action_button(id:$row->id, edit: "edit.php", delete: "delete.php", copy: "new.php", review: "review.php");

            $ageLabel = ($row->age > 30) ? "<span class='badge bg-warning'>" . $row->age . "</span>" : $row->age;
            $startDate = date("Y-m-d", strtotime($row->start_date));
            $startDate = date("d.m.Y", strtotime($row->start_date));
            $salary = "$" . number_format($row->salary, 2);

            if ($is_position) {
                $data[] = [
                    '<button class="btn btn-sm btn-primary toggle-details">+</button>',
                    $row->id,
                   hspc($row->name),
                    hspc($row->position),
                    hspc($row->office),
                    "<span style='display:none;'>{$row->age}</span>" . $ageLabel, // Hidden age for sorting
                    "<span style='display:none;'>{$row->start_date}</span>" . $startDate, // Hidden start date for sorting
                    "<span style='display:none;'>{$row->salary}</span>" . $salary, // Hidden salary for sorting
                    $actionButton //$editButton . " " . $deleteButton
                ];
            } else {
                $data[] = [
                    "+"=>'<button class="btn btn-sm btn-primary toggle-details">+</button>',
                    "id" =>$row->id,
                    "name" => hspc($row->name),
                    "position" => hspc($row->position),
                    "office" => hspc($row->office),
                    "age" => "<span style='display:none;'>{$row->age}</span>" . $ageLabel, // Hidden age for sorting
                    "start_date" => "<span style='display:none;'>{$row->start_date}</span>" . $startDate, // Hidden start date for sorting
                    "salary" => "<span style='display:none;'>{$row->salary}</span>" . $salary, // Hidden salary for sorting
                    "actions" =>$actionButton,// $editButton . " " . $deleteButton,
                ];
            }


        }
        return $data;
    }


}