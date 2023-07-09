<?php
defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\Language\Text;
use Joomla\CMS\HTML\HTMLHelper;

/*
Siehe auch JLayout accordionKarriere.php.
Das sind die $bereiche im Karriere-Accordion mit den ->stellen:

 4654sd48sa7d98sD81s8d71dsa <pre>Array
(
    [0] => stdClass Object
        (
            [id] => 1
            [ordering] => 1
            [state] => 1
            [checked_out] => 0
            [checked_out_time] => 0000-00-00 00:00:00
            [created_by] => 990
            [modified_by] => 990
            [titel] => FORMENBAU
            [stellen] => Array
                (
                    [0] => stdClass Object
                        (
                            [id] => 6
                            [ordering] => 6
                            [state] => 1
                            [checked_out] => 0
                            [checked_out_time] => 0000-00-00 00:00:00
                            [created_by] => 376
                            [modified_by] => 990
                            [titel] => WERKZEUGMECHANIKER / STAHLFORMENBAUER (m/w/d)
                            [bereich] => 1
                            [conten] => <div class="page" title="Page 10">
<div class="section">
<div class="layoutArea">
<div class="column">
<p><strong>Ihre Herausforderung:<br /></strong>Sie bauen, adaptieren und warten technisch anspruchsvolle Spritzguss�werkzeuge in selbst�ndiger und qualit�tsbewusster Arbeitsweise.</p>
</div>
<div class="column"><strong>Ihr Profil: </strong></div>
<div class="column">Neben einer abgeschlossenen Berufsausbildung bringen Sie mehrere Jahre Berufserfahrung mit. Eine sichere Beherrschung der CNC/CN-Technologien in den Bereichen Fr�sen und/oder Erodieren wird vorausgesetzt.</div>
<div class="column"> </div>
<div class="column">
<p>Wenn Sie an einer krisensicheren Dauerstellung mit leistungsgerechter Bezahlung in einem modernen, mittelst�ndischen Industriebetrieb Interesse haben, senden Sie uns Ihre vollst�ndigen Bewerbungsunterlagen zu oder rufen Sie uns zur Vorabinformation gerne an.</p>
</div>
</div>
</div>
</div>
                        )

                    [1] => stdClass Object
                        (
                            [id] => 8
                            [ordering] => 8
                            [state] => 1
                            [checked_out] => 0
                            [checked_out_time] => 0000-00-00 00:00:00
                            [created_by] => 990
                            [modified_by] => 990
                            [titel] => AUSZUBILDENDER WERKZEUGMECHANIKER / STAHLFORMENBAUER (m/w/d)
                            [bereich] => 1
                            [conten] => <div class="page" title="Page 10">
<div class="section">
<div class="layoutArea">
<div class="column"><strong>Deine Herausforderung:</strong><br />Du stellst als Werkzeugmechaniker oder Werkzeugmechanikerin Werkzeuge f�r unsere industriellen Produktionsanlagen her. Mit Deiner hochpr�zisen Arbeit sorgst du daf�r, dass sp�ter in der Serienproduktion alles glatt geht. Du lernst Bohren, Fr�sen oder Schleifen, bis Deine Werkst�cke exakt einer technischen Zeichnung entsprechen. Mit Mess- und Pr�fger�ten kontrollierst Du die Ma�haltigkeit bis in den Bereich von wenigen tausendstel Millimetern, denn Genauigkeit ist in diesem Beruf das A und O! Neben traditionellen manuellen Bearbeitungsmethoden setzt Du CNC-gesteuerte Werkzeugmaschinen ein, die du selber programmierst, montierst Einzelteile zu fertigen Werkzeugen und pr�fst diese auf ihre korrekte Funktion. Du wartest und reparierst dar�ber hinaus z.B. besch�digte Spritzgussformen und Werkzeugteile.</div>
<div class="column"> </div>
<div class="column"><strong>Dein Profil:</strong></div>
<ul>
<li class="column">Du solltest etwas von Technik und Computern verstehen</li>
<li class="column">Du kannst Augen und H�nde geschickt koordinieren</li>
<li class="column">Du hast handwerkliches Geschick</li>
<li class="column">Du liebst Werken, Technik, Mathematik und Physik</li>
<li>Du arbeitest besonders sorgf�ltig</li>
<li>Du hast ein gutes r�umliches Vorstellungsverm�gen</li>
<li>Du hast einen guten Realschulabschluss</li>
</ul>
<p>Beginn Deiner Ausbildung ist der 01.09.2023.</p>
</div>
</div>
</div>
                        )

                )

        )

    [1] => stdClass Object
        (
            [id] => 2
            [ordering] => 2
            [state] => 1
            [checked_out] => 0
            [checked_out_time] => 0000-00-00 00:00:00
            [created_by] => 990
            [modified_by] => 990
            [titel] => SPRITZGUSSFERTIGUNG
            [stellen] => Array
                (
                    [0] => stdClass Object
                        (
                            [id] => 9
                            [ordering] => 9
                            [state] => 1
                            [checked_out] => 0
                            [checked_out_time] => 0000-00-00 00:00:00
                            [created_by] => 990
                            [modified_by] => 990
                            [titel] => VERFAHRENSMECHANIKER KUNSTSTOFFTECHNIK / KUNSTSTOFF-FORMGEBER (m/w/d)
                            [bereich] => 2
                            [conten] => <div class="page" title="Page 10">
<div class="section">
<div class="layoutArea"><strong>Ihre Herausforderung:</strong>
<div class="column">Sie fahren Spritzgussmaschinen an und r�sten diese im Schichtbetrieb um. In diesem Zuge richten Sie auch Peripherieger�te wie Roboter und Montagevorrichtungen an der Maschine ein und optimieren bei Bedarf die Fertigungsparameter.</div>
<div class="column"> </div>
<div class="column"><strong>Ihr Profil: </strong></div>
<div class="column">Sie haben eine abgeschlossene Ausbildung als Verfahrensmechaniker im Kunststoffbereich oder in einem vergleichbaren Metallberuf und verf�gen im Idealfall bereits �ber Berufserfahrung beim Anfahren und dem Umbau von Spritzgussmaschinen.</div>
<div class="column"> </div>
<div class="column">
<p>Wenn Sie an einer krisensicheren Dauerstellung mit leistungsgerechter Bezahlung in einem modernen, mittelst�ndischen Industriebetrieb Interesse haben, senden Sie uns Ihre vollst�ndigen Bewerbungsunterlagen zu oder rufen uns zur Vorabinformation gerne an.</p>
</div>
</div>
</div>
</div>
                        )

                    [1] => stdClass Object
                        (
                            [id] => 10
                            [ordering] => 10
                            [state] => 1
                            [checked_out] => 0
                            [checked_out_time] => 0000-00-00 00:00:00
                            [created_by] => 376
                            [modified_by] => 990
                            [titel] => ANLAGENELEKTRIKER / ANLAGENMECHATRONIKER  (m/w/d)
                            [bereich] => 2
                            [conten] => <div class="page" title="Page 10">
<div class="section">
<div class="layoutArea">
<div class="column">
<p><strong>Ihre Herausforderung:<br /></strong>Sie installieren, warten und reparieren selbst�ndig elektro- und steuerungstechnische Anlagen, ermitteln St�rungsursachen und unterst�tzen bei der Prozessoptimierung.</p>
</div>
<div class="column"><strong>Ihr Profil:<br /></strong>Zus�tzlich zu einer abgeschlossenen Berufsausbildung im Bereich Elektronik bzw. Mechatronik k�nnen Sie mehrere Jahre einschl�giger Berufserfahrung vorweisen. Erfahrungen in der Automatisierungstechnik oder Kunststoffverarbeitung sind ebenfalls von Vorteil.</div>
<div class="column"> </div>
<div class="column">
<p>Wenn Sie an einer krisensicheren Dauerstellung mit leistungsgerechter Bezahlung in einem modernen, mittelst�ndischen Industriebetrieb Interesse haben, senden Sie uns Ihre vollst�ndigen Bewerbungsunterlagen zu oder rufen Sie uns zur Vorabinformation gerne an.</p>
</div>
</div>
</div>
</div>
                        )

                    [2] => stdClass Object
                        (
                            [id] => 12
                            [ordering] => 12
                            [state] => 1
                            [checked_out] => 0
                            [checked_out_time] => 0000-00-00 00:00:00
                            [created_by] => 990
                            [modified_by] => 990
                            [titel] => AUSZUBILDENDER VERFAHRENSMECHANIKER KUNSTSTOFFTECHNIK / KUNSTSTOFF-FORMGEBER (m/w/d)
                            [bereich] => 2
                            [conten] => <div class="page" title="Page 10">
<div class="section">
<div class="layoutArea">
<div class="column"><strong>Deine Herausforderung:</strong><br />
<p>Du richtest als Verfahrensmechaniker oder Verfahrensmechanikerin nicht nur die Spritzgussmaschinen im Schichtbetrieb ein, sondern installierst auch die Peripherieger�te wie Greifarme und Montagevorrichtungen an unseren Produktionsanlagen. <br />Mit Deiner hochpr�zisen Arbeit sorgst du daf�r, dass in der Serienproduktion alles glatt geht, und optimierst bei Bedarf die Fertigungsparameter Deiner Anlagen. Du lernst hochmoderne Spritzgussmaschinen und Roboter zu bedienen, zu steuern und zu �berwachen, bis Du Deine Maschinen bis ins kleinste Detail kennst. Mit Hilfe von Produktionsanweisungen und Pr�fsoftware kontrollierst Du die Einstellungen der jeweiligen Produktionsanlage, achtest auf die korrekte Rezeptur des Kunststoffmaterials und behebst Produktionsfehler. Als zuk�nftiger Fachmann der Verfahrensmechanik bist Du es, der mit Hilfe pflichtbewusster Verfahrenstechniken den Start zur Serienproduktion von Qualit�tsprodukten namhafter Kunden legt. Du richtest Anlagen ein, optimierst diese und du erkennst Fehlerquellen fr�h und tr�gst damit Verantwortung f�r eine erfolgreiche Serienproduktion. </p>
</div>
<div class="column"><strong>Dein Profil:</strong></div>
<ul>
<li class="column">
<div>Du solltest etwas von Technik und Computern verstehen</div>
</li>
<li class="column">
<div>Du kannst dich auf deine Auge-Hand-Koordination verlassen</div>
</li>
<li class="column">
<div>Du hast handwerkliches Geschick</div>
</li>
<li class="column">
<div>Du liebst Werken, Technik, Mathematik und Physik</div>
</li>
<li class="column">
<div>Du arbeitest besonders sorgf�ltig und gewissenhaft</div>
</li>
<li class="column">
<div>Du hast ein gutes r�umliches Vorstellungsverm�gen</div>
</li>
<li class="column">
<div>Du hast einen guten Realschulabschluss</div>
</li>
</ul>
<p>Beginn Deiner Ausbildung ist der 01.09.2023.</p>
</div>
</div>
</div>
                        )

                )

        )

)
</pre>

*/

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx', ''), ENT_COMPAT, 'UTF-8');

// Kleiner Lapsus bei field-name ;-)
$cards = $params->get('fotos');
$list = [];
echo ' 4654sd48sa7d98sD81s8d71dsa <pre>' . print_r($cards, true) . '</pre>';exit;
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

		$list[] = $card;
	}
}

require ModuleHelper::getLayoutPath('mod_downloadaccordionghsvs', $params->get('layout', 'default'));
