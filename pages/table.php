
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Patient Information Table</title>
    <link rel="stylesheet" href="../Global/tablestyle.css">
    <link rel="stylesheet" href="..Global">
    <link rel="stylesheet" href="../Global/style.css">
    <link rel="stylesheet" href="../Global/print.css" media="print">
</head>

<body>


<?php include 'header.php'; ?>

    <div class="container">

        <table>
            <caption>Patient History</caption>

            <thead>
                <tr>
                    <th colspan="8" style="text-align:center; font-size: 25px;">Patient History</th>
                </tr>
                <tr>
                    <th>Name</th>
                    <th>Patient ID</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                    <th>Emergency Contact</th>
                    <th>EEG Results</th>
                    <th>Timestamp</th>
                    <th>Medication History</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Mariam Mohammed</td>
                    <td>6000</td>
                    <td>01/15/1980</td>
                    <td>Male</td>
                    <td>Emergency Contact Name</td>
                    <td>Negative</td>
                    <td>Treatment Plan 1</td>
                    <td>Schizophrania</td>
                </tr>
                <tr>
                    <td>Yaseen Loai</td>
                    <td>6001</td>
                    <td>05/20/2005</td>
                    <td>Male</td>
                    <td>Emergency Contact Name</td>
                    <td>Positive</td>
                    <td>Treatment Plan</td>
                    <td>Autism</td>
                </tr>

                <tr>
                    <td>Ali Salem</td>
                    <td>6002</td>
                    <td>05/20/2002</td>
                    <td>Male</td>
                    <td>Emergency Contact Name</td>
                    <td>Positive</td>
                    <td>Treatment Plan</td>
                    <td>ADHD</td>
                </tr>

                <tr>
                    <td>Arin Sami</td>
                    <td>6003</td>
                    <td>05/20/2003</td>
                    <td>Female</td>
                    <td>Emergency Contact Name</td>
                    <td>Negative</td>
                    <td>Treatment Plan</td>
                    <td>Autism</td>
                </tr>

                <tr>
                    <td>Lina Saud</td>
                    <td>6004</td>
                    <td>05/20/1950</td>
                    <td>Female</td>
                    <td>Emergency Contact Name</td>
                    <td>Neutral</td>
                    <td>Treatment Plan</td>
                    <td>Schizophrania</td>
                </tr>

                <tr>
                    <td>Yaseen Loai</td>
                    <td>6005</td>
                    <td>05/20/2007</td>
                    <td>Male</td>
                    <td>Emergency Contact Name</td>
                    <td>Negative</td>
                    <td>Treatment Plan</td>
                    <td>ADHD</td>
                </tr>

            </tbody>
        </table>
        <?php include 'footer.php'; ?>
    </div>


   
</body>

</html>


