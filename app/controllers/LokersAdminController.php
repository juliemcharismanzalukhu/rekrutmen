<?php 

model('LokersModel');
model('KategorisModel');
model('JenjangsModel');

class LokersAdminController extends Controller {

    public function index() {

        $model = new LokersModel();

        view('admin/header');
        view('admin/lokers/index', [
            'lokers' => $model->paginate(10)
        ]);
        view('admin/footer');
    }

    public function add() 
    {

        $kategoris = new KategorisModel();
        $jenjangs = new JenjangsModel();

        view('admin/header');
        view('admin/lokers/add', [
            'kategoris' => $kategoris->findAll(),
            'jenjangs' => $jenjangs->findAll()
        ]);
        view('admin/footer');
        
    }

    public function store() 
    {

        $model = new LokersModel();
        
        $data = [
            'id_kategori'       => $this->request('id_kategori'),
            'jenjang_loker'     => $this->request('jenjang_loker'),
            'nama_loker'        => $this->request('nama_loker'),
            'deskripsi_loker'   => $this->request('deskripsi_loker'),
            'gaji_loker'        => $this->request('gaji_loker'),
            'status_loker'      => $this->request('status_loker'),
            'jenis_loker'       => $this->request('jenis_loker'),
            'level_loker'       => $this->request('level_loker'),
            'due_date_loker'    => $this->request('due_date_loker'),
        ];

        (($model->insert($data)));

        Redirect::to(base_url('?pagename=admin-lokers'));

    }

    public function update( $id )
    {

        $data = [
            'id_kategori'       => $this->request('id_kategori'),
            'jenjang_loker'     => $this->request('jenjang_loker'),
            'nama_loker'        => $this->request('nama_loker'),
            'deskripsi_loker'   => $this->request('deskripsi_loker'),
            'gaji_loker'        => $this->request('gaji_loker'),
            'status_loker'      => $this->request('status_loker'),
            'jenis_loker'       => $this->request('jenis_loker'),
            'level_loker'       => $this->request('level_loker'),
            'due_date_loker'    => $this->request('due_date_loker'),
        ];

        $model = new LokersModel();

        $model->find($id)->update($data);

        Redirect::to(base_url('?pagename=admin-lokers'));

    }

    public function show($id)
    {

        $model = new LokersModel();

        view('admin/header');
        
        view('admin/lokers/edit', [
            'edit' => $model->find($id)->get(),
            'kategoris' => (new KategorisModel)->findAll(),
            'jenjangs' => (new JenjangsModel)->findAll()
        ]);
        
        view('admin/footer');
    }

    public function delete($id) 
    {
        
        $model = new LokersModel();


        $model->find($id)->delete();

        Redirect::to(base_url('?pagename=admin-lokers'));

    }

}