<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $date = Carbon::now(new \DateTimeZone('AMERICA/Monterrey'));
        DB::table('status_catalog')->insert([
            ['id' => 0,'name' => 'Cancelado', 'table' => 'tickets'],
            ['id' => 1,'name' => 'Aprobado', 'table' => 'tickets'],
            ['id' => 2,'name' => 'Revisando', 'table' => 'tickets'],
            ['id' => 3,'name' => 'revisando', 'table' => 'refers'],
            ['id' => 4,'name' => 'Cancelado', 'table' => 'refers'],
            ['id' => 5,'name' => 'Aprobado', 'table' => 'refers'],
            ['id' => 6,'name' => 'Aprobado', 'table' => 'extrapointValue'],
            ['id' => 7,'name' => 'Cancelado', 'table' => 'app_share'],
            ['id' => 8,'name' => 'Aprobado', 'table' => 'app_share'],
            ['id' => 9,'name' => 'Revisando', 'table' => 'app_share'],
            ['id' => 10,'name' => 'Cancelado', 'table' => 'trivia_score'],
            ['id' => 11,'name' => 'Aprobado', 'table' => 'trivia_score'],
            ['id' => 12,'name' => 'Pendiente', 'table' => 'trivia_score'],
            ['id' => 13,'name' => 'Revisando', 'table' => 'trivia_score'],
            ['id' => 14,'name' => 'Activo', 'table' => 'trivia_questions'],
            ['id' => 15,'name' => 'Inactivo', 'table' => 'trivia_questions'],
            ['id' => 16,'name' => 'Correcta', 'table' => 'trivia_answers'],
            ['id' => 17,'name' => 'Incorrecta', 'table' => 'trivia_answers'],
            ['id' => 18,'name' => 'Activo', 'table' => 'users'],
            ['id' => 19,'name' => 'Inactivo', 'table' => 'users'],
            ['id' => 20,'name' => 'Cancelado', 'table' => 'minigame_score'],
            ['id' => 21,'name' => 'Aprobado', 'table' => 'minigame_score'],
            ['id' => 22,'name' => 'Pendiente', 'table' => 'minigame_score'],
            ['id' => 23,'name' => 'Revisando', 'table' => 'minigame_score'],
            ['id' => 24,'name' => 'Activa', 'table' => 'promo'],
            ['id' => 25,'name' => 'Inactiva', 'table' => 'promo'],
            ['id' => 26,'name' => 'En stock', 'table' => 'awards'],
            ['id' => 27,'name' => 'Sin stock', 'table' => 'awards'],
            ['id' => 28,'name' => 'Activa', 'table' => 'popUp'],
            ['id' => 29,'name' => 'Inactivo', 'table' => 'popUp'],
            ['id' => 30,'name' => 'Activo', 'table' => 'bonus'],
            ['id' => 31,'name' => 'Inactivo', 'table' => 'bonus'],
            ['id' => 32,'name' => 'Pending_Valid', 'table' => 'extrapointValue'],
            ['id' => 33,'name' => 'Active', 'table' => 'presentation_not_arca'],
            ['id' => 34,'name' => 'Inactive', 'table' => 'presentation_not_arca'],
            ['id' => 35,'name' => 'Pending valid', 'table' => 'orders'],
            ['id' => 36,'name' => 'Valid', 'table' => 'orders'],
            ['id' => 37,'name' => 'Cancel', 'table' => 'orders'],
            ['id' => 38,'name' => 'Promoción terminada', 'table' => 'promo'],
            ['id' => 39,'name' => 'En camino', 'table' => 'orders'],
            ['id' => 40,'name' => 'Entregado', 'table' => 'orders'],
            ['id' => 41,'name' => 'enable', 'table' => 'presentation'],
            ['id' => 42,'name' => 'disable', 'table' => 'presentation'],
            ['id' => 43,'name' => 'delete', 'table' => 'presentation'],
            ['id' => 44,'name' => 'enable', 'table' => 'adminUsers'],
            ['id' => 45,'name' => 'disable', 'table' => 'adminUsers'],
            ['id' => 46,'name' => 'invalid', 'table' => 'tickets'],
        ]);

        DB::table('type_catalog')->insert([
            ['name' => 'refer', 'table' => 'extra_pointValue', 'created_at' => Carbon::now() , 'updated_at' => Carbon::now()],
            ['name' => 'miniGames', 'table' => 'extra_pointValue', 'created_at' => Carbon::now() , 'updated_at' => Carbon::now()],
            ['name' => 'app_share', 'table' => 'extra_pointValue', 'created_at' => Carbon::now() , 'updated_at' => Carbon::now()],
            ['name' => 'tienda', 'table' => 'promo', 'created_at' => Carbon::now() , 'updated_at' => Carbon::now()],
            ['name' => 'carrera', 'table' => 'promo', 'created_at' => Carbon::now() , 'updated_at' => Carbon::now()],
            ['name' => 'bonus', 'table' => 'bonus', 'created_at' => Carbon::now() , 'updated_at' => Carbon::now()],
            ['name' => 'ingresos', 'table' => 'transactions', 'created_at' => Carbon::now() , 'updated_at' => Carbon::now()],
            ['name' => 'egresos', 'table' => 'transactions', 'created_at' => Carbon::now() , 'updated_at' => Carbon::now()],
            ['name' => 'rifas', 'table' => 'promo', 'created_at' => Carbon::now() , 'updated_at' => Carbon::now()],
        ]);

        DB::table('awards')->insert([
            'promo_id' => 1,
            'image' => 'a',
            'name' => 'Gift card Amazon',
            'description' => 'Hola',
            'stock' => 400,
            'redeem' => 0,
            'price' => 100,
            'status_id' => 2,
            'created_at' => $date,
            'updated_at' => $date,
        ]);

        DB::table('states')->insert([
            ['name' => 'Baja California Norte', 'promo_id' => 1],
            ['name' => 'Sonora', 'promo_id' => 1],
            ['name' => 'Chihuahua', 'promo_id' => 1],
            ['name' => 'Baja California Sur', 'promo_id' => 1],
            ['name' => 'Coahuila', 'promo_id' => 1],
            ['name' => 'Sinaloa', 'promo_id' => 1],
            ['name' => 'Durango', 'promo_id' => 1],
            ['name' => 'Nuevo León', 'promo_id' => 1],
            ['name' => 'Zacatecas', 'promo_id' => 1],
            ['name' => 'Tamaulipas', 'promo_id' => 1],
            ['name' => 'San Luis Potosí', 'promo_id' => 1],
            ['name' => 'Aguascalientes', 'promo_id' => 1],
            ['name' => 'Jalisco', 'promo_id' => 1],
        ]);

        DB::table('admin_users')->insert([
            [
                'name' => 'Ivan', 
                'email' => 'pruebas@sysop.com', 
                'password' => md5('Ivan12345'),
                'type_id' => 1,
                'status_id' => 44,
                'created_at' => Carbon::now(new \DateTimeZone('AMERICA/Monterrey')), 
                'updated_at' => Carbon::now(new \DateTimeZone('AMERICA/Monterrey'))
            ],
            [
                'name' => 'Aldo', 
                'email' => 'aldog@editasolutions.com.mx', 
                'password' => md5('Aldog123'),
                'type_id' => 1,
                'status_id' => 44,
                'created_at' => Carbon::now(new \DateTimeZone('AMERICA/Monterrey')), 
                'updated_at' => Carbon::now(new \DateTimeZone('AMERICA/Monterrey'))
            ],
            [
                'name' => 'Victor', 
                'email' => 'victor@editasolutions.com.mx', 
                'password' => md5('Victor123'),
                'type_id' => 1,
                'status_id' => 44,
                'created_at' => Carbon::now(new \DateTimeZone('AMERICA/Monterrey')), 
                'updated_at' => Carbon::now(new \DateTimeZone('AMERICA/Monterrey'))
            ],
        ]);
        
        DB::table('promo')->insert([
            ['title' => 'Somos topo-chico', 'begin_date' => '2022-03-01', 'end_date' => '2022-06-22', 'type_id' => 1, 'imageBanner' => 'img/promo/promo1/promo1.png', 'image' => 'img/promo/promo1/promo1.png',
            'status_id' => 24, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['title' => 'Rifa', 'begin_date' => '2022-03-01', 'end_date' => '2022-06-22', 'type_id' => 4, 'imageBanner' => 'img/promo/promo1/promo1.png', 'image' => 'img/promo/promo1/promo1.png',
            'status_id' => 24, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
        ]);

        DB::table('video_global')->insert([
            [
                'pathVideo' => 'https://player.vimeo.com/video/710821757?h=fb98593299', 
                'promo_id' => 1, 
                'type' => 'steps', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'pathVideo' => 'https://player.vimeo.com/video/710821820?h=d0743a7906', 
                'promo_id' => 1, 
                'type' => 'awards', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            [
                'pathVideo' => 'https://player.vimeo.com/video/710821855?h=20f4cbc991', 
                'promo_id' => 1, 
                'type' => 'promo', 
                'created_at' => Carbon::now(), 
                'updated_at' => Carbon::now()
            ],
            
            
        ]);

        DB::table('periods')->insert([
            ['promo_id' => 1, 'order' => 1, 'inicial_date' => '2022-03-01 00:00:00', 'final_date' => '2022-06-22 00:00:00'],
        ]);


        DB::table('messages')->insert([
            [
                'section' => 'campaign',
                'title' => 'main',
                'content' => 'Hola',
                'created_at' => Carbon::now(new \DateTimeZone('AMERICA/Monterrey')) , 
                'updated_at' => Carbon::now(new \DateTimeZone('AMERICA/Monterrey'))
            ],
        ]);

        DB::table('campaign')->insert([
            [
                'slug' => 'slug1Example',
                'description' => 'Slug de prueba 1',
                'visitors' => 0,
                'registers' => 0,
                'created_at' => Carbon::now(new \DateTimeZone('AMERICA/Monterrey')), 
                'updated_at' => Carbon::now(new \DateTimeZone('AMERICA/Monterrey')),
            ],
        ]);


        DB::table('versions')->insert([
            'num_version' => '1.0.0', 
            'created_at' => Carbon::now(new \DateTimeZone('AMERICA/Monterrey')) , 
            'updated_at' => Carbon::now(new \DateTimeZone('AMERICA/Monterrey'))
        ]);

        DB::table('type_presentation')->insert([
            ['name' => 'Snacks'],
            ['name' => 'Basico'],
            ['name' => 'Bebidas'],
            ['name' => 'Varios'],
        ]);

        DB::table('presentation')->insert([
            ['promo_id' => 1, 'name' => 'T CH HARD S FRESA- 355 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'T CH HARD S LIMA L 355 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'T CH HARD S PIÑA T 355 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'CIEL MINERALIZADA 2.00 L' ,'pointValue' => 8, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'CIEL MINERALIZADA 600 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'T CH AGUA MINERAL 1.50 L' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'T CH AGUA MINERAL 600 ML' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'T CH TWIST LIMÓN 600 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'T CH TWIST TORONJA 600 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'CIEL AGUA PURIF 1.00 L' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'CIEL AGUA PURIF 1.50 L' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'CIEL AGUA PURIF 5.00 L' ,'pointValue' => 4, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'CIEL AGUA PURIF 600 ML' ,'pointValue' => 24, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'CIEL EXPRIM FRESA 1.00 L' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'CIEL EXPRIM JAMAIC 1.00 L' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'CIEL EXPRIM LIMON 1.00 L' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'VITAMIN W ENERGY 500 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'VITAMIN W POWERC 500 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'ADES FRUTAL MANGO 200 ML' ,'pointValue' => 4, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'ADES FRUTAL MANZAN 200 ML' ,'pointValue' => 4, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'ADES FRUTAL MANZAN 946 ML' ,'pointValue' => 3, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'ADES LÁCTEO NATURA 946 ML' ,'pointValue' => 3, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FRUTSI FRUTAS ROJA 250 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FRUTSI UVA 250 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'DELAWARE PUNCH UVA 355 ML' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'DELAWARE PUNCH UVA 355 ML' ,'pointValue' => 24, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'DELAWARE PUNCH UVA 600 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'PULPY NARANJA 400 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA-COLA 1.00 L' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA-COLA 1.25 L' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA-COLA 1.50 L' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA-COLA 2.00 L' ,'pointValue' => 8, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA-COLA 2.50 L' ,'pointValue' => 8, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA-COLA 2.50 L' ,'pointValue' => 8, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA-COLA 235 ML' ,'pointValue' => 24, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA-COLA 3.00 L' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA-COLA 355 ML' ,'pointValue' => 24, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA-COLA 355 ML' ,'pointValue' => 24, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA-COLA 473 ML' ,'pointValue' => 24, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA-COLA 500 ML' ,'pointValue' => 24, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA-COLA 500 ML' ,'pointValue' => 24, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA-COLA 500 ML' ,'pointValue' => 24, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA-COLA 600 ML' ,'pointValue' => 24, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA-COLA 710 ML' ,'pointValue' => 24, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'CC CAFÉ CARAMELO 235 ML' ,'pointValue' => 4, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'CC CAFÉ EXPRESSO 235 ML' ,'pointValue' => 4, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'CC CAFÉ VAINILLA 235 ML' ,'pointValue' => 4, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA COLA SIN AZÚC 1.00 L' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA COLA SIN AZÚC 2.50 L' ,'pointValue' => 8, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA COLA SIN AZÚC 235 ML' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA COLA SIN AZÚC 235 ML' ,'pointValue' => 24, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA COLA SIN AZÚC 355 ML' ,'pointValue' => 24, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA COLA SIN AZÚC 500 ML' ,'pointValue' => 24, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA COLA SIN AZÚC 600 ML' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA-COLA LIGHT 1.00 L' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA-COLA LIGHT 2.00 L' ,'pointValue' => 8, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA-COLA LIGHT 2.50 L' ,'pointValue' => 8, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA-COLA LIGHT 235 ML' ,'pointValue' => 24, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA-COLA LIGHT 355 ML' ,'pointValue' => 24, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA-COLA LIGHT 500 ML' ,'pointValue' => 24, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA-COLA LIGHT 600 ML' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'COCA-COLA LIGHT 600 ML' ,'pointValue' => 24, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'MONSTER ENERGY ORI 473 ML NR' ,'pointValue' => 4, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'CIEL AGUA PURIF 20.0 L' ,'pointValue' => 1, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'POWERADE FRUT ROJA 1.00 L' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'POWERADE FRUT ROJA 500 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'POWERADE FRUT ROJA 600 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'POWERADE LIMALIM 1.00 L' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'POWERADE LIMALIM 600 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'POWERADE MORAS 1.00 L' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'POWERADE MORAS 500 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'POWERADE MORAS 600 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'POWERADE NARMAND 1.00 L' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'POWERADE NARMAND 600 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'POWERADE UVA 500 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'POWERADE UVA 600 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'DEL VALLE DURAZNO 250 ML' ,'pointValue' => 40, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'DEL VALLE DURAZNO 335 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'DEL VALLE DURAZNO 413 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'DEL VALLE DURAZNO 946 ML' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'DEL VALLE GUAYABA 413 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'DEL VALLE MANGO 413 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'DEL VALLE MANZANA 250 ML' ,'pointValue' => 4, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'DEL VALLE MANZANA 335 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'DEL VALLE MANZANA 413 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'DEL VALLE NC MANZ 250 ML' ,'pointValue' => 40, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'DEL VALLE NC MANZ 413 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'DEL VALLE NC MANZ 500 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'DEL VALLE NC MANZ 946 ML' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'DEL VALLE PIÑA 1.00 L' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'DEL VALLE PIÑA 335 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'DVALLE RESERVA ARÁ 1.00 L' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'SCL LECHE DESLAC 1.00 L' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'SCL LECHE ENTERA 1.00 L' ,'pointValue' => 2, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'SCL LECHE ENTERA 1.00 L' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'SCL LECHE LIGHT 1.00 L' ,'pointValue' => 2, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'SCL LECHE LIGHT 1.00 L' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'SCL LECHE FRESA 200 ML' ,'pointValue' => 4, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'SCL LECHE VAINILLA 200 ML' ,'pointValue' => 4, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'VALLE FRUT CITRUS 1.00 L' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'VALLE FRUT CITRUS 1.50 L' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'VALLE FRUT CITRUS 2.00 L' ,'pointValue' => 8, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'VALLE FRUT CITRUS 600 ML' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'VALLE FRUT CITRUS 600 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'DVALLE Y NADA LIMO 1.50 L' ,'pointValue' => 8, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'DVALLE Y NADA NARA 1.50 L' ,'pointValue' => 8, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'DVALLE Y NADA NARA 600 ML' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'DVALLE Y NADA NARA 600 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FANTA FRESA 2.00 L NR' ,'pointValue' => 8, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FANTA FRESA 600 ML' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FANTA NARANJA 1.50 L' ,'pointValue' => 8, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FANTA NARANJA 2.00 L' ,'pointValue' => 8, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FANTA NARANJA 2.50 L' ,'pointValue' => 8, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FANTA NARANJA 3.00 L' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FANTA NARANJA 355 ML' ,'pointValue' => 24, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FANTA NARANJA 400 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FANTA NARANJA 600 ML' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FANTA NARANJA 600 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FRESCA TORONJA 1.00 L' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FRESCA TORONJA 1.00 L' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FRESCA TORONJA 1.50 L' ,'pointValue' => 8, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FRESCA TORONJA 2.00 L' ,'pointValue' => 8, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FRESCA TORONJA 2.50 L' ,'pointValue' => 8, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FRESCA TORONJA 3.00 L' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FRESCA TORONJA 355 ML' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FRESCA TORONJA 355 ML' ,'pointValue' => 24, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FRESCA TORONJA 400 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FRESCA TORONJA 600 ML' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FRESCA TORONJA 600 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'SIDRAL MUN MZA-DZO 600 ML' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'SIDRAL MUNDET MANZ 1.50 L' ,'pointValue' => 8, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'SIDRAL MUNDET MANZ 2.00 L' ,'pointValue' => 8, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'SIDRAL MUNDET MANZ 2.50 L' ,'pointValue' => 8, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'SIDRAL MUNDET MANZ 355 ML' ,'pointValue' => 24, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'SIDRAL MUNDET MANZ 400 ML' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'SIDRAL MUNDET MANZ 600 ML' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'SPRITE 1.50 L' ,'pointValue' => 8, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'SPRITE 2.00 L' ,'pointValue' => 8, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'SPRITE 2.50 L' ,'pointValue' => 8, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'SPRITE 3.00 L' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'SPRITE 355 ML' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'SPRITE 355 ML' ,'pointValue' => 24, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'SPRITE 400 ML' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'SPRITE 400 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'SPRITE 600 ML' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'SPRITE 600 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'T CH SANGRIA 600 ML' ,'pointValue' => 12, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'SPRITE SIN AZÚCAR 600 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FUZE TEA DURAZNO 600 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FUZE TEA NEGRO LIM 600 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],
            ['promo_id' => 1, 'name' => 'FUZE TEA VERDE LIM 600 ML' ,'pointValue' => 6, 'created_at' => $date, 'updated_at' => $date, 'status_id' => 42],

        ]);

        DB::table('presentation_not_arca')->insert([
            ['typePresentation_id' => 1,'name' => 'Frituras', 'status_id' => 33, 'promo_id' => 1, 'created_at' => $date, 'updated_at' => $date],
            ['typePresentation_id' => 1,'name' => 'Cacahuates', 'status_id' => 33, 'promo_id' => 1, 'created_at' => $date, 'updated_at' => $date],
            ['typePresentation_id' => 1,'name' => 'Pan dulce embolsado', 'status_id' => 33, 'promo_id' => 1, 'created_at' => $date, 'updated_at' => $date],
            ['typePresentation_id' => 1,'name' => 'Pan dulce', 'status_id' => 33, 'promo_id' => 1, 'created_at' => $date, 'updated_at' => $date],
            ['typePresentation_id' => 1,'name' => 'Chocolates', 'status_id' => 33, 'promo_id' => 1, 'created_at' => $date, 'updated_at' => $date],
            ['typePresentation_id' => 1,'name' => 'Palomitas', 'status_id' => 33, 'promo_id' => 1, 'created_at' => $date, 'updated_at' => $date],
            ['typePresentation_id' => 1,'name' => 'Otros', 'status_id' => 33, 'promo_id' => 1, 'created_at' => $date, 'updated_at' => $date],
            ['typePresentation_id' => 2,'name' => 'Leche otras marcas', 'status_id' => 33, 'promo_id' => 1, 'created_at' => $date, 'updated_at' => $date],
            ['typePresentation_id' => 2,'name' => 'Pan de barra', 'status_id' => 33, 'promo_id' => 1, 'created_at' => $date, 'updated_at' => $date],
            ['typePresentation_id' => 2,'name' => 'Tortillas', 'status_id' => 33, 'promo_id' => 1, 'created_at' => $date, 'updated_at' => $date],
            ['typePresentation_id' => 2,'name' => 'Huevo', 'status_id' => 33, 'promo_id' => 1, 'created_at' => $date, 'updated_at' => $date],
            ['typePresentation_id' => 2,'name' => 'Otros', 'status_id' => 33, 'promo_id' => 1, 'created_at' => $date, 'updated_at' => $date],
            ['typePresentation_id' => 3,'name' => 'Pepsi', 'status_id' => 33, 'promo_id' => 1, 'created_at' => $date, 'updated_at' => $date],
            ['typePresentation_id' => 3,'name' => 'Otras Marcas', 'status_id' => 33, 'promo_id' => 1, 'created_at' => $date, 'updated_at' => $date],
            ['typePresentation_id' => 3,'name' => 'Agua Otras Marcas', 'status_id' => 33, 'promo_id' => 1, 'created_at' => $date, 'updated_at' => $date],
            ['typePresentation_id' => 3,'name' => 'Cerveza', 'status_id' => 33, 'promo_id' => 1, 'created_at' => $date, 'updated_at' => $date],
            ['typePresentation_id' => 3,'name' => 'Licores', 'status_id' => 33, 'promo_id' => 1, 'created_at' => $date, 'updated_at' => $date],
            ['typePresentation_id' => 3,'name' => 'Otras', 'status_id' => 33, 'promo_id' => 1, 'created_at' => $date, 'updated_at' => $date],
            ['typePresentation_id' => 4,'name' => 'Cigarros', 'status_id' => 33, 'promo_id' => 1, 'created_at' => $date, 'updated_at' => $date],
            ['typePresentation_id' => 4,'name' => 'Carbon', 'status_id' => 33, 'promo_id' => 1, 'created_at' => $date, 'updated_at' => $date],
            ['typePresentation_id' => 4,'name' => 'Medicamentos', 'status_id' => 33, 'promo_id' => 1, 'created_at' => $date, 'updated_at' => $date],
            ['typePresentation_id' => 4,'name' => 'Articulos de Limpieza', 'status_id' => 33, 'promo_id' => 1, 'created_at' => $date, 'updated_at' => $date],
            ['typePresentation_id' => 4,'name' => 'Articulos de higiene', 'status_id' => 33, 'promo_id' => 1, 'created_at' => $date, 'updated_at' => $date],
            ['typePresentation_id' => 4,'name' => 'Otros', 'status_id' => 33, 'promo_id' => 1, 'created_at' => $date, 'updated_at' => $date],
        ]);

        


        
        
        
         

        


    }
}
