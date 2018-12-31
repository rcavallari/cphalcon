<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Integration\Mvc\Url;

use Phalcon\Mvc\Url;
use IntegrationTester;

/**
 * Class GetSetBaseUriCest
 *
 * @package Phalcon\Test\Integration\Mvc\Url
 */
class GetSetBaseUriCest
{
    /**
     * Tests Phalcon\Mvc\Url :: getBaseUri()/setBaseUri()
     *
     * @param IntegrationTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function mvcUrlGetSetBaseUri(IntegrationTester $I)
    {
        $I->wantToTest("Mvc\Url - getBaseUri()/setBaseUri()");
        $url = new Url();

        $path = 'https://phalconphp.com';
        $url->setBaseUri($path);

        $expected = $path;
        $actual   = $url->getBaseUri();
        $I->assertEquals($expected, $actual);
    }
}