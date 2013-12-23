<?php

function translit($greek, $upsilon = false) {
	$out = trim($greek);
	$out = strtr($out, array(
		'α' => 'a', 'β' => 'b', 'γ' => 'g', 'δ' => 'd', 'ε' => 'e', 'ζ' => 'z', 'η' => 'ē', 'θ' => 'th', 'ι' => 'i', 
		'κ' => 'k', 'λ' => 'l', 'μ' => 'm', 'ν' => 'n', 'ξ' => 'x', 'ο' => 'o', 'π' => 'p', 'ρ' => 'r', 'σ' => 's',
		'ς' => 's', 'τ' => 't', 'υ' => 'u', 'φ' => 'ph',  'ψ' => 'ps',  'χ' => 'ch', 'ω' => 'ō',

		'Α' => 'a', 'Β' => 'b', 'Γ' => 'g', 'Δ' => 'd', 'Ε' => 'e', 'Ζ' => 'z', 'Η' => 'ē', 'Θ' => 'th', 'Ι' => 'i',
		'Κ' => 'k', 'Λ' => 'l', 'Μ' => 'm', 'Ν' => 'n', 'Ξ' => 'x', 'Ο' => 'o', 'Π' => 'p', 'Ρ' => 'r', 'Σ' => 's',
		'Τ' => 't', 'Υ' => 'u', 'Φ' => 'ph',  'Ψ' => 'ps',  'Χ' => 'ch',  'Ω' => 'ō',

		'ἁ' => 'ha', 'ἅ' => 'ha', 'ᾅ' => 'hai', 'ἇ' => 'ha', 'ᾇ' => 'hai', 'ἃ' => 'ha', 'ᾃ' => 'hai', 'ᾁ' => 'hai',
		'ἀ' => 'a', 'ἄ' => 'a', 'ᾄ' => 'ai', 'ἆ' => 'a', 'ᾆ' => 'ai', 'ἂ' => 'a', 'ᾂ' => 'ai', 'ᾀ' => 'ai', 'ά' => 'a', 'ά' => 'a',
		'ᾴ' => 'ai', 'ᾶ' => 'a', 'ᾷ' => 'ai', 'ὰ' => 'a', 'ᾲ' => 'ai', 'ᾳ' => 'ai',
		'ἑ' => 'he', 'ἕ' => 'he', 'ἓ' => 'he', 'ἐ' => 'e', 'ἔ' => 'e', 'ἒ' => 'e', 'έ' => 'e', 'ὲ' => 'e', 'έ' => 'e',
		'ἡ' => 'hē', 'ἥ' => 'hē', 'ᾕ' => 'hēi', 'ἧ' => 'hē', 'ᾗ' => 'hēi', 'ἣ' => 'hē', 'ᾓ' => 'hēi', 'ᾑ' => 'hēi',
		'ἠ' => 'ē', 'ἤ' => 'ē', 'ᾔ' => 'ēi', 'ἦ' => 'ē', 'ᾖ' => 'ēi', 'ἢ' => 'ē', 'ᾒ' => 'ēi', 'ᾐ' => 'ēi', 'ή' => 'ē',
		'ῄ' => 'ēi', 'ῆ' => 'ē', 'ῇ' => 'ēi', 'ὴ' => 'ē', 'ῂ' => 'ēi', 'ῃ' => 'ēi', 'ή' => 'ē',
		'ἱ' => 'hi', 'ἵ' => 'hi', 'ἷ' => 'hi', 'ἳ' => 'hi', 'ἰ' => 'i', 'ἴ' => 'i', 'ἶ' => 'i', 'ἲ' => 'i', 'ί' => 'i',
		'ῖ' => 'i', 'ὶ' => 'i', 'ΐ' => 'i', 'ϊ' => 'i', 'ῒ' => 'i', 'ί' => 'i',
		'ὁ' => 'ho', 'ὅ' => 'ho', 'ὃ' => 'ho', 'ὀ' => 'o', 'ὄ' => 'o', 'ὂ' => 'o', 'ό' => 'o', 'ὸ' => 'o', 'ό' => 'o',
		'ὑ' => 'hu', 'ὕ' => 'hu', 'ὗ' => 'hu', 'ὓ' => 'hu', 'ὐ' => 'u', 'ὔ' => 'u', 'ὖ' => 'u', 'ὒ' => 'u', 'ύ' => 'u',
		'ῦ' => 'u', 'ὺ' => 'u', 'ϋ' => 'u', 'ΰ' => 'u', 'ῢ' => 'u', 'ύ' => 'u', 'ϋ' => 'u',
		'ὡ' => 'hō', 'ὥ' => 'hō', 'ᾥ' => 'hōi', 'ὧ' => 'hō', 'ᾧ' => 'hōi', 'ὣ' => 'hō', 'ᾣ' => 'hōi', 'ᾡ' => 'hōi',
		'ὠ' => 'ō', 'ὤ' => 'ō', 'ᾤ' => 'ōi', 'ὦ' => 'ō', 'ᾦ' => 'ōi', 'ὢ' => 'ō', 'ᾢ' => 'ōi', 'ᾠ' => 'ōi', 'ώ' => 'ō',
		'ῴ' => 'ōi', 'ῶ' => 'ō', 'ῷ' => 'ōi', 'ὼ' => 'ō', 'ῲ' => 'ōi', 'ῳ' => 'ōi', 'ώ' => 'ō',
		'ῥ' => 'rh', 'ῤ' => 'r',

		'Ἁ' => 'ha', 'Ἅ' => 'ha', 'Ἇ' => 'ha', 'Ἃ' => 'ha', 'Ἀ' => 'a', 'Ἄ' => 'a', 'Ἆ' => 'a', 'Ἂ' => 'a', 'Ά' => 'a', 'Ὰ' => 'a',
		'Ε' => 'e', 'Ἑ' => 'he', 'Ἕ' => 'he', 'Ἓ' => 'he', 'Ἐ' => 'e', 'Ἔ' => 'e', 'Ἒ' => 'e', 'Έ' => 'e', 'Ὲ' => 'e',
		'Η' => 'ē', 'Ἡ' => 'hē', 'Ἥ' => 'hē', 'Ἧ' => 'hē', 'Ἣ' => 'hē', 'Ἠ' => 'ē', 'Ἤ' => 'ē', 'Ἦ' => 'ē', 'Ἢ' => 'ē', 'Ή' => 'ē', 
		'Η' => 'ē', 'Ὴ' => 'ē',
		'Ι' => 'i', 'Ἱ' => 'hi', 'Ἵ' => 'hi', 'Ἷ' => 'hi', 'Ἳ' => 'hi', 'Ἰ' => 'i', 'Ἴ' => 'i', 'Ἶ' => 'i', 'Ἲ' => 'i', 'Ϊ' => 'i',
		'Ί' => 'i', 'Ι' => 'i', 'Ὶ' => 'i', 'Ί' => 'i', 'Ι' => 'i', 'Ὶ' => 'i', 
		'Ὁ' => 'ho', 'Ὅ' => 'ho', 'Ὃ' => 'ho', 'Ὀ' => 'o', 'Ὄ' => 'o', 'Ὂ' => 'o', 'Ό' => 'o', 'Ὸ' => 'o',
		'Υ' => 'u', 'Ὑ' => 'hu', 'Ὕ' => 'hu', 'Ὗ' => 'hu', 'Ὓ' => 'hu', 'Ϋ' => 'u', 'Ύ' => 'u', 'Ὺ' => 'u',
		'Ὡ' => 'hō', 'Ὥ' => 'hō', 'Ὧ' => 'hō', 'Ὣ' => 'hō', 'Ὠ' => 'ō', 'Ὤ' => 'ō', 'Ὦ' => 'ō', 'Ὢ' => 'ō', 'Ώ' => 'ō', 'Ὼ' => 'ō',
		'Ῥ' => 'rh',

		'’' => '\''
		));

	$out = preg_replace('/^([aeēiouō])h/', 'h\1', $out);

	if ($upsilon) {
		$out = str_replace('u', 'y', $out);
		$out = preg_replace('/([aieēoō])y/', '\1u', $out);
		$out = preg_replace('/y([aieēoō])/', 'u\1', $out);
		$out = str_replace(array('gg', 'gk', 'gx', 'gch'), array('ng', 'nk', 'nx', 'nch'), $out);
	}

	return $out;
}

