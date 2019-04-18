<?php $total_time = 0; ?>
<?php $rand = rand(0,1000); ?>
<?php $counter = 1; ?>
<div class="qodef-recipe" id="qodef-recipe-print-<?php echo esc_attr($rand); ?>">
    <div class="qodef-recipe-basic-info">
        <div class="qodef-recipe-basic-text">
            <h3 class="qodef-recipe-name"><?php echo esc_html($recipe_name) ?></h3>
            <?php if(!empty($prep_time) || !empty($cook_time)) { ?>
                <?php if(!empty($prep_time) && is_numeric($prep_time)){ ?>
                    <?php $total_time += $prep_time;  ?>
                    <h5 class="qodef-recipe-info-title">
                        <?php echo esc_html__('Prep Time:', 'select-core'); ?>
                        <span class="qodef-recipe-info-value">
                            <?php echo esc_html($prep_time) . ' ' . esc_html__('Minutes', 'select-core'); ?>
                        </span>
                    </h5>
                <?php } ?>
                <?php if(!empty($cook_time) && is_numeric($cook_time)){ ?>
                    <?php $total_time += $cook_time;  ?>
                    <h5 class="qodef-recipe-info-title">
                        <?php echo esc_html__('Prep Time:', 'select-core'); ?>
                        <span class="qodef-recipe-info-value">
                            <?php echo esc_html($cook_time) . ' ' . esc_html__('Minutes', 'select-core'); ?>
                        </span>
                    </h5>
                <?php } ?>
                <?php if($total_time) { ?>
                    <h5 class="qodef-total-time">
                        <?php echo esc_html__('Total time:', 'select-core'); ?>
                        <span class="qodef-recipe-info-value">
                            <?php if(floor($total_time/60)) {
                                echo floor($total_time/60) . ' ' . esc_html__('Hour', 'select-core');
                            }?>
                        </span>
                        <span class="qodef-recipe-info-value">
                            <?php if($total_time%60) {
                                echo $total_time%60 . ' ' . esc_html__('Minutes', 'select-core');
                            }?>
                        </span>
                    </h5>
                <?php } ?>
                <?php if($servings) { ?>
            <h5 class="qodef-total-time">
                <?php echo esc_html__('Servings:', 'select-core'); ?>
                    <span class="qodef-recipe-info-value"> <?php echo esc_html($servings); ?> </span>
                <?php } ?>
            <?php } ?>
        </div>
        <div class="qodef-recipe-image">
            <?php echo wp_get_attachment_image($image, 'full'); ?>
        </div>
    </div>
    <div class="qodef-main-info">
        <div class="qodef-ingredients">
            <h4><?php echo esc_html__('Ingredients', 'select-core'); ?></h4>
            <?php for($i=1; $i<4; $i++){ ?>
                <div class="qodef-ingredient">
                    <?php if(!empty(${"name_$i"})) { ?>
                        <h5 class="qodef-ingredient-title">
                            <?php echo esc_html(${"name_$i"}); ?>
                        </h5>
                    <?php } ?>
                    <?php if(!empty(${"ingredients_$i"})) { ?>
                        <ul>
                            <?php foreach (${"ingredients_$i"} as $ingredient) { ?>
                                <li> <?php echo esc_html($ingredient['ingredient']); ?> </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <div class="qodef-instructions">
            <h4><?php echo esc_html__('Instructions', 'select-core'); ?></h4>
            <?php foreach($instructions as $instruction) {?>
                <div class="qodef-instruction">
                    <span class="qodef-instruction-numeration">
                        <?php echo esc_html($counter) . '.'; ?>
                    </span>
                    <?php echo esc_html($instruction['instruction'])?>
                </div>
            <?php
                $counter++;
            } ?>
            <a href="#" class="qodef-btn qodef-btn-medium qodef-btn-solid qodef-print-button"><?php echo esc_html__('Print', 'select-core'); ?></a>
        </div>
    </div>
    <div class="qodef-recipe-notes">
        <?php echo wp_kses_post($notes); ?>
    </div>

</div>