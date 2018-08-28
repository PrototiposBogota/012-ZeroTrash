<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

         $this->call(CountryTableSeeder::class);
         $this->call(DepartamentTableSeeder::class);
         $this->call(CityTableSeeder::class);
         $this->call(LocalityTableSeeder::class);
         $this->call(DocumentTypeTableSeeder::class);
         $this->call(NoveltyTypeTableSeeder::class);
         $this->call(RecyclingTypeTableSeeder::class);
         $this->call(RolesTableSeeder::class);


		\DB::table('liquens')->insert([
        	'name' => 'Fruticulosos',
        	'img' => 'https://i2.wp.com/farm4.static.flickr.com/3519/3944661915_e33f48fdc2.jpg',
                'content' => 'Unidos al sustrato por una superficie de fijación reducida y con forma de pequeños arbustos. Pueden ser cilíndricos, Usnea y Alectoria, o laciniados, Evernia, Ramalina y Cetraria(distintas formas).'
        	]);
        \DB::table('liquens')->insert([
        	'name' => 'Foliáceos',
        	'img' => 'https://ilbca.files.wordpress.com/2011/02/parmelia20caperata1.jpg',
                'content' => 'Se extienden sobre el sustrato, fijándose a él mediante un conjunto de ricinas, Xanthoria o Physcia, o por un solo punto Umbillicaria y Dermatocarpon.'
        	]);
        \DB::table('liquens')->insert([
        	'name' => 'Escamosos',
        	'img' => 'https://i2.wp.com/ichn.iec.cat/bages/alzinar/Imatges%20grans/Cladonia%20pyxidata.jpg',
                'content' => 'Se caracterizan por estar formados por un conjunto de escamas cercanas entre sí y por presentar un borde no adherido al sustrato, Psora.'
        	]);
        \DB::table('liquens')->insert([
        	'name' => 'Gelatinosos',
        	'img' => 'https://i0.wp.com/3.bp.blogspot.com/_BU4kaWfRj5A/SzypStneNfI/AAAAAAAABYo/Ip3yuB01D-M/s400/C.+auriforme,+(2).JPG',
                'content' => 'Adquieren una textura cuando menos flexible y pulposa al encontrarse húmedos. En este estado pueden llegar a ser traslúcidos. (Este tipo de líquenes es muy parecido al liquen escamoso).'
        	]);
        \DB::table('liquens')->insert([
        	'name' => 'Filamentosos',
        	'img' => 'http://www.esacademic.com/pictures/eswiki/76/Lichen_(Steve_Newcomb).jpg',
                'content' => 'Están constituidos por una maraña de filamentos finos y de aspecto lanoso, Cystocoleus, Racodium. (parecido casi idéntico al Fruticuloso).'
        	]);
        \DB::table('liquens')->insert([
        	'name' => 'Crustáceos',
        	'img' => 'https://i0.wp.com/farm4.static.flickr.com/3624/3470561071_ca19afb7e3.jpg',
                'content' => 'Son el grupo más numeroso, agrupando a las partes de los líquenes que se conocen. Fuertemente adheridos al sustrato, son mayoritariamente saxícolas (viven sobre la roca), pero también hay especies cortícolas que viven sobre superficies leñosas; folícolas que aparecen sobre hojas persistentes; lignícolas, sobre madera muerta; terrícolas, sobre la tierra desnuda y humícolas sobre el humus.'
        	]);
        \DB::table('liquens')->insert([
        	'name' => 'Compuestos',
        	'img' => 'https://www.asturnatura.com/photo/_files/photogallery/851cladonia.jpg',
                'content' => 'Formados por dos tipos de talos: uno principal, generalmente crustáceo o escamoso y mas raramente foliáceo, y otro secundario de tipo fruticuloso.'
                ]);

    }
}
