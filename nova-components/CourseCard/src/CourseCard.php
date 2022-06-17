<?php

namespace Farooq\CourseCard;

use Laravel\Nova\ResourceTool;

class CourseCard extends ResourceTool
{
    /**
     * Get the displayable name of the resource tool.
     *
     * @return string
     */
    public function name()
    {
        return 'Course Card';
    }

    /**
     * Get the component name for the resource tool.
     *
     * @return string
     */
    public function component()
    {
        return 'course-card';
    }
}
