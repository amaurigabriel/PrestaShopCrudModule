<?php
require_once _PS_MODULE_DIR_ . 'crud/classes/CrudModel.php';
class AdminCrudModelsController extends ModuleAdminController
{
    public function __construct()
    {
        $this->bootstrap  = true;
        $this->table      = 'crud_model';
        $this->identifier = 'id';
        $this->className  = 'CrudModel';

        parent::__construct();

        //data to the grid of the "view" action
        $this->fields_list = [
            'id'       => [
                'title' => $this->l('ID'),
                'type'  => 'text',
                'align' => 'center',
                'class' => 'fixed-width-xs',
            ],
            'name'     => [
                'title' => $this->l('Name'),
                'type'  => 'text',
            ],
            'active'   => [
                'title'  => $this->l('Status'),
                'active' => 'status',
                'align'  => 'text-center',
                'type'   => 'bool',
                'class'  => 'fixed-width-sm',
            ],
            'date_add' => [
                'title' => $this->l('Created'),
                'type'  => 'datetime',
            ],
            'date_upd' => [
                'title' => $this->l('Updated'),
                'type'  => 'datetime',
            ],
        ];

        $this->actions = ['edit', 'delete'];

        $this->bulk_actions = array(
            'delete' => array(
                'text'    => $this->l('Delete selected'),
                'icon'    => 'icon-trash',
                'confirm' => $this->l('Delete selected items?'),
            ),
        );

        //fields to add/edit form
        $this->fields_form = [
            'legend' => [
                'title' => $this->l('General Information'),
            ],
            'input'  => [
                'name'   => [
                    'type'     => 'text',
                    'label'    => $this->l('Name'),
                    'name'     => 'name',
                    'required' => true,
                ],
                'active' => [
                    'type'   => 'switch',
                    'label'  => $this->l('Active'),
                    'name'   => 'active',
                    'values' => [
                        [
                            'id'    => 'active_on',
                            'value' => 1,
                            'label' => $this->l('Yes'),
                        ],
                        [
                            'id'    => 'active_off',
                            'value' => 0,
                            'label' => $this->l('No'),
                        ],
                    ],
                ],
            ],
            'submit' => [
                'title' => $this->l('Save'),
            ],
        ];
    }   
}
