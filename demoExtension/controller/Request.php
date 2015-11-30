<?

if( isset( $REQUEST['action'] ) )
{
    
    $action = $REQUEST['action'];
    $sentHeaders = $REQUEST;
    
    $posFile = thisModulePath . 'controller/request/action/' . $action . '.php';
    if(file_exists($posFile) || !$aber)
    {
        
        ob_start();
        require_once $posFile;
        $return = array(
                        'return' => ob_get_clean()
                        );
                        
    }
    else
    {
        $return = array(
                        'return' => 'Critical error: Action not found \''.$posFile.'\''
                        );
    }
    
    if(!$CONTINUE) exit(json_encode($return));
}
