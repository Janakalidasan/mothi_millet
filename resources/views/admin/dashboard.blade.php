@extends('layout.master')
@section('content')
<div class="row">
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div
          class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <!-- <i class="mdi mdi-cube text-danger icon-lg"></i> -->
            <i class="mdi mdi-account-box-multiple text-info icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Users</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">2590</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> All User Count
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div
          class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-receipt text-warning icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Orders</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">345</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Product-wise Total Orders
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div
          class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-poll-box text-success icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Sales</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">5693</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Weekly Sales
        </p>
      </div>
    </div>
  </div>
  <!-- <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
          <div class="float-left">
            <i class="mdi mdi-account-box-multiple text-info icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Employees</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">246</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
          <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Product-wise sales </p>
      </div>
    </div>
  </div> -->
</div>
<!-- <div class="row">
  <div class="col-md-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <div class="d-sm-flex justify-content-between align-items-center mb-4">
          <h2 class="card-title mb-0">Product Analysis</h2>
          <div class="wrapper d-flex">
            <div class="d-flex align-items-center mr-3">
              <span class="dot-indicator bg-success"></span>
              <p class="mb-0 ml-2 text-muted">Product</p>
            </div>
            <div class="d-flex align-items-center">
              <span class="dot-indicator bg-primary"></span>
              <p class="mb-0 ml-2 text-muted">Resources</p>
            </div>
          </div>
        </div>
        <div class="chart-container">
          <canvas id="dashboard-area-chart" height="80"></canvas>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- <div class="row">
  <div class="col-md-6 col-xl-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Todo</h4>
        <div class="add-items d-flex">
          <input type="text" class="form-control todo-list-input" placeholder="What do you need to do today?">
          <button class="add btn btn-primary font-weight-medium todo-list-add-btn">Add</button>
        </div>
        <div class="list-wrapper">
          <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
            <li class="completed">
              <div class="form-check form-check-flat">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox" checked> Call John </label>
              </div>
              <i class="remove mdi mdi-close-circle-outline"></i>
            </li>
            <li>
              <div class="form-check form-check-flat">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox"> Create invoice </label>
              </div>
              <i class="remove mdi mdi-close-circle-outline"></i>
            </li>
            <li>
              <div class="form-check form-check-flat">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox"> Print Statements </label>
              </div>
              <i class="remove mdi mdi-close-circle-outline"></i>
            </li>
            <li class="completed">
              <div class="form-check form-check-flat">
                <label class="form-check-label">
                  <input class="checkbox" type="checkbox" checked> Prepare for presentation </label>
              </div>
              <i class="remove mdi mdi-close-circle-outline"></i>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 col-xl-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Schedules</h4>
        <div class="shedule-list d-flex align-items-center justify-content-between mb-3">
          <h3>27 Sep 2018</h3>
          <small>21 Events</small>
        </div>
        <div class="event border-bottom py-3">
          <p class="mb-2 font-weight-medium">Skype call with alex</p>
          <div class="d-flex align-items-center">
            <div class="badge badge-success">3:45 AM</div>
            <small class="text-muted ml-2">London, UK</small>
            <div class="image-grouped ml-auto">
              <img src="{{ url('assets/images/faces/face10.jpg') }}" alt="profile image">
              <img src="{{ url('assets/images/faces/face13.jpg') }}" alt="profile image"> </div>
          </div>
        </div>
        <div class="event py-3 border-bottom">
          <p class="mb-2 font-weight-medium">Data Analysing with team</p>
          <div class="d-flex align-items-center">
            <div class="badge badge-warning">12.30 AM</div>
            <small class="text-muted ml-2">San Francisco, CA</small>
            <div class="image-grouped ml-auto">
              <img src="{{ url('assets/images/faces/face20.jpg') }}" alt="profile image">
              <img src="{{ url('assets/images/faces/face17.jpg') }}" alt="profile image">
              <img src="{{ url('assets/images/faces/face14.jpg') }}" alt="profile image"> </div>
          </div>
        </div>
        <div class="event py-3">
          <p class="mb-2 font-weight-medium">Meeting with client</p>
          <div class="d-flex align-items-center">
            <div class="badge badge-danger">4.15 AM</div>
            <small class="text-muted ml-2">San Diego, CA</small>
            <div class="image-grouped ml-auto">
              <img src="{{ url('assets/images/faces/face21.jpg') }}" alt="profile image">
              <img src="{{ url('assets/images/faces/face16.jpg') }}" alt="profile image"> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12 col-xl-4 grid-margin stretch-card">
    <div class="row flex-grow">
      <div class="col-md-6 col-xl-12 grid-margin grid-margin-md-0 grid-margin-xl stretch-card">
        <div class="card card-revenue">
          <div class="card-body d-flex align-items-center">
            <div class="d-flex flex-grow">
              <div class="mr-auto">
                <p class="highlight-text mb-0 text-white"> $168.90 </p>
                <p class="text-white"> This Month </p>
                <div class="badge badge-pill"> 18% </div>
              </div>
              <div class="ml-auto align-self-end">
                <div id="revenue-chart" sparkType="bar" sparkBarColor="#e6ecf5" barWidth="2"> 4,3,10,9,4,3,8,6,7,8 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-xl-12 stretch-card">
        <div class="card card-revenue-table">
          <div class="card-body">
            <div class="revenue-item d-flex">
              <div class="revenue-desc">
                <h6>Member Profit</h6>
                <p class="font-weight-light"> Average Weekly Profit </p>
              </div>
              <div class="revenue-amount">
                <p class="text-primary"> +168.900 </p>
              </div>
            </div>
            <div class="revenue-item d-flex">
              <div class="revenue-desc">
                <h6>Total Profit</h6>
                <p class="font-weight-light"> Weekly Customer Orders </p>
              </div>
              <div class="revenue-amount">
                <p class="text-primary"> +6890.00 </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

