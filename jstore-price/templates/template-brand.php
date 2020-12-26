<?php
/**
 * @package YOOtheme J2Store builder element
 * @copyright Copyright (c)2020 Igor Generalov / generalov.net
 * @license GNU GPL v3 or later
 */
 ?>
<div class="uk-margin-small">
	<?php if ($props['link'] == '1') : ?>
	    <div class="uk-child-width-expand uk-grid-small uk-flex-middle uk-margin-small uk-grid" uk-grid>
		    <div class="uk-width-small uk-text-break">
		    	<div class="el-title uk-text-muted">
			    	<?php echo JText::_('J2STORE_PRODUCT_MANUFACTURER_NAME'); ?>:
		    	</div>
		    </div>
			<div>
			    <div class="">
				<?php $url = JRoute::_('index.php?option=com_content&view=article&id=');?>
				    <a href="<?php echo $url;?>" class="uk-<?= $props['link_style']; ?>" target="<?= $props['link_target']; ?>">
						Apple
	    			</a>
			    </div>
		    </div>
		</div>	    					
	    		
	    <?php elseif ($props['link'] == '0') : ?>
	    	<div class="uk-child-width-expand uk-grid-small uk-flex-middle uk-margin-small uk-grid" uk-grid>
		    	<div class="uk-width-small uk-text-break">
		    		<div class="el-title uk-text-primary">
			    		<?php echo JText::_('J2STORE_PRODUCT_MANUFACTURER_NAME'); ?>:
		    		</div>
		    	</div>
				<div>
					<div class="el-meta">
						Apple
					</div>
				</div>
			</div>
	    <?php else : ?>
	<?php endif ?>	
</div>