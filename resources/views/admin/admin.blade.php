    @extends('admin.template.admin-main')

    @section('content')
    <div class="col-xl-4 col-lg-12 xl-50 morning-sec box-col-12">
        <div class="card o-hidden profile-greeting">
          <div class="card-body">
            <div class="media">
              <div class="badge-groups w-100">
                <div class="badge f-12"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock me-1"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg><span id="txt">9:51 PM</span></div>
                <div class="badge f-12"><i class="fa fa-spin fa-cog f-14"></i></div>
              </div>
            </div>
            <div class="greeting-user text-center">
              <div class="profile-vector"><img class="img-fluid" src="../assets/images/dashboard/welcome.png" alt=""></div>
              <h4 class="f-w-600"><span id="greeting">Good Evening, Boss</span> <span class="right-circle"><i class="fa fa-check-circle f-14 middle"></i></span></h4>
              <p><span> Today's earrning is $405 &amp; your sales increase rate is 3.7 over the last 24 hours</span></p>
              <div class="whatsnew-btn"><a class="btn btn-primary" href="/profile">Detail</a></div>
              <div class="left-icon"><i class="fa fa-bell"> </i></div>
            </div>
          </div>
        </div>
      </div>






    @endsection
