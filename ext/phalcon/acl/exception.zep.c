
#ifdef HAVE_CONFIG_H
#include "../../ext_config.h"
#endif

#include <php.h>
#include "../../php_ext.h"
#include "../../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"


/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
/**
 * Phalcon\Acl\Exception
 *
 * Class for exceptions thrown by Phalcon\Acl
 */
ZEPHIR_INIT_CLASS(Phalcon_Acl_Exception) {

	ZEPHIR_REGISTER_CLASS_EX(Phalcon\\Acl, Exception, phalcon, acl_exception, phalcon_exception_ce, NULL, 0);

	return SUCCESS;

}

