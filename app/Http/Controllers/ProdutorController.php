<?php 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Request;
use App\Produto;


/**
 * 
 */
class ProdutorController extends Controller
{
   
   /*
    Lista todos os protudos
    */
    public function lista()
	{
	    $produto['dados']=Produto::all();
		return view('lista',$produto);
	}
	
	/**
	*Realiza a busca e em seguida deleta;
	**/
    public function remove($id){
		$p=Produto::find($id);
		$p->delete();
	return redirect()->action('ProdutorController@lista');
	}


       





	
	

//Fazer pegape falta pegar o arquivo
public function download(){
	response()->download('../composer.json');
}


}












?>