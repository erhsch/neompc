<?php /* Smarty version 2.6.9, created on 2009-07-01 08:30:50
         compiled from default/playlist_item.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', 'default/playlist_item.html', 1, false),)), $this); ?>
				<?php if ($this->_tpl_vars['playlist_item']['Pos'] == $this->_tpl_vars['playing']): ?><li class="playing"><?php else: ?><li><?php endif; ?><a href="<?php echo $this->_tpl_vars['playlist_remove_link'];  echo $this->_tpl_vars['playlist_item']['Pos']; ?>
"><img src="templates/<?php echo $this->_tpl_vars['template']; ?>
/images/del.gif" alt="Remove from Playlist" class="button" /></a><a href="<?php echo $this->_tpl_vars['playlist_play_link'];  echo $this->_tpl_vars['playlist_item']['Pos']; ?>
"><img src="templates/<?php echo $this->_tpl_vars['template']; ?>
/images/play.gif" alt="Play" class="button" /></a><img src="templates/<?php echo $this->_tpl_vars['template']; ?>
/images/note.gif" class="icon" /> <span class="pos"><?php echo ((is_array($_tmp=$this->_tpl_vars['playlist_item']['Pos']+1)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%02d") : smarty_modifier_string_format($_tmp, "%02d")); ?>
.</span> <?php if ($this->_tpl_vars['playlist_item']['Title']): ?><span class="title"><?php echo $this->_tpl_vars['playlist_item']['Title']; ?>
</span><?php if ($this->_tpl_vars['playlist_item']['Artist'] && $this->_tpl_vars['show_extra_track_info']): ?><br /><span class="artist"><?php echo $this->_tpl_vars['playlist_item']['Artist']; ?>
</span> <?php if ($this->_tpl_vars['playlist_item']['Album']): ?><span class="album">(<?php echo $this->_tpl_vars['playlist_item']['Album']; ?>
)</span><?php endif;  endif;  else:  echo $this->_tpl_vars['playlist_item']['file_name'];  endif; ?></li>