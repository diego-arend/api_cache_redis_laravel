<?php

namespace App\Repositories;

use App\Models\Course;

class CourseRepository
{
    protected $entityCourse;

    public function __construct(Course $course)
    {
        $this->entityCourse= $course;
    }

    public function getAllCourses()
    {
        return $this->entityCourse->get();
    }
}