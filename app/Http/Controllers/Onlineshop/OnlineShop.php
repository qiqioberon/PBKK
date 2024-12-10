<?php

namespace App\Http\Controllers\Onlineshop;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Variant;

class OnlineShop extends Controller
{
    // public $allProduct = [
    //     [
    //         'name' => 'Kentang GedaGedi',
    //         'price' => 30000,
    //         'image' => 'resources/images/Onlineshop/Main/kentang.png',
    //     ],
    //     [
    //         'name' => 'Kentang GedaGedi 1',
    //         'price' => 10000,
    //         'image' => 'resources/images/Onlineshop/Main/kentang.png',
    //     ],
    //     [
    //         'name' => 'Kentang GedaGedi 2',
    //         'price' => 20000,
    //         'image' => 'resources/images/Onlineshop/Main/kentang.png',
    //     ],
    //     [
    //         'name' => 'Kentang GedaGedi 3',
    //         'price' => 40000,
    //         'image' => 'resources/images/Onlineshop/Main/kentang.png',
    //     ],
    //     [
    //         'name' => 'Kentang GedaGedi 4',
    //         'price' => 100000,
    //         'image' => 'resources/images/Onlineshop/Main/kentang.png',
    //     ],
    //     [
    //         'name' => 'Kentang GedaGedi 5',
    //         'price' => 30000,
    //         'image' => 'resources/images/Onlineshop/Main/kentang.png',
    //     ],
    //     [
    //         'name' => 'Kentang GedaGedi 6',
    //         'price' => 50000,
    //         'image' => 'resources/images/Onlineshop/Main/kentang.png',
    //     ],
    //     [
    //         'name' => 'Kentang GedaGedi 7',
    //         'price' => 72000,
    //         'image' => 'resources/images/Onlineshop/Main/kentang.png',
    //     ],
    //     [
    //         'name' => 'Kentang GedaGedi 8',
    //         'price' => 120000,
    //         'image' => 'resources/images/Onlineshop/Main/kentang.png',
    //     ],
    //     [
    //         'name' => 'Kentang GedaGedi 9',
    //         'price' => 122000,
    //         'image' => 'resources/images/Onlineshop/Main/kentang.png',
    //     ],
    //     [
    //         'name' => 'Kentang GedaGedi 10',
    //         'price' => 1234000,
    //         'image' => 'resources/images/Onlineshop/Main/kentang.png',
    //     ],
    // ];

