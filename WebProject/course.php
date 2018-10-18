<?php

class Course
{
    private $studentList;
    private $classDate;
    private $courseName;
    private $courseId;

    public function __construct($studentList, $classDate, $courseName, $courseId)
    {
        $this->studentList = [];
        $this->classDate = $classDate;
        $this->courseId = $courseId;
        $this->courseName = $courseName;
    }

    public function getClassDate()
    {
        return $this->classDate;
    }

    public function setClassDate($classDate)
    {
        $this->classDate = $classDate;
    }

    public function getCourseName()
    {
        return $this->courseName;
    }

    public function setCourseName($courseName)
    {
        $this->courseName = $courseName;
    }

    public function getCourseId()
    {
        return $this->courseId;
    }

    public function setCourseId($courseId)
    {
        $this->courseId = $courseId;
    }
}
