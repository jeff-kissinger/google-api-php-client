<?php
namespace Google\Service\Bigquery;

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


class JobConfiguration extends \Google\Model
{
  protected $copyType = '\Google\Service\Bigquery\JobConfigurationTableCopy';
  protected $copyDataType = '';
  public $dryRun;
  protected $extractType = '\Google\Service\Bigquery\JobConfigurationExtract';
  protected $extractDataType = '';
  protected $linkType = '\Google\Service\Bigquery\JobConfigurationLink';
  protected $linkDataType = '';
  protected $loadType = '\Google\Service\Bigquery\JobConfigurationLoad';
  protected $loadDataType = '';
  protected $queryType = '\Google\Service\Bigquery\JobConfigurationQuery';
  protected $queryDataType = '';

  public function setCopy(\Google\Service\Bigquery\JobConfigurationTableCopy $copy)
  {
    $this->copy = $copy;
  }

  public function getCopy()
  {
    return $this->copy;
  }

  public function setDryRun($dryRun)
  {
    $this->dryRun = $dryRun;
  }

  public function getDryRun()
  {
    return $this->dryRun;
  }

  public function setExtract(\Google\Service\Bigquery\JobConfigurationExtract $extract)
  {
    $this->extract = $extract;
  }

  public function getExtract()
  {
    return $this->extract;
  }

  public function setLink(\Google\Service\Bigquery\JobConfigurationLink $link)
  {
    $this->link = $link;
  }

  public function getLink()
  {
    return $this->link;
  }

  public function setLoad(\Google\Service\Bigquery\JobConfigurationLoad $load)
  {
    $this->load = $load;
  }

  public function getLoad()
  {
    return $this->load;
  }

  public function setQuery(\Google\Service\Bigquery\JobConfigurationQuery $query)
  {
    $this->query = $query;
  }

  public function getQuery()
  {
    return $this->query;
  }
}
