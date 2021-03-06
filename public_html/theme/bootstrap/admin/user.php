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

<h1><?= $name ?></h1>

<h3><?= lang('user_details') ?></h3>

<table class="table">
<tr>
	<th><?= lang('email_address') ?></th>
	<td><?= $user['email'] ?></td>
</tr>
<tr>
	<th><?= lang('access') ?></th>
	<td><?= $user['access'] ?></td>
</tr>
<tr>
	<th><?= lang('credit') ?></th>
	<td><?= $user['credit_nice'] ?></td>
</tr>

<? foreach($fields as $field) { ?>
<tr>
	<th><?= $field['name'] ?></th>
	<td><?= $field['value'] ?></td>
</tr>
<? } ?>
</table>

<h3><?= lang('services') ?></h3>

<table>
<tr>
	<td><a href="service_add.php?user_id=<?= $user['user_id'] ?>"><button type="button" class="btn btn-primary"><?= lang('service_add_new') ?></button></a></td>
	<td><a href="ticket_open.php?user_id=<?= $user['user_id'] ?>"><button type="button" class="btn btn-primary"><?= lang('ticket_open') ?></button></a></td>
	<td>
		<form method="POST">
		<input type="hidden" name="user_id" value="<?= $user['user_id'] ?>" />
		<button type="submit" class="btn btn-primary" name="action" value="morph"><?= lang('morph') ?></button>
		</form>
	</td>
	<td><a href="tickets.php?constraint_user_id=<?= $user['user_id'] ?>"><button type="button" class="btn btn-primary"><?= lang('tickets') ?></button></a></td>
	<td><a href="services.php?constraint_user_id=<?= $user['user_id'] ?>"><button type="button" class="btn btn-primary"><?= lang('services') ?></button></a></td>
	<td><a href="invoices.php?constraint_user_id=<?= $user['user_id'] ?>"><button type="button" class="btn btn-primary"><?= lang('invoices') ?></button></a></td>
</tr>
</table>

<table class="table">
<tr>
	<th><?= lang('name') ?></th>
	<th><?= lang('product') ?></th>
	<th><?= lang('date_due') ?></th>
	<th><?= lang('amount_recurring') ?></th>
	<th><?= lang('duration') ?></th>
	<th><?= lang('status') ?></th>
	<th><?= lang('date_created') ?></th>
</tr>

<? foreach($services as $service) { ?>
<tr>
	<td><a href="service.php?service_id=<?= $service['service_id'] ?>"><?= $service['name'] ?></a></td>
	<td><a href="product.php?product_id=<?= $service['product_id'] ?>"><?= $service['product_name'] ?></a></td>
	<td><?= $service['recurring_date'] ?></td>
	<td><?= $service['recurring_amount_nice'] ?></td>
	<td><?= lang($service['duration_nice']) ?></td>
	<td><?= lang($service['status_nice']) ?></td>
	<td><?= $service['creation_date'] ?></td>
</tr>
<? } ?>
</table>
