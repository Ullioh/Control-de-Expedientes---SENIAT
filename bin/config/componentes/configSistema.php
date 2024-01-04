<?php 

	namespace config\componentes;

	define("_URL_", "http://localhost/practica/");
	define("_BD_", "bd_expedientes");
	define("_PASS_", "");
	define("_USER_", "root");
	define("_LOCAL_", "localhost");
	define("DIRECTORY_CONTROL", "bin/controlador/");
	define("DIRECTORY_MODEL", "bin/modelo/");
	define("DIRECTORY_VISTA", "vista/");
	define("MODEL", "Modelo.php");
	define("CONTROLADOR", "Controlador.php");
	define("VISTA", "Vista.php");


	class configSistema{
		public function _int(){
			if(!file_exists("bin/controlador/frontControlador.php")){
				return "Error configSistema";
			}
		}

		public function _URL_(){
			return _URL_;
		}
		public function _BD_(){
			return _BD_;
		}
		public function _PASS_(){
			return _PASS_;
		}
		public function _USER_(){
			return _USER_;
		}
		public function _LOCAL_(){
			return _LOCAL_;
		}
		public function _Dir_Control_(){
			return DIRECTORY_CONTROL; 
		}
		public function _Dir_Model_(){
			return DIRECTORY_MODEL; 
		}
		public function _Dir_Vista_(){
			return DIRECTORY_VISTA; 
		}
		public function _MODEL_(){
			return MODEL;
		}
		public function _Control_(){
			return CONTROLADOR;
		}
		public function _VISTA_(){
			return VISTA;
		}

		public static function Seguridad($string, $accion = null)
		{
			// Advanced Encryption Standard cipher-block chaining
			$metodo        = "AES-256-CBC"; //El método de cifrado //clave simétrica de 256 bits
			$llave = openssl_digest("key", 'whirlpool', true); //genera un hash usando el método dado y devuelve codificada (512 bits)
			$iv    = substr(hash("whirlpool", $llave), 0, 16); // ciframos el vector de inicialización y acortamos con substr a 16

			if ($accion == 'codificar') {
				$salida = openssl_encrypt($string, $metodo, $llave, 0, $iv); // ciframos la direccion obtenida con el metodo openssl_encrypt
				$salida = base64_encode($salida); // ciframos la salida en bs64
			} else if ($accion == 'decodificar') {
				$string = base64_decode($string);
				$salida = openssl_decrypt($string, $metodo, $llave, 0, $iv);
			}
			return $salida;
			unset($metodo,$llave,$iv,$accion,$sting,$salida);
		}

		public static function _INICIO_() {
			return self::Seguridad('Login', 'codificar');
		}

		public static function _SALIR_() {
			echo self::Seguridad('Login', 'codificar');
		}

		public static function _BEX_() {
			echo self::Seguridad('BitacoraExpedientes', 'codificar');
		}
		
		public static function _CONTACT_() {
			echo self::Seguridad('Contactos', 'codificar');
		}

		public static function _ERROR_() {
			echo self::Seguridad('Error404', 'codificar');
		}
		
		public static function _PERFIL_() {
			echo self::Seguridad('Perfil', 'codificar');
		}
		
		public static function _PRINCIPAL_() {
			echo self::Seguridad('Principal', 'codificar');
		}
		
		public static function _REA_() {
			echo self::Seguridad('RegistroExpedienteArchivo', 'codificar');
		}
		
		public static function _REF_() {
			echo self::Seguridad('RegistroExpediente', 'codificar');
		}
		
		public static function _REL_() {
			echo self::Seguridad('RegistroExpedienteliquidacion', 'codificar');
		}
		
		public static function _RES_() {
			echo self::Seguridad('RegistroExpedienteSumario', 'codificar');
		}

		public static function _REPORTE_() {
			echo self::Seguridad('ReporteExpediente', 'codificar');
		}

		public static function _TU_() {
			echo self::Seguridad('TablaUsuario', 'codificar');
		}

	}

 ?>