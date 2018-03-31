
<ul class="nav nav-pills nav-stacked">
    <?php
    foreach ($menu as $value)
    {
        echo "<li role=\"presentation\" class=\"active\"><a href=\"?page={$value['id']}\"><span class=\"{$value['menu_icon']}\" aria-hidden=\"true\"></span> {$value['menu_name']}</a></li>";
    }
    ?>