<?php

namespace App\Notifications;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactNotification extends Notification
{
    use Queueable;

    /**
     * @var Contact
     */
    public $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }


    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('Une nouvelle demande de contact a bien été ajouter')
                    ->line('Nom et prénom : ' . $this->contact->name)
                    ->line('adresse E-mail : ' . $this->contact->email)
                    ->line('Numéro de Téléphone : ' . $this->contact->phone);
    }

}
