<!-- Optional Footer Content -->
<footer class="bg-light text-center text-lg-start py-1 d-none d-lg-block " style="position: fixed; bottom: 0; width: 100%;">    <div class="text-center p-1">
        &copy; <?= date('Y') ?> Transmed. All rights reserved.
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
<!-- Responsive Extension JS for DataTables -->
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>


<script>
    // Pass the PHP array to JavaScript
const columnsConfig = <?php echo isset($myClass) ? json_encode($myClass::datatable_get_columns_config($is_position??null)) : '[]'; ?>;
    console.log(columnsConfig); // Verify in the console
</script>

<script src="main.js"></script> <!-- Your custom JS file -->


</body>
</html>