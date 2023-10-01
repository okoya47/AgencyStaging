<?php
session_start();

class Testi extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        $data = [];
        $data['username'] = empty($_SESSION['USER']) ? 'User': $_SESSION['USER']['username'];
      
        $this->view('testi', $data);
    }

    public function submit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
            $_POST['userIdFrom'] = $_SESSION['USER']['id'];
            $_POST['transferedTo'] = "dummy";
            $_POST['transferedFrom'] = $_SESSION['USER']['username'];
            $_POST['Date'] = date('Y-m-d H:i:s');
            $_POST['Date'] = date('Y-m-d H:i:s');


            $transferData = new Transfers();

            // Insert the post into the database
            $insertSuccess = $transferData->insert($_POST);
        
            // Check if the update was successful
            if ($insertSuccess) {
                // Return a success response as JSON
                $response = [
                    'success' => true,
                    'message' => 'Transfer successful.'
                ];
            } else {
                // Return an error response as JSON
                $response = [
                    'success' => false,
                    'message' => 'Transfer failed.'
                ];
            }
            header('Content-Type: application/json');
            echo json_encode($response);
        }
    }

    public function getPreviousUpdates()
    {
        // Initialize your UserModel or the appropriate model for the updates
        $userModel = new Transfers();

        // Fetch previous updates from the database
        $previousUpdates = $userModel->findAll(); // Assuming findAll retrieves all previous updates

        // Check if updates were found
        if ($previousUpdates) {
            // Prepare the updates for JSON encoding
            $updatesData = [];

            foreach ($previousUpdates as $update) {
                $updatesData[] = [
                    'id' => $update['id'], // Replace with your actual column names
                    'transferedTo' => $update['transferedTo'],
                    'transferedFrom' => $update['transferedFrom'],
                    'Date' => $update['Date'],
                    'userIdTo' => $update['userIdTo'],
                    'amount' => $update['amount'],
                    'userIdFrom' => $update['userIdFrom'],
                ];
            }

            // Return the updates as JSON
            header('Content-Type: application/json');
            echo json_encode($updatesData);
        } else {
            // No updates found
            header('Content-Type: application/json');
            echo json_encode([]);
        }
    }
}

