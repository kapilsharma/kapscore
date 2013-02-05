<?php
/**
 * @copyright (c) 2012-13, Kapil Sharma 'kapil at kapil sharma dot info'.
 * 
 * This file is part of KAPsCore (Noframework Framework).
 * 
 * KAPsCore is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * KAPsCore is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with KAPsCore. If not, see <http://www.gnu.org/licenses/>.
 * 
 * This copyright message must remain in all source files without
 * any change. Same copy of KAPsCore is also available in LGPL flavour
 * or any other licence that fits your need however for that, you need
 * to contact Kapil Sharma. Visit project website for more details on
 * license.
 */

//Defining array to hold configurations.
$kapsconfig=Array();

//Detecting protocol.
$kapsconfig['PROTOCOL']         = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https' : 'http';

//Detecting Host.
$kapsconfig['HOST_NAME']        = $_SERVER['HTTP_HOST'];

//BASE_PATH defines the Absolute path on the operating system. This is useful
//for file handling during upload operation or loading and file of processing.
$kapsconfig['BASE_PATH']        = realpath(dirname(__FILE__)."/../../").DIRECTORY_SEPARATOR;

//ABSOLUTE_PATH is path within document root.
$kapsconfig['ABSOLUTE_PATH']    = strtolower(str_replace(str_replace("/",DIRECTORY_SEPARATOR,$_SERVER['DOCUMENT_ROOT']),"",$kapsconfig['BASE_PATH']));

//Absolute URL of website is same as absolute path. Just defining to avoid confusions.
$kapsconfig['ABSOLUTE_URL']    = str_replace('\\', '/', $kapsconfig['ABSOLUTE_PATH']);

//URL of website.
$kapsconfig['BASE_URL']         = $kapsconfig['PROTOCOL'].'://'.$kapsconfig['HOST_NAME'].$kapsconfig['ABSOLUTE_URL'];

/*******************************************************************************
 * Now with all the basic path and URL set, we must now set paths and URL that *
 * we will frequently use in the website. These can be image directory, script *
 * directory, user directory for user uploads or whatever seem useful and      *
 * frequently used paths in the website.                                       *
 *******************************************************************************/

//All web applications have images. Lets define image directory for easier access.
//We generally need images to display but not process so we will only define URL/
$kapsconfig['IMAGE_URL'] = $kapsconfig['BASE_URL'].'images/';

//All web sites also need CSS and script, lets declare their path.
$kapsconfig['STYLE_URL'] = $kapsconfig['BASE_URL'].'css/';
$kapsconfig['SCRIPT_URL'] = $kapsconfig['BASE_URL'].'js/';

//User uploaded files like profile picture must also be available for web so define their URL.
//To upload, we also need to process them so we also need to define path.
$kapsconfig['USER_FILES_URL'] = $kapsconfig['BASE_URL'].'users/';
$kapsconfig['USER_FILES_PATH'] = $kapsconfig['BASE_PATH'].'users'.DIRECTORY_SEPARATOR;

//Library Path
//This is the path where we will keep our main and reusable code files.
$kapsconfig['LIB_PATH'] = $kapsconfig['BASE_PATH'].'lib'.DIRECTORY_SEPARATOR;
$kapsconfig['KAPSCORE_DSP_PATH'] = $kapsconfig['KAPSCORE_PATH'].'dsp'.DIRECTORY_SEPARATOR;

/**
 * Ideally these things should go in controller but since we are using distributed
 * controllers, and all controllers are including config.php file, we can do some
 * common initialization in the config file. Still it is not recommended.
 */
//This is the directory where we will do project specific coding.
$kapsconfig['APP_PATH'] = $kapsconfig['LIB_PATH'].'app'.DIRECTORY_SEPARATOR;
//We will do most common coding here so that it can be reused in future projects.
$kapsconfig['KAPSCORE_PATH'] = $kapsconfig['BASE_PATH'].'..'.DIRECTORY_SEPARATOR.'..'
                                .DIRECTORY_SEPARATOR.'kapscore'.DIRECTORY_SEPARATOR.'dsp';