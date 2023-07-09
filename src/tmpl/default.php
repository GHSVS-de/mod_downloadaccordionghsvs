<?php
defined('_JEXEC') or die;
use Joomla\CMS\HTML\HTMLHelper;

if (!$list)
{
	return '';
}

/*
Achtung. Das ist Pfad in templates/MEINTEMPLATE/css.
Die wird kompiliert mit plg_system_lessghsvs.
*/
HTMLHelper::_('stylesheet', 'mod_downloadaccordionghsvs.min.css',
	['version' => 'auto', 'relative' => true]);
$modId = 'mod_downloadaccordionghsvs-' . $module->id;
?>
<div class="mod_downloadaccordionghsvs text-center <?php echo $modId; ?>">
	<?php if ($module->showtitle) { ?>
		<h3><?php echo $module->title; ?></h3>
	<?php } ?>
	<?php if ($module->content) { ?>
		<div><?php echo $module->content; ?></div>
	<?php } ?>
	<div class="row row-cols-1 row-cols-sm-2  row-cols-md-3 g-2">
		<?php
		foreach ($list as $key => $card)
		{ ?>
			<div class="col">
				<div class="card h-100 border-danger">
					<div class="card-body">
						<div class="card-img">
							<img src="<?php echo $card->foto; ?>" alt="">
						</div>
						<div class="card-title">
							<h4 class="h2"><?php echo $card->name; ?></h4>
						</div><!--/.card-title-->
						<div class="card-text">
							<p>
								<?php echo $card->text; ?>
							</p>
						</div>
					</div><!--/.card-body-->

					<div class="card-footer">
						<p><a href="<?php echo $card->file; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-icon up"><em class="fa fa-sign-in"> </em> <?php echo $card->buttonText; ?></a></p>
					</div><!--/.card-footer-->
				</div><!--/.card-->
			</div><!--/.col-->
		<?php
		} ?>
	</div><!--/.row-->
</div><!--/.mod_downloadghsvs-->
