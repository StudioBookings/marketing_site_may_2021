<?php

$vendorDir = dirname(__DIR__);

return array (
  'craftcms/ckeditor' => 
  array (
    'class' => 'craft\\ckeditor\\Plugin',
    'basePath' => $vendorDir . '/craftcms/ckeditor/src',
    'handle' => 'ckeditor',
    'aliases' => 
    array (
      '@craft/ckeditor' => $vendorDir . '/craftcms/ckeditor/src',
    ),
    'name' => 'CKEditor',
    'version' => '1.0.0-beta.2',
    'description' => 'Edit rich text content in Craft CMS using CKEditor.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/ckeditor',
    'changelogUrl' => 'https://raw.githubusercontent.com/craftcms/ckeditor/master/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/craftcms/ckeditor/archive/master.zip',
  ),
  'stdio/booking' => 
  array (
    'class' => 'stdio\\booking\\Booking',
    'basePath' => $vendorDir . '/stdio/booking/src',
    'handle' => 'booking',
    'aliases' => 
    array (
      '@stdio/booking' => $vendorDir . '/stdio/booking/src',
    ),
    'name' => 'booking',
    'version' => '1.0.0',
    'description' => 'booking plugin',
    'developer' => 'devloper',
    'developerUrl' => 'studio.test',
    'documentationUrl' => '???',
    'changelogUrl' => '???',
    'hasCpSettings' => false,
    'hasCpSection' => false,
    'components' => 
    array (
      'newservice' => 'stdio\\booking\\services\\Newservice',
    ),
  ),
);
