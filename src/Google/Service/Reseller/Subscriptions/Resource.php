<?php
namespace Google\Service\Reseller\Subscriptions;

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
 * The "subscriptions" collection of methods.
 * Typical usage is:
 *  <code>
 *   $resellerService = new Google_Service_Reseller(...);
 *   $subscriptions = $resellerService->subscriptions;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Changes the plan of a subscription (subscriptions.changePlan)
   *
   * @param string $customerId
   * Id of the Customer
   * @param string $subscriptionId
   * Id of the subscription, which is unique for a customer
   * @param \Google\ChangePlanRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Reseller\Subscription
   */
  public function changePlan($customerId, $subscriptionId, \Google\Service\Reseller\ChangePlanRequest $postBody, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'subscriptionId' => $subscriptionId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('changePlan', array($params), "\Google\Service\Reseller\Subscription");
  }
  /**
   * Changes the renewal settings of a subscription
   * (subscriptions.changeRenewalSettings)
   *
   * @param string $customerId
   * Id of the Customer
   * @param string $subscriptionId
   * Id of the subscription, which is unique for a customer
   * @param \Google\RenewalSettings $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Reseller\Subscription
   */
  public function changeRenewalSettings($customerId, $subscriptionId, \Google\Service\Reseller\RenewalSettings $postBody, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'subscriptionId' => $subscriptionId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('changeRenewalSettings', array($params), "\Google\Service\Reseller\Subscription");
  }
  /**
   * Changes the seats configuration of a subscription (subscriptions.changeSeats)
   *
   * @param string $customerId
   * Id of the Customer
   * @param string $subscriptionId
   * Id of the subscription, which is unique for a customer
   * @param \Google\Seats $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Reseller\Subscription
   */
  public function changeSeats($customerId, $subscriptionId, \Google\Service\Reseller\Seats $postBody, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'subscriptionId' => $subscriptionId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('changeSeats', array($params), "\Google\Service\Reseller\Subscription");
  }
  /**
   * Cancels/Downgrades a subscription. (subscriptions.delete)
   *
   * @param string $customerId
   * Id of the Customer
   * @param string $subscriptionId
   * Id of the subscription, which is unique for a customer
   * @param string $deletionType
   * Whether the subscription is to be fully cancelled or downgraded
   * @param array $optParams Optional parameters.
   */
  public function delete($customerId, $subscriptionId, $deletionType, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'subscriptionId' => $subscriptionId, 'deletionType' => $deletionType);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Gets a subscription of the customer. (subscriptions.get)
   *
   * @param string $customerId
   * Id of the Customer
   * @param string $subscriptionId
   * Id of the subscription, which is unique for a customer
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Reseller\Subscription
   */
  public function get($customerId, $subscriptionId, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'subscriptionId' => $subscriptionId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Reseller\Subscription");
  }
  /**
   * Creates/Transfers a subscription for the customer. (subscriptions.insert)
   *
   * @param string $customerId
   * Id of the Customer
   * @param \Google\Subscription $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string customerAuthToken
   * An auth token needed for transferring a subscription. Can be generated at
    * https://www.google.com/a/cpanel/customer-domain/TransferToken. Optional.
   * @return \Google\Service\Reseller\Subscription
   */
  public function insert($customerId, \Google\Service\Reseller\Subscription $postBody, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Reseller\Subscription");
  }
  /**
   * Lists subscriptions of a reseller, optionally filtered by a customer name
   * prefix. (subscriptions.listSubscriptions)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string customerAuthToken
   * An auth token needed if the customer is not a resold customer of this reseller. Can be generated
    * at https://www.google.com/a/cpanel/customer-domain/TransferToken.Optional.
   * @opt_param string pageToken
   * Token to specify next page in the list
   * @opt_param string customerId
   * Id of the Customer
   * @opt_param string maxResults
   * Maximum number of results to return
   * @opt_param string customerNamePrefix
   * Prefix of the customer's domain name by which the subscriptions should be filtered. Optional
   * @return \Google\Service\Reseller\Subscriptions
   */
  public function listSubscriptions($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Reseller\Subscriptions");
  }
  /**
   * Starts paid service of a trial subscription (subscriptions.startPaidService)
   *
   * @param string $customerId
   * Id of the Customer
   * @param string $subscriptionId
   * Id of the subscription, which is unique for a customer
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Reseller\Subscription
   */
  public function startPaidService($customerId, $subscriptionId, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'subscriptionId' => $subscriptionId);
    $params = array_merge($params, $optParams);
    return $this->call('startPaidService', array($params), "\Google\Service\Reseller\Subscription");
  }
}