<div class="row">
  <div class="col-lg-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Orders</h4>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th> # </th>
                <th> Name </th>
                <th> Email </th>
                <th> Date </th>
                <th> Register </th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="font-weight-medium"> 1 </td>
                <td> Herman Beck </td>
                <td>jana@gmail.com
                </td>
                <td> May 15, 2015 </td>
                </td>
                <td> Register </td>
              </tr>
              <tr>
                <td class="font-weight-medium"> 2 </td>
                <td> Messsy Adam </td>
                <td>sakthi@gmail.com
                </td>
                <td> July 1, 2015 </td>
                <td> Register </td>
              </tr>
              <tr>
                <td class="font-weight-medium"> 3 </td>
                <td> John Richards </td>
                <td>priya@gmail.com
                </td>              
                <td> Apr 12, 2015 </td>
                <td> Register </td>
              </tr>
              <tr>
                <td class="font-weight-medium"> 4 </td>
                <td> Peter Meggik </td>
                <td>deepak@gmail.com
                </td>             
                <td> May 15, 2015 </td>
                <td> Register </td>           
              </tr>
              <tr>
                <td class="font-weight-medium"> 5 </td>
                <td> Edward </td>
                <td>jana@gmail.com
                </td>         
                <td> May 03, 2015 </td>
                <td> Register </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body py-5">
        <div class="d-flex flex-row justify-content-center align-items">
          <i class="mdi mdi-facebook text-facebook icon-lg"></i>
          <div class="ml-3">
            <h6 class="text-facebook font-weight-semibold mb-0">2.62 Subscribers</h6>
            <p class="text-muted card-text">You main list growing</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body py-5">
        <div class="d-flex flex-row justify-content-center align-items">
          <i class="mdi mdi-instagram text-instagram icon-lg instagram-color" style="color:#bc2a8d"></i>

          <div class="ml-3">
            <h6 class="text-google font-weight-semibold mb-0">3.4k Followers</h6>
            <p class="text-muted card-text">You main list growing</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4 grid-margin stretch-card">
    <div class="card">
      <div class="card-body py-5">
        <div class="d-flex flex-row justify-content-center align-items">
          <i class="mdi mdi-twitter text-twitter icon-lg"></i>
          <div class="ml-3">
            <h6 class="text-twitter font-weight-semibold mb-0">3k followers</h6>
            <p class="text-muted card-text">You main list growing</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- <div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title mb-4">Manage Tickets</h5>
        <div class="fluid-container">
          <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
            <div class="col-md-1">
              <img class="img-sm rounded-circle mb-4 mb-md-0 d-block mx-md-auto" src="{{ url('assets/images/faces/face1.jpg') }}" alt="profile image"> </div>
            <div class="ticket-details col-md-9">
              <div class="d-flex">
                <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">James :</p>
                <p class="text-primary mr-1 mb-0">[#23047]</p>
                <p class="mb-0 ellipsis">Donec rutrum congue leo eget malesuada.</p>
              </div>
              <p class="text-gray ellipsis mb-2">Donec rutrum congue leo eget malesuada. Quisque velit nisi, pretium ut lacinia in, elementum id enim vivamus. </p>
              <div class="row text-gray d-md-flex d-none">
                <div class="col-4 d-flex">
                  <small class="mb-0 mr-2 text-muted text-muted">Last responded :</small>
                  <small class="Last-responded mr-2 mb-0 text-muted text-muted">3 hours ago</small>
                </div>
                <div class="col-4 d-flex">
                  <small class="mb-0 mr-2 text-muted text-muted">Due in :</small>
                  <small class="Last-responded mr-2 mb-0 text-muted text-muted">2 Days</small>
                </div>
              </div>
            </div>
            <div class="ticket-actions col-md-2">
              <div class="btn-group dropdown">
                <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Manage </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">
                    <i class="fa fa-reply fa-fw"></i>Quick reply</a>
                  <a class="dropdown-item" href="#">
                    <i class="fa fa-history fa-fw"></i>Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                  <a class="dropdown-item" href="#">
                    <i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
            <div class="col-md-1">
              <img class="img-sm rounded-circle mb-4 mb-md-0 d-block mx-md-auto" src="{{ url('assets/images/faces/face2.jpg') }}" alt="profile image"> </div>
            <div class="ticket-details col-md-9">
              <div class="d-flex">
                <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">Stella :</p>
                <p class="text-primary mr-1 mb-0">[#23135]</p>
                <p class="mb-0 ellipsis">Curabitur aliquet quam id dui posuere blandit.</p>
              </div>
              <p class="text-gray ellipsis mb-2">Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Curabitur non nulla sit amet nisl. </p>
              <div class="row text-gray d-md-flex d-none">
                <div class="col-4 d-flex">
                  <small class="mb-0 mr-2 text-muted">Last responded :</small>
                  <small class="Last-responded mr-2 mb-0 text-muted">3 hours ago</small>
                </div>
                <div class="col-4 d-flex">
                  <small class="mb-0 mr-2 text-muted">Due in :</small>
                  <small class="Last-responded mr-2 mb-0 text-muted">2 Days</small>
                </div>
              </div>
            </div>
            <div class="ticket-actions col-md-2">
              <div class="btn-group dropdown">
                <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Manage </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">
                    <i class="fa fa-reply fa-fw"></i>Quick reply</a>
                  <a class="dropdown-item" href="#">
                    <i class="fa fa-history fa-fw"></i>Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                  <a class="dropdown-item" href="#">
                    <i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row ticket-card mt-3">
            <div class="col-md-1">
              <img class="img-sm rounded-circle mb-4 mb-md-0 d-block mx-md-auto" src="{{ url('assets/images/faces/face3.jpg') }}" alt="profile image"> </div>
            <div class="ticket-details col-md-9">
              <div class="d-flex">
                <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">John Doe :</p>
                <p class="text-primary mr-1 mb-0">[#23246]</p>
                <p class="mb-0 ellipsis">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.</p>
              </div>
              <p class="text-gray ellipsis mb-2">Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus. Lorem ipsum dolor sit amet.</p>
              <div class="row text-gray d-md-flex d-none">
                <div class="col-4 d-flex">
                  <small class="mb-0 mr-2 text-muted">Last responded :</small>
                  <small class="Last-responded mr-2 mb-0 text-muted">3 hours ago</small>
                </div>
                <div class="col-4 d-flex">
                  <small class="mb-0 mr-2 text-muted">Due in :</small>
                  <small class="Last-responded mr-2 mb-0 text-muted">2 Days</small>
                </div>
              </div>
            </div>
            <div class="ticket-actions col-md-2">
              <div class="btn-group dropdown">
                <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Manage </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">
                    <i class="fa fa-reply fa-fw"></i>Quick reply</a>
                  <a class="dropdown-item" href="#">
                    <i class="fa fa-history fa-fw"></i>Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">
                    <i class="fa fa-check text-success fa-fw"></i>Resolve Issue</a>
                  <a class="dropdown-item" href="#">
                    <i class="fa fa-times text-danger fa-fw"></i>Close Issue</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
@endsection