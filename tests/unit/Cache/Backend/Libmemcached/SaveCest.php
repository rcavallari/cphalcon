<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Cache\Backend\Libmemcached;

use UnitTester;

class SaveCest
{
    /**
     * Tests Phalcon\Cache\Backend\Libmemcached :: save()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function cacheBackendLibmemcachedSave(UnitTester $I)
    {
        $I->wantToTest("Cache\Backend\Libmemcached - save()");
        $I->skipTest("Need implementation");
    }
}