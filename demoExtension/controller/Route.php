<?

ob_start();

if(
    
   file_exists( thisModulePath .  'controller/pages/' . $exVIEW[1] . '.php' )
   
   ) require_once 'pages/' . $exVIEW[1] . '.php';
else if(
        
        file_exists( thisModulePath .  'controller/pages/' . str_replace("/",".",$VIEW) . '.php' )
        
        ) require_once thisModulePath .  'controller/pages/' . str_replace("/",".",$VIEW) . '.php';
else echo "Page not found";

$pageContent = ob_get_clean();
