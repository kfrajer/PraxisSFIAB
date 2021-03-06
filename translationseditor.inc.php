<?
/* 
   This file is part of the 'Science Fair In A Box' project
   SFIAB Website: http://www.sfiab.ca

   Copyright (C) 2009 James Grant <james@lightbox.org>

   This program is free software; you can redistribute it and/or
   modify it under the terms of the GNU General Public
   License as published by the Free Software Foundation, version 2.

   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
    General Public License for more details.

   You should have received a copy of the GNU General Public License
   along with this program; see the file COPYING.  If not, write to
   the Free Software Foundation, Inc., 59 Temple Place - Suite 330,
   Boston, MA 02111-1307, USA.
*/
?>
<script type="text/javascript" src="<?=$config['SFIABDIRECTORY']?>/translationseditor.js.php"></script>
<div style="display: none" title="<?=i18n("Translation Editor")?>" id="translation_editor">
<form id="translationform" onsubmit="return save_translations()">
<input type="hidden" id="translate_str_hidden" name="translate_str_hidden">
<table style="width: 100%;">
<?
echo "<tr><td align=\"right\" width=\"100\">".$config['languages'][$config['default_language']].":</td><td><span id=\"translate_str\" style=\"font-weight: bold;\"></span></td></tr>\n";
echo "<tr><td colspan=\"2\"><hr /></td></tr>\n";
foreach($config['languages'] AS $l=>$ln) {
    if($l==$config['default_language']) continue;
    echo "<tr><td align=\"right\">$ln</td><td><input style=\"width: 100%;\" type=\"text\" name=\"translate_{$l}\" id=\"translate_{$l}\"></td></tr>\n";
}
?>
</table>
</form>
</div>
