<?php include 'includes/header.php' ?>
<?php include 'includes/navbar.php' ?>

<style>

.card {

    height: 200px;
}
#proccess .DeleteItem {
    display: none;
}
#proccess .IncreaseToCart, #proccess .DecreaseToCart {
    display: none;
}
#proccess td {
    width: auto;
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


.content-wrap {
    padding: 20px;
}

.content-block {
    padding: 0 0 20px;
}

.header {
    width: 100%;
    margin-bottom: 20px;
}

.footer {
    width: 100%;
    clear: both;
    color: #999;
    padding: 20px;
}
.footer a {
    color: #999;
}
.footer p, .footer a, .footer unsubscribe, .footer td {
    font-size: 12px;
}

/* -------------------------------------
    TYPOGRAPHY
------------------------------------- */
h1, h2, h3 {
    font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
    color: #000;
    margin: 40px 0 0;
    line-height: 1.2;
    font-weight: 400;
}

h1 {
    font-size: 32px;
    font-weight: 500;
}

h2 {
    font-size: 24px;
}

h3 {
    font-size: 18px;
}

h4 {
    font-size: 14px;
    font-weight: 600;
}

p, ul, ol {
    margin-bottom: 10px;
    font-weight: normal;
}
p li, ul li, ol li {
    margin-left: 5px;
    list-style-position: inside;
}


/* -------------------------------------
    OTHER STYLES THAT MIGHT BE USEFUL
------------------------------------- */
.last {
    margin-bottom: 0;
}

.first {
    margin-top: 0;
}

.aligncenter {
    text-align: center;
}

.alignright {
    text-align: right;
}

.alignleft {
    text-align: left;
}

.clear {
    clear: both;
}

/* -------------------------------------
    ALERTS
    Change the class depending on warning email, good email or bad email
------------------------------------- */
.alert {
    font-size: 16px;
    color: #fff;
    font-weight: 500;
    padding: 20px;
    text-align: center;
    border-radius: 3px 3px 0 0;
}
.alert a {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    font-size: 16px;
}
.alert.alert-warning {
    background: #f8ac59;
}
.alert.alert-bad {
    background: #ed5565;
}
.alert.alert-good {
    background: #1ab394;
}

/* -------------------------------------
    INVOICE
    Styles for the billing table
------------------------------------- */
.invoice {
    margin: 40px auto;
    text-align: left;
    width: 80%;
}
.invoice td {
    padding: 5px 0;
}
.invoice .invoice-items {
    width: 100%;
}
.invoice .invoice-items td {
    border-top: #eee 1px solid;
}
.invoice .invoice-items .total td {
    border-top: 2px solid #333;
    border-bottom: 2px solid #333;
    font-weight: 700;
}

/* -------------------------------------
    RESPONSIVE AND MOBILE FRIENDLY STYLES
------------------------------------- */
@media only screen and (max-width: 640px) {
    h1, h2, h3, h4 {
        font-weight: 600 !important;
        margin: 20px 0 5px !important;
    }

    h1 {
        font-size: 22px !important;
    }

    h2 {
        font-size: 18px !important;
    }

    h3 {
        font-size: 16px !important;
    }

    .container {
        width: 100% !important;
    }

    .content, .content-wrap {
        padding: 10px !important;
    }

    .invoice {
        width: 100% !important;
    }
}

