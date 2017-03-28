            $('#tbl_terapias').bootstrapTable({
                        method: 'get',
                        url: '',
                        cache: false,
                        striped: true,
                        pagination: false,
                        search: true,
                        showColumns: true,
                        showRefresh: true,
                        showToggle: true,
                        minimumCountColumns: 4,
                        height: 300,
                        clickToSelect: false,
                        columns: [{
                            field: 'nombre',
                            title: 'ALUMNO',
                            align: 'center',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        },{
                            field: 'total',
                            title: 'TOTAL',
                            align: 'center',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        },{
                            field: 'fisico',
                            title: 'FISICO',
                            align: 'center',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        },{
                            field: 'verbal',
                            title: 'VERBAL',
                            align: 'center',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        },{
                            field: 'social',
                            title: 'SOCIAL',
                            align: 'center',
                            valign: 'middle',
                            sortable: true,
                            visible: true,
                        }]
                    });