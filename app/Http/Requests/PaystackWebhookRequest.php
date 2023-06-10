<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class PaystackWebhookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->isFromTrustedIP();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [];
    }

    /**
     * Determine if the request is truly from Paystack.
     *
     * @return bool
     */
    public function isFromTrustedIP()
    {
        return collect(['52.31.139.75', '52.49.173.169', '52.214.14.220'])
            ->when(app()->environment('local'))->add('127.0.0.1')
            ->contains($this->ip());
    }

    /**
     * Handle a passed validation attempt.
     *
     * @return void
     */
    public function passedValidation()
    {
        Log::channel('webhook')->info($this->all());
    }
}