</style>
<div class="container-fluid">
  <div class="row">
   
  <?php include 'includes/top-nav.php' ?>
  <main role="main" class="col-md-12 ml-sm-auto col-lg-12 px-4">
   <div class="row">
 

  
  <div class="col-lg-7 disable-select" style="margin-bottom: 6px;">
        <div style="height:auto;padding: 13px;" class="card card-info">
                <form action="" method="post">
                     <input  type="search" class="form-control" placeholder="Search item" name="search" id="search">
                     
                </form>
            <div class="card-body" style="display:flex;">
                <h5 class="select_all_cats selected-tag" style="margin-left;"><span class="badge badge-secondary">All</span></h5>
                <h5 class="cat_type" style="margin-left:2px;"><span class="badge badge-secondary">Drinks</span></h5>
                <h5 class="cat_type" style="margin-left:2px;"><span class="badge badge-secondary">Chicken</span></h5>
            </div>
        </div>
  </div>

       <div  class="col-md-7 disable-select">
          <div style=" padding: 13px; " id="results" class="row">
          <div class="col-md-3">
          <div class="card mb-3 shadow-sm item-sale results">
            <img style="padding-top: 8px;" class=" text-center m-auto img-fluid" width="100px"  src="layout/imgs/food.jpg" >
            <div class="card-body">
              <div id="hidden-values">
                <input type="hidden"  id="item_name" value="Charcoal Meat Shawarma.">
                <input type="hidden"  id="item_price" value="35">
                <input type="hidden"  id="item_id" value="5">
                <input type="hidden"  id="item_type" value="large">
                <span style="display:none;"  id="cat">Chicken_keyword_cats</span>
              </div>

            <p class="card-text text-center">Charcoal Meat Shawarma.</p>
            <span class="item-price">35 EGP</span>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Regular</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Large</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card mb-3 shadow-sm item-sale results">
          <img style="padding-top: 8px;" class=" text-center m-auto img-fluid" width="100px"  src="layout/imgs/food2.jpg" >
            <div class="card-body">
            <div id="hidden-values">
                <input type="hidden"  id="item_name" value="Charcoal Chicken Shawarmaa">
                <input type="hidden"  id="item_price" value="15">
                <input type="hidden"  id="item_id" value="10">
                <input type="hidden"  id="item_type" value="large">
                <span style="display:none;"  id="cat">Drinks_keyword_cats</span>

              </div>
              <p class="card-text text-center">Charcoal Chicken Shawarmaa</p>
              <span class="item-price">15 EGP</span>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Regular</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Large</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card mb-3 shadow-sm item-sale results">
          <img style="padding-top: 8px;" class=" text-center m-auto img-fluid" width="100px"  src="layout/imgs/food3.jpg" >
            <div class="card-body">
            <div id="hidden-values">
                <input type="hidden"  id="item_name" value="Charcoal Chicken Shawarmaa">
                <input type="hidden"  id="item_price" value="22">
                <input type="hidden"  id="item_id" value="8">
                <input type="hidden"  id="item_type" value="large">
                <span style="display:none;"  id="cat">Chicken_keyword_cats</span>
              </div>
              <p class="card-text text-center">Charcoal Chicken Shawarmaa</p>
              <span class="item-price">22 EGP</span>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Regular</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Large</button>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-3">
          <div class="card mb-3 shadow-sm item-sale results">
          <img style="padding-top: 8px;" class=" text-center m-auto img-fluid" width="100px"  src="layout/imgs/food4.jpg" >
            <div class="card-body">
            <div id="hidden-values">
                <input type="hidden"  id="item_name" value="Coca Cola 300 Ml Big.">
                <input type="hidden"  id="item_price" value="72.5">
                <input type="hidden"  id="item_id" value="12">
                <input type="hidden"  id="item_type" value="large">
                <span style="display:none;"  id="cat">Chicken_keyword_cats</span>

              </div>
              <p class="card-text text-center">Coca Cola 300 Ml Big.</p>
              <span class="item-price">72.5 EGP</span>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">300 ML</button>
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="col-md-3">
          <div class="card mb-3 shadow-sm item-sale results">
          <img style="padding-top: 8px;" class=" text-center m-auto img-fluid" width="100px"  src="layout/imgs/food5.jpg" >
            <div class="card-body">
            <div id="hidden-values">
                <input type="hidden"  id="item_name" value="Charcoal Meat Shawarma.">
                <input type="hidden"  id="item_price" value="8.5">
                <input type="hidden"  id="item_id" value="78">
                <input type="hidden"  id="item_type" value="large">
                <span style="display:none;"  id="cat">Drinks_keyword_cats</span>

              </div>
              <p class="card-text text-center">Charcoal Meat Shawarma.</p>
              <span class="item-price">8.5 EGP</span>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Regular</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Large</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card mb-3 shadow-sm item-sale results">
          <img style="padding-top: 8px;" class=" text-center m-auto img-fluid" width="100px"  src="layout/imgs/food.jpg" >
            <div class="card-body">
              <p class="card-text text-center">Charcoal Chicken Shawarmaa</p>
              <span class="item-price">35 EGP</span>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Regular</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Large</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card mb-3 shadow-sm item-sale results">
          <img style="padding-top: 8px;" class=" text-center m-auto img-fluid" width="100px"  src="layout/imgs/food.jpg" >
            <div class="card-body">
              <p class="card-text text-center">Charcoal Chicken Shawarmaa</p>
              <span class="item-price">35 EGP</span>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Regular</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Large</button>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-md-3">
          <div class="card mb-3 shadow-sm item-sale results">
          <img style="padding-top: 8px;" class=" text-center m-auto img-fluid" width="100px"  src="layout/imgs/food.jpg" >
            <div class="card-body">
              <p class="card-text text-center">Coca Cola 300 Ml Big.</p>
              <span style="display:none;"  id="cat">Drinks_keyword_cats</span>

              <span class="item-price">35 EGP</span>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">300 ML</button>
                </div>
              </div>
            </div>
          </div>
        </div>


          </div>
       </div>
       <div class="col-md-5" style="margin-top: -146px;">
           <div style="height:auto;padding: 8px;" class="card card-info">
            <div class="card-body">
           <div id="invoice_table" class="cart-table-wrap">

