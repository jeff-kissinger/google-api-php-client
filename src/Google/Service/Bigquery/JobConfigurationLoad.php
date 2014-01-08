<?php
namespace Google\Service\Bigquery;

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


class JobConfigurationLoad extends \Google\Collection
{
  public $allowJaggedRows;
  public $allowQuotedNewlines;
  public $createDisposition;
  protected $destinationTableType = '\Google\Service\Bigquery\TableReference';
  protected $destinationTableDataType = '';
  public $encoding;
  public $fieldDelimiter;
  public $maxBadRecords;
  public $quote;
  protected $schemaType = '\Google\Service\Bigquery\TableSchema';
  protected $schemaDataType = '';
  public $schemaInline;
  public $schemaInlineFormat;
  public $skipLeadingRows;
  public $sourceFormat;
  public $sourceUris;
  public $writeDisposition;

  public function setAllowJaggedRows($allowJaggedRows)
  {
    $this->allowJaggedRows = $allowJaggedRows;
  }

  public function getAllowJaggedRows()
  {
    return $this->allowJaggedRows;
  }

  public function setAllowQuotedNewlines($allowQuotedNewlines)
  {
    $this->allowQuotedNewlines = $allowQuotedNewlines;
  }

  public function getAllowQuotedNewlines()
  {
    return $this->allowQuotedNewlines;
  }

  public function setCreateDisposition($createDisposition)
  {
    $this->createDisposition = $createDisposition;
  }

  public function getCreateDisposition()
  {
    return $this->createDisposition;
  }

  public function setDestinationTable(\Google\Service\Bigquery\TableReference $destinationTable)
  {
    $this->destinationTable = $destinationTable;
  }

  public function getDestinationTable()
  {
    return $this->destinationTable;
  }

  public function setEncoding($encoding)
  {
    $this->encoding = $encoding;
  }

  public function getEncoding()
  {
    return $this->encoding;
  }

  public function setFieldDelimiter($fieldDelimiter)
  {
    $this->fieldDelimiter = $fieldDelimiter;
  }

  public function getFieldDelimiter()
  {
    return $this->fieldDelimiter;
  }

  public function setMaxBadRecords($maxBadRecords)
  {
    $this->maxBadRecords = $maxBadRecords;
  }

  public function getMaxBadRecords()
  {
    return $this->maxBadRecords;
  }

  public function setQuote($quote)
  {
    $this->quote = $quote;
  }

  public function getQuote()
  {
    return $this->quote;
  }

  public function setSchema(\Google\Service\Bigquery\TableSchema $schema)
  {
    $this->schema = $schema;
  }

  public function getSchema()
  {
    return $this->schema;
  }

  public function setSchemaInline($schemaInline)
  {
    $this->schemaInline = $schemaInline;
  }

  public function getSchemaInline()
  {
    return $this->schemaInline;
  }

  public function setSchemaInlineFormat($schemaInlineFormat)
  {
    $this->schemaInlineFormat = $schemaInlineFormat;
  }

  public function getSchemaInlineFormat()
  {
    return $this->schemaInlineFormat;
  }

  public function setSkipLeadingRows($skipLeadingRows)
  {
    $this->skipLeadingRows = $skipLeadingRows;
  }

  public function getSkipLeadingRows()
  {
    return $this->skipLeadingRows;
  }

  public function setSourceFormat($sourceFormat)
  {
    $this->sourceFormat = $sourceFormat;
  }

  public function getSourceFormat()
  {
    return $this->sourceFormat;
  }

  public function setSourceUris($sourceUris)
  {
    $this->sourceUris = $sourceUris;
  }

  public function getSourceUris()
  {
    return $this->sourceUris;
  }

  public function setWriteDisposition($writeDisposition)
  {
    $this->writeDisposition = $writeDisposition;
  }

  public function getWriteDisposition()
  {
    return $this->writeDisposition;
  }
}
