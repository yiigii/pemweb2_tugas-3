1 <?php
2 $proses= $_POST['proses'];
3 $nama_siswa = $_POST['nama'];
4 $mata_kuliah = $_POST['matkul'];
5 $nilai_uts = $_POST['nilai'];
6 $nilai_uas = $_POST['nilai'];
7 $nilai_tugas = $_POST['nilai'];
8
9 if(!empty($proses)) {
10 echo 'Proses : '.$proses;
11 echo '<br/>Nama : '.$nama_siswa;
12 echo '<br/>Mata Kuliah : '.$mata_kuliah;
13 echo '<br/>Nilai UTS : '.$nilai_uts;
14 echo '<br/>Nilai UAS : '.$nilai_uas;
15 echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
16 }
17 ?>