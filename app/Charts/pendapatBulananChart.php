<?php

namespace App\Charts;

use App\Models\Kategori;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Carbon\Carbon;

class pendapatBulananChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        // $tahun = date('Y');
        // $bulan = date('m');
        // for ($i = 1; $i <= $bulan; $i++) {
        //     $totalPendapatan = Kategori::class()->whereYear('created_at', $tahun)->whereMonth(
        //         'created_at', $i)->sum('jumlah');
        //     $dataChart[] = Carbon::create()->month($i)->format('F');
        //     $dataTotalPendapatan[] = $totalPendapatan;
        // }
        return $this->chart->lineChart()
            ->setTitle('DataPendapatan Bulanan.')
            ->setSubtitle('Total Pendapatan Setiap Bulan.')
            ->addData('Total Pendapatan', [70, 29, 77, 28, 55, 45])
            ->setHeight(400)
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June']);
    }
}
