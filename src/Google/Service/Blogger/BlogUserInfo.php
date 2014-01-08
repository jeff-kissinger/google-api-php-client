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


class BlogUserInfo extends \Google\Model
{
  protected $blogType = '\Google\Service\Blogger\Blog';
  protected $blogDataType = '';
  protected $blogUserInfoType = '\Google\Service\Blogger\BlogPerUserInfo';
  protected $blogUserInfoDataType = '';
  public $kind;

  public function setBlog(\Google\Service\Blogger\Blog $blog)
  {
    $this->blog = $blog;
  }

  public function getBlog()
  {
    return $this->blog;
  }

  public function setBlogUserInfo(\Google\Service\Blogger\BlogPerUserInfo $blogUserInfo)
  {
    $this->blogUserInfo = $blogUserInfo;
  }

  public function getBlogUserInfo()
  {
    return $this->blogUserInfo;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}
