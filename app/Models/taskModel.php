<?php

namespace App\Models;

use CodeIgniter\Model;

class taskModel extends Model
{
    protected $table      = 'tasks';
    protected $primaryKey = 'task_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['task_progress', 'task_description'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}