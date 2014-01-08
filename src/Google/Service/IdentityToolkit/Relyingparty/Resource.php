<?php
namespace Google\Service\IdentityToolkit\Relyingparty;

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
 * The "relyingparty" collection of methods.
 * Typical usage is:
 *  <code>
 *   $identitytoolkitService = new Google_Service_IdentityToolkit(...);
 *   $relyingparty = $identitytoolkitService->relyingparty;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Creates the URI used by the IdP to authenticate the user.
   * (relyingparty.createAuthUri)
   *
   * @param \Google\IdentitytoolkitRelyingpartyCreateAuthUriRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\IdentityToolkit\CreateAuthUriResponse
   */
  public function createAuthUri(\Google\Service\IdentityToolkit\IdentitytoolkitRelyingpartyCreateAuthUriRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('createAuthUri', array($params), "\Google\Service\IdentityToolkit\CreateAuthUriResponse");
  }
  /**
   * Delete user account. (relyingparty.deleteAccount)
   *
   * @param \Google\IdentitytoolkitRelyingpartyDeleteAccountRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\IdentityToolkit\DeleteAccountResponse
   */
  public function deleteAccount(\Google\Service\IdentityToolkit\IdentitytoolkitRelyingpartyDeleteAccountRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('deleteAccount', array($params), "\Google\Service\IdentityToolkit\DeleteAccountResponse");
  }
  /**
   * Batch download user accounts. (relyingparty.downloadAccount)
   *
   * @param \Google\IdentitytoolkitRelyingpartyDownloadAccountRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\IdentityToolkit\DownloadAccountResponse
   */
  public function downloadAccount(\Google\Service\IdentityToolkit\IdentitytoolkitRelyingpartyDownloadAccountRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('downloadAccount', array($params), "\Google\Service\IdentityToolkit\DownloadAccountResponse");
  }
  /**
   * Returns the account info. (relyingparty.getAccountInfo)
   *
   * @param \Google\IdentitytoolkitRelyingpartyGetAccountInfoRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\IdentityToolkit\GetAccountInfoResponse
   */
  public function getAccountInfo(\Google\Service\IdentityToolkit\IdentitytoolkitRelyingpartyGetAccountInfoRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getAccountInfo', array($params), "\Google\Service\IdentityToolkit\GetAccountInfoResponse");
  }
  /**
   * Get a code for user action confirmation.
   * (relyingparty.getOobConfirmationCode)
   *
   * @param \Google\Relyingparty $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\IdentityToolkit\GetOobConfirmationCodeResponse
   */
  public function getOobConfirmationCode(\Google\Service\IdentityToolkit\Relyingparty $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getOobConfirmationCode', array($params), "\Google\Service\IdentityToolkit\GetOobConfirmationCodeResponse");
  }
  /**
   * Set account info for a user. (relyingparty.resetPassword)
   *
   * @param \Google\IdentitytoolkitRelyingpartyResetPasswordRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\IdentityToolkit\ResetPasswordResponse
   */
  public function resetPassword(\Google\Service\IdentityToolkit\IdentitytoolkitRelyingpartyResetPasswordRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('resetPassword', array($params), "\Google\Service\IdentityToolkit\ResetPasswordResponse");
  }
  /**
   * Set account info for a user. (relyingparty.setAccountInfo)
   *
   * @param \Google\IdentitytoolkitRelyingpartySetAccountInfoRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\IdentityToolkit\SetAccountInfoResponse
   */
  public function setAccountInfo(\Google\Service\IdentityToolkit\IdentitytoolkitRelyingpartySetAccountInfoRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setAccountInfo', array($params), "\Google\Service\IdentityToolkit\SetAccountInfoResponse");
  }
  /**
   * Batch upload existing user accounts. (relyingparty.uploadAccount)
   *
   * @param \Google\IdentitytoolkitRelyingpartyUploadAccountRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\IdentityToolkit\UploadAccountResponse
   */
  public function uploadAccount(\Google\Service\IdentityToolkit\IdentitytoolkitRelyingpartyUploadAccountRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('uploadAccount', array($params), "\Google\Service\IdentityToolkit\UploadAccountResponse");
  }
  /**
   * Verifies the assertion returned by the IdP. (relyingparty.verifyAssertion)
   *
   * @param \Google\IdentitytoolkitRelyingpartyVerifyAssertionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\IdentityToolkit\VerifyAssertionResponse
   */
  public function verifyAssertion(\Google\Service\IdentityToolkit\IdentitytoolkitRelyingpartyVerifyAssertionRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('verifyAssertion', array($params), "\Google\Service\IdentityToolkit\VerifyAssertionResponse");
  }
  /**
   * Verifies the user entered password. (relyingparty.verifyPassword)
   *
   * @param \Google\IdentitytoolkitRelyingpartyVerifyPasswordRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\IdentityToolkit\VerifyPasswordResponse
   */
  public function verifyPassword(\Google\Service\IdentityToolkit\IdentitytoolkitRelyingpartyVerifyPasswordRequest $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('verifyPassword', array($params), "\Google\Service\IdentityToolkit\VerifyPasswordResponse");
  }
}
