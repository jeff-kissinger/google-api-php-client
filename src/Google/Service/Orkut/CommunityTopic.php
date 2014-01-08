<?php
namespace Google\Service\Orkut;

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


class CommunityTopic extends \Google\Collection
{
  protected $authorType = '\Google\Service\Orkut\OrkutAuthorResource';
  protected $authorDataType = '';
  public $body;
  public $id;
  public $isClosed;
  public $kind;
  public $lastUpdate;
  public $latestMessageSnippet;
  protected $linksType = '\Google\Service\Orkut\OrkutLinkResource';
  protected $linksDataType = 'array';
  protected $messagesType = '\Google\Service\Orkut\CommunityMessage';
  protected $messagesDataType = 'array';
  public $numberOfReplies;
  public $title;

  public function setAuthor(\Google\Service\Orkut\OrkutAuthorResource $author)
  {
    $this->author = $author;
  }

  public function getAuthor()
  {
    return $this->author;
  }
  
  public function setBody($body)
  {
    $this->body = $body;
  }

  public function getBody()
  {
    return $this->body;
  }
  
  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }
  
  public function setIsClosed($isClosed)
  {
    $this->isClosed = $isClosed;
  }

  public function getIsClosed()
  {
    return $this->isClosed;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setLastUpdate($lastUpdate)
  {
    $this->lastUpdate = $lastUpdate;
  }

  public function getLastUpdate()
  {
    return $this->lastUpdate;
  }
  
  public function setLatestMessageSnippet($latestMessageSnippet)
  {
    $this->latestMessageSnippet = $latestMessageSnippet;
  }

  public function getLatestMessageSnippet()
  {
    return $this->latestMessageSnippet;
  }
  
  public function setLinks($links)
  {
    $this->links = $links;
  }

  public function getLinks()
  {
    return $this->links;
  }
  
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }

  public function getMessages()
  {
    return $this->messages;
  }
  
  public function setNumberOfReplies($numberOfReplies)
  {
    $this->numberOfReplies = $numberOfReplies;
  }

  public function getNumberOfReplies()
  {
    return $this->numberOfReplies;
  }
  
  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }
  
}
