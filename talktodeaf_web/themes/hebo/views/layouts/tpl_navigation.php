<section id="navigation-main">  
<div class="navbar">
	<div class="navbar-inner">
    <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
  
          <div class="nav-collapse">
			<?php $this->widget('zii.widgets.CMenu',array(
                    'htmlOptions'=>array('class'=>'nav'),
                    'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
					'itemCssClass'=>'item-test',
                    'encodeLabel'=>false,
                    'items'=>array(

                        array('label'=>'คำศัพท์', 'url'=>array('/vocabulary/admin'), 'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'หมวด', 'url'=>array('/category/admin'), 'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'ประเภท', 'url'=>array('/type/admin'), 'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'หนังสือ', 'url'=>array('/book/admin'), 'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'สถานที่', 'url'=>array('/place/admin'), 'visible'=>!Yii::app()->user->isGuest),
                        array('label'=>'เข้าสู่ระบบ', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                        array('label'=>'ออกจากระบบ ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)

                        ),
                )); ?>
    	</div>
    </div>
	</div>
</div>
</section><!-- /#navigation-main -->