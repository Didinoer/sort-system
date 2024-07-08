<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\peserta_apache;
use App\Models\peserta_musketeer;
use App\Models\peserta_ninja;
use App\Models\peserta_sparta;

class searchController extends Controller
{
    public function search(Request $request){

        if($request->ajax()){

            $data=Peserta::where('name', 'LIKE', '%'.$request->search.'%')
            ->orWhere('nama_ayah', 'LIKE', '%'.$request->search.'%')
            ->get();

            $output='';
        if(count($data)>0){

             $output ='
             <table class="table table-primary mx-auto">
             <thead>
                 <tr>
                     <th>No</th>
                     <th>Nama</th>
                     <th>Jenis Kelamin</th>
                     <th>Umur</th>
                     <th>Action Edit</th>
                 </tr>
             </thead>
                <tbody>';
                    foreach ($data as $item){
                     $output .=   '<tr>
                            <td>'.$item -> id.'</td>
                            <td>'.$item -> name.'</td>
                            <td>'.$item ->jenis_kelamin.'</td>
                            <td>'.$item -> umur.'</td>
                            <td><a href="peserta-edit/'.$item ->id.'">Edit</a> | <a href="peserta-detail/'.$item->id.'">Detail</a></td>
                        </tr>';
                        }
             $output .=
                ' </tbody>
                </table>';
        }
        else{
            $output .='No results';
        }
        return $output;
        }
      }

    public function search_sparta(Request $request){

        if($request->ajax()){

            $data=peserta_sparta::where('name', 'LIKE', '%'.$request-> search_sparta.'%')
            ->orWhere('nama_ayah', 'LIKE', '%'.$request-> search_sparta.'%')
            ->get();
            $output='';
        if(count($data)>0){

             $output ='
             <table class="table table-danger mx-auto">
             <thead>
                 <tr>
                   <th> No </th>
                    <th> Nama </th>
                    <th> umur </th>
                    <th> jenis kelamin</th>
                    <th>nama ayah</th>
                    <th> kode group</th>
                    <th>pindah</th>
                 </tr>
             </thead>
                <tbody>';
                    foreach ($data as $item){
                     $output .=   '<tr>
                            <td>'.$item -> id.'</td>
                            <td>'.$item -> name.'</td>
                            <td>'.$item -> umur.'</td>
                            <td>'.$item -> jenis_kelamin.'</td>
                            <td>'.$item -> nama_ayah.'</td>
                            <td>'.$item -> kode_group.'</td>
                            <td><a class="btn btn-xs btn-primary btn-flat btn-sm" href="pindah_sparta/'.$item -> id.'">pindah</a></td>
                        </tr>';
                        }
             $output .=
                ' </tbody>
                </table>';
        }
        else{
            $output .='No results';
        }
        return $output;
        }
      }

      public function search_ninja(Request $request){

        if($request->ajax()){

            $data=peserta_ninja::where('name', 'LIKE', '%'.$request-> search_ninja.'%')
            ->orWhere('nama_ayah', 'LIKE', '%'.$request-> search_ninja.'%')
            ->get();
            $output='';
        if(count($data)>0){

             $output ='
             <table class="table table-info mx-auto">
             <thead>
                 <tr>
                   <th> No </th>
                    <th> Nama </th>
                    <th> umur </th>
                    <th> jenis kelamin</th>
                    <th>nama ayah</th>
                    <th> kode group</th>
                    <th>pindah</th>
                 </tr>
             </thead>
                <tbody>';
                    foreach ($data as $item){
                     $output .=   '<tr>
                            <td>'.$item -> id.'</td>
                            <td>'.$item -> name.'</td>
                            <td>'.$item -> umur.'</td>
                            <td>'.$item -> jenis_kelamin.'</td>
                            <td>'.$item -> nama_ayah.'</td>
                            <td>'.$item -> kode_group.'</td>
                            <td><a class="btn btn-xs btn-primary btn-flat btn-sm" href="pindah_ninja/'.$item -> id.'">pindah</a></td>
                        </tr>';
                        }
             $output .=
                ' </tbody>
                </table>';
        }
        else{
            $output .='No results';
        }
        return $output;
        }
      }

      public function search_apache(Request $request){

        if($request->ajax()){

            $data=peserta_apache::where('name', 'LIKE', '%'.$request-> search_apache.'%')
            ->orWhere('nama_ayah', 'LIKE', '%'.$request-> search_apache.'%')
            ->get();
            $output='';
        if(count($data)>0){

             $output ='
             <table class="table table-warning mx-auto">
             <thead>
                 <tr>
                   <th> No </th>
                    <th> Nama </th>
                    <th> umur </th>
                    <th> jenis kelamin</th>
                    <th>nama ayah</th>
                    <th> kode group</th>
                    <th>pindah</th>
                 </tr>
             </thead>
                <tbody>';
                    foreach ($data as $item){
                     $output .=   '<tr>
                            <td>'.$item -> id.'</td>
                            <td>'.$item -> name.'</td>
                            <td>'.$item -> umur.'</td>
                            <td>'.$item -> jenis_kelamin.'</td>
                            <td>'.$item -> nama_ayah.'</td>
                            <td>'.$item -> kode_group.'</td>
                            <td><a class="btn btn-xs btn-primary btn-flat btn-sm" href="pindah_apache/'.$item -> id.'">pindah</a></td>
                        </tr>';
                        }
             $output .=
                ' </tbody>
                </table>';
        }
        else{
            $output .='No results';
        }
        return $output;
        }
      }

      public function search_musketeer(Request $request){

        if($request->ajax()){

            $data=peserta_musketeer::where('name', 'LIKE', '%'.$request-> search_musketeer.'%')
            ->orWhere('nama_ayah', 'LIKE', '%'.$request-> search_musketeer.'%')
            ->get();
            $output='';
        if(count($data)>0){

             $output ='
             <table class="table table-success mx-auto">
             <thead>
                 <tr>
                   <th> No </th>
                    <th> Nama </th>
                    <th> umur </th>
                    <th> jenis kelamin</th>
                    <th>nama ayah</th>
                    <th> kode group</th>
                    <th>pindah</th>
                 </tr>
             </thead>
                <tbody>';
                    foreach ($data as $item){
                     $output .=   '<tr>
                            <td>'.$item -> id.'</td>
                            <td>'.$item -> name.'</td>
                            <td>'.$item -> umur.'</td>
                            <td>'.$item -> jenis_kelamin.'</td>
                            <td>'.$item -> nama_ayah.'</td>
                            <td>'.$item -> kode_group.'</td>
                            <td><a class="btn btn-xs btn-primary btn-flat btn-sm" href="pindah_musketeer/'.$item -> id.'">pindah</a></td>
                        </tr>';
                        }
             $output .=
                ' </tbody>
                </table>';
        }
        else{
            $output .='No results';
        }
        return $output;
        }
      }
}
