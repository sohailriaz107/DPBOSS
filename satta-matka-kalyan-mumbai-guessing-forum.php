<?php
error_reporting(0);
session_start();
if(!$_SESSION['user']) {
include "cache_start.php";
$forumID = "2";
$forumstart=$_GET['start'];
include 'siltypulty.php';
include "admin/var.php";
include "smilies.php";
include "BBcode.php";
include "statrank.php";
include "offline.php";
echo '<title>Satta Matka Kalyan Mumbai Guessing Forum</title>';
if(isset($_SESSION['user']))
{
$user=$_SESSION['user'];
  $getuser="SELECT * from b_users where username='$user'";
  $getuser2=mysql_query($getuser) or die("Could not get user info");
  $getuser3=mysql_fetch_array($getuser2);
  $thedate=date("U");
  $checktime=$thedate-200;
  $uprecords="Update b_users set lasttime='$thedate' where userID='$getuser3[userID]'";
  mysql_query($uprecords) or die("Could not update records");

  if($getuser3[tsgone]<$checktime)
  {
    $updatetime="Update b_users set tsgone='$thedate', oldtime='$getuser3[tsgone]' where userID='$getuser3[userID]'";
    mysql_query($updatetime) or die("Could not update time");
  }
  $templateclass=$getuser3['templatepath'];
}
else
{
  $chipcookie = $HTTP_COOKIE_VARS["$cookiename"];
  $userID=$chipcookie[0];
  $pass=$chipcookie[1];
  $thedate=date("U");
  $checktime=$thedate-200;
  $getuser="SELECT * from b_users a, b_templates b where b.templateid=a.templateclass and a.userID='$userID' and a.password='$pass'";
  $getuser2=mysql_query($getuser) or die("COuld not draw cookies");
  $getuser3=mysql_fetch_array($getuser2);
  if(strlen($getuser3['username'])>1)
  {
    $_SESSION['user']=$getuser3[username];
    $uprecords="Update b_users set lasttime='$thedate' where userID='$getuser3[userID]'";
    mysql_query($uprecords) or die("Could not update records");
    if($getuser3[tsgone]<$checktime)
    {
      $updatetime="Update b_users set tsgone='$thedate', oldtime='$getuser3[tsgone]' where userID='$getuser3[userID]'";
      mysql_query($updatetime) or die("Could not update time");
    }
    $templateclass=$getuser3['templatepath'];
  }
  else
  {
    
    $thedate=date("U");
    $ip=$_SERVER["REMOTE_ADDR"];
    $browser=$_SERVER['HTTP_USER_AGENT'];
    // $insertguestip="REPLACE guestsonline set time='$thedate', guestip='$ip',browser='$browser'";
    // mysql_query($insertguestip) or die(mysql_error());
    $templateclass="default";
  }
}

echo '<link rel="STYLESHEET" type="text/css" href="templates/new.css"/><meta forua="true" http-equiv="Cache-Control" content="max-age=0"/><style type="text/css">
 body { background-color: #FFCC99; 
color: black; 
 font-family:Comic Sans MS;
 }
 a { color: red; 
 }
 </style>
   <style type="text/css">body{border:2px groove #0033FF; margin:2px; padding-right:2px; padding-left:2px}</style><style type="text/css"><br />input,select,textarea {background-color: #0033FF; border: 1px solid;<br />border-color: yellow yellow yellow yellow;<br />color: #FFFFFF;<br />}<br /></style>


<style type="text/css">
textarea {
width: 200px;
height: 7em;
}
input, select, textarea {
background-color : #bde9ba ;
}
# example {
background-color : limeyellow ;
}
</style></head>';
include '../header.php';


echo '<div class="o1" align="right"><table cellpadding="0" cellspacing="0" width="100%">
<tbody><tr><td width="auto" align="left"><font size="5">POST YOUR GUESS</font></td>
<td width="auto" align="right"></td><br><td width="auto" align="right"><a href="avtar.php" rel="nofollow"><font size="5">UPLOAD PROFILE PHOTO</font></a>  </td></tr></tbody></table></div>
<div class="" align="center">
</div>';
include 'reply2.php';
$forumID="2";
   $ID="2";
echo '<br><br><table cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td width="auto" align="left">
<input type="button" onClick="history.go(0)" value="Refresh" style="height: 40px;"> </td>
 
</tr></tbody></table>
 <head><style>
p:first-line
{
color:#000000;

}


.quote {
font-style:bold;
border-width:2px;
border-style:solid;
border-color:#ff0000 #00ff00 #0000ff;
color:black;
background-color: pink;
border-top-left-radius:    2px;
border-top-right-radius:    2px;
border-bottom-right-radius: 2px;
border-bottom-left-radius:  2px;
}

  .fallback { background-image: url("templates/images/300.png"); background-repeat: no-repeat; background-size:65px 72px; }

.forum2 { color: lime;
 background-color: #FFCC99;
 background-repeat: no-repeat; 
 font-weight: bold;
 font-size: x-medium;
 padding: 1px;
 margin: 1px; 
border: 1px solid blue;
text-align:left;
 }






</style>
<style type="text/css">b.drop-shadow { word-wrap: break-word; }</style>

</head>';
if($getuser3[banned]=="Yes")
 {
  die("<table class='maintable'><tr class='forumrow'><td><center><b>dpboss.boston</b><br>You have been banned from this forum by $getuser3[banby] <br>and the reason is '$getuser3[banreason]'</center></td></tr>");
   
 }

if(strlen($getuser3['username'])<1)
{
  $getuser3['status']=-1;
}
if(isset($forumID)&&isset($ID)&&$ID!=0) //If looking at specific post
 {
   if(!isset($_GET['start']))
   {
    $start=0;
   }
   else
   {
    $start=$_GET['start'];
   }
   $page = intval($_GET['page']);
$query = @mysql_query("SELECT COUNT(*) FROM `b_posts` where `threadparent` = '2';");
$updates2 = @mysql_result($query, 0);

$pages = ceil($updates2/25);
if(!$pages) $pages = 1;
if($page>$pages or $page<=0) $page=1;
if($start>$updates2 or $start<=0) $start = 0;
if($page) $start = ($page - 1) * 25; else $start = 0;
   
   $forumID="2";
   $ID="2";
   $user=$_SESSION['user'];
   $getranks="SELECT * from b_ranks order by postsneeded ASC";
   $getranks2=mysql_query($getranks);
   $updateviews="update b_posts set views=views+1 where ID='$ID'";
   mysql_query($updateviews) or die("Could not update views");
 


   


   if (isset($_SESSION['user']))
   {
     
       $thedate=date("U");
       $activeuser22="Update b_users set lasttime='$thedate', pactive='$ID',sactive=0,factive='$forumID' where username='$user'";
       mysql_query($activeuser22) or die("not activated");
}
   if (!isset($_SESSION['user']))
    {
       
       $thedate=date("U");
       $ip=$_SERVER["REMOTE_ADDR"];
       $browser=$_SERVER['HTTP_USER_AGENT'];
    //   $insertguestip="REPLACE guestsonline set time='$thedate', guestip='$ip',browser='$browser',factive='$forumID',pactive='$ID'";
    //   mysql_query($insertguestip) or die(mysql_error());

    }
	$timee=date("g:ia", time());

 
   
   $getthread="SELECT * from b_posts, b_forums where b_forums.ID=b_posts.postforum and b_posts.ID='$ID'";
   $getthread2=mysql_query($getthread) or die("Could not get thread");
   $getthread3=mysql_fetch_array($getthread2);
   if(!isset($_SESSION['user']))
   {
     $getuser3[status]=-1;
   }
   if($getthread3[permission_min]>$getuser3[status])
   {
     die("<table class='maintable'><tr class='headline'><td><center>No permission</center></td></tr><tr class='forumrow'><td><center>You do not have permission to view this thread</center></td></tr></table><div class='time' align='center'><form method='POST' action='authenticate.php'>
Username:<br><input name='user' type='text'>
<br>Password:<br><input name='password' type='password'>
<br><input name='remember' value='1' type='checkbox'>
 Automatic login <small>(you must allow cookies in phone)</small><br><input name='submit' value='Log in' type='submit'></form>
</div>");
   }
   
   if(isset($_SESSION['user']))
{
    
}
  


   $getforuminfo="SELECT * from b_forums where ID='$forumID'";
   $getforuminfo2=mysql_query($getforuminfo) or die("Could not get forum info");
   $getforuminfo3=mysql_fetch_array($getforuminfo2);
   if(isset($_SESSION['user']) && ($getforuminfo3[permission_min]>0))
{
$userwhere=$_SESSION['user'];
$updatewhere=mysql_query("update b_users set userwhere='$userwhere is viewing thread of protected forum' where username='$userwhere'"); }
else if(isset($_SESSION['user']))
{
$userwhere=$_SESSION['user'];
$updatewhere=mysql_query("update b_users set userwhere='$userwhere is viewing thread  $getthread3[title] of forum $getforuminfo3[name]' where username='$userwhere'");
}
include 'update1.php';
   
   print "</p></td></tr></table>";
   
$forumID="2";
$ID="2";




   
   $postselect="SELECT * from b_users u, b_posts p WHERE u.userID = p.author and p.ID='$ID'";
   $postselect2=mysql_query($postselect) or die(mysql_error());
   $threadselect="SELECT * FROM b_users u, b_posts p  WHERE p.threadparent='2' and u.userID = p.author order by p.ID DESC limit $start, $numrepliesperpage";
   $threadselect2=mysql_query($threadselect) or die(mysql_error());
   

 // page start

   $order="SELECT COUNT(*) FROM b_users u, b_posts p  WHERE p.threadparent='2' and u.userID = p.author order by p.ID ASC";
   $order2=mysql_query($order) or die("2");
   $d=0;
   $f=0;
   $g=1;
   $order3=mysql_result($order2,0);
   $prev=$start-$numrepliesperpage;
   $next=$start+$numrepliesperpage;


   while($postselect3=mysql_fetch_array($postselect2))
   {
    $postselect3[post]=BBCode($postselect3[post]);
    if($postselect3[nosmilies]==0)
    {
      $postselect3[post]=Smiley($postselect3[post]);
    }
    if($postselect3['rank']!='0')
    {
      $rank=$postselect3['rank'];
    }
    else
    {
      $rank=getrank($postselect3['posts'],$getranks2);
    }
    $group=getstatus($postselect3['status']);
    if(mysql_num_rows($getranks2)>0)
    {
      mysql_data_seek($getranks2, 0);
    }
   
	 
    
   }
  $i=0;
   while($threadselect3=mysql_fetch_array($threadselect2))
   {


       $threadselect3[post]=BBCode($threadselect3[post]);
       if($threadselect3[nosmilies]==0)
       {
         $threadselect3[post]=Smiley($threadselect3[post]);
       }
       if($threadselect3['rank']=='0')
       {
         $rank1=getrank($threadselect3[posts],$getranks2);
       }
       else
       {
         $rank1=$threadselect3['rank'];
       }
       $groups=getstatus($threadselect3[status]);
if($threadselect3['stat']=='0')
{ 

$onoff = "Offline";
 }    
else 
 { 
$onoff = "Online";

}


  	  

if(mysql_num_rows($getranks2)>0)
        {
          mysql_data_seek($getranks2, 0);
        }
     if($threadselect3[username]!="Guest")
     {

$path = avtar;

$to = $path.'/'.$threadselect3['username'].'.jpg';
   if(file_exists($to))
   {  $avt = $path.'/'.$threadselect3['username'].''; }

else {

$avt = "templates/images/300";
 }

print '<table class="blue1" width="100%"><tr><td><img class="fallback" src="'.$avt.'.jpg" width="65" height="72"/></td>
<td><p><b><b><font size="5">'.$threadselect3[lastpost].'</font></b></b><br/>'.$threadselect3[timepost].' <br>['.$onoff.']</p></td></tr></table>
<div class="forum2"><br/><center><font color="black"><b class="drop-shadow"><b><br/><span style="color: black"><i>'.$threadselect3[post].'</i></span></b></b></font></center><br/></div>';
echo '<table class="blue1" width="100%">';

echo '<td>[<a href="#bottom"><font size=5>DOWN</font></a>]</td><td>

[<a href="#top"><font size=5>UP</font></a>]</td>';

if ($getuser3[status]>=2)
	   {
     print "<center><a href='edit.php?forumID=$forumID&ID=$threadselect3[ID]'>Edit Post</a>";
	 }
	 
     if($getuser3[status]>3)
     {
         print "|<a href='deletepost.php?ID=$threadselect3[ID]'>Delete post</a></center>";
     }
echo '<td width="auto" align="right">[<a href="quote.php?forumID='.$forumID.'&ID='.$threadselect3[ID].'" rel="nofollow"><font size=5>Quote</font></a>]
</td></table> <br/>'; 
}
  else {

}

     $i++;
   }


    print "<a name='bottom'></a><div class='o2' align='left'>Page : ";

  $asd = $page - 2;
$asd2 = $page + 3;
if($asd<$updates2 && $asd>0 && $page>3) echo '<a href="satta-matka-kalyan-sata-mataka-guessing-forum">1</a> ... ';
for($i=$asd; $i<$asd2; $i++)
{
if($i<$updates2 && $i>0)
{
if ($i > $pages ) break;
if ($page==$i) echo '<span>['.$i.'] </span> ';
else echo '<a class="page" href="satta-matka-kalyan-mumbai-guessing-forum.php?page='.$i.'">'.$i.'</a> ';
}
}
$pagenext = ($page + 1);
if($i <= $pages)
{
if($asd2<$updates2) echo ' ...<a href="satta-matka-kalyan-mumbai-guessing-forum.php?page='.$pages.'">'.$pages.'</a>...<a href="satta-matka-kalyan-mumbai-guessing-forum.php?page='.$pagenext.'">Next</a>';}


echo '</div>';
  
  

   print "</td></tr></table>";



if(isset($_SESSION['user']))
{

  if ($getuser3[status]>=6) {

$recent=date("U")-300;
   $activeusers="SELECT * from b_users where pactive='$ID' and  lasttime>'$recent'";
   $activeusers2=mysql_query($activeusers) or die("Could not get users");
   $num=mysql_num_rows($activeusers2);
//   $countguests="SELECT DISTINCT guestip from guestsonline where pactive='$ID' and time>'$recent'";
//   $countguests2=mysql_query($countguests);
//   $thecount=mysql_num_rows($countguests2);
  print "</div><font color=black>Registered user online now:</font> $num </b></td></tr>";
   
   print"(";
   while($activeusers3=mysql_fetch_array($activeusers2))
{
  print " <A href='profile.php?userID=$activeusers3[userID]' rel='nofollow'><b>$activeusers3[username]</b></a>,";
}
   print"& $thecount Guests(s))";
}}
print "<br/>";



   print '<div class="blue1" align="center"><h2><div class="o1">Powered by <a href="../">dpboss.boston </b></a></div></h2></div>';
    if($getuser3[status]>=6)
    {
      print "<center><a href='admin/index.php'>Admin CP</a></center><br>";
    }
if($getuser3[status]>=3)
    {
      print "<center><a href='mod/index.php'>Moderator</a></center>";
    }


 }




$sql = mysql_query("SELECT `guestid` FROM `guestsonline`;");
while($room = mysql_fetch_array($sql))
{ if ($room[guestid]>10000)
$sqil = "TRUNCATE TABLE `guestsonline`";
mysql_query($sqil); }
include "daylogs.php";
include "cache_end.php";
}

else 

{
	
	
	$forumID = "2";
$forumstart=$_GET['start'];
include 'siltypulty.php';
include "admin/var.php";
include "smilies.php";
include "BBcode.php";
include "statrank.php";
include "offline.php";
echo '<title>Satta Matka Kalyan Mumbai Guessing Forum</title>';
if(isset($_SESSION['user']))
{
$user=$_SESSION['user'];
  $getuser="SELECT * from b_users where username='$user'";
  $getuser2=mysql_query($getuser) or die("Could not get user info");
  $getuser3=mysql_fetch_array($getuser2);
  $thedate=date("U");
  $checktime=$thedate-200;
  $uprecords="Update b_users set lasttime='$thedate' where userID='$getuser3[userID]'";
  mysql_query($uprecords) or die("Could not update records");

  if($getuser3[tsgone]<$checktime)
  {
    $updatetime="Update b_users set tsgone='$thedate', oldtime='$getuser3[tsgone]' where userID='$getuser3[userID]'";
    mysql_query($updatetime) or die("Could not update time");
  }
  $templateclass=$getuser3['templatepath'];
}
else
{
  $chipcookie = $HTTP_COOKIE_VARS["$cookiename"];
  $userID=$chipcookie[0];
  $pass=$chipcookie[1];
  $thedate=date("U");
  $checktime=$thedate-200;
  $getuser="SELECT * from b_users a, b_templates b where b.templateid=a.templateclass and a.userID='$userID' and a.password='$pass'";
  $getuser2=mysql_query($getuser) or die("COuld not draw cookies");
  $getuser3=mysql_fetch_array($getuser2);
  if(strlen($getuser3['username'])>1)
  {
    $_SESSION['user']=$getuser3[username];
    $uprecords="Update b_users set lasttime='$thedate' where userID='$getuser3[userID]'";
    mysql_query($uprecords) or die("Could not update records");
    if($getuser3[tsgone]<$checktime)
    {
      $updatetime="Update b_users set tsgone='$thedate', oldtime='$getuser3[tsgone]' where userID='$getuser3[userID]'";
      mysql_query($updatetime) or die("Could not update time");
    }
    $templateclass=$getuser3['templatepath'];
  }
  else
  {
    
    $thedate=date("U");
    $ip=$_SERVER["REMOTE_ADDR"];
    $browser=$_SERVER['HTTP_USER_AGENT'];
    // $insertguestip="REPLACE guestsonline set time='$thedate', guestip='$ip',browser='$browser'";
    // mysql_query($insertguestip) or die(mysql_error());
    $templateclass="default";
  }
}

echo '<link rel="STYLESHEET" type="text/css" href="templates/new.css"/><meta forua="true" http-equiv="Cache-Control" content="max-age=0"/><style type="text/css">
 body { background-color: #FFCC99; 
color: black; 
 font-family:Comic Sans MS;
 }
 a { color: red; 
 }
 </style>
   <style type="text/css">body{border:2px groove #0033FF; margin:2px; padding-right:2px; padding-left:2px}</style><style type="text/css"><br />input,select,textarea {background-color: #0033FF; border: 1px solid;<br />border-color: yellow yellow yellow yellow;<br />color: #FFFFFF;<br />}<br /></style>


<style type="text/css">
textarea {
width: 200px;
height: 7em;
}
input, select, textarea {
background-color : #bde9ba ;
}
# example {
background-color : limeyellow ;
}
</style></head>';
include '../header.php';

if($getuser3[validated]=="0") {
	
	echo 'you are not allowed to view forum';
	session_destroy();
	die();
	
}
echo '<div class="o1" align="right"><table cellpadding="0" cellspacing="0" width="100%">
<tbody><tr><td width="auto" align="left"><font size="5">POST YOUR GUESS</font></td>
<td width="auto" align="right"></td><br><td width="auto" align="right"><a href="avtar.php" rel="nofollow"><font size="5">UPLOAD PROFILE PHOTO</font></a>  </td></tr></tbody></table></div>
<div class="" align="center">
</div>';
include 'reply2.php';
$forumID="2";
   $ID="2";
echo '<br><br><table cellpadding="0" cellspacing="0" width="100%"><tbody><tr><td width="auto" align="left">
<input type="button" onClick="history.go(0)" value="Refresh" style="height: 40px;"> </td>
 
</tr></tbody></table>
 <head><style>
p:first-line
{
color:#000000;

}


.quote {
font-style:bold;
border-width:2px;
border-style:solid;
border-color:#ff0000 #00ff00 #0000ff;
color:black;
background-color: pink;
border-top-left-radius:    2px;
border-top-right-radius:    2px;
border-bottom-right-radius: 2px;
border-bottom-left-radius:  2px;
}

  .fallback { background-image: url("templates/images/300.png"); background-repeat: no-repeat; background-size:65px 72px; }

.forum2 { color: lime;
 background-color: #FFCC99;
 background-repeat: no-repeat; 
 font-weight: bold;
 font-size: x-medium;
 padding: 1px;
 margin: 1px; 
border: 1px solid blue;
text-align:left;
 }






</style>
<style type="text/css">b.drop-shadow { word-wrap: break-word; }</style>

</head>';
if($getuser3[banned]=="Yes")
 {
  die("<table class='maintable'><tr class='forumrow'><td><center><b>dpboss.boston</b><br>You have been banned from this forum by $getuser3[banby] <br>and the reason is '$getuser3[banreason]'</center></td></tr>");
   
 }

if(strlen($getuser3['username'])<1)
{
  $getuser3['status']=-1;
}
if(isset($forumID)&&isset($ID)&&$ID!=0) //If looking at specific post
 {
   if(!isset($_GET['start']))
   {
    $start=0;
   }
   else
   {
    $start=$_GET['start'];
   }
   $page = intval($_GET['page']);
$query = @mysql_query("SELECT COUNT(*) FROM `b_posts` where `threadparent` = '2';");
$updates2 = @mysql_result($query, 0);

$pages = ceil($updates2/25);
if(!$pages) $pages = 1;
if($page>$pages or $page<=0) $page=1;
if($start>$updates2 or $start<=0) $start = 0;
if($page) $start = ($page - 1) * 25; else $start = 0;
   
   $forumID="2";
   $ID="2";
   $user=$_SESSION['user'];
   $getranks="SELECT * from b_ranks order by postsneeded ASC";
   $getranks2=mysql_query($getranks);
   $updateviews="update b_posts set views=views+1 where ID='$ID'";
   mysql_query($updateviews) or die("Could not update views");
 


   


   if (isset($_SESSION['user']))
   {
     
       $thedate=date("U");
       $activeuser22="Update b_users set lasttime='$thedate', pactive='$ID',sactive=0,factive='$forumID' where username='$user'";
       mysql_query($activeuser22) or die("not activated");
}
   if (!isset($_SESSION['user']))
    {
       
       $thedate=date("U");
       $ip=$_SERVER["REMOTE_ADDR"];
       $browser=$_SERVER['HTTP_USER_AGENT'];
    //   $insertguestip="REPLACE guestsonline set time='$thedate', guestip='$ip',browser='$browser',factive='$forumID',pactive='$ID'";
    //   mysql_query($insertguestip) or die(mysql_error());

    }
	$timee=date("g:ia", time());

 
   
   $getthread="SELECT * from b_posts, b_forums where b_forums.ID=b_posts.postforum and b_posts.ID='$ID'";
   $getthread2=mysql_query($getthread) or die("Could not get thread");
   $getthread3=mysql_fetch_array($getthread2);
   if(!isset($_SESSION['user']))
   {
     $getuser3[status]=-1;
   }
   if($getthread3[permission_min]>$getuser3[status])
   {
     die("<table class='maintable'><tr class='headline'><td><center>No permission</center></td></tr><tr class='forumrow'><td><center>You do not have permission to view this thread</center></td></tr></table><div class='time' align='center'><form method='POST' action='authenticate.php'>
Username:<br><input name='user' type='text'>
<br>Password:<br><input name='password' type='password'>
<br><input name='remember' value='1' type='checkbox'>
 Automatic login <small>(you must allow cookies in phone)</small><br><input name='submit' value='Log in' type='submit'></form>
</div>");
   }
   
   if(isset($_SESSION['user']))
{
    
}
  


   $getforuminfo="SELECT * from b_forums where ID='$forumID'";
   $getforuminfo2=mysql_query($getforuminfo) or die("Could not get forum info");
   $getforuminfo3=mysql_fetch_array($getforuminfo2);
   if(isset($_SESSION['user']) && ($getforuminfo3[permission_min]>0))
{
$userwhere=$_SESSION['user'];
$updatewhere=mysql_query("update b_users set userwhere='$userwhere is viewing thread of protected forum' where username='$userwhere'"); }
else if(isset($_SESSION['user']))
{
$userwhere=$_SESSION['user'];
$updatewhere=mysql_query("update b_users set userwhere='$userwhere is viewing thread  $getthread3[title] of forum $getforuminfo3[name]' where username='$userwhere'");
}
include 'update1.php';
   
   print "</p></td></tr></table>";
   
$forumID="2";
$ID="2";




   
   $postselect="SELECT * from b_users u, b_posts p WHERE u.userID = p.author and p.ID='$ID'";
   $postselect2=mysql_query($postselect) or die(mysql_error());
   $threadselect="SELECT * FROM b_users u, b_posts p  WHERE p.threadparent='2' and u.userID = p.author order by p.ID DESC limit $start, $numrepliesperpage";
   $threadselect2=mysql_query($threadselect) or die(mysql_error());
   

 // page start

   $order="SELECT COUNT(*) FROM b_users u, b_posts p  WHERE p.threadparent='2' and u.userID = p.author order by p.ID ASC";
   $order2=mysql_query($order) or die("2");
   $d=0;
   $f=0;
   $g=1;
   $order3=mysql_result($order2,0);
   $prev=$start-$numrepliesperpage;
   $next=$start+$numrepliesperpage;


   while($postselect3=mysql_fetch_array($postselect2))
   {
    $postselect3[post]=BBCode($postselect3[post]);
    if($postselect3[nosmilies]==0)
    {
      $postselect3[post]=Smiley($postselect3[post]);
    }
    if($postselect3['rank']!='0')
    {
      $rank=$postselect3['rank'];
    }
    else
    {
      $rank=getrank($postselect3['posts'],$getranks2);
    }
    $group=getstatus($postselect3['status']);
    if(mysql_num_rows($getranks2)>0)
    {
      mysql_data_seek($getranks2, 0);
    }
   
	 
    
   }
  $i=0;
   while($threadselect3=mysql_fetch_array($threadselect2))
   {


       $threadselect3[post]=BBCode($threadselect3[post]);
       if($threadselect3[nosmilies]==0)
       {
         $threadselect3[post]=Smiley($threadselect3[post]);
       }
       if($threadselect3['rank']=='0')
       {
         $rank1=getrank($threadselect3[posts],$getranks2);
       }
       else
       {
         $rank1=$threadselect3['rank'];
       }
       $groups=getstatus($threadselect3[status]);
if($threadselect3['stat']=='0')
{ 

$onoff = "Offline";
 }    
else 
 { 
$onoff = "Online";

}


  	  

if(mysql_num_rows($getranks2)>0)
        {
          mysql_data_seek($getranks2, 0);
        }
     if($threadselect3[username]!="Guest")
     {

$path = avtar;

$to = $path.'/'.$threadselect3['username'].'.jpg';
   if(file_exists($to))
   {  $avt = $path.'/'.$threadselect3['username'].''; }

else {

$avt = "templates/images/300";
 }

print '<table class="blue1" width="100%"><tr><td><img class="fallback" src="'.$avt.'.jpg" width="65" height="72"/></td>
<td><p><b><b><font size="5">'.$threadselect3[lastpost].'</font></b></b><br/>'.$threadselect3[timepost].' <br>['.$onoff.']</p></td></tr></table>
<div class="forum2"><br/><center><font color="black"><b class="drop-shadow"><b><br/><span style="color: black"><i>'.$threadselect3[post].'</i></span></b></b></font></center><br/></div>';
echo '<table class="blue1" width="100%">';

echo '<td>[<a href="#bottom"><font size=5>DOWN</font></a>]</td><td>

[<a href="#top"><font size=5>UP</font></a>]</td>';

if ($getuser3[status]>=2)
	   {
     print "<center><a href='edit.php?forumID=$forumID&ID=$threadselect3[ID]'>Edit Post</a>";
	 }
	 
     if($getuser3[status]>3)
     {
         print "|<a href='deletepost.php?ID=$threadselect3[ID]'>Delete post</a></center>";
     }
echo '<td width="auto" align="right">[<a href="quote.php?forumID='.$forumID.'&ID='.$threadselect3[ID].'" rel="nofollow"><font size=5>Quote</font></a>]
</td></table> <br/>'; 
}
  else {

}

     $i++;
   }


    print "<a name='bottom'></a><div class='o2' align='left'>Page : ";

  $asd = $page - 2;
$asd2 = $page + 3;
if($asd<$updates2 && $asd>0 && $page>3) echo '<a href="satta-matka-kalyan-sata-mataka-guessing-forum">1</a> ... ';
for($i=$asd; $i<$asd2; $i++)
{
if($i<$updates2 && $i>0)
{
if ($i > $pages ) break;
if ($page==$i) echo '<span>['.$i.'] </span> ';
else echo '<a class="page" href="satta-matka-kalyan-mumbai-guessing-forum.php?page='.$i.'">'.$i.'</a> ';
}
}
$pagenext = ($page + 1);
if($i <= $pages)
{
if($asd2<$updates2) echo ' ...<a href="satta-matka-kalyan-mumbai-guessing-forum.php?page='.$pages.'">'.$pages.'</a>...<a href="satta-matka-kalyan-mumbai-guessing-forum.php?page='.$pagenext.'">Next</a>';}


echo '</div>';
  
  

   print "</td></tr></table>";



if(isset($_SESSION['user']))
{

  if ($getuser3[status]>=6) {

$recent=date("U")-300;
   $activeusers="SELECT * from b_users where pactive='$ID' and  lasttime>'$recent'";
   $activeusers2=mysql_query($activeusers) or die("Could not get users");
   $num=mysql_num_rows($activeusers2);
//   $countguests="SELECT DISTINCT guestip from guestsonline where pactive='$ID' and time>'$recent'";
//   $countguests2=mysql_query($countguests);
//   $thecount=mysql_num_rows($countguests2);
  print "</div><font color=black>Registered user online now:</font> $num </b></td></tr>";
   
   print"(";
   while($activeusers3=mysql_fetch_array($activeusers2))
{
  print " <A href='profile.php?userID=$activeusers3[userID]' rel='nofollow'><b>$activeusers3[username]</b></a>,";
}
   print"& $thecount Guests(s))";
}}
print "<br/>";



   print '<div class="blue1" align="center"><h2><div class="o1">Powered by <a href="../">dpboss.boston </b></a></div></h2></div>';
    if($getuser3[status]>=6)
    {
      print "<center><a href='admin/index.php'>Admin CP</a></center><br>";
    }
if($getuser3[status]>=3)
    {
      print "<center><a href='mod/index.php'>Moderator</a></center>";
    }


 }




$sql = mysql_query("SELECT `guestid` FROM `guestsonline`;");
while($room = mysql_fetch_array($sql))
{ if ($room[guestid]>10000)
$sqil = "TRUNCATE TABLE `guestsonline`";
mysql_query($sqil); }
include "daylogs.php";
	
	
}

?>