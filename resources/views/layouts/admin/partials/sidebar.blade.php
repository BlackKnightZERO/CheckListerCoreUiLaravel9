                <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                        <div class="sb-sidenav-menu">
                            <div class="nav">
                                <div class="sb-sidenav-menu-heading">Core</div>
                                <a class="nav-link" href="index.html"
                                    ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                    Dashboard</a
                                >
                                <div class="sb-sidenav-menu-heading">Interface</div>
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                                    ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                    Layouts
                                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                                ></a>
                                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                    <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="layout-static.html">Static Navigation</a><a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a></nav>
                                </div>
                            </div>
                        </div>
                        <div class="sb-sidenav-footer">
                            {{-- <div class="small">Now:</div> --}}
                            <div id="currentTime"></div>
                        </div>
                    </nav>
                </div>


                @section('scripts')
                <script>
                    function startTime() {
                      const today = new Date();

                      let date = today.getDate();
                      let month = today.getMonth();
                      let year = today.getFullYear();

                      let h = today.getHours();
                      let m = today.getMinutes();
                      let s = today.getSeconds();
                      m = checkTime(m);
                      s = checkTime(s);
                      let output = `${date}/${month}/${year} _ ${h}:${m}:${s}`;
                    //   document.getElementById('currentTime').innerHTML =  h + ":" + m + ":" + s + " Date: " +date+"/"+month+"/"+year;
                      document.getElementById('currentTime').innerHTML =  output;
                      setTimeout(startTime, 1000);
                    }
                    
                    function checkTime(i) {
                      if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
                      return i;
                    }
                    </script>
                @endsection