<?php

namespace AppDomain\Event;

use AppBundle\Entity\ArticleType;
use AppBundle\Entity\SubjectArea;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;

/**
 * @ORM\Entity
 */
class PaperAdded extends PaperEvent {

    /**
     * PaperAdded constructor.
     * @param $manuscriptNo
     * @param $author
     * @param ArticleType $articleType
     * @param SubjectArea[] $subjectAreas
     */
    public function __construct(int $manuscriptNo, string $author, ArticleType $articleType, array $subjectAreas = [])
    {
        parent::__construct(Uuid::uuid4(), 1, [
            'manuscriptNo' => $manuscriptNo,
            'author' => $author,
            'articleTypeCode' => $articleType->getCode(),
            'subjectAreaIds'=> array_map(function (SubjectArea $subjectArea) { return $subjectArea->getId(); }, $subjectAreas)
        ]);
    }

    public function getManuscriptNo() {
        return $this->getFromPayload('manuscriptNo');
    }

    public function getCorrespondingAuthor() {
        return $this->getFromPayload('author');
    }

    public function getArticleTypeCode() {
        return $this->getFromPayload('articleTypeCode');
    }

    public function getSubjectAreaIds() {
        return $this->getFromPayload('subjectAreaIds');
    }
}