<?php

namespace Topxia\Service\Toread\Dao;

use Codeages\Biz\Framework\Dao\GeneralDaoInterface;

interface ToreadDao extends GeneralDaoInterface
{
    public function getToreadByUserIdAndKnowledgeId($fields);
}