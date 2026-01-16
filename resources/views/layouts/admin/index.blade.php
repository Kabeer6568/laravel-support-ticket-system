<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Support Tickets</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    
    @vite(['resources/css/app.css'])
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Header Start -->
<header class="custom-header">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="logo-text">Support System</h2>
            </div>
            <div class="col-md-6 text-right">
                <a href="#" class="btn btn-primary login-btn">
                    <i class="fa fa-sign-in"></i> Login
                </a>
            </div>
        </div>
    </div>
</header>
<!-- Header End -->

<div class="container">
    <section class="content">
        <!-- User Management Table -->
        <div class="row">
            <div class="col-md-12">
                <div class="grid">
                    <div class="grid-header">
                        <span>User Management</span>
                        <div class="grid-tools pull-right">
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addUser">
                                <i class="fa fa-plus"></i> Add User
                            </button>
                        </div>
                    </div>
                    <div class="grid-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Department</th>
                                        <th>Role</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John Williams</td>
                                        <td>jwilliams@example.com</td>
                                        <td>+1 234 567 8901</td>
                                        <td>IT Support</td>
                                        <td><span class="label label-primary">Admin</span></td>
                                        <td class="text-center">
                                            <button class="btn btn-info btn-xs" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button class="btn btn-danger btn-xs" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Lisa Gardner</td>
                                        <td>lgardner@example.com</td>
                                        <td>+1 234 567 8902</td>
                                        <td>Sales</td>
                                        <td><span class="label label-success">Manager</span></td>
                                        <td class="text-center">
                                            <button class="btn btn-info btn-xs" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button class="btn btn-danger btn-xs" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Emma Hernandez</td>
                                        <td>ehernandez@example.com</td>
                                        <td>+1 234 567 8903</td>
                                        <td>Development</td>
                                        <td><span class="label label-info">Developer</span></td>
                                        <td class="text-center">
                                            <button class="btn btn-info btn-xs" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button class="btn btn-danger btn-xs" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tom McKenzie</td>
                                        <td>tmckenzie@example.com</td>
                                        <td>+1 234 567 8904</td>
                                        <td>Customer Service</td>
                                        <td><span class="label label-warning">Support</span></td>
                                        <td class="text-center">
                                            <button class="btn btn-info btn-xs" title="Edit">
                                                <i class="fa fa-edit"></i>
                                            </button>
                                            <button class="btn btn-danger btn-xs" title="Delete">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- BEGIN NAV TICKET -->
            <div class="col-md-3">
                <div class="grid support">
                    <div class="grid-body">
                        <h2>Browse</h2>
                        
                        <hr>
                        
                        <ul>
                            <li><a href="#">Your Tickets<span class="pull-right">52</span></a></li>
                            <li><a href="#">Mentioning you<span class="pull-right">18</span></a></li>
                        </ul>
                        
                        <hr>
                        
                        <p><strong>Labels</strong></p>
                        <ul class="support-label">
                            <li><a href="#"><span class="bg-blue">&nbsp;</span>&nbsp;&nbsp;&nbsp;application<span class="pull-right">2</span></a></li>
                            <li><a href="#"><span class="bg-red">&nbsp;</span>&nbsp;&nbsp;&nbsp;css<span class="pull-right">7</span></a></li>
                            <li><a href="#"><span class="bg-yellow">&nbsp;</span>&nbsp;&nbsp;&nbsp;design<span class="pull-right">128</span></a></li>
                            <li><a href="#"><span class="bg-black">&nbsp;</span>&nbsp;&nbsp;&nbsp;html<span class="pull-right">41</span></a></li>
                            <li><a href="#"><span class="bg-light-blue">&nbsp;</span>&nbsp;&nbsp;&nbsp;javascript<span class="pull-right">22</span></a></li>
                            <li><a href="#"><span class="bg-green">&nbsp;</span>&nbsp;&nbsp;&nbsp;management<span class="pull-right">87</span></a></li>
                            <li><a href="#"><span class="bg-purple">&nbsp;</span>&nbsp;&nbsp;&nbsp;mobile<span class="pull-right">92</span></a></li>
                            <li><a href="#"><span class="bg-teal">&nbsp;</span>&nbsp;&nbsp;&nbsp;php<span class="pull-right">140</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- END NAV TICKET -->
            
            <!-- BEGIN TICKET -->
            <div class="col-md-9">
                <div class="grid support-content">
                    <div class="grid-body">
                        <h2>Issues</h2>
                        
                        <hr>
                        
                        <div class="btn-group">
                            <button type="button" class="btn btn-default active">162 Open</button>
                            <button type="button" class="btn btn-default">95,721 Closed</button>
                        </div>
                        
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> Sort: <strong>Newest</strong> <span class="caret"></span></button>
                            <ul class="dropdown-menu fa-padding" role="menu">
                                <li><a href="#"><i class="fa fa-check"></i> Newest</a></li>
                                <li><a href="#"><i class="fa"> </i> Oldest</a></li>
                                <li><a href="#"><i class="fa"> </i> Recently updated</a></li>
                                <li><a href="#"><i class="fa"> </i> Least recently updated</a></li>
                                <li><a href="#"><i class="fa"> </i> Most commented</a></li>
                                <li><a href="#"><i class="fa"> </i> Least commented</a></li>
                            </ul>
                        </div>
                    
                        <!-- BEGIN NEW TICKET -->
                        <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#newIssue">New Issue</button>
                        <div class="modal fade" id="newIssue" tabindex="-1" role="dialog" aria-labelledby="newIssue" aria-hidden="true">
                            <div class="modal-wrapper">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-blue">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title"><i class="fa fa-pencil"></i> Create New Issue</h4>
                                        </div>
                                        <form action="#" method="post">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <input name="subject" type="text" class="form-control" placeholder="Subject">
                                                </div>
                                                <div class="form-group">
                                                    <input name="department" type="text" class="form-control" placeholder="Department">
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="message" class="form-control" placeholder="Please detail your issue or question" style="height: 120px;"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <input type="file" name="attachment">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>
                                                <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-pencil"></i> Create</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END NEW TICKET -->
                        
                        <div class="padding"></div>
                        
                        <div class="row">
                            <!-- BEGIN TICKET CONTENT -->
                            <div class="col-md-12">
                                <ul class="list-group fa-padding">
                                    <li class="list-group-item" data-toggle="modal" data-target="#issue">
                                        <div class="media">
                                            <i class="fa fa-cog pull-left"></i>
                                            <div class="media-body">
                                                <strong>Add drag and drop config import closes</strong> <span class="label label-danger">IMPORTANT</span><span class="number pull-right"># 13698</span>
                                                <p class="info">Opened by <a href="#">jwilliams</a> 5 hours ago <i class="fa fa-comments"></i> <a href="#">2 comments</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item" data-toggle="modal" data-target="#issue">
                                        <div class="media">
                                            <i class="fa fa-file-o pull-left"></i>
                                            <div class="media-body">
                                                <strong>Document that Helvetica Neue can cause problems on Windows</strong> <span class="label label-success">SUCCESS</span><span class="number pull-right"># 13697</span>
                                                <p class="info">Opened by <a href="#">lgardner</a> 12 hours ago <i class="fa fa-comments"></i> <a href="#">7 comments</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item" data-toggle="modal" data-target="#issue">
                                        <div class="media">
                                            <i class="fa fa-code-fork pull-left"></i>
                                            <div class="media-body">
                                                <strong>Manually triggering dropdown not working</strong> <span class="label label-primary">NOT IMPORTANT</span><span class="number pull-right"># 13695</span>
                                                <p class="info">Opened by <a href="#">ehernandez</a> 19 hours ago <i class="fa fa-comments"></i> <a href="#">14 comments</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item" data-toggle="modal" data-target="#issue">
                                        <div class="media">
                                            <i class="fa fa-code pull-left"></i>
                                            <div class="media-body">
                                                <strong>Add classes for respective directions to affix</strong> <span class="label label-primary">NOT IMPORTANT</span><span class="number pull-right"># 13691</span>
                                                <p class="info">Opened by <a href="#">tmckenzie</a> 1 day ago <i class="fa fa-comments"></i> <a href="#">20 comments</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item" data-toggle="modal" data-target="#issue">
                                        <div class="media">
                                            <i class="fa fa-code pull-left"></i>
                                            <div class="media-body">
                                                <strong>Responsive tables of the horizontal scroll bar</strong> <span class="label label-danger">IMPORTANT</span><span class="number pull-right"># 13680</span>
                                                <p class="info">Opened by <a href="#">tmckenzie</a> 2 days ago <i class="fa fa-comments"></i> <a href="#">5 comments</a></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                
                                <!-- BEGIN DETAIL TICKET -->
                                <div class="modal fade" id="issue" tabindex="-1" role="dialog" aria-labelledby="issue" aria-hidden="true">
                                    <div class="modal-wrapper">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header bg-blue">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    <h4 class="modal-title"><i class="fa fa-cog"></i> Add drag and drop config import closes</h4>
                                                </div>
                                                <form action="#" method="post">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-circle" alt="" width="50">
                                                            </div>
                                                            <div class="col-md-10">
                                                                <p>Issue <strong>#13698</strong> opened by <a href="#">jwilliams</a> 5 hours ago</p>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END DETAIL TICKET -->
                            </div>
                            <!-- END TICKET CONTENT -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END TICKET -->
        </div>
    </section>
</div>

<!-- Add User Modal -->
<div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="addUser" aria-hidden="true">
    <div class="modal-wrapper">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-blue">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title"><i class="fa fa-user-plus"></i> Add New User</h4>
                </div>
                <form action="#" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <input name="name" type="text" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input name="email" type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input name="phone" type="text" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <input name="department" type="text" class="form-control" placeholder="Department">
                        </div>
                        <div class="form-group">
                            <select name="role" class="form-control">
                                <option value="">Select Role</option>
                                <option value="admin">Admin</option>
                                <option value="manager">Manager</option>
                                <option value="developer">Developer</option>
                                <option value="support">Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
                        <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Save User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Footer Start -->
<footer class="custom-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>&copy; 2026 Support System. All rights reserved. | Designed with <i class="fa fa-heart text-danger"></i></p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>