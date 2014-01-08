<?php
namespace Google\Service\PlusDomains;

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


class ActivityObject extends \Google\Collection
{
  protected $actorType = '\Google\Service\PlusDomains\ActivityObjectActor';
  protected $actorDataType = '';
  protected $attachmentsType = '\Google\Service\PlusDomains\ActivityObjectAttachments';
  protected $attachmentsDataType = 'array';
  public $content;
  public $id;
  public $objectType;
  public $originalContent;
  protected $plusonersType = '\Google\Service\PlusDomains\ActivityObjectPlusoners';
  protected $plusonersDataType = '';
  protected $repliesType = '\Google\Service\PlusDomains\ActivityObjectReplies';
  protected $repliesDataType = '';
  protected $resharersType = '\Google\Service\PlusDomains\ActivityObjectResharers';
  protected $resharersDataType = '';
  protected $statusForViewerType = '\Google\Service\PlusDomains\ActivityObjectStatusForViewer';
  protected $statusForViewerDataType = '';
  public $url;

  public function setActor(\Google\Service\PlusDomains\ActivityObjectActor $actor)
  {
    $this->actor = $actor;
  }

  public function getActor()
  {
    return $this->actor;
  }
  
  public function setAttachments($attachments)
  {
    $this->attachments = $attachments;
  }

  public function getAttachments()
  {
    return $this->attachments;
  }
  
  public function setContent($content)
  {
    $this->content = $content;
  }

  public function getContent()
  {
    return $this->content;
  }
  
  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }
  
  public function setObjectType($objectType)
  {
    $this->objectType = $objectType;
  }

  public function getObjectType()
  {
    return $this->objectType;
  }
  
  public function setOriginalContent($originalContent)
  {
    $this->originalContent = $originalContent;
  }

  public function getOriginalContent()
  {
    return $this->originalContent;
  }
  
  public function setPlusoners(\Google\Service\PlusDomains\ActivityObjectPlusoners $plusoners)
  {
    $this->plusoners = $plusoners;
  }

  public function getPlusoners()
  {
    return $this->plusoners;
  }
  
  public function setReplies(\Google\Service\PlusDomains\ActivityObjectReplies $replies)
  {
    $this->replies = $replies;
  }

  public function getReplies()
  {
    return $this->replies;
  }
  
  public function setResharers(\Google\Service\PlusDomains\ActivityObjectResharers $resharers)
  {
    $this->resharers = $resharers;
  }

  public function getResharers()
  {
    return $this->resharers;
  }
  
  public function setStatusForViewer(\Google\Service\PlusDomains\ActivityObjectStatusForViewer $statusForViewer)
  {
    $this->statusForViewer = $statusForViewer;
  }

  public function getStatusForViewer()
  {
    return $this->statusForViewer;
  }
  
  public function setUrl($url)
  {
    $this->url = $url;
  }

  public function getUrl()
  {
    return $this->url;
  }
  
}
