<?php 
    header('Access-Control-Allow-Origin: *'); /**para evitar el bloqueo de cors para origenes desconocidos */
    header('Content-Type: application/json');

$datos = '{
    "productos":[
        {
            "nombre":"Elegir..",
            "url":"",
            "precio":"",
            "tipo":""
        },
        {
            "nombre":"Antioxidante de Frutos rojos",
            "url":"https://dluchi.com/shop/product/antioxidante-fresas-antioxidante-de-frutos-rojos-29",
            "precio":"9.990",
            "tipo":""
        },
        {
            "nombre":"Bronceador de Coco",
            "url":"https://dluchi.com/shop/product/bronceador-coco-bronceador-de-coco-25",
            "precio":"29.990",
            "tipo":""
        },
        {
            "nombre":"Bronceador de Zanahoria y Canela",
            "url":"https://dluchi.com/shop/product/bronceador-zanahoria-bronceador-de-zanahoria-y-canela-26",
            "precio":"29.990",
            "tipo":""
        },
        {
            "nombre":"Crema autobronceadora",
            "url":"https://dluchi.com/shop/product/crema-autobronceadora-crema-autobronceadora-31",
            "precio":"44.990",
            "tipo":""
        },
        {
            "nombre":"DLuchi for Men",
            "url":"https://dluchi.com/shop/product/d-luchi-men-d-luchi-for-men-30",
            "precio":"34.990",
            "tipo":""
        },
        {
            "nombre":"KABA aceite antiestrías",
            "url":"https://dluchi.com/shop/product/antiestrias-kaba-aceite-antiestrias-22",
            "precio":"54.990",
            "tipo":""
        },
        {
            "nombre":"KABA Bio mascarilla capilar",
            "url":"https://dluchi.com/shop/product/biomascarilla-kaba-bio-mascarilla-capilar-12",
            "precio":"29.990",
            "tipo":""
        },
        {
            "nombre":"KABA crema depilatoria spray",
            "url":"https://dluchi.com/shop/product/spray-kaba-kaba-crema-depilatoria-spray-16",
            "precio":"14.990",
            "tipo":""
        },
        {
            "nombre":"KABA gel liporeductor, anticelulítico y reafirmante",
            "url":"https://dluchi.com/shop/product/kitpadres-kaba-gel-liporeductor-anticelulitico-y-reafirmante-2",
            "precio":"59.990",
            "tipo":""
        },
        {
            "nombre":"KABA Pócima para pestañas",
            "url":"https://dluchi.com/shop/product/pocima-kaba-kaba-pocima-para-pestanas-11",
            "precio":"24.990",
            "tipo":""
        },
        {
            "nombre":"Kit Bronceo Básico",
            "url":"https://dluchi.com/shop/product/kit-bronceo-basico-kit-bronceo-basico-24",
            "precio":"69.990",
            "tipo":""
        },
        {
            "nombre":"Kit Bronceo + Loción de Oro",
            "url":"https://dluchi.com/shop/product/kit-basico-locion-de-oro-kit-bronceo-locion-de-oro-23",
            "precio":"84.990",
            "tipo":""
        },
        {
            "nombre":"Kit bronceo sin sol",
            "url":"https://dluchi.com/shop/product/default-0053-kit-bronceo-sin-sol-35",
            "precio":"144.990",
            "tipo":""
        },
        {
            "nombre":"Kit capilar crecimiento - graso",
            "url":"https://dluchi.com/shop/product/kit-capilar-crecimiento-13",
            "precio":"54.900",
            "tipo":"graso"
        },
        {
            "nombre":"Kit capilar crecimiento - seco",
            "url":"https://dluchi.com/shop/product/kit-capilar-crecimiento-13",
            "precio":"54.900",
            "tipo":"seco"
        },
        {
            "nombre":"Kit crecimiento acelerado para cabello - graso",
            "url":"https://dluchi.com/shop/product/kit-crecimiento-acelerado-para-cabello-36",
            "precio":"110.000",
            "tipo":"graso"
        },
        {
            "nombre":"Kit crecimiento acelerado para cabello - seco",
            "url":"https://dluchi.com/shop/product/kit-crecimiento-acelerado-para-cabello-36",
            "precio":"110.000",
            "tipo":"seco"
        },
        {
            "nombre":"Kit depilación instantánea",
            "url":"https://dluchi.com/shop/product/default-0056-kit-depilacion-instantanea-37",
            "precio":"30.990",
            "tipo":""
        },
        {
            "nombre":"Kit figura perfecta",
            "url":"https://dluchi.com/shop/product/default-0028-kit-figura-perfecta-18",
            "precio":"115.000",
            "tipo":""
        },
        {
            "nombre":"Loción de Oro",
            "url":"https://dluchi.com/shop/product/default-0039-locion-de-oro-28",
            "precio":"14.990",
            "tipo":""
        },
        {
            "nombre":"Loción de oro capilar",
            "url":"https://dluchi.com/shop/product/default-0032-locion-de-oro-capilar-21",
            "precio":"39.990",
            "tipo":""
        },
        {
            "nombre":"Mini-kit de bronceo",
            "url":"https://dluchi.com/shop/product/default-0027-mini-kit-de-bronceo-17",
            "precio":"49.990",
            "tipo":""
        },
        {
            "nombre":"Morella",
            "url":"https://dluchi.com/shop/product/default-0043-morella-32",
            "precio":"119.990",
            "tipo":""
        },
        {
            "nombre":"Regenerador de Almendras",
            "url":"https://dluchi.com/shop/product/default-0038-regenerador-de-almendras-27",
            "precio":"15.990",
            "tipo":""
        },
        {
            "nombre":"Shampoo de cannabis - graso",
            "url":"https://dluchi.com/shop/product/shampoo-de-cannabis-15",
            "precio":"30.000",
            "tipo":"graso"
        },
        {
            "nombre":"Shampoo de cannabis - seco",
            "url":"https://dluchi.com/shop/product/shampoo-de-cannabis-15",
            "precio":"30.000",
            "tipo":"seco"
        },
        {
            "nombre":"Shampoo de chocolate oscuro",
            "url":"https://dluchi.com/shop/product/default-0052-shampoo-de-chocolate-oscuro-34",
            "precio":"28.000",
            "tipo":""
        },
        {
            "nombre":"Tónico capilar con cannabis (crecepelo)",
            "url":"https://dluchi.com/shop/product/default-0023-tonico-capilar-con-cannabis-crecepelo-14",
            "precio":"29.990",
            "tipo":""
        },
        {
            "nombre":"Tratamiento capilar repolarizador",
            "url":"https://dluchi.com/shop/product/repolarizador-kaba-tratamiento-capilar-repolarizador-20",
            "precio":"29.990",
            "tipo":""
        },
        {
            "nombre":"Ungüento de cannabis - mediano",
            "url":"https://dluchi.com/shop/product/unguento-de-cannabis-19",
            "precio": "49.990"
        },
        {
            "nombre":"Ungüento de cannabis - grande",
            "url":"https://dluchi.com/shop/product/unguento-de-cannabis-19",
            "precio": "79.990"
        },
        {
            "nombre":"KABA gel liporeductor, anticelulítico y reafirmante",
            "url":"https://dluchi.com/shop/product/kitpadres-kaba-gel-liporeductor-anticelulitico-y-reafirmante-2",
            "precio":"59.990",
            "tipo":""
        },
        {
            "nombre":"Kit capilar Kaba y CBD - graso",
            "url":"https://dluchi.com/shop/product/kit-capilar-kaba-y-cbd-7",
            "precio":"85.000",
            "tipo":"graso"
        },
        {
            "nombre":"Kit capilar Kaba y CBD - seco",
            "url":"https://dluchi.com/shop/product/kit-capilar-kaba-y-cbd-7",
            "precio":"85.000",
            "tipo":"seco"
        },
        {
            "nombre":"Kit capilar Kaba",
            "url":"https://dluchi.com/shop/product/default-0013-kit-capilar-kaba-8",
            "precio":"54.990",
            "tipo":""
        },
        {
            "nombre":"Shampoo de chocolate Blanco",
            "url":"https://dluchi.com/shop/product/default-0051-shampoo-de-chocolate-blanco-9",
            "precio":"28.000",
            "tipo":""
        },
        {
            "nombre":"Bronceador en gel",
            "url":"https://dluchi.com/shop/product/default-0017-bronceador-en-gel-10",
            "precio":"34.990",
            "tipo":""
         }
    ]
}';

    $row = json_decode($datos);

    echo json_encode($row);
