<?php

require_once('../../../../inc/config/initialize.php');
//session_start(); // Start session to store errors

$session = $session ?? null;
$id = $_GET['id'] ?? null;
$className = $_GET['class_name'] ?? 'Employee';
$isEdit = !empty($id);

$redirect_url = $isEdit ? "edit.php?id=" . urlencode($id) : "new.php";


if (request_is_post() && request_is_same_domain()) {

    if (!csrf_token_is_valid() || !csrf_token_is_recent()) {
        $message = "Sorry, request was not valid.";
        $session->message("Sorry, request was not valid.", false);
        redirect_to($redirect_url);
    } else {

        if (isset($_POST['submit'])) {

// Collect data from POST request and trim values
            $name = trim($_POST['name'] ?? '');
            $position = trim($_POST['position'] ?? '');
            $office = trim($_POST['office'] ?? '');
            $age = trim($_POST['age'] ?? '');
            $start_date = trim($_POST['start_date'] ?? '');
            $salary = trim($_POST['salary'] ?? '');


            $errors = [];

// Validate required fields
            if (empty($name)) {
                $errors['name'] = "Name is required.";
            }
            if (empty($position)) {
                $errors['position'] = "Position is required.";
            }
            if (empty($office)) {
                $errors['office'] = "Office is required.";
            }
            if (empty($age) || !is_numeric($age) || $age <= 0) {
                $errors['age'] = "Age must be a positive number.";
            }
            if (empty($start_date) || !preg_match('/^\d{4}-\d{2}-\d{2}$/', $start_date)) {
                $errors['start_date'] = "Start Date must be in YYYY-MM-DD format.";
            }
            if (empty($salary) || !is_numeric($salary) || $salary <= 0) {
                $errors['salary'] = "Salary must be a positive number.";
            }

            // Redirect back if there are errors
            if (!empty($errors)) {
                $session->errors($errors);
                $session->post_data($_POST);
//                $redirect_url = $isEdit ? "edit.php?id=" . urlencode($id) : "new.php";
                $session->message("Please fix the errors:");
                redirect_to($redirect_url);
            }

            if ($isEdit) {
                // Update existing employee
                $employee = Employee::find_by_id($id);
                if ($employee) {
                    $employee->name = $name;
                    $employee->position = $position;
                    $employee->office = $office;
                    $employee->age = $age;
                    $employee->start_date = $start_date;
                    $employee->salary = $salary;
//                    $employee->save();
                    if (!$employee->save()) {
                        $session->message("Employee id $id was not updated successfully.", false);
                        redirect_to($redirect_url);
                    }else{
                        $session->message("Employee id $id updated successfully.", true);
                        redirect_to("index.php");
                    }
                } else {
                    $session->message("Employee $id not found.");
                    redirect_to($redirect_url);
                }
            } else {
                // Add new employee
                $employee = new Employee();
                $employee->name = $name;
                $employee->position = $position;
                $employee->office = $office;
                $employee->age = $age;
                $employee->start_date = $start_date;
                $employee->salary = $salary;
                if (!$employee->save()) {
                    $session->message("Employee was not added successfully.", false);
                    redirect_to($redirect_url);
                }else{
                    $session->message("New Employee added successfully.", true);
                    redirect_to("index.php");
                }
//                $employee->save();
            }

        } else {
            $session->message("Sorry, No submission", false);
            redirect_to($redirect_url);
        }//end of isset($_POST['submit'])

    } // end of csrf_token_is_valid() && csrf_token_is_recent()

} else {
    $session->message("Sorry, request was not valid.", false);
    redirect_to($redirect_url);
}//end of request_is_post() && request_is_same_domain()


// Redirect to the main employee list page on success
//$_SESSION['success'] = $isEdit ? "Employee updated successfully." : "Employee added successfully.";
//$session->message($isEdit ? "Employee $id updated successfully." : "New Employee added successfully.", true);
//$session->ok(true);
//redirect_to("index.php");



