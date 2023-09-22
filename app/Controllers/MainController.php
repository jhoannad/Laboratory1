<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MainModel;
use App\Models\SectionModel;

class MainController extends BaseController
{
    public function save()
    {
        $id = $_POST['id'];
        $data = [
            'StudName' => $this->request->getPost('StudName'),
            'StudGender' => $this->request->getPost('StudGender'),
            'StudCourse' => $this->request->getPost('StudCourse'),
            'StudSection' => $this->request->getPost('StudSection'),
            'StudYear' => $this->request->getPost('StudYear'),
        ];

        if($id!= null){
            $main = new MainModel();
            $main->set($data)->where('id', $id)->update();
        }else{
            $main = new MainModel();
            $main->save($data);
        }
        $sectionModel = new SectionModel();
        $sectionData = [
            'Section' => $this->request->getPost('StudSection'), 
        ];
        $existingSection = $sectionModel->where('Section', $this->request->getPost('StudSection'))->first();
        
        if ($existingSection) {
            $sectionModel->set($sectionData)->where('id', $existingSection['id'])->update();
        } else {
            $sectionModel->save($sectionData);
        }
        return redirect()->to('/test');
    }

    public function delete($id)
    {
        $main = new MainModel();
        $main->delete($id);
        return redirect()->to('/test');
    }

    public function edit($id)
    {
        $mode = new MainModel();
        $data = [
            'main' => $mode->findAll(),
            'j' => $mode->where('id', $id)->first(),
        ];
        return view('main', $data);
    }    

    public function test()
    {
        $mode = new MainModel();
        $data['main'] = $mode->findAll();
        //var_dump(data);
        return view('main', $data);
    }

    public function index()
    {
        //
    }
}
