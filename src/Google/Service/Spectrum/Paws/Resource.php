<?php
namespace Google\Service\Spectrum\Paws;

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

/**
 * The "paws" collection of methods.
 * Typical usage is:
 *  <code>
 *   $spectrumService = new Google_Service_Spectrum(...);
 *   $paws = $spectrumService->paws;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Requests information about the available spectrum for a device at a location.
   * Requests from a fixed-mode device must include owner information so the
   * device can be registered with the database. (paws.getSpectrum)
   *
   * @param \Google\PawsGetSpectrumRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Spectrum\PawsGetSpectrumResponse
   */
  public function getSpectrum(\Google\Service\Spectrum\PawsGetSpectrumRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getSpectrum', array($params), "\Google\Service\Spectrum\PawsGetSpectrumResponse");
  }
  /**
   * The Google Spectrum Database does not support batch requests, so this method
   * always yields an UNIMPLEMENTED error. (paws.getSpectrumBatch)
   *
   * @param \Google\PawsGetSpectrumBatchRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Spectrum\PawsGetSpectrumBatchResponse
   */
  public function getSpectrumBatch(\Google\Service\Spectrum\PawsGetSpectrumBatchRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getSpectrumBatch', array($params), "\Google\Service\Spectrum\PawsGetSpectrumBatchResponse");
  }
  /**
   * Initializes the connection between a white space device and the database.
   * (paws.init)
   *
   * @param \Google\PawsInitRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Spectrum\PawsInitResponse
   */
  public function init(\Google\Service\Spectrum\PawsInitRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('init', array($params), "\Google\Service\Spectrum\PawsInitResponse");
  }
  /**
   * Notifies the database that the device has selected certain frequency ranges
   * for transmission. Only to be invoked when required by the regulator. The
   * Google Spectrum Database does not operate in domains that require
   * notification, so this always yields an UNIMPLEMENTED error.
   * (paws.notifySpectrumUse)
   *
   * @param \Google\PawsNotifySpectrumUseRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Spectrum\PawsNotifySpectrumUseResponse
   */
  public function notifySpectrumUse(\Google\Service\Spectrum\PawsNotifySpectrumUseRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('notifySpectrumUse', array($params), "\Google\Service\Spectrum\PawsNotifySpectrumUseResponse");
  }
  /**
   * The Google Spectrum Database implements registration in the getSpectrum
   * method. As such this always returns an UNIMPLEMENTED error. (paws.register)
   *
   * @param \Google\PawsRegisterRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Spectrum\PawsRegisterResponse
   */
  public function register(\Google\Service\Spectrum\PawsRegisterRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('register', array($params), "\Google\Service\Spectrum\PawsRegisterResponse");
  }
  /**
   * Validates a device for white space use in accordance with regulatory rules.
   * The Google Spectrum Database does not support master/slave configurations, so
   * this always yields an UNIMPLEMENTED error. (paws.verifyDevice)
   *
   * @param \Google\PawsVerifyDeviceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Spectrum\PawsVerifyDeviceResponse
   */
  public function verifyDevice(\Google\Service\Spectrum\PawsVerifyDeviceRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('verifyDevice', array($params), "\Google\Service\Spectrum\PawsVerifyDeviceResponse");
  }
}
