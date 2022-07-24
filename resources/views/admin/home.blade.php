@extends('layouts.admin.app')
@section('title', 'Dashboard')
@section('content')



    <div class="contents">

        <div class="container-fluid">
            <div class="social-dash-wrap">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="breadcrumb-main">
                            <h4 class="text-capitalize breadcrumb-title">Dashboard</h4>
                        </div>

                    </div>
                    <div class="col-lg-8 mb-25 col-xxl">
                        <div class="card card-overview border-0">
                            <div class="card-header">
                                <h6>Facebook Overview</h6>
                                <div class="card-extra">
                                    <div class="card-tab btn-group nav nav-tabs">
                                        <a class="btn btn-xs btn-white active border-light" id="f_today-tab"
                                            data-toggle="tab" href="#f_overview-today" role="tab"
                                            area-controls="f_overview" aria-selected="true">Today</a>
                                        <a class="btn btn-xs btn-white border-light" id="f_week-tab" data-toggle="tab"
                                            href="#f_overview-week" role="tab" area-controls="f_overview"
                                            aria-selected="false">Week</a>
                                        <a class="btn btn-xs btn-white border-light" id="f_month-tab" data-toggle="tab"
                                            href="#f_overview-month" role="tab" area-controls="f_overview"
                                            aria-selected="false">Month</a>
                                        <a class="btn btn-xs btn-white border-light" id="f_year-tab" data-toggle="tab"
                                            href="#f_overview-year" role="tab" area-controls="f_overview"
                                            aria-selected="false">Year</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0 pb-0">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="f_overview-today" role=""
                                        aria-labelledby="f_overview-tab">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card-overview__left">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>25,845</h1>
                                                                    <p>Engaged Users</p>
                                                                    <div>
                                                                        <span class="color-success"><i
                                                                                data-feather="trending-up"></i>
                                                                            <strong>25%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartOne"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 br-1">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>2,534</h1>
                                                                    <p>Page Impressions</p>
                                                                    <div>
                                                                        <span class="color-success"><i
                                                                                data-feather="trending-up"></i>
                                                                            <strong>40%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartTwo"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-overview__right">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>2,142</h1>
                                                                    <p>Total Page Likes</p>
                                                                    <div>
                                                                        <span class="color-danger"><i
                                                                                data-feather="trending-down"></i>
                                                                            <strong>15%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartThree"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 co-last">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>1,132</h1>
                                                                    <p>New Page LIke</p>
                                                                    <div>
                                                                        <span class="color-success"><i
                                                                                data-feather="trending-up"></i>
                                                                            <strong>13%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartFour"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="f_overview-week" role=""
                                        aria-labelledby="f_overview-tab">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card-overview__left">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>25,845</h1>
                                                                    <p>Engaged Users</p>
                                                                    <div>
                                                                        <span class="color-success"><i
                                                                                data-feather="trending-up"></i>
                                                                            <strong>25%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartFive"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 br-1">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>92,534</h1>
                                                                    <p>Page Impressions</p>
                                                                    <div>
                                                                        <span class="color-success"><i
                                                                                data-feather="trending-up"></i>
                                                                            <strong>26%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartSix"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-overview__right">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>9,142</h1>
                                                                    <p>Total Page Likes</p>
                                                                    <div>
                                                                        <span class="color-danger"><i
                                                                                data-feather="trending-down"></i>
                                                                            <strong>23%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartSeven"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 co-last">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>432</h1>
                                                                    <p>New Page LIke</p>
                                                                    <div>
                                                                        <span class="color-success"><i
                                                                                data-feather="trending-up"></i>
                                                                            <strong>44%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartEight"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="f_overview-month" role=""
                                        aria-labelledby="f_overview-tab">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card-overview__left">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>25,845</h1>
                                                                    <p>Engaged Users</p>
                                                                    <div>
                                                                        <span class="color-success"><i
                                                                                data-feather="trending-up"></i>
                                                                            <strong>25%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartNine"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 br-1">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>492,534</h1>
                                                                    <p>Page Impressions</p>
                                                                    <div>
                                                                        <span class="color-success"><i
                                                                                data-feather="trending-up"></i>
                                                                            <strong>36%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartTen"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-overview__right">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>12,142</h1>
                                                                    <p>Total Page Likes</p>
                                                                    <div>
                                                                        <span class="color-danger"><i
                                                                                data-feather="trending-down"></i>
                                                                            <strong>13%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartEleven"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 co-last">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>1,432</h1>
                                                                    <p>New Page LIke</p>
                                                                    <div>
                                                                        <span class="color-success"><i
                                                                                data-feather="trending-up"></i>
                                                                            <strong>14%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartTwelve"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="f_overview-year" role=""
                                        aria-labelledby="f_overview-tab">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card-overview__left">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>25,845</h1>
                                                                    <p>Engaged Users</p>
                                                                    <div>
                                                                        <span class="color-success"><i
                                                                                data-feather="trending-up"></i>
                                                                            <strong>25%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartThirteen"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 br-1">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>492,534</h1>
                                                                    <p>Page Impressions</p>
                                                                    <div>
                                                                        <span class="color-success"><i
                                                                                data-feather="trending-up"></i>
                                                                            <strong>36%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartFourteen"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-overview__right">
                                                    <div class="row">
                                                        <div class="col-xl-6 col-lg-12 col-md-6">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>12,142</h1>
                                                                    <p>Total Page Likes</p>
                                                                    <div>
                                                                        <span class="color-danger"><i
                                                                                data-feather="trending-down"></i>
                                                                            <strong>13%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartFifteen"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6 col-lg-12 col-md-6 co-last">
                                                            <div class="overview-single">





                                                                <div class="overview-content">
                                                                    <h1>1,432</h1>
                                                                    <p>New Page LIke</p>
                                                                    <div>
                                                                        <span class="color-success"><i
                                                                                data-feather="trending-up"></i>
                                                                            <strong>14%</strong></span>
                                                                        <small>20,641 (prev)</small>
                                                                    </div>
                                                                </div>

                                                                <div class="overview-single__chart">
                                                                    <div class="parentContainer">


                                                                        <div>
                                                                            <canvas id="lineChartSixteen"></canvas>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- ends: .row -->
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4 mb-25">

                        <div class="card border-0">
                            <div class="card-header">
                                <h6>Twitter Overview</h6>
                                <div class="card-extra">
                                    <ul class="card-tab-links nav-tabs nav">
                                        <li>
                                            <a class="active" href="#to_week" data-toggle="tab" id="to_week-tab"
                                                role="tab" area-controls="to_week" aria-selected="true">Week</a>
                                        </li>
                                        <li>
                                            <a href="#to_month" data-toggle="tab" id="to_month-tab" role="tab"
                                                area-controls="to_month" aria-selected="false">Month</a>
                                        </li>
                                        <li>
                                            <a href="#to_year" data-toggle="tab" id="to_year-tab" role="tab"
                                                area-controls="to_year" aria-selected="false">Year</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body linechart-overview-wrap">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="to_week" role="tabpanel"
                                        aria-labelledby="to_week-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Tweets</span>
                                                <p class="m-0">
                                                    <strong>278</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpOne"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Tweet Impressions</span>
                                                <p class="m-0">
                                                    <strong>78.8k</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpTwo"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>3,015</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpThree"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>5.2</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpFour"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Retweets</span>
                                                <p class="m-0">
                                                    <strong>8,625</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpFive"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="to_month" role="tabpanel"
                                        aria-labelledby="to_month-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Tweets</span>
                                                <p class="m-0">
                                                    <strong>378</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpOneM"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Tweet Impressions</span>
                                                <p class="m-0">
                                                    <strong>88.8k</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpTwoM"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>4,417</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpThreeM"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>7.2</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpFourM"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Retweets</span>
                                                <p class="m-0">
                                                    <strong>10,625</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpFiveM"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="to_year" role="tabpanel"
                                        aria-labelledby="to_year-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Tweets</span>
                                                <p class="m-0">
                                                    <strong>578</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpOneY"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Tweet Impressions</span>
                                                <p class="m-0">
                                                    <strong>78.8k</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpTwoY"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>3,015</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpThreeY"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>5.2</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpFourY"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Retweets</span>
                                                <p class="m-0">
                                                    <strong>8,625</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpFiveY"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ends: .card-body -->
                        </div>

                    </div>
                    <div class="col-md-4 mb-25">

                        <div class="card border-0">
                            <div class="card-header">
                                <h6>Instagram Overview</h6>
                                <div class="card-extra">
                                    <ul class="card-tab-links nav-tabs nav">
                                        <li>
                                            <a class="active" href="#io_week" data-toggle="tab" id="io_week-tab"
                                                role="tab" area-controls="io_week" aria-selected="true">Week</a>
                                        </li>
                                        <li>
                                            <a href="#io_month" data-toggle="tab" id="io_month-tab" role="tab"
                                                area-controls="io_month" aria-selected="false">Month</a>
                                        </li>
                                        <li>
                                            <a href="#io_year" data-toggle="tab" id="io_year-tab" role="tab"
                                                area-controls="io_year" aria-selected="false">Year</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="card-body linechart-overview-wrap">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="io_week" role="tabpanel"
                                        aria-labelledby="io_week-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Likes</span>
                                                <p class="m-0">
                                                    <strong>278</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpSix"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Comments</span>
                                                <p class="m-0">
                                                    <strong>78.8k</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpSeven"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>3,015</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpEight"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>5.2</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpNine"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Total Post</span>
                                                <p class="m-0">
                                                    <strong>8,625</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpTen"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="io_month" role="tabpanel"
                                        aria-labelledby="io_month-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Likes</span>
                                                <p class="m-0">
                                                    <strong>378</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpSixM"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Comments</span>
                                                <p class="m-0">
                                                    <strong>78.8k</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpSevenM"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>3,015</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpEightM"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>5.2</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpNineM"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Total Post</span>
                                                <p class="m-0">
                                                    <strong>8,625</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpTenM"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="io_year" role="tabpanel"
                                        aria-labelledby="io_year-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Likes</span>
                                                <p class="m-0">
                                                    <strong>578</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpSixY"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Comments</span>
                                                <p class="m-0">
                                                    <strong>78.8k</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpSevenY"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>3,015</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpEightY"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>5.2</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpNineY"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Total Post</span>
                                                <p class="m-0">
                                                    <strong>8,625</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharpTenY"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 mb-25">

                        <div class="card border-0">
                            <div class="card-header">
                                <h6>Linkedin Overview</h6>
                                <div class="card-extra">
                                    <ul class="card-tab-links nav-tabs nav">
                                        <li>
                                            <a class="active" href="#lo_week" data-toggle="tab" id="lo_week-tab"
                                                role="tab" area-controls="lo_week" aria-selected="true">Week</a>
                                        </li>
                                        <li>
                                            <a href="#lo_month" data-toggle="tab" id="lo_month-tab" role="tab"
                                                area-controls="lo_week" aria-selected="false">Month</a>
                                        </li>
                                        <li>
                                            <a href="#lo_year" data-toggle="tab" id="lo_year-tab" role="tab"
                                                area-controls="lo_week" aria-selected="false">Year</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                            <div class="card-body linechart-overview-wrap">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="lo_week" role="tabpanel"
                                        aria-labelledby="lo_week-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Likes</span>
                                                <p class="m-0">
                                                    <strong>178</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp11"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Comments</span>
                                                <p class="m-0">
                                                    <strong>78.8k</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp12"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>3,015</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp13"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>5.2</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp14"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Total Post</span>
                                                <p class="m-0">
                                                    <strong>8,625</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp15"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="lo_month" role="tabpanel"
                                        aria-labelledby="lo_month-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Likes</span>
                                                <p class="m-0">
                                                    <strong>378</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp11M"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Comments</span>
                                                <p class="m-0">
                                                    <strong>78.8k</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp12M"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>3,015</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp13M"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>5.2</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp14M"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Total Post</span>
                                                <p class="m-0">
                                                    <strong>8,625</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp15M"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="lo_year" role="tabpanel"
                                        aria-labelledby="lo_year-tab">
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Likes</span>
                                                <p class="m-0">
                                                    <strong>578</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp11Y"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Comments</span>
                                                <p class="m-0">
                                                    <strong>78.8k</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp12Y"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>New Followers</span>
                                                <p class="m-0">
                                                    <strong>3,015</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp13Y"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end mb-3">
                                            <div class="chart-desc">
                                                <span>Engagement Rates</span>
                                                <p class="m-0">
                                                    <strong>5.2</strong>
                                                    <sub class="color-success">
                                                        <i class="la la-arrow-up"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp14Y"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between align-items-end">
                                            <div class="chart-desc">
                                                <span>Total Post</span>
                                                <p class="m-0">
                                                    <strong>8,625</strong>
                                                    <sub class="color-danger">
                                                        <i class="la la-arrow-down"></i> 14%</sub>
                                                </p>
                                            </div>
                                            <div class="border-line-chart">
                                                <div class="parentContainer">


                                                    <div>
                                                        <canvas id="lineChartSharp15Y"></canvas>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
