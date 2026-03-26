<?php namespace ProcessWire;

if(!defined("PROCESSWIRE")) die();

/** @var Wire $wire */

/**
 * ProcessWire Bootstrap Initialization
 * ====================================
 * This init.php file is called during ProcessWire bootstrap initialization process.
 * This occurs after all autoload modules have been initialized, but before the current page
 * has been determined. This is a good place to attach hooks.
 */

// Load Composer autoloader for GeoIP2
$vendorAutoload = wire('config')->paths->root . 'vendor/autoload.php';
if(file_exists($vendorAutoload)) {
    require_once $vendorAutoload;
}

/**
 * Geo-Targeting Hook
 * Redirects visitors from Uganda/Kenya to their country-specific pages
 */
$wire->addHookBefore('Page::render', function($event) {
    $page = $event->object;
    $session = wire('session');
    $config = wire('config');
    $input = wire('input');

    // Skip if already checked this session
    if($session->get('geo_checked')) return;

    // Skip admin pages
    if($page->template == 'admin') return;

    // Skip if explicit country override via URL parameter
    if($input->get('country')) {
        $session->set('geo_checked', true);
        return;
    }

    // Skip if already on a country page
    if($page->closest("template=country")->id) {
        $session->set('geo_checked', true);
        return;
    }

    // Only redirect from homepage
    if($page->template != 'home') {
        $session->set('geo_checked', true);
        return;
    }

    $ip = $_SERVER['REMOTE_ADDR'];

    // Skip localhost/private IPs
    if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) === false) {
        $session->set('geo_checked', true);
        return;
    }

    // Path to GeoLite2 database
    $dbPath = $config->paths->assets . 'geoip/GeoLite2-Country.mmdb';

    // Skip if database doesn't exist
    if(!file_exists($dbPath)) {
        $session->set('geo_checked', true);
        return;
    }

    // Skip if GeoIP2 library not available
    if(!class_exists('\GeoIp2\Database\Reader')) {
        $session->set('geo_checked', true);
        return;
    }

    try {
        $reader = new \GeoIp2\Database\Reader($dbPath);
        $record = $reader->country($ip);
        $countryCode = $record->country->isoCode;

        // Map ISO country codes to ProcessWire page IDs
        $countryMap = [
            'UG' => 1179, // Uganda
            'KE' => 1039, // Kenya
            'TZ' => 2081, // Tanzania
            'ZM' => 1337, // Zambia
        ];

        if(isset($countryMap[$countryCode])) {
            $target = wire('pages')->get($countryMap[$countryCode]);
            if($target->id && $target->viewable()) {
                $session->set('geo_checked', true);
                $session->set('geo_country', $countryCode);
                $session->redirect($target->url);
            }
        }
    } catch(\Exception $e) {
        // Log error but don't break the site
        wire('log')->save('geo-redirect', "GeoIP error for IP {$ip}: " . $e->getMessage());
    }

    $session->set('geo_checked', true);
});