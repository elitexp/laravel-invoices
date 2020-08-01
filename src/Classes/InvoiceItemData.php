<?php

namespace LaravelDaily\Invoices\Classes;


/**
 * Class InvoiceItemData
 * @package LaravelDaily\Invoices\Classes
 */
class InvoiceItemData
{
    public $custom_fields;

    /**
     * Party constructor.
     * @param $properties
     */
    public function __construct($properties=[])
    {
        $this->custom_fields = [];

        foreach ($properties as $property => $value) {
            $this->{$property} = $value;
        }
    }

    /**
     * @param $key
     * @return mixed|null
     */
    public function __get($key)
    {
        return $this->{$key} ?? null;
    }
}
