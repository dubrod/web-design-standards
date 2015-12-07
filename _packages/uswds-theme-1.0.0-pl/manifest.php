<?php return array (
  'manifest-version' => '1.1',
  'manifest-attributes' => 
  array (
    'license' => 'The MIT License (MIT)

Copyright (c) 2015 MODX Systems, LLC (hello@modx.com) 

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.',
    'readme' => '# U.S. Web Design Standards Theme

MODX 2.4 Theme with nearly every layout combination possible in the MXT Theme Framework. Using the U.S. Web Design Standards.
',
    'changelog' => '# U.S. Web Design Standards 1.0.0
- Basic Package with Grid, Gallery, Listing, and Page Layouts via MXT Theme System.
',
    'setup-options' => 'uswds-theme-1.0.0-pl/setup-options.php',
    'requires' => 
    array (
      'mxt' => '>=1.2.1',
      'getresources' => '>=1.6.1',
    ),
  ),
  'manifest-vehicles' => 
  array (
    0 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modNamespace',
      'guid' => '69cf26182b666bd77846cf2d21c68ee2',
      'native_key' => 'uswds-theme',
      'filename' => 'modNamespace/2078bd070028bd5c7ef3207fb4dbf7b8.vehicle',
      'namespace' => 'uswds-theme',
    ),
    1 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modSystemSetting',
      'guid' => '17728bee89fd5bc990d5145904b85d1e',
      'native_key' => 'uswds-theme.footer_tpl',
      'filename' => 'modSystemSetting/203d1a61b21e759b686707de88269126.vehicle',
      'namespace' => 'uswds-theme',
    ),
    2 => 
    array (
      'vehicle_package' => 'transport',
      'vehicle_class' => 'xPDOObjectVehicle',
      'class' => 'modCategory',
      'guid' => 'a6934e21dbfde51884eed40c64795895',
      'native_key' => NULL,
      'filename' => 'modCategory/502149f4ef47fc5b08a2e72698fbffad.vehicle',
      'namespace' => 'uswds-theme',
    ),
  ),
);