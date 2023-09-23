<?php 
    /*
        user: name, email, password - methods: login()
        employee: title
    */
    class User {
        private string $email;
        private string $name;
        private string $password;

        //Constructor
        public function __construct($name, $email, $password){
            $this->email = $email;
            $this->name = $name;
            $this-> password = $password;
        }

        //Get And Set method
        public function setEmail($email) {$this->email = $email;}
        
        public function getEmail(){
            return $this->email;
        }

        public function setName($name) {$this->name = $name;}
        
        public function getName(){
            return $this->name;
        }
        
        public function setPassword($password) {$this->password = $password;}
        
        public function getPassword(){
            return $this->password;
        }

        public function login() {
            echo "Username: {$this->name} is logged";
        }

        public function __toString(){
            return "{$this->name} - {$this->email} - {$this->password}";
        }

        public function __destruct(){
            echo "The username destroyed is {$this->name}";
        }
    }

    class Employee extends User {
        private $title;

        public function __construct($name, $email, $password, $title){
            parent::__construct($name, $email, $password);
            $this->title = $title;
        }

        public function login(){
            $employName = $this->getName();
            echo "Employee: {$employName} is logged";
        }

        public function __toString() {
            $name = $this->getName();
            $email = $this->getEmail();
            $password = $this->getPassword();

            return "{$name} - {$email} - {$password} - {$this->title}";
        }

        public function __destruct(){
            $employName = $this->getName();
            echo "Employee {$employName} - {$this->title} is destroyed";
        }
    }

    $user = new User("john", "john@gmail.com", "test");
    echo $user->login() . "\n";
    echo $user->getEmail() . "\n";
    echo $user->__toString() . "\n";

    $employee = new Employee("david", "david@gmail.com", "test", "manager");
    echo $employee->login() . "\n";
    echo $employee->__toString() . "\n";
?>