    public $allProduct = [
        [
            'name' => 'Amul DarkChocolate',
            'price' => 11000,
            'image' => 'resources/images/Onlineshop/Main/amul_darkchocolate_front.png',
        ],
        [
            'name' => 'Balaji Aloo Sev',
            'price' => 85000,
            'image' => 'resources/images/Onlineshop/Main/balaji_aloo_sev_front.png',
        ],
        [
            'name' => 'Balaji Ratlami Sev',
            'price' => 8000,
            'image' => 'resources/images/Onlineshop/Main/balaji_ratlami_sev_front.png',
        ],
        [
            'name' => 'Balaji Wafers ChaatChaska',
            'price' => 1000,
            'image' => 'resources/images/Onlineshop/Main/balaji_wafers_chaatchaska_front.png',
        ],
        [
            'name' => 'Balaji Wafers MasalaMasti',
            'price' => 2000,
            'image' => 'resources/images/Onlineshop/Main/balaji_wafers_masalamasti_front.png',
        ],
        [
            'name' => 'Balaji Wafers SimplySalted',
            'price' => 4000,
            'image' => 'resources/images/Onlineshop/Main/balaji_wafers_simplysalted_front.png',
        ],
        [
            'name' => 'Balaji Wafers TomatoTwist',
            'price' => 50000,
            'image' => 'resources/images/Onlineshop/Main/balaji_wafers_tomatotwist_front.png',
        ],
        [
            'name' => 'Britannia Marie Gold',
            'price' => 42000,
            'image' => 'resources/images/Onlineshop/Main/britannia_marie_gold_front.png',
        ],
        [
            'name' => 'Cadbury Celebrations',
            'price' => 10200,
            'image' => 'resources/images/Onlineshop/Main/cadbury_celebrations_front.png',
        ],
        [
            'name' => 'Closeup',
            'price' => 11010,
            'image' => 'resources/images/Onlineshop/Main/closeup_front.png',
        ],
        [
            'name' => 'Colgate Strong Teeth',
            'price' => 13125,
            'image' => 'resources/images/Onlineshop/Main/colgate_strong_teeth_front.png',
        ],
        [
            'name' => 'Dark Fantasy Choco Fills',
            'price' => 42000,
            'image' => 'resources/images/Onlineshop/Main/dark_fantasy_choco_fills_front.png',
        ],
        [
            'name' => 'Dove Shampoo',
            'price' => 15000,
            'image' => 'resources/images/Onlineshop/Main/dove_shampoo_front.png',
        ],
        [
            'name' => 'Dove Soap',
            'price' => 65001,
            'image' => 'resources/images/Onlineshop/Main/dove_soap_front.png',
        ],
        [
            'name' => 'Everest Chaat Masala',
            'price' => 44000,
            'image' => 'resources/images/Onlineshop/Main/everest_chaat_masala_front.png',
        ],
        [
            'name' => 'Everest Garam Masala',
            'price' => 51000,
            'image' => 'resources/images/Onlineshop/Main/everest_garam_masala_front.png',
        ],
        [
            'name' => 'Head and Shoulders',
            'price' => 49900,
            'image' => 'resources/images/Onlineshop/Main/head_and_shoulders_front.png',
        ],
        [
            'name' => 'Krack Jack',
            'price' => 4000,
            'image' => 'resources/images/Onlineshop/Main/krack_jack_front.png',
        ],
        [
            'name' => 'Lakme Peach Moisturiser',
            'price' => 39900,
            'image' => 'resources/images/Onlineshop/Main/lakme_peach_moisturiser_front.png',
        ],
        [
            'name' => 'Lifebuoy',
            'price' => 4000,
            'image' => 'resources/images/Onlineshop/Main/lifebuoy_front.png',
        ],
        [
            'name' => 'Liril Bodywash',
            'price' => 42500,
            'image' => 'resources/images/Onlineshop/Main/liril_bodywash_front.png',
        ],
        [
            'name' => 'Lux',
            'price' => 8000,
            'image' => 'resources/images/Onlineshop/Main/lux_front.png',
        ],
        [
            'name' => 'Maggi',
            'price' => 2800,
            'image' => 'resources/images/Onlineshop/Main/maggi_front.png',
        ],
        [
            'name' => 'Nescafe Coffee',
            'price' => 18000,
            'image' => 'resources/images/Onlineshop/Main/nescafe_coffee_front.png',
        ],
        [
            'name' => 'Patanjali AloeVera Gel',
            'price' => 10000,
            'image' => 'resources/images/Onlineshop/Main/patanjali_aloevera_gel_front.png',
        ],
        [
            'name' => 'Pears',
            'price' => 5400,
            'image' => 'resources/images/Onlineshop/Main/pears_front.png',
        ],
        [
            'name' => 'Real Grape Juice',
            'price' => 12522,
            'image' => 'resources/images/Onlineshop/Main/real_grape_juice_front.png',
        ],
        [
            'name' => 'Rin Soap',
            'price' => 2500,
            'image' => 'resources/images/Onlineshop/Main/rin_soap_front.png',
        ],
        [
            'name' => 'Shreeji Dabeli Masala',
            'price' => 45000,
            'image' => 'resources/images/Onlineshop/Main/shreeji_dabeli_masala_front.png',
        ],
        [
            'name' => 'Shreeji Undhiyu Masala',
            'price' => 40000,
            'image' => 'resources/images/Onlineshop/Main/shreeji_undhiyu_masala_front.png',
        ],
        [
            'name' => 'Surf Excel',
            'price' => 23500,
            'image' => 'resources/images/Onlineshop/Main/surf_excel_front.png',
        ],
        [
            'name' => 'Tata Salt',
            'price' => 28000,
            'image' => 'resources/images/Onlineshop/Main/tata_salt_front.png',
        ],
        [
            'name' => 'Tresemme Black',
            'price' => 75500,
            'image' => 'resources/images/Onlineshop/Main/tresemme_black_front.png',
        ],
        [
            'name' => 'Vaseline Aloe Fresh',
            'price' => 21000,
            'image' => 'resources/images/Onlineshop/Main/vaseline_aloe_fresh_front.png',
        ],
        [
            'name' => 'Veg Hakka Noodles',
            'price' => 3000,
            'image' => 'resources/images/Onlineshop/Main/veg_hakka_noodles_front.png',
        ],
        [
            'name' => 'Vicco Vajradanti',
            'price' => 13700,
            'image' => 'resources/images/Onlineshop/Main/vicco_vajradanti_front.png',
        ],
    ];


