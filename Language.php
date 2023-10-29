<?php 
    class Language {
        private $translations = [];

        public function __construct($languageFilePath) {
            if (file_exists($languageFilePath)) {
                $this->translations = json_decode(file_get_contents($languageFilePath), true);
            }
        }

        public function get($key) {
            return isset($this->translations[$key]) ? $this->translations[$key] : $key;
        }

        public function __get($property) {
            return $this->get($property);
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $selected_language = $_POST['language'];
        setcookie('language', $selected_language, time() + (30 * 24 * 60 * 60), '/');
        exit;
    }
    
    $selected_language = '';
    if (!empty($_COOKIE['language'])) {
        $selected_language = $_COOKIE['language'];
    }