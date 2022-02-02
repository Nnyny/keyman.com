<?php

require_once('includes/template.php');
require_once('includes/ui/downloads.php');
require_once('includes/appstore.php');
require_once('includes/playstore.php');

use Keyman\Site\Common\KeymanHosts;

// Required
head([
  'class' => 'keyman11',
  'title' => 'Keyman 15 is now in Beta!',
  'css' => ['template.css', 'dev.css', 'app-store-links.css', 'prism.css'],
  'js' => ['prism.js'],
  'showMenu' => true,
  'banner' => [
  'title' => 'Keyman 15.0 Beta',
    'image' => 'screenshots/14/typewriter.jpg',
    'background' => 'black'
  ]
]);
?>

<h2>Announcing the release of Keyman 15.0 Beta</h2>
<p class="red">TBD 2022</p>
<p>We are pleased to announce that Keyman 15.0 is now in beta!</p>
<br>

<h3>What's New?</h3>
<p>These major features are in all supported platforms:</p>
<ul>
  <li>
    Infrastructure for Rust - for future LDML keyboard support (#5162)
  </li>
  <li>
    Infrastructure for WASM - for future LDML keyboard support (#5233)
  </li>
  <li>
    Caps Lock Layer + double-tap gesture - touch platforms (#5988, #5989)
  </li>
  <li>
    Support for Caps-lock stores (capsAlwaysOff, shiftFreesCaps, capsOnOnly) (#5432, #5519)
  </li>
  <li>
    Start of Sentence detection - touch platforms (#5963)
  </li>
  <li>
    Inline On Screen Keyboard (#5665)
  </li>
  <li>
    Improved security in incxstr / decxstr
  </li>
  <li>
    Many bug fixes and improvements (see the <a href="<?= KeymanHosts::Instance()->help_keyman_com ?>/version-history">version history</a>)
  </li>
</ul>
<br>
<p>New Localizations - Many Nigerian languages provided by <a href='https://translatorswithoutborders.org/'>Translators Without Borders</a></p>
<ul>
  <li>
    Bura-Pabir
  </li>
  <li>
    Demgal Fulfulde
    </li>
  <li>
    Hausa
  </li>
  <li>
    Kanuri
  </li>
  <li>
    Kibaku
  </li>
  <li>
    Mandala (Wandala)
  </li>
  <li>
    Marghi
  </li>
  <li>
    Shuwa (Latin)
  </li>
  <li>
    Waha
  </li>
  <li>
    Simplified Chinese
  </li>
</ul>
<br>

<h3>What's Next?</h3>
<ul>
  <li>
    Check the <a href="https://blog.keyman.com/2020/03/keyman-roadmap-march-2020/">Keyman Roadmap</a> for upcoming features.
  </li>
</ul>
<br>

<h3>Keyman 15.0 Feedback</h3>
<ul>
  <li>Please send feedback about Keyman 15 to the
    <a href="https://community.software.sil.org/t/keyman-15-beta-feedback/5755">Keyman Community site</a> or submit bugs and feature requests to our
    <a href="https://github.com/keymanapp/keyman/issues/new/choose">Issue Tracker</a></li>
</ul>
<br>

<h1 class='red underline'>User Software</h1>

<?php
downloadSection('Keyman 15 for Windows',   'windows',     'keyman-$version.exe', 'beta');
?>

<h3>What's New in Keyman 15 for Windows?</h3>

<ul>
  <li>Use Keyman Core internally (#5443)</li>
</ul>



<?php
downloadSection('Keyman 15 for macOS',   'mac',     'keyman-$version.dmg', 'beta');
?>

<h3>What's New in Keyman 15 for macOS?</h3>

<ul>
  <li>Localizable UI through <a href="<?= KeymanHosts::Instance()->translate_keyman_com ?>">translate.keyman.com</a> (#5869)</li>
  <li>Display Unicode package name correctly instead of '????' (#6016)</li>
  <li>Add support for M1 processor (#5701)</li>
</ul>



<h2 id='linux' class='red underline'>Keyman 15 for Linux</h2>

<h3>What's New in Keyman 15 for Linux?</h3>

<ul>
  <li>Now supports Ubuntu 21.04 (Hirsute), 21.10 (Impish), and 22.04 (Jammy)</li>
  <li>Improvements in Debian packaging (#5022)</li>
  <li>Fix crash when displaying certain keyboard details (#5758)</li>
  <li>Caps Lock Stores (#5497)</li>
  <li>Support for Ubuntu Jammy 22.04 (#6037) and Impish 21.10 (#5334)</li>
  <li>fcitx5 integration (#5215)</li>
  <li>Improve installation of packages in shared location (#6015)</li>
  <li>Improvements in Debian packaging</li>
  <li>Automated integration tests with Keyman Core</li>
  <li>Lots of bugfixes</li>
</ul>

<?php
downloadSection('Keyman 15 for Android', 'android', 'keyman-$version.apk', 'beta');
?>

<?= $playstoreTable ?>

<h3>What's new in Keyman 15 for Android?</h3>

<ul>
  <li>Keyman Engine no longer needs internet access </li>
  <li>English keyboard can now be removed (#5838)</li>
  <li>Add a menu to adjust keyboard height (#5606)</li>
  <li>Add a settings option to change the displayed keyboard name on the spacebar</li>
  <li>Improve the globe key experience for switching keyboards (#5437, #5973):
    <ol>
      <li>Short press and release the globe key to immediately switch to next keyboard</li>
      <li>Long press and release the globe key to bring up the keyboard picker menu</li>
      <li>Allow switching to other system IME's in the keyboard picker menu</li>
    </ol>
  </li>
  <li>Select numeric layer when entering a number field (#5664)</li>
  <li>Improved performance (#5376)</li>
</ul>

<h2 id='ios' class="red underline">Keyman 15 for iPhone and iPad</h2>

<?= $appstoreTable ?>

<h3>What's new in Keyman 15 for iPhone and iPad?</h3>

<ul>
  <li>General polish, bug fixes, and performance improvments</li>
  <li>Update minimum iOS version to 12.1 (#5165)</li>
</ul>





<?php
downloadSection('KeymanWeb 15', 'web', 'keymanweb-$version.zip', 'beta');
?>

<h3>What's New in KeymanWeb 15?</h3>

<ul>
  <li>Refactored OSK Core</li>
  <li>Promise-based API (#5389, #5260, #5121)</li>
  <li>Improve keyboard switch performance (#5958)</li>
  <li>Enable mouse interaction for the predictive banner (#5739)</li>
</ul>
<br>

<h3>What's New in Infrastructure and Build?</h3>
<ul>
  <li>Many incremental improvements to status.keyman.com</li>
  <li>Gradual update of <a href='https://help.keyman.com/'>help site</a> to Markdown</li>
  <li>Various other bug fixes, polish</li>
</ul>
<br>


<h1 class='red underline'>Developer Software</h1>

<?php
downloadSection('Keyman Developer 15',    'developer', 'keymandeveloper-$version.exe', 'beta');
?>

<h3>What's new in Keyman Developer 15?</h3>

<ul>
  <li>Core-based debugger (#5425, #5448, #5513)</li>
  <li>Keyman Developer Server (#6033,#6034,#6035,#6036)</li>
  <li>Improved native-mode debugger (#5696, #5640, #5647)</li>
  <li>Web test no longer needs Developer tools for touch testing (#5723)</li>
  <li>
    Add support for <code class='language-java'>U_xxxx_yyyy_...</code> 
    indentifiers so you can emit more than a single Unicode character with 
    touch keys without additional kmn code (#5894)
  </li>
  <li>Keyman Developer debugger no longer depends on Keyman for Windows (#5588)</li>
  <li>live reload of web debugger (#6035)</li>
</ul>

<br>

<h3>Breaking changes for keyboard developers</h3>

<p>We work hard to minimize the potential for breaking changes to Keyman. We sometimes must make a change which may
not be 100% backwardly compatible, either to correct a bug, or to address security issues. The following issues are
known breaking changes in Keyman 15.0:</p>

<ul>
  <li>Keyman for Android now enforces minimum Chrome version 37.0 (#5017)</li>
  <li>KeymanWeb's OSK field (keyman.osk) is now only available after the promise returned from keyman.init is fulfilled (#5412)
</ul>

<br>

<h3>Changes for Keyman Engine</h3>

<!--p><a href='keyman-engine-changes'>Changes for Keyman Engine</a></p-->

<h2>Get Involved</h2>
<p>There are many ways you can help: <a href='/about/get-involved'>get involved</a> in the Keyman project now!
</p>
