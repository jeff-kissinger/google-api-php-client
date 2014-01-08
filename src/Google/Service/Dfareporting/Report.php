<?php
namespace Google\Service\Dfareporting;

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


class Report extends \Google\Model
{
  public $accountId;
  protected $activeGrpCriteriaType = '\Google\Service\Dfareporting\ReportActiveGrpCriteria';
  protected $activeGrpCriteriaDataType = '';
  protected $criteriaType = '\Google\Service\Dfareporting\ReportCriteria';
  protected $criteriaDataType = '';
  protected $crossDimensionReachCriteriaType = '\Google\Service\Dfareporting\ReportCrossDimensionReachCriteria';
  protected $crossDimensionReachCriteriaDataType = '';
  protected $deliveryType = '\Google\Service\Dfareporting\ReportDelivery';
  protected $deliveryDataType = '';
  public $etag;
  public $fileName;
  protected $floodlightCriteriaType = '\Google\Service\Dfareporting\ReportFloodlightCriteria';
  protected $floodlightCriteriaDataType = '';
  public $format;
  public $id;
  public $kind;
  public $lastModifiedTime;
  public $name;
  public $ownerProfileId;
  protected $pathToConversionCriteriaType = '\Google\Service\Dfareporting\ReportPathToConversionCriteria';
  protected $pathToConversionCriteriaDataType = '';
  protected $reachCriteriaType = '\Google\Service\Dfareporting\ReportReachCriteria';
  protected $reachCriteriaDataType = '';
  protected $scheduleType = '\Google\Service\Dfareporting\ReportSchedule';
  protected $scheduleDataType = '';
  public $subAccountId;
  public $type;

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  public function getAccountId()
  {
    return $this->accountId;
  }
  
  public function setActiveGrpCriteria(\Google\Service\Dfareporting\ReportActiveGrpCriteria $activeGrpCriteria)
  {
    $this->activeGrpCriteria = $activeGrpCriteria;
  }

  public function getActiveGrpCriteria()
  {
    return $this->activeGrpCriteria;
  }
  
  public function setCriteria(\Google\Service\Dfareporting\ReportCriteria $criteria)
  {
    $this->criteria = $criteria;
  }

  public function getCriteria()
  {
    return $this->criteria;
  }
  
  public function setCrossDimensionReachCriteria(\Google\Service\Dfareporting\ReportCrossDimensionReachCriteria $crossDimensionReachCriteria)
  {
    $this->crossDimensionReachCriteria = $crossDimensionReachCriteria;
  }

  public function getCrossDimensionReachCriteria()
  {
    return $this->crossDimensionReachCriteria;
  }
  
  public function setDelivery(\Google\Service\Dfareporting\ReportDelivery $delivery)
  {
    $this->delivery = $delivery;
  }

  public function getDelivery()
  {
    return $this->delivery;
  }
  
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }
  
  public function setFileName($fileName)
  {
    $this->fileName = $fileName;
  }

  public function getFileName()
  {
    return $this->fileName;
  }
  
  public function setFloodlightCriteria(\Google\Service\Dfareporting\ReportFloodlightCriteria $floodlightCriteria)
  {
    $this->floodlightCriteria = $floodlightCriteria;
  }

  public function getFloodlightCriteria()
  {
    return $this->floodlightCriteria;
  }
  
  public function setFormat($format)
  {
    $this->format = $format;
  }

  public function getFormat()
  {
    return $this->format;
  }
  
  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }

  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
  }
  
  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }
  
  public function setOwnerProfileId($ownerProfileId)
  {
    $this->ownerProfileId = $ownerProfileId;
  }

  public function getOwnerProfileId()
  {
    return $this->ownerProfileId;
  }
  
  public function setPathToConversionCriteria(\Google\Service\Dfareporting\ReportPathToConversionCriteria $pathToConversionCriteria)
  {
    $this->pathToConversionCriteria = $pathToConversionCriteria;
  }

  public function getPathToConversionCriteria()
  {
    return $this->pathToConversionCriteria;
  }
  
  public function setReachCriteria(\Google\Service\Dfareporting\ReportReachCriteria $reachCriteria)
  {
    $this->reachCriteria = $reachCriteria;
  }

  public function getReachCriteria()
  {
    return $this->reachCriteria;
  }
  
  public function setSchedule(\Google\Service\Dfareporting\ReportSchedule $schedule)
  {
    $this->schedule = $schedule;
  }

  public function getSchedule()
  {
    return $this->schedule;
  }
  
  public function setSubAccountId($subAccountId)
  {
    $this->subAccountId = $subAccountId;
  }

  public function getSubAccountId()
  {
    return $this->subAccountId;
  }
  
  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
  
}
