<?php
defined('_JEXEC') or die;
use Joomla\CMS\HTML\HTMLHelper;

if (empty($togglers))
{
	return '';
}

#echo ' 4654sd48sa7d98sD81s8d71dsa <pre>' . print_r($togglers, true) . '</pre>';exit;
/*
Achtung. Das ist Pfad in templates/MEINTEMPLATE/css. Nicht aus /media/
Die wird kompiliert mit plg_system_lessghsvs.
*/
HTMLHelper::_('stylesheet', 'mod_downloadaccordionghsvs.min.css',
	['version' => 'auto', 'relative' => true]);
$modId = 'mod_downloadaccordionghsvs-' . $module->id;
?>
<?php // Klasse eorRemoveP nicht verschieben.! Siehe KubikRubik EOR-Plugin. ?>
<div class="eorRemoveP mod_downloadaccordionghsvs <?php echo $modId; ?>">

	<p class="h1 text-uppercase mb-5">
		<?php echo $accordionHeadline; ?>
	</p>


	<div id="<?php echo $modId; ?>" class="ACCORDION" role="tablist">

		<?php
		foreach ($togglers as $key => $toggler)
		{
			$KEY = $modId . '-' . $key;
			?>
			<div class=accordionCard>

				<div class="accordionToggler collapsed d-flex flex-row align-items-stretch"
					data-toggle="collapse" data-target="#collapse_<?php echo $KEY; ?>" role="tab"
					aria-expanded="true" aria-controls="collapse_<?php echo $KEY; ?>">

					<div class="d-flex"><i class="fa fa-plus acc_infoIcon"></i></div>
					<div>&nbsp;</div>
					<div class="w-100">
						<button class="btn2 btn-default2 karriere_btn h-100 w-100" id="heading_<?php echo $KEY; ?>">
							<?php echo $toggler->name; ?>
						</button>
					</div>

				</div><!--/.accordionToggler-->

				<div id="collapse_<?php echo $KEY; ?>" class="collapse "
					aria-labelledby="heading_<?php echo $KEY; ?>"
					data-parent=".ACCORDION">

					<div class="contentZeugs container-fluid">

						<div class="fw-bold mb-2"><?php echo $toggler->textHeadline; ?></div>
						<div class="float-end div4foto"><img src="<?php echo $toggler->foto; ?>" alt=""></div>
						<div class="mb-2_5rem"><?php echo $toggler->text; ?></div>

						<?php
						if ($toggler->hasDownloads > 0)
						{ ?>
							<div class="row row-cols-1 row-cols-xs-2 row-cols-sm-3 row-cols-md-2 row-cols-lg-2 justify-content-centerssssssssssss clearfix">
								<?php
								foreach ($toggler->downloads as $download)
								{ ?>
									<div class="col">
										<div class="card h-100">
											<div class="card-body">
												<?php
												if ($download->downloadPreview)
												{ ?>
												<div class="card-img">
													<img src="<?php echo $download->downloadPreview; ?>" alt=""
													class=" border-img border-1">
												</div>
												<?php
												} else { ?>
												<div class="card-img">
													<b><?php echo $download->downloadFileName; ?></b>
												</div>
												<?php
												} // $download->downloadPreview) ?>
											</div><!--/.card-body-->

											<div class="card-footer">
												<a class="btn2 btn-default2 h-100 w-100" href="<?php echo $download->downloadFile; ?>">
													<span class="fa fa-download"> </span>
													<?php echo $toggler->buttonText; ?>
												</a>
											</div><!--/.card-footer-->
										</div><!--/.card-->
									</div><!--/.col-->
								<?php
								} // foreach ($toggler->downloads ?>
							</div><!--/.row-->
						<?php
						} // if ($toggler->hasDownloads ?>
					</div><!--/.page -->
				</div><!--/.collapse -->
			</div><!--/.accordionCard -->
		<?php
		} // foreach ($togglers ?>
	</div><!--/.ACCORDION-->
<?php // Klasse .eorRemoveP nicht verschieben! Siehe KubikRubik EOR-Plugin. ?>
</div><!--/.eorRemoveP .mod_downloadaccordionghsvs-->
