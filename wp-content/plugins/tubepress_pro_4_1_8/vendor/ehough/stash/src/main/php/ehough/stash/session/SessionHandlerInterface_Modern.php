<?php

/*
 * This file is part of the Stash package.
 *
 * (c) Robert Hafner <tedivm@tedivm.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * This is a filthy hack to deal with the differences between php5.3 and php5.4.
 *
 * @package Stash
 * @author  Robert Hafner <tedivm@tedivm.com>
 */

// It's impossible to get complete code coverage because of the different
// php versions involved.

// @codeCoverageIgnoreStart
interface ehough_stash_session_SessionHandlerInterface extends SessionHandlerInterface {}
//@codeCoverageIgnoreStart
