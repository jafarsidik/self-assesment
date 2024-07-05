<?php

namespace App\Filament\Resources\SelfAssesmentResource\Pages;

use App\Filament\Resources\SelfAssesmentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class CreateSelfAssesment extends CreateRecord
{
    protected function mutateFormDataBeforeCreate(array $data): array
    {
       
        
        
        foreach($data as $key =>$val){
            $explode = explode('|',$key);
            $skp = DB::table('buku_karus')->where(array('skp_code'=>$explode[0],'id'=>$explode[2]))->first();
            // echo "<pre>";
            // print_r($skp);
            $skp1=1;
            $skp2=1;
            $i =0;
            foreach(json_decode($skp->sub_kompetensi_dan_kode) as $keys=>$detail){
                if($detail->tingkat_kemapuan_vokasi == $val){
                    $datas['record_self_assesment'][$key] = array(
                        'hasil_jawaban_self_assesment'=>$val,
                        'jawaban_buku_karu_tingkat_kemapuan_vokasi'=>$detail->tingkat_kemapuan_vokasi,
                        'jawaban_buku_karu_tingkat_kemapuan_ners'=>$detail->tingkat_kemapuan_ners,
                        'jawaban_konversi'=>1
                    );
                    
                }else{
                    $datas['record_self_assesment'][$key] = array(
                        'hasil_jawaban_self_assesment'=>$val,
                        'jawaban_buku_karu_tingkat_kemapuan_vokasi'=>$detail->tingkat_kemapuan_vokasi,
                        'jawaban_buku_karu_tingkat_kemapuan_ners'=>$detail->tingkat_kemapuan_ners,
                        'jawaban_konversi'=>0
                    );
                }
            }
        }
      //  $datas['skp_1_jumlah_nilai'] =$i;
       // $datas['skp_2_jumlah_nilai'] = $skp2;
        $datas['perawat_id'] = auth()->id();
        $datas['tanggal_self_assesment'] =now();
        //$datas['nilai_skp_1'] = '';
        $datas['hasil'] ='Baik';
       // exit();
        //dd($datas);
        return $datas;
    }
    protected static string $resource = SelfAssesmentResource::class;
    // ...
 
    protected function beforeFill(): void
    {
        // Runs before the form fields are populated with their default values.
    }
 
    protected function afterFill(): void
    {
        // Runs after the form fields are populated with their default values.
    }
 
    protected function beforeValidate(): void
    {
        // Runs before the form fields are validated when the form is submitted.
    }
 
    protected function afterValidate(): void
    {
        // Runs after the form fields are validated when the form is submitted.
    }
 
    protected function beforeCreate(): void
    {
        // Runs before the form fields are saved to the database.
    }
 
    protected function afterCreate(): void
    {
        // Runs after the form fields are saved to the database.
    }
}