<table width="100%"  class="table">
        
  
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Qun</th>
      <th scope="col">Dis</th>
      <th scope="col">Price</th>
    </tr>
    </thead>
      <tbody id="CartITEMS">
      </tbody>

</table>
</div>
           </div>



            <hr>
               <div id="tax_invoice">
               <table width="100%" border="0" style="border-spacing: 5px; border-collapse: separate;" class="">
  
  <tbody>

    <tr>

      <td>

        <h4>Subtotal</h4>

      </td>

      <td class="text-right">

        <h4 id="p_subtotal">0.00</h4>

      </td>
    </tr>
    <!--<tr>

      <td>

        <h4>Discount</h4>

      </td>

      <td class="text-right">

        <h4 id="p_discount">0.00</h4>

      </td>
    </tr> -->
    <tr>

      <td>

        <h4>Tax(16%)</h4>

      </td>

      <td class="text-right">

        <h4 id="p_hst">0.00</h4>

      </td>
    </tr>

    <tr>

<td>

  <h4>Paid</h4>

</td>

<td class="text-right">

  <h4 id="customer_paid">0.00</h4>

</td>
</tr>


<tr>

<td>

  <h4>The rest</h4>

</td>

<td class="text-right">

  <h4 id="customer_result">0.00</h4>

</td>
</tr>
    
 

  </tbody>

</table>
               </div>
              <br>
              <button type="button"  data-toggle="modal" id="complete_pay" data-target="#exampleModal" class="btn btn-primary">Proceed</button>
              <br>
           </div>
       </div>
  </div>
  
  </main>


  <?php include 'includes/footer.php' ?>
  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

  <?php include 'confirm.php' ?>

