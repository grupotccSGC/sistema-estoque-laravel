<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call('ProdutoTableSeeder');
    }
}


/**
 * 
 */
class ProdutoTableSeeder extends Seeder
{
	
		
		public function run(){
		  DB::insert('insert into produtos(nome,descricao,quantidade,valor) values(?,?,?,?)',array('caneta','cor azul da marca Bing',20,1.60));

		  DB::insert('insert into produtos(nome,descricao,quantidade,valor) values(?,?,?,?)',array('celular sansung Motorola','celular Motorola x500 preto e borda branca',50,500.00));

		  DB::insert('insert into produtos(nome,descricao,quantidade,valor) values(?,?,?,?)' ,array('TV smart sansung','TV sansung smart com wifi e cor preta',500,2400.00));


		  DB::insert('insert into produtos(nome,descricao,quantidade,valor) values(?,?,?,?)',
		  	array('Notebook sansung','Notebook sansung cor prata 4gb de memoria ram',300,3800.90));
		}
}
