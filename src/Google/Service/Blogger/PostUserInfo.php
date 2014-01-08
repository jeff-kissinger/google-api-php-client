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


class PostUserInfo extends \Google\Model
{
  public $kind;
  protected $postType = '\Google\Service\Blogger\Post';
  protected $postDataType = '';
  protected $postUserInfoType = '\Google\Service\Blogger\PostPerUserInfo';
  protected $postUserInfoDataType = '';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPost(\Google\Service\Blogger\Post $post)
  {
    $this->post = $post;
  }

  public function getPost()
  {
    return $this->post;
  }

  public function setPostUserInfo(\Google\Service\Blogger\PostPerUserInfo $postUserInfo)
  {
    $this->postUserInfo = $postUserInfo;
  }

  public function getPostUserInfo()
  {
    return $this->postUserInfo;
  }
}
