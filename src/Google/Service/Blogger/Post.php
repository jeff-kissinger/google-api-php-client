<?php
namespace Google\Service\Blogger;

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


class Post extends \Google\Collection
{
  protected $authorType = '\Google\Service\Blogger\PostAuthor';
  protected $authorDataType = '';
  protected $blogType = '\Google\Service\Blogger\PostBlog';
  protected $blogDataType = '';
  public $content;
  public $customMetaData;
  public $id;
  protected $imagesType = '\Google\Service\Blogger\PostImages';
  protected $imagesDataType = 'array';
  public $kind;
  public $labels;
  protected $locationType = '\Google\Service\Blogger\PostLocation';
  protected $locationDataType = '';
  public $published;
  protected $repliesType = '\Google\Service\Blogger\PostReplies';
  protected $repliesDataType = '';
  public $selfLink;
  public $status;
  public $title;
  public $titleLink;
  public $updated;
  public $url;

  public function setAuthor(\Google\Service\Blogger\PostAuthor $author)
  {
    $this->author = $author;
  }

  public function getAuthor()
  {
    return $this->author;
  }

  public function setBlog(\Google\Service\Blogger\PostBlog $blog)
  {
    $this->blog = $blog;
  }

  public function getBlog()
  {
    return $this->blog;
  }

  public function setContent($content)
  {
    $this->content = $content;
  }

  public function getContent()
  {
    return $this->content;
  }

  public function setCustomMetaData($customMetaData)
  {
    $this->customMetaData = $customMetaData;
  }

  public function getCustomMetaData()
  {
    return $this->customMetaData;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setImages($images)
  {
    $this->images = $images;
  }

  public function getImages()
  {
    return $this->images;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLabels($labels)
  {
    $this->labels = $labels;
  }

  public function getLabels()
  {
    return $this->labels;
  }

  public function setLocation(\Google\Service\Blogger\PostLocation $location)
  {
    $this->location = $location;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setPublished($published)
  {
    $this->published = $published;
  }

  public function getPublished()
  {
    return $this->published;
  }

  public function setReplies(\Google\Service\Blogger\PostReplies $replies)
  {
    $this->replies = $replies;
  }

  public function getReplies()
  {
    return $this->replies;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitleLink($titleLink)
  {
    $this->titleLink = $titleLink;
  }

  public function getTitleLink()
  {
    return $this->titleLink;
  }

  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }

  public function getUpdated()
  {
    return $this->updated;
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
