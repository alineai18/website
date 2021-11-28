<?php
/**
 * @var Framework\MVC\View $view
 */
$view->extends('default');
$view->block('contents');
?>
    <p>I like being called AAI. Can you call me?</p>
    <form>
        <label for="f">What do you want to do with me?</label>
        <input id="f">
        <button>Respond</button>
    </form>  
<?php
$view->endBlock();
