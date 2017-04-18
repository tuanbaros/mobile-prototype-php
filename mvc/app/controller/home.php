<?php
/**
* 
*/
class Home extends Controller
{
    protected $repository;

    public function __construct()
    {
        require_once '../app/lib/repository.php';
        $this->repository = new Repository;
    }
    
    public function index($name = '')
    {
        $user = $this->model('user');
        $user->name = $name;
        $this->view('home/index', ['name' => $user->name]);
    }

    public function create($id = 1)
    {
        if (!isset($_POST['num'])) {
            return;
        }

        $limit = $_POST['num'];

        $options = $this->repository->raw_query("select * from wp_options where option_id < {$limit}");

        foreach($options->fetchAll() as $row) {
            echo $row["option_name"] . "</br>";
        }

        echo $this->repository->count('wp_options', 'option_id < ' . $limit);
        echo "</br>";
        $column = 'name';
        $values = "'tuan {$limit}'" ;
        echo $this->repository->insert('abcs', $column, $values);
        echo "</br>";
        echo "" . $this->repository->update('abcs', "name='test {$limit}'", 'id=' . 29);
        echo "</br>";
        echo "" . $this->repository->delete('abcs', 'id < ' . $limit);
    }
}
