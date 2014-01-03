<?php
namespace Library;

class Security
{

	/* Value Salt */
	private static $salt 	= "asdfa**745785@295230484s7dfg98s5fg4s21648912@";
	
	/* Value Put */
	private static $put  	= "4879216574986541674984654987";
	
	/* Value SaltPut */
	private static $saltPut = "Jksjhhadsi5898rt#fasd";
	
	/* Value Part */
	private static $part 	= ":";
	
	/* Define se a senha vai ser Hexadecimal */
	private static $hex     = false;

	/**
	 *  Método responsável determinar o tipo de Cripgrafia
	 *  @Author Team Dev Harmony
	 *  @method typeCript
	 *  @param  string $type Tipo de Criptografia
	 */
	private static function typeCript($type = 'md5'){


	    if ($type == 'md2'){
	        return 'md2';
	    }
    
	    if ($type == 'md4'){
	        return 'md4';
	    }
    
	    if ($type == 'md5'){
	        return 'md5';
	    }
    
	    if ($type == 'sha1'){
	        return 'sha1';
	    }
    
	    if ($type == 'sha256'){
	        return 'sha256';
	    }
    
	    if ($type == 'sha384'){
	        return 'sha384';
	    }
    
	    if ($type == 'sha512'){
	        return 'sha512';
	    }
    
	    if ($type == 'ripemd128'){
	        return 'ripemd128';
	    }
    
	    if ($type == 'ripemd256'){
	        return 'ripemd256';
	    }
    
	    if ($type == 'ripemd320'){
	        return 'ripemd320';
	    }
    
	    if ($type == 'whirlpool'){
	        return 'whirlpool';
	    }
    
	    if ($type == 'tiger128,3'){
	        return 'tiger128,3';
	    }
    
	    if ($type == 'tiger160,3'){
	        return 'tiger160,3';
	    }
    
	    if ($type == 'tiger192,3'){
	        return 'tiger192,3';
	    }
    
	    if ($type == 'tiger128,4'){
	        return 'tiger128,4';
	    }
    
	    if ($type == 'tiger160,4'){
	        return 'tiger160,4';
	    }
    
	    if ($type == 'tiger192,4'){
	        return 'tiger192,4';
	    }
    
	    if ($type == 'snefru'){
	        return 'snefru';
	    }
    
	    if ($type == 'gost'){
	        return 'gost';
	    }
    
	    if ($type == 'adler32'){
	        return 'adler32';
	    }
    
	    if ($type == 'crc32'){
	        return 'crc32';
	    }
    
	    if ($type == 'crc32b'){
	        return 'crc32b';
	    }
    
	    if ($type == 'haval128,3'){
	        return 'haval128,3';
	    }
    
	    if ($type == 'haval160,3'){
	        return 'haval160,3';
	    }
    
	    if ($type == 'haval192,3'){
	        return 'haval192,3';
	    }
    
	    if ($type == 'haval224,3'){
	        return 'haval224,3';
	    }
    
	    if ($type == 'haval256,3'){
	        return 'haval256,3';
	    }
    
	    if ($type == 'haval128,4'){
	        return 'haval128,4';
	    }
    
	    if ($type == 'haval160,4'){
	        return 'haval160,4';
	    }
    
	    if ($type == 'haval224,4'){
	        return 'haval224,4';
	    }
    
	    if ($type == 'haval256,4'){
	        return 'haval256,4';
	    }
    
	    if ($type == 'haval128,5'){
	        return 'haval128,5';
	    }
    
	    if ($type == 'haval160,5'){
	        return 'haval160,5';
	    }
    
	    if ($type == 'haval192,5'){
	        return 'haval192,5';
	    }
    
	    if ($type == 'haval224,5'){
	        return 'haval224,5';
	    }
    
	    if ($type == 'haval256,5'){
	        return 'haval256,5';
	    }
			
		return false;
	}

	/**
	 *  Método responsável determinar o tipo de Cripgrafia
	 *  @Author Team Dev Harmony
	 *  @method hash
	 *  @param  string $value   Valor a ser cripgrafado
	          *  string $saltPut
			  *  string $type    MD5 OR SHA1
	 */
	public static function hash($value, $saltPut = "", $type = 'md5'){
		if (empty($value))
			return false;
		
		/* Captura o Salt */
		$saltPut = !empty($saltPut) ? $saltPut : static::$saltPut;
		
		/* Verifica se o tipo de criptografia está disponível */
		$typeCript = static::typeCript($type);
		
		if ( ! $typeCript){
			return false;
		}
		
		/* Faz a criptografia */
		$value = hash($typeCript, $value . static::$salt, static::$hex) . static::$part . md5(static::$put . $saltPut);
		
		return $value;
	}
}
