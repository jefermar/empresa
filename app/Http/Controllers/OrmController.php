<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Product;
use App\Models\Application;
use App\Models\Stock;
use App\Models\Supplier;
use App\Models\Person;
use App\Models\Warehouse;

use Illuminate\Http\Request;

class OrmController extends Controller
{
    public function consultas () {
    //consultas:
/* $ = ::find(1);
     return $;   */


     //consultas:


     //Consultas de Company
        // $Company=Company::find(1);
        // return $Company->Suppliers;
        // $Company=Company::find(1);
        // return $Company->Products;
        // $Company=Company::find(1);
        // return $Company->Applications;
        /* $Company=Company::find(1);
         return $Company->people;*/
        // $Company=Company::find(1);
        // return $Company->Warehouses;
        // $Company=Company::find(1);
        // return $Company->Stokes;
        
        //Consultas de supplier
        // $Supplier=Supplier::find(1);
        // return $Supplier->Company;
        // $Supplier=Supplier::find(3);
        // return $Supplier->Person;
        // $Supplier=Supplier::find(1);
        // return $Supplier->Products;

        // consulta de Person
        // $Person=Person::find(1);
        // return $Person->Company;
        // $Person=Person::find(1);
        // return $Person->Suppliers;
        // $Person=Person::find(1);
        // return $Person->Applications;

        //Consultas de Product
        // $Product=Product::find(1);
        // return $Product->Company;
        // $Product=Product::find(2);
        // return $Product->Supplier;
        // $Product=Product::find(1);
        // return $Product->Stokes;

        //consultas de Warehouse
        // $Warehouse=Warehouse::find(1);
        // return $Warehouse->Company;
        // $Warehouse=Warehouse::find(1);
        // return $Warehouse->Stokes;

        //Consultas de Stoke
        // $Stoke=Stoke::find(1);
        // return $Stoke->Company;
        // $Stoke=Stoke::find(1);
        // return $Stoke->Product;
        // $Stoke=Stoke::find(1);
        // return $Stoke->Warehouse;

        // consulta de aplication
        // $Aplication=Application::find(1);
        // return $Aplication->Company;
        // $Aplication=Application::find(1);
        // return $Aplication->People;


        //consultas 1 a 1:

        
     //LLama a la compañia:
    /* $companies = Company::find(1);
     return $companies->stock;*/

     //llama a el producto:
     /* $product = Product::find(1);
     return $product;*/

     //llama la solicitud:
     /*$applications = Application::find(1);
     return $applications;*/

     //llama el stok:
      /*$stocks = Stock::find(1);
     return $stocks;*/

      //Llama a el provedor:
    /* $suppliers = Supplier::find(1);
     return $suppliers->Product; */   

      //persona:
     $p = Person::find(2);
    return $p;

     //llama a la bodega:
     /*$warehouses = Warehouse::find(1);
     return $warehouses;*/


    }
}
