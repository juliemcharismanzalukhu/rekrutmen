<?php 

model('KategorisModel');

class KategorisAdminController extends Controller {

    public function index() {

        $model = new KategorisModel();

        view('admin/header');
        view('admin/kategori/index', [
            'kategoris' => $model->paginate(10)
        ]);
        view('admin/footer');
    }

    public function add() 
    {

        $roles = new KategorisModel();

        view('admin/header');
        view('admin/kategori/add', [
            'roles' => $roles->findAll()
        ]);
        view('admin/footer');
        
    }

    public function store() 
    {

        $model = new KategorisModel();
        
        $data = [
            'nama_kategori'  => $this->request('nama_kategori')
        ];

        $model->insert($data);

        Redirect::to(base_url('?pagename=admin-kategoris'));

    }

    public function update( $id )
    {

        $data = [
            'nama_kategori'  => $this->request('nama_kategori'),
        ];

        $model = new KategorisModel();

        $model->find($id)->update($data);

        Redirect::to(base_url('?pagename=admin-kategoris'));

    }

    public function show($id)
    {

        $model = new KategorisModel();

        view('admin/header');
        
        view('admin/kategori/edit', [
            'edit' => $model->find($id)->get()
        ]);
        
        view('admin/footer');
    }

    public function delete($id) 
    {
        
        $model = new KategorisModel();

        $model->find($id)->delete();

        Redirect::to(base_url('?pagename=admin-kategoris'));

    }

}