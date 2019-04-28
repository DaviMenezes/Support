<?php

namespace Dvi\Support\Service\Layout\Form\Field\Facade;

use Adianti\Widget\Form\TCombo;
use Adianti\Widget\Form\TDate;
use Adianti\Widget\Form\TEntry;
use Adianti\Widget\Form\THidden;
use Adianti\Widget\Form\THtmlEditor;
use Adianti\Widget\Form\TNumeric;
use Adianti\Widget\Form\TRadioGroup;
use Adianti\Widget\Form\TSpinner;
use Adianti\Widget\Form\TText;
use Dvi\Support\Service\Layout\Form\Field\Facade\FormFieldSpinner;
use Dvi\Support\Service\Layout\Form\Field\Facade\FormFieldVarchar;
use Dvi\Support\Service\Layout\Form\Field\Facade\FormFieldCombo;
use Dvi\Support\Service\Layout\Form\Field\Facade\FormFieldDate;
use Dvi\Support\Service\Layout\Form\Field\Facade\FormFieldItems;
use Dvi\Support\Service\Layout\Form\Field\Facade\FormFieldRadio;
use Dvi\Support\Service\Layout\Form\Field\Facade\FormField;

/**
 * FormFieldFacade
 * Obtém campos de formulários
 * @see http://github.com/DaviMenezes
 */
class FormFieldFacade
{
    public static function varchar($name, $label = null):FormFieldVarchar
    {
        $formField = new FormFieldVarchar(new TEntry($name), $label);

        return $formField;
    }

    public static function hidden($name, $label = null)
    {
        $formField = new FormField(new THidden($name), $label);

        return $formField;
    }

    public static function text(string $name, $label = null)
    {
        $formField = new FormField(new TText($name), $label);

        return $formField;
    }

    public static function numeric(string $name, $decimal, $decimal_separator, $thousandSeparator, $replaceOnPost = true, $label = null)
    {
        $formField = new FormField(new TNumeric($name, $decimal, $decimal_separator, $thousandSeparator, $replaceOnPost), $label);

        return $formField;
    }

    public static function combo(string $name, $label = null)
    {
        $formField = new \Dvi\Support\Service\Layout\Form\Field\Facade\FormFieldCombo(new TCombo($name), $label);

        return $formField;
    }

    public static function html($name, $label = null)
    {
        $field = new FormField(new THtmlEditor($name), $label);

        return $field;
    }

    public static function spinner(string $name, $label = null)
    {
        $formField = new FormFieldSpinner(new TSpinner($name), $label);
        $formField->range(1, 2000, 1);

        return $formField;
    }

    public static function radio(string $name, $label = null)
    {
        $formField = new FormFieldRadio(new TRadioGroup($name), $label);
        return $formField;
    }

    public static function date(string $name, $label = null)
    {
        $field = new \Dvi\Support\Service\Layout\Form\Field\Facade\FormFieldDate(new TDate($name), $label);
        return $field;
    }
}