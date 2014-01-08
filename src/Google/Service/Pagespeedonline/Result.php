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


class Result extends \Google\Collection
{
  protected $formattedResultsType = '\Google\Service\Pagespeedonline\ResultFormattedResults';
  protected $formattedResultsDataType = '';
  public $id;
  public $invalidRules;
  public $kind;
  protected $pageStatsType = '\Google\Service\Pagespeedonline\ResultPageStats';
  protected $pageStatsDataType = '';
  protected $requestType = '\Google\Service\Pagespeedonline\ResultRequest';
  protected $requestDataType = '';
  public $responseCode;
  public $score;
  protected $screenshotType = '\Google\Service\Pagespeedonline\ResultScreenshot';
  protected $screenshotDataType = '';
  public $title;
  protected $versionType = '\Google\Service\Pagespeedonline\ResultVersion';
  protected $versionDataType = '';

  public function setFormattedResults(\Google\Service\Pagespeedonline\ResultFormattedResults $formattedResults)
  {
    $this->formattedResults = $formattedResults;
  }

  public function getFormattedResults()
  {
    return $this->formattedResults;
  }
  
  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }
  
  public function setInvalidRules($invalidRules)
  {
    $this->invalidRules = $invalidRules;
  }

  public function getInvalidRules()
  {
    return $this->invalidRules;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setPageStats(\Google\Service\Pagespeedonline\ResultPageStats $pageStats)
  {
    $this->pageStats = $pageStats;
  }

  public function getPageStats()
  {
    return $this->pageStats;
  }
  
  public function setRequest(\Google\Service\Pagespeedonline\ResultRequest $request)
  {
    $this->request = $request;
  }

  public function getRequest()
  {
    return $this->request;
  }
  
  public function setResponseCode($responseCode)
  {
    $this->responseCode = $responseCode;
  }

  public function getResponseCode()
  {
    return $this->responseCode;
  }
  
  public function setScore($score)
  {
    $this->score = $score;
  }

  public function getScore()
  {
    return $this->score;
  }
  
  public function setScreenshot(\Google\Service\Pagespeedonline\ResultScreenshot $screenshot)
  {
    $this->screenshot = $screenshot;
  }

  public function getScreenshot()
  {
    return $this->screenshot;
  }
  
  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }
  
  public function setVersion(\Google\Service\Pagespeedonline\ResultVersion $version)
  {
    $this->version = $version;
  }

  public function getVersion()
  {
    return $this->version;
  }
  
}
