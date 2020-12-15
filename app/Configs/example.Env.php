<?php

namespace Configs;

class Env // Tempat menaruh data yang credential
{
  // ::: parameter database ::: //
  // host database anda
  public static $DB_HOST = 'localhost';

  // username database anda
  public static $DB_USERNAME = 'root';

  // password database anda
  public static $DB_PASSWORD = '';

  // nama database anda
  public static $DB_NAME = 'MyDatabase';

  // port database anda
  public static $DB_PORT = '3306';

  // ::: parameter website ::: //
  // url website
  public static $URLROOT = 'http://localhost/pwl';
}
