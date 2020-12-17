<?php 

model('UsersModel');
model('RolesModel');

class UsersAdminController extends Controller {


    public function __construct() {
        if( !isset($_SESSION['is_login']))
        {
            Redirect::to(base_url('?pagename=admin-login'));
        }
    }

    public function index() {

        $db = Database::connect();

        $queryStr = "SELECT * FROM users LEFT JOIN roles ON users.id_role = roles.id_role";

        $query = $db->query( $queryStr );

        view('admin/header');
        view('admin/users/index', [
            'users' => $query->fetch_all(MYSQLI_ASSOC)
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
            'id_role'       => $this->request('id_role'),
            'nama_lengkap'  => $this->request('nama_lengkap'),
            'user_name'     => $this->request('user_name'),
            'user_pass'     => md5($this->request('user_pass')),
            'user_mail'     => $this->request('user_mail')
        ];

        if( $this->request('password') ) 
        {
            $data['user_pass'] = md5( $this->request('password') );
        }

        $model->insert($data);

        Redirect::to(base_url('?pagename=admin-user'));

    }

    public function update( $id )
    {

        $data = [
            'id_role'       => $this->request('id_role'),
            'nama_lengkap'  => $this->request('nama_lengkap'),
            'user_name'     => $this->request('user_name'),
            'user_mail'     => $this->request('user_mail')
        ];


        if( $this->request('password') ) 
        {
            $data['user_pass'] = md5( $this->request('password') );
        }

        $model = new UsersModel();

        $model->find($id)->update($data);

        Redirect::to(base_url('?pagename=admin-user'));

    }

    public function show($id)
    {

        $model = new UsersModel();
        $roles = new RolesModel();

        view('admin/header');
        
        view('admin/users/edit', [
            'edit' => $model->find($id)->get(),
            'roles' => $roles->findAll()
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