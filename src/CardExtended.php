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


    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    public function data($data)
    {
        return $this->withMeta(['data' => $data]);
    }


    public function view($view, $data)
    {
        $renderView = view($view, ['data' => $data])->render();
        return $this->withMeta(['view' => $renderView]);
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
}
