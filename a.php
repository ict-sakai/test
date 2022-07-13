#!/usr/bin/php
<?php 
  foreach(file('/usr/share/dict/linux.words') as $line){
    // strpos() 関数を使って、文字列 "abc" が含まれる単語を echo "$line"; で表示しなさい。
	$ary = strpos($line, 'abc');
	/* strpos()は文字列を見つけた時に見つけた位置を返す
			位置ではなくて、見つけた文字列を表示したいので、
			見つからなかった時のfalse以外をecho "$line"とする 
	*/
	if($ary !== false){			//　
		echo "$line";
    }
  } 
?>
