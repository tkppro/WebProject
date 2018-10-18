<?php


class Student
{
    private $id;
    private $name;
    private $courseName;
    private $status;

    public function __construct($id, $name, $courseName, $status)
    {
        $this->id = $id;
        $this->name = $name;
        $this->courseName = $courseName;
        $this->status = $status;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getCourseName()
    {
        return $this->courseName;
    }

    public function setCourseName($courseName)
    {
        $this->courseName = $courseName;
    }

    public function checkIsActivate()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
}
