<?php
/*
   - sourcePath: string, root directory of all source files.
   - messagePath: string, root directory containing message translations.
   - languages: array, list of language codes that the extracted messages
     should be translated to. For example, array('zh_cn','en_au').
   - fileTypes: array, a list of file extensions (e.g. 'php', 'xml').
     Only the files whose extension name can be found in this list
     will be processed. If empty, all files will be processed.
   - exclude: array, a list of directory and file exclusions. Each
     exclusion can be either a name or a path. If a file or directory name
     or path matches the exclusion, it will not be copied. For example,
     an exclusion of '.svn' will exclude all files and directories whose
     name is '.svn'. And an exclusion of '/a/b' will exclude file or
     directory 'sourcePath/a/b'.
   - translator: the name of the function for translating messages.
     Defaults to 'Yii::t'. This is used as a mark to find messages to be
     translated.
   - overwrite: if message file must be overwritten with the merged messages.
   - removeOld: if message no longer needs translation it will be removed,
     instead of being enclosed between a pair of '@@' marks.
 */
return array(
    'sourcePath'  => __DIR__ . '/../views',
    'messagePath' => __DIR__ . '/../message',
    'languages'   => array('en_US', 'de_DE'),
    'fileTypes'=>array('php'),
    'overwrite'=>true,
    'exclude'=>array(
        '.git',
        //'yiilite.php',
        //'yiit.php',
        //'/i18n/data',
        //'/messages',
        //'/vendors',
        //'/web/js',
    ),
);
