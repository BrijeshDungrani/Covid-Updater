<script>
function displayCT() {

    $.ajax({
        url: "https://api.covid19india.org/csv/latest/state_wise.csv",
        dataType: "text",
        success: function(data) {

            
            var covid_data = data.split(/\r?\n|\r/);
            var table_data = '<table class="table table-bordered table-striped table3">';

            for (var count = 0; count < covid_data.length; count++) {
                var cell_data = covid_data[count].split(",");

                table_data += '<tr>';




                for (var cell_count = 0; cell_count < cell_data.length; cell_count++) {
                    if (cell_count <= 5) {
                        if (count === 0) {

                            table_data += '<th>' + cell_data[cell_count] + '</th>';

                        } else if (count != 1) {



                            var val = cell_data[cell_count];

                            var Dbstate = cell_data[0];
                            var Dbcnf = cell_data[1];
                            var Dbrec = cell_data[2];
                            var Dbdeath = cell_data[3];
                            var Dbact = cell_data[4];
                            var Dbdate = cell_data[5];
                            <?php include('connection.php');

                           

                            $sqlQuery =
                                "INSERT INTO ind_dashboard (`state`, `cnf`, `rec`, `death`, `act`, `date`) VALUES (`hhhh`, `$cnf`, `$rec`, `$death`, `$act`, `$date`)";
                            $result = mysqli_query($db, $sqlQuery);

                            if ($result)
                                echo " </br> The Hospital data added successfully  !  ";
                            else
                                echo " <br/> The Hospital data not added successfully  !  "; 
                                ?>



                           
                        }
                    }
                }
                table_data += '</tr>';
            }

            table_data += '</table>';

            //$('#covid_table').html(table_data);

        }
    });

  $.ajax({

     url : 'extra.php',
     type : 'POST',
     success : function (result) {
        console.log (result); // Here, you need to use response by PHP file.
     },
     error : function () {
        console.log ('error');
     }

   });
}

</script>
<body onload = "displayCT()"></body>
