<?php
require_once 'CustomObjectModel.php';

class CrudModel extends CrudCustomObjectModel
{
    public static $definition = [
        'table'     => 'crud_model',
        'primary'   => 'id',
        'multilang' => false,
        'fields'    => [
            'id'           => ['type' => self::TYPE_INT, 'validate' => 'isInt'],
            'name'         => ['type' => self::TYPE_STRING, 'db_type' => 'varchar(255)'],
            'active'       => ['type' => self::TYPE_BOOL, 'validate' => 'isBool', 'db_type' => 'int'],          
            'date_add'      => [
                'type'     => self::TYPE_DATE,
                'validate' => 'isDate',
                'db_type'  => 'datetime',
            ],
            'date_upd'      => [
                'type'     => self::TYPE_DATE,
                'validate' => 'isDate',
                'db_type'  => 'datetime',
            ],
        ],
    ];

    public $id;
    public $name;
    public $active;
    public $date_add;
    public $date_upd;
}
