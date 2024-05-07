@extends('admin.components.dashboard')
@section('content')
    <div class="row mt-4">
        <div class="col-sm-3">
            <div>
                <h4>Thống kê doanh thu</h4>
            </div>
            <form action="{{ route('thongke') }}" method="post">
                <div class="form-group">
                    @csrf
                    <label for="start_date">Ngày bắt đầu:</label>
                    <input class="form-control " type="month" id="start_date" name="start_date" max="<?php echo date('Y-m'); ?>"
                        required>

                </div>
                <div class="form-group">
                    <label for="end_date">Ngày kết thúc:</label>
                    <input class="form-control " type="month" id="end_date" name="end_date" max="<?php echo date('Y-m'); ?>"
                        value="<?php echo date('Y-m'); ?>" required>
                </div>
                <div>
                    <button class="btn btn-primary btn-sm" type="submit">Thống kê</button>
                </div>
            </form>

        </div>
        <div class="col-sm-9 ">
            <canvas id="revenueChart" width="800" height="400"></canvas>

        </div>

    </div>
    {{-- <div class="row">
        <canvas id="revenueChart1" width="800" height="400"></canvas>
    </div> --}}
@endsection
@section('script')
    <script>
        $('input[name="start_date"]').change(function() {
            const val = $(this).val();
            $('input[name="end_date"]').prop('min', val);
        })

        // const data = {!! json_encode($data) !!};
        // console.log(typeof [{!! json_encode($labels) !!}]);
        // console.log(data);

        // Tạo biểu đồ cột
        var ctx = document.getElementById('revenueChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! json_encode($labels) !!},
                datasets: {!! json_encode($data) !!}
            },
            options: {
                scales: {
                    y: {
                        ticks: {
                            stepSize: 1, // Đặt bước tối thiểu giữa các giá trị trục Y là 1
                            beginAtZero: true // Đảm bảo rằng trục Y không bắt đầu từ 0
                        }
                    }
                }
            }
        });
        // const data1 = {!! json_encode($data1) !!};
        // console.log(typeof [{!! json_encode($labels) !!}]);
        // console.log(data);

        // Tạo biểu đồ cột
        // var ctx = document.getElementById('revenueChart1').getContext('2d');
        // var myChart = new Chart(ctx, {
        //     type: 'line',
        //     data: {
        //         labels: {!! json_encode($labels) !!},
        //         datasets: {!! json_encode($data1) !!}
        //     },
        //     options: {
        //         scales: {
        //             y: {
        //                 beginAtZero: true
        //             }
        //         }
        //     }
        // });
        // // });
    </script>
@endsection
