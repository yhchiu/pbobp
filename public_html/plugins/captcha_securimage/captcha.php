<?php
/*

	pbobp
	Copyright [2013] [Favyen Bastani]

	This file is part of the pbobp source code.

	pbobp is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	pbobp source code is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with pbobp source code. If not, see <http://www.gnu.org/licenses/>.

*/

if(!isset($GLOBALS['IN_PBOBP'])) {
	die('Access denied.');
}
?>

<img id="captcha" src="<?= $basePath ?>/securimage/securimage_show.php" alt="CAPTCHA Image" /><br />
<?= $lang_plugin['enter_captcha'] ?>
<input type="text" name="captcha_code" size="10" maxlength="6" />
<a href="#" onclick="document.getElementById('captcha').src = '<?= $basePath ?>/securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>