    public $productVariantImage =
    [
        "amul_darkchocolate" => [
            "amul_darkchocolate_150g_110rs_back",
            "amul_darkchocolate_150g_110rs_front"
        ],
        "balaji_aloo_sev" => [
            "balaji_aloo_sev_400g_85rs_back",
            "balaji_aloo_sev_400g_85rs_front",
            "balaji_aloo_sev_400g_85rs_side"
        ],
        "balaji_ratlami_sev" => [
            "balaji_ratlami_sev_400g_80rs_back",
            "balaji_ratlami_sev_400g_80rs_front",
            "balaji_ratlami_sev_400g_80rs_side"
        ],
        "balaji_wafers_chaatchaska" => [
            "balaji_wafers_chaatchaska_35g_10rs_back",
            "balaji_wafers_chaatchaska_35g_10rs_front"
        ],
        "balaji_wafers_masalamasti" => [
            "balaji_wafers_masalamasti_35g_10rs_back",
            "balaji_wafers_masalamasti_35g_10rs_front"
        ],
        "balaji_wafers_simplysalted" => [
            "balaji_wafers_simplysalted_35g_10rs_back",
            "balaji_wafers_simplysalted_35g_10rs_front"
        ],
        "balaji_wafers_tomatotwist" => [
            "balaji_wafers_tomatotwist_35g_10rs_back",
            "balaji_wafers_tomatotwist_35g_10rs_front"
        ],
        "britannia_marie_gold" => [
            "britannia_marie_gold_250g_40rs_back",
            "britannia_marie_gold_250g_40rs_front",
            "britannia_marie_gold_250g_40rs_side"
        ],
        "cadbury_celebrations" => [
            "cadbury_celebrations_113.8g_100rs_back",
            "cadbury_celebrations_113.8g_100rs_front"
        ],
        "closeup" => [
            "closeup_150g_110rs_back",
            "closeup_150g_110rs_front",
            "closeup_150g_110rs_side"
        ],
        "colgate_strong_teeth" => [
            "colgate_strong_teeth_200g_135rs_back",
            "colgate_strong_teeth_200g_135rs_front",
            "colgate_strong_teeth_200g_135rs_side"
        ],
        "dark_fantasy_choco_fills" => [
            "dark_fantasy_choco_fills_75g_40rs_back",
            "dark_fantasy_choco_fills_75g_40rs_front",
            "dark_fantasy_choco_fills_75g_40rs_side"
        ],
        "dove_shampoo" => [
            "dove_shampoo_180ml_150rs_back",
            "dove_shampoo_180ml_150rs_front"
        ],
        "dove_soap" => [
            "dove_soap_100+20g_65rs_back",
            "dove_soap_100+20g_65rs_front",
            "dove_soap_100+20g_65rs_side"
        ],
        "everest_chaat_masala" => [
            "everest_chaat_masala_50g_44rs_back",
            "everest_chaat_masala_50g_44rs_front"
        ],
        "everest_garam_masala" => [
            "everest_garam_masala_50g_51rs_back",
            "everest_garam_masala_50g_51rs_front"
        ],
        "head_and_shoulders" => [
            "head_and_shoulders_340ml_499rs_back",
            "head_and_shoulders_340ml_499rs_front"
        ],
        "krack_jack" => [
            "krack_jack_200g_40rs_back",
            "krack_jack_200g_40rs_front",
            "krack_jack_200g_40rs_side"
        ],
        "lakme_peach_moisturiser" => [
            "lakme_peach_moisturiser_200ml_399rs_back",
            "lakme_peach_moisturiser_200ml_399rs_front"
        ],
        "lifebuoy" => [
            "lifebuoy_125g_40rs_back",
            "lifebuoy_125g_40rs_front",
            "lifebuoy_125g_40rs_side"
        ],
        "liril_bodywash" => [
            "liril_bodywash_750ml_425rs_back",
            "liril_bodywash_750ml_425rs_front"
        ],
        "lux" => [
            "lux_150g_80rs_back",
            "lux_150g_80rs_front",
            "lux_150g_80rs_side"
        ],
        "maggi" => [
            "maggi_140g_28rs_back",
            "maggi_140g_28rs_front",
            "maggi_140g_28rs_side"
        ],
        "nescafe_coffee" => [
            "nescafe_coffee_45g_180rs_back",
            "nescafe_coffee_45g_180rs_front",
            "nescafe_coffee_45g_180rs_side"
        ],
        "patanjali_aloevera_gel" => [
            "patanjali_aloevera_gel_150ml_100rs_back",
            "patanjali_aloevera_gel_150ml_100rs_front",
            "patanjali_aloevera_gel_150ml_100rs_side"
        ],
        "pears" => [
            "pears_100+20g_54rs_back",
            "pears_100+20g_54rs_front",
            "pears_100+20g_54rs_side"
        ],
        "real_grape_juice" => [
            "real_grape_juice_1l_125rs_cross",
            "real_grape_juice_1l_125rs_front",
            "real_grape_juice_1l_125rs_side"
        ],
        "rin_soap" => [
            "rin_soap_250g_25rs_back",
            "rin_soap_250g_25rs_front",
            "rin_soap_250g_25rs_side"
        ],
        "shreeji_dabeli_masala" => [
            "shreeji_dabeli_masala_100g_45rs_back",
            "shreeji_dabeli_masala_100g_45rs_front"
        ],
        "shreeji_undhiyu_masala" => [
            "shreeji_undhiyu_masala_50g_40rs_back",
            "shreeji_undhiyu_masala_50g_40rs_front"
        ],
        "surf_excel" => [
            "surf_excel_1.5kg_235rs_back",
            "surf_excel_1.5kg_235rs_front",
            "surf_excel_1.5kg_235rs_side"
        ],
        "tata_salt" => [
            "tata_salt_1kg_28rs_back",
            "tata_salt_1kg_28rs_front"
        ],
        "tresemme_black" => [
            "tresemme_black_580ml_755rs_back",
            "tresemme_black_580ml_755rs_front",
            "tresemme_black_580ml_755rs_side"
        ],
        "vaseline_aloe_fresh" => [
            "vaseline_aloe_fresh_200ml_210rs_back",
            "vaseline_aloe_fresh_200ml_210rs_front",
            "vaseline_aloe_fresh_200ml_210rs_side"
        ],
        "veg_hakka_noodles" => [
            "veg_hakka_noodles_140g_30rs_back",
            "veg_hakka_noodles_140g_30rs_front"
        ],
        "vicco_vajradanti" => [
            "vicco_vajradanti_200g_137rs_back",
            "vicco_vajradanti_200g_137rs_front",
            "vicco_vajradanti_200g_137rs_side"
        ],
        "vim_bar" => [
            "vim_bar_800g_86rs_back",
            "vim_bar_800g_86rs_front",
            "vim_bar_800g_86rs_side"
        ],
    ];

