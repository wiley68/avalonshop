<?php
namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailBase;

class VerifyEmail extends VerifyEmailBase
{
//    use Queueable;

    // change as you want
    public function toMail($notifiable)
    {
        if (static::$toMailCallback) {
            return call_user_func(static::$toMailCallback, $notifiable);
        }
        return (new MailMessage)
            ->subject('Потвърди Email адреса')
            ->line('Моля кликнете върху бутона по-долу за да потвърдите Вашия email адрес.')
            ->action(
                'Потвърди Email адреса',
                $this->verificationUrl($notifiable)
            )
            ->line('Ако нямате създаден профил, то няма нужда да предприемате нищо.');
    }
}
