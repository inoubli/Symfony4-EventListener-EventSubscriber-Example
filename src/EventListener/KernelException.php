<?php


namespace App\EventListener;


class KernelException
{
//    To check this event_listener, tape any mistaken url in your browser, to get kernel exeption
//    for example http://localhost:8000/api/bla-bla
//    You should see the echo 'something wrong happened ! exeption event listener successfuly fired :D ' from our KernelException class;
    public function onKernelException()
    {
        echo '<br> something wrong happened ! exeption event listener successfuly fired :D ';
    }

}