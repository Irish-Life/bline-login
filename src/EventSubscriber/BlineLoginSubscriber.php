<?php

namespace Drupal\bline_login\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Drupal\Core\Routing\TrustedRedirectResponse;


/**
 * Class BlineLoginController.
 */
class BlineLoginSubscriber implements EventSubscriberInterface {
/**
 *
 * {@inheritdoc}
*/

  static function getSubscribedEvents() {
    $events[KernelEvents::REQUEST][] = array('checkForRedirection');
    return $events;
  }

  public function checkForRedirection(GetResponseEvent $event) {
    //$res = $event->getRequest();
    $res = new TrustedRedirectResponse("https://www.irishlife.ie");
    $event->setResponse($res);
  }

}
