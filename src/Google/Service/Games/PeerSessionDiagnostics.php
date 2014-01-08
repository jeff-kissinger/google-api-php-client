<?php
namespace Google\Service\Games;

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


class PeerSessionDiagnostics extends \Google\Model
{
  public $connectedTimestampMillis;
  public $kind;
  public $participantId;
  protected $reliableChannelType = '\Google\Service\Games\PeerChannelDiagnostics';
  protected $reliableChannelDataType = '';
  protected $unreliableChannelType = '\Google\Service\Games\PeerChannelDiagnostics';
  protected $unreliableChannelDataType = '';

  public function setConnectedTimestampMillis($connectedTimestampMillis)
  {
    $this->connectedTimestampMillis = $connectedTimestampMillis;
  }

  public function getConnectedTimestampMillis()
  {
    return $this->connectedTimestampMillis;
  }
  
  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
  
  public function setParticipantId($participantId)
  {
    $this->participantId = $participantId;
  }

  public function getParticipantId()
  {
    return $this->participantId;
  }
  
  public function setReliableChannel(\Google\Service\Games\PeerChannelDiagnostics $reliableChannel)
  {
    $this->reliableChannel = $reliableChannel;
  }

  public function getReliableChannel()
  {
    return $this->reliableChannel;
  }
  
  public function setUnreliableChannel(\Google\Service\Games\PeerChannelDiagnostics $unreliableChannel)
  {
    $this->unreliableChannel = $unreliableChannel;
  }

  public function getUnreliableChannel()
  {
    return $this->unreliableChannel;
  }
  
}
