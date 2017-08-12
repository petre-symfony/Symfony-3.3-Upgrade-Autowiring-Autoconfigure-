<?php

namespace AppBundle\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class AddNiceHeaderSubscriber implements EventSubscriberInterface {
  public function onKernelResponse(FilterResponseEvent $event){
    $event->getResponse()->headers
      ->set('X-NICE-MESSAGE', 'That was a great request');
  } 
  
  public static function getSubscribedEvents() {
    return [
      KernelEvents::RESPONSE => 'onKernelResponse'
    ];
  }

}