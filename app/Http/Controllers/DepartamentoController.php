<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Departamentos;
use Livewire\Component;


class DepartamentoController extends Component
{
    //

    public $selecdpto= null;

    public function index()
    {
     
        $conexion=mysqli_connect('localhost','root','','prueba');
        $continente=$_POST['continente'];
        
            $sql="SELECT id,
                     id_continente,
                     pais 
                from t_mundo 
                where id_continente='$continente'";
        
            $result=mysqli_query($conexion,$sql);
        
            $cadena="<label>SELECT MUNICIPIO (paises)</label> 
                    <select id='lista2' name='lista2'>";
        
            while ($ver=mysqli_fetch_row($result)) {
                $cadena=$cadena.'<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';
            }
        
            echo  $cadena."</select>";
     
        //
            //return 'Vista index()';
    // $departamentos = Departamentos::all();
    //        return view('paciente.create')->with('departamentos',$departamentos);
//return datos.php();
    }

public function prueba (){
   
}


    public function updatemun($id)
    {
        //
        $municipios = Municipios::find($dpto_id);
         return view('paciente.create')->with('municipios',$municipios);
    }

}
