 10 . Develop a PHP program that illustrates the concept of classes and objects by reading and printing employee data, including Emp_Name, Emp_ID, Emp_Dept, Emp_Salary, and Emp_DOJ. 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Data</title>
</head>
<body>
    <h1>Employee Data</h1>

    <!-- Form to input employee data -->
    <form method="post">
        <label for="emp_name">Employee Name:</label><br>
        <input type="text" id="emp_name" name="emp_name"><br><br>
        <label for="emp_id">Employee ID:</label><br>
        <input type="text" id="emp_id" name="emp_id"><br><br>
        <label for="emp_dept">Employee Department:</label><br>
        <input type="text" id="emp_dept" name="emp_dept"><br><br>
        <label for="emp_salary">Employee Salary:</label><br>
        <input type="text" id="emp_salary" name="emp_salary"><br><br>
        <label for="emp_doj">Date of Joining:</label><br>
        <input type="date" id="emp_doj" name="emp_doj"><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>

    <?php
    // Define Employee class
    class Employee {
        public $name;
        public $id;
        public $dept;
        public $salary;
        public $doj;

        // Constructor to initialize employee data
        public function __construct($name, $id, $dept, $salary, $doj) {
            $this->name = $name;
            $this->id = $id;
            $this->dept = $dept;
            $this->salary = $salary;
            $this->doj = $doj;
        }

        // Method to display employee data
        public function displayData() {
            echo "<h2>Employee Details</h2>";
            echo "<p>Name: $this->name</p>";
            echo "<p>ID: $this->id</p>";
            echo "<p>Department: $this->dept</p>";
            echo "<p>Salary: $this->salary</p>";
            echo "<p>Date of Joining: $this->doj</p>";
        }
    }

    // Check if form is submitted
    if (isset($_POST['submit'])) {
        // Retrieve input data from form
        $name = $_POST['emp_name'];
        $id = $_POST['emp_id'];
        $dept = $_POST['emp_dept'];
        $salary = $_POST['emp_salary'];
        $doj = $_POST['emp_doj'];

        // Create an instance of Employee class
        $employee = new Employee($name, $id, $dept, $salary, $doj);

        // Display employee data
        $employee->displayData();
    }
    ?>
</body>
</html>
Output:
