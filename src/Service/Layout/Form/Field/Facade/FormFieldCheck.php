<?php

namespace Dvi\Support\Service\Layout\Form\Field\Facade;

/**
 * @author     Davi Menezes
 * @copyright  Copyright (c) 2019. (davimenezes.dev@gmail.com)
 * @see https://github.com/DaviMenezes
 */
class FormFieldCheck extends FormFieldItems
{
    public function asButton()
    {
        $this->field->setUseButton();
        return $this;
    }
}
