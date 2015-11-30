<?

$USER = $ModuleParameters['USER']; 

$REQUEST = $ModuleParameters['applicationPostHeaders'];

$APIcall = json_decode($GLOBALS['HTTP_POST_VARS']['APIcall'],true);

$Panels = $this->Panels;

$currentPanelName = $APIcall['panelID'];
$currentPanelID = $panels[$currentPanelName];

$typeDifferentiate = array(
                           'pageModule' => 'Page module'
                           );

if(!isset($VIEW)) mk_error( "Missing 'getFunction' parameter in load of module" );

if($VIEW == '') $VIEW = "index";

$exVIEW = explode("/",$VIEW);

if(count($exVIEW) <= 1) $exVIEW[1] = "index";
