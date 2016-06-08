<?php

namespace Bolt\Extension\Bolt\BoltFormsAddon;

use Bolt\Extension\Bolt\BoltForms\Event\BoltFormsEmailEvent as EmailEvent;
use Bolt\Extension\Bolt\BoltForms\Event\BoltFormsEvents;
use Bolt\Extension\Bolt\BoltForms\Event\BoltFormsProcessorEvent as ProcessorEvent;
use Bolt\Extension\Bolt\BoltForms\Event\BoltFormsSubmissionLifecycleEvent as LifecycleEvent;
use Bolt\Extension\SimpleExtension;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * BoltForms add-on extension loader.
 *
 * @author Gawain Lynch <gawain.lynch@gmail.com>
 */
class BoltFormsAddonExtension extends SimpleExtension
{
    /**
     * {@inheritdoc}
     */
    protected function subscribe(EventDispatcherInterface $dispatcher)
    {
        $dispatcher->addListener(BoltFormsEvents::SUBMISSION_PROCESSOR,        [$this, 'onSubmissionProcessor']);
        $dispatcher->addListener(BoltFormsEvents::SUBMISSION_PRE_PROCESSOR,    [$this, 'onSubmissionPreProcessor']);
        $dispatcher->addListener(BoltFormsEvents::SUBMISSION_POST_PROCESSOR,   [$this, 'onSubmissionPostProcessor']);

        $dispatcher->addListener(BoltFormsEvents::SUBMISSION_PROCESS_FIELDS,   [$this, 'onSubmissionProcessFields']);
        $dispatcher->addListener(BoltFormsEvents::SUBMISSION_PROCESS_DATABASE, [$this, 'onSubmissionProcessDatabase']);
        $dispatcher->addListener(BoltFormsEvents::SUBMISSION_PROCESS_EMAIL,    [$this, 'onSubmissionProcessEmail']);
        $dispatcher->addListener(BoltFormsEvents::SUBMISSION_PROCESS_FEEDBACK, [$this, 'onSubmissionProcessFeedback']);
        $dispatcher->addListener(BoltFormsEvents::SUBMISSION_PROCESS_REDIRECT, [$this, 'onSubmissionProcessRedirect']);

        $dispatcher->addListener(BoltFormsEvents::DATA_CHOICE_EVENT,           [$this, 'onDataChoiceEvent']);

        $dispatcher->addListener(BoltFormsEvents::PRE_EMAIL_SEND,              [$this, 'onPreEmailSend']);
    }

    /**
     * @param ProcessorEvent $event
     */
    public function onSubmissionProcessor(ProcessorEvent $event)
    {
    }

    /**
     * @param ProcessorEvent $event
     */
    public function onSubmissionPreProcessor(ProcessorEvent $event)
    {
    }

    /**
     * @param ProcessorEvent $event
     */
    public function onSubmissionPostProcessor(ProcessorEvent $event)
    {
    }

    /**
     * @param LifecycleEvent $event
     */
    public function onSubmissionProcessFields(LifecycleEvent $event)
    {
    }

    /**
     * @param LifecycleEvent $event
     */
    public function onSubmissionProcessDatabase(LifecycleEvent $event)
    {
    }

    /**
     * @param LifecycleEvent $event
     */
    public function onSubmissionProcessEmail(LifecycleEvent $event)
    {
    }

    /**
     * @param LifecycleEvent $event
     */
    public function onSubmissionProcessFeedback(LifecycleEvent $event)
    {
    }

    /**
     * @param LifecycleEvent $event
     */
    public function onSubmissionProcessRedirect(LifecycleEvent $event)
    {
    }

    /**
     * @param Event $event
     */
    public function onDataChoiceEvent(Event $event)
    {
    }

    /**
     * @param EmailEvent $event
     */
    public function onPreEmailSend(EmailEvent $event)
    {
    }
}
