<?php
/**
 * @package YOOtheme J2Store builder element
 * @copyright Copyright (c)2020 Igor Generalov / generalov.net
 * @license GNU GPL v3 or later
 */
 ?>
 <div class="tm-qty uk-margin">
	<div class="uk-flex">
	    <div class="">	    			    	
		    <a class="uk-icon-button uk-icon" uk-icon="icon: minus; width: 16; height: 16;" href="#"></a>
		    <input type="text" class="uk-input uk-text-center" placeholder="1"></input>
		    <a class="uk-icon-button uk-icon" uk-icon="icon: plus; width: 16; height: 16;" href="#"></a>
	    </div>
	    <div>
	    	<button class="uk-button uk-button-<?= $props['cart_style']; ?> uk-margin-small-left">
	    		<span class="uk-text-middle"><?php echo JText::_('J2STORE_ADD_TO_CART'); ?></span>
				<span class="uk-margin-small-left uk-icon" uk-icon="icon: cart"></span>
			</button>
		</div>
	</div>
</div>
