<?php
/*
 * This file is part of the Level3 package.
 *
 * (c) Máximo Cuadros <maximo@yunait.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Level3\Tests\Hal\Format;
use Level3\Hal\Resource;
use Level3\Hal\Link;
use Level3\Hal\Format\JSON;

class JSONTest extends Format {
    protected $class = 'Level3\Hal\Format\JSON';
    protected $nonPretty = 'HalFormatJSONNonPretty.json';
    protected $pretty = 'HalFormatJSONPretty.json';
}