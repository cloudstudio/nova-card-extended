<?php

namespace Cloudstudio\CardExtended;

use Laravel\Nova\Card;

class CardExtended extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = '1/3';

    public $view;

    public $data;


    public function data($data)
    {
        $this->data = $data;
        return $this;
    }

    public function view($view)
    {
        $this->view = $view;
        return $this;
    }

    public function renderView()
    {
        return view($this->view, ['data' => $this->data])->render();
    }

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'card-extended';
    }

    public function jsonSerialize()
    {
        return array_merge([
            'data' => $this->data,
            'view' => $this->view,
            'renderview' => $this->renderView()
        ], parent::jsonSerialize());
    }
}
