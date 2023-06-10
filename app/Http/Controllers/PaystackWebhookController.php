<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaystackWebhookRequest;

class PaystackWebhookController extends Controller
{
    public function __invoke(PaystackWebhookRequest $request)
    {
        event($request->event, (object) $request->data);
    }
}
