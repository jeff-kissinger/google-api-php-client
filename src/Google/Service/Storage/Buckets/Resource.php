<?php
namespace Google\Service\Storage\Buckets;

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
 * The "buckets" collection of methods.
 * Typical usage is:
 *  <code>
 *   $storageService = new Google_Service_Storage(...);
 *   $buckets = $storageService->buckets;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Permanently deletes an empty bucket. (buckets.delete)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string ifMetagenerationMatch
   * Makes the return of the bucket metadata conditional on whether the bucket's current
    * metageneration matches the given value.
   * @opt_param string ifMetagenerationNotMatch
   * Makes the return of the bucket metadata conditional on whether the bucket's current
    * metageneration does not match the given value.
   */
  public function delete($bucket, $optParams = array())
  {
    $params = array('bucket' => $bucket);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Returns metadata for the specified bucket. (buckets.get)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string ifMetagenerationMatch
   * Makes the return of the bucket metadata conditional on whether the bucket's current
    * metageneration matches the given value.
   * @opt_param string ifMetagenerationNotMatch
   * Makes the return of the bucket metadata conditional on whether the bucket's current
    * metageneration does not match the given value.
   * @opt_param string projection
   * Set of properties to return. Defaults to noAcl.
   * @return \Google\Service\Storage\Bucket
   */
  public function get($bucket, $optParams = array())
  {
    $params = array('bucket' => $bucket);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Storage\Bucket");
  }
  /**
   * Creates a new bucket. (buckets.insert)
   *
   * @param string $project
   * A valid API project identifier.
   * @param \Google\Bucket $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string projection
   * Set of properties to return. Defaults to noAcl, unless the bucket resource specifies acl or
    * defaultObjectAcl properties, when it defaults to full.
   * @return \Google\Service\Storage\Bucket
   */
  public function insert($project, \Google\Service\Storage\Bucket $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Storage\Bucket");
  }
  /**
   * Retrieves a list of buckets for a given project. (buckets.listBuckets)
   *
   * @param string $project
   * A valid API project identifier.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A previously-returned page token representing part of the larger set of results to view.
   * @opt_param string projection
   * Set of properties to return. Defaults to noAcl.
   * @opt_param string maxResults
   * Maximum number of buckets to return.
   * @return \Google\Service\Storage\Buckets
   */
  public function listBuckets($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Storage\Buckets");
  }
  /**
   * Updates a bucket. This method supports patch semantics. (buckets.patch)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param \Google\Bucket $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string ifMetagenerationMatch
   * Makes the return of the bucket metadata conditional on whether the bucket's current
    * metageneration matches the given value.
   * @opt_param string ifMetagenerationNotMatch
   * Makes the return of the bucket metadata conditional on whether the bucket's current
    * metageneration does not match the given value.
   * @opt_param string projection
   * Set of properties to return. Defaults to full.
   * @return \Google\Service\Storage\Bucket
   */
  public function patch($bucket, \Google\Service\Storage\Bucket $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "\Google\Service\Storage\Bucket");
  }
  /**
   * Updates a bucket. (buckets.update)
   *
   * @param string $bucket
   * Name of a bucket.
   * @param \Google\Bucket $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string ifMetagenerationMatch
   * Makes the return of the bucket metadata conditional on whether the bucket's current
    * metageneration matches the given value.
   * @opt_param string ifMetagenerationNotMatch
   * Makes the return of the bucket metadata conditional on whether the bucket's current
    * metageneration does not match the given value.
   * @opt_param string projection
   * Set of properties to return. Defaults to full.
   * @return \Google\Service\Storage\Bucket
   */
  public function update($bucket, \Google\Service\Storage\Bucket $postBody, $optParams = array())
  {
    $params = array('bucket' => $bucket, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "\Google\Service\Storage\Bucket");
  }
}
