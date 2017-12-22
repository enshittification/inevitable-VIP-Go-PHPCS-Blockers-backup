<?php
/**
 * PHPCS cross-version compatibility helper.
 *
 * @package VIPCS\StephBoisvertWordPressVIPMinimum
 * @since   0.13.0
 */

namespace StephBoisvertWordPressVIPMinimum;

/**
 * Load the WPCS/WordPress/autoload.php file and define possibly missing class when run agains PHPCS 2.x.
 *
 * @return void
 */
function load_phpcs_helper_file() {

	foreach ( \PHP_CodeSniffer\Util\Standards::getInstalledStandardDetails( 'WordPress' ) as $standard => $details ) {
		if ( 'WordPress' === $standard ) {
			require_once $details['path'] . '/PHPCSAliases.php';
			return;
		}
	}
}

load_phpcs_helper_file();

