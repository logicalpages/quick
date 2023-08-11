<?php
require_once __DIR__ . '/../shared/header.php';

/** @var string $title */
/** @var array $invoices */

//var_dump($invoices);
?>
<h1><?= $title; ?></h1>
<a class="btn btn-primary" href="/invoices/new" role="button" aria-disabled="true">New Invoice</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Department</th>

    </tr>
    </thead>
    <tbody>
    <?php if (empty($invoices)): ?>
        <tr>
            <td colspan="7">
                There are no invoices.
            </td>
        </tr>
    <?php else: ?>
        <?php foreach ($invoices as $invoice): ?>
            <tr>

                <td><?= $invoice['name']; ?></td>
                <td><?= $invoice['school'] . " - " . $invoice['department']; ?></td>

            </tr>
        <?php endforeach; ?>
    <?php endif; ?>
    </tbody>
</table>
