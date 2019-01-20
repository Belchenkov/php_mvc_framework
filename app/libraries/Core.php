<?php
    /**
     * App Core Class
     * Creates URL & Loads Core Controller
     * URL FORMAT - /controller/method/params
     */
    class Core
    {
        protected $currentController = 'Pages';
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct()
        {
            $this->getUrl();
        }

        /**
         * GET URL from address string
         */
        public function getUrl()
        {
            echo $_GET['url'];
        }
    }