<?php

namespace App\Builder\Form\Controls;

class Select extends Control
{
    public  $options,
            $mode,
            $type;

    function __construct() {
        $this->type = 'select';
    }

    static function make($labelName,$name)
    {
        $self = new self();

        $self->labelName = $labelName;
        $self->name = $name;

        $self->placeholder = '请选择'.$labelName;

        // 删除空属性
        $self->unsetNullProperty();
        return $self;
    }

    public function option($options)
    {
        $this->options = $options;
        return $this;
    }

    public function mode($mode)
    {
        $this->mode = $mode;
        return $this;
    }
}