<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Carbon\Carbon;
class FeaturedDisApproved extends Notification
{
    use Queueable;

    protected $listing;
    protected $user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($listing)
    {
        $this->listing = $listing['listing'];
        $this->user = $listing['user'];

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
            
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {      
        return [
            'listing' => $this->listing,
            'user' =>  $this->user
        ];

    }
}