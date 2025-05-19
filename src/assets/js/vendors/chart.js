//
// Chart js
//

const theme = {
	primary: 'var(--dashui-primary)',
	secondary: 'var(--dashui-secondary)',
	success: 'var(--dashui-success)',
	info: 'var(--dashui-info)',
	warning: 'var(--dashui-warning)',
	danger: 'var(--dashui-danger)',
	dark: 'var(--dashui-dark)',
	light: 'var(--dashui-light)',
	white: 'var(--dashui-white)',
	gray100: 'var(--dashui-gray-100)',
	gray200: 'var(--dashui-gray-200)',
	gray300: 'var(--dashui-gray-300)',
	gray400: 'var(--dashui-gray-400)',
	gray500: 'var(--dashui-gray-500)',
	gray600: 'var(--dashui-gray-600)',
	gray700: 'var(--dashui-gray-700)',
	gray800: 'var(--dashui-gray-800)',
	gray900: 'var(--dashui-gray-900)',
	black: 'var(--dashui-black)',
	transparent: 'transparent',
};

// Add theme to the window object
window.theme = theme;

(function () {
	// Perfomance Chart

	'use strict';

	if (document.getElementById('perfomanceChart')) {
		var options = {
			series: [100, 78, 89],
			chart: {
				height: 320,
				type: 'radialBar',
			},
			colors: [window.theme.primary, window.theme.success, window.theme.danger],
			stroke: {
				lineCap: 'round',
			},
			plotOptions: {
				radialBar: {
					startAngle: -168,
					endAngle: -450,
					hollow: {
						size: '55%',
					},
					track: {
						background: 'transaprent',
					},
					dataLabels: {
						show: false,
					},
				},
			},
		};

		var chart = new ApexCharts(document.querySelector('#perfomanceChart'), options);
		chart.render();
	}

	if (document.getElementById('revenueChart')) {
		var options = {
			series: [
				{
					name: 'Current Week',
					data: [31, 40, 28, 51, 42, 109, 100],
				},
				{
					name: 'Past Week',
					data: [11, 32, 45, 32, 34, 52, 41],
				},
			],

			labels: ['Jan', 'Feb', 'March', 'April', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			chart: {
				height: 350,
				type: 'area',
				toolbar: {
					show: false,
				},
			},

			dataLabels: {
				enabled: false,
			},

			markers: {
				size: 5,
				hover: {
					size: 6,
					sizeOffset: 3,
				},
			},
			colors: ['#624bff', '#0dcaf0'],

			stroke: {
				curve: 'smooth',
				width: 2,
			},
			grid: {
				borderColor: window.theme.gray300,
			},
			xaxis: {
				labels: {
					show: true,
					align: 'right',
					minWidth: 0,
					maxWidth: 160,
					style: {
						fontSize: '12px',
						fontWeight: 400,
						colors: [window.theme.gray600],
						fontFamily: '"Inter", "sans-serif"',
					},
				},
				axisBorder: {
					show: true,
					color: window.theme.gray300,
					height: 1,
					width: '100%',
					offsetX: 0,
					offsetY: 0,
				},
				axisTicks: {
					show: true,
					borderType: 'solid',
					color: window.theme.gray300,
					height: 6,
					offsetX: 0,
					offsetY: 0,
				},
			},
			legend: {
				labels: {
					colors: window.theme.gray600,
					useSeriesColors: false,
				},
			},
			yaxis: {
				labels: {
					show: true,
					align: 'right',
					minWidth: 0,
					maxWidth: 160,
					style: {
						fontSize: '12px',
						fontWeight: 400,
						colors: window.theme.gray600,
						fontFamily: '"Inter", "sans-serif"',
					},
				},
			},
		};

		var chart = new ApexCharts(document.querySelector('#revenueChart'), options);
		chart.render();
	}
	// total sale donut chart

	if (document.getElementById('totalSale')) {
		var options = {
			series: [45, 38, 28, 15],
			labels: ['Direct', 'Affiliate', 'Sponsored', 'E-mail'],
			colors: ['#624BFF', '#0EA5E9', '#DC3545', '#F59E0B'],
			chart: {
				type: 'donut',
				height: 377,
			},
			legend: {
				show: false,
			},
			dataLabels: {
				enabled: true,
			},
			plotOptions: {
				pie: {
					donut: {
						size: '70%',
					},
				},
			},
			stroke: {
				width: 0,
			},
			responsive: [
				{
					breakpoint: 1400,
					options: {
						chart: {
							type: 'donut',
							width: 290,
							height: 330,
						},
					},
				},
			],
		};

		var chart = new ApexCharts(document.querySelector('#totalSale'), options);
		chart.render();
	}
	// location map

	if (document.getElementById('locationmap')) {
		const map = new jsVectorMap({
			map: 'world',
			selector: '#locationmap',
			zoomOnScroll: true,
			zoomButtons: true,
			markersSelectable: true,
			markers: [
				{
					name: 'United Kingdom',
					coords: [53.613, -11.6368],
				},
				{
					name: 'India',
					coords: [20.7504374, 73.7276105],
				},
				{
					name: 'United States',
					coords: [37.2580397, -104.657039],
				},
				{
					name: 'Sweden',
					coords: [-25.0304388, 115.2092761],
				},
			],
			markerStyle: {
				initial: {
					fill: ['#624BFF'],
				},
			},
			markerLabelStyle: {
				initial: {
					fontFamily: 'Inter',
					fontSize: 13,
					fontWeight: 500,
					cursor: 'default',
					fill: ['#161C24'],
				},
			},
			labels: {
				markers: {
					render: (marker) => marker.name,
				},
			},
		});
	}
	if (document.getElementById('chartGraphics')) {
		var options = {
			series: [
				{
					name: 'Net Profit',
					data: [44, 55, 57, 56, 61, 58],
				},
				{
					name: 'Revenue',
					data: [76, 85, 101, 98, 87, 105],
				},
			],
			chart: {
				type: 'bar',
				height: 260,
				toolbar: {
					show: false,
				},
			},
			colors: ['#624bff', '#f59e0b'],
			plotOptions: {
				bar: {
					horizontal: false,
					columnWidth: '65%',
					endingShape: 'rounded',
				},
			},
			dataLabels: {
				enabled: false,
			},
			legend: {
				show: false,
			},
			stroke: {
				show: true,
				width: 2,
				colors: ['transparent'],
			},

			xaxis: {
				categories: ['18-35', '25-34', '35-44', '45-54', '55-64', '65+'],
				axisBorder: {
					show: false,
				},
				axisTicks: {
					show: false,
				},
				labels: {
					show: true,
					align: 'right',
					minWidth: 0,
					maxWidth: 160,
					style: {
						fontSize: '12px',
						fontWeight: 400,
						colors: '#475569',
						fontFamily: '"Inter", "sans-serif"',
					},
				},
			},
			yaxis: {
				labels: {
					show: true,
					align: 'right',
					minWidth: 0,
					maxWidth: 160,
					style: {
						fontSize: '12px',
						fontWeight: 400,
						colors: '#475569',
						fontFamily: '"Inter", "sans-serif"',
					},
				},
			},
			grid: {
				show: false,
				borderColor: '#e2e8f0',
			},
			fill: {
				opacity: 1,
			},
			tooltip: {
				y: {},
			},
		};

		var chart = new ApexCharts(document.querySelector('#chartGraphics'), options);
		chart.render();
	}
	// progress chart
	if (document.getElementById('socialTraffic')) {
		var options = {
			series: [83, 24, 12, 10, 8, 4],
			labels: ['Quara', 'Twitter', 'Facebook', 'Yourube', 'Linkedin', 'Reddit'],
			chart: {
				width: 250,
				type: 'donut',
			},
			plotOptions: {
				pie: {
					donut: {
						size: '80%',
					},
				},
			},
			colors: ['#624bff', '#f59e0b', '#198754', '#0ea5e9', '#dc3545', '#20c997'],
			dataLabels: {
				enabled: false,
			},
			legend: {
				show: false,
			},
			stroke: {
				show: true,

				colors: [window.theme.transparent],
			},
			responsive: [
				{
					breakpoint: 768,
					options: {
						chart: {
							width: 200,
						},
						legend: {
							position: 'bottom',
						},
					},
				},
			],
		};

		var chart = new ApexCharts(document.querySelector('#socialTraffic'), options);
		chart.render();
	}
	if (document.getElementById('chartCampaign')) {
		var options = {
			series: [
				{
					name: 'Campaign Sent',
					data: [44, 35, 57, 26, 61, 38, 54, 78, 84, 32],
				},
			],
			chart: {
				type: 'bar',
				height: 60,
				sparkline: {
					enabled: !0,
				},
			},

			colors: ['#624BFF'],
			plotOptions: {
				bar: {
					columnWidth: '60%',
				},
			},
			xaxis: {
				crosshairs: {
					width: 1,
				},
			},
			tooltip: {
				fixed: {
					enabled: !1,
				},
				x: {
					show: !1,
				},
			},
		};

		var chart = new ApexCharts(document.querySelector('#chartCampaign'), options);
		chart.render();
	}
	if (document.getElementById('chartLead')) {
		var options = {
			series: [
				{
					name: 'Leads',
					data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54],
				},
			],
			chart: {
				type: 'line',
				height: 60,
				sparkline: {
					enabled: !0,
				},
			},

			stroke: {
				width: 2,
				curve: 'smooth',
			},
			markers: {
				size: 0,
			},
			colors: ['#198754'],
			tooltip: {
				fixed: {
					enabled: !1,
				},
				x: {
					show: !1,
				},
			},
		};

		var chart = new ApexCharts(document.querySelector('#chartLead'), options);
		chart.render();
	}
	if (document.getElementById('chartDeals')) {
		var options = {
			series: [
				{
					name: 'Deals',
					data: [44, 105, 57, 99, 71, 48, 54, 88, 65, 44],
				},
			],
			chart: {
				type: 'bar',
				height: 60,
				sparkline: {
					enabled: !0,
				},
			},
			colors: ['#f59e0b'],
			plotOptions: {
				bar: {
					columnWidth: '60%',
				},
			},
			xaxis: {
				crosshairs: {
					width: 1,
				},
			},
			tooltip: {
				fixed: {
					enabled: !1,
				},
				x: {
					show: !1,
				},
			},
		};

		var chart = new ApexCharts(document.querySelector('#chartDeals'), options);
		chart.render();
	}
	if (document.getElementById('chartBooked')) {
		var options = {
			series: [
				{
					name: 'Revenue',
					data: [44, 105, 57, 99, 71, 48, 54, 88, 65, 44],
				},
			],
			chart: {
				type: 'bar',
				height: 60,
				sparkline: {
					enabled: !0,
				},
			},
			colors: ['#0ea5e9'],
			plotOptions: {
				bar: {
					columnWidth: '60%',
				},
			},
			xaxis: {
				crosshairs: {
					width: 1,
				},
			},
			tooltip: {
				fixed: {
					enabled: !1,
				},
				x: {
					show: !1,
				},
			},
		};

		var chart = new ApexCharts(document.querySelector('#chartBooked'), options);
		chart.render();
	}
	// progress chart
	if (document.getElementById('chartCampaignEmail')) {
		var options = {
			series: [55, 33, 12],
			labels: ['Total Sent', 'Reached', 'Opened'],
			chart: {
				width: 350,
				type: 'donut',
			},
			colors: ['#f59e0b', '#198754', '#624BFF'],
			plotOptions: {
				pie: {
					donut: {
						size: '74%',
					},
				},
			},
			dataLabels: {
				enabled: false,
			},
			legend: {
				show: false,
			},
			stroke: {
				show: true,

				colors: [window.theme.transparent],
			},
			responsive: [
				{
					breakpoint: 768,
					options: {
						chart: {
							width: 200,
						},
						legend: {
							position: 'bottom',
						},
					},
				},
			],
		};

		var chart = new ApexCharts(document.querySelector('#chartCampaignEmail'), options);
		chart.render();
	}
	if (document.getElementById('chartRevenue')) {
		var options = {
			series: [
				{
					name: 'Current Month',
					type: 'area',
					data: [44, 55, 41, 67, 22, 43, 21, 41, 56, 27, 43],
				},
				{
					name: 'Previous Month',
					type: 'line',
					data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39],
				},
			],
			chart: {
				height: 300,
				type: 'line',
				stacked: false,
				toolbar: {
					show: false,
				},
			},
			legend: {
				show: false,
			},
			grid: {
				borderColor: window.theme.gray300,
			},
			fill: {
				type: 'gradient',
				gradient: {
					shadeIntensity: 1,
					opacityFrom: 0.7,
					opacityTo: 0.9,
					stops: [0, 90, 100],
				},
			},
			colors: ['#624bff', '#198754'],
			stroke: {
				width: [2, 2],
				curve: 'smooth',
				colors: ['#624BFF', '#198754'],
			},
			plotOptions: {
				bar: {
					columnWidth: '50%',
				},
			},

			labels: ['Dec 01', 'Dec 02', 'Dec 03', 'Dec 04', 'Dec 05', 'Dec 06', 'Dec 07', 'Dec 08', 'Dec 09', 'Dec 10', 'Dec 11'],
			markers: {
				size: 0,
			},
			xaxis: {
				labels: {
					style: {
						fontSize: '14px',
						fontWeight: 400,
						colors: '#1e293b',
						fontFamily: '"Inter", "sans-serif"',
					},
				},
				axisBorder: {
					show: true,
					color: window.theme.gray300,
					height: 1,
					width: '100%',
					offsetX: 0,
					offsetY: 0,
				},
				axisTicks: {
					show: true,
					borderType: 'solid',
					color: window.theme.gray300,
					height: 6,
					offsetX: 0,
					offsetY: 0,
				},
			},
			yaxis: {
				labels: {
					style: {
						fontSize: '14px',
						fontWeight: 400,
						colors: '#1e293b',
						fontFamily: '"Inter", "sans-serif"',
					},
				},
			},

			tooltip: {
				shared: true,
				intersect: false,
				y: {
					formatter: function (y) {
						if (typeof y !== 'undefined') {
							return y.toFixed(0) + ' points';
						}
						return y;
					},
				},
			},
		};

		var chart = new ApexCharts(document.querySelector('#chartRevenue'), options);
		chart.render();
	}

	// progress chart
	if (document.getElementById('progressChart')) {
		var options = {
			series: [75],
			chart: {
				height: 350,
				type: 'radialBar',
				toolbar: {
					show: false,
				},
			},
			colors: [window.theme.primary, window.theme.success],
			plotOptions: {
				radialBar: {
					startAngle: -135,
					endAngle: 225,
					hollow: {
						margin: 0,
						size: '70%',
						background: window.theme.white,
						image: undefined,
						imageOffsetX: 0,
						imageOffsetY: 0,
						position: 'front',
						dropShadow: {
							enabled: true,
							top: 3,
							left: 0,
							blur: 4,
							opacity: 0.24,
						},
					},
					track: {
						background: window.theme.white,
						strokeWidth: '67%',
						margin: 0, // margin is in pixels
						dropShadow: {
							enabled: true,
							top: -3,
							left: 0,
							blur: 4,
							opacity: 0.35,
						},
					},

					dataLabels: {
						showOn: 'always',

						name: {
							show: false,
						},
						value: {
							formatter: function (val) {
								return parseInt(val) + '%';
							},
							color: window.theme.gray800,
							fontSize: '48px',
							fontWeight: '700',
							show: true,
						},
					},
				},
			},
			fill: {
				type: 'gradient',
				gradient: {
					shade: 'dark',
					type: 'horizontal',
					shadeIntensity: 0.5,
					gradientToColors: [window.theme.info],
					inverseColors: false,
					opacityFrom: 1,
					opacityTo: 1,
					stops: [0, 100],
				},
			},
			stroke: {
				lineCap: 'round',
			},
		};

		var chart = new ApexCharts(document.querySelector('#progressChart'), options);
		chart.render();
	}
	// task summary chart
	if (document.getElementById('taskSummary')) {
		var options = {
			series: [
				{
					name: 'Closed',
					type: 'column',
					data: [12, 18, 20, 32, 19, 25, 30],
				},
				{
					name: 'New',
					type: 'line',
					data: [20, 32, 28, 50, 38, 35, 49],
				},
			],
			chart: {
				height: 350,
				type: 'line',
				toolbar: {
					show: false,
				},
			},

			plotOptions: {
				bar: {
					horizontal: false,
					columnWidth: '40%',
					borderRadius: 5,
				},
			},
			markers: {
				colors: ['#161C24'],
				fillColor: '#F4F6F8',
			},
			colors: [window.theme.gray300, window.theme.primary],
			legend: {
				show: false,
			},
			stroke: {
				width: [0, 4],
				colors: [window.theme.gray300],
			},
			dataLabels: {
				enabled: true,
				enabledOnSeries: [1],
			},

			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			grid: {
				borderColor: window.theme.gray300,
			},
			xaxis: {
				labels: {
					style: {
						fontSize: '13px',
						fontWeight: 400,
						colors: window.theme.gray800,
						fontFamily: '"Inter", "sans-serif"',
					},
				},
				axisBorder: {
					show: true,
					color: window.theme.gray300,
					height: 1,
					width: '100%',
					offsetX: 0,
					offsetY: 0,
				},
				axisTicks: {
					show: true,
					borderType: 'solid',
					color: window.theme.gray300,
					height: 6,
					offsetX: 0,
					offsetY: 0,
				},
			},
			yaxis: {
				labels: {
					style: {
						fontSize: '13px',
						fontWeight: 400,
						colors: window.theme.gray700,
						fontFamily: '"Inter", "sans-serif"',
					},
				},
			},
		};

		var chart = new ApexCharts(document.querySelector('#taskSummary'), options);
		chart.render();
	}

	// task status chart
	if (document.getElementById('taskStatus')) {
		var options = {
			dataLabels: {
				enabled: false,
			},
			series: [75, 25],
			labels: ['Completed', 'Incomplete'],
			colors: [window.theme.primary, window.theme.info],
			chart: {
				width: 480,
				type: 'donut',
			},
			stroke: {
				show: true,

				colors: [window.theme.transparent],
			},

			plotOptions: {
				pie: {
					expandOnClick: false,
					donut: {
						size: '75%',
					},
				},
			},
			legend: {
				position: 'bottom',
				fontFamily: '"Inter", "sans-serif"',
				fontWeight: 500,
				fontSize: '14px',

				labels: {
					colors: window.theme.gray500,
					useSeriesColors: false,
				},
				markers: {
					width: 8,
					height: 8,
					strokeWidth: 0,
					strokeColor: window.theme.gray600,
					fillColors: undefined,
					radius: 12,
					customHTML: undefined,
					onClick: undefined,
					offsetX: -2,
					offsetY: 1,
				},
				itemMargin: {
					horizontal: 8,
					vertical: 0,
				},
			},
			tooltip: {
				theme: 'light',
				marker: {
					show: true,
				},
				x: {
					show: false,
				},
			},
			states: {
				hover: {
					filter: {
						type: 'none',
					},
				},
			},
			responsive: [
				{
					breakpoint: 1400,
					options: {
						chart: {
							type: 'donut',
							width: 290,
							height: 410,
						},
					},
				},
			],
		};

		var chart = new ApexCharts(document.querySelector('#taskStatus'), options);
		chart.render();
	}
	// section chart
	if (document.getElementById('taskSectionchart')) {
		var options = {
			series: [44, 65, 89, 75],
			chart: {
				height: 400,
				type: 'radialBar',
			},
			legend: {
				show: true,
				fontSize: '14px',
				fontFamily: 'Inter',
				fontWeight: 500,
				position: 'bottom',
				itemMargin: {
					horizontal: 8,
					vertical: 0,
				},
				labels: {
					colors: window.theme.gray800,
					useSeriesColors: false,
				},
				markers: {
					width: 8,
					height: 8,
					offsetY: 1,
					offsetX: -2,
				},
			},
			plotOptions: {
				radialBar: {
					dataLabels: {
						name: {},
						value: {
							fontSize: '24px',
							fontWeight: 600,
							color: window.theme.gray800,
							formatter: function (val) {
								return val;
							},
						},
						total: {
							show: true,
							label: 'Total',
							fontSize: '12px',
							color: window.theme.gray600,
							formatter: function (w) {
								// By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
								return 273;
							},
						},
					},
					track: {
						background: window.theme.gray400,
						margin: 10,
					},
				},
			},
			labels: ['Design', 'Frontend', 'Development', 'Issues'],
			colors: ['#624BFF', '#198754', '#0ea5e9', '#f59e0b'],
		};

		var chart = new ApexCharts(document.querySelector('#taskSectionchart'), options);
		chart.render();
	}

	// prototype chart
	if (document.getElementById('.taskPrototypeChart')) {
		var options = {
			series: [75],
			chart: {
				height: 40,
				width: 40,
				type: 'radialBar',
			},
			grid: {
				show: false,
				padding: {
					left: -15,
					right: -15,
					top: -12,
					bottom: -15,
				},
			},
			colors: [window.theme.info],
			plotOptions: {
				radialBar: {
					hollow: {
						size: '30%',
					},

					dataLabels: {
						showOn: 'always',
						name: {
							show: true,
							fontSize: '11px',
							fontFamily: undefined,
							fontWeight: 600,
							color: undefined,
							offsetY: 4,
						},
						value: {
							show: false,
						},
					},
					track: {
						background: window.theme.gray400,
					},
				},
			},
			stroke: {
				lineCap: 'round',
			},
			labels: ['75%'],
		};
		var chart = new ApexCharts(document.querySelector('.taskPrototypeChart'), options);
		chart.render();
	}

	// task Content chart
	if (document.getElementById('.taskContentChart')) {
		var options = {
			series: [85],
			chart: {
				height: 40,
				width: 40,
				type: 'radialBar',
			},
			grid: {
				show: false,
				padding: {
					left: -15,
					right: -15,
					top: -12,
					bottom: -15,
				},
			},
			colors: [window.theme.danger],
			plotOptions: {
				radialBar: {
					hollow: {
						size: '30%',
					},

					dataLabels: {
						showOn: 'always',
						name: {
							show: true,
							fontSize: '11px',
							fontFamily: undefined,
							fontWeight: 600,
							color: undefined,
							offsetY: 4,
						},
						value: {
							show: false,
						},
					},
					track: {
						background: window.theme.gray400,
					},
				},
			},
			stroke: {
				lineCap: 'round',
			},
			labels: ['85%'],
		};
		var chart = new ApexCharts(document.querySelector('.taskContentChart'), options);
		chart.render();
	}

	// task Figma chart
	if (document.getElementById('.taskFigmaChart')) {
		var options = {
			series: [40],
			chart: {
				height: 40,
				width: 40,
				type: 'radialBar',
			},
			grid: {
				show: false,
				padding: {
					left: -15,
					right: -15,
					top: -12,
					bottom: -15,
				},
			},
			colors: [window.theme.warning],
			plotOptions: {
				radialBar: {
					hollow: {
						size: '30%',
					},

					dataLabels: {
						showOn: 'always',
						name: {
							show: true,
							fontSize: '11px',
							fontFamily: undefined,
							fontWeight: 600,
							color: undefined,
							offsetY: 4,
						},
						value: {
							show: false,
						},
					},
					track: {
						background: window.theme.gray400,
					},
				},
			},
			stroke: {
				lineCap: 'round',
			},
			labels: ['40%'],
		};
		var chart = new ApexCharts(document.querySelector('.taskFigmaChart'), options);
		chart.render();
	}

	// task Interface chart
	if (document.getElementById('.taskInterfaceChart')) {
		var options = {
			series: [35],
			chart: {
				height: 40,
				width: 40,
				type: 'radialBar',
			},
			grid: {
				show: false,
				padding: {
					left: -15,
					right: -15,
					top: -12,
					bottom: -15,
				},
			},
			colors: [window.theme.primary],
			plotOptions: {
				radialBar: {
					hollow: {
						size: '30%',
					},

					dataLabels: {
						showOn: 'always',
						name: {
							show: true,
							fontSize: '11px',
							fontFamily: undefined,
							fontWeight: 600,
							color: undefined,
							offsetY: 4,
						},
						value: {
							show: false,
						},
					},
					track: {
						background: window.theme.gray400,
					},
				},
			},
			stroke: {
				lineCap: 'round',
			},
			labels: ['35%'],
		};
		var chart = new ApexCharts(document.querySelector('.taskInterfaceChart'), options);
		chart.render();
	}

	// task Wireframe chart
	if (document.getElementById('.taskWireframeChart')) {
		var options = {
			series: [65],
			chart: {
				height: 40,
				width: 40,
				type: 'radialBar',
			},
			grid: {
				show: false,
				padding: {
					left: -15,
					right: -15,
					top: -12,
					bottom: -15,
				},
			},
			colors: [window.theme.success],

			plotOptions: {
				radialBar: {
					hollow: {
						size: '30%',
					},

					dataLabels: {
						showOn: 'always',
						name: {
							show: true,
							fontSize: '11px',
							fontFamily: undefined,
							fontWeight: 600,
							color: undefined,
							offsetY: 4,
						},
						value: {
							show: false,
						},
					},
					track: {
						background: window.theme.gray400,
					},
				},
			},
			stroke: {
				lineCap: 'round',
			},
			labels: ['65%'],
		};
		var chart = new ApexCharts(document.querySelector('.taskWireframeChart'), options);
		chart.render();
	}

	// budget Expense chart
	if (document.getElementById('budgetExpenseChart')) {
		var options = {
			series: [
				{
					name: 'Series 1',
					data: [90, 32, 30, 40, 100, 20],
				},
			],
			stroke: {
				show: true,
				width: 2,
				colors: [window.theme.primary],
				dashArray: 0,
			},
			fill: {
				colors: '#754ffe',
				opacity: 0.2,
			},
			colors: [window.theme.primary],
			dataLabels: {
				enabled: true,
				background: {
					enabled: true,
					borderRadius: 2,
				},
			},
			chart: {
				height: 350,
				type: 'radar',
				toolbar: {
					show: false,
				},
			},

			plotOptions: {
				radar: {
					size: 150,
					offsetX: 0,
					offsetY: 0,
					polygons: {
						strokeColors: window.theme.gray300,
						strokeWidth: 1,
						connectorColors: window.theme.gray300,
						fill: {
							colors: undefined,
						},
					},
				},
			},
			xaxis: {
				categories: ['Design', 'SaaS Services', 'Development', 'SEO', 'Entertainment', 'Marketing'],

				labels: {
					show: true,

					style: {
						colors: window.theme.primary,
						fontSize: '14px',
						fontFamily: 'Inter',
						fontWeight: 600,
					},
				},
			},
		};

		var chart = new ApexCharts(document.querySelector('#budgetExpenseChart'), options);
		chart.render();
	}

	// Store chart
	if (document.getElementById('storeOne')) {
		var options = {
			series: [
				{
					data: [1, 6, 14, 48, 18, 15, 47, 45, 65, 19, 22],
				},
			],
			chart: {
				type: 'area',
				height: 80,
				sparkline: {
					enabled: !0,
				},
			},

			fill: {
				type: 'gradient',
				gradient: {
					shadeIntensity: 1,
					inverseColors: !1,
					opacityFrom: 0.45,
					opacityTo: 0.09,
					stops: [20, 100, 100, 100],
				},
			},
			stroke: {
				curve: 'smooth',
				width: 2,
			},
			colors: ['#624BFF'],

			tooltip: {
				fixed: {
					enabled: !1,
				},
				x: {
					show: !1,
				},
				y: {
					title: {
						formatter: function (e) {
							return '';
						},
					},
				},
				marker: {
					show: !1,
				},
			},
		};

		var chart = new ApexCharts(document.querySelector('#storeOne'), options);
		chart.render();
	}

	// Store chart
	if (document.getElementById('storeTwo')) {
		var options = {
			series: [
				{
					data: [45, 20, 8, 42, 30, 5, 35, 79, 22, 54, 64],
				},
			],
			chart: {
				type: 'area',
				height: 80,
				sparkline: {
					enabled: !0,
				},
			},

			fill: {
				type: 'gradient',
				gradient: {
					shadeIntensity: 1,
					inverseColors: !1,
					opacityFrom: 0.45,
					opacityTo: 0.09,
					stops: [20, 100, 100, 100],
				},
			},
			stroke: {
				curve: 'smooth',
				width: 2,
			},
			colors: ['#dc3545'],

			tooltip: {
				fixed: {
					enabled: !1,
				},
				x: {
					show: !1,
				},
				y: {
					title: {
						formatter: function (e) {
							return '';
						},
					},
				},
				marker: {
					show: !1,
				},
			},
		};

		var chart = new ApexCharts(document.querySelector('#storeTwo'), options);
		chart.render();
	}

	// Store chart
	if (document.getElementById('storeThree')) {
		var options = {
			series: [
				{
					data: [2, 14, 2, 47, 42, 15, 35, 75, 20, 67, 89],
				},
			],
			chart: {
				type: 'area',
				height: 80,
				sparkline: {
					enabled: !0,
				},
			},

			fill: {
				type: 'gradient',
				gradient: {
					shadeIntensity: 1,
					inverseColors: !1,
					opacityFrom: 0.45,
					opacityTo: 0.09,
					stops: [20, 100, 100, 100],
				},
			},
			stroke: {
				curve: 'smooth',
				width: 2,
			},
			colors: ['#f59e0b'],

			tooltip: {
				fixed: {
					enabled: !1,
				},
				x: {
					show: !1,
				},
				y: {
					title: {
						formatter: function (e) {
							return '';
						},
					},
				},
				marker: {
					show: !1,
				},
			},
		};

		var chart = new ApexCharts(document.querySelector('#storeThree'), options);
		chart.render();
	}

	// Store chart
	if (document.getElementById('storeFour')) {
		var options = {
			series: [
				{
					data: [26, 15, 48, 12, 47, 19, 35, 19, 85, 68, 50],
				},
			],
			chart: {
				type: 'area',
				height: 80,
				sparkline: {
					enabled: !0,
				},
			},

			fill: {
				type: 'gradient',
				gradient: {
					shadeIntensity: 1,
					inverseColors: !1,
					opacityFrom: 0.45,
					opacityTo: 0.09,
					stops: [20, 100, 100, 100],
				},
			},
			stroke: {
				curve: 'smooth',
				width: 2,
			},
			colors: ['#198754'],

			tooltip: {
				fixed: {
					enabled: !1,
				},
				x: {
					show: !1,
				},
				y: {
					title: {
						formatter: function (e) {
							return '';
						},
					},
				},
				marker: {
					show: !1,
				},
			},
		};

		var chart = new ApexCharts(document.querySelector('#storeFour'), options);
		chart.render();
	}
	// Store chart
	if (document.getElementById('storeFive')) {
		var options = {
			series: [
				{
					data: [60, 67, 12, 49, 6, 78, 63, 51, 33, 8, 16],
				},
			],
			chart: {
				type: 'area',
				height: 80,
				sparkline: {
					enabled: !0,
				},
			},

			fill: {
				type: 'gradient',
				gradient: {
					shadeIntensity: 1,
					inverseColors: !1,
					opacityFrom: 0.45,
					opacityTo: 0.09,
					stops: [20, 100, 100, 100],
				},
			},
			stroke: {
				curve: 'smooth',
				width: 2,
			},
			colors: ['#0ea5e9'],

			tooltip: {
				fixed: {
					enabled: !1,
				},
				x: {
					show: !1,
				},
				y: {
					title: {
						formatter: function (e) {
							return '';
						},
					},
				},
				marker: {
					show: !1,
				},
			},
		};

		var chart = new ApexCharts(document.querySelector('#storeFive'), options);
		chart.render();
	}
	// Store chart
	if (document.getElementById('storeSix')) {
		var options = {
			series: [
				{
					data: [78, 63, 51, 33, 8, 16, 60, 67, 12, 49],
				},
			],
			chart: {
				type: 'area',
				height: 80,
				sparkline: {
					enabled: !0,
				},
			},

			fill: {
				type: 'gradient',
				gradient: {
					shadeIntensity: 1,
					inverseColors: !1,
					opacityFrom: 0.45,
					opacityTo: 0.09,
					stops: [20, 100, 100, 100],
				},
			},
			stroke: {
				curve: 'smooth',
				width: 2,
			},
			colors: ['#fd7e14'],

			tooltip: {
				fixed: {
					enabled: !1,
				},
				x: {
					show: !1,
				},
				y: {
					title: {
						formatter: function (e) {
							return '';
						},
					},
				},
				marker: {
					show: !1,
				},
			},
		};

		var chart = new ApexCharts(document.querySelector('#storeSix'), options);
		chart.render();
	}
	// Store chart
	if (document.getElementById('storeSeven')) {
		var options = {
			series: [
				{
					data: [12, 14, 2, 47, 42, 15, 35, 75, 20, 67, 89],
				},
			],
			chart: {
				type: 'area',
				height: 80,
				sparkline: {
					enabled: !0,
				},
			},

			fill: {
				type: 'gradient',
				gradient: {
					shadeIntensity: 1,
					inverseColors: !1,
					opacityFrom: 0.45,
					opacityTo: 0.09,
					stops: [20, 100, 100, 100],
				},
			},
			stroke: {
				curve: 'smooth',
				width: 2,
			},
			colors: ['#624bff'],

			tooltip: {
				fixed: {
					enabled: !1,
				},
				x: {
					show: !1,
				},
				y: {
					title: {
						formatter: function (e) {
							return '';
						},
					},
				},
				marker: {
					show: !1,
				},
			},
		};

		var chart = new ApexCharts(document.querySelector('#storeSeven'), options);
		chart.render();
	}
	// Store chart
	if (document.getElementById('storeEight')) {
		var options = {
			series: [
				{
					data: [26, 15, 48, 12, 47, 19, 35, 19, 85, 68, 50],
				},
			],
			chart: {
				type: 'area',
				height: 80,
				sparkline: {
					enabled: !0,
				},
			},

			fill: {
				type: 'gradient',
				gradient: {
					shadeIntensity: 1,
					inverseColors: !1,
					opacityFrom: 0.45,
					opacityTo: 0.09,
					stops: [20, 100, 100, 100],
				},
			},
			stroke: {
				curve: 'smooth',
				width: 2,
			},
			colors: ['#637381'],

			tooltip: {
				fixed: {
					enabled: !1,
				},
				x: {
					show: !1,
				},
				y: {
					title: {
						formatter: function (e) {
							return '';
						},
					},
				},
				marker: {
					show: !1,
				},
			},
		};

		var chart = new ApexCharts(document.querySelector('#storeEight'), options);
		chart.render();
	}

	// Visitor blog

	if (document.getElementById('visitorBlog')) {
		var options = {
			series: [
				{
					name: 'Visitor',
					data: [4, 8, 12, 18, 33, 24, 21, 28, 92, 42, 88, 36],
				},
				{
					name: 'Visitor',
					data: [13, 23, 20, 8, 13, 27, 4, 8, 12, 18, 33, 24],
				},
			],
			chart: {
				toolbar: {
					show: false,
				},
				type: 'bar',
				height: 480,
				stacked: true,
			},
			legend: {
				show: false,
			},
			colors: [window.theme.primary, window.theme.gray300],
			plotOptions: {
				bar: {
					horizontal: false,
					columnWidth: '40%',
					borderRadius: 4,
					endingShape: 'rounded',
				},
			},
			dataLabels: {
				enabled: false,
			},
			stroke: {
				show: true,
				width: 1,
				colors: ['transparent'],
			},
			grid: {
				borderColor: window.theme.gray300,
				strokeDashArray: 2,
				xaxis: {
					lines: {
						show: false,
					},
				},
			},
			xaxis: {
				categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
				axisBorder: {
					show: false,
				},
				axisTicks: {
					show: true,
					borderType: 'solid',
					color: window.theme.gray400,
					width: 6,
					offsetX: 0,
					offsetY: 0,
				},
				labels: {
					offsetX: 0,
					offsetY: 5,
					style: {
						fontSize: '13px',
						fontWeight: 400,
						fontFamily: '"Inter", "sans-serif"',
						colors: [window.theme.gray800],
					},
				},
			},
			grid: {
				borderColor: window.theme.gray300,
				strokeDashArray: 3,
				xaxis: {
					lines: {
						show: false,
					},
				},
				yaxis: {
					lines: {
						show: true,
					},
				},
				padding: {
					top: 0,
					right: 0,
					bottom: 0,
					left: -10,
				},
			},
			yaxis: {
				title: {
					text: undefined,
				},
				plotOptions: {
					bar: {
						horizontal: false,
						endingShape: 'rounded',
						columnWidth: '80%',
					},
				},

				labels: {
					style: {
						fontSize: '13px',
						fontWeight: 400,
						fontFamily: '"Inter", "sans-serif"',
						colors: [window.theme.gray800],
					},
					offsetX: -10,
				},
			},
			fill: {
				opacity: 1,
			},
			tooltip: {
				y: {
					formatter: function (val) {
						return val + ' sales ';
					},
				},
				marker: {
					show: true,
				},
			},
		};
		var chart = new ApexCharts(document.querySelector('#visitorBlog'), options);
		chart.render();
	}
	if (document.getElementById('blogTrafficChart')) {
		var options = {
			series: [42, 27, 32],
			labels: ['Search ', 'Referral', 'Direct '],
			chart: {
				type: 'donut',
				width: 300,
			},
			legend: {
				show: false,
			},
			colors: ['#624bff', '#198754', '#0ea5e9'],
			dataLabels: {
				style: {
					fontSize: '12px',
					fontFamily: '"Inter", "sans-serif"',
					fontWeight: 'bold',
					colors: [window.theme.gray200],
				},
				dropShadow: {
					enabled: false,
				},
			},
			stroke: {
				show: true,

				colors: [window.theme.transparent],
			},

			responsive: [
				{
					breakpoint: 480,
					options: {
						chart: {
							width: 200,
						},
					},
				},
			],
		};

		var chart = new ApexCharts(document.querySelector('#blogTrafficChart'), options);
		chart.render();
	}
	// total sale donut chart

	if (document.getElementById('cashFlowChart')) {
		var options = {
			series: [45, 38],
			labels: ['Income', 'Expenses'],
			colors: [window.theme.primary, window.theme.warning],
			chart: {
				type: 'donut',
				height: 240,
			},
			legend: {
				show: false,
			},
			dataLabels: {
				enabled: false,
			},
			plotOptions: {
				pie: {
					donut: {
						size: '80%',
					},
				},
			},
			stroke: {
				width: 0,
			},
			responsive: [
				{
					breakpoint: 1400,
					options: {
						chart: {
							type: 'donut',
							width: 290,
							height: 330,
						},
					},
				},
			],
		};

		var chart = new ApexCharts(document.querySelector('#cashFlowChart'), options);
		chart.render();
	}

	// budget Expense chart
	if (document.getElementById('dealRoportChart')) {
		var options = {
			series: [
				{
					name: 'Won',
					data: [80, 50, 30, 40, 100, 20],
				},
				{
					name: 'Pending',
					data: [20, 30, 40, 80, 20, 80],
				},
				{
					name: 'Loss',
					data: [44, 76, 78, 13, 43, 10],
				},
			],
			chart: {
				height: 350,
				type: 'radar',
				toolbar: {
					show: false,
				},
				dropShadow: {
					enabled: true,
					blur: 1,
					left: 1,
					top: 1,
				},
			},
			legend: {
				show: !0,
				fontWeight: 500,
				offsetX: 0,
				offsetY: 0,
				markers: {
					width: 8,
					height: 8,
					radius: 6,
				},
				itemMargin: {
					horizontal: 10,
					vertical: 0,
				},
			},
			plotOptions: {
				radar: {
					polygons: {
						strokeColors: window.theme.gray300,
						strokeWidth: 1,
						connectorColors: window.theme.gray300,
						fill: {
							colors: undefined,
						},
					},
				},
			},
			markers: {
				size: 0,
			},
			colors: ['#624bff', '#dc3545', '#198754'],
			fill: {
				opacity: 0.2,
			},
			markers: {
				size: 0,
			},
			xaxis: {
				categories: ['2011', '2012', '2013', '2014', '2015', '2016'],
			},
			grid: {
				borderColor: window.theme.gray300,
				xaxis: {
					lines: {
						show: false,
					},
				},
			},
		};

		var chart = new ApexCharts(document.querySelector('#dealRoportChart'), options);
		chart.render();
	}

	// budget Expense chart
	if (document.getElementById('salesForecastChart')) {
		var options = {
			series: [
				{
					name: 'Goal',
					data: [37],
				},
				{
					name: 'Pending Forcast',
					data: [12],
				},
				{
					name: 'Revenue',
					data: [18],
				},
			],
			chart: {
				type: 'bar',
				height: 350,
				toolbar: {
					show: !1,
				},
			},
			plotOptions: {
				bar: {
					horizontal: !1,
					columnWidth: '55%',
				},
			},
			stroke: {
				show: !0,
				width: 5,
				colors: ['transparent'],
			},
			grid: {
				borderColor: window.theme.gray300,
			},
			xaxis: {
				categories: [''],
				axisTicks: {
					show: !1,
					borderType: 'solid',
					color: window.theme.gray400,
					height: 6,
					offsetX: 0,
					offsetY: 0,
				},
				axisBorder: {
					show: true,
					color: window.theme.gray400,
					offsetX: 0,
					offsetY: 0,
				},
				title: {
					text: 'Total Forecasted Value',
					offsetX: 0,
					offsetY: -30,
					style: {
						color: window.theme.gray400,
						fontSize: '12px',
						fontWeight: 400,
						fontFamily: '"Inter", "sans-serif"',
					},
				},
			},
			yaxis: {
				labels: {
					formatter: function (e) {
						return '$' + e;
					},
				},

				tickAmount: 4,
				min: 0,
			},
			fill: {
				opacity: 1,
			},
			legend: {
				show: !0,
				position: 'bottom',
				horizontalAlign: 'center',
				fontWeight: 500,
				offsetX: 0,
				offsetY: -14,
				itemMargin: {
					horizontal: 8,
					vertical: 0,
				},
				markers: {
					width: 10,
					height: 10,
				},
			},
			colors: ['#624bff', '#198754', '#0ea5e9'],
		};

		var chart = new ApexCharts(document.querySelector('#salesForecastChart'), options);
		chart.render();
	}
})();
