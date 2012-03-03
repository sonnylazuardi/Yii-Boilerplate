<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <?php
      echo CHtml::link(
          CHtml::encode(Yii::app()->name),
          array('/index/index'),
          array('class' => 'brand')
      ) ?>
      <div class="nav-collapse">
        <?php
        $this->widget(
            'zii.widgets.CMenu',
            array(
                'htmlOptions' => array(
                    'class' => 'nav'
                ),
                'items' => array(
                    array(
                        'url' => array('/index/index'),
                        'label' => Yii::t('menu', 'Home'),
                    ),
                    array(
                        'url' => array('/index/contact'),
                        'label' => Yii::t('menu', 'Contact'),
                    ),
                    array(
                        'url' => array('/index/page', 'view' => 'about'),
                        'label' => Yii::t('menu', 'About'),
                    ),
                ),
            )
        )
        ?>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>

