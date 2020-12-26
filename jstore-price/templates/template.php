<?php
/**
 * @package YOOtheme J2Store builder element
 * @copyright Copyright (c)2020 Igor Generalov / generalov.net
 * @license GNU GPL v3 or later
 */
 
$app = JFactory::getApplication();

$el = $this->el($props['price_element'], [

    'class' => [
        'uk-{price_style}',
        'uk-heading-{price_decoration}',
        'uk-font-{price_font_family}',
        'uk-text-{price_color} {@!price_color: background}',
        'uk-margin-remove {position: absolute}',
    ],

]);

$el = $this->el('div', [
	
    'class' => [
        'uk-card uk-card-{style}',
        'uk-panel {@!style}',
        'uk-card uk-card-{style} [uk-card-{size}]', 
    ],
    'style' => [
        'min-height: {min_height}px',
    ],
    'uk-grid' => true,
    
]);
?>

<?= $el($props, $attrs) ?>

	<div class="tm-sku">
    	<?php if ($props['sku'] == '1') : ?>	    	
    		<?php   $link = include "{$__dir}/template-sku.php"; ?>
		<?php endif ?>
    
		<?php if ($props['brand'] == '1') : ?>
    		<?php   $link = include "{$__dir}/template-brand.php"; ?>
		<?php endif ?>
	</div>
    
    <?php if ($props['price'] == '1') : ?>
    	<?php   $link = include "{$__dir}/template-price.php"; ?>	    
	<?php endif ?>
    
    <?php if ($props['cart'] == '1') : ?>
		<?php   $link = include "{$__dir}/template-cart.php"; ?> 	
	<?php endif ?>
		
<?= $el->end() ?>