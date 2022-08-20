<?php 
namespace Raihan\Contact\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Support\Facades\Input;

class ContactForm extends ComponentBase 
{
    public function componentDetails() {
        return [
            'name' => 'Contact Form',
            'description' => 'Simple Contact Form'
        ];
    }

    function onSubmitContactForm() {
            return [
            'name' => "Hello Raihan",
        ];
    }

    function onLogin()
    {
        return true;
    }

       function onSubmit()
    {
        $this->page['result'] =  Input::file('file_report');
        
        return "Helllo";
    }



}