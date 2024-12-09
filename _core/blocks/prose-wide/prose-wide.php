<?php 
    $block_id = isset($block['anchor']) ? $block['anchor'] : 'block-' . $block['id'];
    $block_class = isset($block['className']) ? $block['className'] : '';
?>

<div id="<?php echo esc_attr($block_id); ?>" class="<?php echo esc_attr($block_class); ?>">
    <div class="max-w-full lg:max-w-none w-[996px] relative left-1/2 -translate-x-1/2">
        <InnerBlocks />
    </div>
</div>
