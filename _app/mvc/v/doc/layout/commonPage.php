<?
    $vv=new VV_doc_page($_vars);
?>
<?=$this->inside("doc/layout/html5bp",$vv)?>
<?=$this->render("doc/layout/main-menu",$vv)?>

<div class="container" style="padding-top: 80px;">
    <div class="row">
        <div class="span4">
            <div class="well">
            <?=$this->render("doc/layout/sections-menu",$vv)?>
            </div>
        </div>
        <div class="span8">
            <?=$_content?>
        </div>
    </div>
</div>