<?php
namespace Google\Service\DoubleClickBidManager;

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
  protected $keyType = '\Google\Service\DoubleClickBidManager\ReportKey';
  protected $keyDataType = '';
  protected $metadataType = '\Google\Service\DoubleClickBidManager\ReportMetadata';
  protected $metadataDataType = '';
  protected $paramsType = '\Google\Service\DoubleClickBidManager\Parameters';
  protected $paramsDataType = '';

  public function setKey(\Google\Service\DoubleClickBidManager\ReportKey $key)
  {
    $this->key = $key;
  }

  public function getKey()
  {
    return $this->key;
  }

  public function setMetadata(\Google\Service\DoubleClickBidManager\ReportMetadata $metadata)
  {
    $this->metadata = $metadata;
  }

  public function getMetadata()
  {
    return $this->metadata;
  }

  public function setParams(\Google\Service\DoubleClickBidManager\Parameters $params)
  {
    $this->params = $params;
  }

  public function getParams()
  {
    return $this->params;
  }
}
