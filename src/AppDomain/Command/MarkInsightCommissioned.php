<?php
namespace AppDomain\Command;

use Symfony\Component\Validator\Constraints as Assert;

class MarkInsightCommssioned extends AbstractPaperCommand
{
    /**
     * @var \DateTime
     */
    public $insightDueDate;

    /**
     * @var integer
     */
    public $insightManuscriptNo;

    /**
     * @var string, nullable=true
     */
    public $insightCommissionedComment;

}