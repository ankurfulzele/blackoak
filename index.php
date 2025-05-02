<?php 
########################################################################################################################
#region
    /* 
                                               EPX-PAX-START
    PROVIDER : KLUDE PTY LTD
    PACKAGE  : EPX-PAX
    AUTHOR   : BRIAN PINTO
    RELEASED : 2025-03-11
    
    Copyright (c) 2017-2023 Klude Pty Ltd. https://klude.com.au

    The MIT License

    Permission is hereby granted, free of charge, to any person obtaining
    a copy of this software and associated documentation files (the
    "Software"), to deal in the Software without restriction, including
    without limitation the rights to use, copy, modify, merge, publish,
    distribute, sublicense, and/or sell copies of the Software, and to
    permit persons to whom the Software is furnished to do so, subject to
    the following conditions:

    The above copyright notice and this permission notice shall be
    included in all copies or substantial portions of the Software.

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
    EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
    MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
    NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
    LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
    OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
    WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
    
    */
#endregion
# ######################################################################################################################
# i'd like to be a tree - pilu (._.) // please keep this line in all versions - BP
# ######################################################################################################################
namespace {
    \defined('_\MSTART') OR \define('_\MSTART', \microtime(true));
}
namespace { function o(){
    static $I; return $I ?? ($I = new \stdClass);
}}
namespace _ { (function(){
    # ##############################################################################################################
    #region INIT
    global $_;
    (isset($_) && \is_array($_)) OR $_ = [];
    \define('_\INCP_DIR', \str_replace('\\','/',\realpath(\dirname($_SERVER['SCRIPT_FILENAME']))));
    \define('_\KEY', \md5($_SERVER['SCRIPT_FILENAME']));
    \define('_\INTFC', $intfc =
        $_['INTFC'] 
        ?? (empty($_SERVER['HTTP_HOST']) 
            ? 'cli'
            : $_SERVER['HTTP_REQUEST_INTERFACE'] ?? 'web'
        )
    );
    \define('_\IS_CLI', (\_\INTFC === 'cli'));
    \define('_\IS_WEB', (\_\INTFC === 'web'));
    \define('_\IS_API', (!\_\IS_CLI && !\_\IS_WEB));
    \define('_\OB_OUT', \ob_get_level());
    \_\IS_WEB AND \ob_start();
    \define('_\OB_TOP', \ob_get_level());
    #endregion
    # ##############################################################################################################
    #region DX
    1 AND \ini_set('display_errors', 0);
    1 AND \ini_set('display_startup_errors', 1);
    1 AND \ini_set('error_reporting', E_ALL);
    0 AND \error_reporting(E_ALL);
    $fault__fn = function($ex = null){
        if(\_\IS_CLI){
            $type = $ex::class;
            echo "\033[91m\n"
                ."{$type}: {$ex->getMessage()}\n"
                ."File: {$ex->getFile()}\n"
                ."Line: {$ex->getLine()}\n"
                ."\033[31m{$ex}\033[0m\n"
            ;
        } else {
            $FAULTS[\microtime(true).':'.\uniqid()] = $ex;
            while(\ob_get_level() > \_\OB_OUT){ @\ob_end_clean(); }
            \defined('_\SIG_ABORT') OR \define('_\SIG_ABORT', -1);
            exit(<<<HTML
                <pre style="overflow:auto; color:red;border:1px solid red;padding:5px;">{$ex}</pre>
            HTML);
        }
    };
    1 AND \set_exception_handler(function($ex) use($fault__fn){
        try{
            if(\class_exists(\_\dx::class)){
                \_\dx::on__exception($ex);
            } else {
                $fault__fn($ex);
            }
        } catch(\Exception $ex) {
            $fault__fn($ex);
        }
    });
    1 AND \set_error_handler(function($severity, $message, $file, $line) use($fault__fn){
        try{
            if(\class_exists(\_\dx::class)){
                \_\dx::on__error($severity, $message, $file, $line);
            } else {
                try{
                    throw new \ErrorException(
                        $message, 
                        0,
                        $severity, 
                        $file, 
                        $line
                    );
                } catch(\Throwable $ex) {
                    if(!\defined('_\SIG_END')){
                        $fault__fn($ex);
                    } else {
                        throw $ex;
                    }
                }
            }
        } catch(\Exception $ex) {
            $fault__fn($ex);
        }
    });
    1 AND \register_shutdown_function(function() use($fault__fn){
        try{
            if(\class_exists(\_\dx::class)){
                \_\dx::on__shutdown();
            } else {
                try{
                    if(\defined('_\SIG_ABORT') && \_\SIG_ABORT < 0){
                        exit();
                    }                    
                    if(\defined('_\SIG_END')){
                        throw new \Exception("Invalid SIG_END setting or Duplicate call to Root Finalizer");
                    } else {
                        \define('_\SIG_END', \microtime(true));
                    };        
                    if($error = \error_get_last()){ 
                        \error_clear_last();
                        throw new \ErrorException(
                            $error['message'], 
                            0,
                            $error["type"], 
                            $error["file"], 
                            $error["line"]
                        );
                    } 
                } catch(\Throwable $ex) {
                    $fault__fn($ex);
                }
            }
        } catch(\Exception $ex) {
            $fault__fn($ex);
        }
    });
    #endregion
    # ##############################################################################################################
    #region CFG
    \define('_\CFG_STATE', (function(){
        global $_;
        $intfc = \_\INTFC;
        if(
            ($a = \is_file($f = \_\INCP_DIR."/.local/.config-cache.php"))
            || \is_file($f = \_\INCP_DIR."/.config.php")
        ){
            include $f;
        }
        if(
            ($b = \is_file($f = \_\INCP_DIR."/.local/.config-cache-{$intfc}.php"))
            || \is_file($f = \_\INCP_DIR."/.config-{$intfc}.php")
        ){
            include $f;
        }
        return [$a,$b];
    })());
    \set_time_limit($_['TIMELIMIT'] ?? 5);
    //* Default is 'Australia/Adelaide' because thats where epx-php was invented.
    \date_default_timezone_set($_['TIMEZONE'] ?? 'Australia/Adelaide');
    #endregion
    # ##############################################################################################################
    #region DBG
    \defined('_\DBG') OR \define('_\DBG', (int) ($_REQUEST['--debug'] ?? $_['DBG']['EN'] ?? 0));
    \defined('_\DBG_') OR \define('_\DBG_',[
        0 => \_\DBG >= 0,
        1 => \_\DBG >= 1,
        2 => \_\DBG >= 2,
        3 => \_\DBG >= 3,
        4 => \_\DBG >= 4,
        5 => \_\DBG >= 5,
        6 => \_\DBG >= 6,
        7 => \_\DBG >= 7,
        8 => \_\DBG >= 8,
        9 => \_\DBG >= 9,
    ]);    
    #endregion
    # ##############################################################################################################
    #region DIRS
    \define('_\LIB_PFX', $_['LIB_PFX'] ?? '');
    \define('_\CWD', \str_replace('\\','/', \getcwd()));
    \define('_\START_FILE', \str_replace('\\','/', __FILE__));
    \define('_\START_DIR', \dirname(\_\START_FILE));
    \define('_\LIB_DIR', \_\START_DIR);
    \define('_\VND_DIR',
        (
            \is_dir($d = \_\INCP_DIR.($sel = \_\LIB_PFX.'/'.($sel1 = $_['VND']['SELECT'] ?? null ?: '.local-vnd')))
            || \is_dir($d = \_\LIB_DIR."/{$sel1}")
        ) ? $d : \_\INCP_DIR.$sel
    );
    \define('_\DATA_DIR',
        (
            \is_dir($d = \_\INCP_DIR.($sel = \_\LIB_PFX.'/'.($sel1 = $_['DATA']['SELECT'] ?? null ?: '.local-data')))
            || \is_dir($d = \_\LIB_DIR."/{$sel1}")
        ) ? $d : \_\INCP_DIR.$sel
    );
    \define('_\APP_DIR',
        (
            \is_dir($d = \_\INCP_DIR.($sel = \_\LIB_PFX.'/'.($sel1 = $_['APP']['SELECT'] ?? null ?: 'app')))
            || \is_dir($d = \_\LIB_DIR."/{$sel1}")
        ) ? $d : \_\INCP_DIR.$sel
    );
    \define('_\ABACA_DIR',
        (
            \is_dir($d = \_\INCP_DIR.($sel = \_\LIB_PFX.'/'.($sel1 = $_['ABACA']['SELECT'] ?? null ?: 'abaca')))
            || \is_dir($d = \_\LIB_DIR."/{$sel1}")
        ) ? $d : \_\INCP_DIR.$sel
    );
    #endregion
    # ##############################################################################################################
    #region TSP
    1 AND \spl_autoload_extensions('-#.php,/-#.php');
    1 AND \spl_autoload_register();
    1 AND \set_include_path(\_\START_DIR.'/app'.PATH_SEPARATOR.\get_include_path());
    \define('_\REQ_URP', (function(){
        if(\_\IS_CLI){
            if(!\str_starts_with(($s = $_SERVER['argv'][1] ?? ''),'-')){
                return '/'.\ltrim($s,'/');
            }
        } else {
            $p = \strtok($_SERVER['REQUEST_URI'],'?');
            if((\php_sapi_name() == 'cli-server')){
                return $p;
            } else {
                if((\str_starts_with($p, $n = $_SERVER['SCRIPT_NAME']))){
                    return \substr($p,\strlen($n));
                } else if((($d = \dirname($n = $_SERVER['SCRIPT_NAME'])) == DIRECTORY_SEPARATOR)){
                    return $p;
                } else {
                    return \substr($p,\strlen($d));
                }
            }
        }
    })());
    #endregion
    # ##############################################################################################################
    #region ROUTE
    $this->rurp = \rtrim(\_\REQ_URP,'/');
    $this->scheme = ($_SERVER["REQUEST_SCHEME"] ?? ((\strtolower(($_SERVER['HTTPS'] ?? 'off') ?: 'off') === 'off') ? 'http' : 'https'));
    $this->host = $_SERVER["HTTP_HOST"];
    $this->method = $method = $_SERVER['REQUEST_METHOD'] ?? '';
    $this->headers = \iterator_to_array((function(){
        foreach(\getallheaders() as $k => $v){
            yield $k => $v;
        }
    })());
    $this->agent = $agent = (function(){
        if(!\is_null($agent = $this->headers['Epx-Agent'] ?? null)){
            return $agent;
        } else if('xmlhttprequest' == \strtolower( $_SERVER['HTTP_X_REQUESTED_WITH'] ?? '' )) {
            return 'xhr';
        } else {
            return 'page';
        }
    })();
    $this->is_get = $is_get = !\in_array($method, ['POST','PUT','PATCH','DELETE']);
    $this->action = $action = $_REQUEST['--action'] ?? null;
    $this->is_action = $is_action = ($action || !$is_get) ? true : false;
    $this->is_view = !$is_action;
    $this->referer = ($j = $_SERVER['HTTP_REFERER'] ?? null) ? \parse_url($j) : [];
    $this->is_supply = \preg_match('#(?:-pub|-@)[/\.]#', $this->rurp) ? true : false;
    $this->is_html = (\str_contains(($_SERVER['HTTP_ACCEPT'] ?? ''),'text/html'));
    $this->is_xhr = ('xmlhttprequest' == \strtolower( $_SERVER['HTTP_X_REQUESTED_WITH'] ?? '' ));
    $this->is_sub = (($_SERVER['HTTP_REFERER'] ?? '') ? true : false);
    $this->urp = \strtok($_SERVER['REQUEST_URI'] ?? '','?');
    $this->site_urp = (function(){
        if((\php_sapi_name() == 'cli-server')){
            return '';
        } else {
            $p = $this->urp;
            if((\str_starts_with($p, $n = $_SERVER['SCRIPT_NAME']))){
                return \substr($p, 0, \strlen($_SERVER['SCRIPT_NAME']));
            } else if((($d = \dirname($n = $_SERVER['SCRIPT_NAME'])) == DIRECTORY_SEPARATOR)){
                return '';
            } else {
                return \substr($p, 0, \strlen($d));
            }
        }
    })();
    $this->root_url = $this->scheme.'://'.$this->host;
    $this->full_url = \rtrim($this->root_url.$this->urp,'/');
    $this->site_url = \rtrim($this->root_url.$this->site_urp,'/');
    $this->data_url = $this->site_url."/data";
    $this->asset_url = $this->site_url."/-asset";
    $this->base_url = $this->site_url;
    if(
        ($f = \stream_resolve_include_path("__{$this->rurp}/-@.php"))
        || ($f = \stream_resolve_include_path("__{$this->rurp}-@.php"))
    ){
        $this->ctlr_url = $this->site_url.$this->rurp;
        $this->ctlr_file = $f;
        return function() use($f){
            include $f;
        };
    } else {
        return function(){
            \http_response_code(404);
            exit("404 Not Found");
        };
    }
    #endregion
    # ##############################################################################################################
})->bindTo(\o())()(); }
