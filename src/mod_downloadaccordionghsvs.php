<?php
defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\HTML\HTMLHelper;

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx', ''), ENT_COMPAT, 'UTF-8');

// Kleiner Lapsus bei field-name ;-)
$cards = $params->get('fotos');
$accordionHeadline = $params->get('accordionHeadline', '');

#echo ' 4654sd48sa7d98sD81s8d71dsa <pre>' . print_r($cards, true) . '</pre>';exit;
/*
stdClass Object
(
    [fotos0] => stdClass Object
        (
            [name] => TÜV SÜD, ZERTIFIKAT DIN EN ISO 9001:2015
            [foto] => images/zertifikate/Tuev-Sued_Management-Service.png
            [textHeadline] => Musterheadline 1
            [text] => Dies ist ein Mustertext, der später durch den endgültigen Text ersetzt wird. Dies ist ein Mustertext, der später durch den endgültigen Text ersetzt wird. Dies ist ein Mustertext, der später durch den endgültigen Text ersetzt wird. Dies ist ein Mustertext, der später durch den endgültigen Text ersetzt wird.
            [buttonText] => Download
            [active] => 1
            [downloads] => stdClass Object
                (
                    [downloads0] => stdClass Object
                        (
                            [downloadFile] => images/zertifikate/tuev-1.pdf
                            [downloadPreview] => images/zertifikate/preview-tuev-1.jpg
                        )

                    [downloads1] => stdClass Object
                        (
                            [downloadFile] => images/zertifikate/tuev-2.pdf
                            [downloadPreview] => images/zertifikate/preview-tuev-2.jpg
                        )

                )

        )

)
*/

// Die Bereiche eines Accordions mit Toggler, Inhalten...
$togglers = [];

if (is_object($cards) && count(get_object_vars($cards)))
{
	$checker      = ['name', 'foto', 'textHeadline', 'text', 'buttonText'];
	$emptyChecker = ['name', 'foto', 'text', 'textHeadline'];

	foreach ($cards as $key => $card)
	{
		if ((int) $card->active !== 1)
		{
			unset($cards->$key);
			continue;
		}

		foreach ($checker as $what)
		{
			$card->$what = Text::_(trim((string) $card->$what));
		}

		$isEmptyCard = true;

		foreach ($emptyChecker as $what)
		{
			if ($isEmptyCard === true && $card->$what !== '')
			{
				$isEmptyCard = false;
			}
		}

		if ($isEmptyCard === true)
		{
			unset($cards->$key);
			continue;
		}

		$card->text = HTMLHelper::_('content.prepare', $card->text);

		$downloadChecker = ['downloadFile', 'downloadPreview'];

		if (
			!empty($card->downloads) && is_object($card->downloads)
			&& count(get_object_vars($card->downloads))
		) {
			$card->downloads = (array) $card->downloads;
		}
		else
		{
			$card->downloads = [];
		}

		foreach ($card->downloads as $key2 => $download)
		{
			$isEmptyDownload = true;

			foreach ($downloadChecker as $what)
			{
				if ($isEmptyDownload === true && $download->$what !== '')
				{
					$isEmptyDownload = false;
				}
			}

			if ($isEmptyDownload === true)
			{
				unset($card->downloads[$key2]);
				continue;
			}
			foreach ($downloadChecker as $what)
			{

				$tmp = explode('/', $card->downloads[$key2]->$what);
				$whatKey = $what . 'Name';
				$card->downloads[$key2]->$whatKey = array_pop($tmp);
			}
		}

		$card->hasDownloads = count($card->downloads);

		$togglers[] = $card;
	}
}

require ModuleHelper::getLayoutPath('mod_downloadaccordionghsvs', $params->get('layout', 'default'));
