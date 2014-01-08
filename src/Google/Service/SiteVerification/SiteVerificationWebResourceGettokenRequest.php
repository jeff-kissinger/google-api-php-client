<?php
namespace Google\Service\SiteVerification;

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


class SiteVerificationWebResourceGettokenRequest extends \Google\Model
{
  protected $siteType = '\Google\Service\SiteVerification\SiteVerificationWebResourceGettokenRequestSite';
  protected $siteDataType = '';
  public $verificationMethod;

  public function setSite(\Google\Service\SiteVerification\SiteVerificationWebResourceGettokenRequestSite $site)
  {
    $this->site = $site;
  }

  public function getSite()
  {
    return $this->site;
  }

  public function setVerificationMethod($verificationMethod)
  {
    $this->verificationMethod = $verificationMethod;
  }

  public function getVerificationMethod()
  {
    return $this->verificationMethod;
  }
}
