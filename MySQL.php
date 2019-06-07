<?php
class MySQL extends PDO
{
    public $pdo;         //Variable de trabajo con libreria PDO
    public $ultimoError; //Registra el último error 
    public $numFilas;    //Numero de filas afectadas en la consulta
    public $conectado;   //Valida si hay o no conexion

    private $_consulta; //almacena la consulta SQL a ejecutar
    private $_errores;  //Guarda los errores que pudiera generarse

    /**
     * Constructor de la clase
     *
     * @param string $s  URL del servidor de datos
     * @param string $p  Puerto de conexion
     * @param string $bd Nombre de la base de datos
     * @param string $u  Nombre de usuario de conexión
     * @param string $c  Clave de usuario de conexión
     */
    public function __construct($s, $p, $bd, $u, $c)
    {
        /* Establecemos las opciones de conexion */
        $param = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );
        $strConn = "mysql:host=$s;port=$p;dbname=$bd;charset=utf8";
        try
        {
            $this->pdo = new PDO($strConn, $u, $c, $param);
            $this->conectado = true;
        } catch(PDOException $e) {
            $this->ultimoError = $e->getMessage();
            $this->conectado = false;
        }
    }

    /**
     * Ejecuta instrucciones SQL
     *
     * @param string $sql Bloque de instrucciones SQL
     * 
     * @return array Resultado de la ejecución de la instrucción SQL
     */
    public function execute($sql)
    {
        $resultado = array(); // Arreglo para almacenar los resultados
        if ($this->conectado) {
            $sth = $this->pdo->prepare($sql); // preparamos la consulta SQL
            try
            {
                $sth->execute(); // Ejecutamos la consulta
            } catch (PDOException $e) {
                $this->ultimoError = $e->getMessage(); //Obtenemos el mensaje de error 
            }
            $this->_errores = $sth->errorInfo(); // Capturamos los errores de ejecución
            $this->ultimoError = $this->_errores[2]; // Mostramos solo el error en texto
            $this->numFilas = $sth->rowCount(); // Contamos la cantidad de filas afectadas
        }
        return $resultado;
    }
}