<?php 

model('RolesModel');

class RolesAdminController extends Controller {

    public function index() {

        $model = new RolesModel();

        view('admin/header');
        view('admin/users/index', [
            'users' => $model->paginate(10)
        ]);
        view('admin/footer');
    }

    public function add() 
    {

        $roles = new RolesModel();

        view('admin/header');
        view('admin/users/add', [
            'roles' => $roles->findAll()
        ]);
        view('admin/footer');
        
    }

    public function store() 
    {

        $model = new RolesModel();
        
        $data = [
            'nama_role'  => $this->request('nama_role')
        ];

        $model->insert($data);

        Redirect::to(base_url('?pagename=admin-roles'));

    }

    public function update( $id )
    {

        $data = [
            'nama_role'  => $this->request('nama_role'),
        ];

        $model = new RolesModel();

        $model->find($id)->update($data);

        Redirect::to(base_url('?pagename=admin-roles'));

    }

    public function show($id)
    {

        $model = new RolesModel();

        view('admin/header');
        
        view('admin/users/edit', [
            'edit' => $model->find($id)->get()
        ]);
        
        view('admin/footer');
    }

    public function delete($id) 
    {
        
        $model = new RolesModel();

        $model->find($id)->delete();

        Redirect::to(base_url('?pagename=admin-roles'));

    }

}