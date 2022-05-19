<?php

namespace Farooq\UnitPicker;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Fields\Text;

class UnitPicker extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'unit-picker';

    public function hues(array $hues)
    {
        return $this->withMeta(['hues' => $hues]);
    }
}
