<?php

defined('_JEXEC') or die;

foreach($this->items as $i => $item): ?>
	<div class="playerTeamView">
	<div><a href="<?php echo $item->cid; ?>">
		<span style="float:left;font-weight:bold;font-size:12px;width:100%"><?php echo $item->name; ?></span>
		</a></div>
		<div style="float:left;width:38%"><a href="<?php echo $item->id; ?>">
			<span style="clear:left;width=100%"></span>
			<img style="float:left;padding:5px 5px 0 5px;" src="<?php echo $item->picture; ?>" border="0" width="50" height="75" alt="<?php echo $item->cname; ?>" /></a>
			<div style="width:100%;text-align:center;font-size:8pt"><?php echo $item->ctname; ?></div></div>
			<div style="float:left;margin-top:3px;margin-left:3px;width:60%">
			<span style="font-weight:bold;font-size:8pt;line-height:150%">Csapata:</span><br />
			<?php foreach(explode(',', $item->teams) as $team): ?>
				<li style="list-style-type:none;margin-left:2px;font-size:8pt;line-height:100%">- <?php echo team; ?></li>		
			<?php endforeach; ?>
			</div>
		<div style="clear:left;width:65px"></div>
	</div>
<?php endforeach; ?>

