<?php

namespace App\Builder\Form\Controls;

class Radio extends Control
{
    public  $list,
            $type;

    function __construct() {
        $this->type = 'radio';
    }

    static function make($labelName,$name)
    {
        $self = new self();

        $self->labelName = $labelName;
        $self->name = $name;

        // 删除空属性
        $self->unsetNullProperty();
        return $self;
    }

    public function list($list)
    {
        $this->list = $list;
        return $this;
    }
}
