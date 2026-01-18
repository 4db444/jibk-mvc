<?php
    namespace App\Core;

    class Model {
        protected static $connection;
        protected static string $table;

        public static function Connect ($connection){
            self::$connection = $connection;
        }

        public static function Find(int $id) {
            $find_statement = self::$connection->prepare("
                SELECT * FROM " . static::$table . "
                WHERE id = :id
            ");

            $find_statement->execute([
                ":id" => $id
            ]);

            $data = $find_statement->fetch(PDO::FETCH_ASSOC);

            return $data ? self::objectFromArray($data) : NULL;
        }

        public function save () {
            $fields = get_object_vars($this);
            $columns = array_keys($fields);

            if (isset($this->id)){
                $query = "
                    UPDATE " . static::$table . "
                    SET " . implode(", ", array_map(fn($col) => "$col = :$col", $columns)) . "
                    WHERE id = :id
                ";
            }else {
                $query = "
                    INSERT INTO " . static::$table . "(" . implode(", ", $columns) . ")" . " 
                    VALUES (" . implode(", ", array_map(fn($col) => ":$col", $columns)) . ")
                ";
            }

            $statement = self::$connection->prepare($query);
            $statement->execute($fields);
        }

        private static function objectFromArray(array $data) {
            $object = new static();

            foreach($data as $key => $value){
                $object->$key = $value;
            }

            return $object;
        }
    }