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


class Video extends \Google\Model
{
  protected $ageGatingType = '\Google\Service\YouTube\VideoAgeGating';
  protected $ageGatingDataType = '';
  protected $contentDetailsType = '\Google\Service\YouTube\VideoContentDetails';
  protected $contentDetailsDataType = '';
  protected $conversionPingsType = '\Google\Service\YouTube\VideoConversionPings';
  protected $conversionPingsDataType = '';
  public $etag;
  protected $fileDetailsType = '\Google\Service\YouTube\VideoFileDetails';
  protected $fileDetailsDataType = '';
  public $id;
  public $kind;
  protected $liveStreamingDetailsType = '\Google\Service\YouTube\VideoLiveStreamingDetails';
  protected $liveStreamingDetailsDataType = '';
  protected $monetizationDetailsType = '\Google\Service\YouTube\VideoMonetizationDetails';
  protected $monetizationDetailsDataType = '';
  protected $playerType = '\Google\Service\YouTube\VideoPlayer';
  protected $playerDataType = '';
  protected $processingDetailsType = '\Google\Service\YouTube\VideoProcessingDetails';
  protected $processingDetailsDataType = '';
  protected $projectDetailsType = '\Google\Service\YouTube\VideoProjectDetails';
  protected $projectDetailsDataType = '';
  protected $recordingDetailsType = '\Google\Service\YouTube\VideoRecordingDetails';
  protected $recordingDetailsDataType = '';
  protected $snippetType = '\Google\Service\YouTube\VideoSnippet';
  protected $snippetDataType = '';
  protected $statisticsType = '\Google\Service\YouTube\VideoStatistics';
  protected $statisticsDataType = '';
  protected $statusType = '\Google\Service\YouTube\VideoStatus';
  protected $statusDataType = '';
  protected $suggestionsType = '\Google\Service\YouTube\VideoSuggestions';
  protected $suggestionsDataType = '';
  protected $topicDetailsType = '\Google\Service\YouTube\VideoTopicDetails';
  protected $topicDetailsDataType = '';

  public function setAgeGating(\Google\Service\YouTube\VideoAgeGating $ageGating)
  {
    $this->ageGating = $ageGating;
  }

  public function getAgeGating()
  {
    return $this->ageGating;
  }

  public function setContentDetails(\Google\Service\YouTube\VideoContentDetails $contentDetails)
  {
    $this->contentDetails = $contentDetails;
  }

  public function getContentDetails()
  {
    return $this->contentDetails;
  }

  public function setConversionPings(\Google\Service\YouTube\VideoConversionPings $conversionPings)
  {
    $this->conversionPings = $conversionPings;
  }

  public function getConversionPings()
  {
    return $this->conversionPings;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setFileDetails(\Google\Service\YouTube\VideoFileDetails $fileDetails)
  {
    $this->fileDetails = $fileDetails;
  }

  public function getFileDetails()
  {
    return $this->fileDetails;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLiveStreamingDetails(\Google\Service\YouTube\VideoLiveStreamingDetails $liveStreamingDetails)
  {
    $this->liveStreamingDetails = $liveStreamingDetails;
  }

  public function getLiveStreamingDetails()
  {
    return $this->liveStreamingDetails;
  }

  public function setMonetizationDetails(\Google\Service\YouTube\VideoMonetizationDetails $monetizationDetails)
  {
    $this->monetizationDetails = $monetizationDetails;
  }

  public function getMonetizationDetails()
  {
    return $this->monetizationDetails;
  }

  public function setPlayer(\Google\Service\YouTube\VideoPlayer $player)
  {
    $this->player = $player;
  }

  public function getPlayer()
  {
    return $this->player;
  }

  public function setProcessingDetails(\Google\Service\YouTube\VideoProcessingDetails $processingDetails)
  {
    $this->processingDetails = $processingDetails;
  }

  public function getProcessingDetails()
  {
    return $this->processingDetails;
  }

  public function setProjectDetails(\Google\Service\YouTube\VideoProjectDetails $projectDetails)
  {
    $this->projectDetails = $projectDetails;
  }

  public function getProjectDetails()
  {
    return $this->projectDetails;
  }

  public function setRecordingDetails(\Google\Service\YouTube\VideoRecordingDetails $recordingDetails)
  {
    $this->recordingDetails = $recordingDetails;
  }

  public function getRecordingDetails()
  {
    return $this->recordingDetails;
  }

  public function setSnippet(\Google\Service\YouTube\VideoSnippet $snippet)
  {
    $this->snippet = $snippet;
  }

  public function getSnippet()
  {
    return $this->snippet;
  }

  public function setStatistics(\Google\Service\YouTube\VideoStatistics $statistics)
  {
    $this->statistics = $statistics;
  }

  public function getStatistics()
  {
    return $this->statistics;
  }

  public function setStatus(\Google\Service\YouTube\VideoStatus $status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setSuggestions(\Google\Service\YouTube\VideoSuggestions $suggestions)
  {
    $this->suggestions = $suggestions;
  }

  public function getSuggestions()
  {
    return $this->suggestions;
  }

  public function setTopicDetails(\Google\Service\YouTube\VideoTopicDetails $topicDetails)
  {
    $this->topicDetails = $topicDetails;
  }

  public function getTopicDetails()
  {
    return $this->topicDetails;
  }
}
