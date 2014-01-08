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


class LocalizedProperty extends \Google\Collection
{
  public $default;
  protected $localizedType = '\Google\Service\YouTube\LocalizedString';
  protected $localizedDataType = 'array';

  public function setDefault($default)
  {
    $this->default = $default;
  }

  public function getDefault()
  {
    return $this->default;
  }

  public function setLocalized($localized)
  {
    $this->localized = $localized;
  }

  public function getLocalized()
  {
    return $this->localized;
  }
}
