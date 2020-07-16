<script>
function displayCoronaTable(){
    
    $.ajax({
     url:"https://api.covid19india.org/csv/latest/state_wise.csv",
     dataType:"text",
     success:function(data)
     {
      var covid_data = data.split(/\r?\n|\r/);
      var table_data = '<table class="table table-bordered table-striped table3">';
      
      for(var count = 0; count<covid_data.length; count++)
      {
       var cell_data = covid_data[count].split(",");
      
       table_data += '<tr>';
       

       
       
       for(var cell_count=0; cell_count<cell_data.length; cell_count++)
       {
          if(cell_count <= 5 )
          {
        if(count === 0)
        {
            
         table_data += '<th>'+cell_data[cell_count]+'</th>';
            
        }
        else if(count != 1)
        {

            <?php include('connection.php');

            $state=cell_data[0];
            $cnf=cell_data[1];
            $rec=cell_data[2];
            $death=cell_data[3];
            $act=cell_data[4];
            $date=cell_data[5];

             $sqlQuery="INSERT INTO ind_dashboard (`state`, `cnf`, `rec`, `death`, `act`, `date`) VALUES (`$state`, `$cnf`, `$rec`, `$death`, `$act`, `$date`)";
             $result=mysqli_query($db,$sqlQuery);  

            if($result)
			echo " </br> The Hospital data added successfully  !  ";
		    else
			echo " <br/> The Hospital data not added successfully  !  ";
            ?>

             var val = cell_data[cell_count];

            if(val.length <= 45 && val != '"')
            {
                table_data += '<td>'+cell_data[cell_count]+'</td>';
            }
        }
      }
       }
       table_data += '</tr>';
      }

      table_data += '</table>';
     
      //$('#covid_table').html(table_data);

     }
    });
   
   
  }

displayCoronaTable();
</script>