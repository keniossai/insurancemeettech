<?php

namespace App\Providers;

use App\Mail\Transports\GmailSmtpRelayTransport;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        $this->bootResponseMacros();
        $this->bootCustomBladeDirectives();
        $this->bootCustomMailTransport();
    }


    /**
     * Creates a Standard Response macro for API json responses having the standard format;
     *
     * {"status": true, "title": "Some title", "message": "Successful", "data": [a, b, c]}
     *
     */
    public function bootResponseMacros()
    {
        Response::macro('api', function ($response, $status = 200) {

            $format = ['status' => ($status < 400), 'title' => '', 'message' => '', 'data' => []];

            // For convenience, if $response is a string, we'll use it as the message...
            if (!is_array($response)) $response = ['message' => $response];

            return response(array_merge($format, $response), $status);
        });
    }


    public function bootCustomBladeDirectives()
    {
        Blade::if('admin', function (User $user = null) {
            return ($user ?? user())->isAdmin();
        });

        Blade::directive('money', function ($expression) {
            return "<?php echo number_format($expression, 2) ?>";
        });
    }


    public function bootCustomMailTransport()
    {
        Mail::extend('gmail', function (array $config = []) {
            return new GmailSmtpRelayTransport($config);
        });
    }
}
