<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Med Aid</title>
    <!-- Core CSS - Include with every page -->
    <link href="../assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="../assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   	<link href="../assets/css/style.css" rel="stylesheet" />
    <link href="../assets/css/main-style.css" rel="stylesheet" />
     <!-- Page Level CSS -->
	<!--    Table JS-->
    <link href="../assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

</head>

<body>
    <!--  wrapper -->
<div id="wrapper">
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
    <!-- navbar-header -->
    <div class="navbar-header"> <a class="navbar-brand" href="dashboard_rc.php"> <img src="../assets/img/logo.png" alt="" /> </a> </div>
    <!-- end navbar-header -->
    <!-- navbar-top-links -->
    <ul class="nav navbar-top-links navbar-right">
      <!-- main dropdown -->
      <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <span class="top-label label label-info">5</span> <i class="fa fa-bell fa-3x"></i> </a>
        <!-- dropdown alerts-->
        <ul class="dropdown-menu dropdown-alerts">
          <li> <a href="#">
            <div> <i class="fa fa-comment fa-fw"></i>New Comment <span class="pull-right text-muted small">4 minutes ago</span> </div>
          </a> </li>
          <li class="divider"></li>
          <li> <a href="#">
            <div> <i class="fa fa-twitter fa-fw"></i>3 New Followers <span class="pull-right text-muted small">12 minutes ago</span> </div>
          </a> </li>
        </ul>
        <!-- end dropdown-alerts -->
      </li>
      <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-user fa-3x"></i> </a>
        <!-- dropdown user-->
        <ul class="dropdown-menu dropdown-user">
          <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a> </li>
          <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a> </li>
          <li class="divider"></li>
          <li><a href="../index.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a> </li>
        </ul>
        <!-- end dropdown-user -->
      </li>
      <!-- end main dropdown -->
    </ul>
    <!-- end navbar-top-links -->
  </nav>
  <nav class="navbar-default navbar-static-side" role="navigation">
    <!-- sidebar-collapse -->
    <div class="sidebar-collapse">
      <!-- side-menu -->
      <ul class="nav" id="side-menu">
        <li>
          <!-- user image section-->
          <div class="user-section">
            <div class="user-info">
              <div>Jonny <strong>Deen</strong></div>
              <div class="user-text-online"> <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online </div>
            </div>
          </div>
          <!--end user image section-->
        </li>
        <li> <a href="dashboard_rc.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
        <li class="selected"> <a href="first_aid_tips.php"><i class="fa fa-edit fa-fw"></i> First Aid Tips</a></li>
        <li> <a href="cases_log.php"><i class="fa fa-table fa-fw"></i> Cases Log</a></li>
      </ul>
      <!-- end side-menu -->
    </div>
    <!-- end sidebar-collapse -->
  </nav>
        
  <!-- navbar top -->      <!-- end navbar top -->

        <!-- navbar side -->        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper" >
<div class="row">
      <!-- page header -->
      <div class="col-lg-12">
              <h1 class="page-header">First Aid Tips</h1>
            </div>
            <!--end page header -->
          </div>
<div class="row">
  <div class="col-lg-6">
        <!-- Form Elements -->
        <div class="panel panel-default">
                <div class="panel-heading">Create New First Aid Tip</div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-12">
                      <form role="form">
                          <div class="form-group">
							<label>Case</label>
							<input class="form-control">
                          </div>
                        <div class="form-group">
                          <label>First Aid Tip Description</label>
                          <textarea name="textarea2" rows="3" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Tip</button>
                        <button type="reset" class="btn btn-success">Reset Form</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Form Elements -->
            </div>
      <div class="col-lg-6">
              <!-- Form Elements -->
              <div class="panel panel-default">
                <div class="panel-heading">Edit First Aid Tips</div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-12">
                      <form role="form">
                        <div class="form-group">
                          <label>Case</label>
                          <select name="select" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>First Aid Tip Description</label>
                          <textarea name="textarea" rows="3" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Edit Tip</button>
                        <button type="reset" class="btn btn-success">Reset Form</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Form Elements -->
            </div>
        </div>
          <div class="row">
            <div class="col-lg-12">
              <!-- Advanced Tables -->
              <div class="panel panel-default">
                <div class="panel-heading">Log of All First Aid Tips</div>
                <div class="panel-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                        <tr>
                          <th>Case</th>
                          <th>Fist Aid Tip Description</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Spider Bite</td>
                          <td>Clean the wound. Use mild soap and water and apply an antibiotic ointment.
Apply a cool compress. Use a cloth dampened with cold water or filled with ice. This helps reduce pain and swelling. If the bite is on an arm or leg, elevate it.</td>
                        </tr>
                        <tr>
                          <td>Broken Leg</td>
                          <td>Stop any bleeding. Apply pressure to the wound with a sterile bandage, a clean cloth or a clean piece of clothing.
Immobilize the injured area. Don't try to realign the bone or push a bone that's sticking out back in. If you've been trained in how to splint and professional help isn't readily available, apply a splint to the area above and below the fracture sites. Padding the splints can help reduce discomfort.
Apply ice packs to limit swelling and help relieve pain. Don't apply ice directly to the skin. Wrap the ice in a towel, piece of cloth or some other material.
Treat for shock. If the person feels faint or is breathing in short, rapid breaths, lay the person down with the head slightly lower than the trunk and, if possible, elevate the legs.</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!--End Advanced Tables -->
            </div>
          </div>
		</div>
              <!-- end page-wrapper -->

  </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="../assets/plugins/jquery-1.10.2.js"></script>
    <script src="../assets/plugins/bootstrap/bootstrap.js"></script>
    <script src="../assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="../assets/plugins/pace/pace.js"></script>
    <script src="../assets/scripts/medaid.js"></script>

	<!--     Page-Level Plugin Scripts--> 
    <!--    Table JS-->
	<script src="../assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
</body>

</html>
