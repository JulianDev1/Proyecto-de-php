<?php
require_once 'db.php';

class UserModel
{

    private $id;
    private $nombre;
    private $correo;
    private $contraseña;

    //conexion a la base de datos
    private $db;
    public function __construct()
    {
        $this->db = DataBase::connect();
    }

    // Getter y Setter para id
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $this->db->real_escape_string($id);
    }

    // Getter y Setter para nombre
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    // Getter y Setter para correo
    public function getCorreo()
    {
        return $this->correo;
    }

    public function setCorreo($correo)
    {
        $this->correo = $this->db->real_escape_string($correo);
    }

    // Getter y Setter para contraseña
    public function getContraseña()
    {
        return $this->contraseña;
    }
    public function setContraseña($contraseña)
    {
        $this->contraseña = $this->db->real_escape_string($contraseña);
    }

    public function registrarUsuario()
    {
        $contraseña = password_hash($this->getContraseña(), PASSWORD_BCRYPT);

        $sql = "INSERT INTO usuarios (email, contraseña, nombre) VALUES 
        ( '{$this->getCorreo()}', '{$contraseña}', '{$this->getNombre()}');";

        // Validar si el usuario ya existe antes de registrarlo
        $sqllogin = "SELECT * FROM usuarios WHERE email = '{$this->getCorreo()}'";
        $login = $this->db->query($sqllogin);
        if ($login->num_rows > 0) {
            // El usuario ya existe, no se puede registrar
            return false;
        }
        $guardar = $this->db->query($sql);
        $result = false;

        if ($guardar) {
            $result = true;
        }
        return $result;
    }

    public function LoguearUsuario() {

        $sql = "SELECT * FROM usuarios WHERE email = '{$this->getCorreo()}'";
        $login = $this->db->query($sql);
        if($login && $login->num_rows > 0 ){
            $contraseña = $login->fetch_object()->contraseña;
            $verify = password_verify($this->getContraseña(), $contraseña);
            if($verify){
                return true;
            }
        }
        return false;
    }
}