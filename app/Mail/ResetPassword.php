<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
//use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
//use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
 
//class MailResetPasswordToken extends Notification

class ResetPassword extends Notification
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $token;

    public function __construct($token)
    {
        $this->token=$token;
    }


    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function toMail($notifiable)
        {
            return (new MailMessage)
                        ->subject("Reset your password")
                        ->line("Hey, did you forget your password? Click the button to reset it.")
                        ->action('Reset Password', url('password/reset', $this->token))
                        ->line('Thankyou for being a friend');
        }
}