function strip_diacritics($greek, $upsilon = false) {
	$out = trim($greek);
	$out = strtr($out, array(
		'Α' => 'α', 'Β' => 'β', 'Γ' => 'γ', 'Δ' => 'δ', 'Ε' => 'ε', 'Ζ' => 'ζ', 'H' => 'η', 'Θ' => 'θ', 'Ι' => 'ι',
		'Κ' => 'κ', 'Λ' => 'λ', 'Μ' => 'μ', 'Ν' => 'ν', 'Ξ' => 'χ', 'Ο' => 'ο', 'Π' => 'π', 'Ρ' => 'ρ', 'Σ' => 'σ',
		'ς' => 'ς', 'Τ' => 'τ', 'Υ' => 'υ', 'Φ' => 'φ',  'Ψ' => 'ψ',  'Χ' => 'χ',  'Ω' => 'ω',

		'ἁ' => 'α', 'ἅ' => 'α', 'ᾅ' => 'α', 'ἇ' => 'α', 'ᾇ' => 'α', 'ἃ' => 'α', 'ᾃ' => 'α', 'ᾁ' => 'α',
		'ἀ' => 'α', 'ἄ' => 'α', 'ᾄ' => 'α', 'ἆ' => 'α', 'ᾆ' => 'α', 'ἂ' => 'α', 'ᾂ' => 'α', 'ᾀ' => 'α', 'ά' => 'α',
		'ᾴ' => 'α', 'ᾶ' => 'α', 'ᾷ' => 'α', 'ὰ' => 'α', 'ᾲ' => 'α', 'ᾳ' => 'α', 'ά' => 'α',
		'ἑ' => 'ε', 'ἕ' => 'ε', 'ἓ' => 'ε', 'ἐ' => 'ε', 'ἔ' => 'ε', 'ἒ' => 'ε', 'έ' => 'ε', 'έ' => 'ε', 'ὲ' => 'ε',
		'ἡ' => 'η', 'ἥ' => 'η', 'ᾕ' => 'η', 'ἧ' => 'η', 'ᾗ' => 'η', 'ἣ' => 'η', 'ᾓ' => 'η', 'ᾑ' => 'η',
		'ἠ' => 'η', 'ἤ' => 'η', 'ᾔ' => 'η', 'ἦ' => 'η', 'ᾖ' => 'η', 'ἢ' => 'η', 'ᾒ' => 'η', 'ᾐ' => 'η', 'ή' => 'η',
		'ῄ' => 'η', 'ῆ' => 'η', 'ῇ' => 'η', 'ὴ' => 'η', 'ῂ' => 'η', 'η' => 'η', 'ή' => 'η', 'ῃ' => 'η',
		'ἱ' => 'ι', 'ἵ' => 'ι', 'ἷ' => 'ι', 'ἳ' => 'ι', 'ἰ' => 'ι', 'ἴ' => 'ι', 'ἶ' => 'ι', 'ἲ' => 'ι', 'ί' => 'ι',
		'ῖ' => 'ι', 'ὶ' => 'ι', 'ΐ' => 'ι', 'ϊ' => 'ι', 'ῒ' => 'ι', 'ί' => 'ι',
		'ὁ' => 'ο', 'ὅ' => 'ο', 'ὃ' => 'ο', 'ὀ' => 'ο', 'ὄ' => 'ο', 'ὂ' => 'ο', 'ό' => 'ο', 'ὸ' => 'ο', 'ό' => 'ο',
		'ό' => 'ο',
		'ὑ' => 'υ', 'ὕ' => 'υ', 'ὗ' => 'υ', 'ὓ' => 'υ', 'ὐ' => 'υ', 'ὔ' => 'υ', 'ὖ' => 'υ', 'ὒ' => 'υ', 'ύ' => 'υ',
		'ῦ' => 'υ', 'ὺ' => 'υ', 'ϋ' => 'υ', 'ΰ' => 'υ', 'ῢ' => 'υ', 'ύ' => 'υ', 'ϋ' => 'υ',
		'ὡ' => 'ω', 'ὥ' => 'ω', 'ᾥ' => 'ω', 'ὧ' => 'ω', 'ᾧ' => 'ω', 'ὣ' => 'ω', 'ᾣ' => 'ω', 'ᾡ' => 'ω',
		'ὠ' => 'ω', 'ὤ' => 'ω', 'ᾤ' => 'ω', 'ὦ' => 'ω', 'ᾦ' => 'ω', 'ὢ' => 'ω', 'ᾢ' => 'ω', 'ᾠ' => 'ω', 'ώ' => 'ω',
		'ῴ' => 'ω', 'ῶ' => 'ω', 'ῷ' => 'ω', 'ὼ' => 'ω', 'ῲ' => 'ω', 'ῳ' => 'ω', 'ώ' => 'ω',
		'ῥ' => 'ρ', 'ῤ' => 'ρ',

		'Ἁ' => 'α', 'Ἅ' => 'α', 'Ἇ' => 'α', 'Ἃ' => 'α', 'Ἀ' => 'α', 'Ἄ' => 'α', 'Ἆ' => 'α', 'Ἂ' => 'α', 'Ά' => 'α', 'Ὰ' => 'α',
		'Ε' => 'ε', 'Ἑ' => 'ε', 'Ἕ' => 'ε', 'Ἓ' => 'ε', 'Ἐ' => 'ε', 'Ἔ' => 'ε', 'Ἒ' => 'ε', 'Έ' => 'ε', 'Ὲ' => 'ε',
		'η' => 'η', 'Ἡ' => 'η', 'Ἥ' => 'η', 'Ἧ' => 'η', 'Ἣ' => 'η', 'Ἠ' => 'η', 'Ἤ' => 'η', 'Ἦ' => 'η', 'Ἢ' => 'η', 'Ή' => 'η',
		'η' => 'η', 'Ὴ' => 'η',
		'Ι' => 'ι', 'Ἱ' => 'ι', 'Ἵ' => 'ι', 'Ἷ' => 'ι', 'Ἳ' => 'ι', 'Ἰ' => 'ι', 'Ἴ' => 'ι', 'Ἶ' => 'ι', 'Ἲ' => 'ι', 'Ϊ' => 'ι',
		'Ί' => 'ι', 'Ι' => 'ι', 'Ὶ' => 'ι', 'Ί' => 'ι', 'Ι' => 'ι', 'Ὶ' => 'ι',
		'Ὁ' => 'ο', 'Ὅ' => 'ο', 'Ὃ' => 'ο', 'Ὀ' => 'ο', 'Ὄ' => 'ο', 'Ὂ' => 'ο', 'Ό' => 'ο', 'Ὸ' => 'ο',
		'Υ' => 'υ', 'Ὑ' => 'υ', 'Ὕ' => 'υ', 'Ὗ' => 'υ', 'Ὓ' => 'υ', 'Ϋ' => 'υ', 'Ύ' => 'υ', 'Ὺ' => 'υ',
		'Ὡ' => 'ω', 'Ὥ' => 'ω', 'Ὧ' => 'ω', 'Ὣ' => 'ω', 'Ὠ' => 'ω', 'Ὤ' => 'ω', 'Ὦ' => 'ω', 'Ὢ' => 'ω', 'Ώ' => 'ω', 'Ὼ' => 'ω',
		'Ῥ' => 'ρ',
		));

//	$out = preg_replace('/^([aeēiouō])h/', 'h\1', $out);

	return $out;
}
