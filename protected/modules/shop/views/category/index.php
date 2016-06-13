<div class="page-head">
    <h2 class="pull-left">Category</h2>
    <div class="clearfix"></div>
</div>

<div class="container">
<div class="widget">
<?php


$this->Widget('CTreeView', array(
	'data' => Category::getChilds(0),
	'animated' => 'slow',	
	'collapsed' => 'true',	
	'persist' => 'cookie',	
	));

?>
</div>
</div>
