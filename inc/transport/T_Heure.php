<?php

/**
 * Created by PhpStorm.
 * User: kamy3
 * Date: 4/26/2017
 * Time: 2:55 AM
 */
class T_Heure extends DatabaseObjectAccess
{

    protected static $table_name = "T_Heure";

    protected static $db_fields = ['id', 'Heure', 'Heure_format', 'Heure_ID',];
    protected static $db_fields_table_display_short = ['id', 'Heure', 'Heure_format', 'Heure_ID',];
    protected static $db_fields_table_display_full = ['id', 'Heure', 'Heure_format', 'Heure_ID',];

    public $id;
    public $Heure;
    public $Heure_format;
    public $Heure_ID;

}