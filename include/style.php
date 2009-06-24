
<?php
/*
 * Desc: Common styles functions.
 * Author: Andrew Howard
 * Date: 30 Apr 2003
 * CVS:  $Id: style.php,v 1.1 2005/02/19 19:21:24 inspectorg Exp $
 */
?>

<?php

// Insert the sidebar
function insert_top($home)
{
  printf("<table align=center cellpadding=10 width=100%%>\n");
  printf("<tr>\n");
  printf("<td valign=top bgcolor=\"#656565\">\n");
  printf("<table>\n");
  printf("<tr><td colspan=2><a href=\"%s/images/logo_project.png\">\n", $home);
  printf("<img border=0 src=\"%s/images/notext_ps_logo.jpg\"></a>\n", $home);
  printf("<tr><td colspan=2><a href=\"%s/index.html\"><font color=\"#FFFFFF\">Home</font></a>\n", $home);
  printf("<tr><td colspan=2><a href=\"%s/faq.html\"><font color=\"#FFFFFF\">FAQ</font></a>\n", $home);
  printf("<tr><td colspan=2><a href=\"%s/player/player.html\"><font color=\"#FFFFFF\">Player</font></a>\n", $home);
  printf("<tr><td colspan=2><a href=\"%s/stage/stage.html\"><font color=\"#FFFFFF\">Stage</font></a>\n", $home);
  printf("<tr><td colspan=2><a href=\"%s/gazebo/gazebo.html\"><font color=\"#FFFFFF\">Gazebo</font></a>\n", $home);
  printf("<tr><td colspan=2><a href=\"%s/contrib.html\"><font color=\"#FFFFFF\">Contrib</font></a>\n", $home);
  printf("<tr><td colspan=2><a href=\"%s/doc/doc.html\"><font color=\"#FFFFFF\">Documentation</font></a>\n", $home);
  printf("<tr><td colspan=2><a href=\"%s/pubs.html\"><font color=\"#FFFFFF\">Publications</font></a>\n", $home);
  printf("<tr><td colspan=2><a href=\"%s/credits.html\"><font color=\"#FFFFFF\">Contributors</font></a>\n", $home);
  printf("<tr><td colspan=2><a href=\"%s/users/users.html\"><font color=\"#FFFFFF\">Users</font></a>\n", $home);
  printf("</table>\n");
  printf("<br>\n");
  printf("<table bgcolor=\"#858585\">\n");
  printf("<tr><td><a href=\"http://sourceforge.net\"><img border=0 src=\"http://sourceforge.net/sflogo.php?group_id=42445&type=1\"></a>\n");
  printf("<tr><td><a href=\"http://sourceforge.net/projects/playerstage\"><font color=\"#FFFFFF\">Project</font></a>\n");
  printf("<tr><td><a href=\"http://sourceforge.net/project/showfiles.php?group_id=42445\"><font color=\"#FFFFFF\">Download</font></a>\n");
  printf("<tr><td><a href=\"http://sourceforge.net/tracker/?group_id=42445\"><font color=\"#FFFFFF\">Bugs/Feedback</font></a>\n");
  printf("<tr><td><a href=\"http://sourceforge.net/mail/?group_id=42445\"><font color=\"#FFFFFF\">Mailing lists</font></a>\n");
  printf("</table>\n");

  // External links
  printf("<br><table>\n");
  printf("<tr><td><a href=\"http://radish.sourceforge.net/\"><font color=\"#FFFFFF\">Radish</font></a>\n");
  printf("</table>\n");
  
  printf("<br><table>\n");
  printf("<tr><td><a href=\"%s/news.html\"><font color=\"#AAAAAA\">Old news</font></a>\n", $home);
  printf("<tr><td><a href=\"%s/old.html\"><font color=\"#AAAAAA\">Old stuff</font></a>\n", $home);
  printf("</table>\n");
  printf("<br><table>\n");
  printf("<tr><td><img src=\"%s/images/ps_logo_vertical.jpg\">\n", $home);
  printf("</table>\n");
  printf("</td>\n");

  printf("<td valign=top bgcolor=\"#FFFFFF\" width=100%%>\n");
}


// Insert the footer
function insert_bot()
{
  printf("</td></tr></table>\n");
}