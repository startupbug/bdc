<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Carbon\Carbon;
class InnovatorRequestServiceApproved extends Notification
{
    use Queueable;

    protected $user;
    protected $request;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($listing)
    {
        $this->request = $listing['request'];
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
            'request' => $this->request,
            'user' =>  $this->user
        ];

    }
}
