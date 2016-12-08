<?php
/**
 * ColorPickで有効な色かどうかを判定
 * HEX, RGB, RGBA, HSL, HSLA, colornameでチェック 大小比較なし
 * @param mix $color
 * @return boolean
 */
function ColorPickValidate($color){
	//空白リムーブ
	$color = str_replace(array(" ", "　"), "", trim($color));

	//htmlカラーコード
	if(preg_match('/^#([\da-fA-F]{6}|[\da-fA-F]{3})$/', $color)){
		return true;
	}

	//rgb
	if(preg_match('/^rgb\(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\,){2}(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\)$/i', $color)){
		return true;
	}

	//rgba
	if(preg_match('/^rgba\(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\,){2}(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\,(0|0?\.\d+|1|1\.0+)\)$/i', $color)){
		return true;
	}

	//hsl
	if(preg_match('/^hsl\((\d|[1-9]\d|[1-2]\d\d|3[0-5]\d|360)\,((\d|[1-9]\d|100)\%?\,)(\d|[1-9]\d|100)\%?\)$/i', $color)){
		return true;
	}
	
	//hsla
	if(preg_match('/^hsla\((\d|[1-9]\d|[1-2]\d\d|3[0-5]\d|360)\,((\d|[1-9]\d|100)\%?\,){2}(0|0?\.\d+|1|1\.0+)\)$/i', $color)){
		return true;
	}
	
	/* HTML color values and names */
	$color_array = array("800000","maroon","8b0000","darkred","b22222","firebrick","ff0000","red","fa8072","salmon","ff6347","tomato","ff7f50","coral","ff4500","orangered","d2691e","chocolate","f4a460","sandybrown","ff8c00","darkorange","ffa500","orange","b8860b","darkgoldenrod","daa520","goldenrod","ffd700","gold","808000","olive","ffff00","yellow","9acd32","yellowgreen","adff2f","greenyellow","7fff00","chartreuse","7cfc00","lawngreen","008000","green","00ff00","lime","32cd32","limegreen","00ff7f","springgreen","00fa9a","mediumspringgreen","40e0d0","turquoise","20b2aa","lightseagreen","48d1cc","mediumturquoise","008080","teal","008b8b","darkcyan","00ffff","aqua","00ffff","cyan","00ced1","darkturquoise","00bfff","deepskyblue","1e90ff","dodgerblue","4169e1","royalblue","000080","navy","00008b","darkblue","0000cd","mediumblue","0000ff","blue","8a2be2","blueviolet","9932cc","darkorchid","9400d3","darkviolet","800080","purple","8b008b","darkmagenta","ff00ff","fuchsia","ff00ff","magenta","c71585","mediumvioletred","ff1493","deeppink","ff69b4","hotpink","dc143c","crimson","a52a2a","brown","cd5c5c","indianred","bc8f8f","rosybrown","f08080","lightcoral","fffafa","snow","ffe4e1","mistyrose","e9967a","darksalmon","ffa07a","lightsalmon","a0522d","sienna","fff5ee","seashell","8b4513","saddlebrown","ffdab9","peachpuff","cd853f","peru","faf0e6","linen","ffe4c4","bisque","deb887","burlywood","d2b48c","tan","faebd7","antiquewhite","ffdead","navajowhite","ffebcd","blanchedalmond","ffefd5","papayawhip","ffe4b5","moccasin","f5deb3","wheat","fdf5e6","oldlace","fffaf0","floralwhite","fff8dc","cornsilk","f0e68c","khaki","fffacd","lemonchiffon","eee8aa","palegoldenrod","bdb76b","darkkhaki","f5f5dc","beige","fafad2","lightgoldenrodyellow","ffffe0","lightyellow","fffff0","ivory","6b8e23","olivedrab","556b2f","darkolivegreen","8fbc8f","darkseagreen","006400","darkgreen","228b22","forestgreen","90ee90","lightgreen","98fb98","palegreen","f0fff0","honeydew","2e8b57","seagreen","3cb371","mediumseagreen","f5fffa","mintcream","66cdaa","mediumaquamarine","7fffd4","aquamarine","2f4f4f","darkslategray","afeeee","paleturquoise","e0ffff","lightcyan","f0ffff","azure","5f9ea0","cadetblue","b0e0e6","powderblue","add8e6","lightblue","87ceeb","skyblue","87cefa","lightskyblue","4682b4","steelblue","f0f8ff","aliceblue","708090","slategray","778899","lightslategray","b0c4de","lightsteelblue","6495ed","cornflowerblue","e6e6fa","lavender","f8f8ff","ghostwhite","191970","midnightblue","6a5acd","slateblue","483d8b","darkslateblue","7b68ee","mediumslateblue","9370db","mediumpurple","4b0082","indigo","ba55d3","mediumorchid","dda0dd","plum","ee82ee","violet","d8bfd8","thistle","da70d6","orchid","fff0f5","lavenderblush","db7093","palevioletred","ffc0cb","pink","ffb6c1","lightpink","000000","black","696969","dimgray","808080","gray","a9a9a9","darkgray","c0c0c0","silver","d3d3d3","lightgrey","dcdcdc","gainsboro","f5f5f5","whitesmoke","ffffff","white");

	if(in_array(mb_strtolower($color), $color_array)){
		return true;
	}

	return false;
}
?>