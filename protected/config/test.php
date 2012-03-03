<?php
return CMap::mergeArray(
    require(__DIR__.'/_main.php'),
    array(
        'components'=>array(
            'fixture'=>array(
                'class'=>'system.test.CDbFixtureManager',
            ),
        ),
    )
);
