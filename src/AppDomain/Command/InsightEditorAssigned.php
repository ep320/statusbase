<?php
namespace AppDomain\Command;

use Symfony\Component\Validator\Constraints as Assert;

class InsightEditorAssigned extends AbstractPaperCommand
{
    /**
     * @var string
     * @Assert\Choice(choices={"Emma", "Helga", "Peter", "Sarah", "Stuart"})
     */
    public $insightEditor;
}