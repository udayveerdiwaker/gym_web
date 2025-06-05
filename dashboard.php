<?php
include 'admin_panel.php';
?> <!-- Main Content -->


        <!-- Content Area -->
        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="header-content">
                        <h1 class="page-title">Dashboard Overview</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="header-actions">
                        <button class="btn btn-primary">
                            <i class="fas fa-plus"></i> <span class="btn-text">Add Member</span>
                        </button>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="row stats-grid">
                    <div class="col-xl-3 col-md-6">
                        <div class="stat-card">
                            <div class="stat-icon bg-primary">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="stat-content">
                                <h3>1,254</h3>
                                <p>Total Members</p>
                                <div class="stat-trend positive">
                                    <i class="fas fa-arrow-up"></i> 12% from last month
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="stat-card">
                            <div class="stat-icon bg-success">
                                <i class="fas fa-user-check"></i>
                            </div>
                            <div class="stat-content">
                                <h3>872</h3>
                                <p>Active Members</p>
                                <div class="stat-trend positive">
                                    <i class="fas fa-arrow-up"></i> 8% from last month
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="stat-card">
                            <div class="stat-icon bg-warning">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <div class="stat-content">
                                <h3>$24,560</h3>
                                <p>Monthly Revenue</p>
                                <div class="stat-trend positive">
                                    <i class="fas fa-arrow-up"></i> 15% from last month
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6">
                        <div class="stat-card">
                            <div class="stat-icon bg-info">
                                <i class="fas fa-calendar"></i>
                            </div>
                            <div class="stat-content">
                                <h3>14</h3>
                                <p>Upcoming Classes</p>
                                <div class="stat-trend neutral">
                                    Today
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Members Table -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Recent Members</h3>
                        <div class="card-actions">
                            <div class="search-box">
                                <i class="fas fa-search"></i>
                                <input type="text" placeholder="Search members...">
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                    <i class="fas fa-filter"></i> <span class="filter-text">Filter</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">Active Members</a></li>
                                    <li><a class="dropdown-item" href="#">Pending Members</a></li>
                                    <li><a class="dropdown-item" href="#">Expired Members</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Member ID</th>
                                        <th>Name</th>
                                        <th>Membership</th>
                                        <th>Join Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#GYM001</td>
                                        <td>
                                            <div class="user-info">
                                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="John Smith" class="user-avatar">
                                                <span>John Smith</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-primary-light text-primary">Premium</span></td>
                                        <td>Jan 12, 2023</td>
                                        <td><span class="badge bg-success-light text-success">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-eye"></i> <span class="btn-action-text">View</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#GYM002</td>
                                        <td>
                                            <div class="user-info">
                                                <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah Johnson" class="user-avatar">
                                                <span>Sarah Johnson</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-secondary-light text-secondary">Standard</span></td>
                                        <td>Feb 5, 2023</td>
                                        <td><span class="badge bg-success-light text-success">Active</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-eye"></i> <span class="btn-action-text">View</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>#GYM003</td>
                                        <td>
                                            <div class="user-info">
                                                <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Michael Brown" class="user-avatar">
                                                <span>Michael Brown</span>
                                            </div>
                                        </td>
                                        <td><span class="badge bg-primary-light text-primary">Premium</span></td>
                                        <td>Mar 18, 2023</td>
                                        <td><span class="badge bg-warning-light text-warning">Pending</span></td>
                                        <td>
                                            <button class="btn btn-sm btn-outline-primary">
                                                <i class="fas fa-eye"></i> <span class="btn-action-text">View</span>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="table-footer">
                            <div class="showing-entries">
                                Showing 1 to 3 of 25 entries
                            </div>
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
