<?php
class m_topsis extends CI_Model
{
       public function hitung_topsis()
       {
              $query = $this->db->get('data_alternatif');
              $data = $query->result_array();
              $query = $this->db->get('kriteria');
              $data2 = $query->result_array();

              // Hitung kuadrat dari setiap nilai
              $index = 0;
              $c1 = 0;
              $c2 = 0;
              $c3 = 0;
              $c4 = 0;
              $c5 = 0;
              $c6 = 0;

              foreach ($data as $row) {
                     $perhitungan['hasil_kuadrat'][] = array(
                            'c1' => pow($row['c1'], 2),
                            'c2' => pow($row['c2'], 2),
                            'c3' => pow($row['c3'], 2),
                            'c4' => pow($row['c4'], 2),
                            'c5' => pow($row['c5'], 2),
                            'c6' => pow($row['c6'], 2)
                     );
                     $c1 = $c1 + $perhitungan['hasil_kuadrat'][$index]['c1'];
                     $c2 = $c2 + $perhitungan['hasil_kuadrat'][$index]['c2'];
                     $c3 = $c3 + $perhitungan['hasil_kuadrat'][$index]['c3'];
                     $c4 = $c4 + $perhitungan['hasil_kuadrat'][$index]['c4'];
                     $c5 = $c5 + $perhitungan['hasil_kuadrat'][$index]['c5'];
                     $c6 = $c6 + $perhitungan['hasil_kuadrat'][$index]['c6'];

                     $index++;
              }
              $perhitungan['hasil_akar'][] = array(
                     'c1' => sqrt($c1),
                     'c2' => sqrt($c2),
                     'c3' => sqrt($c3),
                     'c4' => sqrt($c4),
                     'c5' => sqrt($c5),
                     'c6' => sqrt($c6)
              );
              // matriks ternormalisasi (data awal di bagi hasil akar)
              foreach ($data as $row) {
                     $perhitungan['matriks_normal'][] = array(
                            'c1' => $row['c1'] / $perhitungan['hasil_akar'][0]['c1'],
                            'c2' => $row['c2'] / $perhitungan['hasil_akar'][0]['c2'],
                            'c3' => $row['c3'] / $perhitungan['hasil_akar'][0]['c3'],
                            'c4' => $row['c4'] / $perhitungan['hasil_akar'][0]['c4'],
                            'c5' => $row['c5'] / $perhitungan['hasil_akar'][0]['c5'],
                            'c6' => $row['c6'] / $perhitungan['hasil_akar'][0]['c6'],
                            'kode' => $row['kode']
                     );
              }
              // matriks ternormalisasi dan terbobot
              $kolom = 0;
              foreach ($data as $row) {
                     $baris = 0;
                     foreach ($data2 as $row2) {
                            if ($baris == 0) {
                                   $c1 = $perhitungan['matriks_normal'][$kolom]['c1'] * $row2['bobot'];
                            } elseif ($baris == 1) {
                                   $c2 = $perhitungan['matriks_normal'][$kolom]['c2'] * $row2['bobot'];
                            } elseif ($baris == 2) {
                                   $c3 = $perhitungan['matriks_normal'][$kolom]['c3'] * $row2['bobot'];
                            } elseif ($baris == 3) {
                                   $c4 = $perhitungan['matriks_normal'][$kolom]['c4'] * $row2['bobot'];
                            } elseif ($baris == 4) {
                                   $c5 = $perhitungan['matriks_normal'][$kolom]['c5'] * $row2['bobot'];
                            } elseif ($baris == 5) {
                                   $c6 = $perhitungan['matriks_normal'][$kolom]['c6'] * $row2['bobot'];
                            }
                            $baris++;
                     }
                     $perhitungan['matriks_bobot'][] = array(
                            'c1' => $c1,
                            'c2' => $c2,
                            'c3' => $c3,
                            'c4' => $c4,
                            'c5' => $c5,
                            'c6' => $c6,
                            'kode' => $row['kode']
                     );
                     // penampung nilai masing" kolom max
                     $perhitungan['max_c1'][] = array(
                            'c1' => $c1,
                     );
                     $perhitungan['max_c2'][] = array(
                            'c2' => $c2,
                     );
                     $perhitungan['max_c3'][] = array(
                            'c3' => $c3,
                     );
                     $perhitungan['max_c4'][] = array(
                            'c4' => $c4,
                     );
                     $perhitungan['max_c5'][] = array(
                            'c5' => $c5,
                     );
                     $perhitungan['max_c6'][] = array(
                            'c6' => $c6,
                     );
                     // penampung nilai masing" kolom min
                     $perhitungan['min_c1'][] = array(
                            'c1' => $c1,
                     );
                     $perhitungan['min_c2'][] = array(
                            'c2' => $c2,
                     );
                     $perhitungan['min_c3'][] = array(
                            'c3' => $c3,
                     );
                     $perhitungan['min_c4'][] = array(
                            'c4' => $c4,
                     );
                     $perhitungan['min_c5'][] = array(
                            'c5' => $c5,
                     );
                     $perhitungan['min_c6'][] = array(
                            'c6' => $c6,
                     );
                     $kolom++;
              }
              // Nilai MAX             
              $perhitungan['max_c1'] = max($perhitungan['max_c1']);
              $perhitungan['max_c2'] = max($perhitungan['max_c2']);
              $perhitungan['max_c3'] = max($perhitungan['max_c3']);
              $perhitungan['max_c4'] = max($perhitungan['max_c4']);
              $perhitungan['max_c5'] = max($perhitungan['max_c5']);
              $perhitungan['max_c6'] = max($perhitungan['max_c6']);

              // Nilai MIN
              $perhitungan['min_c1'] = min($perhitungan['min_c1']);
              $perhitungan['min_c2'] = min($perhitungan['min_c2']);
              $perhitungan['min_c3'] = min($perhitungan['min_c3']);
              $perhitungan['min_c4'] = min($perhitungan['min_c4']);
              $perhitungan['min_c5'] = min($perhitungan['min_c5']);
              $perhitungan['min_c6'] = min($perhitungan['min_c6']);

              // ideal + dan ideal -

              $c1_max['c1max'] = max($perhitungan['max_c1']);
              $c2_max['c2max'] = max($perhitungan['max_c2']);
              $c3_max['c3max'] = max($perhitungan['max_c3']);
              $c4_max['c4max'] = min($perhitungan['min_c4']);
              $c5_max['c5max'] = max($perhitungan['max_c5']);
              $c6_max['c6max'] = min($perhitungan['min_c6']);

              $i = 0;
              $x = 0;
              $kolom = 0;
              foreach ($data as $row) {
                     $baris = 0;
                     foreach ($data2 as $row2) {
                            if ($baris == 0) {
                                   $c1 = $c1_max['c1max'] - $perhitungan['matriks_bobot'][$kolom]['c1'];

                            } elseif ($baris == 1) {

                                   $c2 = $c2_max['c2max'] - $perhitungan['matriks_bobot'][$kolom]['c2'];

                            } elseif ($baris == 2) {

                                   $c3 = $c3_max['c3max'] - $perhitungan['matriks_bobot'][$kolom]['c3'];

                            } elseif ($baris == 3) {

                                   $c4 = $c4_max['c4max'] - $perhitungan['matriks_bobot'][$kolom]['c4'];

                            } elseif ($baris == 4) {

                                   $c5 = $c5_max['c5max'] - $perhitungan['matriks_bobot'][$kolom]['c5'];

                            } elseif ($baris == 5) {

                                   $c6 = $c6_max['c6max'] - $perhitungan['matriks_bobot'][$kolom]['c6'];
                            }
                            $baris++;
                     }
                     $a1 = pow($c1, 2);
                     $a2 = pow($c2, 2);
                     $a3 = pow($c3, 2);
                     $a4 = pow($c4, 2);
                     $a5 = pow($c5, 2);
                     $a6 = pow($c6, 2);
                     $sqrt = sqrt($a1 + $a2 + $a3 + $a4 + $a5 + $a6);

                     $perhitungan['hasil_dplus'][$i] = $sqrt;
                     $i++;
                     $perhitungan['dplus'][$x] = array(
                            'x1' => $sqrt,
                            'kode' => $row['kode']
                     );
                     $x++;
                     $kolom++;
              }

              $c1_min['c1min'] = min($perhitungan['min_c1']);
              $c2_min['c2min'] = min($perhitungan['min_c2']);
              $c3_min['c3min'] = min($perhitungan['min_c3']);
              $c4_min['c4min'] = max($perhitungan['max_c4']);
              $c5_min['c5min'] = min($perhitungan['min_c5']);
              $c6_min['c6min'] = max($perhitungan['max_c6']);
              // nilai d- & d+
              $i = 0;
              $x = 0;
              $kolom = 0;
              foreach ($data as $row) {
                     $baris = 0;
                     foreach ($data2 as $row2) {
                            if ($baris == 0) {
                                   $c1 = $perhitungan['matriks_bobot'][$kolom]['c1'] - $c1_min['c1min'];
                            } elseif ($baris == 1) {
                                   $c2 = $perhitungan['matriks_bobot'][$kolom]['c2'] - $c2_min['c2min'];
                            } elseif ($baris == 2) {
                                   $c3 = $perhitungan['matriks_bobot'][$kolom]['c3'] - $c3_min['c3min'];
                            } elseif ($baris == 3) {
                                   $c4 = $perhitungan['matriks_bobot'][$kolom]['c4'] - $c4_min['c4min'];
                            } elseif ($baris == 4) {
                                   $c5 = $perhitungan['matriks_bobot'][$kolom]['c5'] - $c5_min['c5min'];
                            } elseif ($baris == 5) {
                                   $c6 = $perhitungan['matriks_bobot'][$kolom]['c6'] - $c6_min['c6min'];
                            }
                            $baris++;
                     }
                     $a1 = pow($c1, 2);
                     $a2 = pow($c2, 2);
                     $a3 = pow($c3, 2);
                     $a4 = pow($c4, 2);
                     $a5 = pow($c5, 2);
                     $a6 = pow($c6, 2);
                     $sqrt = sqrt($a1 + $a2 + $a3 + $a4 + $a5 + $a6);

                     $perhitungan['hasil_dmin'][$i] = $sqrt;
                     $i++;

                     $perhitungan['dmin'][$x] = array(
                            'x2' => $sqrt
                     );
                     $x++;
                     $kolom++;
              }
              // preferensi
              $p = 0;
              $ta = 0;
              $to = 0;
              $ti = 0;
              foreach ($data as $row) {
                     $hp = $perhitungan['dmin'][$ta]['x2'] / ($perhitungan['dmin'][$to]['x2'] + $perhitungan['dplus'][$ti]['x1']);
                     $ta++;
                     $to++;
                     $ti++;
                     $perhitungan['hasil_pref'][$p] = array(
                            'hp' => $hp,
                            'kode' => $row['kode'],
                            'model' => $row['model'],
                            'merk' => $row['merk'],
                            'th_pembuatan' => $row['th_pembuatan']
                     );
                     $hp;
                     $p++;
              }
              // print_r($perhitungan['hasil_dmin']);
              return $perhitungan;
       }
       public function hitung_topsis_2()
       {
              // Ambil data dari tabel di database
              $query = $this->db->get('alternatif_rsm');
              $data = $query->result_array();
              $query = $this->db->get('kriteria');
              $data2 = $query->result_array();

              // Hitung kuadrat dari setiap nilai
              $index = 0;
              $c1 = 0;
              $c2 = 0;
              $c3 = 0;
              $c4 = 0;
              $c5 = 0;
              $c6 = 0;

              foreach ($data as $row) {
                     $perhitungan['hasil_kuadrat'][] = array(
                            'c1' => pow($row['c1'], 2),
                            'c2' => pow($row['c2'], 2),
                            'c3' => pow($row['c3'], 2),
                            'c4' => pow($row['c4'], 2),
                            'c5' => pow($row['c5'], 2),
                            'c6' => pow($row['c6'], 2)
                     );
                     $c1 = $c1 + $perhitungan['hasil_kuadrat'][$index]['c1'];
                     $c2 = $c2 + $perhitungan['hasil_kuadrat'][$index]['c2'];
                     $c3 = $c3 + $perhitungan['hasil_kuadrat'][$index]['c3'];
                     $c4 = $c4 + $perhitungan['hasil_kuadrat'][$index]['c4'];
                     $c5 = $c5 + $perhitungan['hasil_kuadrat'][$index]['c5'];
                     $c6 = $c6 + $perhitungan['hasil_kuadrat'][$index]['c6'];

                     $index++;
              }
              $perhitungan['hasil_akar'][] = array(
                     'c1' => sqrt($c1),
                     'c2' => sqrt($c2),
                     'c3' => sqrt($c3),
                     'c4' => sqrt($c4),
                     'c5' => sqrt($c5),
                     'c6' => sqrt($c6)
              );
              // matriks ternormalisasi (data awal di bagi hasil akar)
              foreach ($data as $row) {
                     $perhitungan['matriks_normal'][] = array(
                            'c1' => $row['c1'] / $perhitungan['hasil_akar'][0]['c1'],
                            'c2' => $row['c2'] / $perhitungan['hasil_akar'][0]['c2'],
                            'c3' => $row['c3'] / $perhitungan['hasil_akar'][0]['c3'],
                            'c4' => $row['c4'] / $perhitungan['hasil_akar'][0]['c4'],
                            'c5' => $row['c5'] / $perhitungan['hasil_akar'][0]['c5'],
                            'c6' => $row['c6'] / $perhitungan['hasil_akar'][0]['c6'],
                            'kode' => $row['kode']
                     );
              }
              // matriks ternormalisasi dan terbobot
              $kolom = 0;
              foreach ($data as $row) {
                     $baris = 0;
                     foreach ($data2 as $row2) {
                            if ($baris == 0) {
                                   $c1 = $perhitungan['matriks_normal'][$kolom]['c1'] * $row2['bobot'];
                            } elseif ($baris == 1) {
                                   $c2 = $perhitungan['matriks_normal'][$kolom]['c2'] * $row2['bobot'];
                            } elseif ($baris == 2) {
                                   $c3 = $perhitungan['matriks_normal'][$kolom]['c3'] * $row2['bobot'];
                            } elseif ($baris == 3) {
                                   $c4 = $perhitungan['matriks_normal'][$kolom]['c4'] * $row2['bobot'];
                            } elseif ($baris == 4) {
                                   $c5 = $perhitungan['matriks_normal'][$kolom]['c5'] * $row2['bobot'];
                            } elseif ($baris == 5) {
                                   $c6 = $perhitungan['matriks_normal'][$kolom]['c6'] * $row2['bobot'];
                            }
                            $baris++;
                     }
                     $perhitungan['matriks_bobot'][] = array(
                            'c1' => $c1,
                            'c2' => $c2,
                            'c3' => $c3,
                            'c4' => $c4,
                            'c5' => $c5,
                            'c6' => $c6,
                            'kode' => $row['kode']
                     );
                     // penampung nilai masing" kolom max
                     $perhitungan['max_c1'][] = array(
                            'c1' => $c1,
                     );
                     $perhitungan['max_c2'][] = array(
                            'c2' => $c2,
                     );
                     $perhitungan['max_c3'][] = array(
                            'c3' => $c3,
                     );
                     $perhitungan['max_c4'][] = array(
                            'c4' => $c4,
                     );
                     $perhitungan['max_c5'][] = array(
                            'c5' => $c5,
                     );
                     $perhitungan['max_c6'][] = array(
                            'c6' => $c6,
                     );
                     // penampung nilai masing" kolom min
                     $perhitungan['min_c1'][] = array(
                            'c1' => $c1,
                     );
                     $perhitungan['min_c2'][] = array(
                            'c2' => $c2,
                     );
                     $perhitungan['min_c3'][] = array(
                            'c3' => $c3,
                     );
                     $perhitungan['min_c4'][] = array(
                            'c4' => $c4,
                     );
                     $perhitungan['min_c5'][] = array(
                            'c5' => $c5,
                     );
                     $perhitungan['min_c6'][] = array(
                            'c6' => $c6,
                     );
                     $kolom++;
              }
              // Nilai MAX             
              $perhitungan['max_c1'] = max($perhitungan['max_c1']);
              $perhitungan['max_c2'] = max($perhitungan['max_c2']);
              $perhitungan['max_c3'] = max($perhitungan['max_c3']);
              $perhitungan['max_c4'] = max($perhitungan['max_c4']);
              $perhitungan['max_c5'] = max($perhitungan['max_c5']);
              $perhitungan['max_c6'] = max($perhitungan['max_c6']);

              // Nilai MIN
              $perhitungan['min_c1'] = min($perhitungan['min_c1']);
              $perhitungan['min_c2'] = min($perhitungan['min_c2']);
              $perhitungan['min_c3'] = min($perhitungan['min_c3']);
              $perhitungan['min_c4'] = min($perhitungan['min_c4']);
              $perhitungan['min_c5'] = min($perhitungan['min_c5']);
              $perhitungan['min_c6'] = min($perhitungan['min_c6']);

              // ideal + dan ideal -

              $c1_max['c1max'] = max($perhitungan['max_c1']);
              $c2_max['c2max'] = max($perhitungan['max_c2']);
              $c3_max['c3max'] = max($perhitungan['max_c3']);
              $c4_max['c4max'] = min($perhitungan['min_c4']);
              $c5_max['c5max'] = max($perhitungan['max_c5']);
              $c6_max['c6max'] = min($perhitungan['min_c6']);

              $i = 0;
              $x = 0;
              $kolom = 0;
              foreach ($data as $row) {
                     $baris = 0;
                     foreach ($data2 as $row2) {
                            if ($baris == 0) {
                                   $c1 = $c1_max['c1max'] - $perhitungan['matriks_bobot'][$kolom]['c1'];

                            } elseif ($baris == 1) {

                                   $c2 = $c2_max['c2max'] - $perhitungan['matriks_bobot'][$kolom]['c2'];

                            } elseif ($baris == 2) {

                                   $c3 = $c3_max['c3max'] - $perhitungan['matriks_bobot'][$kolom]['c3'];

                            } elseif ($baris == 3) {

                                   $c4 = $c4_max['c4max'] - $perhitungan['matriks_bobot'][$kolom]['c4'];

                            } elseif ($baris == 4) {

                                   $c5 = $c5_max['c5max'] - $perhitungan['matriks_bobot'][$kolom]['c5'];

                            } elseif ($baris == 5) {

                                   $c6 = $c6_max['c6max'] - $perhitungan['matriks_bobot'][$kolom]['c6'];
                            }
                            $baris++;
                     }
                     $a1 = pow($c1, 2);
                     $a2 = pow($c2, 2);
                     $a3 = pow($c3, 2);
                     $a4 = pow($c4, 2);
                     $a5 = pow($c5, 2);
                     $a6 = pow($c6, 2);
                     $sqrt = sqrt($a1 + $a2 + $a3 + $a4 + $a5 + $a6);

                     $perhitungan['hasil_dplus'][$i] = $sqrt;
                     $i++;
                     $perhitungan['dplus'][$x] = array(
                            'x1' => $sqrt,
                            'kode' => $row['kode']
                     );
                     $x++;
                     $kolom++;
              }

              $c1_min['c1min'] = min($perhitungan['min_c1']);
              $c2_min['c2min'] = min($perhitungan['min_c2']);
              $c3_min['c3min'] = min($perhitungan['min_c3']);
              $c4_min['c4min'] = max($perhitungan['max_c4']);
              $c5_min['c5min'] = min($perhitungan['min_c5']);
              $c6_min['c6min'] = max($perhitungan['max_c6']);

              $i = 0;
              $x = 0;
              $kolom = 0;
              foreach ($data as $row) {
                     $baris = 0;
                     foreach ($data2 as $row2) {
                            if ($baris == 0) {
                                   $c1 = $perhitungan['matriks_bobot'][$kolom]['c1'] - $c1_min['c1min'];
                            } elseif ($baris == 1) {
                                   $c2 = $perhitungan['matriks_bobot'][$kolom]['c2'] - $c2_min['c2min'];
                            } elseif ($baris == 2) {
                                   $c3 = $perhitungan['matriks_bobot'][$kolom]['c3'] - $c3_min['c3min'];
                            } elseif ($baris == 3) {
                                   $c4 = $perhitungan['matriks_bobot'][$kolom]['c4'] - $c4_min['c4min'];
                            } elseif ($baris == 4) {
                                   $c5 = $perhitungan['matriks_bobot'][$kolom]['c5'] - $c5_min['c5min'];
                            } elseif ($baris == 5) {
                                   $c6 = $perhitungan['matriks_bobot'][$kolom]['c6'] - $c6_min['c6min'];
                            }
                            $baris++;
                     }
                     $a1 = pow($c1, 2);
                     $a2 = pow($c2, 2);
                     $a3 = pow($c3, 2);
                     $a4 = pow($c4, 2);
                     $a5 = pow($c5, 2);
                     $a6 = pow($c6, 2);
                     $sqrt = sqrt($a1 + $a2 + $a3 + $a4 + $a5 + $a6);

                     $perhitungan['hasil_dmin'][$i] = $sqrt;
                     $i++;

                     $perhitungan['dmin'][$x] = array(
                            'x2' => $sqrt
                     );
                     $x++;
                     $kolom++;
              }
              $p = 0;
              $ta = 0;
              $to = 0;
              $ti = 0;
              foreach ($data as $row) {
                     $hp = $perhitungan['dmin'][$ta]['x2'] / ($perhitungan['dmin'][$to]['x2'] + $perhitungan['dplus'][$ti]['x1']);
                     $ta++;
                     $to++;
                     $ti++;
                     $perhitungan['hasil_pref'][$p] = array(
                            'hp' => $hp,
                            'kode' => $row['kode'],
                            'model' => $row['model'],
                            'merk' => $row['merk'],
                            'th_pembuatan' => $row['th_pembuatan']
                     );
                     $hp;
                     $p++;
              }
              return $perhitungan;
       }
}