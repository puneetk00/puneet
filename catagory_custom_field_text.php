<?php 

if($_category=Mage::registry('current_category')){
$_helper=Mage::helper('catalog/output');
if($_customattribute=(Mage::registry('current_category')->getCustomAttriubute()){ 
?>
<div class="category-description std">
<?php echo $_helper->categoryAttribute($_category, $_customattribute, 'custom_attriubute') ?>
</div>
<?php 
	}
}
?>