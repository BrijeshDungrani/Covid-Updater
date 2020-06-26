<?php include_once('header.html') ?>
<div class="card-header bedheader">
    <i class="fas fa-table mr-1"></i>
    <h3>COvid -19 Beds</h3>
</div>
<div>
    <h3 class="TableHeader">Covid Bed Availability</h3>
    <br>
    <div class="row">
        <div class = "availability" ><h5>&nbsp Availability &nbsp</h5></div>
        <div class = "availability" ><h5 style="background-color: lightgreen;">&nbsp More than 50 Beds &nbsp</h5></div>
        <div class = "availability" ><h5 style="background-color: #FFFF99;">&nbsp Less than 50 Beds &nbsp</h5></div>
        <div class = "availability" ><h5 style="background-color: #FFB6C1;">&nbsp No Bed &nbsp</h5></div>
    </div>
</div>
<div class="card-body bedTable">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Hospital<i class="fa fa-sort"></i></th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Total Beds<i class="fa fa-sort"></i></th>
                    <th>Occupied Beds<i class="fa fa-sort"></i></th>
                    <th>Vacant Beds<i class="fa fa-sort"></i></th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Hospital</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Total Beds</th>
                    <th>Occupied Beds</th>
                    <th>Vacant Beds</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>Lok Nayak (LNJP)</td>
                    <td>Jawahar Lal Nehru Marg</td>
                    <td>011 23232400</td>
                    <td>2000</td>
                    <td>712</td>
                    <td>1288</td>

                </tr>
                <tr>
                    <td>Guru Teg Bahadur Hospital</td>
                    <td>Shahdara</td>
                    <td>9625900725</td>
                    <td>1500</td>
                    <td>273</td>
                    <td>1227</td>

                </tr>
                <tr>
                    <td>Safdarjung (SJF)</td>
                    <td>Ansari Nagar East</td>
                    <td>011 26730000</td>
                    <td>283</td>
                    <td>277</td>
                    <td>6</td>

                </tr>
                <tr>
                    <td>NKS Hospital</td>
                    <td>219,220,Sanjay Nagar,Gulabi Bagh</td>
                    <td>011 23666666</td>
                    <td>20</td>
                    <td>20</td>
                    <td>0</td>

                </tr>

                <tr>
                    <td>Aakash Healthcare</td>
                    <td>Dwarka sector-3</td>
                    <td>8800015991</td>
                    <td>100</td>
                    <td>88</td>
                    <td>12</td>


                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<script>

</script>