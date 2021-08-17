<?php

namespace MVC\Models;

use MVC\Core\Model;

class TaskModel extends Model
{
    protected $id;
    protected $title;
    protected $description;

    /**
     * @param $id
     * @param $title
     * @param $description
     */
    public function __construct(){

    }
//    public function __construct($id, $title, $description)
//    {
//        $this->id = $id;
//        $this->title = $title;
//        $this->description = $description;
//    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }


}

?>