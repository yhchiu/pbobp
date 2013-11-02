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

<h1><?= lang('products') ?></h1>

<? if(isset($message)) { ?>
<p><b><i><?= $message ?></i></b></p>
<? } ?>

<form method="post">
<input type="hidden" name="action" value="create" />
<?= lang('product_name') ?>: <input type="text" name="name" />
<input type="submit" value="<?= lang('product_create') ?>" />
</form>

<table>
<tr>
	<th><?= lang('product_name') ?></th>
	<th><?= lang('uniqueid') ?></th>
	<th><?= lang('interface') ?></th>
	<th><?= lang('delete') ?></th>
</tr>

<? foreach($products as $product) { ?>
<tr>
	<td><a href="product.php?product_id=<?= $product['product_id']?>"><?= $product['name'] ?></a></td>
	<td><?= $product['uniqueid'] ?></td>
	<td><?= $product['plugin_name'] ?></td>
	<td><form method="POST">
		<input type="hidden" name="product_id" value="<?= $product['product_id'] ?>" />
		<input type="hidden" name="action" value="delete" />
		<input type="submit" value="<?= lang('delete') ?>" />
		</form>
		</td>
</tr>
<? } ?>
</table>

<table>
<tr>
	<th><?= lang('name') ?></th>
	<th><?= lang('description') ?></th>
	<th><?= lang('hidden') ?></th>
	<th><?= lang('update') ?></th>
	<th><?= lang('delete') ?></th>
</tr>

<? foreach($groups as $group) { ?>
<tr>
<form method="POST">
<input type="hidden" name="group_id" value="<?= $group['group_id'] ?>" />
	<td><input type="text" name="name" value="<?= $group['name'] ?>" /></td>
	<td><input type="text" name="description" value="<?= $group['description'] ?>" /></td>
	<td><input type="checkbox" name="hidden" value="true" <?= $group['hidden'] ? "checked" : "" ?> /></td>
	<td><button type="submit" name="action" value="update_group">Update</button></td>
	<td><button type="submit" name="action" value="delete_group">Delete</button></td>
</form>
</tr>
<? } ?>

<tr>
<form method="POST">
	<td><input type="text" name="name" /></td>
	<td><input type="text" name="description" /></td>
	<td><input type="checkbox" name="hidden" value="true" /></td>
	<td><button type="submit" name="action" value="create_group"><?= lang('add') ?></button></td>
	<td></td>
</form>
</tr>
</table>
