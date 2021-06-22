<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BookingReceived extends Notification
{
    use Queueable;

    public $data;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->from('Website Booking <bookings@aandccars.co.uk>')
            ->subject('New Booking Enquiry')
            ->greeting('New Booking Enquiry')
            ->line('Here are your booking details:')
            ->line('Name: ' . $this->data['name'])
            ->line('Contact Number: ' . $this->data['phone'])
            ->line('Email: ' . $this->data['email'])
            ->line('From: ' . $this->data['From'])
            ->line('To: ' . $this->data['To'])
            ->line('Date: ' . $this->data['Date'])
            ->line('Time: ' . $this->data['Time'])
            ->line('Flight Number: ' . $this->data['flightNumber'])
            ->line('Do they require meet and greet: ' . $this->data['meetAndGreet'])
            ->line('Do they require airport carpark: ' . $this->data['airportCarpark'])
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
