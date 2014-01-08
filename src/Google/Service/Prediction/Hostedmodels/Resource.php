<?php
namespace Google\Service\Prediction\Hostedmodels;

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
 * The "hostedmodels" collection of methods.
 * Typical usage is:
 *  <code>
 *   $predictionService = new Google_Service_Prediction(...);
 *   $hostedmodels = $predictionService->hostedmodels;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Submit input and request an output against a hosted model.
   * (hostedmodels.predict)
   *
   * @param string $project
   * The project associated with the model.
   * @param string $hostedModelName
   * The name of a hosted model.
   * @param \Google\Input $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Prediction\Output
   */
  public function predict($project, $hostedModelName, \Google\Service\Prediction\Input $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'hostedModelName' => $hostedModelName, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('predict', array($params), "\Google\Service\Prediction\Output");
  }
}
