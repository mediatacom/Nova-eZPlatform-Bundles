<?php

/**
 * NovaeZSlackBundle Bundle.
 *
 * @package   Novactive\Bundle\eZSlackBundle
 *
 * @author    Novactive <s.morel@novactive.com>
 * @copyright 2018 Novactive
 * @license   https://github.com/Novactive/NovaeZSlackBundle/blob/master/LICENSE MIT Licence
 */

declare(strict_types=1);

namespace Novactive\Bundle\eZSlackBundle\Core\Slack\Interaction\Provider\Attachment;

use Novactive\Bundle\eZSlackBundle\Core\Slack\Attachment;
use Novactive\Bundle\eZSlackBundle\Core\Slack\Field;
use Symfony\Contracts\EventDispatcher\Event;

/**
 * Class Form.
 */
class Form extends AttachmentProvider
{
    public function getAttachment(Event $event): ?Attachment
    {
        if (is_a($event, 'EzSystems\EzPlatformFormBuilder\Event\FormSubmitEvent') === false) {
            return null;
        }
        $form = $event->getForm();
//        $form = $this->formService->loadForm($signal->formId);
//        $attachment = new Attachment();
//        $attachment->setTitle($form->name.' - FormId:'.$form->id);
//        $attachment->setText($form->description);
//        $attachment->setCallbackId($this->getAlias().'.'.time());
//        foreach ($signal->submission->fields as $field) {
//            /* @var SubmissionField $field */
//            $attachment->addField(new Field($field->label, $field->value, \strlen($field->value) <= 50));
//        }
//
//        $this->attachmentDecorator->addAuthor($attachment, $form->user->id);
//        $this->attachmentDecorator->decorate($attachment, 'form');
//        $this->attachmentDecorator->addSiteInformation($attachment);
//
//        return $attachment;

        return null;
    }
}
