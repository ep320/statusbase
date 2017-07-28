<?php

namespace AppDomain\Command;

use Symfony\Component\Validator\Constraints as Assert;

class AskInsightAuthor extends AbstractPaperCommand
{
    /**
     * @var string
     */
    public $insightAuthor;

    /**
     * @var string, nullable=true
     */
    public $insightCommissioningReason;

}