<?php

/**
 * This file is part of the Country List project.
 *
 *  (c) Саша Стаменковић <umpirsky@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Umpirsky\Country\Dumper;

/**
 * Dumper interface.
 *
 * @author Саша Стаменковић <umpirsky@gmail.com>
 */
interface DumperInterface {

    /**
     * Dumps data into specific format.
     *
     * @param array $data
     * @return string
     */
    public function dump(array $data);
}
