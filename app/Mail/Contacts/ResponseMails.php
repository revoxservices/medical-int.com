<?php

namespace App\Mail\Contacts;

use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailable;


class ResponseMails extends Mailable
{
    use Dispatchable,  InteractsWithQueue, SerializesModels;

    public $contact;
    public $token;
    public $date;
    public $firstname;
    public $email;
    public $lastname;

    public function __construct($contact){
        $this->contact = $contact;
        $this->token = $contact->token;
        $this->email = $contact->email;
        $this->firstname = $contact->firstname;
        $this->lastname = $contact->lastname;
        $this->date = $contact->created_at;
    }

    public function build(){
                return $this->subject("Respuesta Automatica - Contactenos")
                        ->to($this->email)
                        ->markdown('mailers.contacts.response')
                        ->with([
                            'names' => ucwords($this->firstname)." ".ucwords($this->lastname),
                            'token' => $this->token,
                            'date' => $this->date
            ]);


    }


}
