<?php
namespace SlimNoCache;

// https://developer.mozilla.org/en-US/docs/Web/HTTP/Caching_FAQ
class SlimNoCache extends \Slim\Middleware {

    public function call() {
    	$rsp = $this->app->response();
    	
    	// Based on http://stackoverflow.com/a/13640164
        $rsp->headers->set("Cache-Control", "no-store, no-cache, must-revalidate, max-age=0, post-check=0, pre-check=0");
        $rsp->headers->set("Pragma", "no-cache");

        $this->next->call();
    }
}
?>
