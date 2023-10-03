<style>
    thead td {font-weight:bold;}
</style>

<table>
    <thead>
    <tr>
        <th>Prova</th>
        <th>Marca</th>
        <th>Atleta</th>
        <th>Natalici</th>
        <th>Club</th>
        <th>Data</th>
        <th>Lloc</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($records as $category => $element) { ?>
        <tr>
            <td><?= $category?></td>
            <td><?= $element["marca"] ?> </td>
            <td><?= $element["atleta"] ?> </td>
            <td><?= $element["natalici"] ?> </td>
            <td><?= $element["club"] ?> </td>
            <td><?= $element["data"] ?> </td>
            <td><?= $element["lloc"] ?> </td>
        </tr>
    <?php } ?>
    </tbody>
</table>