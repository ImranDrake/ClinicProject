<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class StripeCheckout extends Component
{

    public function create()
    {
        
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $checkout_session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'inr',
                    'unit_amount' => 2000,
                    'product_data' => [
                        'name' => 'Stubborn Attachments',
                        'images' => ["https://i.imgur.com/EHyR2nP.png"],
                    ],
                ],
                'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => route('success'),
                'cancel_url' => route('cancel'),
            ]);
    
            return redirect()->to($checkout_session->url);
        }
    public function render()
    {
        return view('livewire.stripe-checkout');
    }
}
