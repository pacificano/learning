<!DOCTYPE html>
<html>
	<head>
	  <title>Reconstructing the Person Class</title>
	</head>
	<body>

    <!-- PHP -->
    <h2>PHP Constructor</h2>
      <p>
        <?php
            class Person {
                public $isAlive = true;
                public $firstname;
                public $lastname;
                public $age;
                
                public function __construct($firstname, $lastname, $age) {
                    $this->firstname = $firstname;
                    $this->lastname = $lastname;
                    $this->age = $age;
                }
            }
            
            $teacher = new Person('boring', '12345', 12345);
            $student = new Person();
            
            echo $teacher->isAlive;
            
            echo $teacher->age;
            
        ?>
      </p>

    <!-- Javascript -->
    <h2>Javascript Constructor</h2>
    <p id="jsP">
        <script type="text/javascript">
            function Person(firstname, lastname, age){
                this.firstname = firstname;
                this.lastname = lastname;
                this.age = age;
            }

            var teacher = new Person('not_boring', '54321', 54321);
            var jsP = document.getElementById('jsP');
            jsP.innerHTML = teacher.age;
        </script>
    </p>

    </body>
</html>