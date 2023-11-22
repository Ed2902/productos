<?php

require_once ("conexion.php");
class Producto {
    private $id_producto;
    private $nombre;
    private $descripcion;
    private $marca;
    private $precioCompra;
    private $precioVenta;
    private $categoria;
    private $stock;
    const TABLA = 'productos';

    // Getters y Setters

    public function getIdProducto() {
        return $this->id_producto;
    }

    public function setIdProducto($id_producto) {
        $this->id_producto = $id_producto;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

    public function getPrecioCompra() {
        return $this->precioCompra;
    }

    public function setPrecioCompra($precioCompra) {
        $this->precioCompra = $precioCompra;
    }

    public function getPrecioVenta() {
        return $this->precioVenta;
    }

    public function setPrecioVenta($precioVenta) {
        $this->precioVenta = $precioVenta;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    public function getStock() {
        return $this->stock;
    }

    public function setStock($stock) {
        $this->stock = $stock;
    }


    // Constructor
    public function __construct($id_producto,$nombre,$descripcion,$marca,$precioCompra,$precioVenta,$categoria,$stock) {
        $this->id_producto = $id_producto;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;
        $this->marca = $marca;
        $this->precioCompra = $precioCompra;
        $this->precioVenta = $precioVenta;
        $this->categoria = $categoria;
        $this->stock = $stock;
    }

    public function guardar(){
        {
            $conexion = new Conexion();
            $consulta = $conexion->prepare('INSERT INTO ' .self::TABLA .'(id_producto, nombre, descripcion, marca, precioCompra, precioVenta, categoria, stock)
            VALUES (:id_producto, :nombre, :descripcion, :marca, :precioCompra, :precioVenta, :categoria, :stock)');
            $consulta -> bindParam(':id_producto', $this->id_producto);
            $consulta -> bindParam(':nombre', $this->nombre);
            $consulta -> bindParam(':descripcion', $this->descripcion);
            $consulta -> bindParam(':marca', $this->marca);
            $consulta -> bindParam(':precioCompra', $this->precioCompra);
            $consulta -> bindParam(':precioVenta', $this->precioVenta);
            $consulta -> bindParam(':categoria', $this->categoria);
            $consulta -> bindParam(':stock', $this->stock);
            $consulta -> execute();
            
        }
        $conexion = null;
    }

    public static function mostrar(){
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT id_producto, nombre, descripcion, marca, precioCompra, precioVenta, categoria, stock 
        FROM ' . self::TABLA . ' ORDER BY nombre');
        $consulta -> execute();
        $registros = $consulta->fetchAll();
        return $registros;

}



}
