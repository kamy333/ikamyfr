<?php
$javascript = $javascript ?? '';

?>

</div> <!-- closes tag in nav Add padding to prevent content overlap with the fixed navbar -->

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap Bundle with Popper for Bootstrap 5.3 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery UI JS (for autocomplete functionality) -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="../../../assets/js/course-autocomplete.js"></script> <!-- Your custom JS file -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
<!-- Responsive Extension JS for DataTables -->
<script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>


</body>
</html>

<?php if (isset($database)) {
    $database->close_connection();
} ?>
