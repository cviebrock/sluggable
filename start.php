<?php

/**
 * Easy slugging for your Eloquent models.
 *
 * @package Sluggable
 * @version 1.0
 * @author  Colin Viebrock <colin@viebrock.ca>
 * @link    http://github.com/cviebrock/sluggable
 */


Autoloader::map(array(
	'Sluggable' => __DIR__ . DS . 'sluggable.php',
));


// Listen to the Eloquent save event so we can do our thing:

Event::listen('eloquent.saving',  array('Sluggable','make') );
