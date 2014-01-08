<?php
namespace Google\Service\YouTube\GuideCategories;

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
 * The "guideCategories" collection of methods.
 * Typical usage is:
 *  <code>
 *   $youtubeService = new Google_Service_YouTube(...);
 *   $guideCategories = $youtubeService->guideCategories;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Returns a list of categories that can be associated with YouTube channels.
   * (guideCategories.listGuideCategories)
   *
   * @param string $part
   * The part parameter specifies a comma-separated list of one or more guideCategory resource
    * properties that the API response will include. The part names that you can include in the
    * parameter value are id and snippet.
  If the parameter identifies a property that contains child
    * properties, the child properties will be included in the response. For example, in a
    * guideCategory resource, the snippet property contains other properties, such as the category's
    * title. If you set part=snippet, the API response will also contain all of those nested
    * properties.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string regionCode
   * The regionCode parameter instructs the API to return the list of guide categories available in
    * the specified country. The parameter value is an ISO 3166-1 alpha-2 country code.
   * @opt_param string id
   * The id parameter specifies a comma-separated list of the YouTube channel category ID(s) for the
    * resource(s) that are being retrieved. In a guideCategory resource, the id property specifies the
    * YouTube channel category ID.
   * @opt_param string hl
   * The hl parameter specifies the language that will be used for text values in the API response.
   * @return \Google\Service\YouTube\GuideCategoryListResponse
   */
  public function listGuideCategories($part, $optParams = array())
  {
    $params = array('part' => $part);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), "\Google\Service\YouTube\GuideCategoryListResponse");
  }
}
