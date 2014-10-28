<?php
$this->content = is_string($this->content) ? [$this->content] : $this->content;

$count = count($this->content);

switch ($count) {

    case '4':

        echo '<div class="row">';
        
        foreach ($this->content as $content) {
            echo '<div class="cols-sm-6 col-md-3">' . $content . '</div>';
        }

        echo '</div>';

        break;

    case '3':

        echo '<div class="row">';
        
        foreach ($this->content as $content) {
            echo '<div class="col-md-4">' . $content . '</div>';
        }

        echo '</div>';

        break;

    case '2':

        echo '<div class="row">';
        
        foreach ($this->content as $content) {
            echo '<div class="col-md-6">' . $content . '</div>';
        }

        echo '</div>';

        break;

    default:
        
        foreach ($this->content as $content) {
            echo $content;
        }

        break;

}
?>