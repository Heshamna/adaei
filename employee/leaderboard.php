<?php include("e_header.php"); ?>

<style>

* {
  font-family: sans-serif; 
  width: center;
  margin: center;
  text-align: center;

}

.colorT{
 color: green;
}

.content-table {
  border-collapse: collapse;
  margin: 10px 435px;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}


     </style>

    <h1 class="colorT">لائحة المتصدرين</h1> 
    <table class="content-table ">
        <thead>

        <tr> 
            <th> المركز</th> 
            <th> الاسم</th> 
            <th> النقاط</th> 
        </tr> 

        </thead>


        <?php 

        $con = mysqli_connect("localhost", "root", "", "ada"); 
        
        $result = mysqli_query($con, "SELECT full_name, 
        point FROM employee ORDER BY point DESC "); 
        
        $ranking = 1; 
        
        echo "<br>";
        if (mysqli_num_rows($result)) { 
            while ($row = mysqli_fetch_array($result)) { 
                echo "<tbody><tr>
                <td>{$ranking}</td> 
                <td>{$row['full_name']}</td> 
                <td>{$row['point']}</td>
                </tr></tbody>"; 
                $ranking++; 
            } 
        } 
        ?> 
    </table>
    
  <?php include("../footer.php"); ?>
