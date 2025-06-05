<?php
include 'admin_panel.php';
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM pages WHERE id=$id");
    header('Location: pages_table.php');
}
$pages = $conn->query("SELECT * FROM pages");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #4f46e5;
            --secondary: #f43f5e;
            --accent: #f59e0b;
            --light: #f8fafc;
            --dark: #1e293b;
            --success: #10b981;
        }

        body {
            background-color: #f1f5f9;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        .page-header {
            border-bottom: 3px solid var(--primary);
            padding-bottom: 0.5rem;
        }

        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .table {
            margin-bottom: 0;
        }

        .table thead {
            background: linear-gradient(135deg, var(--primary), #6366f1);
            color: white;
        }

        .table th {
            padding: 1rem 1.5rem;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.5px;
        }

        .table td {
            padding: 1rem 1.5rem;
            vertical-align: middle;
            border-top: 1px solid #e2e8f0;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(79, 70, 229, 0.02);
        }

        .table-hover tbody tr:hover {
            background-color: rgba(79, 70, 229, 0.05);
        }

        .btn {
            font-weight: 500;
            border-radius: 8px;
            padding: 0.5rem 1rem;
            font-size: 0.85rem;
            transition: all 0.2s ease;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-sm {
            padding: 0.375rem 0.75rem;
        }

        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
        }

        .btn-danger {
            background-color: var(--secondary);
            border-color: var(--secondary);
        }

        .btn-warning {
            background-color: var(--accent);
            border-color: var(--accent);
            color: var(--dark);
        }

        .btn-success {
            background-color: var(--success);
            border-color: var(--success);
        }

        .btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .action-buttons {
            white-space: nowrap;
        }

        .slug-preview {
            color: #64748b;
            font-family: 'Roboto Mono', monospace;
            font-size: 0.9rem;
        }

        .title-preview {
            font-weight: 500;
            color: var(--dark);
        }

        .empty-state {
            padding: 3rem;
            text-align: center;
            color: #64748b;
        }

        .empty-state i {
            font-size: 3rem;
            color: #cbd5e1;
            margin-bottom: 1rem;
        }

        .fade-in {
            animation: fadeIn 0.3s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="container py-4 fade-in">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <h2 class="page-header m-0">Page Management</h2>
                <p class="text-muted mb-0">Manage all your website pages</p>
            </div>
            <a href="add_pages.php" class="btn btn-success">
                <i class="fas fa-plus-circle"></i> New Page
            </a>
        </div>

        <div class="card">
            <?php if ($pages->num_rows > 0): ?>
                <div class="table-responsive">
                    <table class="table table-striped table-hover mb-0">
                        <thead>
                            <tr>
                                <th>Slug</th>
                                <th>Title</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($page = $pages->fetch_assoc()): ?>
                                <tr>
                                    <td class="slug-preview">/<?php echo htmlspecialchars($page['slug']); ?></td>
                                    <td class="title-preview"><?php echo htmlspecialchars($page['title']); ?></td>
                                    <td class="action-buttons text-end">
                                        <a href="update.php?edit=<?php echo $page['id']; ?>" class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <a href="pages_table.php?delete=<?php echo $page['id']; ?>" 
                                         class="btn btn-sm btn-danger delete-btn"
                                         onclick="return confirmDelete(event, '<?php echo htmlspecialchars(addslashes($page['title'])); ?>')">
                                        <i class="fas fa-trash-alt"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <div class="empty-state">
                    <i class="far fa-folder-open"></i>
                    <h4>No Pages Found</h4>
                    <p>Get started by creating your first page</p>
                    <a href="add_pages.php" class="btn btn-primary mt-2">
                        <i class="fas fa-plus"></i> Create Page
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
<!-- Add this JavaScript at the bottom of your page -->
<script>
function confirmDelete(event, pageTitle) {
    event.preventDefault();
    const url = event.currentTarget.getAttribute('href');
    
    Swal.fire({
        title: 'Confirm Deletion',
        html: `Are you sure you want to delete <strong>"${pageTitle}"</strong>?<br><br>
               This action cannot be undone.`,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel',
        reverseButtons: true,
        customClass: {
            confirmButton: 'btn btn-danger mx-2',
            cancelButton: 'btn btn-secondary mx-2'
        },
        buttonsStyling: false
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = url;
        }
    });
    
    return false;
}
</script>

<!-- Add this CSS in your style section -->
<style>
.delete-btn {
    transition: all 0.2s ease;
    position: relative;
    overflow: hidden;
}

.delete-btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 2px 8px rgba(220, 53, 69, 0.3);
}

.delete-btn:active {
    transform: translateY(0);
}

.delete-btn::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 5px;
    height: 5px;
    background: rgba(255, 255, 255, 0.5);
    opacity: 0;
    border-radius: 100%;
    transform: scale(1, 1) translate(-50%);
    transform-origin: 50% 50%;
}

.delete-btn:focus:not(:active)::after {
    animation: ripple 0.6s ease-out;
}

@keyframes ripple {
    0% {
        transform: scale(0, 0);
        opacity: 0.5;
    }
    100% {
        transform: scale(20, 20);
        opacity: 0;
    }
}
</style>

<!-- Add this CDN link in your head section for SweetAlert -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>