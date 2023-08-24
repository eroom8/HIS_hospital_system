<!DOCTYPE html>
<html>
<head>
    <title>View Database Users</title>
    <!-- Include Bootstrap CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">View Database Users</h1>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hospital"; // Change this to your database name
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT name, patientEmail FROM register";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table class='table table-striped mt-3'>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td class='table-cell'>" . $row["name"] . "</td>
                        <td class='table-cell'>" . $row["patientEmail"] . "</td>
                      </tr>";
            }

            echo "</tbody></table>";
        } else {
            echo "No records found";
        }

        $conn->close();
        ?>
    </div>

    <div class="container mt-3">
        <a href="index.html" class="btn btn-primary">Back to Form</a>
    </div>

    <!-- Include Bootstrap JS from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
