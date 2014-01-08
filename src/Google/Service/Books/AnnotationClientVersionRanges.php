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


class AnnotationClientVersionRanges extends \Google\Model
{
  protected $cfiRangeType = '\Google\Service\Books\BooksAnnotationsRange';
  protected $cfiRangeDataType = '';
  public $contentVersion;
  protected $gbImageRangeType = '\Google\Service\Books\BooksAnnotationsRange';
  protected $gbImageRangeDataType = '';
  protected $gbTextRangeType = '\Google\Service\Books\BooksAnnotationsRange';
  protected $gbTextRangeDataType = '';
  protected $imageCfiRangeType = '\Google\Service\Books\BooksAnnotationsRange';
  protected $imageCfiRangeDataType = '';

  public function setCfiRange(\Google\Service\Books\BooksAnnotationsRange $cfiRange)
  {
    $this->cfiRange = $cfiRange;
  }

  public function getCfiRange()
  {
    return $this->cfiRange;
  }

  public function setContentVersion($contentVersion)
  {
    $this->contentVersion = $contentVersion;
  }

  public function getContentVersion()
  {
    return $this->contentVersion;
  }

  public function setGbImageRange(\Google\Service\Books\BooksAnnotationsRange $gbImageRange)
  {
    $this->gbImageRange = $gbImageRange;
  }

  public function getGbImageRange()
  {
    return $this->gbImageRange;
  }

  public function setGbTextRange(\Google\Service\Books\BooksAnnotationsRange $gbTextRange)
  {
    $this->gbTextRange = $gbTextRange;
  }

  public function getGbTextRange()
  {
    return $this->gbTextRange;
  }

  public function setImageCfiRange(\Google\Service\Books\BooksAnnotationsRange $imageCfiRange)
  {
    $this->imageCfiRange = $imageCfiRange;
  }

  public function getImageCfiRange()
  {
    return $this->imageCfiRange;
  }
}
