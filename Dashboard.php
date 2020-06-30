<!DOCTYPE html>
<html>
<?php include('displayhc.php'); ?>
<?php include_once('header.html') ?>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Dashboard</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

</head>
<script>
$.ajax({
    url: "https://api.covid19india.org/csv/latest/state_wise.csv",
    dataType: "text",
    success: function(data) {
        var covid_data = data.split(/\r?\n|\r/);
        var table_data = '<table class="table table-bordered table-striped table1">';
        var IndConf = covid_data[1].split(",")[1];
        var IndRec = covid_data[1].split(",")[2];
        var IndDeaths = covid_data[1].split(",")[3];
        var IndActive = covid_data[1].split(",")[4];
        var DelConf = covid_data[2].split(",")[1];


        cnfm = '<h1>' + IndConf + '</h1>'
        hIndRec = '<h1>' + IndRec + '</h1>'
        hIndDeaths = '<h1>' + IndDeaths + '</h1>'
        hIndActive = '<h1>' + IndActive + '</h1>'

        hDelConf = '<h1>' + DelConf + '</h1>'
        //$('#covid_table').html(table_data);
        $('#IndConf').html(cnfm);
        $('#IndRec').html(hIndRec);
        $('#IndActive').html(hIndActive);
        $('#IndDeaths').html(hIndDeaths);
        $('#DelConf').html(hDelConf);








    }
});

   
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
          if(cell_count <= 5 )
          {
        if(count === 0)
        {
            
         table_data += '<th>'+cell_data[cell_count]+'</th>';
            
        }
        else
        {
             var val = cell_data[cell_count];
            if(val.length <= 45)
            {
                if(val == "Delhi")
                {
                    var DelhiCase = cell_data[1] + "-" +cell_data[2]+"-"+cell_data[3]+"-"+cell_data[4];
                    var DelhiCase = DelhiCase.split("-");
                }
                
                table_data += '<td>'+cell_data[cell_count]+'</td>';
            }
        }
      }
       }
       table_data += '</tr>';
      }

      table_data += '</table>';
      abc = '<h1>'+DelhiCase[2]+'</h1>'
      $('#covid_table').html(table_data);
      document.getElementById("DelConf").innerHTML = DelhiCase[0];
      document.getElementById("DelRec").innerHTML = DelhiCase[1];
      document.getElementById("DelDeaths").innerHTML = DelhiCase[2];
      document.getElementById("DelActive").innerHTML = DelhiCase[3];
     }
    });
   
   
  
  }

  


window.onload = function(){
    displayCoronaTable();

    document.getElementById('covid_case').innerHTML = "IndConf";
};

</script>

<body>


    <div class=" cardrow">
        <div class="cardTitle">
            <h2>Delhi Covid-19</h2>
        </div>
        <div class="row">
            <div class="card" id="Totalcard" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title">Confirmed</h5>
                    <p class="card-text" id="DelConf"></p>

                </div>
            </div>
            <div class="card" id="Activecard" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Active </h5>
                    <p class="card-text" id="DelActive"><script></script></p>
                </div>
            </div>
            <div class="card" id="Recoverycard" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Recovered</h5>
                    <p class="card-text" id="DelRec"></p>
                </div>
            </div>
            <div class="card" id="deathcard" style="width: 18rem">
                <div class="card-body">
                    <h5 class="card-title">Death</h5>
                    <p class="card-text" id="DelDeaths"></p>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="row">
        <div class="container col-xl-6" id="covid19bedcard">
            <a href="BedsDetail.php">
                <h3 style="padding-left: 20px; color: blue;">Covid-19 Beds (Delhi)</h3>
            </a>
            <br>
            <div class="row">
                <div class="card" id="totalBed" style="width: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title">Total</h5>
                        <p class="card-text"><?php echo $Totbed; ?></p>
                    </div>
                </div>
                <div class="card" id="OccupiedBed" style="width: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title">Occupied</h5>
                        <p class="card-text"><?php echo $CurrOccBed; ?></p>
                    </div>
                </div>
                <div class="card" id="VacantBed" style="width: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title">Vacant</h5>
                        <p class="card-text"><?php echo $curvecbed; ?></p>
                    </div>
                </div>
            </div>

        </div>

        <!-- <div class="row"> -->
        <div class="container col-xl-6" id="covid19Ventcard">
            <a href="VentilatorDetails.php">
                <h3 style="padding-left: 20px; color: blue;">Covid-19 Ventilators (Delhi)</h3>
            </a>
            <br>
            <div class="row">
                <div class="card" id="totalBed" style="width: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title">Total</h5>
                        <p class="card-text"><?php echo $Totvent; ?></p>
                    </div>
                </div>
                <div class="card" id="OccupiedBed" style="width: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title">Occupied</h5>
                        <p class="card-text"><?php echo $CurrOccVent; ?></p>
                    </div>
                </div>
                <div class="card" id="VacantBed" style="width: 12rem;">
                    <div class="card-body">
                        <h5 class="card-title">Vacant</h5>
                        <p class="card-text"><?php echo $curvecvent; ?></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>

    <div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-chart-area mr-1"></i>Total Cases Line chart</div>
                    <div class="card-body"><canvas id="linechart" width="100%" height="40"></canvas></div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card mb-4">
                    <div class="card-header"><i class="fas fa-chart-bar mr-1"></i>Line Graph</div>
                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                </div>
            </div>
        </div>
    </div>
    <div class="cardrow">
        <div class="cardTitle">
            <h2>India Covid-19</h2>
        </div>
        <div class="row">
            <div class="card" id="Totalcard" style="width: 20rem;">
                <div class="card-body">
                    <h5 class="card-title">Confirmed</h5>
                    <p class="card-text" id="IndConf"></p>

                </div>
            </div>
            <div class="card" id="Activecard" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Active </h5>
                    <p class="card-text" id="IndActive"></p>
                </div>
            </div>
            <div class="card" id="Recoverycard" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Recovered</h5>
                    <p class="card-text" id="IndRec"></p>
                </div>
            </div>
            <div class="card" id="deathcard" style="width: 18rem">
                <div class="card-body">
                    <h5 class="card-title">Death</h5>
                    <p class="card-text" id="IndDeaths"></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
   <div class="table-responsive">
    <h1 align="center">Covid-19 Dashboard</h1>
    <br />
    <div align="center">
     
    </div>
    <br />
    <div id="covid_table">
    </div>
    
   </div>
  </div>
</body>

</html>