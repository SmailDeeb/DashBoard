import './bootstrap';

window.onload = function() {
    $('.show-report').on('click', function () {
        let report = $(this).data('report');

        $('#from').text(report.from);
        $('#about').text(report.about);
        $('#content').text(report.content);
        // $('#readedBtn').attr('href', '/report/mark-as-read/' + report.id);
        // $('#archivedBtn').attr('href', '/report/delete/' + report.id);
        $('#readedForm').attr('action', '/report/mark-as-read/' + report.id);
        $('#archivedForm').attr('action', '/report/delete/' + report.id);
        $('#restoreForm').attr('action', '/report/restore/' + report.id);
        console.log($(this).data('report'));
    });
}

// from - about - context