<?php
namespace Google\Service\Pagespeedonline;

/*
 * Copyright 2010 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */


class ResultFormattedResultsRuleResultsElement extends \Google\Collection
{
  public $localizedRuleName;
  public $ruleImpact;
  protected $urlBlocksType = '\Google\Service\Pagespeedonline\ResultFormattedResultsRuleResultsElementUrlBlocks';
  protected $urlBlocksDataType = 'array';

  public function setLocalizedRuleName($localizedRuleName)
  {
    $this->localizedRuleName = $localizedRuleName;
  }

  public function getLocalizedRuleName()
  {
    return $this->localizedRuleName;
  }
  
  public function setRuleImpact($ruleImpact)
  {
    $this->ruleImpact = $ruleImpact;
  }

  public function getRuleImpact()
  {
    return $this->ruleImpact;
  }
  
  public function setUrlBlocks($urlBlocks)
  {
    $this->urlBlocks = $urlBlocks;
  }

  public function getUrlBlocks()
  {
    return $this->urlBlocks;
  }
  
}
