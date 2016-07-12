<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?= $this->language; ?>" lang="<?= $this->language; ?>" >
<head>
<jdoc:include type="head" />

<link rel="stylesheet" href="<?= $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?= $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?= $this->baseurl ?>/templates/<?= $this->template ?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?= $this->baseurl ?>/templates/<?= $this->template ?>/menu/css/menu.css" type="text/css" />

</head>

<body>
    <table cellpadding="0" cellspacing="0" align="center" class="maintable">
    <tr>
        <td width="154" height="1"><img src="<?= $this->baseurl ?>/templates/<?= $this->template ?>/images/spacer.gif" width="154" height="1" alt="" /></td>
        <td width="869" height="1"><img src="<?= $this->baseurl ?>/templates/<?= $this->template ?>/images/spacer.gif" width="869" height="1" alt="" /></td>
    </tr>
    <tr>
        <td valign="top"><a href="index.php"><img src="<?= $this->baseurl ?>/templates/<?= $this->template ?>/images/headerbg1.jpg" width="154" height="280" alt="" /></a></td>
        <td valign="top"><a href="index.php"><img src="<?= $this->baseurl ?>/templates/<?= $this->template ?>/images/headerbg2.jpg" width="869" height="280" alt="" /></a></td>
    </tr>
    <tr>
        <td valign="top"><img src="<?= $this->baseurl ?>/templates/<?= $this->template ?>/images/headerbg3.jpg" width="154" height="52" alt="" /></td>
        <td valign="top"><img src="<?= $this->baseurl ?>/templates/<?= $this->template ?>/images/headerbg4.jpg" width="869" height="52" alt="" /></td>
    </tr>
    <tr>
        <td valign="top" width="154" height="300" class="leftbg">
			<jdoc:include type="modules" name="left" style="xhtml" />
			<jdoc:include type="modules" name="user1" />
		</td>
        <td valign="top" width="869" height="300" class="maintext">


			<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td>
					<jdoc:include type="modules" name="top" />
				</td>
			</tr>
			<tr>
				<td class="my_maintext">
					<jdoc:include type="component" />
				</td>
			</tr>
			</table>
		</td>
    </tr>
    <tr>
        <td valign="top" colspan="2" height="10" class="footer">
			<jdoc:include type="modules" name="footer__" style="xhtml"/>
		</td>
    </tr>
    </table>

	<jdoc:include type="modules" name="debug" />

</body>
</html>