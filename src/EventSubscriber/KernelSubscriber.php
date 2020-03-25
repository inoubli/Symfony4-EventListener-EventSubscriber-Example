<?php


namespace App\EventSubscriber;



use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;

class KernelSubscriber implements EventSubscriberInterface
{
//    To check this event_subscriber, tape any mistaken url in your browser, to get kernel exeption
//    for example http://localhost:8000/api/bla-bla
//    You should see the echo 'something wrong happened ! exeption event subscriber successfuly fired :D ' from our created method showErrorMsg()
    public static function getSubscribedEvents()
    {
        return [
          KernelEvents::EXCEPTION => [
              ['showErrorMsg', 10]
          ]
        ];
    }

    public function showErrorMsg()
    {
        echo '<br> something wrong happened ! exeption event subscriber successfuly fired :D ';
    }
}