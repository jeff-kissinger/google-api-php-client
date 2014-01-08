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


class CommunityPoll extends \Google\Collection
{
  protected $authorType = '\Google\Service\Orkut\OrkutAuthorResource';
  protected $authorDataType = '';
  public $communityId;
  public $creationTime;
  public $description;
  public $endingTime;
  public $hasVoted;
  public $id;
  protected $imageType = '\Google\Service\Orkut\CommunityPollImage';
  protected $imageDataType = '';
  public $isClosed;
  public $isMultipleAnswers;
  public $isOpenForVoting;
  public $isRestricted;
  public $isSpam;
  public $isUsersVotePublic;
  public $isVotingAllowedForNonMembers;
  public $kind;
  public $lastUpdate;
  protected $linksType = '\Google\Service\Orkut\OrkutLinkResource';
  protected $linksDataType = 'array';
  protected $optionsType = '\Google\Service\Orkut\OrkutCommunitypolloptionResource';
  protected $optionsDataType = 'array';
  public $question;
  public $totalNumberOfVotes;
  public $votedOptions;

  public function setAuthor(\Google\Service\Orkut\OrkutAuthorResource $author)
  {
    $this->author = $author;
  }

  public function getAuthor()
  {
    return $this->author;
  }
  
  public function setCommunityId($communityId)
  {
    $this->communityId = $communityId;
  }

  public function getCommunityId()
  {
    return $this->communityId;
  }
  
  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }

  public function getCreationTime()
  {
    return $this->creationTime;
  }
  
  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }
  
  public function setEndingTime($endingTime)
  {
    $this->endingTime = $endingTime;
  }

  public function getEndingTime()
  {
    return $this->endingTime;
  }
  
  public function setHasVoted($hasVoted)
  {
    $this->hasVoted = $hasVoted;
  }

  public function getHasVoted()
  {
    return $this->hasVoted;
  }
  
  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }
  
  public function setImage(\Google\Service\Orkut\CommunityPollImage $image)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
  }
  
  public function setIsClosed($isClosed)
  {
    $this->isClosed = $isClosed;
  }

  public function getIsClosed()
  {
    return $this->isClosed;
  }
  
  public function setIsMultipleAnswers($isMultipleAnswers)
  {
    $this->isMultipleAnswers = $isMultipleAnswers;
  }

  public function getIsMultipleAnswers()
  {
    return $this->isMultipleAnswers;
  }
  
  public function setIsOpenForVoting($isOpenForVoting)
  {
    $this->isOpenForVoting = $isOpenForVoting;
  }

  public function getIsOpenForVoting()
  {
    return $this->isOpenForVoting;
  }
  
  public function setIsRestricted($isRestricted)
  {
    $this->isRestricted = $isRestricted;
  }

  public function getIsRestricted()
  {
    return $this->isRestricted;
  }
  
  public function setIsSpam($isSpam)
  {
    $this->isSpam = $isSpam;
  }

  public function getIsSpam()
  {
    return $this->isSpam;
  }
  
  public function setIsUsersVotePublic($isUsersVotePublic)
  {
    $this->isUsersVotePublic = $isUsersVotePublic;
  }

  public function getIsUsersVotePublic()
  {
    return $this->isUsersVotePublic;
  }
  
  public function setIsVotingAllowedForNonMembers($isVotingAllowedForNonMembers)
  {
    $this->isVotingAllowedForNonMembers = $isVotingAllowedForNonMembers;
  }

  public function getIsVotingAllowedForNonMembers()
  {
    return $this->isVotingAllowedForNonMembers;
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
  
  public function setLinks($links)
  {
    $this->links = $links;
  }

  public function getLinks()
  {
    return $this->links;
  }
  
  public function setOptions($options)
  {
    $this->options = $options;
  }

  public function getOptions()
  {
    return $this->options;
  }
  
  public function setQuestion($question)
  {
    $this->question = $question;
  }

  public function getQuestion()
  {
    return $this->question;
  }
  
  public function setTotalNumberOfVotes($totalNumberOfVotes)
  {
    $this->totalNumberOfVotes = $totalNumberOfVotes;
  }

  public function getTotalNumberOfVotes()
  {
    return $this->totalNumberOfVotes;
  }
  
  public function setVotedOptions($votedOptions)
  {
    $this->votedOptions = $votedOptions;
  }

  public function getVotedOptions()
  {
    return $this->votedOptions;
  }
  
}
