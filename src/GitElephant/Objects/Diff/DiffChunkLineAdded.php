<?php

/**
 * This file is part of the GitElephant package.
 *
 * (c) Matteo Giachino <matteog@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Just for fun...
 */

namespace GitElephant\Objects\Diff;

use GitElephant\Objects\Diff\DiffChunkLine;

/**
 * DiffChunkLine added
 *
 * @author Matteo Giachino <matteog@gmail.com>
 */

class DiffChunkLineAdded extends DiffChunkLine
{
    /**
     * Class constructor
     *
     * @param int    $number  line number
     * @param string $content the content
     */
    public function __construct($number, $content)
    {
        $this->setNumber($number);
        $this->setContent($content);
        $this->setType(self::ADDED);
    }
}
