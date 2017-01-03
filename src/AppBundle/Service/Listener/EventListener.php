<?php
/**
 * Created by PhpStorm.
 * User: jeremie
 * Date: 03/01/17
 * Time: 11:25
 */

namespace AppBundle\Service\Listener;


use AppBundle\Entity\Event;
use AppBundle\Service\Utils\StringUtils;
use Doctrine\Common\Persistence\Event\LifecycleEventArgs;

class EventListener
{
    private $stringUtils;

    public function __construct(StringUtils $stringUtils){
        $this->stringUtils = $stringUtils;
    }

    public function prePersist(Event $eventEntity, LifecycleEventArgs $event){
        $eventEntity->setSlug($this->stringUtils->getSlug($eventEntity->getName()." ".$eventEntity->getDatetime()->format('Y-m-d H:i:s')));
    }

    public function preUpdate(Event $event, PreUpdateEventArgs $event)
    {
        dump($event);die();
    }

}