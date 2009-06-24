

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html>
<!-- $Id: index.php,v 1.7 2007/04/19 16:19:40 gerkey Exp $ -->

<HEAD>


<meta HTTP-EQUIV="Content-Type" CONTENT="text/html;CHARSET=utf-8">
<meta name="keywords" content="stage, robot, simulation, player, player/stage">

<style type="text/css">

body {
  font-family: serif;
  background-color: #FFF;
  color:#000;
  left:0em;
  top:0em;
}


a:link { 
	color: #A00;
}

a:visited { 
	color: #800;
}

a { text-decoration: none; }
a:hover { text-decoration: underline; }


.timestamp { text-align:right; font-size:75%;}

th { 
  text-align:left; 
  vertical-align:top; 
}

td { 
  text-align:left; 
  vertical-align:top;
}

h1 { 
  font-size:160%; 
}

h2 {
  font-size:120%;
}

h3 {  
 font-size:100%;
}

img {
  border: 0;
}

ul { 
    position:relative;
}

ul.menu { 
    #left:-1.6em;
    #position:relative;
    margin: 0em 0em 0em 0em;
}

li.menu { 
    text-align:right;
    list-style-type: none;
    position:relative;
}


.fragment {
	width: 85%;
	border: 1px solid #000000;
	background-color: #EEF;
	padding: 6px;
	margin: 15px;
}



.sidebar {  
 padding:0em; top:0em; 
 background-color: #eee;
}

.main { left:10em; top:0em; 

/*border-left: 1px solid #000;
*/
padding-left:3em; 
padding-right:3em; padding-bottom:2em; margin-top:1em; margin-right:2em; }

div.box { background-color:#EEE; border: 1px solid #000; padding: 0.5ex 0.6em 1.0ex 0.6em; margin:1em;  }
div.box2 { padding: 0.5ex 0.6em 
1.0ex 0.6em; margin:1em;  }

</style>

<TITLE>Player Project</TITLE>

<!-- GOOGLE ANALYTICS WEBSITE TRACKING CODE -->
<script src="http://www.google-analytics.com/urchin.js" 
type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-84680-1";
urchinTracker();
</script>


</HEAD>
<body >

<table>
<tr>
<td class="sidebar">

<p style="text-align:center;">
<img width=140 src="images/player_button_v3.png" alt="Player piece"><br>
</p>

<div class="box2">
<ul class=menu>
<li class=menu><b><a href="index.php?src=index">Home</a></b>
<li class=menu><b><a href="wiki">Wiki</a></b>


<li class=menu><br><b>Software</b>
<li class=menu><a href="index.php?src=player">Player</a>
<li class=menu><a href="index.php?src=stage">Stage</a>
<li class=menu><a href="index.php?src=gazebo">Gazebo</a>
<li class=menu><a href="wiki/Category:Extensions">Extensions</a>

<li class=menu><br><b>Docs</b>
<li class=menu><a href="index.php?src=doc">Manuals</a>
<li class=menu><a href="wiki/Basic_FAQ">FAQ</a>
<li class=menu><a href="index.php?src=pubs">Publications</a>

<li class=menu><br><b>People</b>
<li class=menu><a href="index.php?src=credits">Authors</a>
<li class=menu><a href="wiki/PlayerUsers">Users</a>
<li class=menu><a href="index.php?src=funders">Funding</a>

<li  class="menu"><br><a href="http://sourceforge.net"><img  alt="sourceforge"
src="http://sourceforge.net/sflogo.php?group_id=42445&amp;type=1"></a>
<li class="menu"><a 
href="http://sourceforge.net/project/showfiles.php?group_id=42445">Download</a>
<li  class="menu"><a 
href="http://sourceforge.net/projects/playerstage">Project</a>
<li class="menu"><a 
href="http://sourceforge.net/tracker/?group_id=42445">Bugs</a>
<li class="menu"><a 
href="http://sourceforge.net/mail/?group_id=42445">Help</a>
</ul>
</div>
</td>

<td class="main" >
<p>

<!-- if a source page was requested, load it, otherwise load the index page -->

<?php 
  $sourcefile = $_GET['src'] . ".src";
  if ( !file_exists($sourcefile)) { $sourcefile = "index.src"; } 
  include $sourcefile;
?>


<!-- render the modification time of the source file -->


<div class="timestamp">
<hr>

<table style="width:100%;">
<tr>
<td style="text-align:left;">
Content is available under <a href="http://www.gnu.org/copyleft/fdl.html">GNU 
Free Documentation License 1.2</a><br>
<?php echo "Last updated " . date ("d F Y H:i:s", filemtime($sourcefile)); ?>

<td style="text-align:right;">
<a href="http://validator.w3.org/check/referer"><img style="vertical-align:middle;border:0;width:88px;height:31px"
          src="http://www.w3.org/Icons/valid-html401"
          alt="Valid HTML 4.01!"></a>

 <a href="http://jigsaw.w3.org/css-validator/">
  <img style="vertical-align:middle;border:0;width:88px;height:31px"
       src="http://jigsaw.w3.org/css-validator/images/vcss" 
       alt="Valid CSS!">
 </a>

</tr>
</table>
</div>


</tr>
</table>

</BODY>
</HTML>
