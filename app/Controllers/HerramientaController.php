<?php

namespace App\Controllers;

use App\Models\HerramientaModel;

class HerramientaController extends BaseController
{
    public function index()
    {
        $herramientaModel = new HerramientaModel();
        $data['herramienta'] = $herramientaModel->paginate(15);
        $data['pager'] = $herramientaModel->pager;
        return view('herramienta/index', $data);
    }

    public function crear()
    {
        return view('herramienta/crear');
    }

    public function registrar()
    {
        $herramientaModel = new HerramientaModel();
        $herramientaModel->insert([
            'ID_herramienta' => $this->request->getPost('ID_herramienta'),
            'cantidad' => $this->request->getPost('cantidad'),
            'marca' => $this->request->getPost('marca'),
            'nombre_herramienta' => $this->request->getPost('nombre_herramienta'),
        ]);
        session()->setFlashdata('success', 'La herramienta fue registrada');
        return redirect()->to(base_url('herramientas'));
    }

    public function editar($id)
    {
        $herramientaModel = new HerramientaModel();
        $data['herramienta'] = $herramientaModel->find($id);
        return view('herramienta/editar', $data);
    }

    public function actualizar($id)
    {
        $herramientaModel = new HerramientaModel();
        $herramientaModel->update($id, [
            'cantidad' => $this->request->getPost('cantidad'),
            'marca' => $this->request->getPost('marca'),
            'nombre_herramienta' => $this->request->getPost('nombre_herramienta')
        ]);
        session()->setFlashdata('success', 'La herramienta fue actualizada');
        return redirect()->to(base_url('herramientas'));
    }

    public function eliminar($id)
    {
        $herramientaModel = new HerramientaModel();
        $herramientaModel->delete($id);
        session()->setFlashdata('success', 'La herramienta fue eliminada');
        return redirect()->to(base_url('herramientas'));
    }
}
