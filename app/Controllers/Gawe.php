<?php

namespace App\Controllers;

class Gawe extends BaseController
{
    public function index()
    {
        $builder = $this->db->table('gawe');
        $query = $builder->get()->getResult();

        $data['gawe'] = $query;

        return view('gawe/get', $data);
        // echo '<pre>';
        // print_r($query);
    }

    public function create()
    {
        return view('gawe/add');
    }

    public function store()
    {
        // cara 1 : name sama
        $data = $this->request->getPost();

        // cara 2 : name spesifik
        // $data = [
        //     'name_gawe' => $this->request->getVar('name_gawe'),
        //     'date_gawe' => $this->request->getVar('date_gawe'),
        //     'info_gawe' => $this->request->getVar('info_gawe'),
        // ];

        $this->db->table('gawe')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('gawe'))->with('success', 'Data Berhasil Disimpan');
        }
    }

    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('gawe')->getWhere(['id_gawe' => $id]);

            if ($query->resultID->num_rows > 0) {
                $data['gawe'] = $query->getRow();
                return view('gawe/edit', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id)
    {
        // cara 1 : name sama
        $data = $this->request->getPost();
        unset($data['_method']);

        // cara 2 : name spesifik
        // $data = [
        //     'name_gawe' => $this->request->getVar('name_gawe'),
        //     'date_gawe' => $this->request->getVar('date_gawe'),
        //     'info_gawe' => $this->request->getVar('info_gawe'),
        // ];

        $this->db->table('gawe')->where(['id_gawe' => $id])->update($data);
        return redirect()->to(site_url('gawe'))->with('success', 'Data Berhasil Diupdate');
    }

    public function destroy($id)
    {
        $this->db->table('gawe')->where(['id_gawe' => $id])->delete();
        return redirect()->to(site_url('gawe'))->with('success', 'Data Berhasil Dihapus');
    }
}
