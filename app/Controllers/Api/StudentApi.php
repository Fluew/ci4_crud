<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;
use App\Models\StudentModel;

class StudentApi extends ResourceController
{
   protected $modelName = 'App\Models\StudentModel';
   protected $format = 'json';

   public function index()
   {
       return $this->respond($this->model->findAll());
   }

   public function show($id = null)
   {
       return $this->respond($this->model->find($id));
   }

   public function create()
   {
       $data = $this->request->getPost();

       $this->model->insert($data);

       return $this->respondCreated($data);
   }

   public function update($id = null)
   {
       $data = $this->request->getRawInput();

       $this->model->update($id, $data);

       return $this->respond([
           'message' => 'Updated successfully'
       ]);
   }

   public function delete($id = null)
   {
       $this->model->delete($id);

       return $this->respondDeleted([
           'message' => 'Deleted successfully'
       ]);
   }
}
