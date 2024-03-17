


@extends('layout.app')
@section('content')
<div class="container-fluid mt-5">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Job Dashboard</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                        <li class="breadcrumb-item active">Job Dashboard</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-12">
            <div class="d-flex flex-column h-100">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                        <div class="card card-animate overflow-hidden">
                            <div class="position-absolute start-0" style="z-index: 0;">
                                <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                    <style>
                                        .s0 {
                                            opacity: .05;
                                            fill: var(--vz-success)
                                        }
                                    </style>
                                    <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z"></path>
                                </svg>
                            </div>
                            <div class="card-body" style="z-index:1 ;">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> Total Jobs</p>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="36894">36,894</span></h4>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div id="total_jobs" data-colors="[&quot;--vz-success&quot;]" class="apex-charts" dir="ltr" style="min-height: 88.5px;"><div id="apexchartszx7plc44" class="apexcharts-canvas apexchartszx7plc44 apexcharts-theme-light" style="width: 105px; height: 88.5px;"><svg id="SvgjsSvg1359" width="105" height="88.5" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="105" height="88.5"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"></div></foreignObject><g id="SvgjsG1361" class="apexcharts-inner apexcharts-graphical" transform="translate(8.75, 0)"><defs id="SvgjsDefs1360"><clipPath id="gridRectMaskzx7plc44"><rect id="SvgjsRect1362" width="93.5" height="89.5" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskzx7plc44"></clipPath><clipPath id="nonForecastMaskzx7plc44"></clipPath><clipPath id="gridRectMarkerMaskzx7plc44"><rect id="SvgjsRect1363" width="91.5" height="91.5" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1364" class="apexcharts-radialbar"><g id="SvgjsG1365"><g id="SvgjsG1366" class="apexcharts-tracks"><g id="SvgjsG1367" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 43.75 10.170731707317074 A 33.579268292682926 33.579268292682926 0 1 1 43.74413931210857 10.170732218758573" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.2403658536585365" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 43.75 10.170731707317074 A 33.579268292682926 33.579268292682926 0 1 1 43.74413931210857 10.170732218758573"></path></g></g><g id="SvgjsG1369"><g id="SvgjsG1373" class="apexcharts-series apexcharts-radial-series" seriesName="series-1" rel="1" data:realIndex="0"><path id="SvgjsPath1374" d="M 43.75 10.170731707317074 A 33.579268292682926 33.579268292682926 0 1 1 33.373435438885146 11.81421807782067" fill="none" fill-opacity="0.85" stroke="rgba(0,189,157,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.402439024390244" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="342" data:value="95" index="0" j="0" data:pathOrig="M 43.75 10.170731707317074 A 33.579268292682926 33.579268292682926 0 1 1 33.373435438885146 11.81421807782067"></path></g><circle id="SvgjsCircle1370" r="30.959085365853657" cx="43.75" cy="43.75" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1371" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1372" font-family="Helvetica, Arial, sans-serif" x="43.75" y="51.75" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="600" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">95%</text></g></g></g></g><line id="SvgjsLine1375" x1="0" y1="0" x2="87.5" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1376" x1="0" y1="0" x2="87.5" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g></svg></div></div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!--end col-->
                    <div class="col-xl-6 col-md-6">
                        <!-- card -->
                        <div class="card card-animate overflow-hidden">
                            <div class="position-absolute start-0" style="z-index: 0;">
                                <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                    <style>
                                        .s0 {
                                            opacity: .05;
                                            fill: var(--vz-success)
                                        }
                                    </style>
                                    <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z"></path>
                                </svg>
                            </div>
                            <div class="card-body" style="z-index:1 ;">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> Apply Jobs</p>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="28410">28,410</span></h4>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div id="apply_jobs" data-colors="[&quot;--vz-success&quot;]" class="apex-charts" dir="ltr" style="min-height: 88.5px;"><div id="apexcharts1fgqgz8t" class="apexcharts-canvas apexcharts1fgqgz8t apexcharts-theme-light" style="width: 105px; height: 88.5px;"><svg id="SvgjsSvg1377" width="105" height="88.5" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="105" height="88.5"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"></div></foreignObject><g id="SvgjsG1379" class="apexcharts-inner apexcharts-graphical" transform="translate(8.75, 0)"><defs id="SvgjsDefs1378"><clipPath id="gridRectMask1fgqgz8t"><rect id="SvgjsRect1380" width="93.5" height="89.5" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask1fgqgz8t"></clipPath><clipPath id="nonForecastMask1fgqgz8t"></clipPath><clipPath id="gridRectMarkerMask1fgqgz8t"><rect id="SvgjsRect1381" width="91.5" height="91.5" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1382" class="apexcharts-radialbar"><g id="SvgjsG1383"><g id="SvgjsG1384" class="apexcharts-tracks"><g id="SvgjsG1385" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 43.75 10.170731707317074 A 33.579268292682926 33.579268292682926 0 1 1 43.74413931210857 10.170732218758573" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.2403658536585365" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 43.75 10.170731707317074 A 33.579268292682926 33.579268292682926 0 1 1 43.74413931210857 10.170732218758573"></path></g></g><g id="SvgjsG1387"><g id="SvgjsG1391" class="apexcharts-series apexcharts-radial-series" seriesName="series-1" rel="1" data:realIndex="0"><path id="SvgjsPath1392" d="M 43.75 10.170731707317074 A 33.579268292682926 33.579268292682926 0 1 1 37.34277355159368 10.787677443620218" fill="none" fill-opacity="0.85" stroke="rgba(0,189,157,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.402439024390244" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="349" data:value="97" index="0" j="0" data:pathOrig="M 43.75 10.170731707317074 A 33.579268292682926 33.579268292682926 0 1 1 37.34277355159368 10.787677443620218"></path></g><circle id="SvgjsCircle1388" r="30.959085365853657" cx="43.75" cy="43.75" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1389" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1390" font-family="Helvetica, Arial, sans-serif" x="43.75" y="51.75" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="600" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">97%</text></g></g></g></g><line id="SvgjsLine1393" x1="0" y1="0" x2="87.5" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1394" x1="0" y1="0" x2="87.5" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g></svg></div></div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-6 col-md-6">
                        <!-- card -->
                        <div class="card card-animate overflow-hidden">
                            <div class="position-absolute start-0" style="z-index: 0;">
                                <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                    <style>
                                        .s0 {
                                            opacity: .05;
                                            fill: var(--vz-success)
                                        }
                                    </style>
                                    <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z"></path>
                                </svg>
                            </div>
                            <div class="card-body" style="z-index:1 ;">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-3">New Jobs</p>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="4305">4,305</span></h4>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div id="new_jobs_chart" data-colors="[&quot;--vz-success&quot;]" class="apex-charts" dir="ltr" style="min-height: 88.5px;"><div id="apexchartsyaddosja" class="apexcharts-canvas apexchartsyaddosja apexcharts-theme-light" style="width: 105px; height: 88.5px;"><svg id="SvgjsSvg1449" width="105" height="88.5" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="105" height="88.5"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"></div></foreignObject><g id="SvgjsG1451" class="apexcharts-inner apexcharts-graphical" transform="translate(8.75, 0)"><defs id="SvgjsDefs1450"><clipPath id="gridRectMaskyaddosja"><rect id="SvgjsRect1452" width="93.5" height="89.5" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskyaddosja"></clipPath><clipPath id="nonForecastMaskyaddosja"></clipPath><clipPath id="gridRectMarkerMaskyaddosja"><rect id="SvgjsRect1453" width="91.5" height="91.5" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1454" class="apexcharts-radialbar"><g id="SvgjsG1455"><g id="SvgjsG1456" class="apexcharts-tracks"><g id="SvgjsG1457" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 43.75 10.170731707317074 A 33.579268292682926 33.579268292682926 0 1 1 43.74413931210857 10.170732218758573" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.2403658536585365" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 43.75 10.170731707317074 A 33.579268292682926 33.579268292682926 0 1 1 43.74413931210857 10.170732218758573"></path></g></g><g id="SvgjsG1459"><g id="SvgjsG1463" class="apexcharts-series apexcharts-radial-series" seriesName="series-1" rel="1" data:realIndex="0"><path id="SvgjsPath1464" d="M 43.75 10.170731707317074 A 33.579268292682926 33.579268292682926 0 1 1 11.81421807782067 33.37343543888514" fill="none" fill-opacity="0.85" stroke="rgba(0,189,157,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.402439024390244" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="288" data:value="80" index="0" j="0" data:pathOrig="M 43.75 10.170731707317074 A 33.579268292682926 33.579268292682926 0 1 1 11.81421807782067 33.37343543888514"></path></g><circle id="SvgjsCircle1460" r="30.959085365853657" cx="43.75" cy="43.75" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1461" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1462" font-family="Helvetica, Arial, sans-serif" x="43.75" y="51.75" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="600" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">80%</text></g></g></g></g><line id="SvgjsLine1465" x1="0" y1="0" x2="87.5" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1466" x1="0" y1="0" x2="87.5" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g></svg></div></div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-6 col-md-6">
                        <!-- card -->
                        <div class="card card-animate overflow-hidden">
                            <div class="position-absolute start-0" style="z-index: 0;">
                                <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                    <style>
                                        .s0 {
                                            opacity: .05;
                                            fill: var(--vz-success)
                                        }
                                    </style>
                                    <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z"></path>
                                </svg>
                            </div>
                            <div class="card-body" style="z-index:1 ;">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> Interview</p>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="5021">5,021</span></h4>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div id="interview_chart" data-colors="[&quot;--vz-danger&quot;]" class="apex-charts" dir="ltr" style="min-height: 88.5px;"><div id="apexchartscyzt3g0w" class="apexcharts-canvas apexchartscyzt3g0w apexcharts-theme-light" style="width: 105px; height: 88.5px;"><svg id="SvgjsSvg1395" width="105" height="88.5" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="105" height="88.5"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"></div></foreignObject><g id="SvgjsG1397" class="apexcharts-inner apexcharts-graphical" transform="translate(8.75, 0)"><defs id="SvgjsDefs1396"><clipPath id="gridRectMaskcyzt3g0w"><rect id="SvgjsRect1398" width="93.5" height="89.5" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskcyzt3g0w"></clipPath><clipPath id="nonForecastMaskcyzt3g0w"></clipPath><clipPath id="gridRectMarkerMaskcyzt3g0w"><rect id="SvgjsRect1399" width="91.5" height="91.5" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1400" class="apexcharts-radialbar"><g id="SvgjsG1401"><g id="SvgjsG1402" class="apexcharts-tracks"><g id="SvgjsG1403" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 43.75 10.170731707317074 A 33.579268292682926 33.579268292682926 0 1 1 43.74413931210857 10.170732218758573" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.2403658536585365" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 43.75 10.170731707317074 A 33.579268292682926 33.579268292682926 0 1 1 43.74413931210857 10.170732218758573"></path></g></g><g id="SvgjsG1405"><g id="SvgjsG1409" class="apexcharts-series apexcharts-radial-series" seriesName="series-1" rel="1" data:realIndex="0"><path id="SvgjsPath1410" d="M 43.75 10.170731707317074 A 33.579268292682926 33.579268292682926 0 1 1 22.165662399123338 18.026788120388957" fill="none" fill-opacity="0.85" stroke="rgba(240,101,72,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.402439024390244" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="320" data:value="89" index="0" j="0" data:pathOrig="M 43.75 10.170731707317074 A 33.579268292682926 33.579268292682926 0 1 1 22.165662399123338 18.026788120388957"></path></g><circle id="SvgjsCircle1406" r="30.959085365853657" cx="43.75" cy="43.75" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1407" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1408" font-family="Helvetica, Arial, sans-serif" x="43.75" y="51.75" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="600" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">89%</text></g></g></g></g><line id="SvgjsLine1411" x1="0" y1="0" x2="87.5" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1412" x1="0" y1="0" x2="87.5" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g></svg></div></div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-xl-6 col-md-6">
                        <div class="card card-animate overflow-hidden">
                            <div class="position-absolute start-0" style="z-index: 0;">
                                <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                    <style>
                                        .s0 {
                                            opacity: .05;
                                            fill: var(--vz-success)
                                        }
                                    </style>
                                    <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z"></path>
                                </svg>
                            </div>
                            <div class="card-body" style="z-index:1 ;">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-3"> Hired</p>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="3948">3,948</span></h4>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div id="hired_chart" data-colors="[&quot;--vz-success&quot;]" class="apex-charts" dir="ltr" style="min-height: 88.5px;"><div id="apexchartskbr18m7g" class="apexcharts-canvas apexchartskbr18m7g apexcharts-theme-light" style="width: 105px; height: 88.5px;"><svg id="SvgjsSvg1413" width="105" height="88.5" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="105" height="88.5"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"></div></foreignObject><g id="SvgjsG1415" class="apexcharts-inner apexcharts-graphical" transform="translate(8.75, 0)"><defs id="SvgjsDefs1414"><clipPath id="gridRectMaskkbr18m7g"><rect id="SvgjsRect1416" width="93.5" height="89.5" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMaskkbr18m7g"></clipPath><clipPath id="nonForecastMaskkbr18m7g"></clipPath><clipPath id="gridRectMarkerMaskkbr18m7g"><rect id="SvgjsRect1417" width="91.5" height="91.5" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1418" class="apexcharts-radialbar"><g id="SvgjsG1419"><g id="SvgjsG1420" class="apexcharts-tracks"><g id="SvgjsG1421" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 43.75 10.170731707317074 A 33.579268292682926 33.579268292682926 0 1 1 43.74413931210857 10.170732218758573" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.2403658536585365" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 43.75 10.170731707317074 A 33.579268292682926 33.579268292682926 0 1 1 43.74413931210857 10.170732218758573"></path></g></g><g id="SvgjsG1423"><g id="SvgjsG1427" class="apexcharts-series apexcharts-radial-series" seriesName="series-1" rel="1" data:realIndex="0"><path id="SvgjsPath1428" d="M 43.75 10.170731707317074 A 33.579268292682926 33.579268292682926 0 1 1 18.026788120388957 65.33433760087667" fill="none" fill-opacity="0.85" stroke="rgba(0,189,157,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.402439024390244" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="230" data:value="64" index="0" j="0" data:pathOrig="M 43.75 10.170731707317074 A 33.579268292682926 33.579268292682926 0 1 1 18.026788120388957 65.33433760087667"></path></g><circle id="SvgjsCircle1424" r="30.959085365853657" cx="43.75" cy="43.75" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1425" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1426" font-family="Helvetica, Arial, sans-serif" x="43.75" y="51.75" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="600" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">64%</text></g></g></g></g><line id="SvgjsLine1429" x1="0" y1="0" x2="87.5" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1430" x1="0" y1="0" x2="87.5" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g></svg></div></div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!--end col-->
                    <div class="col-xl-6 col-md-6">
                        <!-- card -->
                        <div class="card card-animate overflow-hidden">
                            <div class="position-absolute start-0" style="z-index: 0;">
                                <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 120" width="200" height="120">
                                    <style>
                                        .s0 {
                                            opacity: .05;
                                            fill: var(--vz-success)
                                        }
                                    </style>
                                    <path id="Shape 8" class="s0" d="m189.5-25.8c0 0 20.1 46.2-26.7 71.4 0 0-60 15.4-62.3 65.3-2.2 49.8-50.6 59.3-57.8 61.5-7.2 2.3-60.8 0-60.8 0l-11.9-199.4z"></path>
                                </svg>
                            </div>
                            <div class="card-body" style="z-index:1 ;">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Rejected</p>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-0"><span class="counter-value" data-target="1340">1,340</span></h4>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div id="rejected_chart" data-colors="[&quot;--vz-danger&quot;]" class="apex-charts" dir="ltr" style="min-height: 88.5px;"><div id="apexcharts118jtf0dl" class="apexcharts-canvas apexcharts118jtf0dl apexcharts-theme-light" style="width: 105px; height: 88.5px;"><svg id="SvgjsSvg1431" width="105" height="88.5" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="105" height="88.5"><div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"></div></foreignObject><g id="SvgjsG1433" class="apexcharts-inner apexcharts-graphical" transform="translate(8.75, 0)"><defs id="SvgjsDefs1432"><clipPath id="gridRectMask118jtf0dl"><rect id="SvgjsRect1434" width="93.5" height="89.5" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask118jtf0dl"></clipPath><clipPath id="nonForecastMask118jtf0dl"></clipPath><clipPath id="gridRectMarkerMask118jtf0dl"><rect id="SvgjsRect1435" width="91.5" height="91.5" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1436" class="apexcharts-radialbar"><g id="SvgjsG1437"><g id="SvgjsG1438" class="apexcharts-tracks"><g id="SvgjsG1439" class="apexcharts-radialbar-track apexcharts-track" rel="1"><path id="apexcharts-radialbarTrack-0" d="M 43.75 10.170731707317074 A 33.579268292682926 33.579268292682926 0 1 1 43.74413931210857 10.170732218758573" fill="none" fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.2403658536585365" stroke-dasharray="0" class="apexcharts-radialbar-area" data:pathOrig="M 43.75 10.170731707317074 A 33.579268292682926 33.579268292682926 0 1 1 43.74413931210857 10.170732218758573"></path></g></g><g id="SvgjsG1441"><g id="SvgjsG1445" class="apexcharts-series apexcharts-radial-series" seriesName="series-1" rel="1" data:realIndex="0"><path id="SvgjsPath1446" d="M 43.75 10.170731707317074 A 33.579268292682926 33.579268292682926 0 0 1 75.68578192217933 33.37343543888515" fill="none" fill-opacity="0.85" stroke="rgba(240,101,72,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.402439024390244" stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="72" data:value="20" index="0" j="0" data:pathOrig="M 43.75 10.170731707317074 A 33.579268292682926 33.579268292682926 0 0 1 75.68578192217933 33.37343543888515"></path></g><circle id="SvgjsCircle1442" r="30.959085365853657" cx="43.75" cy="43.75" class="apexcharts-radialbar-hollow" fill="transparent"></circle><g id="SvgjsG1443" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)" style="opacity: 1;"><text id="SvgjsText1444" font-family="Helvetica, Arial, sans-serif" x="43.75" y="51.75" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="600" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">20%</text></g></g></g></g><line id="SvgjsLine1447" x1="0" y1="0" x2="87.5" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1448" x1="0" y1="0" x2="87.5" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line></g></svg></div></div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!--end row-->
            </div>
        </div><!--end col-->
   
           
    
 
</div>
@endsection