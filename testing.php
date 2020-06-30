<?php include_once('header.html') ?>
<!DOCTYPE html>
<html>
 <head>
  <title>CSV File to HTML Table Using AJAX jQuery</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body onload = "">
  <div class="container">
   <div class="table-responsive">
    <h1 align="center">Covid-19 Dashboard</h1>
    <br />
    <div align="center">
     
    </div>
    <br />
    <div id="covid_table">
    </div>
    <div id="covid_case">
    </div>
   </div>
  </div>
 </body>
</html>

<script>
    
function displayCoronaTable(){
    
    $.ajax({
     url:"https://api.covid19india.org/csv/latest/state_wise.csv",
     dataType:"text",
     success:function(data)
     {
      var covid_data = data.split(/\r?\n|\r/);
      var table_data = '<table class="table table-bordered table-striped table1">';
      var IndConf = covid_data[1].split(",")[1];
       var IndRec = covid_data[1].split(",")[2];
       var IndDeaths = covid_data[1].split(",")[3];
       var IndActive = covid_data[1].split(",")[4];
      for(var count = 0; count<covid_data.length; count++)
      {
       var cell_data = covid_data[count].split(",");
      
       table_data += '<tr>';
       
       for(var cell_count=0; cell_count<cell_data.length; cell_count++)
       {
          if(cell_count <= 5)
          {
        if(count === 0)
        {
            
         table_data += '<th>'+cell_data[cell_count]+'</th>';
            
        }
        else
        {
         table_data += '<td>'+cell_data[cell_count]+'</td>';
        }
      }
       }
       table_data += '</tr>';
      }
      table_data += '</tr>  <tr> <td>'+IndConf+'</td> </tr>';
      table_data += '</table>';
      cnfm = '<h1>'+IndConf+'</h1>'
      $('#covid_table').html(table_data);
      $('#covid_case').html(cnfm);
     }
    });
   
   
  
  }

  


window.onload = function(){
    displayCoronaTable();

    document.getElementById('covid_case').innerHTML = "IndConf";
};




</script>