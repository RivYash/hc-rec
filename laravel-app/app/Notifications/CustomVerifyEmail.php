<?php

// namespace App\Notifications;

// use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailNotification;
// use Illuminate\Bus\Queueable;
// use Illuminate\Notifications\Messages\MailMessage;
// use Illuminate\Support\Carbon;
// use Illuminate\Support\Facades\Config;
// use Illuminate\Support\Facades\URL;

// class CustomVerifyEmail extends VerifyEmailNotification
// {
//     use Queueable;

//     /**
//      * Get the mail representation of the notification.
//      */
//     public function toMail($notifiable): MailMessage
//     {
//         $verificationUrl = $this->verificationUrl($notifiable);

        

//         return (new MailMessage)
//                     ->subject('Verify Your Email Address')
//                     ->line('Please click the button below to verify your email address.')
//                     ->action('Verify Email', $verificationUrl)
//                     ->line('If you did not create an account, no further action is required.');
                    
//     }

//     /**
//      * Get the verification URL for the given notifiable.
//      *
//      * @param  mixed  $notifiable
//      * @return string
//      */
//     protected function verificationUrl($notifiable)
//     {
//         return URL::temporarySignedRoute(
//             'verification.verify',
//             Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
//             ['id' => $notifiable->getKey(), 'hash' => sha1($notifiable->getEmailForVerification())]
//         );
//     }
// }

namespace App\Notifications;

use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\URL;

class CustomVerifyEmail extends VerifyEmailNotification
{
    use Queueable;

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable): MailMessage
    {
        $verificationUrl = $this->verificationUrl($notifiable);

        return (new MailMessage)
            ->subject('High Court of Bombay at Goa')
            ->view(
                'emails.markdown.verify-email', // Path to your Blade template relative to resources/views/
                ['verificationUrl' => $verificationUrl]
            );
    }

    /**
     * Get the verification URL for the given notifiable.
     *
     * @param  mixed  $notifiable
     * @return string
     */
    protected function verificationUrl($notifiable)
    {
        return URL::temporarySignedRoute(
            'verification.verify',
            Carbon::now()->addMinutes(Config::get('auth.verification.expire', 60)),
            ['id' => $notifiable->getKey(), 'hash' => sha1($notifiable->getEmailForVerification())]
        );
    }
}
