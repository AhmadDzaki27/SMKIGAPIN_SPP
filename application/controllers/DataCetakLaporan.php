public function pdf($start = null, $end = null)
    {
        $data['title'] = 'Laporin! | Generate Laporan PDF';
        $data['pengaduan'] = [];
        $data['start'] =  $start;
        $data['end'] = $end;
        if ($start !== null && $end !== null) {
            $result = $this->getLaporanPengaduan($start, $end);
            $data['pengaduan'] = $result['laporan'];
            function compareByTimeStamp($time1, $time2)
            {
                if (strtotime($time1['tgl_pengaduan']) < strtotime($time2['tgl_pengaduan']))
                    return -1;
                else if (strtotime($time1['tgl_pengaduan']) > strtotime($time2['tgl_pengaduan']))
                    return 1;
                else
                    return 0;
            }
            usort($data['pengaduan'], "compareByTimeStamp");
        }
        $this->load->view('admin/export_pdf', $data);
    }
