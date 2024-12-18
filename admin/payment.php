<!-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .payment-details {
  /* width: 100%; */
  border-collapse: collapse;
  /* border: 1px solid black; */
}

.payment-details th {
  text-align: left;
  padding: 10px;
  /* background-color: #eee; */
  font-weight: bold;
}


    </style>
</head>
  <body>
  <table class="payment-details">
  <tr>
    <th>Payment ID</th>
    <td><p id="payment-id"></p></td>
  </tr>
  <tr>
    <th>Customer Name</th>
    <td><p id="customer-name"></p></td>
  </tr>
  <tr>
    <th>Amount Paid</th>
    <td><p id="amount-paid"></p></td>
  </tr>
  <tr>
    <th>Payment Date</th>
    <td><p id="payment-date"></p></td>
  </tr>
</table>
    <script>
       const paymentDetails = [
  {
    id: 123456789,
    customerName: "John Doe",
    amountPaid: 100,
    paymentDate: "2023-09-28"
  },
  {
    id: 987654321,
    customerName: "Jane Doe",
    amountPaid: 50,
    paymentDate: "2023-09-27"
  }
];

// Get the table element
const table = document.querySelector(".payment-details");

// Populate the table with the payment details
paymentDetails.forEach((paymentDetail) => {
  const row = document.createElement("tr");

  const idCell = document.createElement("td");
  idCell.textContent = paymentDetail.id;
  row.appendChild(idCell);

  const customerNameCell = document.createElement("td");
  customerNameCell.textContent = paymentDetail.customerName;
  row.appendChild(customerNameCell);

  const amountPaidCell = document.createElement("td");
  amountPaidCell.textContent = paymentDetail.amountPaid;
  row.appendChild(amountPaidCell);

  const paymentDateCell = document.createElement("td");
  paymentDateCell.textContent = paymentDetail.paymentDate;
  row.appendChild(paymentDateCell);

  table.appendChild(row);
});


    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html> -->

<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
  margin: 1px;
  padding: 1px;
}
table{
    margin: 2rem;
    padding: 2rem;
}
</style>
<body>

  
  <table style="width:100%">
  <h3 style="text-align:center; margin: 2px;">Payment Details of All Client</h3>
  <tr>
  <th>Payment Id</th>
  <th>Customer Name</th>
  <th>Amount Paid</th>
  <th>Payment Date</th>
</tr>
<tr>
  <td>123456789</td>
  <td>Rajesh Kumar</td>
  <td>1000 INR</td>
  <td>2023-09-28</td>
</tr>
<tr>
  <td>987654321</td>
  <td>Priya Sharma</td>
  <td>500 INR</td>
  <td>2023-09-27</td>
</tr>
<tr>
  <td>345678912</td>
  <td>Rahul Singh</td>
  <td>2000 INR</td>
  <td>2023-09-26</td>
</tr>
<tr>
  <td>789345612</td>
  <td>Aisha Khan</td>
  <td>1500 INR</td>
  <td>2023-09-25</td>
</tr>
<tr>
  <td>234567891</td>
  <td>Vikas Gupta</td>
  <td>2500 INR</td>
  <td>2023-09-24</td>
</tr>
<tr>
  <td>456789123</td>
  <td>Neha Patel</td>
  <td>1000 INR</td>
  <td>2023-09-23</td>
</tr>
<tr>
  <td>567891234</td>
  <td>Amit Shah</td>
  <td>1500 INR</td>
  <td>2023-09-22</td>
</tr>
<tr>
  <td>678912345</td>
  <td>Sonal Desai</td>
  <td>2000 INR</td>
  <td>2023-09-21</td>
</tr>
<tr>
  <td>789123456</td>
  <td>Jatin Patel</td>
  <td>2500 INR</td>
  <td>2023-09-20</td>
</tr>
<tr>
  <td>891234567</td>
  <td>Kiran Patel</td>
  <td>1000 INR</td>
  <td>2023-09-19</td>

</table>


</body>
</html>