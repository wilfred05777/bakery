<?php
 
error_reporting(0);
$page_name= basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SMS Installer</title>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
 <link rel="stylesheet" href="styles/Installer.css" type="text/css" />
<noscript><META http-equiv=REFRESH content='0;url=EnableJavascript.php' /></noscript>
<style>
.clear { height:10px;} 
.come-middle{
position: absolute;

width: 50%;
left:25%;
}
.thick-border{
border: 5px solid #16a085;
border-radius: 10px;
 
color: #555555;
}
</style>
</head>
<body>
<div class="clear"></div>
 <div class="clear"></div>
  <div class="clear"></div>
   <div class="clear"></div>
    
 <div class="come-middle thick-border">
 
 
 <table class="table table-condensed" border='0' cellspacing='0' cellpadding='0' align='center'>
  <tr>
    <td class='header'>  
	<table width='100%' border='0' cellspacing='0' cellpadding='0' class='logo_padding'>
              <tr>
                <td><img src='ico/loogo.png' height='60' width='150' border='0' /></td>
                <td align='right'><a href='http://www.cedarcliffservices.com.ng' target=_blank ><img src='assets/logo.png' height='60' width='66' border='0'/></a></td>
              </tr>
            </table>
		 </td>
	</tr>
 
 <tr>
 <td>
 <table class="table table-condensed" width='100%' border='0' cellspacing='0' cellpadding='0'>
              <tr>
                <td>
                	<table class="table table-condensed" width='100%' border='0' cellspacing='0' cellpadding='0'>
                    <tr>
                      <td class='padding'>
<?php
$url = 'Step0.php';

if($_GET["upreq"] == 'true')
{
    $url .= '?upreq=true';
}
?>
  <iframe src="<?php echo $url; ?>" scrolling="no" frameborder="2" style="background-color:transparent; height:360px; width:100%"></iframe>
                       </td>
                    </tr>
                  </table>
                  </td>
              </tr>
            </table>
			</td>
			</tr>
			  <tr>
          <td class=' ' valign='top'>
		  <table class="table table-condensed" width='100%' border='0' cellspacing='0' cellpadding='0'>
              <tr>
                <td class='margin'></td>
              </tr>
              <tr>
                <td align='center' class='copyright'>SmartShopper is a product of Benman Innovations,  (<a href='http://www.cedarcliffservices.com.ng' target='_blank'>Vs-W2.0.0.1</a>). and is licensed under the <a href='http://www.gnu.org/licenses/gpl.html' target='_blank'>GPL License</a>.</td>
              </tr>
            </table></td>
        </tr>
 </table>
 
 </div>
  
  </body>
</html>