    public function allProducts(Request $request)
    {
        // Fetch all products from the database
        $products = Item::with('variants')->get(); // Eager loading to also fetch variants

        // Get cart data from session
        $cart = $request->session()->get('cart', []);

        $variants = [];
        foreach ($products as $product) {
            $productSlug = strtolower(str_replace(' ', '_', $product->name));
            $variants[$productSlug] = $product->variants->map(function ($variant) {
                return [
                    'variant_name' => $variant->variant_name,
                    'image_back' => $variant->image_back,
                    'image_front' => $variant->image_front,
                    'image_side' => $variant->image_side
                ];
            });
        }

        return view('Pertemuan4.onlineshop', [
            'products' => $products,
            'variants' => $variants,
            'cart' => $cart,
        ]);
    }




    public function handleShowCart(Request $request)
    {
        // Ambil cart dari session
        $cart = $request->session()->get('cart', []);

        // Jika ada data cart baru dari request, simpan di session
        if ($request->has('cart')) {
            $request->session()->put('cart', $request->input('cart'));
        }

        return redirect()->route('onlineshop.allproducts');
    }


    public function changeAmountProduct(Request $request)
    {
        // Ambil cart dari session
        $cart = session()->get('cart', []);

        // Update jumlah produk dalam cart
        $product = $request->input('product');
        $amount = $request->input('amount');
        $index = array_search($product, array_column($cart, 'name'));

        // Jika produk ditemukan, perbarui jumlah
        if ($index !== false) {
            $cart[$index]['amount'] = $amount;
        }

        // Simpan kembali cart yang diperbarui ke session
        session()->put('cart', $cart);
    }

    public function addProductsToDatabase()
    {
        foreach ($this->allProduct as $product) {
            // Add the product to the database
            $item = Item::create([
                'name' => $product['name'],
                'price' => $product['price'],
                'image' => $product['image']
            ]);

            // Add variants if they exist
            $productSlug = strtolower(str_replace(' ', '_', $product['name']));

            if (array_key_exists($productSlug, $this->productVariantImage)) {
                $variants = $this->productVariantImage[$productSlug];

                $imageFront = null;
                $imageBack = null;
                $imageSide = null;

                // If there are multiple variants, add them
                foreach ($variants as $variant) {
                    $variantParts = explode('_', $variant);

                    // Check if variant is for front, back, or side
                    $lastElement = $variantParts[count($variantParts) - 1];
                    if ($lastElement === 'front') {
                        $imageFront = $variant;
                    } else if ($lastElement === 'back') {
                        $imageBack = $variant;
                    } else if ($lastElement === 'side') {
                        $imageSide = $variant;
                    }

                    if ($imageFront === null) {
                        continue;
                    }
                }

                // Add the variants to the database
                // Insert the variant into the database
                Variant::create([
                    'Item_item_id' => $item->item_id, // This is the foreign key
                    'variant_name' => $product['name'] . ' ' . $variantParts[1],
                    'image_back' => $imageBack,
                    'image_front' => $imageFront, // Ensure this is always filled
                    'image_side' => $imageSide,
                ]);
            }
        }

        return "Products and Variants added to the database successfully!";
    }
}