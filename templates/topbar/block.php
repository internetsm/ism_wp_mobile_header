<div class="ism-mobile-header <?php echo $animated ? "is-animated" : ""; ?> <?php echo $bottom_position ? "bottom" : "top"; ?> quantity-<?php echo count($detail_fields); ?>"
     animation="<?php echo $animation; ?>">
    <?php foreach ($detail_fields as $field): ?>

        <?php $icon = $fontawesome ? "<i class='fa fa-" . $field['icon'] . "'></i>" : ""; ?>
        <a target="<?php echo $field['target']; ?>" href="<?php echo $field['value']; ?>"><?php echo $icon; ?></a>
    <?php endforeach; ?>
</div>
