<?php
namespace Google\Service\CivicInfo;

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


class VoterInfoResponse extends \Google\Collection
{
  protected $contestsType = '\Google\Service\CivicInfo\Contest';
  protected $contestsDataType = 'array';
  protected $earlyVoteSitesType = '\Google\Service\CivicInfo\PollingLocation';
  protected $earlyVoteSitesDataType = 'array';
  protected $electionType = '\Google\Service\CivicInfo\Election';
  protected $electionDataType = '';
  public $kind;
  protected $normalizedInputType = '\Google\Service\CivicInfo\SimpleAddressType';
  protected $normalizedInputDataType = '';
  protected $pollingLocationsType = '\Google\Service\CivicInfo\PollingLocation';
  protected $pollingLocationsDataType = 'array';
  protected $stateType = '\Google\Service\CivicInfo\AdministrationRegion';
  protected $stateDataType = 'array';
  public $status;

  public function setContests($contests)
  {
    $this->contests = $contests;
  }

  public function getContests()
  {
    return $this->contests;
  }

  public function setEarlyVoteSites($earlyVoteSites)
  {
    $this->earlyVoteSites = $earlyVoteSites;
  }

  public function getEarlyVoteSites()
  {
    return $this->earlyVoteSites;
  }

  public function setElection(\Google\Service\CivicInfo\Election $election)
  {
    $this->election = $election;
  }

  public function getElection()
  {
    return $this->election;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNormalizedInput(\Google\Service\CivicInfo\SimpleAddressType $normalizedInput)
  {
    $this->normalizedInput = $normalizedInput;
  }

  public function getNormalizedInput()
  {
    return $this->normalizedInput;
  }

  public function setPollingLocations($pollingLocations)
  {
    $this->pollingLocations = $pollingLocations;
  }

  public function getPollingLocations()
  {
    return $this->pollingLocations;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}
