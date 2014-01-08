<?php
namespace Google\Service\Blogger\Pages;

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
 * The "pages" collection of methods.
 * Typical usage is:
 *  <code>
 *   $bloggerService = new Google_Service_Blogger(...);
 *   $pages = $bloggerService->pages;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Delete a page by id. (pages.delete)
   *
   * @param string $blogId
   * The Id of the Blog.
   * @param string $pageId
   * The ID of the Page.
   * @param array $optParams Optional parameters.
   */
  public function delete($blogId, $pageId, $optParams = array())
  {
    $params = array('blogId' => $blogId, 'pageId' => $pageId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Gets one blog page by id. (pages.get)
   *
   * @param string $blogId
   * ID of the blog containing the page.
   * @param string $pageId
   * The ID of the page to get.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string view
   *
   * @return \Google\Service\Blogger\Page
   */
  public function get($blogId, $pageId, $optParams = array())
  {
    $params = array('blogId' => $blogId, 'pageId' => $pageId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), "\Google\Service\Blogger\Page");
  }
  /**
   * Add a page. (pages.insert)
   *
   * @param string $blogId
   * ID of the blog to add the page to.
   * @param \Google\Page $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Blogger\Page
   */
  public function insert($blogId, \Google\Service\Blogger\Page $postBody, $optParams = array())
  {
    $params = array('blogId' => $blogId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), "\Google\Service\Blogger\Page");
  }
  /**
   * Retrieves the pages for a blog, optionally including non-LIVE statuses.
   * (pages.listPages)
   *
   * @param string $blogId
   * ID of the blog to fetch pages from.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string status
   *
   * @opt_param bool fetchBodies
   * Whether to retrieve the Page bodies.
   * @opt_param string view
   * Access level with which to view the returned result. Note that some fields require elevated
    * access.
   * @return \Google\Service\Blogger\PageList
   */
  public function listPages($blogId, $optParams = array())
  {
    $params = array('blogId' => $blogId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\Blogger\PageList");
  }
  /**
   * Update a page. This method supports patch semantics. (pages.patch)
   *
   * @param string $blogId
   * The ID of the Blog.
   * @param string $pageId
   * The ID of the Page.
   * @param \Google\Page $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Blogger\Page
   */
  public function patch($blogId, $pageId, \Google\Service\Blogger\Page $postBody, $optParams = array())
  {
    $params = array('blogId' => $blogId, 'pageId' => $pageId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), "\Google\Service\Blogger\Page");
  }
  /**
   * Update a page. (pages.update)
   *
   * @param string $blogId
   * The ID of the Blog.
   * @param string $pageId
   * The ID of the Page.
   * @param \Google\Page $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Blogger\Page
   */
  public function update($blogId, $pageId, \Google\Service\Blogger\Page $postBody, $optParams = array())
  {
    $params = array('blogId' => $blogId, 'pageId' => $pageId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), "\Google\Service\Blogger\Page");
  }
}
