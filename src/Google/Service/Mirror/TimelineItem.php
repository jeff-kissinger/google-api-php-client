<?php
namespace Google\Service\Mirror;

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


class TimelineItem extends \Google\Collection
{
  protected $attachmentsType = '\Google\Service\Mirror\Attachment';
  protected $attachmentsDataType = 'array';
  public $bundleId;
  public $canonicalUrl;
  public $created;
  protected $creatorType = '\Google\Service\Mirror\Contact';
  protected $creatorDataType = '';
  public $displayTime;
  public $etag;
  public $html;
  public $id;
  public $inReplyTo;
  public $isBundleCover;
  public $isDeleted;
  public $isPinned;
  public $kind;
  protected $locationType = '\Google\Service\Mirror\Location';
  protected $locationDataType = '';
  protected $menuItemsType = '\Google\Service\Mirror\MenuItem';
  protected $menuItemsDataType = 'array';
  protected $notificationType = '\Google\Service\Mirror\NotificationConfig';
  protected $notificationDataType = '';
  public $pinScore;
  protected $recipientsType = '\Google\Service\Mirror\Contact';
  protected $recipientsDataType = 'array';
  public $selfLink;
  public $sourceItemId;
  public $speakableText;
  public $speakableType;
  public $text;
  public $title;
  public $updated;

  public function setAttachments($attachments)
  {
    $this->attachments = $attachments;
  }

  public function getAttachments()
  {
    return $this->attachments;
  }

  public function setBundleId($bundleId)
  {
    $this->bundleId = $bundleId;
  }

  public function getBundleId()
  {
    return $this->bundleId;
  }

  public function setCanonicalUrl($canonicalUrl)
  {
    $this->canonicalUrl = $canonicalUrl;
  }

  public function getCanonicalUrl()
  {
    return $this->canonicalUrl;
  }

  public function setCreated($created)
  {
    $this->created = $created;
  }

  public function getCreated()
  {
    return $this->created;
  }

  public function setCreator(\Google\Service\Mirror\Contact $creator)
  {
    $this->creator = $creator;
  }

  public function getCreator()
  {
    return $this->creator;
  }

  public function setDisplayTime($displayTime)
  {
    $this->displayTime = $displayTime;
  }

  public function getDisplayTime()
  {
    return $this->displayTime;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setHtml($html)
  {
    $this->html = $html;
  }

  public function getHtml()
  {
    return $this->html;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setInReplyTo($inReplyTo)
  {
    $this->inReplyTo = $inReplyTo;
  }

  public function getInReplyTo()
  {
    return $this->inReplyTo;
  }

  public function setIsBundleCover($isBundleCover)
  {
    $this->isBundleCover = $isBundleCover;
  }

  public function getIsBundleCover()
  {
    return $this->isBundleCover;
  }

  public function setIsDeleted($isDeleted)
  {
    $this->isDeleted = $isDeleted;
  }

  public function getIsDeleted()
  {
    return $this->isDeleted;
  }

  public function setIsPinned($isPinned)
  {
    $this->isPinned = $isPinned;
  }

  public function getIsPinned()
  {
    return $this->isPinned;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLocation(\Google\Service\Mirror\Location $location)
  {
    $this->location = $location;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setMenuItems($menuItems)
  {
    $this->menuItems = $menuItems;
  }

  public function getMenuItems()
  {
    return $this->menuItems;
  }

  public function setNotification(\Google\Service\Mirror\NotificationConfig $notification)
  {
    $this->notification = $notification;
  }

  public function getNotification()
  {
    return $this->notification;
  }

  public function setPinScore($pinScore)
  {
    $this->pinScore = $pinScore;
  }

  public function getPinScore()
  {
    return $this->pinScore;
  }

  public function setRecipients($recipients)
  {
    $this->recipients = $recipients;
  }

  public function getRecipients()
  {
    return $this->recipients;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSourceItemId($sourceItemId)
  {
    $this->sourceItemId = $sourceItemId;
  }

  public function getSourceItemId()
  {
    return $this->sourceItemId;
  }

  public function setSpeakableText($speakableText)
  {
    $this->speakableText = $speakableText;
  }

  public function getSpeakableText()
  {
    return $this->speakableText;
  }

  public function setSpeakableType($speakableType)
  {
    $this->speakableType = $speakableType;
  }

  public function getSpeakableType()
  {
    return $this->speakableType;
  }

  public function setText($text)
  {
    $this->text = $text;
  }

  public function getText()
  {
    return $this->text;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }

  public function getUpdated()
  {
    return $this->updated;
  }
}
