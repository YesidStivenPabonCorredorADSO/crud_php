<?php
require __DIR__ .('/persona.php');
class Aprendiz extends Persona
{
  protected $db;
  protected $conection;
  public function __construct()
  {
    parent::__construct();
  }
}