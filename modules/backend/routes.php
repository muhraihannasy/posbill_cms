<?php

/**
 * Register Backend routes before all user routes.
 */
App::before(function ($request) {

    /**
     * @event backend.beforeRoute
     * Fires before backend routes get added
     *
     * Example usage:
     *
     *     Event::listen('backend.beforeRoute', function () {
     *         // your code here
     *     });
     *
     */
    Event::fire('backend.beforeRoute');

    /*
     * Other pages
     */
    Route::group([
            'middleware' => ['web'],
            'prefix' => Config::get('cms.backendUri', 'backend')
        ], function () {
            Route::any('{slug}', 'Backend\Classes\BackendController@run')->where('slug', '(.*)?');
        })
    ;

    /*
     * Entry point
     */
    Route::any(Config::get('cms.backendUri', 'backend'), 'Backend\Classes\BackendController@run')->middleware('web');

    /**
     * @event backend.route
     * Fires after backend routes have been added
     *
     * Example usage:
     *
     *     Event::listen('backend.route', function () {
     *         // your code here
     *     });
     *
     */
    Event::fire('backend.route');

        Route::get('/data-contact/{name}/{emai}/{phone}/{address}/{detail}/{report}', function($name, $emai, $phone, $address, $detail, $report) {
        $to = "muhraihannasy@gmail.com";
        $subject = "HTML email";

        // $message = "
        // <html>
        // <head>
        // <title>HTML email</title>
        // </head>
        // <body>
        // <p>This email contains HTML Tags!</p>
        // <table>
        // <tr>
        // <th>Firstname </th>
        // <th>Lastname </th>
        // <th>Phone </th>
        // <th>Company Name </th>
        // <th>Question</th>
        // </tr>
        // <tr>
        // <td>Firstname : $fName</td>
        // <td>Lastname : $lName</td>
        // <td>Phone : $pNumber</td>
        // <td>Company Name : $cName</td>
        // <td>Question : $question</td>
        // </tr>
        // </table>
        // </body>
        // </html>
        // ";

        //      <div>
        // 	<span>Nama Depan :</span>
        // 	<span>$fName</span>
        // </div>
        // <div>
        // 	<span>Nama Depan :</span>
        // 	<span>$lName</span>
        // </div>
        // <div>
        // 	<span>Nomor Telepon :</span>
        // 	<span>$pNumber</span>
        // </div>
        // <div>
        // 	<span>Email:</span>
        // 	<span>$email</span>s
        // </div>
        // <div>
        // 	<span>Nama Perusahaan :</span>
        // 	<span>$cName</span>
        // </div>
        // <div>
        // 	<span>Pertanyaan :</span>
        // 	<span>$question</span>
        // </div>

        // Always set content-type when sending HTML email
        // $headers = "MIME-Version: 1.0" . "\r\n";
        // $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // // More headers
        // $headers .= "From: <$email>" . "\r\n";
        // $headers .= 'Cc: muhraihannasy@gmail.com' . "\r\n";

        // mail($to,$subject,$message,$headers);

        // Mail::to("muhraihannasy@gmail.com")->send("Hellol");

        return "Hello Raihan";
    });
});
