<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CheckoutModal extends Component
{
    /**
     * Create a new component instance.
     */
    // public function __construct()
    // {
    //     //
    // }

    /**
     * Get the view / contents that represent the component.
     */
    // public function render(): View|Closure|string
    // {
    //     return view('components.modal');
    // }


    public $title;
    public $content;
    public $cart;
    public function __construct($title, $content, $cart)
    {
        $this->title = $title;
        $this->content = $content;
        $this->cart = $cart;

        if (session()->has('cart')) {
            $this->cart = session()->get('cart');
        }
    }

    public function render()
    {
        return view('components.checkoutmodal');
    }
}