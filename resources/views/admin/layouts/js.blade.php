<!-- OverlayScrollbars -->
<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js" crossorigin="anonymous"></script>
<!-- Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
<!-- AdminLTE -->
<script src="{{ url('themeadmin/js/adminlte.min.js') }}"></script>

<script>
  const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
  document.addEventListener('DOMContentLoaded', function () {
    const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
    const isMobile = window.innerWidth <= 992;
    if (sidebarWrapper && OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined && !isMobile) {
      OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
        scrollbars: { theme: 'os-theme-light', autoHide: 'leave', clickScroll: true },
      });
    }
  });
</script>

<!-- SortableJS -->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js" crossorigin="anonymous"></script>
<script>
  new Sortable(document.querySelector('.connectedSortable'), { group: 'shared', handle: '.card-header' });
  document.querySelectorAll('.connectedSortable .card-header').forEach(h => h.style.cursor = 'move');
</script>

<!-- ApexCharts -->
<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js" crossorigin="anonymous"></script>
<script>
  const sales_chart = new ApexCharts(document.querySelector('#revenue-chart'), {
    series: [
      { name: 'Digital Goods', data: [28, 48, 40, 19, 86, 27, 90] },
      { name: 'Electronics', data: [65, 59, 80, 81, 56, 55, 40] },
    ],
    chart: { height: 300, type: 'area', toolbar: { show: false } },
    legend: { show: false },
    colors: ['#0d6efd', '#20c997'],
    dataLabels: { enabled: false },
    stroke: { curve: 'smooth' },
    xaxis: {
      type: 'datetime',
      categories: ['2023-01-01','2023-02-01','2023-03-01','2023-04-01','2023-05-01','2023-06-01','2023-07-01'],
    },
    tooltip: { x: { format: 'MMMM yyyy' } },
  });
  sales_chart.render();
</script>

<!-- jsVectorMap -->
<script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js" crossorigin="anonymous"></script>
<script>
  new jsVectorMap({ selector: '#world-map', map: 'world' });

  [
    { el: '#sparkline-1', data: [1000,1200,920,927,931,1027,819,930,1021] },
    { el: '#sparkline-2', data: [515,519,520,522,652,810,370,627,319,630,921] },
    { el: '#sparkline-3', data: [15,19,20,22,33,27,31,27,19,30,21] },
  ].forEach(({ el, data }) => {
    new ApexCharts(document.querySelector(el), {
      series: [{ data }],
      chart: { type: 'area', height: 50, sparkline: { enabled: true } },
      stroke: { curve: 'straight' },
      fill: { opacity: 0.3 },
      yaxis: { min: 0 },
      colors: ['#DCE6EC'],
    }).render();
  });
</script>