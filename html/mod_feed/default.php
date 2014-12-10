<?php defined('_JEXEC') or die;
/**
 * @package        Template Framework for Joomla!+
 * @author        Cristina Solana http://nightshiftcreative.com
 * @author        Matt Thomas http://construct-framework.com | http://betweenbrain.com
 * @copyright    Copyright (C) 2009 - 2012 Matt Thomas. All rights reserved.
 * @license        GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 */
?>

<?php
//echo '<pre>$feed = '.print_r($feed, 1).'</pre>';
?>

<?php
if (!empty($feed) && is_string($feed))
{
  echo $feed;
} // !empty($feed) && is_string($feed))
else
{
	if ($feed != false){
    //image handling
      $iUrl	= isset($feed->image)	? $feed->image	: null;
      $iTitle = isset($feed->imagetitle) ? $feed->imagetitle : null;
    ?>
    <div
      style="direction: <?php echo $rssrtl ? 'rtl' : 'ltr'; ?>; text-align: <?php echo $rssrtl ? 'right' : 'left'; ?> ! important"
      class="feed<?php echo $moduleclass_sfx; ?>">
      <?php
      // feed title
      if (!is_null($feed->title) && $params->get('rsstitle', 1)){
        ?>

        <h4>
          <a href="<?php echo str_replace('&', '&amp', $rssurl); ?>"
             target="_blank">
            <?php echo $feed->title; ?></a>
        </h4>

      <?php
      }
      // Feed description
      if ($params->get('rssdesc', 1)){
        ?>
        <p><?php echo $feed->description; ?></p>
      <?php
      }

      // feed image
      if ($params->get('rssimage', 1) && $iUrl){
        ?>
        <img src="<?php echo $iUrl; ?>" alt="<?php echo @$iTitle; ?>"/>

      <?php
      }
      ?>

      <ol class="newsfeed<?php echo $params->get('moduleclass_sfx'); ?>">
        <?php
        $words = $params->def('word_count', 0);
        for ($j = 0; $j < $params->get('rssitems', 5); $j++){
					if (!$feed->offsetExists($j))
					{
						break;
					}
          $currItem = $feed[$j];
          // item title
          ?>
          <li class="newsfeed-item">
            <?php    if (!is_null($currItem->uri)){
              ?>
              <?php if (!is_null($feed->title) && $params->get('rsstitle', 1)){
                echo '<h5 class="feed-link">';
              }
              else{
                echo '<h4 class="feed-link">';
              }
              ?>

              <a href="<?php echo $currItem->uri; ?>" target="_blank">
                <?php echo $currItem->title; ?></a>
              <?php if (!is_null($feed->title) && $params->get('rsstitle', 1)){
                echo '</h5>';
              }
              else{
                echo '</h4>';
              }
              ?>
            <?php
            }

            // item description
            if ($params->get('rssitemdesc', 1)){
              // item description
              $text = $currItem->description;
              $text = str_replace('&apos;', "'", $text);
              $text = strip_tags($text);
              // word limit check
              if ($words){
                $texts = explode(' ', $text);
                $count = count($texts);
                if ($count > $words){
                  $text = '';
                  for ($i = 0; $i < $words; $i++){
                    $text .= ' ' . $texts[$i];
                  }
                  $text .= '...';
                }
              }
              ?>

              <p><?php echo $text; ?></p>

            <?php
            }
            ?>
          </li>
        <?php
        }
        ?>
      </ol>
    </div>
  <?php
  }
} // !empty($feed) && is_string($feed))
?>