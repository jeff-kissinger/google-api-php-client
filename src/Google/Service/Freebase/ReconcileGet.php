<?php
namespace Google\Service\Freebase;

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


class ReconcileGet extends \Google\Collection
{
  protected $candidateType = '\Google\Service\Freebase\ReconcileCandidate';
  protected $candidateDataType = 'array';
  protected $costsType = '\Google\Service\Freebase\ReconcileGetCosts';
  protected $costsDataType = '';
  protected $matchType = '\Google\Service\Freebase\ReconcileCandidate';
  protected $matchDataType = '';
  protected $warningType = '\Google\Service\Freebase\ReconcileGetWarning';
  protected $warningDataType = 'array';

  public function setCandidate($candidate)
  {
    $this->candidate = $candidate;
  }

  public function getCandidate()
  {
    return $this->candidate;
  }

  public function setCosts(\Google\Service\Freebase\ReconcileGetCosts $costs)
  {
    $this->costs = $costs;
  }

  public function getCosts()
  {
    return $this->costs;
  }

  public function setMatch(\Google\Service\Freebase\ReconcileCandidate $match)
  {
    $this->match = $match;
  }

  public function getMatch()
  {
    return $this->match;
  }

  public function setWarning($warning)
  {
    $this->warning = $warning;
  }

  public function getWarning()
  {
    return $this->warning;
  }
}
