<?php
namespace Google\Service\Fusiontables\Query;

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
 * The "query" collection of methods.
 * Typical usage is:
 *  <code>
 *   $fusiontablesService = new Google_Service_Fusiontables(...);
 *   $query = $fusiontablesService->query;
 *  </code>
 */
class Resource extends \Google\Service\Resource
{

  /**
   * Executes an SQL SELECT/INSERT/UPDATE/DELETE/SHOW/DESCRIBE/CREATE statement.
   * (query.sql)
   *
   * @param string $sql
   * An SQL SELECT/SHOW/DESCRIBE/INSERT/UPDATE/DELETE/CREATE statement.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool typed
   * Should typed values be returned in the (JSON) response -- numbers for numeric values and parsed
    * geometries for KML values? Default is true.
   * @opt_param bool hdrs
   * Should column names be included (in the first row)?. Default is true.
   * @return \Google\Service\Fusiontables\Sqlresponse
   */
  public function sql($sql, $optParams = array())
  {
    $params = array('sql' => $sql);
    $params = array_merge($params, $optParams);
    return $this->call('sql', array($params), "\Google\Service\Fusiontables\Sqlresponse");
  }
  /**
   * Executes an SQL SELECT/SHOW/DESCRIBE statement. (query.sqlGet)
   *
   * @param string $sql
   * An SQL SELECT/SHOW/DESCRIBE statement.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool typed
   * Should typed values be returned in the (JSON) response -- numbers for numeric values and parsed
    * geometries for KML values? Default is true.
   * @opt_param bool hdrs
   * Should column names be included (in the first row)?. Default is true.
   * @return \Google\Service\Fusiontables\Sqlresponse
   */
  public function sqlGet($sql, $optParams = array())
  {
    $params = array('sql' => $sql);
    $params = array_merge($params, $optParams);
    return $this->call('sqlGet', array($params), "\Google\Service\Fusiontables\Sqlresponse");
  }
}
