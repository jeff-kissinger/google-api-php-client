<?php
namespace Google\Service\GamesManagement\Achievements;

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
 * The "achievements" collection of methods.
 * Typical usage is:
 *  <code>
 *   $gamesManagementService = new Google_Service_GamesManagement(...);
 *   $achievements = $gamesManagementService->achievements;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Resets the achievement with the given ID for the currently authenticated
   * player. This method is only accessible to whitelisted tester accounts for
   * your application. (achievements.reset)
   *
   * @param string $achievementId
   * The ID of the achievement used by this method.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\GamesManagement\AchievementResetResponse
   */
  public function reset($achievementId, $optParams = array())
  {
    $params = array('achievementId' => $achievementId);
    $params = array_merge($params, $optParams);
    return $this->call('reset', array($params), "\Google\Service\GamesManagement\AchievementResetResponse");
  }
  /**
   * Resets all achievements for the currently authenticated player for your
   * application. This method is only accessible to whitelisted tester accounts
   * for your application. (achievements.resetAll)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\GamesManagement\AchievementResetAllResponse
   */
  public function resetAll($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('resetAll', array($params), "\Google\Service\GamesManagement\AchievementResetAllResponse");
  }
}
