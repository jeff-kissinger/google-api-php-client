<?php
namespace Google\Service\Books;

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


class DictlayerdataDictWordsSenses extends \Google\Collection
{
  protected $conjugationsType = '\Google\Service\Books\DictlayerdataDictWordsSensesConjugations';
  protected $conjugationsDataType = 'array';
  protected $definitionsType = '\Google\Service\Books\DictlayerdataDictWordsSensesDefinitions';
  protected $definitionsDataType = 'array';
  public $partOfSpeech;
  public $pronunciation;
  public $pronunciationUrl;
  protected $sourceType = '\Google\Service\Books\DictlayerdataDictWordsSensesSource';
  protected $sourceDataType = '';
  public $syllabification;
  protected $synonymsType = '\Google\Service\Books\DictlayerdataDictWordsSensesSynonyms';
  protected $synonymsDataType = 'array';

  public function setConjugations($conjugations)
  {
    $this->conjugations = $conjugations;
  }

  public function getConjugations()
  {
    return $this->conjugations;
  }

  public function setDefinitions($definitions)
  {
    $this->definitions = $definitions;
  }

  public function getDefinitions()
  {
    return $this->definitions;
  }

  public function setPartOfSpeech($partOfSpeech)
  {
    $this->partOfSpeech = $partOfSpeech;
  }

  public function getPartOfSpeech()
  {
    return $this->partOfSpeech;
  }

  public function setPronunciation($pronunciation)
  {
    $this->pronunciation = $pronunciation;
  }

  public function getPronunciation()
  {
    return $this->pronunciation;
  }

  public function setPronunciationUrl($pronunciationUrl)
  {
    $this->pronunciationUrl = $pronunciationUrl;
  }

  public function getPronunciationUrl()
  {
    return $this->pronunciationUrl;
  }

  public function setSource(\Google\Service\Books\DictlayerdataDictWordsSensesSource $source)
  {
    $this->source = $source;
  }

  public function getSource()
  {
    return $this->source;
  }

  public function setSyllabification($syllabification)
  {
    $this->syllabification = $syllabification;
  }

  public function getSyllabification()
  {
    return $this->syllabification;
  }

  public function setSynonyms($synonyms)
  {
    $this->synonyms = $synonyms;
  }

  public function getSynonyms()
  {
    return $this->synonyms;
  }
}
