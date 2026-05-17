<?php
define("INSERT_TIPODOC",
    "INSERT INTO tipo_documento(nombre_largo, nombre_corto) VALUES (?,?);");

define("UPDATE_TIPODOC",
    "UPDATE tipo_documento SET nombre_largo=?, nombre_corto=? WHERE id=?;");