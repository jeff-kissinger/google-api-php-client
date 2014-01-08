<?php
namespace Google\Service\YouTube;

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


class ActivityContentDetails extends \Google\Model
{
  protected $bulletinType = '\Google\Service\YouTube\ActivityContentDetailsBulletin';
  protected $bulletinDataType = '';
  protected $channelItemType = '\Google\Service\YouTube\ActivityContentDetailsChannelItem';
  protected $channelItemDataType = '';
  protected $commentType = '\Google\Service\YouTube\ActivityContentDetailsComment';
  protected $commentDataType = '';
  protected $favoriteType = '\Google\Service\YouTube\ActivityContentDetailsFavorite';
  protected $favoriteDataType = '';
  protected $likeType = '\Google\Service\YouTube\ActivityContentDetailsLike';
  protected $likeDataType = '';
  protected $playlistItemType = '\Google\Service\YouTube\ActivityContentDetailsPlaylistItem';
  protected $playlistItemDataType = '';
  protected $promotedItemType = '\Google\Service\YouTube\ActivityContentDetailsPromotedItem';
  protected $promotedItemDataType = '';
  protected $recommendationType = '\Google\Service\YouTube\ActivityContentDetailsRecommendation';
  protected $recommendationDataType = '';
  protected $socialType = '\Google\Service\YouTube\ActivityContentDetailsSocial';
  protected $socialDataType = '';
  protected $subscriptionType = '\Google\Service\YouTube\ActivityContentDetailsSubscription';
  protected $subscriptionDataType = '';
  protected $uploadType = '\Google\Service\YouTube\ActivityContentDetailsUpload';
  protected $uploadDataType = '';

  public function setBulletin(\Google\Service\YouTube\ActivityContentDetailsBulletin $bulletin)
  {
    $this->bulletin = $bulletin;
  }

  public function getBulletin()
  {
    return $this->bulletin;
  }

  public function setChannelItem(\Google\Service\YouTube\ActivityContentDetailsChannelItem $channelItem)
  {
    $this->channelItem = $channelItem;
  }

  public function getChannelItem()
  {
    return $this->channelItem;
  }

  public function setComment(\Google\Service\YouTube\ActivityContentDetailsComment $comment)
  {
    $this->comment = $comment;
  }

  public function getComment()
  {
    return $this->comment;
  }

  public function setFavorite(\Google\Service\YouTube\ActivityContentDetailsFavorite $favorite)
  {
    $this->favorite = $favorite;
  }

  public function getFavorite()
  {
    return $this->favorite;
  }

  public function setLike(\Google\Service\YouTube\ActivityContentDetailsLike $like)
  {
    $this->like = $like;
  }

  public function getLike()
  {
    return $this->like;
  }

  public function setPlaylistItem(\Google\Service\YouTube\ActivityContentDetailsPlaylistItem $playlistItem)
  {
    $this->playlistItem = $playlistItem;
  }

  public function getPlaylistItem()
  {
    return $this->playlistItem;
  }

  public function setPromotedItem(\Google\Service\YouTube\ActivityContentDetailsPromotedItem $promotedItem)
  {
    $this->promotedItem = $promotedItem;
  }

  public function getPromotedItem()
  {
    return $this->promotedItem;
  }

  public function setRecommendation(\Google\Service\YouTube\ActivityContentDetailsRecommendation $recommendation)
  {
    $this->recommendation = $recommendation;
  }

  public function getRecommendation()
  {
    return $this->recommendation;
  }

  public function setSocial(\Google\Service\YouTube\ActivityContentDetailsSocial $social)
  {
    $this->social = $social;
  }

  public function getSocial()
  {
    return $this->social;
  }

  public function setSubscription(\Google\Service\YouTube\ActivityContentDetailsSubscription $subscription)
  {
    $this->subscription = $subscription;
  }

  public function getSubscription()
  {
    return $this->subscription;
  }

  public function setUpload(\Google\Service\YouTube\ActivityContentDetailsUpload $upload)
  {
    $this->upload = $upload;
  }

  public function getUpload()
  {
    return $this->upload;
  }
}
