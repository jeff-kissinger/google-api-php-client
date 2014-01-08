<?php
namespace Google\Service\Fusiontables;

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


class PolygonStyle extends \Google\Model
{
  public $fillColor;
  protected $fillColorStylerType = '\Google\Service\Fusiontables\StyleFunction';
  protected $fillColorStylerDataType = '';
  public $fillOpacity;
  public $strokeColor;
  protected $strokeColorStylerType = '\Google\Service\Fusiontables\StyleFunction';
  protected $strokeColorStylerDataType = '';
  public $strokeOpacity;
  public $strokeWeight;
  protected $strokeWeightStylerType = '\Google\Service\Fusiontables\StyleFunction';
  protected $strokeWeightStylerDataType = '';

  public function setFillColor($fillColor)
  {
    $this->fillColor = $fillColor;
  }

  public function getFillColor()
  {
    return $this->fillColor;
  }

  public function setFillColorStyler(\Google\Service\Fusiontables\StyleFunction $fillColorStyler)
  {
    $this->fillColorStyler = $fillColorStyler;
  }

  public function getFillColorStyler()
  {
    return $this->fillColorStyler;
  }

  public function setFillOpacity($fillOpacity)
  {
    $this->fillOpacity = $fillOpacity;
  }

  public function getFillOpacity()
  {
    return $this->fillOpacity;
  }

  public function setStrokeColor($strokeColor)
  {
    $this->strokeColor = $strokeColor;
  }

  public function getStrokeColor()
  {
    return $this->strokeColor;
  }

  public function setStrokeColorStyler(\Google\Service\Fusiontables\StyleFunction $strokeColorStyler)
  {
    $this->strokeColorStyler = $strokeColorStyler;
  }

  public function getStrokeColorStyler()
  {
    return $this->strokeColorStyler;
  }

  public function setStrokeOpacity($strokeOpacity)
  {
    $this->strokeOpacity = $strokeOpacity;
  }

  public function getStrokeOpacity()
  {
    return $this->strokeOpacity;
  }

  public function setStrokeWeight($strokeWeight)
  {
    $this->strokeWeight = $strokeWeight;
  }

  public function getStrokeWeight()
  {
    return $this->strokeWeight;
  }

  public function setStrokeWeightStyler(\Google\Service\Fusiontables\StyleFunction $strokeWeightStyler)
  {
    $this->strokeWeightStyler = $strokeWeightStyler;
  }

  public function getStrokeWeightStyler()
  {
    return $this->strokeWeightStyler;
  }
}
