<ul class="list">
                <!--ROLE 1-->
                @if(Session::get('id_role')=="1")
                    <li class="header">MAIN NAVIGATION</li>
                    <!-- <li class="active">
                        <a href="/">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li> -->
                    <li>
                        <a href="dashboard">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!-- LKPS -->
                    <li class="header">Laporan Kinerja Program Studi</li>

                    <!-- Cover -->
                            <?php 
                            $cover=DB::table('lkps_cover')
                                        ->join('users','lkps_cover.id_prodi','=','users.id_prodi')
                                        ->select('lkps_cover.*')
                                        ->where('users.id',Session::get('id'))
                                        ->first();
                            ?>
                            <?php
                                if($cover!=null){
                            ?>
                            <li>
                                <a href={{url("coverlkps?id=".$cover->id_prodi."&upps=".$cover->id)}}>
                                    <i class="material-icons">layers</i>
                                    <span>Cover LKPS</span>
                                </a>
                            </li>
                            <?php
                                }
                                else{
                            ?>
                            <li>
                                <a href="{{url('tambahcoverlkps')}}">
                                    <i class="material-icons">layers</i>
                                    <span>Cover LKPS</span>
                                </a>
                            </li>   
                            <?php
                                }
                            ?>
                    <!-- #END Cover -->
                    
                    <!-- C1 -->
                    <li>
                        <a href="C1_LKPS">
                            <i class="material-icons">layers</i>
                            <span>Tata Pamong, Tata Kelola, dan Kerjasama</span>
                        </a>
                    </li>
                    <!-- #END C1 -->

                    <!-- C2 -->
                    <li>
                        <a href="C2_LKPS">
                            <i class="material-icons">layers</i>
                            <span>Mahasiswa</span>
                        </a>
                    </li>
                    <!-- #END C2 -->
                    <!-- #END LKPS -->


                    <!-- LED -->
                    <li class="header">Laporan Evaluasi Diri</li>
                    
                    <!-- Cover -->
                            <?php 
                            $cover=DB::table('led_cover')
                                        ->join('users','led_cover.id_prodi','=','users.id_prodi')
                                        ->select('led_cover.*')
                                        ->where('users.id',Session::get('id'))
                                        ->first();
                            ?>
                            <?php
                                if($cover!=null){
                            ?>
                            <li>
                                <a href={{url("cover?id=".$cover->id_prodi."&upps=".$cover->id)}}>
                                    <i class="material-icons">layers</i>
                                    <span>Cover LED</span>
                                </a>
                            </li>
                            <?php
                                }
                                else{
                            ?>
                            <li>
                                <a href="{{url('tambahcover')}}">
                                    <i class="material-icons">layers</i>
                                    <span>Cover LED</span>
                                </a>
                            </li>   
                            <?php
                                }
                            ?>
                    <!-- #END Cover -->

                    <!-- Pendahuluan -->
                            <?php 
                            $pendahuluan=DB::table('led_pendahuluan')
                                        ->join('users','led_pendahuluan.id_prodi','=','users.id_prodi')
                                        ->select('led_pendahuluan.*')
                                        ->where('users.id',Session::get('id'))
                                        ->first();
                            ?>
                            <!-- Kondisi Eksternal -->
                            <?php
                                if($pendahuluan!=null){
                            ?>
                            <li>
                                <a href={{url("pendahuluan?id=".$pendahuluan->id_prodi)}}>
                                    <i class="material-icons">layers</i>
                                    <span>Pendahuluan</span>
                                </a>
                            </li>
                            <?php
                                }
                                else{
                            ?>
                            <li>
                                <a href="{{url('tambahpendahuluan')}}">
                                    <i class="material-icons">layers</i>
                                    <span>Pendahuluan</span>
                                </a>
                            </li>   
                            <?php
                                }
                            ?>
                    <!-- #END Pendahuluan -->

                    <!-- Laporan Evaluasi Diri -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">layers</i>
                            <span>Laporan Evaluasi Diri</span>
                        </a>

                        <ul class="ml-menu">
                            <?php 
                            $koneks=DB::table('led_kondisieks')
                                        ->join('users','led_kondisieks.id_prodi','=','users.id_prodi')
                                        ->select('led_kondisieks.*')
                                        ->where('users.id',Session::get('id'))
                                        ->first();
                            ?>
                            <!-- Kondisi Eksternal -->
                            <?php
                                if($koneks!=null){
                            ?>
                            <li>
                                <a href={{url("kondisieks?id=".$koneks->id_prodi)}}>
                                    <i class="material-icons">layers</i>
                                    <span>Kondisi Eksternal</span>
                                </a>
                            </li>
                            <?php
                                }
                                else{
                            ?>
                            <li>
                                <a href="{{url('tambahkondisieks')}}">
                                    <i class="material-icons">layers</i>
                                    <span>Kondisi Eksternal</span>
                                </a>
                            </li>   
                            <?php
                                }
                            ?>
                            <!-- #END Kondisi Eksternal -->
                            
                            <?php 
                            $profil=DB::table('led_upps')
                                        ->join('users','led_upps.id_prodi','=','users.id_prodi')
                                        ->select('led_upps.*')
                                        ->where('users.id',Session::get('id'))
                                        ->first();
                            ?>
                            <!-- Profil Unit Pengelola Program Studi (UPPS) -->
                            <?php
                                if($profil!=null){
                            ?>
                            <li>
                                <a href={{url("profilupps?id=".$profil->id_prodi)}}>
                                    <i class="material-icons">layers</i>
                                    <span>Profil Unit Pengelola Program Studi (UPPS)</span>
                                </a>
                            </li>
                            <?php
                                }
                                else{
                            ?>
                            <li>
                                <a href="{{url('tambahprofilupps')}}">
                                    <i class="material-icons">layers</i>
                                    <span>Profil Unit Pengelola Program Studi (UPPS)</span>
                                </a>
                            </li>   
                            <?php
                                }
                            ?>
                            <!-- #END Profil Unit Pengelola Program Studi (UPPS) -->
                        </ul>
                    </li>
                    <!-- #END Laporan Evaluasi Diri -->
                    
                    <!-- Kriteria -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">layers</i>
                            <span>Kriteria</span>
                        </a>

                        <ul class="ml-menu">
                            <?php 
                                $C1=DB::table('led_c1')
                                            ->join('users','led_c1.id_prodi','=','users.id_prodi')
                                            ->select('led_c1.*')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                            ?>
                            <!-- C1 -->
                            <?php
                                if($C1!=null){   
                            ?>
                            <li>
                                <a href={{url("c1?id=".$C1->id_prodi)}}>
                                    <i class="material-icons">layers</i>
                                    <span>ANALISIS DAN PENETAPAN PROGRAM UPPS</span>
                                </a>
                            </li>
                            <?php
                                }
                                else{
                            ?>
                            <li>
                                <a href="{{url('tambahc1')}}">
                                    <i class="material-icons">layers</i>
                                    <span>ANALISIS DAN PENETAPAN PROGRAM UPPS</span>
                                </a>
                            </li>   
                            <?php
                                }
                            ?>
                            <!-- #END C1 -->

                            <?php 
                                $C2=DB::table('led_c2')
                                            ->join('users','led_c2.id_prodi','=','users.id_prodi')
                                            ->select('led_c2.*')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                            ?>
                            <!-- C2 -->
                            <?php
                                if($C2!=null){   
                            ?>
                            <li>
                                <a href={{url("c2?id=".$C2->id_prodi)}}>
                                    <i class="material-icons">layers</i>
                                    <span>TATA PAMONG, TATA KELOLA, DAN KERJASAMA</span>
                                </a>
                            </li>
                            <?php
                                }
                                else{
                            ?>
                            <li>
                                <a href="{{url('tambahc2')}}">
                                    <i class="material-icons">layers</i>
                                    <span>TATA PAMONG, TATA KELOLA, DAN KERJASAMA</span>
                                </a>
                            </li>   
                            <?php
                                }
                            ?>
                            <!-- #END C2 -->

                            <?php 
                                $C2=DB::table('led_c2')
                                            ->join('users','led_c2.id_prodi','=','users.id_prodi')
                                            ->select('led_c2.*')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                            ?>
                            <!-- C2 -->
                            <?php
                                if($C2!=null){   
                            ?>
                            <li>
                                <a href={{url("c2?id=".$C2->id_prodi)}}>
                                    <i class="material-icons">layers</i>
                                    <span>TATA PAMONG, TATA KELOLA, DAN KERJASAMA</span>
                                </a>
                            </li>
                            <?php
                                }
                                else{
                            ?>
                            <li>
                                <a href="{{url('tambahc2')}}">
                                    <i class="material-icons">layers</i>
                                    <span>TATA PAMONG, TATA KELOLA, DAN KERJASAMA</span>
                                </a>
                            </li>   
                            <?php
                                }
                            ?>
                            <!-- #END C2 -->

                            <?php 
                                $C3=DB::table('led_c3')
                                            ->join('users','led_c3.id_prodi','=','users.id_prodi')
                                            ->select('led_c3.*')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                            ?>
                            <!-- C3 -->
                            <?php
                                if($C3!=null){   
                            ?>
                            <li>
                                <a href={{url("c3?id=".$C3->id_prodi)}}>
                                    <i class="material-icons">layers</i>
                                    <span>MAHASISWA</span>
                                </a>
                            </li>
                            <?php
                                }
                                else{
                            ?>
                            <li>
                                <a href="{{url('tambahc3')}}">
                                    <i class="material-icons">layers</i>
                                    <span>MAHASISWA</span>
                                </a>
                            </li>   
                            <?php
                                }
                            ?>
                            <!-- #END C3 -->

                            <?php 
                                $C4=DB::table('led_c4')
                                            ->join('users','led_c4.id_prodi','=','users.id_prodi')
                                            ->select('led_c4.*')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                            ?>
                            <!-- C4 -->
                            <?php
                                if($C4!=null){   
                            ?>
                            <li>
                                <a href={{url("c4?id=".$C4->id_prodi)}}>
                                    <i class="material-icons">layers</i>
                                    <span>SUMBER DAYA MANUSIA</span>
                                </a>
                            </li>
                            <?php
                                }
                                else{
                            ?>
                            <li>
                                <a href="{{url('tambahc4')}}">
                                    <i class="material-icons">layers</i>
                                    <span>SUMBER DAYA MANUSIA</span>
                                </a>
                            </li>   
                            <?php
                                }
                            ?>
                            <!-- #END C4 -->

                            <?php 
                                $C5=DB::table('led_c5')
                                            ->join('users','led_c5.id_prodi','=','users.id_prodi')
                                            ->select('led_c5.*')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                            ?>
                            <!-- C5 -->
                            <?php
                                if($C5!=null){   
                            ?>
                            <li>
                                <a href={{url("c5?id=".$C5->id_prodi)}}>
                                    <i class="material-icons">layers</i>
                                    <span>KEUANGAN, SARANA, DAN PRASARANA</span>
                                </a>
                            </li>
                            <?php
                                }
                                else{
                            ?>
                            <li>
                                <a href="{{url('tambahc5')}}">
                                    <i class="material-icons">layers</i>
                                    <span>KEUANGAN, SARANA, DAN PRASARANA</span>
                                </a>
                            </li>   
                            <?php
                                }
                            ?>
                            <!-- #END C5 -->

                            <?php 
                                $C6=DB::table('led_c6')
                                            ->join('users','led_c6.id_prodi','=','users.id_prodi')
                                            ->select('led_c6.*')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                            ?>
                            <!-- C6 -->
                            <?php
                                if($C6!=null){   
                            ?>
                            <li>
                                <a href={{url("c6?id=".$C6->id_prodi)}}>
                                    <i class="material-icons">layers</i>
                                    <span>PENDIDIKAN</span>
                                </a>
                            </li>
                            <?php
                                }
                                else{
                            ?>
                            <li>
                                <a href="{{url('tambahc6')}}">
                                    <i class="material-icons">layers</i>
                                    <span>PENDIDIKAN</span>
                                </a>
                            </li>   
                            <?php
                                }
                            ?>
                            <!-- #END C6 -->

                            <?php 
                                $C7=DB::table('led_c7')
                                            ->join('users','led_c7.id_prodi','=','users.id_prodi')
                                            ->select('led_c7.*')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                            ?>
                            <!-- C7 -->
                            <?php
                                if($C7!=null){   
                            ?>
                            <li>
                                <a href={{url("c7?id=".$C7->id_prodi)}}>
                                    <i class="material-icons">layers</i>
                                    <span>PENELITIAN</span>
                                </a>
                            </li>
                            <?php
                                }
                                else{
                            ?>
                            <li>
                                <a href="{{url('tambahc7')}}">
                                    <i class="material-icons">layers</i>
                                    <span>PENELITIAN</span>
                                </a>
                            </li>   
                            <?php
                                }
                            ?>
                            <!-- #END C7 -->

                            <?php 
                                $C8=DB::table('led_c8')
                                            ->join('users','led_c8.id_prodi','=','users.id_prodi')
                                            ->select('led_c8.*')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                            ?>
                            <!-- C8 -->
                            <?php
                                if($C8!=null){   
                            ?>
                            <li>
                                <a href={{url("c8?id=".$C8->id_prodi)}}>
                                    <i class="material-icons">layers</i>
                                    <span>PENGABDIAN KEPADA MASYARAKAT</span>
                                </a>
                            </li>
                            <?php
                                }
                                else{
                            ?>
                            <li>
                                <a href="{{url('tambahc8')}}">
                                    <i class="material-icons">layers</i>
                                    <span>PENGABDIAN KEPADA MASYARAKAT</span>
                                </a>
                            </li>   
                            <?php
                                }
                            ?>
                            <!-- #END C8 -->

                            <?php 
                                $C9=DB::table('led_c9')
                                            ->join('users','led_c9.id_prodi','=','users.id_prodi')
                                            ->select('led_c9.*')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                            ?>
                            <!-- C9 -->
                            <?php
                                if($C9!=null){   
                            ?>
                            <li>
                                <a href={{url("c9?id=".$C9->id_prodi)}}>
                                    <i class="material-icons">layers</i>
                                    <span>LUARAN DAN CAPAIAN TRIDHARMA</span>
                                </a>
                            </li>
                            <?php
                                }
                                else{
                            ?>
                            <li>
                                <a href="{{url('tambahc9')}}">
                                    <i class="material-icons">layers</i>
                                    <span>LUARAN DAN CAPAIAN TRIDHARMA</span>
                                </a>
                            </li>   
                            <?php
                                }
                            ?>
                            <!-- #END C9 -->
                        </ul>
                    </li>
                    <!-- #END Kriteria -->

                    <?php 
                        $analisis=DB::table('led_analisis_upps')
                                    ->join('users','led_analisis_upps.id_prodi','=','users.id_prodi')
                                    ->select('led_analisis_upps.*')
                                    ->where('users.id',Session::get('id'))
                                    ->first();
                    ?>
                    <!-- Analisis dan Penetapan Program UPPS -->
                    <?php
                        if($analisis!=null){
                    ?>
                    <li>
                        <a href={{url("analisis?id=".$analisis->id_prodi)}}>
                            <i class="material-icons">layers</i>
                            <span>Analisis dan Penetapan Program UPPS</span>
                        </a>
                    </li>
                    <?php
                        }
                        else{
                    ?>
                    <li>
                        <a href="{{url('tambahanalisis')}}">
                            <i class="material-icons">layers</i>
                            <span>Analisis dan Penetapan Program UPPS</span>
                        </a>
                    </li>   
                    <?php
                        }
                    ?>
                    <!-- #END Analisis dan Penetapan Program UPPS -->
                    
                    <?php 
                        $penutup=DB::table('led_penutup')
                                    ->join('users','led_penutup.id_prodi','=','users.id_prodi')
                                    ->select('led_penutup.*')
                                    ->where('users.id',Session::get('id'))
                                    ->first();
                    ?>
                    <!-- Penutup -->
                    <?php
                        if($penutup!=null){
                    ?>
                    <li>
                        <a href={{url("penutup?id=".$penutup->id_prodi)}}>
                            <i class="material-icons">layers</i>
                            <span>Penutup</span>
                        </a>
                    </li>
                    <?php
                        }
                        else{
                    ?>
                    <li>
                        <a href="{{url('tambahpenutup')}}">
                            <i class="material-icons">layers</i>
                            <span>Penutup</span>
                        </a>
                    </li>   
                    <?php
                        }
                    ?>
                    <!-- #END Penutup -->
                    
                    <!-- Download -->
                    <!-- <li>
                        <a href="{{url('download')}}">
                            <i class="material-icons">layers</i>
                            <span>Download LED</span>
                        </a>
                    </li>    -->
                    <!-- #END Download -->

                    <!-- Download -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">layers</i>
                            <span>Download LED</span>
                        </a>

                        <ul class="ml-menu">
                        <?php 
                            $pdf=DB::table('led_penutup')
                                        ->join('users','led_penutup.id_prodi','=','users.id_prodi')
                                        ->select('led_penutup.*')
                                        ->where('users.id',Session::get('id'))
                                        ->first();
                            ?>
                            <!-- pdf -->
                                <?php
                                    if($pdf!=null){
                                ?>
                                <li>
                                    <a href={{url("cetak_pdf?id=".$pdf->id_prodi)}}>
                                        <i class="material-icons">layers</i>
                                        <span>PDF LED</span>
                                    </a>
                                </li>
                                <?php
                                    }
                                    else{
                                ?>
                                    <!-- DELETE -->
                                    <li>
                                        <a href="#" class="btn btn-danger waves-effect" data-target="#modalHapus" data-toggle="modal">
                                            <i class="material-icons">layers</i>
                                            <span>PDF LED</span> 
                                        </a>
                                    </li>
                                        <!-- Modal -->
                                        <div class="modal fade" id="modalHapus" tabindex="-1" role="dialog">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <p>tes</p>
                                                            <p></p>
                                                            <h4 class="modal-title" style="text-align:center;">WARNING !!!</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Isi semua data LED (Laporan Evaluasi Diri), Jika belum tidak dapat untuk download pdf hasil LED</p>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>                                        
                                        <!-- #END# Modal -->
                                    <!-- #END DELETE -->
                                <?php
                                    }
                                ?>
                            <!-- #END pdf -->
                        </ul>
                    </li>
                    <!-- #END Download -->

                    <?php 
                        $print=DB::table('led_penutup')
                                    ->join('users','led_penutup.id_prodi','=','users.id_prodi')
                                    ->select('led_penutup.*')
                                    ->where('users.id',Session::get('id'))
                                    ->first();
                        ?>
                    <!-- Print -->
                        <?php
                            if($print!=null){
                        ?>
                        <li>
                            <a href={{url("print?id=".$print->id_prodi)}}>
                                <i class="material-icons">layers</i>
                                <span>Print LED</span>
                            </a>
                        </li>
                        <?php
                            }
                            else{
                        ?>
                            <!-- DELETE -->
                            <li>
                                <a href="#" class="btn btn-danger waves-effect" data-target="#modalHapus" data-toggle="modal">
                                    <i class="material-icons">layers</i>
                                    <span>Print LED</span> 
                                </a>
                            </li>
                                <!-- Modal -->
                                <div class="modal fade" id="modalHapus" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <p>tes</p>
                                                    <p></p>
                                                    <h4 class="modal-title" style="text-align:center;">WARNING !!!</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Isi semua data LED (Laporan Evaluasi Diri), Jika belum tidak dapat untuk print hasil LED</p>
                                                </div>
                                            </div>
                                        </div>
                                </div>                                        
                                <!-- #END# Modal -->
                            <!-- #END DELETE -->
                        <?php
                            }
                        ?>
                    <!-- #END Print -->

                    <!-- #END LED -->

                    <!--Setting-->
                    <li class="header">SETTING</li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>SETTING</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="jurusan">
                                    <i class="material-icons">layers</i>
                                    <span>Master Jurusan</span>
                                </a>
                            </li>
                            <li>
                                <a href="prodi">
                                    <i class="material-icons">layers</i>
                                    <span>Master Prodi</span>
                                </a>
                            </li>
                            <!-- <li>
                                <a href="standar">
                                    <i class="material-icons">layers</i>
                                    <span>Tambah Standar</span>
                                </a>
                            </li> -->
                            <li>
                                <a href="user">
                                    <i class="material-icons">person</i>
                                    <span>REGISTER USER</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                <!--ROLE 2-->
                @elseif(Session::get('id_role')=="2")
                    <li class="header">MAIN NAVIGATION</li>
                    <!-- <li class="active">
                        <a href="/">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li> -->
                    <li>
                        <a href="dashboard">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!-- LKPS -->
                        <li class="header">Laporan Kinerja Program Studi</li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">widgets</i>
                                    <span>LAPORAN KINERJA PROGRAM STUDI</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <form  action="{{ url('LKPSPost') }}" enctype="multipart/form-data" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{Session::get('id')}}"> <br/>
                                        <input type="hidden" name="id_prodi" value="{{Session::get('id_prodi')}}"> <br/>
                                        <button type="submit" class="btn btn-block btn-lg btn-default waves-effect" name="simpan" value="Simpan">
                                            <i class="material-icons">layers</i>
                                            <span>LAPORAN KINERJA PROGRAM STUDI</span>
                                        </button>
                                        </form>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="menu-toggle">
                                            <i class="material-icons">widgets</i>
                                            <span>FITUR - FITUR</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <!-- Cover -->
                                                    <?php 
                                                    $cover=DB::table('lkps_cover')
                                                                ->join('users','lkps_cover.id_prodi','=','users.id_prodi')
                                                                ->select('lkps_cover.*')
                                                                ->where('users.id',Session::get('id'))
                                                                ->first();
                                                    ?>
                                                    <?php
                                                        if($cover!=null){
                                                    ?>
                                                    <li>
                                                        <a href={{url("coverlkps?id=".$cover->id_prodi."&upps=".$cover->id)}}>
                                                            <i class="material-icons">layers</i>
                                                            <span>Cover LKPS</span>
                                                        </a>
                                                    </li>
                                                    <?php
                                                        }
                                                        else{
                                                    ?>
                                                    <li>
                                                        <a href="{{url('tambahcoverlkps')}}">
                                                            <i class="material-icons">layers</i>
                                                            <span>Cover LKPS</span>
                                                        </a>
                                                    </li>   
                                                    <?php
                                                        }
                                                    ?>
                                            <!-- #END Cover -->

                                            <!-- C1 -->
                                                <?php 
                                                $C1=DB::table('lkps_kerjasama')
                                                            ->leftJoin('users','lkps_kerjasama.id_prodi','=','users.id_prodi')
                                                            ->select('lkps_kerjasama.*')
                                                            ->where('users.id',Session::get('id'))
                                                            ->first();
                                                
                                                ?>
                                                <?php
                                                    if($C1!=null){
                                                ?>
                                                <li>
                                                    <a href={{url("c1lkps?id=".$C1->id_prodi."&upps=".$C1->id)}}>
                                                        <i class="material-icons">layers</i>
                                                        <span>Tata Pamong, Tata Kelola, dan Kerjasama</span>
                                                    </a>
                                                </li>
                                                <?php
                                                    }
                                                    else{
                                                ?>
                                                <li>
                                                    <a href="{{url('tambahc1lkps')}}">
                                                        <i class="material-icons">layers</i>
                                                        <span>Tata Pamong, Tata Kelola, dan Kerjasama</span>
                                                    </a>
                                                </li>   
                                                <?php
                                                    }
                                                ?>
                                            <!-- #END C1 -->

                                            <!-- C2 -->
                                                <?php 
                                                $C2=DB::table('lkps_mahasiswa')
                                                            ->leftJoin('users','lkps_mahasiswa.id_prodi','=','users.id_prodi')
                                                            ->select('lkps_mahasiswa.*')
                                                            ->where('users.id',Session::get('id'))
                                                            ->first();
                                                
                                                ?>
                                                <?php
                                                    if($C2!=null){
                                                ?>
                                                <li>
                                                    <a href={{url("c2lkps?id=".$C2->id_prodi."&upps=".$C2->id)}}>
                                                        <i class="material-icons">layers</i>
                                                        <span>Mahasiswa</span>
                                                    </a>
                                                </li>
                                                <?php
                                                    }
                                                    else{
                                                ?>
                                                <li>
                                                    <a href="{{url('tambahc2lkps')}}">
                                                        <i class="material-icons">layers</i>
                                                        <span>Mahasiswa</span>
                                                    </a>
                                                </li>   
                                                <?php
                                                    }
                                                ?>
                                            <!-- #END C2 -->

                                            <!-- C4 -->
                                                <?php 
                                                $C4=DB::table('lkps_keuangan')
                                                            ->leftJoin('users','lkps_keuangan.id_prodi','=','users.id_prodi')
                                                            ->select('lkps_keuangan.*')
                                                            ->where('users.id',Session::get('id'))
                                                            ->first();
                                                
                                                ?>
                                                <?php
                                                    if($C4!=null){
                                                ?>
                                                <li>
                                                    <a href={{url("c4lkps?id=".$C4->id_prodi."&upps=".$C4->id)}}>
                                                        <i class="material-icons">layers</i>
                                                        <span>Keuangan, Sarana, dan Prasarana</span>
                                                    </a>
                                                </li>
                                                <?php
                                                    }
                                                    else{
                                                ?>
                                                <li>
                                                    <a href="{{url('tambahc4lkps')}}">
                                                        <i class="material-icons">layers</i>
                                                        <span>Keuangan, Sarana, dan Prasarana</span>
                                                    </a>
                                                </li>   
                                                <?php
                                                    }
                                                ?>
                                            <!-- #END C4 --> 

                                            <!-- C5 -->
                                                <?php 
                                                $C5=DB::table('lkps_pendidikan')
                                                            ->leftJoin('users','lkps_pendidikan.id_prodi','=','users.id_prodi')
                                                            ->select('lkps_pendidikan.*')
                                                            ->where('users.id',Session::get('id'))
                                                            ->first();
                                                
                                                ?>
                                                <?php
                                                    if($C5!=null){
                                                ?>
                                                <li>
                                                    <a href={{url("c5lkps?id=".$C5->id_prodi."&upps=".$C5->id)}}>
                                                        <i class="material-icons">layers</i>
                                                        <span>Pendidikan</span>
                                                    </a>
                                                </li>
                                                <?php
                                                    }
                                                    else{
                                                ?>
                                                <li>
                                                    <a href="{{url('tambahc5lkps')}}">
                                                        <i class="material-icons">layers</i>
                                                        <span>Pendidikan</span>
                                                    </a>
                                                </li>   
                                                <?php
                                                    }
                                                ?>
                                            <!-- #END C5 --> 

                                            <!-- C6 -->
                                                <?php 
                                                $C6=DB::table('lkps_penelitian')
                                                            ->leftJoin('users','lkps_penelitian.id_prodi','=','users.id_prodi')
                                                            ->select('lkps_penelitian.*')
                                                            ->where('users.id',Session::get('id'))
                                                            ->first();
                                                
                                                ?>
                                                <?php
                                                    if($C6!=null){
                                                ?>
                                                <li>
                                                    <a href={{url("c6lkps?id=".$C6->id_prodi."&upps=".$C6->id)}}>
                                                        <i class="material-icons">layers</i>
                                                        <span>Penelitian</span>
                                                    </a>
                                                </li>
                                                <?php
                                                    }
                                                    else{
                                                ?>
                                                <li>
                                                    <a href="{{url('tambahc6lkps')}}">
                                                        <i class="material-icons">layers</i>
                                                        <span>Penelitian</span>
                                                    </a>
                                                </li>   
                                                <?php
                                                    }
                                                ?>
                                            <!-- #END C6 --> 
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </li>
                    <!-- #END LKPS -->


                    <!-- LED -->
                        <li class="header">Laporan Evaluasi Diri</li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">widgets</i>
                                    <span>LAPORAN EVALUASI DIRI</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <form  action="{{ url('LEDPost') }}" enctype="multipart/form-data" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{Session::get('id')}}"> <br/>
                                        <input type="hidden" name="id_prodi" value="{{Session::get('id_prodi')}}"> <br/>
                                        <button type="submit" class="btn btn-block btn-lg btn-default waves-effect" name="simpan" value="Simpan">
                                            <i class="material-icons">layers</i>
                                            <span>LAPORAN EVALUASI DIRI</span>
                                        </button>
                                        </form>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="menu-toggle">
                                            <i class="material-icons">widgets</i>
                                            <span>FITUR - FITUR</span>
                                        </a>
                                        <ul class="ml-menu">
                                            <!-- Cover -->
                                                    <?php 
                                                    $cover=DB::table('led_cover')
                                                                ->join('led','led_cover.id_prodi','=','led.id_prodi')
                                                                ->select('led_cover.*')
                                                                ->where('led.id_user',Session::get('id'))
                                                                ->first();
                                                    ?>
                                                    <?php
                                                        if($cover!=null){
                                                    ?>
                                                    <li>
                                                        <a href={{url("cover?id=".$cover->id_prodi."&upps=".$cover->id)}}>
                                                            <i class="material-icons">layers</i>
                                                            <span>Cover LED</span>
                                                        </a>
                                                    </li>
                                                    <?php
                                                        }
                                                        else{
                                                    ?>
                                                    <li>
                                                        <a href="{{url('tambahcover')}}">
                                                            <i class="material-icons">layers</i>
                                                            <span>Cover LED</span>
                                                        </a>
                                                    </li>   
                                                    <?php
                                                        }
                                                    ?>
                                            <!-- #END Cover -->

                                            <!-- Pendahuluan -->
                                                    <?php 
                                                    $pendahuluan=DB::table('led_pendahuluan')
                                                                ->join('users','led_pendahuluan.id_prodi','=','users.id_prodi')
                                                                ->select('led_pendahuluan.*')
                                                                ->where('users.id',Session::get('id'))
                                                                ->first();
                                                    ?>
                                                    <!-- Kondisi Eksternal -->
                                                    <?php
                                                        if($pendahuluan!=null){
                                                    ?>
                                                    <li>
                                                        <!-- <a href={{url("pendahuluan?id=".$pendahuluan->id_prodi)}}> -->
                                                        <a href={{url("pendahuluan?id=".$pendahuluan->id_prodi."&upps=".$pendahuluan->id)}}>
                                                            <i class="material-icons">layers</i>
                                                            <span>Pendahuluan</span>
                                                        </a>
                                                    </li>
                                                    <?php
                                                        }
                                                        else{
                                                    ?>
                                                    <li>
                                                        <a href="{{url('tambahpendahuluan')}}">
                                                            <i class="material-icons">layers</i>
                                                            <span>Pendahuluan</span>
                                                        </a>
                                                    </li>   
                                                    <?php
                                                        }
                                                    ?>
                                            <!-- #END Pendahuluan -->

                                            <!-- Laporan Evaluasi Diri -->
                                                <li>
                                                    <a href="javascript:void(0);" class="menu-toggle">
                                                        <i class="material-icons">layers</i>
                                                        <span>Laporan Evaluasi Diri</span>
                                                    </a>

                                                    <ul class="ml-menu">
                                                        <?php 
                                                        $koneks=DB::table('led_kondisieks')
                                                                    ->join('users','led_kondisieks.id_prodi','=','users.id_prodi')
                                                                    ->select('led_kondisieks.*')
                                                                    ->where('users.id',Session::get('id'))
                                                                    ->first();
                                                        ?>
                                                        <!-- Kondisi Eksternal -->
                                                        <?php
                                                            if($koneks!=null){
                                                        ?>
                                                        <li>
                                                            <!-- <a href={{url("kondisieks?id=".$koneks->id_prodi)}}> -->
                                                            <a href={{url("kondisieks?id=".$koneks->id_prodi."&upps=".$koneks->id)}}>
                                                                <i class="material-icons">layers</i>
                                                                <span>Kondisi Eksternal</span>
                                                            </a>
                                                        </li>
                                                        <?php
                                                            }
                                                            else{
                                                        ?>
                                                        <li>
                                                            <a href="{{url('tambahkondisieks')}}">
                                                                <i class="material-icons">layers</i>
                                                                <span>Kondisi Eksternal</span>
                                                            </a>
                                                        </li>   
                                                        <?php
                                                            }
                                                        ?>
                                                        <!-- #END Kondisi Eksternal -->
                                                        
                                                        <?php 
                                                        $profil=DB::table('led_upps')
                                                                    ->join('users','led_upps.id_prodi','=','users.id_prodi')
                                                                    ->select('led_upps.*')
                                                                    ->where('users.id',Session::get('id'))
                                                                    ->first();
                                                        ?>
                                                        <!-- Profil Unit Pengelola Program Studi (UPPS) -->
                                                        <?php
                                                            if($profil!=null){
                                                        ?>
                                                        <li>
                                                            <!-- <a href={{url("profilupps?id=".$profil->id_prodi)}}> -->
                                                            <a href={{url("profilupps?id=".$profil->id_prodi."&upps=".$profil->id)}}>
                                                                <i class="material-icons">layers</i>
                                                                <span>Profil Unit Pengelola Program Studi (UPPS)</span>
                                                            </a>
                                                        </li>
                                                        <?php
                                                            }
                                                            else{
                                                        ?>
                                                        <li>
                                                            <a href="{{url('tambahprofilupps')}}">
                                                                <i class="material-icons">layers</i>
                                                                <span>Profil Unit Pengelola Program Studi (UPPS)</span>
                                                            </a>
                                                        </li>   
                                                        <?php
                                                            }
                                                        ?>
                                                        <!-- #END Profil Unit Pengelola Program Studi (UPPS) -->
                                                    </ul>
                                                </li>
                                            <!-- #END Laporan Evaluasi Diri -->
                                            
                                            <!-- Kriteria -->
                                                <li>
                                                    <a href="javascript:void(0);" class="menu-toggle">
                                                        <i class="material-icons">layers</i>
                                                        <span>Kriteria</span>
                                                    </a>

                                                    <ul class="ml-menu">
                                                        <?php 
                                                            $C1=DB::table('led_c1')
                                                                        ->join('users','led_c1.id_prodi','=','users.id_prodi')
                                                                        ->select('led_c1.*')
                                                                        ->where('users.id',Session::get('id'))
                                                                        ->first();
                                                        ?>
                                                        <!-- C1 -->
                                                        <?php
                                                            if($C1!=null){   
                                                        ?>
                                                        <li>
                                                            <!-- <a href={{url("c1?id=".$C1->id_prodi)}}> -->
                                                            <a href={{url("c1?id=".$C1->id_prodi."&upps=".$C1->id)}}>
                                                                <i class="material-icons">layers</i>
                                                                <span>ANALISIS DAN PENETAPAN PROGRAM UPPS</span>
                                                            </a>
                                                        </li>
                                                        <?php
                                                            }
                                                            else{
                                                        ?>
                                                        <li>
                                                            <a href="{{url('tambahc1')}}">
                                                                <i class="material-icons">layers</i>
                                                                <span>ANALISIS DAN PENETAPAN PROGRAM UPPS</span>
                                                            </a>
                                                        </li>   
                                                        <?php
                                                            }
                                                        ?>
                                                        <!-- #END C1 -->

                                                        <?php 
                                                            $C2=DB::table('led_c2')
                                                                        ->join('users','led_c2.id_prodi','=','users.id_prodi')
                                                                        ->select('led_c2.*')
                                                                        ->where('users.id',Session::get('id'))
                                                                        ->first();
                                                        ?>
                                                        <!-- C2 -->
                                                        <?php
                                                            if($C2!=null){   
                                                        ?>
                                                        <li>
                                                            <!-- <a href={{url("c2?id=".$C2->id_prodi)}}> -->
                                                            <a href={{url("c2?id=".$C2->id_prodi."&upps=".$C2->id)}}>
                                                                <i class="material-icons">layers</i>
                                                                <span>TATA PAMONG, TATA KELOLA, DAN KERJASAMA</span>
                                                            </a>
                                                        </li>
                                                        <?php
                                                            }
                                                            else{
                                                        ?>
                                                        <li>
                                                            <a href="{{url('tambahc2')}}">
                                                                <i class="material-icons">layers</i>
                                                                <span>TATA PAMONG, TATA KELOLA, DAN KERJASAMA</span>
                                                            </a>
                                                        </li>   
                                                        <?php
                                                            }
                                                        ?>
                                                        <!-- #END C2 -->

                                                        <?php 
                                                            $C3=DB::table('led_c3')
                                                                        ->join('users','led_c3.id_prodi','=','users.id_prodi')
                                                                        ->select('led_c3.*')
                                                                        ->where('users.id',Session::get('id'))
                                                                        ->first();
                                                        ?>
                                                        <!-- C3 -->
                                                        <?php
                                                            if($C3!=null){   
                                                        ?>
                                                        <li>
                                                            <!-- <a href={{url("c3?id=".$C3->id_prodi)}}> -->
                                                            <a href={{url("c3?id=".$C3->id_prodi."&upps=".$C3->id)}}>
                                                                <i class="material-icons">layers</i>
                                                                <span>MAHASISWA</span>
                                                            </a>
                                                        </li>
                                                        <?php
                                                            }
                                                            else{
                                                        ?>
                                                        <li>
                                                            <a href="{{url('tambahc3')}}">
                                                                <i class="material-icons">layers</i>
                                                                <span>MAHASISWA</span>
                                                            </a>
                                                        </li>   
                                                        <?php
                                                            }
                                                        ?>
                                                        <!-- #END C3 -->

                                                        <?php 
                                                            $C4=DB::table('led_c4')
                                                                        ->join('users','led_c4.id_prodi','=','users.id_prodi')
                                                                        ->select('led_c4.*')
                                                                        ->where('users.id',Session::get('id'))
                                                                        ->first();
                                                        ?>
                                                        <!-- C4 -->
                                                        <?php
                                                            if($C4!=null){   
                                                        ?>
                                                        <li>
                                                            <!-- <a href={{url("c4?id=".$C4->id_prodi)}}> -->
                                                            <a href={{url("c4?id=".$C4->id_prodi."&upps=".$C4->id)}}>
                                                                <i class="material-icons">layers</i>
                                                                <span>SUMBER DAYA MANUSIA</span>
                                                            </a>
                                                        </li>
                                                        <?php
                                                            }
                                                            else{
                                                        ?>
                                                        <li>
                                                            <a href="{{url('tambahc4')}}">
                                                                <i class="material-icons">layers</i>
                                                                <span>SUMBER DAYA MANUSIA</span>
                                                            </a>
                                                        </li>   
                                                        <?php
                                                            }
                                                        ?>
                                                        <!-- #END C4 -->

                                                        <?php 
                                                            $C5=DB::table('led_c5')
                                                                        ->join('users','led_c5.id_prodi','=','users.id_prodi')
                                                                        ->select('led_c5.*')
                                                                        ->where('users.id',Session::get('id'))
                                                                        ->first();
                                                        ?>
                                                        <!-- C5 -->
                                                        <?php
                                                            if($C5!=null){   
                                                        ?>
                                                        <li>
                                                            <!-- <a href={{url("c5?id=".$C5->id_prodi)}}> -->
                                                            <a href={{url("c5?id=".$C5->id_prodi."&upps=".$C5->id)}}>
                                                                <i class="material-icons">layers</i>
                                                                <span>KEUANGAN, SARANA, DAN PRASARANA</span>
                                                            </a>
                                                        </li>
                                                        <?php
                                                            }
                                                            else{
                                                        ?>
                                                        <li>
                                                            <a href="{{url('tambahc5')}}">
                                                                <i class="material-icons">layers</i>
                                                                <span>KEUANGAN, SARANA, DAN PRASARANA</span>
                                                            </a>
                                                        </li>   
                                                        <?php
                                                            }
                                                        ?>
                                                        <!-- #END C5 -->

                                                        <?php 
                                                            $C6=DB::table('led_c6')
                                                                        ->join('users','led_c6.id_prodi','=','users.id_prodi')
                                                                        ->select('led_c6.*')
                                                                        ->where('users.id',Session::get('id'))
                                                                        ->first();
                                                        ?>
                                                        <!-- C6 -->
                                                        <?php
                                                            if($C6!=null){   
                                                        ?>
                                                        <li>
                                                            <!-- <a href={{url("c6?id=".$C6->id_prodi)}}> -->
                                                            <a href={{url("c6?id=".$C6->id_prodi."&upps=".$C6->id)}}>
                                                                <i class="material-icons">layers</i>
                                                                <span>PENDIDIKAN</span>
                                                            </a>
                                                        </li>
                                                        <?php
                                                            }
                                                            else{
                                                        ?>
                                                        <li>
                                                            <a href="{{url('tambahc6')}}">
                                                                <i class="material-icons">layers</i>
                                                                <span>PENDIDIKAN</span>
                                                            </a>
                                                        </li>   
                                                        <?php
                                                            }
                                                        ?>
                                                        <!-- #END C6 -->

                                                        <?php 
                                                            $C7=DB::table('led_c7')
                                                                        ->join('users','led_c7.id_prodi','=','users.id_prodi')
                                                                        ->select('led_c7.*')
                                                                        ->where('users.id',Session::get('id'))
                                                                        ->first();
                                                        ?>
                                                        <!-- C7 -->
                                                        <?php
                                                            if($C7!=null){   
                                                        ?>
                                                        <li>
                                                            <!-- <a href={{url("c7?id=".$C7->id_prodi)}}> -->
                                                            <a href={{url("c7?id=".$C7->id_prodi."&upps=".$C7->id)}}>
                                                                <i class="material-icons">layers</i>
                                                                <span>PENELITIAN</span>
                                                            </a>
                                                        </li>
                                                        <?php
                                                            }
                                                            else{
                                                        ?>
                                                        <li>
                                                            <a href="{{url('tambahc7')}}">
                                                                <i class="material-icons">layers</i>
                                                                <span>PENELITIAN</span>
                                                            </a>
                                                        </li>   
                                                        <?php
                                                            }
                                                        ?>
                                                        <!-- #END C7 -->

                                                        <?php 
                                                            $C8=DB::table('led_c8')
                                                                        ->join('users','led_c8.id_prodi','=','users.id_prodi')
                                                                        ->select('led_c8.*')
                                                                        ->where('users.id',Session::get('id'))
                                                                        ->first();
                                                        ?>
                                                        <!-- C8 -->
                                                        <?php
                                                            if($C8!=null){   
                                                        ?>
                                                        <li>
                                                            <!-- <a href={{url("c8?id=".$C8->id_prodi)}}> -->
                                                            <a href={{url("c8?id=".$C8->id_prodi."&upps=".$C8->id)}}>
                                                                <i class="material-icons">layers</i>
                                                                <span>PENGABDIAN KEPADA MASYARAKAT</span>
                                                            </a>
                                                        </li>
                                                        <?php
                                                            }
                                                            else{
                                                        ?>
                                                        <li>
                                                            <a href="{{url('tambahc8')}}">
                                                                <i class="material-icons">layers</i>
                                                                <span>PENGABDIAN KEPADA MASYARAKAT</span>
                                                            </a>
                                                        </li>   
                                                        <?php
                                                            }
                                                        ?>
                                                        <!-- #END C8 -->

                                                        <?php 
                                                            $C9=DB::table('led_c9')
                                                                        ->join('users','led_c9.id_prodi','=','users.id_prodi')
                                                                        ->select('led_c9.*')
                                                                        ->where('users.id',Session::get('id'))
                                                                        ->first();
                                                        ?>
                                                        <!-- C9 -->
                                                        <?php
                                                            if($C9!=null){   
                                                        ?>
                                                        <li>
                                                            <!-- <a href={{url("c9?id=".$C9->id_prodi)}}> -->
                                                            <a href={{url("c9?id=".$C9->id_prodi."&upps=".$C9->id)}}>
                                                                <i class="material-icons">layers</i>
                                                                <span>LUARAN DAN CAPAIAN TRIDHARMA</span>
                                                            </a>
                                                        </li>
                                                        <?php
                                                            }
                                                            else{
                                                        ?>
                                                        <li>
                                                            <a href="{{url('tambahc9')}}">
                                                                <i class="material-icons">layers</i>
                                                                <span>LUARAN DAN CAPAIAN TRIDHARMA</span>
                                                            </a>
                                                        </li>   
                                                        <?php
                                                            }
                                                        ?>
                                                        <!-- #END C9 -->
                                                    </ul>
                                                </li>
                                            <!-- #END Kriteria -->


                                            <!-- Analisis dan Penetapan Program UPPS -->
                                                <?php 
                                                    $analisis=DB::table('led_analisis_upps')
                                                                ->join('users','led_analisis_upps.id_prodi','=','users.id_prodi')
                                                                ->select('led_analisis_upps.*')
                                                                ->where('users.id',Session::get('id'))
                                                                ->first();
                                                                
                                                    if($analisis!=null){
                                                ?>
                                                <li>
                                                    <!-- <a href={{url("analisis?id=".$analisis->id_prodi)}}> -->
                                                    <a href={{url("analisis?id=".$analisis->id_prodi."&upps=".$analisis->id)}}>
                                                        <i class="material-icons">layers</i>
                                                        <span>Analisis dan Penetapan Program UPPS</span>
                                                    </a>
                                                </li>
                                                <?php
                                                    }
                                                    else{
                                                ?>
                                                <li>
                                                    <a href="{{url('tambahanalisis')}}">
                                                        <i class="material-icons">layers</i>
                                                        <span>Analisis dan Penetapan Program UPPS</span>
                                                    </a>
                                                </li>   
                                                <?php
                                                    }
                                                ?>
                                            <!-- #END Analisis dan Penetapan Program UPPS -->
                                            

                                            <!-- Penutup -->
                                                <?php 
                                                    $penutup=DB::table('led_penutup')
                                                                ->join('users','led_penutup.id_prodi','=','users.id_prodi')
                                                                ->select('led_penutup.*')
                                                                ->where('users.id',Session::get('id'))
                                                                ->first();
                                                                
                                                    if($penutup!=null){
                                                ?>
                                                <li>
                                                    <!-- <a href={{url("penutup?id=".$penutup->id_prodi)}}> -->
                                                    <a href={{url("penutup?id=".$penutup->id_prodi."&upps=".$penutup->id)}}>
                                                        <i class="material-icons">layers</i>
                                                        <span>Penutup</span>
                                                    </a>
                                                </li>
                                                <?php
                                                    }
                                                    else{
                                                ?>
                                                <li>
                                                    <a href="{{url('tambahpenutup')}}">
                                                        <i class="material-icons">layers</i>
                                                        <span>Penutup</span>
                                                    </a>
                                                </li>   
                                                <?php
                                                    }
                                                ?>
                                            <!-- #END Penutup -->
                                            
                                            <!-- File Pendukung -->
                                                <li>
                                                    <a href="{{url('ledfile')}}">
                                                        <i class="material-icons">layers</i>
                                                        <span>File Pendukung LED</span>
                                                    </a>
                                                </li>   
                                            <!-- #END File Pendukung -->

                                            <!-- Download -->
                                                <li>
                                                    <a href="javascript:void(0);" class="menu-toggle">
                                                        <i class="material-icons">layers</i>
                                                        <span>Download LED</span>
                                                    </a>

                                                    <ul class="ml-menu">

                                                    <?php 
                                                        $pdf=DB::table('led_cover')
                                                                    ->join('users','led_cover.id_prodi','=','users.id_prodi')
                                                                    ->select('led_cover.*')
                                                                    ->where('users.id',Session::get('id'))
                                                                    ->first();
                                                        ?>
                                                        <?php
                                                            if($pdf!=null){
                                                        ?>
                                                        <li>
                                                            <a href={{url("cetak_pdf?id=".$pdf->id_prodi."&upps=".$pdf->id)}}>
                                                                <i class="material-icons">layers</i>
                                                                <span>PDF LED</span>
                                                            </a>
                                                        </li>

                                                            <?php
                                                                }
                                                                else{
                                                            ?>
                                                                <!-- DELETE -->
                                                                <li>
                                                                    <a href="#" class="btn btn-danger waves-effect" data-target="#modalHapus" data-toggle="modal">
                                                                        <i class="material-icons">layers</i>
                                                                        <span>PDF LED</span> 
                                                                    </a>
                                                                </li>
                                                                    <!-- Modal -->
                                                                    <div class="modal fade" id="modalHapus" tabindex="-1" role="dialog">
                                                                            <div class="modal-dialog" role="document">
                                                                                <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                                        <p>tes</p>
                                                                                        <p></p>
                                                                                        <h4 class="modal-title" style="text-align:center;">WARNING !!!</h4>
                                                                                    </div>
                                                                                    <div class="modal-body">
                                                                                        <p>Isi semua data LED (Laporan Evaluasi Diri), Jika belum tidak dapat untuk download pdf hasil LED</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                    </div>                                        
                                                                    <!-- #END# Modal -->
                                                                <!-- #END DELETE -->
                                                            <?php
                                                                }
                                                            ?>
                                                        <!-- #END pdf -->
                                                    </ul>
                                                </li>
                                            <!-- #END Download -->

                                            <!-- Print -->
                                                <?php 
                                                    $print=DB::table('led_penutup')
                                                            ->join('users','led_penutup.id_prodi','=','users.id_prodi')
                                                            ->select('led_penutup.*')
                                                            ->where('users.id',Session::get('id'))
                                                            ->first();
                                                ?>
                                                
                                                <?php
                                                    if($print!=null){
                                                ?>
                                                    <li>
                                                        <a href={{url("print?id=".$print->id_prodi."&upps=".$print->id)}}>
                                                            <i class="material-icons">layers</i>
                                                            <span>Print LED</span>
                                                        </a>
                                                    </li>
                                                <?php
                                                    }
                                                    else{
                                                ?>
                                                    <!-- DELETE -->
                                                    <li>
                                                        <a href="#" class="btn btn-danger waves-effect" data-target="#modalDelete" data-toggle="modal">
                                                            <i class="material-icons">layers</i>
                                                            <span>Print LED</span> 
                                                        </a>
                                                    </li>
                                                                    <!-- Modal Popup --> 
                                                                    <div id="modalDelete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                                    <br>
                                                                                    <h4 class="modal-title" style="text-align:center;">WARNING !!!</h4>
                                                                                </div>
                                                                                
                                                                                <div class="modal-body">
                                                                                    <p>Isi semua data LED (Laporan Evaluasi Diri), Jika belum tidak dapat untuk print hasil LED</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                    <!-- #END DELETE -->
                                                <?php
                                                    }
                                                ?>
                                            <!-- #END Print -->

                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </li>
                    <!-- #END LED -->

                    <!--Setting-->
                        <li class="header">SETTING</li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons">widgets</i>
                                    <span>SETTING</span>
                                </a>
                                <ul class="ml-menu">
                                    <!-- <li>
                                        <a href="jurusan">
                                            <i class="material-icons">layers</i>
                                            <span>Master Jurusan</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="prodi">
                                            <i class="material-icons">layers</i>
                                            <span>Master Prodi</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="standar">
                                            <i class="material-icons">layers</i>
                                            <span>Tambah Standar</span>
                                        </a>
                                    </li> -->
                                    <li>
                                        <a href="user">
                                            <i class="material-icons">person</i>
                                            <span>REGISTER USER</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </li>
                    <!-- #END Setting -->

                <!--ROLE 3/STANDAR 1-->
                @elseif(Session::get('id_role')=="3" AND Session::get('role_dosen')=="1")
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="/">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!-- Kriteria -->
                    <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">layers</i>
                        <span>Kriteria</span>
                    </a>
                        <ul class="ml-menu">
                            <?php 
                                $C1=DB::table('led_c1')
                                            ->join('users','led_c1.id_prodi','=','users.id_prodi')
                                            ->select('led_c1.*')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                            ?>
                            <!-- C1 -->
                            <?php
                                if($C1!=null){   
                            ?>
                            <li>
                                <a href={{url("c1?id=".$C1->id_prodi)}}>
                                    <i class="material-icons">layers</i>
                                    <span>ANALISIS DAN PENETAPAN PROGRAM UPPS</span>
                                </a>
                            </li>
                            <?php
                                }
                                else{
                            ?>
                            <li>
                                <a href="{{url('tambahc1')}}">
                                    <i class="material-icons">layers</i>
                                    <span>ANALISIS DAN PENETAPAN PROGRAM UPPS</span>
                                </a>
                            </li>   
                            <?php
                                }
                            ?>
                            <!-- #END C1 -->
                        </ul>
                    </li>
                <!--ROLE 3/STANDAR 2-->
                @elseif(Session::get('id_role')=="3" AND Session::get('role_dosen')=="2")
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="/">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!-- Kriteria -->
                    <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">layers</i>
                        <span>Kriteria</span>
                    </a>
                        <ul class="ml-menu">
                            <?php 
                                $C2=DB::table('led_c2')
                                            ->join('users','led_c2.id_prodi','=','users.id_prodi')
                                            ->select('led_c2.*')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                            ?>
                            <!-- C2 -->
                            <?php
                                if($C2!=null){   
                            ?>
                            <li>
                                <a href={{url("c2?id=".$C2->id_prodi)}}>
                                    <i class="material-icons">layers</i>
                                    <span>TATA PAMONG, TATA KELOLA, DAN KERJASAMA</span>
                                </a>
                            </li>
                            <?php
                                }
                                else{
                            ?>
                            <li>
                                <a href="{{url('tambahc2')}}">
                                    <i class="material-icons">layers</i>
                                    <span>TATA PAMONG, TATA KELOLA, DAN KERJASAMA</span>
                                </a>
                            </li>   
                            <?php
                                }
                            ?>
                            <!-- #END C2 -->
                        </ul>
                    </li>
                
                <!--ROLE 3/STANDAR 3-->
                @elseif(Session::get('id_role')=="3" AND Session::get('role_dosen')=="3")
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="/">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!-- Kriteria -->
                    <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">layers</i>
                        <span>Kriteria</span>
                    </a>
                        <ul class="ml-menu">
                            <?php 
                                $C3=DB::table('led_c3')
                                            ->join('users','led_c3.id_prodi','=','users.id_prodi')
                                            ->select('led_c3.*')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                            ?>
                            <!-- C3 -->
                            <?php
                                if($C3!=null){   
                            ?>
                            <li>
                                <a href={{url("c3?id=".$C3->id_prodi)}}>
                                    <i class="material-icons">layers</i>
                                    <span>MAHASISWA</span>
                                </a>
                            </li>
                            <?php
                                }
                                else{
                            ?>
                            <li>
                                <a href="{{url('tambahc3')}}">
                                    <i class="material-icons">layers</i>
                                    <span>MAHASISWA</span>
                                </a>
                            </li>   
                            <?php
                                }
                            ?>
                            <!-- #END C3 -->
                        </ul>
                    </li>

                <!--ROLE 3/STANDAR 4-->
                @elseif(Session::get('id_role')=="3" AND Session::get('role_dosen')=="4")
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="/">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!-- Kriteria -->
                    <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">layers</i>
                        <span>Kriteria</span>
                    </a>
                        <ul class="ml-menu">
                            <?php 
                                $C4=DB::table('led_c4')
                                            ->join('users','led_c4.id_prodi','=','users.id_prodi')
                                            ->select('led_c4.*')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                            ?>
                            <!-- C4 -->
                            <?php
                                if($C4!=null){   
                            ?>
                            <li>
                                <a href={{url("c4?id=".$C4->id_prodi)}}>
                                    <i class="material-icons">layers</i>
                                    <span>SUMBER DAYA MANUSIA</span>
                                </a>
                            </li>
                            <?php
                                }
                                else{
                            ?>
                            <li>
                                <a href="{{url('tambahc4')}}">
                                    <i class="material-icons">layers</i>
                                    <span>SUMBER DAYA MANUSIA</span>
                                </a>
                            </li>   
                            <?php
                                }
                            ?>
                            <!-- #END C4 -->
                        </ul>
                    </li>

                <!--ROLE 3/STANDAR 5-->
                @elseif(Session::get('id_role')=="3" AND Session::get('role_dosen')=="5")
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="/">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!-- Kriteria -->
                    <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">layers</i>
                        <span>Kriteria</span>
                    </a>
                        <ul class="ml-menu">
                            <?php 
                                $C5=DB::table('led_c5')
                                            ->join('users','led_c5.id_prodi','=','users.id_prodi')
                                            ->select('led_c5.*')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                            ?>
                            <!-- C5 -->
                            <?php
                                if($C5!=null){   
                            ?>
                            <li>
                                <a href={{url("c5?id=".$C5->id_prodi)}}>
                                    <i class="material-icons">layers</i>
                                    <span>KEUANGAN, SARANA, DAN PRASARANA</span>
                                </a>
                            </li>
                            <?php
                                }
                                else{
                            ?>
                            <li>
                                <a href="{{url('tambahc5')}}">
                                    <i class="material-icons">layers</i>
                                    <span>KEUANGAN, SARANA, DAN PRASARANA</span>
                                </a>
                            </li>   
                            <?php
                                }
                            ?>
                            <!-- #END C5 -->
                        </ul>
                    </li>

                <!--ROLE 3/STANDAR 6-->
                @elseif(Session::get('id_role')=="3" AND Session::get('role_dosen')=="6")
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="/">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!-- Kriteria -->
                    <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">layers</i>
                        <span>Kriteria</span>
                    </a>
                        <ul class="ml-menu">
                            <?php 
                                $C6=DB::table('led_c6')
                                            ->join('users','led_c6.id_prodi','=','users.id_prodi')
                                            ->select('led_c6.*')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                            ?>
                            <!-- C6 -->
                            <?php
                                if($C6!=null){   
                            ?>
                            <li>
                                <a href={{url("c6?id=".$C6->id_prodi)}}>
                                    <i class="material-icons">layers</i>
                                    <span>PENDIDIKAN</span>
                                </a>
                            </li>
                            <?php
                                }
                                else{
                            ?>
                            <li>
                                <a href="{{url('tambahc6')}}">
                                    <i class="material-icons">layers</i>
                                    <span>PENDIDIKAN</span>
                                </a>
                            </li>   
                            <?php
                                }
                            ?>
                            <!-- #END C6 -->
                        </ul>
                    </li>

                <!--ROLE 3/STANDAR 7-->
                @elseif(Session::get('id_role')=="3" AND Session::get('role_dosen')=="7")
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="/">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!-- Kriteria -->
                    <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">layers</i>
                        <span>Kriteria</span>
                    </a>
                        <ul class="ml-menu">
                            <?php 
                                $C7=DB::table('led_c7')
                                            ->join('users','led_c7.id_prodi','=','users.id_prodi')
                                            ->select('led_c7.*')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                            ?>
                            <!-- C7 -->
                            <?php
                                if($C7!=null){   
                            ?>
                            <li>
                                <a href={{url("c7?id=".$C7->id_prodi)}}>
                                    <i class="material-icons">layers</i>
                                    <span>PENELITIAN</span>
                                </a>
                            </li>
                            <?php
                                }
                                else{
                            ?>
                            <li>
                                <a href="{{url('tambahc7')}}">
                                    <i class="material-icons">layers</i>
                                    <span>PENELITIAN</span>
                                </a>
                            </li>   
                            <?php
                                }
                            ?>
                            <!-- #END C7 -->
                        </ul>
                    </li>

                <!--ROLE 3/STANDAR 8-->
                @elseif(Session::get('id_role')=="3" AND Session::get('role_dosen')=="8")
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="/">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!-- Kriteria -->
                    <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">layers</i>
                        <span>Kriteria</span>
                    </a>
                        <ul class="ml-menu">
                            <?php 
                                $C8=DB::table('led_c8')
                                            ->join('users','led_c8.id_prodi','=','users.id_prodi')
                                            ->select('led_c8.*')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                            ?>
                            <!-- C8 -->
                            <?php
                                if($C8!=null){   
                            ?>
                            <li>
                                <a href={{url("c8?id=".$C8->id_prodi)}}>
                                    <i class="material-icons">layers</i>
                                    <span>PENGABDIAN KEPADA MASYARAKAT</span>
                                </a>
                            </li>
                            <?php
                                }
                                else{
                            ?>
                            <li>
                                <a href="{{url('tambahc8')}}">
                                    <i class="material-icons">layers</i>
                                    <span>PENGABDIAN KEPADA MASYARAKAT</span>
                                </a>
                            </li>   
                            <?php
                                }
                            ?>
                            <!-- #END C8 -->
                        </ul>
                    </li>

                <!--ROLE 3/STANDAR 9-->
                @elseif(Session::get('id_role')=="3" AND Session::get('role_dosen')=="9")
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="/">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!-- Kriteria -->
                    <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">layers</i>
                        <span>Kriteria</span>
                    </a>
                        <ul class="ml-menu">
                            <?php 
                                $C9=DB::table('led_c9')
                                            ->join('users','led_c9.id_prodi','=','users.id_prodi')
                                            ->select('led_c9.*')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                            ?>
                            <!-- C9 -->
                            <?php
                                if($C9!=null){   
                            ?>
                            <li>
                                <a href={{url("c9?id=".$C9->id_prodi)}}>
                                    <i class="material-icons">layers</i>
                                    <span>LUARAN DAN CAPAIAN TRIDHARMA</span>
                                </a>
                            </li>
                            <?php
                                }
                                else{
                            ?>
                            <li>
                                <a href="{{url('tambahc9')}}">
                                    <i class="material-icons">layers</i>
                                    <span>LUARAN DAN CAPAIAN TRIDHARMA</span>
                                </a>
                            </li>   
                            <?php
                                }
                            ?>
                            <!-- #END C9 -->
                        </ul>
                    </li>

                <!--ROLE 4-->
                @elseif(Session::get('id_role')=="4")
                    <li class="header">MAIN NAVIGATION</li>
                    <!-- <li class="active">
                        <a href="/">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li> -->
                    <li>
                        <a href="dashboard">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <!-- LKPS -->
                    <li class="header">Laporan Kinerja Program Studi</li>

                    <!-- Cover -->
                            <?php 
                            $cover=DB::table('lkps_cover')
                                        ->join('users','lkps_cover.id_prodi','=','users.id_prodi')
                                        ->select('lkps_cover.*')
                                        ->where('users.id',Session::get('id'))
                                        ->first();
                            ?>
                            <?php
                                if($cover!=null){
                            ?>
                            <li>
                                <a href={{url("coverlkps?id=".$cover->id_prodi."&upps=".$cover->id)}}>
                                    <i class="material-icons">layers</i>
                                    <span>Cover LKPS</span>
                                </a>
                            </li>
                            <?php
                                }
                                else{
                            ?>
                            <li>
                                <a href="{{url('tambahcoverlkps')}}">
                                    <i class="material-icons">layers</i>
                                    <span>Cover LKPS</span>
                                </a>
                            </li>   
                            <?php
                                }
                            ?>
                    <!-- #END Cover -->
                    
                    <!-- C1 -->
                        <li>
                            <a href="C1_LKPS">
                                <i class="material-icons">layers</i>
                                <span>Tata Pamong, Tata Kelola, dan Kerjasama</span>
                            </a>
                        </li>
                    <!-- #END C1 -->

                    <!-- C2 -->
                        <li>
                            <a href="C2_LKPS">
                                <i class="material-icons">layers</i>
                                <span>Mahasiswa</span>
                            </a>
                        </li>
                    <!-- #END C2 -->
                    <!-- #END LKPS -->


                    <!-- LED -->
                    <li class="header">Laporan Evaluasi Diri</li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">widgets</i>
                                <span>LAPORAN EVALUASI DIRI</span>
                            </a>
                            <ul class="ml-menu">
                    
                    <!-- Cover -->
                        <?php 
                            $cover=DB::table('led_cover')
                                    ->join('users','led_cover.id_prodi','=','users.id_prodi')
                                    ->select('led_cover.*')
                                    ->where('users.id',Session::get('id'))
                                    ->first();
                        ?>
                        <?php
                            if($cover!=null){
                        ?>
                        <li>
                            <a href={{url("cover?id=".$cover->id_prodi."&upps=".$cover->id)}}>
                                <i class="material-icons">layers</i>
                                <span>Cover LED</span>
                            </a>
                        </li>
                        <?php
                            }
                            else{
                        ?>
                        <li>
                            <a href="" class="btn btn-danger waves-effect">
                                <i class="material-icons">layers</i>
                                <span>Cover LED</span>
                            </a>
                        </li>   
                        <?php
                            }
                        ?>
                    <!-- #END Cover -->

                    <!-- Pendahuluan -->
                        <?php 
                            $pendahuluan=DB::table('led_pendahuluan')
                                    ->join('users','led_pendahuluan.id_prodi','=','users.id_prodi')
                                    ->select('led_pendahuluan.*')
                                    ->where('users.id',Session::get('id'))
                                    ->first();
                        ?>
                        <!-- Kondisi Eksternal -->
                        <?php
                            if($pendahuluan!=null){
                        ?>
                        <li>
                            <!-- <a href={{url("pendahuluan?id=".$pendahuluan->id_prodi)}}> -->
                            <a href={{url("pendahuluan?id=".$pendahuluan->id_prodi."&upps=".$pendahuluan->id)}}>
                                <i class="material-icons">layers</i>
                                <span>Pendahuluan</span>
                            </a>
                        </li>
                        <?php
                            }
                            else{
                        ?>
                        <li>
                            <a href="" class="btn btn-danger waves-effect">
                                <i class="material-icons">layers</i>
                                <span>Pendahuluan</span>
                            </a>
                        </li>   
                        <?php
                            }
                        ?>
                    <!-- #END Pendahuluan -->

                    <!-- Laporan Evaluasi Diri -->
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">layers</i>
                                <span>Laporan Evaluasi Diri</span>
                            </a>
                            
                            <ul class="ml-menu">
                                <?php 
                                $koneks=DB::table('led_kondisieks')
                                            ->join('users','led_kondisieks.id_prodi','=','users.id_prodi')
                                            ->select('led_kondisieks.*')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                                ?>
                                <!-- Kondisi Eksternal -->
                                <?php
                                    if($koneks!=null){
                                ?>
                                <li>
                                    <!-- <a href={{url("kondisieks?id=".$koneks->id_prodi)}}> -->
                                    <a href={{url("kondisieks?id=".$koneks->id_prodi."&upps=".$koneks->id)}}>
                                        <i class="material-icons">layers</i>
                                        <span>Kondisi Eksternal</span>
                                    </a>
                                </li>
                                <?php
                                    }
                                    else{
                                ?>
                                <li>
                                    <a href="" class="btn btn-danger waves-effect">
                                        <i class="material-icons">layers</i>
                                        <span>Kondisi Eksternal</span>
                                    </a>
                                </li>   
                                <?php
                                    }
                                ?>
                                <!-- #END Kondisi Eksternal -->
                                
                                <?php 
                                $profil=DB::table('led_upps')
                                            ->join('users','led_upps.id_prodi','=','users.id_prodi')
                                            ->select('led_upps.*')
                                            ->where('users.id',Session::get('id'))
                                            ->first();
                                ?>
                                <!-- Profil Unit Pengelola Program Studi (UPPS) -->
                                <?php
                                    if($profil!=null){
                                ?>
                                <li>
                                    <!-- <a href={{url("profilupps?id=".$profil->id_prodi)}}> -->
                                    <a href={{url("profilupps?id=".$profil->id_prodi."&upps=".$profil->id)}}>
                                        <i class="material-icons">layers</i>
                                        <span>Profil Unit Pengelola Program Studi (UPPS)</span>
                                    </a>
                                </li>
                                <?php
                                    }
                                    else{
                                ?>
                                <li>
                                    <a href="" class="btn btn-danger waves-effect">
                                        <i class="material-icons">layers</i>
                                        <span>Profil Unit Pengelola Program Studi (UPPS)</span>
                                    </a>
                                </li>   
                                <?php
                                    }
                                ?>
                                <!-- #END Profil Unit Pengelola Program Studi (UPPS) -->
                            </ul>
                        </li>
                    <!-- #END Laporan Evaluasi Diri -->
                    
                    <!-- Kriteria -->
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">layers</i>
                                <span>Kriteria</span>
                            </a>

                            <ul class="ml-menu">
                                <?php 
                                    $C1=DB::table('led_c1')
                                                ->join('users','led_c1.id_prodi','=','users.id_prodi')
                                                ->select('led_c1.*')
                                                ->where('users.id',Session::get('id'))
                                                ->first();
                                ?>
                                <!-- C1 -->
                                <?php
                                    if($C1!=null){   
                                ?>
                                <li>
                                    <!-- <a href={{url("c1?id=".$C1->id_prodi)}}> -->
                                    <a href={{url("c1?id=".$C1->id_prodi."&upps=".$C1->id)}}>
                                        <i class="material-icons">layers</i>
                                        <span>ANALISIS DAN PENETAPAN PROGRAM UPPS</span>
                                    </a>
                                </li>
                                <?php
                                    }
                                    else{
                                ?>
                                <li>
                                    <a href="" class="btn btn-danger waves-effect">
                                        <i class="material-icons">layers</i>
                                        <span>ANALISIS DAN PENETAPAN PROGRAM UPPS</span>
                                    </a>
                                </li>   
                                <?php
                                    }
                                ?>
                                <!-- #END C1 -->

                                <?php 
                                    $C2=DB::table('led_c2')
                                                ->join('users','led_c2.id_prodi','=','users.id_prodi')
                                                ->select('led_c2.*')
                                                ->where('users.id',Session::get('id'))
                                                ->first();
                                ?>
                                <!-- C2 -->
                                <?php
                                    if($C2!=null){   
                                ?>
                                <li>
                                    <!-- <a href={{url("c2?id=".$C2->id_prodi)}}> -->
                                    <a href={{url("c2?id=".$C2->id_prodi."&upps=".$C2->id)}}>
                                        <i class="material-icons">layers</i>
                                        <span>TATA PAMONG, TATA KELOLA, DAN KERJASAMA</span>
                                    </a>
                                </li>
                                <?php
                                    }
                                    else{
                                ?>
                                <li>
                                    <a href="" class="btn btn-danger waves-effect">
                                        <i class="material-icons">layers</i>
                                        <span>TATA PAMONG, TATA KELOLA, DAN KERJASAMA</span>
                                    </a>
                                </li>   
                                <?php
                                    }
                                ?>
                                <!-- #END C2 -->

                                <?php 
                                    $C3=DB::table('led_c3')
                                                ->join('users','led_c3.id_prodi','=','users.id_prodi')
                                                ->select('led_c3.*')
                                                ->where('users.id',Session::get('id'))
                                                ->first();
                                ?>
                                <!-- C3 -->
                                <?php
                                    if($C3!=null){   
                                ?>
                                <li>
                                    <!-- <a href={{url("c3?id=".$C3->id_prodi)}}> -->
                                    <a href={{url("c3?id=".$C3->id_prodi."&upps=".$C3->id)}}>
                                        <i class="material-icons">layers</i>
                                        <span>MAHASISWA</span>
                                    </a>
                                </li>
                                <?php
                                    }
                                    else{
                                ?>
                                <li>
                                    <a href="" class="btn btn-danger waves-effect">
                                        <i class="material-icons">layers</i>
                                        <span>MAHASISWA</span>
                                    </a>
                                </li>   
                                <?php
                                    }
                                ?>
                                <!-- #END C3 -->

                                <?php 
                                    $C4=DB::table('led_c4')
                                                ->join('users','led_c4.id_prodi','=','users.id_prodi')
                                                ->select('led_c4.*')
                                                ->where('users.id',Session::get('id'))
                                                ->first();
                                ?>
                                <!-- C4 -->
                                <?php
                                    if($C4!=null){   
                                ?>
                                <li>
                                    <!-- <a href={{url("c4?id=".$C4->id_prodi)}}> -->
                                    <a href={{url("c4?id=".$C4->id_prodi."&upps=".$C4->id)}}>
                                        <i class="material-icons">layers</i>
                                        <span>SUMBER DAYA MANUSIA</span>
                                    </a>
                                </li>
                                <?php
                                    }
                                    else{
                                ?>
                                <li>
                                    <a href="" class="btn btn-danger waves-effect">
                                        <i class="material-icons">layers</i>
                                        <span>SUMBER DAYA MANUSIA</span>
                                    </a>
                                </li>   
                                <?php
                                    }
                                ?>
                                <!-- #END C4 -->

                                <?php 
                                    $C5=DB::table('led_c5')
                                                ->join('users','led_c5.id_prodi','=','users.id_prodi')
                                                ->select('led_c5.*')
                                                ->where('users.id',Session::get('id'))
                                                ->first();
                                ?>
                                <!-- C5 -->
                                <?php
                                    if($C5!=null){   
                                ?>
                                <li>
                                    <!-- <a href={{url("c5?id=".$C5->id_prodi)}}> -->
                                    <a href={{url("c5?id=".$C5->id_prodi."&upps=".$C5->id)}}>
                                        <i class="material-icons">layers</i>
                                        <span>KEUANGAN, SARANA, DAN PRASARANA</span>
                                    </a>
                                </li>
                                <?php
                                    }
                                    else{
                                ?>
                                <li>
                                    <a href="" class="btn btn-danger waves-effect">
                                        <i class="material-icons">layers</i>
                                        <span>KEUANGAN, SARANA, DAN PRASARANA</span>
                                    </a>
                                </li>   
                                <?php
                                    }
                                ?>
                                <!-- #END C5 -->

                                <?php 
                                    $C6=DB::table('led_c6')
                                                ->join('users','led_c6.id_prodi','=','users.id_prodi')
                                                ->select('led_c6.*')
                                                ->where('users.id',Session::get('id'))
                                                ->first();
                                ?>
                                <!-- C6 -->
                                <?php
                                    if($C6!=null){   
                                ?>
                                <li>
                                    <!-- <a href={{url("c6?id=".$C6->id_prodi)}}> -->
                                    <a href={{url("c6?id=".$C6->id_prodi."&upps=".$C6->id)}}>
                                        <i class="material-icons">layers</i>
                                        <span>PENDIDIKAN</span>
                                    </a>
                                </li>
                                <?php
                                    }
                                    else{
                                ?>
                                <li>
                                    <a href="" class="btn btn-danger waves-effect">
                                        <i class="material-icons">layers</i>
                                        <span>PENDIDIKAN</span>
                                    </a>
                                </li>   
                                <?php
                                    }
                                ?>
                                <!-- #END C6 -->

                                <?php 
                                    $C7=DB::table('led_c7')
                                                ->join('users','led_c7.id_prodi','=','users.id_prodi')
                                                ->select('led_c7.*')
                                                ->where('users.id',Session::get('id'))
                                                ->first();
                                ?>
                                <!-- C7 -->
                                <?php
                                    if($C7!=null){   
                                ?>
                                <li>
                                    <!-- <a href={{url("c7?id=".$C7->id_prodi)}}> -->
                                    <a href={{url("c7?id=".$C7->id_prodi."&upps=".$C7->id)}}>
                                        <i class="material-icons">layers</i>
                                        <span>PENELITIAN</span>
                                    </a>
                                </li>
                                <?php
                                    }
                                    else{
                                ?>
                                <li>
                                    <a href="" class="btn btn-danger waves-effect">
                                        <i class="material-icons">layers</i>
                                        <span>PENELITIAN</span>
                                    </a>
                                </li>   
                                <?php
                                    }
                                ?>
                                <!-- #END C7 -->

                                <?php 
                                    $C8=DB::table('led_c8')
                                                ->join('users','led_c8.id_prodi','=','users.id_prodi')
                                                ->select('led_c8.*')
                                                ->where('users.id',Session::get('id'))
                                                ->first();
                                ?>
                                <!-- C8 -->
                                <?php
                                    if($C8!=null){   
                                ?>
                                <li>
                                    <!-- <a href={{url("c8?id=".$C8->id_prodi)}}> -->
                                    <a href={{url("c8?id=".$C8->id_prodi."&upps=".$C8->id)}}>
                                        <i class="material-icons">layers</i>
                                        <span>PENGABDIAN KEPADA MASYARAKAT</span>
                                    </a>
                                </li>
                                <?php
                                    }
                                    else{
                                ?>
                                <li>
                                    <a href="" class="btn btn-danger waves-effect">
                                        <i class="material-icons">layers</i>
                                        <span>PENGABDIAN KEPADA MASYARAKAT</span>
                                    </a>
                                </li>   
                                <?php
                                    }
                                ?>
                                <!-- #END C8 -->

                                <?php 
                                    $C9=DB::table('led_c9')
                                                ->join('users','led_c9.id_prodi','=','users.id_prodi')
                                                ->select('led_c9.*')
                                                ->where('users.id',Session::get('id'))
                                                ->first();
                                ?>
                                <!-- C9 -->
                                <?php
                                    if($C9!=null){   
                                ?>
                                <li>
                                    <!-- <a href={{url("c9?id=".$C9->id_prodi)}}> -->
                                    <a href={{url("c9?id=".$C9->id_prodi."&upps=".$C9->id)}}>
                                        <i class="material-icons">layers</i>
                                        <span>LUARAN DAN CAPAIAN TRIDHARMA</span>
                                    </a>
                                </li>
                                <?php
                                    }
                                    else{
                                ?>
                                <li>
                                    <a href="" class="btn btn-danger waves-effect">
                                        <i class="material-icons">layers</i>
                                        <span>LUARAN DAN CAPAIAN TRIDHARMA</span>
                                    </a>
                                </li>   
                                <?php
                                    }
                                ?>
                                <!-- #END C9 -->
                            </ul>
                        </li>
                    <!-- #END Kriteria -->


                    <!-- Analisis dan Penetapan Program UPPS -->
                        <?php 
                            $analisis=DB::table('led_analisis_upps')
                                        ->join('users','led_analisis_upps.id_prodi','=','users.id_prodi')
                                        ->select('led_analisis_upps.*')
                                        ->where('users.id',Session::get('id'))
                                        ->first();

                            if($analisis!=null){
                        ?>
                        <li>
                            <!-- <a href={{url("analisis?id=".$analisis->id_prodi)}}> -->
                            <a href={{url("analisis?id=".$analisis->id_prodi."&upps=".$analisis->id)}}>
                                <i class="material-icons">layers</i>
                                <span>Analisis dan Penetapan Program UPPS</span>
                            </a>
                        </li>
                        <?php
                            }
                            else{
                        ?>
                        <li>
                            <a href="" class="btn btn-danger waves-effect">
                                <i class="material-icons">layers</i>
                                <span>Analisis dan Penetapan Program UPPS</span>
                            </a>
                        </li>   
                        <?php
                            }
                        ?>
                    <!-- #END Analisis dan Penetapan Program UPPS -->
                    

                    <!-- Penutup -->
                        <?php 
                            $penutup=DB::table('led_penutup')
                                        ->join('users','led_penutup.id_prodi','=','users.id_prodi')
                                        ->select('led_penutup.*')
                                        ->where('users.id',Session::get('id'))
                                        ->first();
                            
                            if($penutup!=null){
                        ?>
                        <li>
                            <!-- <a href={{url("penutup?id=".$penutup->id_prodi)}}> -->
                            <a href={{url("penutup?id=".$penutup->id_prodi."&upps=".$penutup->id)}}>
                                <i class="material-icons">layers</i>
                                <span>Penutup</span>
                            </a>
                        </li>
                        <?php
                            }
                            else{
                        ?>
                        <li>
                            <a href="" class="btn btn-danger waves-effect">
                                <i class="material-icons">layers</i>
                                <span>Penutup</span>
                            </a>
                        </li>   
                        <?php
                            }
                        ?>
                    <!-- #END Penutup -->
                            </ul>
                        </li>
                    </li>
                @endif
</ul>