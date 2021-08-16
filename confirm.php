

<!-- Modal -->
<div dir="rtl" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">اتمام العملية</h5>
        <button type="button" class="close text-left" style=" float: left; position: absolute; left: 22px; " data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="proccess" class="modal-body text-right">
          <h2>  اجمالي الحساب : </h2>
         <h2 id="total_price" > 250 </h2> <span>EGP</span>
         <input style=" height: 70px; font-size: 24px; " type="text" name="paid" placeholder="المدفوع؟" class="form-control" id="paid">
         <h2> الباقي :  </h2>
         <h2 id="result">0.0</h2> <span>EGP</span>
      </div>
      <div dir="rtl" class="modal-footer text-right">
        <button type="button" id="closed_pay" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
        <button type="button" id="done_paid" class="btn btn-primary">اتمام</button>
      </div>
    </div>
  </div>
</div>