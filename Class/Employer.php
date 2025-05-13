<?php
    class Employer{
        public string $nom;
        public string $prenom;
        public int $age;

        public function __construct(string $nom, string $prenom, int $age) {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->age = $age;
        }

        public function pesentation(){
            echo '<pre>';
                print_r(" bonjour je suis <b>{$this->nom} {$this->nom}</b> et j'ai <b>{$this->age}</b> ans");
            echo '<pre>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>