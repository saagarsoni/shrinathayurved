<?php
  // Get the form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $country = $_POST['country'];

  // Create a table of the data
  $table = '<table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Country</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>' . $name . '</td>
        <td>' . $email . '</td>
        <td>' . $phone . '</td>
        <td>' . $country . '</td>
      </tr>
    </tbody>
  </table>';

  // Print the table to the browser
  echo $table;

  // Print the table to a PDF file
//   $pdf = new FPDF();
//   $pdf->AddPage();
//   $pdf->SetFont('Arial', '', 12);
//   $pdf->Write($table);
//   $pdf->Output('data.pdf', 'F');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My Web Page</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
  <h1>My Web Page</h1>
  <form action="testPage.php" method="post">
    <input type="text" name="name">
    <input type="text" name="email">
    <input type="text" name="phone">
    <select name="country">
      <option value="india">India</option>
      <option value="usa">USA</option>
      <option value="china">China</option>
    </select>
    <input type="submit" value="Submit">
  </form>
</body>
</html>