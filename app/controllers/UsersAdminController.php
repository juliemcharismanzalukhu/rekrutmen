<?php 

model('UsersModel');
model('RolesModel');

class UsersAdminController extends Controller {

    public function index() {

        $model = new UsersModel();

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

        $model = new UsersModel();
        
        $data = [
            'nama_lengkap'  => $this->request('nama_lengkap'),
            'user_name'     => $this->request('user_name'),
            'user_pass'     => md5($this->request('user_pass')),
            'user_mail'     => $this->request('user_mail')
        ];

        $model->insert($data);

        Redirect::to(base_url('?pagename=admin-user'));

    }

    public function update( $id )
    {

        $data = [
            'nama_lengkap'  => $this->request('nama_lengkap'),
            'user_name'     => $this->request('user_name'),
            'user_mail'     => $this->request('user_mail')
        ];

        $model = new UsersModel();

        $model->find($id)->update($data);

        Redirect::to(base_url('?pagename=admin-user'));

    }

    public function show($id)
    {

        $model = new UsersModel();

        view('admin/header');
        
        view('admin/users/edit', [
            'edit' => $model->find($id)->get()
        ]);
        
        view('admin/footer');
    }

    public function delete($id) 
    {
        
        $model = new UsersModel();


        $model->find($id)->delete();

        Redirect::to(base_url('?pagename=admin-user'));

    }

}