<?php

namespace MVC\Models;

use MVC\Core\ResourceModel;
use MVC\Models\PersonModel;

class PersonResourceModel extends ResourceModel
{
    public function __construct(){
        parent::_init("person","id",new PersonModel());
    }
}