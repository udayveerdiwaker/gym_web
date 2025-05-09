<?php
include 'admin_panel.php';
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM pages WHERE id=$id");
    header('Location: pages_table.php');
}
$pages = $conn->query("SELECT * FROM pages");
?>

<style>
    :root {
        --primary-color: #2a4365;
        /* Deep blue */
        --secondary-color: #e53e3e;
        /* Vibrant red */
        --accent-color: #f6ad55;
        /* Energetic orange */
        --light-color: #f7fafc;
        --dark-color: #1a202c;
    }

    body {
        background-color: #edf2f7;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .container {
        max-width: 1200px;
    }

    h2 {
        color: var(--dark-color);
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        border-bottom: 3px solid var(--secondary-color);
        padding-bottom: 10px;
        display: inline-block;
    }

    .table {
        width: 100%;
        margin-bottom: 2rem;
        background-color: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .table thead {
        background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
        color: white;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 1px;
    }

    .table th {
        padding: 15px;
        font-weight: 600;
    }

    .table td {
        padding: 12px 15px;
        vertical-align: middle;
        border-top: 1px solid #e2e8f0;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(246, 173, 85, 0.05);
    }

    .table-striped tbody tr:hover {
        background-color: rgba(46, 134, 222, 0.1);
        transform: scale(1.01);
        transition: all 0.2s ease;
    }

    .btn {
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        border-radius: 4px;
        padding: 8px 15px;
        font-size: 0.8rem;
        border: none;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .btn-sm {
        padding: 6px 12px;
        font-size: 0.75rem;
    }

    .btn-warning {
        background-color: var(--accent-color);
        color: var(--dark-color);
    }

    .btn-warning:hover {
        background-color: #ed8936;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(246, 173, 85, 0.3);
    }

    .btn-danger {
        background-color: var(--secondary-color);
    }

    .btn-danger:hover {
        background-color: #c53030;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(229, 62, 62, 0.3);
    }

    .btn-success {
        background-color: #38a169;
    }

    .btn-success:hover {
        background-color: #2f855a;
        transform: translateY(-2px);
        box-shadow: 0 4px 8px rgba(56, 161, 105, 0.3);
    }

    .btn-block {
        display: block;
        width: 100%;
        padding: 12px;
        font-size: 1rem;
    }

    .action-buttons {
        white-space: nowrap;
    }

    .content-preview {
        color: #4a5568;
        line-height: 1.5;
    }

    .container {
        animation: fadeIn 0.5s ease-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<div class="container p-4 mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Page Management</h2>
        <a href="add_pages.php" class="btn btn-success">
            <i class="fas fa-plus-circle"></i> Create New Page
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Content Preview</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($page = $pages->fetch_assoc()) { ?>
                        <tr>
                            <td class="font-weight-bold"><?php echo htmlspecialchars($page['title']); ?></td>
                            <td class="content-preview"><?php echo htmlspecialchars(substr($page['content'], 0, 100)) . '...'; ?></td>
                            <td class="action-buttons text-center">
                                <a href="about_update.php?edit=<?php echo $page['id']; ?>" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <a href="pages_table.php?delete=<?php echo $page['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this page?');">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>