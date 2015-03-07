<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

abstract class AbstractTableSeeder extends Seeder
{
    protected $table;
    
    /**
     * 
     * @throws \Exception
     */
    public function run()
    {
        $table = DB::table($this->table);
        
        // Truncate table records
        $table->delete();
        
        if (empty($this->insertRows())) {
            throw new \Exception("Cannot insert empty row values");
        }
            
        $table->insert($this->insertRows());
    }
    
    /**
     * @return Array
     */
    abstract protected function insertRows();
}


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call('UserTableSeeder');
        $this->call('MerchantTableSeeder');
        $this->call('BrandTableSeeder');
        $this->call('CategoryTableSeeder');
        $this->call('ItemsTableSeeder');
    }
}

class MerchantTableSeeder extends AbstractTableSeeder
{
    protected $table = 'users';
    
    protected function insertRows()
    {
        return [
            []
        ];
    }
}

class UserTableSeeder extends AbstractTableSeeder
{
    protected $table = 'users';
    
    protected function insertRows()
    {
        return [
            []
        ];
    }
}

class BrandTableSeeder extends AbstractTableSeeder
{
    protected $table = 'brands';
    
    protected function insertRows()
    {
        return [
            [],
        ];
    }
}
