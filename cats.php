<?php include 'includes/header.php' ?>
<?php include 'includes/navbar.php' ?>

<style>

.card {

    height: 240px;
}
@media (min-width: 768px)
{
    .col-md-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
    padding: 2px;
}
}
h4{
    font-size: 14px;

}

.btn-group-sm>.btn, .btn-sm {
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem;
    margin-left: 3px;
}


</style>
<div class="container-fluid">
  <div class="row">
   
  <?php include 'includes/left-nav.php' ?>
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  <h1>Categories</h1>
<hr>
    <div class="row">
    <div class="col-lg-12">
<div style="height:auto;" class="card card-info">
           <div class="card-body">
                <div class="btn btn-primary btn-sm">Add new</div>
           </div>
           </div>
</div>

    <div class="col-lg-12">
<div class="table-responsive table--no-card m-b-30">
<table class="table table-borderless table-striped table-earning">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Total</th>
<th>Controls</th>
</tr>
</thead>
<tbody>
<tr>
<td>100398</td>
<td>iPhone X 64Gb Grey</td>
<td >1</td>
<td  style=" display: inline-flex; ">
<form id="delete-customer" action="#" method="POST" class="form-inline">
<input type="hidden" name="_method" value="delete">
<input type="hidden" name="_token" value="UCjFhelep6MvRYSpmx56S7g6kjyVIwblDhD2dfrb">
<button type="submit"  class="btn btn-danger btn-sm pull-right btn-delete"><i class="fa fa-trash"></i> Delete</button>
</form>
<a href="" class="btn btn-primary btn-sm pull-right"><i class="fa fa-edit"></i> Edit</a>
</td>
</tr>
<tr>
<td>100397</td>
<td>Samsung S8 Black</td>
<td>1</td>
<td  style=" display: inline-flex; ">
<form id="delete-customer" action="#" method="POST" class="form-inline">
<input type="hidden" name="_method" value="delete">
<input type="hidden" name="_token" value="UCjFhelep6MvRYSpmx56S7g6kjyVIwblDhD2dfrb">
<button type="submit"  class="btn btn-danger btn-sm pull-right btn-delete"><i class="fa fa-trash"></i> Delete</button>
</form>
 
<a href="" class="btn btn-primary btn-sm pull-right"><i class="fa fa-edit"></i> Edit</a>
</td>
</tr>
<tr>
<td>100396</td>
<td>Game Console Controller</td>
<td >2</td>
<td  style=" display: inline-flex; ">
<form id="delete-customer" action="#" method="POST" class="form-inline">
<input type="hidden" name="_method" value="delete">
<input type="hidden" name="_token" value="UCjFhelep6MvRYSpmx56S7g6kjyVIwblDhD2dfrb">
<button type="submit"  class="btn btn-danger btn-sm pull-right btn-delete"><i class="fa fa-trash"></i> Delete</button>
</form>
<a href="" class="btn btn-primary btn-sm pull-right"><i class="fa fa-edit"></i> Edit</a>
</td>
</tr>
<tr>
<td>100395</td>
<td>iPhone X 256Gb Black</td>
<td >1</td>
<td  style=" display: inline-flex; ">
<form id="delete-customer" action="#" method="POST" class="form-inline">
<input type="hidden" name="_method" value="delete">
<input type="hidden" name="_token" value="UCjFhelep6MvRYSpmx56S7g6kjyVIwblDhD2dfrb">
<button type="submit"  class="btn btn-danger btn-sm pull-right btn-delete"><i class="fa fa-trash"></i> Delete</button>
</form>
<a href="" class="btn btn-primary btn-sm pull-right"><i class="fa fa-edit"></i> Edit</a>
</td>
</tr>
<tr>
<td>100393</td>
<td>USB 3.0 Cable</td>
<td >3</td>
<td  style=" display: inline-flex; ">
<form id="delete-customer" action="#" method="POST" class="form-inline">
<input type="hidden" name="_method" value="delete">
<input type="hidden" name="_token" value="UCjFhelep6MvRYSpmx56S7g6kjyVIwblDhD2dfrb">
<button type="submit"  class="btn btn-danger btn-sm pull-right btn-delete"><i class="fa fa-trash"></i> Delete</button>
</form>
<a href="" class="btn btn-primary btn-sm pull-right"><i class="fa fa-edit"></i> Edit</a>
</td>
</tr>
<tr>
<td>100392</td>
<td>Smartwatch 4.0 LTE Wifi</td>
 <td >6</td>
 <td  style=" display: inline-flex; ">
<form id="delete-customer" action="#" method="POST" class="form-inline">
<input type="hidden" name="_method" value="delete">
<input type="hidden" name="_token" value="UCjFhelep6MvRYSpmx56S7g6kjyVIwblDhD2dfrb">
<button type="submit"  class="btn btn-danger btn-sm pull-right btn-delete"><i class="fa fa-trash"></i> Delete</button>
</form>
<a href="" class="btn btn-primary btn-sm pull-right"><i class="fa fa-edit"></i> Edit</a>
</td>
</tr>
<tr>
<td>100391</td>
<td>Camera C430W 4k</td>
<td >1</td>
<td  style=" display: inline-flex; ">
<form id="delete-customer" action="#" method="POST" class="form-inline">
<input type="hidden" name="_method" value="delete">
<input type="hidden" name="_token" value="UCjFhelep6MvRYSpmx56S7g6kjyVIwblDhD2dfrb">
<button type="submit"  class="btn btn-danger btn-sm pull-right btn-delete"><i class="fa fa-trash"></i> Delete</button>
</form>
<a href="" class="btn btn-primary btn-sm pull-right"><i class="fa fa-edit"></i> Edit</a>
</td>
</tr>
<tr>
<td>100393</td>
<td>USB 3.0 Cable</td>
<td >3</td>
<td  style=" display: inline-flex; ">
<form id="delete-customer" action="/91" method="POST" class="form-inline">
<input type="hidden" name="_method" value="delete">
<input type="hidden" name="_token" value="UCjFhelep6MvRYSpmx56S7g6kjyVIwblDhD2dfrb">
<button type="submit"  class="btn btn-danger btn-sm pull-right btn-delete"><i class="fa fa-trash"></i> Delete</button>
</form>
<a href="" class="btn btn-primary btn-sm pull-right"><i class="fa fa-edit"></i> Edit</a>
</td>
</tr>
</tbody>
</table>
</div>
</div>


       </div>
  </div>


  

  </main>


<?php include 'includes/footer.php' ?>




