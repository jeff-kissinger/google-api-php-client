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


class ChannelContentDetails extends \Google\Model
{
  public $googlePlusUserId;
  protected $relatedPlaylistsType = '\Google\Service\YouTube\ChannelContentDetailsRelatedPlaylists';
  protected $relatedPlaylistsDataType = '';

  public function setGooglePlusUserId($googlePlusUserId)
  {
    $this->googlePlusUserId = $googlePlusUserId;
  }

  public function getGooglePlusUserId()
  {
    return $this->googlePlusUserId;
  }

  public function setRelatedPlaylists(\Google\Service\YouTube\ChannelContentDetailsRelatedPlaylists $relatedPlaylists)
  {
    $this->relatedPlaylists = $relatedPlaylists;
  }

  public function getRelatedPlaylists()
  {
    return $this->relatedPlaylists;
  }
}
