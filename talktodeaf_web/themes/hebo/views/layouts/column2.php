<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
    <section class="main-body">
        <div class="container">
            <div class="row-fluid">

                <div class="span-5 last">

                    <?php if(isset($this->breadcrumbs)):?>
                        <?php
                        $this->beginWidget('zii.widgets.CPortlet', array(
                            'title'=>'เมนู',
                            'htmlOptions'=>array('class'=>'pull-right'),
                        ));
                        $this->widget('zii.widgets.CMenu', array(
                            'items'=>$this->menu,
                            'htmlOptions'=>array('class'=>'pull-right'),
                        ));
                        $this->endWidget();
                        ?><!-- breadcrumbs -->
                    <?php endif?>

                    <!-- Include content pages -->
                    <?php echo $content; ?>

                </div><!--/span-->

                <div class="span3">
                    <?php include_once('tpl_sidebar.php');?>

                </div><!--/span-->
            </div><!--/row-->
        </div>
    </section>


<?php $this->endContent(); ?>

