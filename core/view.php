<?php 

    class View
    {
        public function generate($contentView, $templateView, $data = null)
        {
            include VIEW_PATH . $templateView;
        }
    }

?>