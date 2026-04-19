/**
 * Draw bar chart for in and out stock of month
 * Find to div id ChartExportInMonth
 */
const _chartExportInMonth = document.getElementById('chartExportInMonth');

new Chart(_chartExportInMonth, {
  type: 'bar',
  data: {
    labels: ['Ngày 01', 'Ngày 02', 'Ngày 03', 'Ngày 04', 'Ngày 05'],
    datasets: [
        {
            label: 'Đơn nhập 01-08-2025',
            data: [120, 150, 180, 90, 200],
            backgroundColor: 'rgba(54, 162, 235, 0.7)',
        },
        {
            label: 'Đơn xuất 01-08-2025',
            data: [100, 140, 160, 120, 250],
            backgroundColor: 'rgba(255, 99, 132, 0.7)',
        }
    ]
},
    options: {
        scales: {
        y: {
            beginAtZero: true
        }
        }
    }
});

/**
 * Draw pie chart for export and import ratio for per month
 * Find to div id ChartExportInMonth
 */
const _chartImportExportRatio = document.getElementById('chartImportExportRatio');

new Chart(_chartImportExportRatio, {
  type: 'pie',
    data: {
        labels: [
            'Đơn nhập',
            'Đơn xuất'
        ],
        datasets: [{
            label: 'Thống kê tỷ lệ nhập xuất trong tháng.',
            data: [300, 100],
            backgroundColor: [
                'rgb(255, 99, 132)',
                'rgb(255, 205, 86)'
            ],
            hoverOffset: 4
        }]
    },
    options: {
        scales: {
        y: {
            beginAtZero: true
        }
        }
    }
});

/**
 * Draw line chart for interest rate
 * Find to div id ChartExportInMonth
 */
const _chartInterestRate = document.getElementById('chartInterestRate');

new Chart(_chartInterestRate, {
  type: 'line',
  data: {
    labels: ['Ngày 01', 'Ngày 02', 'Ngày 03', 'Ngày 04', 'Ngày 05'],
    datasets: [{
            label: 'Lai xuat theo ngay',
            data: [65, 59, 80, 81, 56 ,55, 40],
            fill: false,
            borderColor: 'rgb(255, 99, 132)',
            tension: 0.1
        }
    ]
},
    options: {
        scales: {
        y: {
            beginAtZero: true
        }
        }
    }
});
/**
 * Draw bar chart for in and out stock of month
 * Find to div id ChartByCategory
 */
const _chartByCategory = document.getElementById('chartByCategory');

new Chart(_chartByCategory, {
  type: 'bar',
  data: {
    labels: ['Laptop','Máy tính', 'Điện thoại', 'Ti vi', 'Phụ kiện', ],
    datasets: [
        {
            label: 'Tổng đơn theo danh mục',
            data: [120,170, 150, 180, 90],
            backgroundColor: 'rgba(54, 162, 235, 0.7)',
        }
    ]
},
    options: {
        scales: {
        y: {
            beginAtZero: true
        }
        }
    }
});