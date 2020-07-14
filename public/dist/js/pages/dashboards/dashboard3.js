            /*
Template Name: Material Admin
Author: Wrappixel
Email: niravjoshi87@gmail.com
File: js
*/
$(function() {
    "use strict";

    // ============================================================== 
    // sales ratio
    // ============================================================== 
	
	var d = new Date();
	var n = d.getMonth() + 1;
	
    var chartSales = new Chartist.Line('.sales5', {
        labels: window.sale_labels[n],
        series: window.sales_counts
    }, {
        low: 0,
        high: window.axisYmax,
        showArea: true,
        fullWidth: true,
        plugins: [
            Chartist.plugins.tooltip(),

			Chartist.plugins.ctAxisTitle({
			  axisX: {
				axisTitle: 'Дни месяца',
				axisClass: 'ct-axis-title',
				offset: {
				  x: 0,
				  y: 30
				},
				textAnchor: 'middle'
			  },
			  axisY: {
				axisTitle: 'Количество продаж',
				axisClass: 'ct-axis-title-Y',
				offset: {
				  x: 0,
				  y: -35
				},
				textAnchor: 'end',
				flipTitle: false
			  }
			})
		],
        axisX: {
		},
        axisY: {
            onlyInteger: true,
            scaleMinSpace: 40,
            offset: 20,
            labelInterpolationFnc: function(value) {
                return (value / 1) + '';
            }
        },

    });
	
	// Sales chartlist select events
	
	$('.sales-chartlist-select-month').on('change', function() {
		
		var month_id = parseInt( $(this).val() );
		var type_id = parseInt( $('.sales-chartlist-select-AxeType').val() );
		
		if (type_id == 1) {
			
			chartSales.update(
				{	
					labels: window.sale_labels[ month_id ],
					series: [ 
						window.sales_by_months[ month_id ]['silver'],
						window.sales_by_months[ month_id ]['platinum'],
						window.sales_by_months[ month_id ]['gold'],
					]
				}, 
				{
					low: 0,
					high: window.axisYmax,
					showArea: true,
					fullWidth: true,
					plugins: [
						Chartist.plugins.tooltip(),

						Chartist.plugins.ctAxisTitle({
						  axisX: {
							axisTitle: 'Дни месяца',
							axisClass: 'ct-axis-title',
							offset: {
							  x: 0,
							  y: 30
							},
							textAnchor: 'middle'
						  },
						  axisY: {
							axisTitle: 'Количество продаж',
							axisClass: 'ct-axis-title-Y',
							offset: {
							  x: 0,
							  y: -35
							},
							textAnchor: 'end',
							flipTitle: false
						  }
						})
					],
					axisX: {
					},
					axisY: {
						onlyInteger: true,
						scaleMinSpace: 40,
						offset: 20,
						labelInterpolationFnc: function(value) {
							return (value / 1) + '';
						}
					},

				},
				false
			);
			
			$('.ct-axis-title-Y').text('Количество продаж');
		}
		
		if (type_id == 2) {
			
			chartSales.update(
				{	
					labels: window.sale_labels[ month_id ],
					series: [ 
						window.rev_by_months[ month_id ]['silver'],
						window.rev_by_months[ month_id ]['platinum'],
						window.rev_by_months[ month_id ]['gold'],
					]
				},
				{
					chartPadding: {
						left: 50
					},
					low: 0,
					high: window.intRevAxisYmax,
					showArea: true,
					fullWidth: false,
					plugins: [
						Chartist.plugins.tooltip(),
					],
					axisX: {
					},
					axisY: {
						onlyInteger: true,
						scaleMinSpace: 40,
						offset: 20,
						labelInterpolationFnc: function(value) {
							return (value / 1) + '';
						}
					},

				},
				false
			);
			
			$('.ct-axis-title-Y').text('Доход').attr('x', '-70');
			$('.ct-axis-title-Y').text('Доход').attr('y', '50');
		}
		
	});
		
	$('.sales-chartlist-select-AxeType').on('change', function() {
		
		var type_id = $(this).val();
		var month_id = parseInt( $('.sales-chartlist-select-month').val() );
		
		if (type_id == 1) {
			
			chartSales.update(
				{	
					labels: window.sale_labels[ month_id ],
					series: [ 
						window.sales_by_months[ month_id ]['silver'],
						window.sales_by_months[ month_id ]['platinum'],
						window.sales_by_months[ month_id ]['gold'],
					]
				}, 
				{
					low: 0,
					high: window.axisYmax,
					showArea: true,
					fullWidth: true,
					plugins: [
						Chartist.plugins.tooltip(),

						Chartist.plugins.ctAxisTitle({
						  axisX: {
							axisTitle: 'Дни месяца',
							axisClass: 'ct-axis-title',
							offset: {
							  x: 0,
							  y: 30
							},
							textAnchor: 'middle'
						  },
						  axisY: {
							axisTitle: 'Количество продаж',
							axisClass: 'ct-axis-title-Y',
							offset: {
							  x: 0,
							  y: -35
							},
							textAnchor: 'end',
							flipTitle: false
						  }
						})
					],
					axisX: {
					},
					axisY: {
						onlyInteger: true,
						scaleMinSpace: 40,
						offset: 20,
						labelInterpolationFnc: function(value) {
							return (value / 1) + '';
						}
					},

				},
				false
			);
			
			$('.ct-axis-title-Y').text('Количество продаж');
		}
		
		if (type_id == 2) {
			
			chartSales.update(
				{	
					labels: window.sale_labels[ month_id ],
					series: [ 
						window.rev_by_months[ month_id ]['silver'],
						window.rev_by_months[ month_id ]['platinum'],
						window.rev_by_months[ month_id ]['gold'],
					]
				},
				{
					chartPadding: {
						left: 50
					},
					low: 0,
					high: window.intRevAxisYmax,
					showArea: true,
					fullWidth: false,
					plugins: [
						Chartist.plugins.tooltip(),
					],
					axisX: {
					},
					axisY: {
						onlyInteger: true,
						scaleMinSpace: 40,
						offset: 20,
						labelInterpolationFnc: function(value) {
							return (value / 1) + '';
						}
					},

				},
				false
			);
			
			$('.ct-axis-title-Y').text('Доход').attr('x', '-70');
			$('.ct-axis-title-Y').text('Доход').attr('y', '50');
		}
	});
	
	/// Sales chartlist select events
	

    // Offset x1 a tiny amount so that the straight stroke gets a bounding box
    // Straight lines don't get a bounding box 
    // Last remark on -> http://www.w3.org/TR/SVG11/coords.html#ObjectBoundingBox
    chartSales.on('draw', function(ctx) {
        if (ctx.type === 'area') {
            ctx.element.attr({
                x1: ctx.x1 + 0.001
            });
        }
    });

    // Create the gradient definition on created event (always after chart re-render)
    chartSales.on('created', function(ctx) {
        var defs = ctx.svg.elem('defs');
        defs.elem('linearGradient', {
            id: 'gradient',
            x1: 0,
            y1: 1,
            x2: 0,
            y2: 0
        }).elem('stop', {
            offset: 0,
            'stop-color': 'rgba(255, 255, 255, 1)'
        }).parent().elem('stop', {
            offset: 1,
            'stop-color': 'rgba(64, 196, 255, 1)'
        });
    });


    var chart = [chartSales];

    // ============================================================== 
    // weather
    // ============================================================== 
	
	/*
    var chart = c3.generate({
        bindto: '.weather-report',
        data: {
            columns: [
                ['Day 1', 21, 15, 30, 45, 15]
            ],
            type: 'spline'
        },
        axis: {
            y: {
                show: false,
                tick: {
                    count: 0,
                    outer: false
                }
            },
            x: {
                show: false,
            }
        },
        padding: {
            top: 0,
            right: -8,
            bottom: -15,
            left: -8,
        },
        point: {
            r: 2,
        },
        legend: {
            hide: true
        },
        color: {
            pattern: ['#fff']
        }

    });
	*/
	
    // ============================================================== 
    // campaign status
    // ============================================================== 

	var colorChartGroupsPattern = ['#1f77b4', '#aec7e8', '#ff7f0e', '#ffbb78', '#2ca02c', '#98df8a', '#d62728', '#ff9896', '#9467bd', '#c5b0d5', '#8c564b', '#c49c94', '#e377c2', '#f7b6d2', '#7f7f7f', '#c7c7c7', '#bcbd22', '#dbdb8d', '#17becf', '#9edae5'];

	var chart_productGroups = c3.generate({
        bindto: '.status',
        data: {
            columns: window.dataColumns[ window.strCurrentMonth ][1] ,
            type: 'donut'
        },
        donut: {
            label: {
                show: false
            },
            title: "Сводка",
            width: 35,

        },

        legend: {
            hide: true
                //or hide: 'data1'
                //or hide: ['data1', 'data2']
        },
        color: {
            pattern: colorChartGroupsPattern
        }
    });
	
	$('.coloredGroupsInfo').each(function(i, e) {
		$(e).find('i.fa-circle').css('color', colorChartGroupsPattern[i]);
	});
	
	// Types chart circle select events
	$('.sales-chartlist-select-monthTypeChart').on('change', function() {
		var material_id = parseInt( $('.sales-chartlist-select-material').val() );
		var month_id =  parseInt($(this).val());

		chart_productGroups.load({
			columns: window.dataColumns[ month_id ][ material_id ],
			unload: ''
		});
		
		$('.GroupsByMaterialsInfo').text('');
		var html = '';
		
		window.dataColumns[ month_id ][ material_id ].forEach( function(item, i) {
			html += '<div class="col-3 border-right coloredGroupsInfo">';
			html += '<i class="fa fa-circle" style="color:'+colorChartGroupsPattern[i]+';"></i> ';
			html += '<span>'+item[1]+'</span>';
			html += '<h4 class="mb-0 font-medium">'+item[0]+'</h4>';
			html += '</div>';
		});
		
		$('.GroupsByMaterialsInfo').html( html );
	});
	
	$('.sales-chartlist-select-material').on('change', function() {
		var material_id = $(this).val();
		var month_id = parseInt( $('.sales-chartlist-select-monthTypeChart').val() );
		
		chart_productGroups.load({
			columns: window.dataColumns[ month_id ][ material_id ],
			unload: ''
		});
		
		$('.GroupsByMaterialsInfo').text('');
		var html = '';
		
		window.dataColumns[ month_id ][ material_id ].forEach( function(item, i) {
			html += '<div class="col-3 border-right coloredGroupsInfo">';
			html += '<i class="fa fa-circle" style="color:'+colorChartGroupsPattern[i]+';"></i> ';
			html += '<span>'+item[1]+'</span>';
			html += '<h4 class="mb-0 font-medium">'+item[0]+'</h4>';
			html += '</div>';
		});
		
		$('.GroupsByMaterialsInfo').html( html );		
	});
	/// Types chart circle select events
	
	
	
    var chartViews = c3.generate({
        bindto: '.stats-views',
        data: {
            columns: window.viewCircle ,
            type: 'donut'
        },
        donut: {
            label: {
                show: false
            },
            title: "Сводка",
            width: 35,
        },

        legend: {
            hide: false
                //or hide: 'data1'
                //or hide: ['data1', 'data2']
        },
        color: {
            pattern: colorChartGroupsPattern
        }
    });
	
	
    var chartViews = new Chartist.Line('.stats-views-details', {
        labels: window.sale_labels[n],
        series: window.views_counts
    }, {
        low: 0,
        high: window.axisYmax,
        showArea: true,
        fullWidth: true,
        plugins: [
            Chartist.plugins.tooltip(),

			Chartist.plugins.ctAxisTitle({
			  axisX: {
				axisTitle: 'Дни месяца',
				axisClass: 'ct-axis-title-Xdays',
				offset: {
				  x: 0,
				  y: 30
				},
				textAnchor: 'middle'
			  },
			  axisY: {
				axisTitle: 'Просмотры',
				axisClass: 'ct-axis-title-Yviews',
				offset: {
				  x: 0,
				  y: -35
				},
				textAnchor: 'end',
				flipTitle: false
			  }
			})
		],
        axisX: {
		},
        axisY: {
            onlyInteger: true,
            scaleMinSpace: 40,
            offset: 20,
            labelInterpolationFnc: function(value) {
                return (value / 1) + '';
            }
        },

    });	

    // ============================================================== 
    // Earnings
    // ============================================================== 
    new Chartist.Bar('.chart1', {
        labels: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн', 'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
        series: [
            [5, 4, 5, 3, 12, 4, 15, 8, 10, 8, 7, 5],
            [4, 10, 5, 4, 8, 3, 3, 4, 9, 7, 10, 4]
        ]
    }, {
        stackBars: true,
        axisY: {
            labelInterpolationFnc: function(value) {
                return (value / 1) + 'k';
            },
            scaleMinSpace: 55
        },  
        axisX: {
            showGrid: false
        },
        plugins: [
            Chartist.plugins.tooltip()
        ],
        seriesBarDistance: 1,
        chartPadding: {
            top: 15,
            right: 15,
            bottom: 5,
            left: 0
        }
    }).on('draw', function(data) {
        if (data.type === 'bar') {
            data.element.attr({
                style: 'stroke-width: 25px'
            });
        }
    });
});