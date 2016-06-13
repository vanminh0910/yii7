<div class="tags well">
	<p><strong><?php echo CmsModule::t('Available tags'); ?></strong></p>
	<ul>
		<li><strong>{{url:name}}</strong> &mdash; <em><?php echo CmsModule::t('creates an URL to a page'); ?></em></li>
		<li><strong>{{image:id}}</strong> &mdash; <em><?php echo CmsModule::t('displays an image'); ?></em></li>
		<li><strong>{{email:address}}</strong> &mdash; <em><?php echo CmsModule::t('creates a mailto link'); ?></em></li>
		<li><strong>{{name|text}}</strong> &mdash; <em><?php echo CmsModule::t('creates a link to a page'); ?></em></li>
		<li><strong>{{address|text}}</strong> &mdash; <em><?php echo CmsModule::t('creates an external link'); ?></em></li>
		<li><strong>{{#anchor|text}}</strong> &mdash; <em><?php echo CmsModule::t('creates a link to an anchor on the page'); ?></em></li>
	</ul>
</div>