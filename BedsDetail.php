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
        <div class = "availability" ><h5 style="background-color: red;">&nbsp No Bed &nbsp</h5></div>
    </div>
</div>
<div class="card-body bedTable">
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Hospital<i class="fa fa-sort"></i></th>
                    <th>Total<i class="fa fa-sort"></th>
                    <th>Occupied<i class="fa fa-sort"></th>
                    <th>Vacant<i class="fa fa-sort"></th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Hospital</th>
                    <th>Total</th>
                    <th>Occupied</th>
                    <th>Vacant</th>
                </tr>
            </tfoot>
            <tbody>
                <tr>
                    <td>Hospital 1</td>
                    <td>32</td>
                    <td>100</td>
                    <td>61</td>

                </tr>
                <tr>
                    <td>Hospital 1</td>
                    <td>22</td>
                    <td>150</td>
                    <td>63</td>

                </tr>
                <tr>
                    <td>Hospital 2</td>
                    <td>54</td>
                    <td>222</td>
                    <td>66</td>

                </tr>
                <tr>
                    <td>Hospital 3</td>
                    <td>55</td>
                    <td>210</td>
                    <td>22</td>

                </tr>

                <tr>
                    <td>Hospital 4</td>
                    <td>77</td>
                    <td>274 </td>
                    <td>27</td>

                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
<script>

</script>