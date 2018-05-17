<div class="wrap">
    <h1>Ism Mobile Header</h1>

    <form method="post" action="" novalidate="novalidate">
        <input type="hidden" name="submit" value="1">
        <h3>Dettagli</h3>
        <table class="form-table">
            <tbody>
            <?php foreach ($detail_fields as $field): ?>
                <tr>
                    <th scope="row">
                        <label for="<?php echo $field['name']; ?>"><i class="fa fa-"></i>
                            &nbsp; <?php echo $field['label']; ?></label>
                    </th>
                    <td><input name="<?php echo $field['name']; ?>" type="text" id="<?php echo $field['name']; ?>"
                               value="<?php echo $field['value']; ?>" class="regular-text"></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <h3>Posizione</h3>
        <table class="form-table">
            <tbody>
            <?php foreach ($general_fields as $field): ?>
                <tr>
                    <th scope="row"><label for="<?php echo $field['name']; ?>"><?php echo $field['label']; ?></label>
                    </th>
                    <td>
                        <input type="checkbox" name="<?php echo $field['name']; ?>"
                               id="<?php echo $field['name']; ?>" <?php echo intval($field['value']) ? "checked='checked'" : ""; ?>>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>


        <p class="submit"><input type="submit" name="submit" id="submit" class="button button-primary"
                                 value="Salva le modifiche"></p></form>

</div>