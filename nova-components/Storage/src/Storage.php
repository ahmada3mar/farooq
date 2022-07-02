<?php

namespace Farooq\Storage;

use Laravel\Nova\Card;

class Storage extends Card
{

    public function __construct()
    {
        parent::__construct();
        $this->withMeta(['total_disk' => disk_total_space("/") , "free_disk" => disk_free_space("/")]);
    }

    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = '1/2';

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'storage';
    }
}
