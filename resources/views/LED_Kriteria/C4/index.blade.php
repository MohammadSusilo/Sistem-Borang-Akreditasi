@extends('layout.basemenu')
@section('content')
  <!-- Main content -->
  <section class="content">
        <div class="container-fluid">
            <div class="block-header">
               <!-- Advanced Form Example With Validation -->
               <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>SUMBER DAYA MANUSIA</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    @if(Session::get('id_role')=="4")
                        <div class="body">
                            <?php
                                // dd($_GET['id']);
                                $cek=DB::table('led_c4')->where('id_prodi',$_GET['id'])->first();
                                // dd($cek);
                            ?>
                            <!-- UPDATE -->
                            <form id="wizard_with_validation" method="POST">
                            {{ csrf_field() }}
                                <h3>Latar Belakang</h3>    
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Bagian ini mencakup latar belakang, tujuan, dan rasional strategi
                                        pencapaian standar yang ditetapkan perguruan tinggi terkait sumber
                                        daya manusia (SDM) yang mencakup: kualifikasi, kompetensi, beban
                                        kerja, proporsi, serta pengelolaan SDM (dosen dan tenaga
                                        kependidikan).</p>
                                        <br>
                                        <div>
                                            <input type="hidden" name="id" value="{{ $cek->id}}"> <br/>
                                            <textarea rows="10" cols="800" name="desc" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->description?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                
                                <h3>Kebijakan</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi deskripsi dokumen formal kebijakan yang mencakup:</p>
                                        <ol type="a">
                                            <li>Kebijakan penetapan standar perguruan tinggi terkait kualifikasi, kompetensi, beban kerja, proporsi, serta pengelolaan SDM (dosen dan tenaga kependidikan).</li>
                                            <li>Pengelolaan SDM mencakup:</li>
                                            <ol>
                                                <li>Perencanaan, rekrutmen, seleksi, penempatan, pengembangan, retensi, pemberhentian, dan pensiun telah ditetapkan untuk memenuhi kebutuhan pendidikan, penelitian, dan PkM.</li>
                                                <li>Kriteria perencanaan, rekrutmen, seleksi, penempatan, pengembangan, retensi, pemberhentian, dan pensiun ditetapkan serta dikomunikasikan.</li>
                                                <li>Kegiatan pengembangan seperti: studi lanjut, seminar, konferensi, workshop, simposium, dll.</li>
                                                <li>Skema pemberian reward and punishment, pengakuan, mentoring yang diimplementasikan untuk memotivasi dan mendukung tridharma.</li>
                                            </ol>
                                            <br>
                                            <div>
                                                <textarea rows="10" cols="800" name="kebijakan" class="ckeditor" id="ckedtor">
                                                    <?php echo $cek->kebijakan?>
                                                </textarea>
                                            </div>
                                        </ol>
                                    </div>
                                </fieldset>

                                <h3>Strategi Pencapaian Standar</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Bagian ini mencakup strategi UPPS dalam pencapaian standar yang
                                        sudah ditetapkan oleh perguruan tinggi terkait SDM (pendidik, peneliti,
                                        dan pelaksana PkM). Pada bagian ini juga harus diuraikan sumber daya
                                        yang dialokasikan untuk mencapai standar yang telah ditetapkan serta
                                        mekanisme kontrol pencapaiannya.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="strategi" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->stp_standar?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Indikator Kinerja Utama</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Tampilkan data SDM dengan teknik representasi yang relevan
                                        (misalnya: kurva tren, rasio, dan proporsi) dan komprehensif serta
                                        simpulkan kecenderungan yang terjadi. Data dan analisis yang
                                        disampaikan meliputi:</p>
                                        <ol type="A">
                                            <li>Profil Dosen</li>
                                                <ol>
                                                    <li>Jumlah dan kualifikasi:</li>
                                                        <ol type="a">
                                                            <li>Dosen tetap perguruan tinggi yang ditugaskan sebagai pengampu mata kuliah di program studi yang diakreditasi (DT) dan (Tabel 3.a.1) LKPS)</li>
                                                            <li>dosen tetap perguruan tinggi yang ditugaskan sebagai pengampu mata kuliah dengan bidang keahlian yang sesuai dengan kompetensi inti program studi (DTPS) (Tabel 3.a.1)LKPS).</li>
                                                        </ol>
                                                    <li>Persentase jumlah DT/DTPS dengan pendidikan S3 terhadap total jumlah DT/DTPS (Tabel 3.a.1) LKPS)</li>
                                                    <li>Persentase jumlah DT/DTPS dengan jabatan akademik GB/LK terhadap total jumlah DT/DTPS (Tabel 3.a.1) LKPS).</li>
                                                    <li>Persentase jumlah DT/DTPS yang memiliki sertifikat pendidik profesional terhadap total jumlah DT/DTPS (Tabel 3.a.1) LKPS).</li>
                                                    <li>Persentase jumlah DTPS yang memiliki sertifikat profesi/ kompetensi/industri terhadap total jumlah DTPS (Tabel 3.a.1) LKPS). Data dan analisis disampaikan oleh program studi pada program vokasi/profesi.</li>
                                                    <li>Ekuivalensi Waktu Mengajar Penuh (EWMP) dari DT/DTPS untuk kegiatan pendidikan, penelitian, PkM, dan tugas tambahan dan/atau penunjang (Tabel 3.a.2) LKPS).</li>
                                                    <li>Persentase jumlah dosen tidak tetap (DTT) terhadap jumlah seluruh dosen (DT dan DTT) (Tabel 3.a.1) dan Tabel 3.a.3) LKPS).</li>
                                                    <li>Rasio jumlah mahasiswa Program Studi terhadap jumlah DT (Tabel 2.a dan Tabel 3.a.1) LKPS).</li>
                                                    <li>Beban DTPS sebagai pembimbing tugas akhir mahasiswa (Tabel 3.a.4) LKPS)</li>
                                                    <li>Kecukupan dosen industri (Tabel 3.a.5) LKPS). Data dan analisis disampaikan oleh program studi pada program vokasi/profesi</li>
                                                </ol>
                                                <br>
                                                <div>
                                                    <textarea rows="10" cols="800" name="iku1" class="ckeditor" id="ckedtor">
                                                        <?php echo $cek->iku1?>
                                                    </textarea>
                                                </div>
                                            <li>Kinerja Dosen</li>
                                                <ol>
                                                    <li>Pengakuan/rekognisi atas kepakaran/prestasi/kinerja DTPS (Tabel 3.b.1) LKPS).</li>
                                                    <li>Penelitian DTPS (Tabel 3.b.2) LKPS).</li>
                                                    <li>Pelaksanaan Pengabdian kepada Masyarakat DTPS (Tabel 3.b.3) LKPS).</li>
                                                    <li>Publikasi Ilmiah yang dihasilkan oleh DTPS dalam 3 tahun terakhir (Tabel 3.b.4) LKPS).</li>
                                                    <li>Luaran Lainnya yang dihasilkan oleh DTPS dalam 3 tahun terakhir (Tabel 3.b.5) LKPS).</li>
                                                    <li>Karya ilmiah DTPS yang disitasi dalam 3 tahun terakhir (Tabel 3.b.6) LKPS. Data dan analisis disampaikan oleh program studi pada program akademik/profesi.</li>
                                                    <li>Produk/Jasa DTPS yang diadopsi oleh Industri/Masyarakat (Tabel 3.b.6) LKPS). Data dan analisis disampaikan oleh program studi pada program vokasi.</li>
                                                </ol>
                                            <br>
                                            <div>
                                                <textarea rows="10" cols="800" name="iku2" class="ckeditor" id="ckedtor">
                                                    <?php echo $cek->iku2?>
                                                </textarea>
                                            </div>
                                            <li>Pengembangan Dosen</li>
                                                <p class="justify">Kesesuaian perencanaan dan pengembangan dosen UPPS dengan
                                                rencana pengembangan SDM di perguruan tinggi (Renstra
                                                Perguruan Tinggi).</p>
                                            <br>
                                            <div>
                                                <textarea rows="10" cols="800" name="iku3" class="ckeditor" id="ckedtor">
                                                    <?php echo $cek->iku3?>
                                                </textarea>
                                            </div>
                                            <li>Tenaga Kependidikan</li>
                                                <p class="justify">Kecukupan dan kualifikasi tenaga kependidikan berdasarkan jenis
                                                pekerjaannya (administrasi, laboran, teknisi, dll.) yang memiliki
                                                sertifikat kompetensi/profesi sesuai dengan bidang tugasnya.
                                                Indikator Kecukupan: beban kerja tenaga kependidikan, jumlah,
                                                dukungan Teknologi Informasi (fungsi-fungsi yang sudah berjalan),
                                                dan kompetensi tenaga kependidikan.</p>
                                            <br>
                                            <div>
                                                <textarea rows="10" cols="800" name="iku4" class="ckeditor" id="ckedtor">
                                                    <?php echo $cek->iku4?>
                                                </textarea>
                                            </div>
                                        </ol>
                                    </div>
                                </fieldset>

                                <h3>Indikator Kinerja Tambahan</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Indikator kinerja tambahan adalah indikator SDM lain berdasarkan
                                        standar yang ditetapkan oleh masing-masing perguruan tinggi untuk
                                        melampaui SN-DIKTI. Data indikator kinerja tambahan yang sahih harus
                                        diukur, dimonitor, dikaji, dan dianalisis untuk perbaikan berkelanjutan.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="ikt" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->ikt?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Evaluasi Capaian Kinerja</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi deskripsi dan analisis keberhasilan dan/atau ketidakberhasilan
                                        pencapaian standar yang telah ditetapkan. Capaian kinerja harus diukur
                                        dengan metoda yang tepat, dan hasilnya dianalisis serta dievaluasi.
                                        Analisis terhadap capaian kinerja harus mencakup identifikasi akar
                                        masalah, faktor pendukung keberhasilan dan faktor penghambat
                                        ketercapaian standar, dan deskripsi singkat tindak lanjut yang akan
                                        dilakukan UPPS.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="eval" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->eval?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Penjaminan Mutu SDM</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi deskripsi dan bukti sahih tentang implementasi sistem penjaminan
                                        mutu di UPPS yang sesuai dengan standar yang ditetapkan perguruan
                                        tinggi terkait SDM mengikuti siklus penetapan, pelaksanaan, evaluasi,
                                        pengendalian, dan perbaikan berkelanjutan (PPEPP).</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="pm_sdm" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->pm_sdm?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Kepuasan Pengguna</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <ol type="a">
                                            <li>Deskripsi sistem untuk mengukur kepuasan dosen dan tenaga kependidikan terhadap pengelolaan SDM, termasuk kejelasan instrumen yang digunakan, pelaksanaan, perekaman dan analisis datanya</li>
                                            <li>Ketersediaan bukti yang sahih tentang hasil pengukuran kepuasan dosen dan tenaga kependidikan yang dilaksanakan secara konsisten, dan ditindaklanjuti secara berkala dan tersistem.</li>
                                            <br>
                                            <div>
                                                <textarea rows="10" cols="800" name="kpg" class="ckeditor" id="ckedtor">
                                                    <?php echo $cek->kpg?>
                                                </textarea>
                                            </div>
                                        </ol>
                                    </div>
                                </fieldset>

                        <?php
                            $cek1=DB::table('komentar')->where('id_c4',$_GET['upps'])->first();
                        ?>
                        @if($cek1 != null)
                            <h3>Simpulan Hasil Evaluasi dan Tindak lanjut</h3> 
                                <fieldset>
                                <div class="row justify-content-end">
                                    <p class="justify">Berisi ringkasan dari: pemosisian, masalah dan akar masalah, serta
                                        rencana perbaikan dan pengembangan SDM oleh UPPS terkait program
                                        studi yang diakreditasi.</p>
                                    <br>
                                    <div>
                                        <textarea rows="10" cols="800" name="desc" class="ckeditor" id="ckedtor" required>
                                            <?php echo $cek->simpulan?>
                                        </textarea>
                                    </div>
                                </div>
                                    <?php
                                        $cek1=DB::table('komentar')->where('id_c4',$_GET['upps'])->first();
                                    ?>
                                    <div class="modal-footer">
                                        <input name="komentar" value="<?php echo $cek1->ket?>" placeholder="Komentar" type="text" class="form-control form-control-sm col-sm-6" id="pt">
                        @else
                            <form  action="{{ url('komentarpendahuluan') }}" id="wizard_with_validation" method="POST">
                            <h3>Simpulan Hasil Evaluasi dan Tindak lanjut</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi ringkasan dari: pemosisian, masalah dan akar masalah, serta
                                            rencana perbaikan dan pengembangan SDM oleh UPPS terkait program
                                            studi yang diakreditasi.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="mkp" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->simpulan?>
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" name="id_c4" value="{{$id_c4}}"/>
                                        <input name="komentar" placeholder="Komentar" type="text" class="form-control form-control-sm col-sm-6" id="pt">
                                        <button type="submit" class="btn btn-primary waves-effect" name="simpan" value="Simpan">SAVE</button>
                            </form>
                        @endif
                            <!-- #END UPDATE -->
                                        <button type="reset" class="btn btn-secondary waves-effect" name="batal" value="Batal">CANCEL</button>
                                    <div>
                                    <!-- #END DELETE -->
                                </fieldset>
                        </div>
                    @else
                        <div class="body">
                            <?php
                                // dd($_GET['id']);
                                $cek=DB::table('led_c4')->where('id_prodi',$_GET['id'])->first();
                                // dd($cek);
                            ?>
                            <!-- UPDATE -->
                            <form action="{{ url('updatec4') }}" id="wizard_with_validation" method="POST">
                            {{ csrf_field() }}
                                <h3>Latar Belakang</h3>    
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Bagian ini mencakup latar belakang, tujuan, dan rasional strategi
                                        pencapaian standar yang ditetapkan perguruan tinggi terkait sumber
                                        daya manusia (SDM) yang mencakup: kualifikasi, kompetensi, beban
                                        kerja, proporsi, serta pengelolaan SDM (dosen dan tenaga
                                        kependidikan).</p>
                                        <br>
                                        <div>
                                            <input type="hidden" name="id" value="{{ $cek->id}}"> <br/>
                                            <textarea rows="10" cols="800" name="desc" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->description?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>
                                
                                <h3>Kebijakan</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi deskripsi dokumen formal kebijakan yang mencakup:</p>
                                        <ol type="a">
                                            <li>Kebijakan penetapan standar perguruan tinggi terkait kualifikasi, kompetensi, beban kerja, proporsi, serta pengelolaan SDM (dosen dan tenaga kependidikan).</li>
                                            <li>Pengelolaan SDM mencakup:</li>
                                            <ol>
                                                <li>Perencanaan, rekrutmen, seleksi, penempatan, pengembangan, retensi, pemberhentian, dan pensiun telah ditetapkan untuk memenuhi kebutuhan pendidikan, penelitian, dan PkM.</li>
                                                <li>Kriteria perencanaan, rekrutmen, seleksi, penempatan, pengembangan, retensi, pemberhentian, dan pensiun ditetapkan serta dikomunikasikan.</li>
                                                <li>Kegiatan pengembangan seperti: studi lanjut, seminar, konferensi, workshop, simposium, dll.</li>
                                                <li>Skema pemberian reward and punishment, pengakuan, mentoring yang diimplementasikan untuk memotivasi dan mendukung tridharma.</li>
                                            </ol>
                                            <br>
                                            <div>
                                                <textarea rows="10" cols="800" name="kebijakan" class="ckeditor" id="ckedtor">
                                                    <?php echo $cek->kebijakan?>
                                                </textarea>
                                            </div>
                                        </ol>
                                    </div>
                                </fieldset>

                                <h3>Strategi Pencapaian Standar</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Bagian ini mencakup strategi UPPS dalam pencapaian standar yang
                                        sudah ditetapkan oleh perguruan tinggi terkait SDM (pendidik, peneliti,
                                        dan pelaksana PkM). Pada bagian ini juga harus diuraikan sumber daya
                                        yang dialokasikan untuk mencapai standar yang telah ditetapkan serta
                                        mekanisme kontrol pencapaiannya.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="strategi" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->stp_standar?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Indikator Kinerja Utama</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Tampilkan data SDM dengan teknik representasi yang relevan
                                        (misalnya: kurva tren, rasio, dan proporsi) dan komprehensif serta
                                        simpulkan kecenderungan yang terjadi. Data dan analisis yang
                                        disampaikan meliputi:</p>
                                        <ol type="A">
                                            <li>Profil Dosen</li>
                                                <ol>
                                                    <li>Jumlah dan kualifikasi:</li>
                                                        <ol type="a">
                                                            <li>Dosen tetap perguruan tinggi yang ditugaskan sebagai pengampu mata kuliah di program studi yang diakreditasi (DT) dan (Tabel 3.a.1) LKPS)</li>
                                                            <li>dosen tetap perguruan tinggi yang ditugaskan sebagai pengampu mata kuliah dengan bidang keahlian yang sesuai dengan kompetensi inti program studi (DTPS) (Tabel 3.a.1)LKPS).</li>
                                                        </ol>
                                                    <li>Persentase jumlah DT/DTPS dengan pendidikan S3 terhadap total jumlah DT/DTPS (Tabel 3.a.1) LKPS)</li>
                                                    <li>Persentase jumlah DT/DTPS dengan jabatan akademik GB/LK terhadap total jumlah DT/DTPS (Tabel 3.a.1) LKPS).</li>
                                                    <li>Persentase jumlah DT/DTPS yang memiliki sertifikat pendidik profesional terhadap total jumlah DT/DTPS (Tabel 3.a.1) LKPS).</li>
                                                    <li>Persentase jumlah DTPS yang memiliki sertifikat profesi/ kompetensi/industri terhadap total jumlah DTPS (Tabel 3.a.1) LKPS). Data dan analisis disampaikan oleh program studi pada program vokasi/profesi.</li>
                                                    <li>Ekuivalensi Waktu Mengajar Penuh (EWMP) dari DT/DTPS untuk kegiatan pendidikan, penelitian, PkM, dan tugas tambahan dan/atau penunjang (Tabel 3.a.2) LKPS).</li>
                                                    <li>Persentase jumlah dosen tidak tetap (DTT) terhadap jumlah seluruh dosen (DT dan DTT) (Tabel 3.a.1) dan Tabel 3.a.3) LKPS).</li>
                                                    <li>Rasio jumlah mahasiswa Program Studi terhadap jumlah DT (Tabel 2.a dan Tabel 3.a.1) LKPS).</li>
                                                    <li>Beban DTPS sebagai pembimbing tugas akhir mahasiswa (Tabel 3.a.4) LKPS)</li>
                                                    <li>Kecukupan dosen industri (Tabel 3.a.5) LKPS). Data dan analisis disampaikan oleh program studi pada program vokasi/profesi</li>
                                                </ol>
                                                <br>
                                                <div>
                                                    <textarea rows="10" cols="800" name="iku1" class="ckeditor" id="ckedtor">
                                                        <?php echo $cek->iku1?>
                                                    </textarea>
                                                </div>
                                            <li>Kinerja Dosen</li>
                                                <ol>
                                                    <li>Pengakuan/rekognisi atas kepakaran/prestasi/kinerja DTPS (Tabel 3.b.1) LKPS).</li>
                                                    <li>Penelitian DTPS (Tabel 3.b.2) LKPS).</li>
                                                    <li>Pelaksanaan Pengabdian kepada Masyarakat DTPS (Tabel 3.b.3) LKPS).</li>
                                                    <li>Publikasi Ilmiah yang dihasilkan oleh DTPS dalam 3 tahun terakhir (Tabel 3.b.4) LKPS).</li>
                                                    <li>Luaran Lainnya yang dihasilkan oleh DTPS dalam 3 tahun terakhir (Tabel 3.b.5) LKPS).</li>
                                                    <li>Karya ilmiah DTPS yang disitasi dalam 3 tahun terakhir (Tabel 3.b.6) LKPS. Data dan analisis disampaikan oleh program studi pada program akademik/profesi.</li>
                                                    <li>Produk/Jasa DTPS yang diadopsi oleh Industri/Masyarakat (Tabel 3.b.6) LKPS). Data dan analisis disampaikan oleh program studi pada program vokasi.</li>
                                                </ol>
                                            <br>
                                            <div>
                                                <textarea rows="10" cols="800" name="iku2" class="ckeditor" id="ckedtor">
                                                    <?php echo $cek->iku2?>
                                                </textarea>
                                            </div>
                                            <li>Pengembangan Dosen</li>
                                                <p class="justify">Kesesuaian perencanaan dan pengembangan dosen UPPS dengan
                                                rencana pengembangan SDM di perguruan tinggi (Renstra
                                                Perguruan Tinggi).</p>
                                            <br>
                                            <div>
                                                <textarea rows="10" cols="800" name="iku3" class="ckeditor" id="ckedtor">
                                                    <?php echo $cek->iku3?>
                                                </textarea>
                                            </div>
                                            <li>Tenaga Kependidikan</li>
                                                <p class="justify">Kecukupan dan kualifikasi tenaga kependidikan berdasarkan jenis
                                                pekerjaannya (administrasi, laboran, teknisi, dll.) yang memiliki
                                                sertifikat kompetensi/profesi sesuai dengan bidang tugasnya.
                                                Indikator Kecukupan: beban kerja tenaga kependidikan, jumlah,
                                                dukungan Teknologi Informasi (fungsi-fungsi yang sudah berjalan),
                                                dan kompetensi tenaga kependidikan.</p>
                                            <br>
                                            <div>
                                                <textarea rows="10" cols="800" name="iku4" class="ckeditor" id="ckedtor">
                                                    <?php echo $cek->iku4?>
                                                </textarea>
                                            </div>
                                        </ol>
                                    </div>
                                </fieldset>

                                <h3>Indikator Kinerja Tambahan</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Indikator kinerja tambahan adalah indikator SDM lain berdasarkan
                                        standar yang ditetapkan oleh masing-masing perguruan tinggi untuk
                                        melampaui SN-DIKTI. Data indikator kinerja tambahan yang sahih harus
                                        diukur, dimonitor, dikaji, dan dianalisis untuk perbaikan berkelanjutan.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="ikt" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->ikt?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Evaluasi Capaian Kinerja</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi deskripsi dan analisis keberhasilan dan/atau ketidakberhasilan
                                        pencapaian standar yang telah ditetapkan. Capaian kinerja harus diukur
                                        dengan metoda yang tepat, dan hasilnya dianalisis serta dievaluasi.
                                        Analisis terhadap capaian kinerja harus mencakup identifikasi akar
                                        masalah, faktor pendukung keberhasilan dan faktor penghambat
                                        ketercapaian standar, dan deskripsi singkat tindak lanjut yang akan
                                        dilakukan UPPS.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="eval" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->eval?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Penjaminan Mutu SDM</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi deskripsi dan bukti sahih tentang implementasi sistem penjaminan
                                        mutu di UPPS yang sesuai dengan standar yang ditetapkan perguruan
                                        tinggi terkait SDM mengikuti siklus penetapan, pelaksanaan, evaluasi,
                                        pengendalian, dan perbaikan berkelanjutan (PPEPP).</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="pm_sdm" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->pm_sdm?>
                                            </textarea>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3>Kepuasan Pengguna</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <ol type="a">
                                            <li>Deskripsi sistem untuk mengukur kepuasan dosen dan tenaga kependidikan terhadap pengelolaan SDM, termasuk kejelasan instrumen yang digunakan, pelaksanaan, perekaman dan analisis datanya</li>
                                            <li>Ketersediaan bukti yang sahih tentang hasil pengukuran kepuasan dosen dan tenaga kependidikan yang dilaksanakan secara konsisten, dan ditindaklanjuti secara berkala dan tersistem.</li>
                                            <br>
                                            <div>
                                                <textarea rows="10" cols="800" name="kpg" class="ckeditor" id="ckedtor">
                                                    <?php echo $cek->kpg?>
                                                </textarea>
                                            </div>
                                        </ol>
                                    </div>
                                </fieldset>

                                <h3>Simpulan Hasil Evaluasi dan Tindak lanjut</h3> 
                                <fieldset>
                                    <div class="row justify-content-end">
                                        <p class="justify">Berisi ringkasan dari: pemosisian, masalah dan akar masalah, serta
                                        rencana perbaikan dan pengembangan SDM oleh UPPS terkait program
                                        studi yang diakreditasi.</p>
                                        <br>
                                        <div>
                                            <textarea rows="10" cols="800" name="simpulan" class="ckeditor" id="ckedtor">
                                                <?php echo $cek->simpulan?>
                                            </textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary waves-effect" name="update" value="Update">UPDATE</button>
                            </form>
                            <!-- #END UPDATE -->

                                            <!-- <a href ="#" class ="btn btn-sm btn-primary" data-target="#modalHapus" data-toggle="modal"> <span class ="glyphicon glyphicon-plus"></span></a> -->
                                            <a href="#" class="btn btn-danger" data-target="#modalDelete" data-toggle="modal">DELETE</a>
                                            <!-- Modal Popup --> 
                                            <div id="modalDelete" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h4 class="modal-title" style="text-align:center;">Apakah anda yakin menghapus data ini?</h4>
                                                        </div>
                                                        
                                                        <div class="modal-body">
                                                        <form action="{{ route('c4.destroy', $cek->id) }}" method="POST">
                                                            {{ csrf_field() }}
                                                            @method('DELETE')
                                                                <div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
                                                                    <!-- <input type="hidden" name="id" value="{{ $cek->id}}"> <br/> -->
                                                                    <button type="submit" class="btn btn-danger waves-effect" name="simpan" value="Delete">DELETE</button>
                                                                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">CLOSE</button>
                                                                </div>
                                                        </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <button type="reset" class="btn btn-secondary waves-effect" name="batal" value="Batal">CANCEL</button>
                                    </div>
                                </fieldset>
                        </div>
                    @endif

                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->
            </div>
    </section>
@endsection