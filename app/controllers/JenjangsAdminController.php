<?php 

model('JenjangsModel');

class JenjangsAdminController extends Controller {

    public function index() {

        $model = new JenjangsModel();

        view('admin/header');
        view('admin/jenjang/index', [
            'jenjangs' => $model->paginate(10)
        ]);
        view('admin/footer');
    }

    public function add() 
    {

        view('admin/header');
        view('admin/jenjang/add');
        view('admin/footer');
        
    }

    public function store() 
    {

        $model = new JenjangsModel();
        
        $data = [
            'nama_jenjang'  => $this->request('nama_jenjang')
        ];

        $model->insert($data);

        Redirect::to(base_url('?pagename=admin-jenjangs'));

    }

    public function update( $id )
    {

        $data = [
            'nama_jenjang'  => $this->request('nama_jenjang'),
        ];

        $model = new JenjangsModel();

        $model->find($id)->update($data);

        Redirect::to(base_url('?pagename=admin-jenjangs'));

    }

    public function show($id)
    {

        $model = new JenjangsModel();

        view('admin/header');
        
        view('admin/jenjang/edit', [
            'edit' => $model->find($id)->get()
        ]);
        
        view('admin/footer');
    }

    public function delete($id) 
    {
        
        $model = new RolesModel();

        $model->find($id)->delete();

        Redirect::to(base_url('?pagename=admin-jenjangs'));

    }

}