<script>

  var total_price = 0;
  var index =1;
  var proccess = $('#proccess').html();

       $(document).on('click','.item-sale',function(){

        let price =  $(this).find('#hidden-values').find('#item_price').val();
        let name =  $(this).find('#hidden-values').find('#item_name').val();
        let id =  $(this).find('#hidden-values').find('#item_id').val();
        let type =  $(this).find('#hidden-values').find('#item_type').val();
        
         if (!$('#CartITEMS').find('#item_' + id).length)
          {

            var item = '<tr id="item_' + id +'">'
       + '<td width="10" valign="top">'
        +  index
        +  '</td>'
          + ' <td>'
            +  '<h4 style="margin:0px;">'
            +  name
           +   '</h4>'
           +'</td>'

         + ' <td style=" display: flex; " width="120">'
          + '<span class="btn btn-sm btn-outline-secondary text-center IncreaseToCart" data-id="'+ id +'"><i class="fa fa-plus"></i></span>'
          +  '<input type="text" class="item-count" id="item-count" value="1">'
          +  '<input type="hidden" id="main-price" value="' + price +' ">'
          +  '<span class="btn btn-sm btn-outline-secondary DecreaseToCart" data-id="'+ id +'"><i class="fa fa-minus"></i></span>'
         + ' </td>'
         +  '<td width="80">'
          + '<input type="text" class="item-count" value="0">'
          + '</td>'
           +'<td width="15%" class="text-right">'
          +   '<h4 id="total-price" style="margin:0px;">' 
            + price
           +  '</h4>'
          +   '</td>'
          +  ' <td>'
          +   '<a href="javascript:void(0)" class="text-danger DeleteItem" data-id="'+ id +'">'
          +  '<i class="fa fa-trash"></i>'
        + ' </a>'
          +  ' </td>'
         +  ' </tr>'

           +'<tr>';

         $('#CartITEMS').append(item);
         index++;
         pluse_total(price);

          }else
          {
          
            $('#CartITEMS').find('#item_' + id).find('#item-count').val(parseFloat($('#CartITEMS').find('#item_' + id).find('#item-count').val())  +1 ) ;
           
            $('#CartITEMS').find('#item_' + id).find('#total-price').text(parseFloat($('#CartITEMS').find('#item_' + id).find('#total-price').text())  + parseFloat(price) ) ;
            
            pluse_total(price);
           }
     
       });

       $(document).on('click','.IncreaseToCart',function(){
             $(this).parent().find('#item-count').val(parseFloat($(this).parent().find('#item-count').val())  +1 );
             $(this).parent().parent().find('#total-price').text(parseFloat($(this).parent().parent().find('#total-price').text())  + parseFloat($(this).parent().find('#main-price').val()) ) ;
             pluse_total(parseFloat($(this).parent().find('#main-price').val()) );

        });
        $(document).on('click','.DecreaseToCart',function(){
          if (parseFloat($(this).parent().find('#item-count').val()) !=0)
          {
            $(this).parent().find('#item-count').val(parseFloat($(this).parent().find('#item-count').val())  -1 );
             $(this).parent().parent().find('#total-price').text(parseFloat($(this).parent().parent().find('#total-price').text())  - parseFloat($(this).parent().find('#main-price').val()) ) ;
             minus_total(parseFloat($(this).parent().find('#main-price').val()) );
          }
          if (parseFloat($(this).parent().find('#item-count').val()) ==0)
          {
            delete_item($(this).attr('data-id'));
          }

        });

        $(document).on('click','.DeleteItem',function(){
           delete_item($(this).attr('data-id'));
        });

        $(document).on('click','.cat_type',function(){
          $('.cat_type').removeClass('selected-tag');
          $('.select_all_cats').removeClass('selected-tag');
          $(this).addClass('selected-tag');

          var filter =  $(this).find('span').text() + '_keyword_cats',
          count = 0;

                  // Loop through the comment list
        $('#results .col-md-3').each(function() {


          // If the list item does not contain the text phrase fade it out
          if ($(this).text().search(new RegExp(filter, "i")) < 0) {
            $(this).hide();  // MY CHANGE
            // Show the list item if the phrase matches and increase the count by 1
          } else {
            $(this).show(); // MY CHANGE
            count++;
          }

          });
        });

        $(document).on('click','.select_all_cats',function(){
          $('.cat_type').removeClass('selected-tag');
          $(this).addClass('selected-tag');
          $('#results .col-md-3').each(function() {
              $(this).show(); // MY CHANGE
              });
           });
        

        function pluse_total(price)
        {
              var subtotal =  parseFloat(price);
              total_price = total_price + subtotal;
              $('#p_subtotal').text( total_price);
              $('#p_hst').text(parseFloat(total_price))
              $('#total_price').text(parseFloat(total_price))
        }

        function minus_total(price)
        {
              var subtotal =  parseFloat(price);
              total_price = total_price - subtotal;
              $('#p_subtotal').text( total_price);
              $('#p_hst').text(parseFloat(total_price))
              $('#total_price').text(parseFloat(total_price))

        }


        function delete_item(id)
        {
            price = parseFloat($('#item_' + id).find('#total-price').text());
            minus_total(price);
            $('#item_' + id).remove();
        }


        $("#search").keyup(function() {

        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val(),
          count = 0;

        // Loop through the comment list
        $('#results .col-md-3').each(function() {


          // If the list item does not contain the text phrase fade it out
          if ($(this).text().search(new RegExp(filter, "i")) < 0) {
            $(this).hide();  // MY CHANGE
            // Show the list item if the phrase matches and increase the count by 1
          } else {
            $(this).show(); // MY CHANGE
            count++;
          }

        });

        });

 

        $(document).on('keyup','#paid',function(){
              
          $("#paid").keyup(function() {

        var total_r = parseFloat($('#total_price').text());
        var paid = $(this).val();

        var result = paid - total_r;

        $('#result').text(result);
        $('#customer_paid').text(paid);
        $('#customer_result').text(result);

            });
      });


            $(document).on('click','#done_paid',function(){
              
                  $('#proccess').html($('#invoice_table').html() + $('#tax_invoice').html());
              
             });

             
             $(document).on('click','#complete_pay',function(){
              
              $('#total_price').text(total_price);    
       
             });
             $(document).on('click','#closed_pay',function(){
              
              $('#proccess').html(proccess);
       
             });
             
          
</script>

