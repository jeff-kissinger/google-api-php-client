<?php
namespace Google\Service;

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
 * Service definition for Orkut (v2).
 *
 * <p>
 * Lets you manage activities, comments and badges in Orkut. More stuff coming in time.
 * </p>
 *
 * <p>
 * For more information about this service, see the API
 * <a href="http://code.google.com/apis/orkut/v2/reference.html" target="_blank">Documentation</a>
 * </p>
 *
 * @author Google, Inc.
 */
class Orkut extends \Google\Service
{
  public $acl;
  public $activities;
  public $activityVisibility;
  public $badges;
  public $comments;
  public $communities;
  public $communityFollow;
  public $communityMembers;
  public $communityMessages;
  public $communityPollComments;
  public $communityPollVotes;
  public $communityPolls;
  public $communityRelated;
  public $communityTopics;
  public $counters;
  public $scraps;
  

  /**
   * Constructs the internal representation of the Orkut service.
   *
   * @param \Google\Client $client
   */
  public function __construct(\Google\Client $client)
  {
    parent::__construct($client);
    $this->servicePath = 'orkut/v2/';
    $this->version = 'v2';
    
    $this->availableScopes = array(
      "https://www.googleapis.com/auth/orkut",
      "https://www.googleapis.com/auth/orkut.readonly"
    );
    
    $this->serviceName = 'orkut';

    $client->addService(
        $this->serviceName,
        $this->version,
        $this->availableScopes
    );

    $this->acl = new \Google\Service\Orkut\Acl\Resource(
        $this,
        $this->serviceName,
        'acl',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'activities/{activityId}/acl/{userId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'activityId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->activities = new \Google\Service\Orkut\Activities\Resource(
        $this,
        $this->serviceName,
        'activities',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'activities/{activityId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'activityId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'people/{userId}/activities/{collection}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'collection' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'hl' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->activityVisibility = new \Google\Service\Orkut\ActivityVisibility\Resource(
        $this,
        $this->serviceName,
        'activityVisibility',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'activities/{activityId}/visibility',
              'httpMethod' => 'GET',
              'parameters' => array(
                'activityId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'patch' => array(
              'path' => 'activities/{activityId}/visibility',
              'httpMethod' => 'PATCH',
              'parameters' => array(
                'activityId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'update' => array(
              'path' => 'activities/{activityId}/visibility',
              'httpMethod' => 'PUT',
              'parameters' => array(
                'activityId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->badges = new \Google\Service\Orkut\Badges\Resource(
        $this,
        $this->serviceName,
        'badges',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'people/{userId}/badges/{badgeId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'badgeId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'people/{userId}/badges',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->comments = new \Google\Service\Orkut\Comments\Resource(
        $this,
        $this->serviceName,
        'comments',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'comments/{commentId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'commentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'comments/{commentId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'commentId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'hl' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'activities/{activityId}/comments',
              'httpMethod' => 'POST',
              'parameters' => array(
                'activityId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'activities/{activityId}/comments',
              'httpMethod' => 'GET',
              'parameters' => array(
                'activityId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orderBy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'hl' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->communities = new \Google\Service\Orkut\Communities\Resource(
        $this,
        $this->serviceName,
        'communities',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'communities/{communityId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'communityId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'hl' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'people/{userId}/communities',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'orderBy' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'hl' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->communityFollow = new \Google\Service\Orkut\CommunityFollow\Resource(
        $this,
        $this->serviceName,
        'communityFollow',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'communities/{communityId}/followers/{userId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'communityId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'communities/{communityId}/followers/{userId}',
              'httpMethod' => 'POST',
              'parameters' => array(
                'communityId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->communityMembers = new \Google\Service\Orkut\CommunityMembers\Resource(
        $this,
        $this->serviceName,
        'communityMembers',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'communities/{communityId}/members/{userId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'communityId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'communities/{communityId}/members/{userId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'communityId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'hl' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'communities/{communityId}/members/{userId}',
              'httpMethod' => 'POST',
              'parameters' => array(
                'communityId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'communities/{communityId}/members',
              'httpMethod' => 'GET',
              'parameters' => array(
                'communityId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'friendsOnly' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'hl' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->communityMessages = new \Google\Service\Orkut\CommunityMessages\Resource(
        $this,
        $this->serviceName,
        'communityMessages',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'communities/{communityId}/topics/{topicId}/messages/{messageId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'communityId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'topicId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'messageId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'insert' => array(
              'path' => 'communities/{communityId}/topics/{topicId}/messages',
              'httpMethod' => 'POST',
              'parameters' => array(
                'communityId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'topicId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'communities/{communityId}/topics/{topicId}/messages',
              'httpMethod' => 'GET',
              'parameters' => array(
                'communityId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'topicId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'hl' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->communityPollComments = new \Google\Service\Orkut\CommunityPollComments\Resource(
        $this,
        $this->serviceName,
        'communityPollComments',
        array(
          'methods' => array(
            'insert' => array(
              'path' => 'communities/{communityId}/polls/{pollId}/comments',
              'httpMethod' => 'POST',
              'parameters' => array(
                'communityId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'pollId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'list' => array(
              'path' => 'communities/{communityId}/polls/{pollId}/comments',
              'httpMethod' => 'GET',
              'parameters' => array(
                'communityId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'pollId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'hl' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->communityPollVotes = new \Google\Service\Orkut\CommunityPollVotes\Resource(
        $this,
        $this->serviceName,
        'communityPollVotes',
        array(
          'methods' => array(
            'insert' => array(
              'path' => 'communities/{communityId}/polls/{pollId}/votes',
              'httpMethod' => 'POST',
              'parameters' => array(
                'communityId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'pollId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->communityPolls = new \Google\Service\Orkut\CommunityPolls\Resource(
        $this,
        $this->serviceName,
        'communityPolls',
        array(
          'methods' => array(
            'get' => array(
              'path' => 'communities/{communityId}/polls/{pollId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'communityId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'pollId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'hl' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'list' => array(
              'path' => 'communities/{communityId}/polls',
              'httpMethod' => 'GET',
              'parameters' => array(
                'communityId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'hl' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->communityRelated = new \Google\Service\Orkut\CommunityRelated\Resource(
        $this,
        $this->serviceName,
        'communityRelated',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'communities/{communityId}/related',
              'httpMethod' => 'GET',
              'parameters' => array(
                'communityId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'hl' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->communityTopics = new \Google\Service\Orkut\CommunityTopics\Resource(
        $this,
        $this->serviceName,
        'communityTopics',
        array(
          'methods' => array(
            'delete' => array(
              'path' => 'communities/{communityId}/topics/{topicId}',
              'httpMethod' => 'DELETE',
              'parameters' => array(
                'communityId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'topicId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),'get' => array(
              'path' => 'communities/{communityId}/topics/{topicId}',
              'httpMethod' => 'GET',
              'parameters' => array(
                'communityId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'topicId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
                'hl' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),'insert' => array(
              'path' => 'communities/{communityId}/topics',
              'httpMethod' => 'POST',
              'parameters' => array(
                'communityId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'isShout' => array(
                  'location' => 'query',
                  'type' => 'boolean',
                ),
              ),
            ),'list' => array(
              'path' => 'communities/{communityId}/topics',
              'httpMethod' => 'GET',
              'parameters' => array(
                'communityId' => array(
                  'location' => 'path',
                  'type' => 'integer',
                  'required' => true,
                ),
                'pageToken' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
                'maxResults' => array(
                  'location' => 'query',
                  'type' => 'integer',
                ),
                'hl' => array(
                  'location' => 'query',
                  'type' => 'string',
                ),
              ),
            ),
          )
        )
    );
    $this->counters = new \Google\Service\Orkut\Counters\Resource(
        $this,
        $this->serviceName,
        'counters',
        array(
          'methods' => array(
            'list' => array(
              'path' => 'people/{userId}/counters',
              'httpMethod' => 'GET',
              'parameters' => array(
                'userId' => array(
                  'location' => 'path',
                  'type' => 'string',
                  'required' => true,
                ),
              ),
            ),
          )
        )
    );
    $this->scraps = new \Google\Service\Orkut\Scraps\Resource(
        $this,
        $this->serviceName,
        'scraps',
        array(
          'methods' => array(
            'insert' => array(
              'path' => 'activities/scraps',
              'httpMethod' => 'POST',
              'parameters' => array(),
            ),
          )
        )
    );
  }
}
