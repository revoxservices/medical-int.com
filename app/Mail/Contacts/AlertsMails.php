<?php

namespace App\Mail\Contacts;

use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailable;

class AlertsMails extends Mailable
{
    use Dispatchable,  InteractsWithQueue, SerializesModels;

    public $contact;
    public $token;
    public $date;
    public $firstname;
    public $lastname;

    public function __construct($contact){
        $this->contact = $contact;
        $this->token = $contact->token;
        $this->date = $contact->created_at;
        $this->firstname = $contact->firstname;
        $this->lastname = $contact->lastname;
    }

    public function build(){

            return $this->subject("Notificación BPM $this->token")
                        ->to("bpm@sandiegoses.com")
                        ->markdown('mailers.contacts.alert')
                        ->with([
                            'token' => $this->token,
                            'date' => $this->date,
                            'names' => ucwords($this->firstname)." ".ucwords($this->lastname),
            ]);

    }


}
