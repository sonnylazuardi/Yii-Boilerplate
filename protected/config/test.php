<?php
return CMap::mergeArray(
    require(__DIR__.'/main.php'),
    array(
        'components'=>array(
            'fixture'=>array(
                'class'=>'system.test.CDbFixtureManager',
            ),
        ),
    )
);
