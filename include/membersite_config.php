<?PHP
require_once("./include/fg_membersite.php");
$versionsite = "alpha-0.0.4";
$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('learox.com');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('bartdaelman@outlook.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'localhost',
                      /*username*/'learoxcom_ak',
                      /*password*/'DG2157dg2157',
                      /*database name*/'learoxcom_ak',
                      /*table name*/'fgusers3');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('qSRcVS6DrTzrPvr');

?>