<?php

namespace App\Http\Controllers\root;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use App\Pedido;
use App\User;

use App\Paquete;


class PedidoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    //
    
    public function index(Request $request){

        $texto=trim($request->get('txtBusqueda'));

        $all=Pedido::where('folio','like','%'.$texto.'%')->orderBy('id','desc')->Paginate(10);
        //$all=Pedido::orderBy('id','desc')->Paginate(10); 
        ///// $all=Pedido::all();
        return view('root.pedidos.index',['all'=>$all]);
    }




    public function create(){

        $all=Pedido::all();

        return view('root.pedidos.create',['all'=>$all]);

    }

   

    /*
    public function create(){

        $all=Pedido::all();

        return view('root.pedidos.create',['all'=>$all]);

    } */


    public function store(Request $request){

        $request->validate([
            'cantidad' => 'required|numeric',
            
            'totalPago' => 'required|numeric',
            
            
        ]);

        
        
        //include('Ticket/Ticket.php');

        $fechaHoraActual=now();

        $new=new Pedido;

        //eroew->name = aqui va el nombre de la variabl
        $new->id_usuario=$request->userId;
        $new->id_paquete=$request->id_paquete;

        
        $new->cantidad = $request->cantidad;
        $new->precio=$request->precio;
        $new->forma_pago=$request->forma_pago;

        if(isset($request->imagen)){
            $file=$request->file('imagen')->store('pedidos');

            $new->imagen= $file;
        }


        $new->folio=$request->folio;
        $new->status=$request->status;
        $new->created_at=$fechaHoraActual;

        
        $new->save();

        //$pdf->Output('D','name.pdf',true);
        //$pdf->Output('F','name.pdf');



        //$pedido=Pedido::where('folio',$request->folio)->first();

        
        //return view('root.pedidos.create',['all'=>$all])->with('status','Pedido creado con éxito' );
       return redirect()->action('Root\ClienteController@index')->with('statusPedido','Pedido creado con éxito' )
       
       ->with('cliente',$request->userNombre )
       ->with('cantidad',$request->cantidad )
       ->with('paquete',utf8_decode($request->paqueteNombre) )
       ->with('precio',$request->precio )
       ->with('folio',$request->folio )
       ->with('formaPago',$request->forma_pago )
       ->with('fechaCreacion',$fechaHoraActual);
       /*->with('','' )
       ->with('','' )
       ->with('','' );*/
        //return redirect()->action('HomeController@index')->with('status','Pedido creado con éxito' ) ;

    }

   
    /*
    
    


    */
    public function edit($id){

        $pedido=decrypt($id);

        $all=Pedido::find($pedido);
        
        return view('root.pedidos.edit',['all'=>$all]);

    }

    public function update(Request $request, $id){

        $pedido= decrypt($id);

        /*
        $request->validate([
            'nombre' => 'required|max:80|string',
            'descripcion' => 'max:150|string',
            'cantidad' => 'required|numeric',
            'precio' => 'required|numeric',

        ]);*/

        $newEdit=Pedido::find($pedido);
        //$usernew->name = aqui va el nombre de la variable
        
        /*$newEdit->nombre = mb_convert_case($request->nombre,MB_CASE_TITLE,"UTF-8");
        $newEdit->descripcion = mb_convert_case($request->descripcion,MB_CASE_TITLE,"UTF-8");
        $newEdit->cantidad = $request->cantidad;*/
        $newEdit->status=$request->status;

        
        $newEdit->save();

        return redirect()->action('Root\PedidoController@index')->with('status','El pedido ha sido entregado con éxito');

    }


    public function destroy($id){
        $pedido=decrypt($id);
        $pedidoDelete=Pedido::find($pedido);
        $pedidoDelete->delete();

        return redirect()->action('Root\PedidoController@index')->with('status','Pedido eliminado');

    }

    
}
