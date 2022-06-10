<?php

namespace App\Controllers;

use App\Models\PrestamoModel;
use App\Models\HerramientaModel;

class PrestamoController extends BaseController
{
    public function index()
    {
        $prestamoModel = new PrestamoModel();
        if (session('empleado')->puesto == "Administrador") {
            $data['prestamos'] = $prestamoModel->select('prestamo.*, empleado.emp_nombre, herramienta.nombre_herramienta')
                ->join('empleado', 'empleado.id_empleado = prestamo.id_empleado')
                ->join('herramienta', 'herramienta.ID_herramienta = prestamo.ID_herramienta')
                ->orderby('prestamo.id_prestamo')
                ->paginate(25);
        } else {
            $data['prestamos'] = $prestamoModel->select('prestamo.*, empleado.emp_nombre, herramienta.nombre_herramienta')
                ->join('empleado', 'empleado.id_empleado = prestamo.id_empleado')
                ->join('herramienta', 'herramienta.ID_herramienta = prestamo.ID_herramienta')
                ->orderby('prestamo.id_prestamo')
                ->paginate(25);
        }

        $data['pager'] = $prestamoModel->pager;
        return view('prestamo/index', $data);
    }

    public function solicitud()
    {
        $herramientaModel = new HerramientaModel();
        $data['herramientas'] = $herramientaModel->findAll();
        return view('prestamo/solicitud', $data);
    }

    public function registrar()
    {
        $prestamoModel = new PrestamoModel();
        $herramientaModel = new HerramientaModel();

        $prestamoModel->insert([
            'fecha_solicitud' => date('Y-m-d'),
            'cantidad' => $this->request->getPost('cantidad'),
            'ID_herramienta' => $this->request->getPost('herramienta'),
            'id_empleado' => session('empleado')->id_empleado,
            'estado' => 'SOLICITUD'
        ]);


        session()->setFlashdata('success', 'Solicitud registrada');
        return redirect()->to(base_url('prestamos'));
    }

    public function agregarHerramienta()
    {
        $ID_herramienta = $this->request->getPost('ID_herramienta');
        $cantidad = $this->request->getPost('cantidad');
        $nombre_herramienta = $this->request->getPost('nombre_herramienta');

        $prestamoModel = new PrestamoModel();

        for ($index = 0; $index < count($ID_herramienta); $index++) {

            $prestamoModel->insert([
                'fecha_solicitud' => date('Y-m-d'),
                'ID_herramienta' => $ID_herramienta[$index],
                'cantidad' => $cantidad[$index],
                'id_empleado' => session('empleado')->id_empleado,
                'estado' => 'SOLICITUD'
            ]);
        }
        session()->setFlashdata('success', 'Se han registrado los préstamos');
        return redirect()->to(base_url('prestamos/'));
    }

    public function aprobar($id)
    {
        $prestamoModel = new PrestamoModel();
        $prestamoModel->update($id, [
            'estado' => "APROBADO",
            'fecha_aprob' => date('Y-m-d')
        ]);
        session()->setFlashdata('success', 'Solicitud aprobada');
        return redirect()->to(base_url('prestamos'));
    }

    public function devolver($id)
    {
        $prestamoModel = new PrestamoModel();
        $prestamoModel->update($id, [
            'estado' => "DEVUELTO",
        ]);
        session()->setFlashdata('success', 'La herramienta ha sido devuelta');
        return redirect()->to(base_url('prestamos'));
    }

    public function eliminar($id)
    {
        $prestamoModel = new PrestamoModel();
        $prestamoModel->delete($id);
        session()->setFlashdata('success', 'Prestamo eliminado');
        return redirect()->to(base_url('prestamos'));
    }

    public function detalles($id)
    {
        $prestamoModel = new PrestamoModel();
        $herramientaModel = new HerramientaModel();
        $data['prestamo'] = $prestamoModel
            ->select('prestamo.*, empleado.emp_nombre, herramienta.nombre_herramienta, herramienta.marca')
            ->join('empleado', 'empleado.id_empleado = prestamo.id_empleado')
            ->join('herramienta', 'herramienta.ID_herramienta = prestamo.ID_herramienta')
            ->find($id);

        $data['herramienta'] = $herramientaModel
            ->where('ID_herramienta', $id)
            ->find($id);
        return view('prestamo/detalles', $data);
    }
}
