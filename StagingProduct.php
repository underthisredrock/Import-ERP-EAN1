<?php

namespace StagingProduct;

class Product {

    public $code_type;
    public $E_status;
    public $ERP_ean;
    public $ERP_export;
    public $ERP_brand;
    public $ERP_translated_brand;
    public $normalized_brand_name;
    public $ERP_Prod_name;
    public $B_product_name;
    public $B_NITA;
    public $B_NENG;
    public $B_PITA;
    public $B_NCZ;
    public $ERP_Prod_code;
    public $attribute_set_code;
    public $name;
    private $BLU_root_URL;
    private $api_key;
    private $N_id_stringa;
    private $N_product_master;
    private $N_Prod_code;
    public $P_saved_name;
    private $N_Prod_type;
    private $N_Prod_name;
    private $N_Variant_name;
    private $N_Prod_annotation;
    private $N_Prod_tipo;
    private $N_Prod_gender;
    private $N_color;
    private $N_additional_info;
    private $N_has_different_colors;
    private $N_has_different_sizes;
    private $N_Variants;
    private $configurable_variations;
    private $configurable_variation_labels;
    private $E_name;
    private $E_line;
    private $productId;
    private $sku;
    private $B_asin;
    private $B_description;
    private $B_mpn;
    private $B_model;
    private $B_publisher;
    private $B_ingredients;
    private $B_size;
    private $B_format;
    private $B_features;
    private $B_categories;
    private $B_sub_categories;
    private $categories;
    private $sub_categories;
    private $product_websites;
    private $brand;
    private $brand_id;
    private $description;
    private $short_description;
    private $price_tax;
    private $price;
    private $price_currency;
    private $market_type;
    private $manufacturer;
    private $unit;
    private $order_unit;
    private $gender;
    private $product_height;
    private $product_width;
    private $product_depth;
    private $N_product_type;
    private $product_type;
    private $N_prod_coded_composition_0_name;
    private $N_prod_coded_composition_0_help;
    private $N_top_notes;
    private $N_prod_coded_composition_1_name;
    private $N_prod_coded_composition_1_help;
    private $N_heart_notes;
    private $N_prod_coded_composition_2_name;
    private $N_prod_coded_composition_2_help;
    private $N_base_notes;
    private $N_product_notes;
    private $N_categories;
    private $N_sub_categories;
    private $meta_title;
    private $meta_keywords;
    private $meta_description;
    private $base_image;   // single image
    private $thumbnail_images; // collection of images 
    private $additional_images;  // collection of images 
    private $swatch_image;  // single image 
    private $b_base_image;   // single image
    private $b_additional_images;  // collection of images 
    private $d_base_image;   // single image
    private $d_thumbnail_images; // collection of images 
    private $d_additional_images;  // collection of images 
    private $d_swatch_image;  // single image 
    private $composition_materials;
    private $products_related;
    private $related_position;
    private $ERP_prod_unit;
    private $ERP_sub_category_code;
    private $ERP_sub_category;
    private $ERP_category_code;
    private $ERP_category;
    private $ERP_VAT_code;
    private $ERP_price_discount_1;
    private $ERP_price_discount_2;
    private $ERP_price_1;
    private $ERP_price_2;
    private $ERP_price_3;
    private $ERP_Commision_category;
    private $ERP_Invent_category;
    private $ERP_storage_code;
    private $ERP_delete_pvp;
    private $outfile_pathname;
    private $qty;
    private $out_of_stock_qty;
    private $use_config_min_qty;
    private $is_qty_decimal;
    private $allow_backorders;
    private $use_config_backorders;
    private $min_cart_qty;
    private $use_config_min_sale_qty;
    private $max_cart_qty;
    private $use_config_max_sale_qty;
    private $is_in_stock;
    private $notify_on_stock_below;
    private $use_config_notify_stock_qty;
    private $manage_stock;
    private $use_config_manage_stock;
    private $use_config_qty_increments;
    private $qty_increments;
    private $use_config_enable_qty_inc;
    private $enable_qty_increments;
    private $is_decimal_divided;
    private $website_id;
    private $product_online;
    private $images_url;
    private $N_base_image;
    private $N_base_image_label;
    private $N_small_image;
    private $N_small_image_label;
    private $N_swatch_image;
    private $N_swatch_image_label;
    private $N_thumbnail_image;
    private $N_thumbnail_image_label;
    private $N_additional_images;
    private $N_additional_image_labels;
    private $N_thumbnail_images;
    private $base_image_label;
    private $small_image;
    private $small_image_label;
    private $swatch_image_label;
    private $thumbnail_image;
    private $thumbnail_image_label;
    private $additional_image_labels;
    private $P_normalized_name;
    private $P_dest_dir_path;
    private $P_processing_error;

    function __construct() {
        $this->BLU_root_URL = "https://api.barcodelookup.com/v2/products";
        $this->api_key = '7rve6jifdiy5uw7ghx7wcombs8c42a';
        $this->N_id_stringa = "";
        $this->N_Prod_code = "";
        $this->P_saved_name = "";
        $this->N_Prod_type = "";
        $this->N_Prod_name = "";
        $this->N_Prod_annotation = "";
        $this->N_Prod_tipo = "";
        $this->N_Prod_gender = "";
        $this->E_name = "";
        $this->E_line = "";
        $this->E_status = "";
        $this->productId = "";
        $this->sku = "";
        $this->B_asin = "";
        $this->B_description = "";
        $this->B_mpn = "";
        $this->B_model = "";
        $this->B_publisher = "";
        $this->B_ingredients = "";
        $this->B_size = "";
        $this->B_format = "";
        $this->B_features = "";
        $this->B_NITA = "";
        $this->B_NENG = "";
        $this->B_PITA = "";
        $this->B_NCZ = "";
        $this->B_categories = "";
        $this->B_sub_categories = "";
        $this->N_categories = "";
        $this->N_sub_categories = "";
        $this->code_type = "";
        $this->categories = "";
        $this->sub_categories = "";
        $this->product_websites = "";
        $this->brand = "";
        $this->brand_id = "";
        $this->description = "";
        $this->price_tax = 0;
        $this->price = 0;
        $this->price_currency = "";
        $this->market_type = "";
        $this->manufacturer = "";
        $this->unit = "";
        $this->order_unit = "";
        $this->gender = "";
        $this->product_height = "";
        $this->product_width = "";
        $this->product_depth = "";
        $this->N_prod_coded_composition_0_name = "";
        $this->N_prod_coded_composition_0_help = "";
        $this->N_top_notes = "";
        $this->N_prod_coded_composition_1_name = "";
        $this->N_prod_coded_composition_1_help = "";
        $this->N_heart_notes = "";
        $this->N_prod_coded_composition_2_name = "";
        $this->N_prod_coded_composition_2_help = "";
        $this->N_base_notes = "";
        $this->N_product_type = "";
        $this->product_type = "";
        $this->meta_title = "";
        $this->meta_keywords = "";
        $this->meta_description = "";
        $this->composition_materials = "";
        $this->products_related = "";
        $this->related_position = "";
        $this->ERP_Prod_code = "";
        $this->ERP_Prod_name = "";
        $this->ERP_brand = "";
        $this->ERP_prod_unit = "";
        $this->ERP_sub_category_code = "";
        $this->ERP_sub_category = "";
        $this->ERP_category = "";
        $this->ERP_category_code = "";
        $this->ERP_VAT_code = "";
        $this->ERP_price_discount_1 = "";
        $this->ERP_price_discount_2 = "";
        $this->ERP_price_1 = "";
        $this->ERP_price_2 = "";
        $this->ERP_price_3 = "";
        $this->ERP_Commision_category = "";
        $this->ERP_Invent_category = "";
        $this->ERP_ean = "";
        $this->ERP_storage_code = "";
        $this->ERP_delete_pvp = "";
        $this->ERP_export = "";
        $this->outfile_pathname = "";
        $this->attribute_set_code = "Default"; // Chiara: modificare interpretando la categoria
        $this->product_online = 1;
        $this->visibility = "Catalog,Search";
        $this->images_url = "http://cdn.erniani.com/";
        $this->base_image = "";
        $this->base_image_label = "";
        $this->small_image = "";
        $this->small_image_label = "";
        $this->swatch_image = "";
        $this->swatch_image_label = "";
        $this->thumbnail_image = "";
        $this->thumbnail_image_label = "";
        $this->additional_images = "";
        $this->additional_image_labels = "";
        $this->thumbnail_images = "";
        $this->N_base_image = "";
        $this->N_base_image_label = "";
        $this->N_small_image = "";
        $this->N_small_image_label = "";
        $this->N_swatch_image = "";
        $this->N_swatch_image_label = "";
        $this->N_thumbnail_image = "";
        $this->N_thumbnail_image_label = "";
        $this->N_additional_images = "";
        $this->N_additional_image_labels = "";
        $this->N_thumbnail_images = "";
        $this->b_base_image = "";
        $this->b_additional_images = "";
        $this->d_base_image = "";
        $this->d_thumbnail_images = "";
        $this->d_additional_images = "";
        $this->d_swatch_image;
        $this->P_normalized_name = "";
        $this->P_dest_dir_path = "";
        $this->P_processing_error;
        $this->qty = 100; // impostare al momento a “100”
        $this->out_of_stock_qty = 10; // impostare al momento a “10”
        $this->use_config_min_qty = 1; // impostare a “1”
        $this->is_qty_decimal = "0"; // impostare a “0”
        $this->allow_backorders = "0"; // impostare a “0”
        $this->use_config_backorders = "1"; // impostare a “1”
        $this->min_cart_qty = 1.0000; // impostare a “1.0000”
        $this->use_config_min_sale_qty = 1; // impostare a “1”
        $this->max_cart_qty = 30000; // impostare a “30.0000”
        $this->use_config_max_sale_qty = "1"; // impostare a “1”
        $this->is_in_stock = "1"; // impostare a “1”
        $this->notify_on_stock_below = "10"; // impostare a “1.0000”
        $this->use_config_notify_stock_qty = "1"; // impostare a “1”
        $this->manage_stock = "1"; // impostare a “1”
        $this->use_config_manage_stock = "1"; // impostare a “1”
        $this->use_config_qty_increments = "1"; // impostare a “1”
        $this->qty_increments = "1"; // impostare a “1” verificare se mettere Yes/No
        $this->use_config_enable_qty_inc = "1"; // impostare a “1”
        $this->enable_qty_increments = "0"; // impostare a “0”
        $this->is_decimal_divided = "0"; // impostare a “0”
        $this->website_id = "0"; // impostare a “0”
    }

    function __destruct() {
        $this->E_status = "";
    }

    function GetERP($record, $db) {
        if (isset($record["ARTICOLO"])) {
            $this->ERP_Prod_code = $record["ARTICOLO"];
            $this->productId = $record["ARTICOLO"];
        }
        if (isset($record["DESCRIZIONE"])) {
            $this->ERP_Prod_name = $record["DESCRIZIONE"];
        }
        if (isset($record["DISEGNO"])) {
            $this->ERP_brand = $record["DISEGNO"];
            $this->ERP_translated_brand = $this->Translate_ERP_brand($this->ERP_brand, $db);
            if (strlen($this->ERP_translated_brand) > 0) {
                $this->brand = ucwords($this->ERP_translated_brand);
            } else {
                $this->brand = ucwords($this->ERP_brand);
            }
        }
        if (isset($record["UN.MIS."])) {
            $this->ERP_prod_unit = $record["UN.MIS."];
        }
        $fiscalcategory = "";
        $primarycategory = "";
        if (isset($record["CAT.FISC."])) {
            $this->ERP_category_code = $record["CAT.FISC."];
            $this->ERP_category = $this->get_primary_category_ERP($this->ERP_category_code, $db);
            $this->ERP_sub_category = $this->Translate_category_ERP($this->ERP_category_code, $db);
        }
        if (isset($record["CAT.MERC."])) {
            $this->ERP_sub_category_code = $record["CAT.MERC."];
            $this->ERP_sub_category = $this->ERP_sub_category . "," . $this->Translate_sub_category_ERP($this->ERP_sub_category_code, $db);
        }
        if (isset($record["COD.IVA"])) {
            $this->ERP_VAT_code = $record["COD.IVA"];
        }
        if (isset($record["SCONTO 1"])) {
            $this->ERP_price_discount_1 = $record["SCONTO 1"];
        }
        if (isset($record["SCONTO 2"])) {
            $this->ERP_price_discount_2 = $record["SCONTO 2"];
        }
        if (isset($record["PREZZO 1"])) {
            $this->ERP_price_1 = $record["PREZZO 1"];
        }
        if (isset($record["PREZZO 2"])) {
            $this->ERP_price_2 = $record["PREZZO 2"];
        }
        if (isset($record["PREZZO 3"])) {
            $this->ERP_price_3 = $record["PREZZO 3"];
        }
        if (isset($record["CAT.PROVV."])) {
            $this->ERP_Commision_category = $record["CAT.PROVV."];
        }
        if (isset($record["CAT.INVENT."])) {
            $this->ERP_Invent_category = $record["CAT.INVENT."];
        }
        if (isset($record["C.BARRE"])) {
            $this->ERP_ean = $record["C.BARRE"];
        }
        if (isset($record["COD.DEPOSITO"])) {
            $this->ERP_storage_code = $record["COD.DEPOSITO"];
        }
        if (isset($record["CANCELLA PVP"])) {
            $this->ERP_delete_pvp = $record["CANCELLA PVP"];
        }
        if (isset($record["EXP.E-COMMERCE"])) {
            $this->ERP_export = $record["EXP.E-COMMERCE"];
        }
        if (isset($record["PESO"])) {
            $this->weight = $record["PESO"];
        }
        $this->sku = $this->ERP_Prod_code;
        $this->price = $this->ERP_price_3; //
        $this->tax_class_name = (($this->ERP_VAT_code == "62.00") ? "Esenzione IVA" : "Taxable Goods"); //

        $this->ERP_price_1 = str_replace(',', '.', $this->ERP_price_1);
        $ERP_Numeric_price_1 = (double) $this->ERP_price_1;

        $this->ERP_price_3 = str_replace(',', '.', $this->ERP_price_3);
        $ERP_Numeric_price_3 = (double) $this->ERP_price_3;

        $discount_1 = $this->ERP_price_discount_1;


        // Determinazione dei prezzi scontati
           $price=0;
        switch ($discount_1) {
            case '001':
                $price = $ERP_Numeric_price_1 * (1 + 0.145);
                break;
            case '002':
                $price = $ERP_Numeric_price_1;
                break;
            case '006':
                $price = $ERP_Numeric_price_1 * (1 + 0.6);
                break;
            case '007':
                $price = $ERP_Numeric_price_1 * (1 + 0.5);
                break;
            case '008':
                $price = $ERP_Numeric_price_1 * (1 + 0.6);
                break;
            case '010':
                $price = $ERP_Numeric_price_1;
                break;
            case '015':
                $price = $ERP_Numeric_price_1;
                break;
            case '017':
                $price = $ERP_Numeric_price_1 * (1 + 0.145);
                break;
            case '018':
                $price = $ERP_Numeric_price_1;
                break;
            case '019':
                $price = $ERP_Numeric_price_1;
                break;
            case '022':
                $price = $ERP_Numeric_price_1;
                break;
            case '025':
                $price = $ERP_Numeric_price_1 * (1 + 0.5);
                break;
            case '030':
                $price = $ERP_Numeric_price_1 * (1 + 0.9999);
                break;
            case '040':
                $price = $ERP_Numeric_price_1;
                break;
            case '061':
                $price = $ERP_Numeric_price_1 * (1 + 0.4285);
                break;
            case '070':
                $price = $ERP_Numeric_price_1;
                break;
            case '080':
                $price = $ERP_Numeric_price_1;
                break;
            case '081':
                $price = $ERP_Numeric_price_1;
                break;
            case 'MOD':
                $price = $ERP_Numeric_price_3 * (1 - 0.37);
                break;
            case 'MOE':
                $price = $ERP_Numeric_price_3 * (1 - 0.32);
                break;
            case 'MOF':
                $price = $ERP_Numeric_price_3 * (1 - 0.40);
                break;
            case 'MOG':
                $price = $ERP_Numeric_price_3 * (1 - 0.50);
                break;
            case 'MOM':
                $price = $ERP_Numeric_price_3 * (1 - 0.45);
                break;
            case 'VIP':
                $price = $ERP_Numeric_price_3 * (1 - 0.30);
                break;
        }
        $this->price = $price; //Chiara
        return true;
    }

    public function SearchBLU($db) {
        $B_store_name = "";
        $B_stores = null;
        $stoobj = null;
        $response = null;

        $sizer = 0; /*         * */
        $sizew = 0; /*         * */
        $output_from_barcodelookup = false;
        $url = $this->BLU_root_URL . "?barcode=" . $this->ERP_ean . "&GEO=EU&key=" . $this->api_key;
        $fullfile_pathname = 'C:\\wamp64\\www\\Import-ERP-EAN1\\outfiles\\' . $this->ERP_ean . '.json';
        $emptyfile_pathname = 'C:\\wamp64\\www\\Import-ERP-EAN1\\outfiles\\' . "empty-" . $this->ERP_ean . '.json';
        // prima di chiamare la API di barcodelookup.com provo a vedere se ho già il file memorizzato su disco.
        $this->outfile_pathname = $fullfile_pathname;

        if (is_file($fullfile_pathname)) {
            $output_from_barcodelookup = file_get_contents($this->outfile_pathname);
        } else {
            if (is_file($emptyfile_pathname)) {
                $this->outfile_pathname = $emptyfile_pathname;
                $output_from_barcodelookup = file_get_contents($this->outfile_pathname);
            }
        }
        if ($output_from_barcodelookup === false) {
            $output_from_barcodelookup = get_data($url);
        }
        $sizer = strlen($output_from_barcodelookup);
        if ($output_from_barcodelookup !== false) {
            if ($sizer < 2) {
                $this->outfile_pathname = $emptyfile_pathname;
            }
            $sizew = file_put_contents($this->outfile_pathname, $output_from_barcodelookup);
        }
        if ($sizer > 1) {
            $response = array();
            $response = @json_decode($output_from_barcodelookup);
            //save result in file
            //var_dump ($response);

            if (count($response->{'products'}) > 0) {
                $this->E_status = $this->E_status . "," . "BLU";
                // echo '<strong>Barcode Number:</strong> ' . $response->products[0]->barcode_number . '<br><br>';
                // echo '<strong>Product Name:</strong> ' . $response->products[0]->product_name . '<br><br>';
                // echo '<strong>Entire Response:</strong><pre>';
                // english results basic
                $r = $response->products[0];
                $this->B_asin = $r->{'asin'};

                $this->B_mpn = $r->{'mpn'};
                $this->B_model = $r->{'model'};
                $this->B_ingredients = $r->{'ingredients'};
                $this->B_size = $r->{'size'};
                $this->B_format = $r->{'format'};
                $this->B_categories = $r->{'category'};
                $this->B_sub_categories = $this->B_categories = str_replace(">", ",", $this->B_categories);
                $this->B_categories = strtok($this->B_categories, ",");
                $this->B_sub_categories = substr($this->B_sub_categories, strlen($this->B_categories));
                /*
                 * name determination
                 */
                $this->name = $this->B_product_name = $this->Third_Filter_name($r->{'product_name'});
                $B_first_filtered_name = $this->First_Filter_B_Product_name($this->B_product_name);
                $B_second_filtered_name = $this->Second_Filter_B_Product_name($B_first_filtered_name);
                $this->B_product_name = $B_second_filtered_name;
                $this->B_title = $r->{'title'};

                $this->brand = $r->{'brand'};
                $this->B_manufacturer = $r->{'manufacturer'};
                $this->B_publisher = $r->{'publisher'};

                // Chiara A L W A Y S   O V E R R I D E brand with ERP brand 
                $this->brand = $this->ERP_translated_brand;


                /* if ((strlen($this->brand)<1) or (strpos(' ' . $this->brand, 'Farmacia Loreto Gallo') )> 0) {
                  if (strlen($this->B_publisher) > 0) {
                  $this->brand = $r->{'publisher'};
                  } else {
                  if (strlen($this->B_manufacturer) > 0 and (!strpos(' ' . $this->brand, 'Farmacia Loreto Gallo'))) {
                  $this->brand = $r->{'manufacturer'};
                  } else {
                  $this->brand = $this->ERP_translated_brand;
                  }
                  }
                  }
                 */

                $this->B_label = $r->{'label'};
                $this->B_color = $r->{'color'};
                $this->B_package_quantity = $r->{'package_quantity'};
                $this->B_length = $r->{'length'};
                $this->B_width = $r->{'width'};
                $this->B_height = $r->{'height'};
                $this->B_weight = $r->{'weight'};
                $this->B_description = $r->{'description'};
                //$this->B_images = $r->{'images'};
                $this->B_store_name = "";
                $this->stoobj = "";
                $this->B_NITA = "";
                $this->B_NENG = "";
                $this->B_PITA = "";
                $this->B_NCZ = "";
                $B_images = $r->{'images'};
                $i = 0;
                $len = count($B_images);
                while ($i < $len) {
                    if ($i === 0) {
                        $this->b_base_image = $B_images[$i];
                    } else {
                        $this->b_additional_images = $this->b_additional_images . "," . $B_images[$i];
                    }
                    $i++;
                }
                //$this->B_features = $r->{'features'};
                $B_features = $r->{'features'};
                $i = 0;
                $len = count($B_features);
                while ($i < $len) {
                    if ($i === 0) {
                        $this->B_features = $B_features[$i];
                    } else {
                        $this->B_features = $this->B_features . "," . $B_features[$i];
                    }
                    $i++;
                }
                $B_stores = $r->{'stores'};
                foreach ($B_stores as $stoobj) {
                    $B_store_name = strtolower($stoobj->{'store_name'});
                    $url = $stoobj->{'product_url'};
                    if (strlen($this->N_id_stringa) == 0) {
                        $pos = strpos(' ' . $B_store_name, 'notino');
                        if ($pos > 0) {
                            $pos = strpos($url, "?item=");
                            if ($pos !== false) {
                                $pos1 = $pos + strlen("?item=");
                                $end = strlen($url) - $pos1;
                                $tStr = substr($url, $pos1, $end);
                            } else {
                                $pos = strpos($url, "/p-");
                                if ($pos !== false) {
                                    $pos1 = $pos + strlen("/p-");
                                    $end = strlen($url) - $pos1 - 1;
                                    $tStr = substr($url, $pos1, $end);
                                }
                            }
                            $this->N_id_stringa = $tStr;
                        }
                    }
                    $this->WriteEANSToreRecord($this->convertAccentsAndSpecialToNormal($B_store_name), $url, $db);
                    switch ($B_store_name) {
                        case 'notino.it':
                            $this->B_NITA = $url;
                            break;
                        case 'notino.cz':
                            $this->B_NCZ = $url;
                            break;
                        case 'notino.co.uk':
                            $this->B_NENG = $url;
                            break;
                        case 'parfimo.it':
                            $this->B_PITA = $url;
                            break;
                    }
                }
                //var_dump('$B_PITA =' . $B_PITA);
                //var_dump('$B_NITA =' . $B_NITA);
                //var_dump('$B_NENG =' . $B_NENG);
                //var_dump('$B_NCZ =' . $B_NCZ);
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function ReadNotinoData($results) {
        //$this->brand = $results[0]['brand'];
        $this->N_categories = $results[0]['categories']; //
        $this->N_sub_categories = $results[0]['sub_categories']; //
        $this->N_Prod_type = $results[0]['N_Prod_type'];
        $this->short_description = $this->N_product_type = $results[0]['N_product_type'];
        $this->product_type = $results[0]['N_Prod_type'];
        if (strlen($this->product_type) == 0) {
            $this->product_type = "simple";
        }
        /*
         * name determination
         */
        $this->N_Prod_name = $this->name = $this->Third_Filter_name($results[0]['N_Prod_name']);  //
        $this->N_id_stringa = $results[0]['N_id_stringa'];  //
        $this->N_product_master = $results[0]['N_product_master'];  //
        $this->N_Variants = $results[0]['N_Variants'];  //
        $this->N_has_different_colors = $results[0]['N_has_different_colors'];  //
        $this->N_has_different_sizes = $results[0]['N_has_different_sizes'];  //
        $this->description = $results[0]['description']; // 
        $this->N_Variant_name = $this->N_Prod_annotation = $this->short_description = $results[0]['N_Variant_name']; //
        $this->meta_title = str_replace("notino.it", "market.erniani.it", $results[0]['meta_title']); //
        $this->meta_keywords = str_replace("notino.it", "market.erniani.it", $results[0]['meta_keywords']);
        $this->meta_description = "market.erniani.it per qualità, servizio e convenienza a portata di click con consegne gratis sopra i 60€! | " . $this->N_Prod_name . " " . $this->N_Variant_name;
        if (strlen($results[0]['base_image']) > 0) {
            $this->base_image = $results[0]['base_image']; // avoid override base_image with emnpty string      
        }
        //$this->thumbnail_images = $results[0]['thumbnail_images'];
        $this->additional_images = $results[0]['additional_images'];
        $this->swatch_image = $results[0]['swatch_image'];
        //$this->composition_materials = $results[0]['composition_materials'];

        $this->market_type = $results[0]['market_type'];
        $this->product_websites = $results[0]['product_websites'];
        $this->manufacturer = $results[0]['manufacturer'];
        $this->products_related = $results[0]['products_related'];
        $this->related_position = $results[0]['related_position'];

        $this->product_height = $results[0]['product_height'];
        $this->product_width = $results[0]['product_width'];
        $this->product_depth = $results[0]['product_depth'];
        $this->product_height = $results[0]['product_height'];

        $this->N_prod_coded_composition_0_name = $results[0]['N_prod_coded_composition_0_name']; //
        $this->N_prod_coded_composition_1_name = $results[0]['N_prod_coded_composition_1_name']; //
        $this->N_prod_coded_composition_2_name = $results[0]['N_prod_coded_composition_2_name']; //
        $this->N_prod_coded_composition_0_help = $results[0]['N_prod_coded_composition_0_help']; //
        $this->N_prod_coded_composition_1_help = $results[0]['N_prod_coded_composition_1_help']; //
        $this->N_prod_coded_composition_2_help = $results[0]['N_prod_coded_composition_2_help']; //
        $this->N_top_notes = $results[0]['N_prod_essenza_0']; //
        $this->N_heart_notes = $results[0]['N_prod_essenza_1']; //
        $this->N_base_notes = $results[0]['N_prod_essenza_2']; //
        $this->unit = $results[0]['unit'];
        $this->order_unit = $results[0]['order_unit'];

        $this->N_base_image = $results[0]['base_image'];
        $this->N_base_image_label = $results[0]['base_image_label'];
        $this->base_image_label = $results[0]['base_image_label'];
        $this->N_small_image = $results[0]['small_image'];
        $this->N_small_image_label = $results[0]['small_image_label'];
        $this->small_image_label = $results[0]['small_image_label'];
        $this->N_swatch_image = $results[0]['swatch_image'];
        $this->N_swatch_image_label = $results[0]['swatch_image_label'];
        $this->swatch_image_label = $results[0]['swatch_image_label'];
        $this->N_thumbnail_image = $results[0]['thumbnail_image'];
        $this->N_thumbnail_image_label = $results[0]['thumbnail_image_label'];
        $this->thumbnail_image_label = $results[0]['thumbnail_image_label'];
        $this->N_additional_images = $results[0]['additional_images'];
        $this->N_additional_image_labels = $results[0]['additional_image_labels'];
        $this->additional_image_labels = $results[0]['additional_image_labels'];
        //$this->N_thumbnail_images = $results[0]['thumbnail_images'];
        $this->P_normalized_name = "";
        $this->P_dest_dir_path = "";
        $this->P_processing_error = "";
    }

    public function ProcessSize($db) {
        
    }

    public function SearchNITA($db) {
        // search in product sites notino.it
        $tStr = str_replace("https://www.notino.it", "", $this->B_NITA);
        //var_dump($tStr);
        $sqlSelect = 'SELECT * FROM n_catalogo WHERE product_websites = ?';
        $paramType = "s";
        $paramArray = array($tStr);
        $results = $db->select($sqlSelect, $paramType, $paramArray);
        //var_dump($results);
        if (!is_null($results)) {
            //$n = mysqli_num_rows($results);
            $this->E_status = $this->E_status . "," . "NITA";
            $this->ReadNotinoData($results);
        }
    }

    public function SearchNENG($db) {
        // search in product sites notino.co.uk
        $tStr = str_replace("https://www.notino.co.uk", "", $this->B_NENG);
        //var_dump($tStr);
        $sqlSelect = 'SELECT * FROM n_catalogo WHERE product_websites = ?';
        $paramType = "s";
        $paramArray = array($tStr);
        $results = $db->select($sqlSelect, $paramType, $paramArray);
        if (!is_null($results)) {
            //$n = mysqli_num_rows($results);
            $this->E_status = $this->E_status . "," . "NENG";
            $this->ReadNotinoData($results);
        }
    }

    public function SearchNITAbyProd($db) {
        // search in product sites notino.it
        $tStr = $this->N_id_stringa;
        //var_dump($tStr);
        $sqlSelect = "SELECT * FROM n_catalogo WHERE (N_id_stringa = ? and store_view_code = 'ITA')";
        $paramType = "s";
        $paramArray = array($tStr);
        $results = $db->select($sqlSelect, $paramType, $paramArray);
        //var_dump($results);
        if (!is_null($results)) {
            //$n = mysqli_num_rows($results);
            $this->E_status = $this->E_status . "," . "NITA";
            $this->ReadNotinoData($results);
        }
    }

    public function SearchNENGbyProd($db) {
        // search in product sites notino.co.uk
        $tStr = $this->N_id_stringa;
        //var_dump($tStr);
        $sqlSelect = "SELECT * FROM n_catalogo WHERE (N_id_stringa = ? and store_view_code = 'ENG')";
        $paramType = "s";
        $paramArray = array($tStr);
        $results = $db->select($sqlSelect, $paramType, $paramArray);
        if (!is_null($results)) {
            //$n = mysqli_num_rows($results);
            $this->E_status = $this->E_status . "," . "NENG";
            $this->ReadNotinoData($results);
        }
    }

    public function SearchDITA($db) {
        // search in product sites ditano.it                
        $sqlSelect = 'SELECT * FROM d_catalogo WHERE ean = ?';
        $paramType = "s";
        $paramArray = array($this->ERP_ean);
        $results = $db->select($sqlSelect, $paramType, $paramArray);
        //var_dump($results);
        if (!is_null($results)) {
            //$n = mysqli_num_rows($results);
            $this->E_status = $this->E_status . "," . "DITA"; //to be completed
            //$this->brand = $results[0]['brand'];
            $this->N_categories = $results[0]['breadcrumbs'];
            // remove the radix https://ditano.com/shop/profumeria and leave the final part /profumi/profumi-donna/latte-e-creme-corpo/ysl/
            $this->N_sub_categories = $this->N_categories = str_replace("https://ditano.com/shop/profumeria/", "", $this->N_categories);
            $this->N_categories = strtok($this->N_categories, "/");
            $this->N_sub_categories = substr($this->N_sub_categories, strlen($this->N_categories));
            $this->N_id_stringa = $results[0]['N_id_stringa'];  //
            $this->N_product_master = $results[0]['N_product_master'];  //
            $this->N_Variants = $results[0]['N_Variants'];  //
            /*
             * name determination
             */
            $this->N_Prod_name = $this->name = $this->Third_Filter_name($results[0]['name']);
            $this->description = $results[0]['description'];
            $this->short_description = $results[0]['short_description'];
            $this->meta_title = $results[0]['meta_title'];
            $this->meta_keywords = $results[0]['meta_keywords'];
            $this->description = $results[0]['description'];
            if (strlen($results[0]['mainimage']) > 0) {
                $this->d_base_image = $results[0]['mainimage']; // avoid override base_image with emnpty string      
            }
            $this->d_thumbnail_images = $results[0]['thumbnail_images'];
            $this->d_additional_images = $results[0]['additional_images'];
            $this->d_swatch_image = $results [0]['swatch_image'];
            $this->composition_materials = $results[0]['composition_materials'];
            $this->product_websites = "https://www.ditano.com/shop/product" . $results[0]['url_key'];
        }
    }

    private function get_primary_category_ERP($cat, $db) {
        $trcat = "";
        $sqlSelect = 'SELECT PrimaryCategory FROM categories_erp WHERE CODE = ?';
        $paramType = "s";
        $paramArray = array($cat);
        $results = $db->select($sqlSelect, $paramType, $paramArray);
        $trcat = $results[0]['PrimaryCategory'];
        return ucwords($trcat);
    }

    private function Translate_category_ERP($cat, $db) {
        $trcat = "";
        $sqlSelect = 'SELECT DESCRIPTION FROM categories_erp WHERE CODE = ?';
        $paramType = "s";
        $paramArray = array($cat);
        $results = $db->select($sqlSelect, $paramType, $paramArray);
        $trcat = $results[0]['DESCRIPTION'];
        return ucwords($trcat);
    }

    private function Translate_sub_category_ERP($cat, $db) {
        $trcat = "";
        $sqlSelect = 'SELECT DESCRIPTION FROM sub_categories_erp WHERE CODE = ?';
        $paramType = "s";
        $paramArray = array($cat);
        $results = $db->select($sqlSelect, $paramType, $paramArray);
        $trcat = $results[0]['DESCRIPTION'];
        return ucwords($trcat);
    }

    private function Translate_ERP_brand($line, $db) {
        $trbrand = "";
        $sqlSelect = 'SELECT BRAND FROM erp_brand_lines WHERE LINE = ?';
        $paramType = "s";
        $paramArray = array($line);
        $results = $db->select($sqlSelect, $paramType, $paramArray);
        $trbrand = $results[0]['BRAND'];
        return ucwords($trbrand);
    }

    public function ProcessImages($db) {

        $this->P_normalized_name = "";
        $this->P_normalized_name = strtolower($this->ImageFileConvertAccentsAndSpecialToNormal($this->P_saved_name));
        $dest_dir_rooth = "C:\\wamp64\\www\\Site images\\";
        $this->normalized_brand_name = strtolower($this->ImageFileConvertAccentsAndSpecialToNormal($this->brand));
        $this->P_dest_dir_path = $dest_dir_rooth . strtolower($this->ImageFileConvertAccentsAndSpecialToNormal($this->normalized_brand_name));
        if (!is_dir($this->P_dest_dir_path)) {
            mkdir($this->P_dest_dir_path, 0777);
        }

        if (strpos($this->E_status, "BLU")) {
            $this->ProcessBluImage();
        }
        if (strpos($this->E_status, "DITA")) {
            $this->ProcessDitaImage();
        }
        if ((strpos($this->E_status, "NITA") > 0)or (strpos($this->E_status, "NENG") > 0)) {
            $this->ProcessNotinoImage();
        }
        if ((strlen($this->base_image) < 1)or ((!strpos($this->E_status, "BLU") > 0)and (!strpos($this->E_status, "NITA") > 0)and (!strpos($this->E_status, "NENG") > 0))) {
            $this->ProcessEmptyImages();
            $this->P_processing_error = $this->P_processing_error . "," . "unknown E.Status " . $this->E_status;
        }
    }

    private function ProcessDitaImage() {
        if (strlen($this->d_base_image) > 0) {
            $file_copied = false;
            $path_parts = pathinfo($this->d_base_image);
            $extension = "";
            $extension = $path_parts['extension'];
            if (!strlen($extension) > 0) {
                $extension = "jpg";
            }
            $base_image_path = str_replace("https://ditano.com/", "C:\\HTTRACK\\ditano\\ditano.com\\", $this->d_base_image);
            $base_image_path = str_ireplace('/', '\\', $base_image_path);
            $dest_file_name = $this->sku . "-" . $this->P_normalized_name . "_db." . $extension;
            $dest_file_fullname = $this->P_dest_dir_path . "\\" . $dest_file_name;
            //print ($dest_file_fullname . "<br/>");
            if (is_file($base_image_path)) {
                $this->copy($base_image_path, $dest_file_fullname, $extension);
                $file_copied = true;
            }
            if ((!$file_copied) or!($this->check_file_type($dest_file_fullname, $extension))) {
                $base_image_path = str_replace("https://ditano.com/", "C:\\HTTRACK\\ditano\\ditano.com\\", $this->d_base_image);
                $base_image_path = str_ireplace('/', '\\', $base_image_path);
                // strange fact: the image name is jpg but the file in the httrack dir is png
                $base_image_path = str_replace($extension, 'png', $base_image_path);
                $dest_file_name = $this->sku . "-" . $this->P_normalized_name . "_db." . "png";
                $dest_file_fullname = $this->P_dest_dir_path . "\\" . $dest_file_name;
                //print ($dest_file_fullname . "<br/>");
                if (is_file($base_image_path)) {
                    $this->copy($base_image_path, $dest_file_fullname, "png");
                    $file_copied = true;
                    $extension = 'png';
                }
                if (!$file_copied) {
                    if (!$this->check_file_type($dest_file_fullname, 'png')) {
                        $base_image_path = str_replace("https://ditano.com/", "C:\\HTTRACK\\ditano\\ditano.com\\", $this->d_base_image);
                        $base_image_path = str_ireplace('/', '\\', $base_image_path);
                        // strange fact: the image name is jpg but the file in the httrack dir is png
                        $base_image_path = str_replace($extension, 'jpg', $base_image_path);
                        $dest_file_name = $this->sku . "-" . $this->P_normalized_name . "_db." . "jpg";
                        $dest_file_fullname = $this->P_dest_dir_path . "\\" . $dest_file_name;
                        //print ($dest_file_fullname . "<br/>");
                        if (is_file($base_image_path)) {
                            $this->copy($base_image_path, $dest_file_fullname, "jpg");
                            $file_copied = true;
                            $extension = 'jpg';
                        }
                        if ((!$file_copied) or(!$this->check_file_type($dest_file_fullname, 'jpg'))) {
                            $this->P_processing_error = $this->P_processing_error . "," . "DITA b_wrong_format_png";
                        }
                    }
                }
            }
            if ($file_copied)
                $this->base_image = $this->images_url . $this->sku . "-" . $this->P_normalized_name . "_db." . $extension;
            else {
                $this->base_image = "";
            }
        }
        if (strlen($this->d_swatch_image) > 0) {
            $path_parts = pathinfo($this->d_swatch_image);
            $extension = "";
            $extension = $path_parts['extension'];
            if (!strlen($extension) > 0) {
                $extension = "jpg";
            }
            $base_image_path = str_replace("../../", "C:\\HTTRACK\\ditano\\ditano.com\\", $this->d_swatch_image);
            $base_image_path = str_ireplace('/', '\\', $base_image_path);
            // strange fact: the image name is jpg but the file in the httrack dir is png
            $dest_file_name = $this->sku . "-" . $this->P_normalized_name . "_ds." . $extension;
            $dest_file_fullname = $this->P_dest_dir_path . "\\" . $dest_file_name;
            //print ($dest_file_fullname . "<br/>");
            if (is_file($base_image_path)) {
                $this->copy($base_image_path, $dest_file_fullname, $extension);
            }
            if (!$this->check_file_type($dest_file_fullname, $extension)) {
                $this->P_processing_error = $this->P_processing_error . "," . "DITA s_wrong_format_" . $extension;
            }
            $this->swatch_image = $this->images_url . $this->sku . "-" . $this->P_normalized_name . "_ds." . $extension;
        }
        if (strlen($this->d_additional_images) > 0) {
            $urls = explode(",", $this->d_additional_images);
            $i = 0;
            $this->additional_images = "";
            while ($i < count($urls)) {
                $url = $urls[$i++];
                if (strlen($url) > 0) {
                    $path_parts = pathinfo($url);
                    $extension = "";
                    $extension = $path_parts['extension'];
                    if (!strlen($extension) > 0) {
                        $extension = "jpg";
                    }
                    $base_image_path = str_replace("../../", "C:\\HTTRACK\\ditano\\ditano.com\\", $url);
                    $base_image_path = str_ireplace('/', '\\', $base_image_path);
                    // strange fact: the image name is jpg but the file in the httrack dir is png
                    $dest_file_name = $this->sku . "-" . $this->P_normalized_name . "-" . $i . "_db." . $extension;
                    $dest_file_fullname = $this->P_dest_dir_path . "\\" . $dest_file_name;
                    //print ($dest_file_fullname . "<br/>");
                    if (is_file($base_image_path)) {
                        $this->copy($base_image_path, $dest_file_fullname, $extension);
                    }
                    if (!$this->check_file_type($dest_file_fullname, $extension)) {
                        $this->P_processing_error = $this->P_processing_error . "," . "DITA b_wrong_format_" . $extension;
                    }
                    $this->additional_images = $this->additional_images . "," . $this->images_url . $this->sku . "-" . $this->P_normalized_name . "-" . $i . "_db." . $extension;
                }
            }
        }
        if (strlen($this->d_thumbnail_images) > 0) {
            $urls = explode(",", $this->d_thumbnail_images);
            $i = 0;
            $this->thumbnail_images = "";
            while ($i < count($urls)) {
                $url = $urls[$i++];
                if (strlen($url) > 0) {
                    $path_parts = pathinfo($url);
                    $extension = "";
                    $extension = $path_parts['extension'];
                    if (!strlen($extension) > 0) {
                        $extension = "jpg";
                    }
                    $base_image_path = str_replace("../../", "C:\\HTTRACK\\ditano\\ditano.com\\", $url);
                    $base_image_path = str_ireplace('/', '\\', $base_image_path);
                    // strange fact: the image name is jpg but the file in the httrack dir is png
                    $dest_file_name = $this->sku . "-" . $this->P_normalized_name . "-" . $i . "_dt." . $extension;
                    $dest_file_fullname = $this->P_dest_dir_path . "\\" . $dest_file_name;
                    //print ($dest_file_name . "<br/>");
                    if (is_file($base_image_path)) {

                        $this->copy($base_image_path, $dest_file_fullname, $extension);
                    }
                    if (!$this->check_file_type($dest_file_fullname, $extension)) {
                        $this->P_processing_error = $this->P_processing_error . "," . "DITA b_wrong_format_" . $extension;
                    }
                    $this->thumbnail_images = $this->thumbnail_images . "," . $this->images_url . $this->sku . "-" . $this->P_normalized_name . "-" . $i . "_dt." . $extension;
                }
            }
        }
    }

    private function ProcessNotinoImage() {
        if (strlen($this->N_base_image) > 0) {
            $path_parts = pathinfo($this->N_base_image);
            $extension = "";
            $extension = $path_parts['extension'];
            $base_image_path = "https://cdn.notinoimg.com/detail_zoom/" . $this->N_base_image;
            $dest_file_name = $this->sku . "-" . $this->P_normalized_name . "_nb." . $extension;
            $dest_file_fullname = $this->P_dest_dir_path . "\\" . $dest_file_name;
            ////print ($dest_file_name . "<br/>");
            $file_content = get_data($base_image_path);
            $sizew = $sizer = 0;
            $sizer = strlen($file_content);
            if ($sizer > 1) {
                $sizew = file_put_contents($dest_file_fullname, $file_content);
            }
            if ($sizew > 0) {
                if (!$this->check_file_type($dest_file_fullname, $extension)) {
                    $this->P_processing_error = $this->P_processing_error . "," . "NOTI b_wrong_format_" . $extension;
                }
            } else {
                $this->P_processing_error = $this->P_processing_error . "," . "NOTI b_wrong_format_" . $extension;
            }
            $this->base_image = $this->images_url . $this->sku . "-" . $this->P_normalized_name . "_nb." . $extension;
        }
        /* Notino has no swatch and thumb images but is uses the same name from differente dirs. */
        if (strlen($this->N_base_image) > 0) {
            $path_parts = pathinfo($this->N_base_image);
            $extension = "";
            $extension = $path_parts['extension'];
            $base_image_path = "https://cdn.notinoimg.com/order_2k/" . $this->N_base_image;
            $dest_file_name = $this->sku . "-" . $this->P_normalized_name . "_ns." . $extension;
            $dest_file_fullname = $this->P_dest_dir_path . "\\" . $dest_file_name;
            //print ($dest_file_name . "<br/>");
            $file_content = get_data($base_image_path);
            $sizew = $sizer = 0;
            $sizer = strlen($file_content);
            if ($sizer > 1) {
                $sizew = file_put_contents($dest_file_fullname, $file_content);
            }
            if ($sizew > 0) {
                if (!$this->check_file_type($dest_file_fullname, $extension)) {
                    $this->P_processing_error = $this->P_processing_error . "," . "NOTI s_wrong_format_" . $extension;
                }
            } else {
                $this->P_processing_error = $this->P_processing_error . "," . "NOTI s_wrong_format_" . $extension;
            }
            $this->swatch_image = $this->images_url . $this->sku . "-" . $this->P_normalized_name . "_ns." . $extension;
        }
        /* Notino has no thumbnail images */
        if (strlen($this->N_base_image) > 0) {
            $path_parts = pathinfo($this->N_base_image);
            $extension = "";
            $extension = $path_parts['extension'];
            $base_image_path = "https://cdn.notinoimg.com/detail_thumb/" . $this->N_base_image;
            $dest_file_name = $this->sku . "-" . $this->P_normalized_name . "_nt." . $extension;
            $dest_file_fullname = $this->P_dest_dir_path . "\\" . $dest_file_name;
            //print ($dest_file_name . "<br/>");
            $file_content = get_data($base_image_path);
            $sizew = $sizer = 0;
            $sizer = strlen($file_content);
            if ($sizer > 1) {
                $sizew = file_put_contents($dest_file_fullname, $file_content);
            }
            if ($sizew > 0) {
                if (!$this->check_file_type($dest_file_fullname, $extension)) {
                    $this->P_processing_error = $this->P_processing_error . "," . "NOTI t_wrong_format_" . $extension;
                }
            } else {
                $this->P_processing_error = $this->P_processing_error . "," . "NOTI t_wrong_format_" . $extension;
            }
            $this->thumbnail_image = $this->images_url . $this->sku . "-" . $this->P_normalized_name . "_nt." . $extension;
        }
        if (strlen($this->N_additional_images) > 0) {
            $urls = explode(",", $this->N_additional_images);
            $i = 0;
            $this->additional_images = "";
            while ($i < count($urls)) {
                $url = $urls[$i++];
                if (strlen($url) > 0) {
                    $path_parts = pathinfo($url);
                    $extension = "";
                    $extension = $path_parts['extension'];
                    $base_image_path = "https://cdn.notinoimg.com/detail_zoom/" . $url;
                    $dest_file_name = $this->sku . "-" . $this->P_normalized_name . "-" . $i . "_nb." . $extension;
                    $dest_file_fullname = $this->P_dest_dir_path . "\\" . $dest_file_name;
                    //print ($dest_file_name . "<br/>");
                    $file_content = get_data($base_image_path);
                    $sizew = $sizer = 0;
                    $sizer = strlen($file_content);
                    if ($sizer > 1) {
                        $sizew = file_put_contents($dest_file_fullname, $file_content);
                    }
                    if ($sizew > 0) {
                        if (!$this->check_file_type($dest_file_fullname, $extension)) {
                            $this->P_processing_error = $this->P_processing_error . "," . "NOTI b_wrong_format_" . $extension;
                        }
                    } else {
                        $this->P_processing_error = $this->P_processing_error . "," . "NOTI b_wrong_format_" . $extension;
                    }
                    $this->additional_images = $this->additional_images . "," . $this->images_url . $this->sku . "-" . $this->P_normalized_name . "-" . $i . "_nb." . $extension;
                }
            }
        }
        if (strlen($this->N_thumbnail_images) > 0) {
            $urls = explode(",", $this->N_thumbnail_images);
            $i = 0;
            while ($i < count($urls)) {
                $url = $urls[$i++];
                if (strlen($url) > 0) {
                    $this->thumbnail_images = "";
                    $path_parts = pathinfo($url);
                    $extension = "";
                    $extension = $path_parts['extension'];
                    if (!strlen($extension) > 0) {
                        $extension = "jpg";
                    }
                    $base_image_path = "https://cdn.notinoimg.com/detail_thumb/" . $url;
                    $dest_file_name = $this->sku . "-" . $this->P_normalized_name . "-" . $i . "_nt." . $extension;
                    $dest_file_fullname = $this->P_dest_dir_path . "\\" . $dest_file_name;
                    //print ($dest_file_name . "<br/>");
                    $file_content = get_data($base_image_path);
                    $sizew = $sizer = 0;
                    $sizer = strlen($file_content);
                    if ($sizer > 1) {
                        $sizew = file_put_contents($dest_file_fullname, $file_content);
                    }
                    if ($sizew > 0) {
                        if (!$this->check_file_type($dest_file_fullname, $extension)) {
                            $this->P_processing_error = $this->P_processing_error . "," . "NOTI t_wrong_format_" . $extension;
                        }
                    } else {
                        $this->P_processing_error = $this->P_processing_error . "," . "NOTI t_wrong_format_" . $extension;
                    }
                    $this->thumbnail_images = $this->thumbnail_images . "," . $this->images_url . $this->sku . "-" . $this->P_normalized_name . "-" . $i . "_nt." . $extension;
                }
            }
        }
    }

    private function ProcessBluImage() {
        if (strlen($this->b_base_image) > 0) {
            $path_parts = pathinfo($this->b_base_image);
            $extension = "";
            $extension = $path_parts['extension'];
            $base_image_path = $this->b_base_image;
            $dest_file_name = $this->sku . "-" . $this->P_normalized_name . "_bb." . $extension;
            $dest_file_fullname = $this->P_dest_dir_path . "\\" . $dest_file_name;
            ////print ($dest_file_name . "<br/>");
            $file_content = get_data($base_image_path);
            $sizew = $sizer = 0;
            $sizer = strlen($file_content);
            if ($sizer > 1) {
                $sizew = file_put_contents($dest_file_fullname, $file_content);
            }
            if ($sizew > 0) {
                if (!$this->check_file_type($dest_file_fullname, $extension)) {
                    $this->P_processing_error = $this->P_processing_error . "," . "BLU b_wrong_format_" . $extension;
                }
            } else {
                $this->P_processing_error = $this->P_processing_error . "," . "BLU b_wrong_format_" . $extension;
            }
            $this->base_image = $this->images_url . $this->sku . "-" . $this->P_normalized_name . "_bb." . $extension;
        }
        /* Notino has no swatch and thumb images but is uses the same name from differente dirs. */
        if (strlen($this->b_additional_images) > 0) {
            $urls = explode(",", $this->b_additional_images);
            $i = 0;
            $this->additional_images = "";
            while ($i < count($urls)) {
                $url = $urls[$i++];
                if (strlen($url) > 0) {
                    $path_parts = pathinfo($url);
                    $extension = "";
                    $extension = $path_parts['extension'];
                    $base_image_path = $url;
                    $dest_file_name = $this->sku . "-" . $this->P_normalized_name . "-" . $i . "_bb." . $extension;
                    $dest_file_fullname = $this->P_dest_dir_path . "\\" . $dest_file_name;
                    //print ($dest_file_name . "<br/>");
                    $sizew = file_put_contents($dest_file_fullname, get_data($base_image_path));
                    if ($sizew > 0) {
                        if (!$this->check_file_type($dest_file_fullname, $extension)) {
                            $this->P_processing_error = $this->P_processing_error . "," . "BLU b_wrong_format_" . $extension;
                        }
                    } else {
                        $this->P_processing_error = $this->P_processing_error . "," . "BLU b_wrong_format_" . $extension;
                    }
                    $this->additional_images = $this->additional_images . "," . $this->images_url . $this->sku . "-" . $this->P_normalized_name . "-" . $i . "_bb." . $extension;
                }
            }
        }
    }

    private function ProcessEmptyImages() {

        if (strlen($this->N_base_image) <= 0) {
            $this->P_processing_error = "EMPTY NN_base_image";
            $file_copied = false;
            $base_image_path = "C:\\wamp64\www\\Brand images\\" . $this->normalized_brand_name . ".png";
            $dest_file_name = $this->sku . "-" . $this->P_normalized_name . "_eb" . ".png";
            $dest_file_fullname = $this->P_dest_dir_path . "\\" . $dest_file_name;
            //print ($dest_file_fullname . "<br/>");
            if (is_file($base_image_path)) {
                $this->copy($base_image_path, $dest_file_fullname, ".png");
                $file_copied = true;
            }
            $this->base_image = $this->images_url . $this->sku . "-" . $this->P_normalized_name . "_eb" . ".png";
            $this->base_image_label = $this->name . " " . $this->N_Variant_name . " " . $this->N_additional_info;
        }
        if (strlen($this->swatch_image) <= 0) {
            $this->P_processing_error = "EMPTY NN_swatch_image";
            $file_copied = false;
            $base_image_path = "C:\\wamp64\www\\Brand images\\" . $this->normalized_brand_name . ".png";
            $dest_file_name = $this->sku . "-" . $this->P_normalized_name . "_es" . ".png";
            $dest_file_fullname = $this->P_dest_dir_path . "\\" . $dest_file_name;
            //print ($dest_file_fullname . "<br/>");
            if (is_file($base_image_path)) {
                $this->copy($base_image_path, $dest_file_fullname, ".png");
                $file_copied = true;
            }
            $this->swatch_image = $this->images_url . $this->sku . "-" . $this->P_normalized_name . "_es" . ".png";
            $this->swatch_image_label = $this->name . " " . $this->N_Variant_name . " " . $this->N_additional_info;
        }
        if (strlen($this->small_image) <= 0) {
            $this->P_processing_error = "EMPTY NN_small_image";
            $file_copied = false;
            $base_image_path = "C:\\wamp64\www\\Brand images\\" . $this->normalized_brand_name . ".png";
            $dest_file_name = $this->sku . "-" . $this->P_normalized_name . "_es" . ".png";
            $dest_file_fullname = $this->P_dest_dir_path . "\\" . $dest_file_name;
            //print ($dest_file_fullname . "<br/>");
            if (is_file($base_image_path)) {
                $this->copy($base_image_path, $dest_file_fullname, ".png");
                $file_copied = true;
            }
            $this->small_image = $this->images_url . $this->sku . "-" . $this->P_normalized_name . "_es" . ".png";
            $this->small_image_label = $this->name . " " . $this->N_Variant_name . " " . $this->N_additional_info;
        }
        if (strlen($this->thumbnail_image) <= 0) {
            $this->P_processing_error = "EMPTY NN_thumbnail_image";
            $file_copied = false;
            $base_image_path = "C:\\wamp64\www\\Brand images\\" . $this->normalized_brand_name . ".png";
            $dest_file_name = $this->sku . "-" . $this->P_normalized_name . "_et" . ".png";
            $dest_file_fullname = $this->P_dest_dir_path . "\\" . $dest_file_name;
            //print ($dest_file_fullname . "<br/>");
            if (is_file($base_image_path)) {
                $this->copy($base_image_path, $dest_file_fullname, ".png");
                $file_copied = true;
            }
            $this->thumbnail_image = $this->images_url . $this->sku . "-" . $this->P_normalized_name . "_et" . ".png";
            $this->thumbnail_image_label = $this->name . " " . $this->N_Variant_name . " " . $this->N_additional_info;
        }
    }

    public function DetermineName($store) {

        /*
         * name determination
         */


        /*
         * ERP Only -> $this->name=$this->P_saved_name that contains ERP normalized name
         * 
         */
        if ((!strpos($this->E_status, "BLU"))and (!strpos($this->E_status, "NITA"))and (!strpos($this->E_status, "NENG")) and (!strpos($this->E_status, "DITA"))) {
            $this->name = $this->P_saved_name;
            return;
        }
        /*
         * BLU Only -> $this->name=$this->P_saved_name that contains ERP normalized name
         * we prefer ERP name because BLU name is often dirty
         * 
         */
        if ((strpos($this->E_status, "BLU") > 0)and ((!strpos($this->E_status, "NITA"))and (!strpos($this->E_status, "NENG")) and (!strpos($this->E_status, "DITA")))) {
            if ($store === 'ITA')
                $this->name = $this->P_saved_name;
            else
                $this->name = $this->B_product_name;
            return;
        }
        if ((!strpos($this->E_status, "BLU"))and (strpos($this->E_status, "DITA") > 0)and ((!strpos($this->E_status, "NITA"))and (!strpos($this->E_status, "NENG")))) {
            if ($store === 'ITA')
                $this->name = $this->N_Prod_name;
            else
                $this->name = $this->P_saved_name;
            return;
        }
        /*
         * DITA Only -> $this->name=$this->N_Prod_name DITA name only for ITA shop
         * 
         */
        if ((strpos($this->E_status, "BLU") > 0)and (strpos($this->E_status, "DITA") > 0)and ((!strpos($this->E_status, "NITA"))and (!strpos($this->E_status, "NENG")))) {
            if ($store === 'ITA')
                $this->name = $this->N_Prod_name . " " . $this->short_description . " " . $this->B_size;
            else
                $this->name = $this->B_product_name;
            return;
        }
        if ((strpos($this->E_status, "BLU") > 0) and(strpos($this->E_status, "NITA") > 0)and (!strpos($this->E_status, "NENG"))) {
            if ($store === 'ITA')
                $this->name = $this->N_Prod_name . " " . $this->short_description . " " . $this->B_size;
            else
                $this->name = $this->B_product_name;
            return;
        }
        if ((strpos($this->E_status, "BLU") > 0) and (!strpos($this->E_status, "NITA"))and (strpos($this->E_status, "NENG") > 0)) {
            if ($store === 'ITA')
                $this->name = $this->P_saved_name;
            else
                $this->name = $this->N_Prod_name . " " . $this->short_description . " " . $this->B_size;
            return;
        }
        if ((strpos($this->E_status, "BLU") > 0) and (strpos($this->E_status, "NITA") > 0)and (strpos($this->E_status, "NENG") > 0)) {
            if ($store === 'ITA')
                $this->name = $this->N_Prod_name . " " . $this->short_description . " " . $this->B_size;
            else
                $this->name = $this->N_Prod_name . " " . $this->short_description . " " . $this->B_size;
            return;
        }
        if (((strpos($this->E_status, "NITA") > 0)or (strpos($this->E_status, "NENG") > 0) or (strpos($this->E_status, "DITA") > 0))) {
            $this->name = $this->P_saved_name;
            return;
        }
        $this->name = $this->P_saved_name;
    }

    private function copy($source, $dest, $extension) {

        try {
            copy($source, $dest);
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
        }
    }

    private function check_file_type($file, $extension) {
        $check = false;
        if (is_file($file)) {
            switch ($extension) {
                case 'png':
                    $check = IMAGETYPE_PNG;
                    break;
                case 'jpg':
                    $check = IMAGETYPE_JPEG;
                    break;
            }
            if (exif_imagetype($file) != $check) {
                //echo 'The picture is not a ' . " " . $extension . " " . $file . "<br/>";
                return false;
            } else
                return true;
        } else
            return false;
    }

    /*
     * 
     * conversions
     * 
     */

    private function First_Filter_B_Product_name($string) {
        $table = array(
            '[Italian Import]' => '',
            'Fr Frauen' => 'Woman ',
            'Frauen' => 'Woman ',
            'Fr Mnner' => 'Man ',
            'Mnner' => 'Man ',
            '(m)' => '',
            '(m)' => '',
            'Ounces' => 'oz',
            '-ounces' => 'oz',
            '-Ounces' => 'oz',
            'ounces' => 'oz',
            'Ounce' => 'oz',
            '-ounce' => 'oz',
            '-Ounce' => 'oz',
            'ounce' => 'oz',
            'fl.oz' => 'oz',
            'fl.oz.' => 'oz',
            'oz.' => 'oz',
            'Fl Oz' => 'oz',
            'Fl oz' => 'oz',
            'Fl.oz' => 'oz',
            'Fl.Oz.' => 'oz',
            'Oz.' => 'oz',
            ' ML ' => ' ml ',
            '©' => ' Copyright ', '®' => ' Registered ', '™' => ' Trademark ',);

        $string = strtr($string, $table);
        // Currency symbols: £¤¥€  - we dont bother with them for now
        $string = preg_replace("/[^\x9\xA\xD\x20-\x7F]/u", "", $string);

        return $string;
    }

    private function Filter_Brand($string) {
        $table = array(
            'Playboy' => 'Playboy Fragrances',
            'Giorgio B. Hills' => 'Giorgio Beverly Hills',
            'Dolce&Gabbana' => 'Dolce & Gabbana',
            'Dolce&Gabbana D&G' => 'Dolce & Gabbana',
            'Bvlgari' => 'Bulgari',
            'Chlo' => 'Chloé',
            'Chlo' => 'Chloé',
            'Chlo' => 'Chloé',
            'Chlo' => 'Chloé',
            'Chlo' => 'Chloé',
            'Chlo' => 'Chloé',
            'Chlo' => 'Chloé',
            'Chlo' => 'Chloé',
            'Pupa Milano' => 'Pupa',
            'PUPA-Milano' => 'Pupa',
            'Ysl' => 'Yves Saint Laurent',
            'YSL YvesSaintLaurent' => 'Yves Saint Laurent',
            'Van Cleef Arpels' => 'Van Cleef & Arpels',
            "L'Oral" => "L'Oreal Paris",
            "L´Oréal Paris" => "L'Oreal Paris",
            "L\`Oreal" => "L'Oreal Paris",
            "L’Oréal Paris" => "L'Oreal Paris",
            "L'Oral Paris" => "L'Oreal Paris",
            "L'Oral Pars" => "L'Oreal Paris",
            "L'oreal" => "L'Oreal Paris",
            "L'Oreal Expert Professionnel" => "L'Oreal Professionnel",
            "L'Oreal Paris" => "L'Oreal Paris",
            "L'Oreal Professional" => "L'Oreal Professionnel",
            "L'real" => "L'Oreal Professionnel",
            "LOral Paris" => "L'Oreal Professionnel",
            "LOral Professionnel" => "L'Oreal Professionnel",
            "Loreal" => "L'Oreal Professionnel",
            "Loreal Paris" => "L'Oreal Professionnel",
            "Loreal Professionnel" => "L'Oreal Professionnel",
            "Loreal Serie Expert" => "L'Oreal Professionnel",
            "L’Oréal Professionnel" => "L'Oreal Professionnel",
            "Christian Dior" => "Dior",
            "Christian Dior J'adore Voile De Parfum" => "Dior",
            '©' => ' Copyright ', '®' => ' Registered ', '™' => ' Trademark ',);

        $string = strtr($string, $table);
        // Currency symbols: £¤¥€  - we dont bother with them for now
        $string = preg_replace("/[^\x9\xA\xD\x20-\x7F]/u", "", $string);

        return $string;
    }

    private function Second_Filter_B_Product_name($string) {
        $table = array(
            '10.2 Ounce' => '10.2Ounce/200ml',
            '56.7g/2oz' => '56.7g/2oz',
            '1g/0.03oz' => '1g/0.03oz',
            '2.2g/0.08oz' => '2.2g/0.08oz',
            '3g/0.2oz' => '1g/0.2oz',
            '3.5g/0.12oz' => '3.5g/0.12oz',
            '6g/0.21oz' => '14g/0.21oz',
            '14g/0.49oz' => '14g/0.49oz',
            '50g/1.7oz' => '50g/1.7oz',
            '150g/5oz' => '150g/5oz',
            '5ml/0.17oz' => '5ml/0.17oz',
            '5ml-0.17oz' => '5ml/0.17oz',
            '6ml/0.2oz' => '6ml/0.2oz',
            '6ml-0.2oz' => '6ml/0.2oz',
            '30ml/1oz' => '30ml/1oz',
            '30ml-1oz' => '30ml/1oz',
            '50ml-1.69oz' => '50ml/1.7oz',
            '50ml/1.7oz' => '50ml/1.7oz',
            '50ml/1.69oz' => '50ml/1.7oz',
            '50ml-1.69oz' => '50ml/1.7oz',
            '75ml/2.6oz' => '75ml/2.5oz',
            '75ml-2.5oz' => '75ml/2.5oz',
            '125ml/4.25oz' => '125ml/4.25oz',
            '125ml-4.25oz' => '125ml/4.25oz',
            '100ml/3.3oz' => '100ml/3.4oz',
            '100ml-3.3oz' => '100ml/3.4oz',
            '100ml/3.4oz' => '100ml/3.4oz',
            '200ml/6.7oz' => '200ml/6.8oz',
            '200ml-6.7oz' => '200ml/6.8oz',
            '200ml/6.8oz' => '200ml/6.8oz',
            '200ml-6.8oz' => '200ml/6.8oz',
            '250ml-8.25oz' => '250ml/8.25z',
            '250ml/8.25z' => '250ml/8.25oz',
            '500ml/17oz' => '500ml/17oz',
            '3.3 oz / 100 ml' => '100ml/3.4oz',
            '3.4 oz / 100 ml' => '100ml/3.4oz',
            '200ml/6.7oz' => '200ml/6.8oz',
            '200ml/6.7oz' => '200ml/6.8oz',
            '4 Oz' => '120ml/4oz',
            '4Oz' => '120ml/4oz',
            '5 Oz' => '150ml/5oz',
            '5Oz' => '150ml/5oz',
            '1 Oz' => '30ml/1oz',
            '1Oz' => '30ml/1oz',
            '1.3 Oz' => '40ml/1.3oz',
            '1.3Oz' => '40ml/1.3oz',
            '1.3 Oz' => '40ml/1.3oz',
            '1.3Oz' => '40ml/1.3oz',
            '1.6 Oz' => '50ml/1.7oz',
            '1.6Oz' => '50ml/1.7oz',
            '1.69 Oz' => '50ml/1.7oz',
            '1.69z' => '50ml/1.7oz',
            '1.7 Oz' => '50ml/1.7oz',
            '1.7Oz' => '50ml/1.7oz',
            '2.0 Oz' => '60ml/2.0oz',
            '2.0Oz' => '60ml/2.0oz',
            '2.5 Oz' => '75ml/2.0oz',
            '2.5Oz' => '75ml/2.0oz',
            '3.4 Oz' => '100ml/3.4oz',
            '3.4Oz' => '100ml/3.4oz',
            '3.38 Oz' => '100ml/3.4oz ',
            '3.38Oz' => '100ml/3.4oz',
            '3.3 Oz' => '100ml/3.4oz',
            '3.3Oz' => '100ml/3.4oz',
            '3 Oz' => '90ml/3.4oz',
            '3Oz' => '90ml/3.4oz',
            '4Oz' => '120ml/4oz',
            '4 Oz' => '120ml/4oz',
            '6.8 Oz' => '200ml/6.8oz',
            '6.8Oz' => '200ml/6.8oz',
            '6.7 Oz' => '200ml/6.8oz',
            '6.7Oz' => '200ml/6.8oz',
            '8.5 Oz' => '200ml/8.5oz',
            '8.5Oz' => '200ml/8.5oz',
            '33.8 Oz' => '1l/33.8oz',
            '33.8Oz' => '1l/33.8oz',
            '©' => ' Copyright ', '®' => ' Registered ', '™' => ' Trademark ',);

        $string = strtr($string, $table);
        // Currency symbols: £¤¥€  - we dont bother with them for now
        $string = preg_replace("/[^\x9\xA\xD\x20-\x7F]/u", "", $string);

        return $string;
    }

    private function Get_Size($str) {
        $size = "";
        $str = strtolower(str_replace(",", ".", $str));
        if (strpos($str, " 1ml.") or strpos($str, " 1ml") or strpos($str, " 1 ml")) {
            $size = "1ml";
        } elseif (strpos($str, " 1.5ml.") or strpos($str, " 1.5ml") or strpos($str, " 1.5 ml")) {
            $size = "1.5ml";
        } elseif (strpos($str, " 2ml.") or strpos($str, " 2ml") or strpos($str, " 2 ml")) {
            $size = "2ml";
        } elseif (strpos($str, " 4ml.") or strpos($str, " 4ml") or strpos($str, " 4 ml")) {
            $size = "4ml";
        } elseif (strpos($str, " 4.2ml.") or strpos($str, " 4.2ml") or strpos($str, " 4.2 ml")) {
            $size = "4.2ml";
        } elseif (strpos($str, " 7.5ml.") or strpos($str, " 7.5ml") or strpos($str, " 7.5 ml")) {
            $size = "7.5ml";
        } elseif (strpos($str, " 8.5ml.") or strpos($str, " 8.5ml") or strpos($str, " 8.5 ml")) {
            $size = "8.5ml";
        } elseif (strpos($str, " 8ml.") or strpos($str, " 8ml") or strpos($str, " 8 ml")) {
            $size = "8ml";
        } elseif (strpos($str, " 25ml.") or strpos($str, " 25ml") or strpos($str, " 25 ml")) {
            $size = "25ml";
        } elseif (strpos($str, " 15ml.") or strpos($str, " 15ml") or strpos($str, " 15 ml")) {
            $size = "15ml";
        } elseif (strpos($str, " 30ml.") or strpos($str, " 30ml")or strpos($str, " 30 ml")) {
            $size = "30ml";
        } elseif (strpos($str, " 35ml.") or strpos($str, " 35ml")or strpos($str, " 35 ml")) {
            $size = "35ml";
        } elseif (strpos($str, " 40ml.") or strpos($str, " 40ml")or strpos($str, " 40 ml")) {
            $size = "40ml";
        } elseif (strpos($str, " 50ml.") or strpos($str, " 50ml")or strpos($str, " 50 ml")) {
            $size = "50ml";
        } elseif (strpos($str, " 60ml.") or strpos($str, " 60ml")or strpos($str, " 60 ml")) {
            $size = "60ml";
        } elseif (strpos($str, " 70ml.") or strpos($str, " 70ml")or strpos($str, " 70 ml")) {
            $size = "70ml";
        } elseif (strpos($str, " 75ml.") or strpos($str, " 75ml")or strpos($str, " 75 ml")) {
            $size = "75ml";
        } elseif (strpos($str, " 80ml.") or strpos($str, " 80ml")or strpos($str, " 80 ml")) {
            $size = "80ml";
        } elseif (strpos($str, " 90ml.") or strpos($str, " 90ml")or strpos($str, " 90 ml")) {
            $size = "90ml";
        } elseif (strpos($str, " 100ml.") or strpos($str, " 100ml")or strpos($str, " 100 ml")) {
            $size = "100ml";
        } elseif (strpos($str, " 125ml.") or strpos($str, " 120ml")or strpos($str, " 120 ml")) {
            $size = "120ml";
        } elseif (strpos($str, " 120ml.") or strpos($str, " 125ml")or strpos($str, " 125 ml")) {
            $size = "125ml";
        } elseif (strpos($str, " 140ml.") or strpos($str, " 140ml")or strpos($str, " 140 ml")) {
            $size = "140ml";
        } elseif (strpos($str, " 150ml.") or strpos($str, " 150ml")or strpos($str, " 150 ml")) {
            $size = "150ml";
        } elseif (strpos($str, " 155ml.") or strpos($str, " 155ml")or strpos($str, " 155 ml")) {
            $size = "155ml";
        } elseif (strpos($str, " 160ml.") or strpos($str, " 160ml")or strpos($str, " 160 ml")) {
            $size = "160ml";
        } elseif (strpos($str, " 177ml.") or strpos($str, " 177ml")or strpos($str, " 177 ml")) {
            $size = "177ml";
        } elseif (strpos($str, " 175ml.") or strpos($str, " 175ml")or strpos($str, " 175 ml")) {
            $size = "175ml";
        } elseif (strpos($str, " 180ml.") or strpos($str, " 180ml")or strpos($str, " 180 ml")) {
            $size = "180ml";
        } elseif (strpos($str, " 185ml.") or strpos($str, " 185ml")or strpos($str, " 185 ml")) {
            $size = "185ml";
        } elseif (strpos($str, " 190ml.") or strpos($str, " 190ml")or strpos($str, " 190 ml")) {
            $size = "190ml";
        } elseif (strpos($str, " 200ml.") or strpos($str, " 200ml")or strpos($str, " 200 ml")) {
            $size = "200ml";
        } elseif (strpos($str, " 230ml.") or strpos($str, " 230ml")or strpos($str, " 230 ml")) {
            $size = "230ml";
        } elseif (strpos($str, " 240ml.") or strpos($str, " 240ml")or strpos($str, " 240 ml")) {
            $size = "240ml";
        } elseif (strpos($str, " 250ml.") or strpos($str, " 250ml")or strpos($str, " 250 ml")) {
            $size = "250ml";
        } elseif (strpos($str, " 237ml.") or strpos($str, " 237ml")or strpos($str, " 237 ml")) {
            $size = "237ml";
        } elseif (strpos($str, " 240ml.") or strpos($str, " 240ml")or strpos($str, " 240 ml")) {
            $size = "240ml";
        } elseif (strpos($str, " 240ml.") or strpos($str, " 240ml")or strpos($str, " 240 ml")) {
            $size = "240ml";
        } elseif (strpos($str, " 300ml.") or strpos($str, " 300ml")or strpos($str, " 300 ml")) {
            $size = "300ml";
        } elseif (strpos($str, " 350ml.") or strpos($str, " 350ml")or strpos($str, " 350 ml")) {
            $size = "350ml";
        } elseif (strpos($str, " 360ml.") or strpos($str, " 360ml")or strpos($str, " 360 ml")) {
            $size = "360ml";
        } elseif (strpos($str, " 400ml.") or strpos($str, " 400ml")or strpos($str, " 400 ml")) {
            $size = "400ml";
        } elseif (strpos($str, " 450ml.") or strpos($str, " 450ml")or strpos($str, " 450 ml")) {
            $size = "450ml";
        } elseif (strpos($str, " 535ml.") or strpos($str, " 535ml")or strpos($str, " 535ml")) {
            $size = "535ml";
        } elseif (strpos($str, " 500ml.") or strpos($str, " 500ml")or strpos($str, " 500ml")) {
            $size = "500ml";
        } elseif (strpos($str, " 600ml.") or strpos($str, " 600ml")or strpos($str, " 600ml")) {
            $size = "600ml";
        } elseif (strpos($str, " 650ml.") or strpos($str, " 650ml")or strpos($str, " 650ml")) {
            $size = "650ml";
        } elseif (strpos($str, " 700ml.") or strpos($str, " 700ml")or strpos($str, " 700 ml")) {
            $size = "700ml";
        } elseif (strpos($str, " 750ml.") or strpos($str, " 750ml")or strpos($str, " 750 ml")) {
            $size = "750ml";
        } elseif (strpos($str, " 700ml.") or strpos($str, " 700ml")or strpos($str, " 700 ml")) {
            $size = "700ml";
        } elseif (strpos($str, " 800ml.") or strpos($str, " 800ml")or strpos($str, " 800 ml")) {
            $size = "800ml";
        } elseif (strpos($str, " 1000ml.") or strpos($str, " 1000ml")or strpos($str, " 1000 ml")) {
            $size = "1000ml";
        } elseif (strpos($str, " 5ml.") or strpos($str, " 5ml") or strpos($str, " 5 ml")) {
            $size = "5ml";
        } elseif (strpos($str, " 1lt") or strpos($str, " 1 lt")or strpos($str, " 1 lt")) {
            $size = "1lt";
        } elseif (strpos($str, " 2lt") or strpos($str, " 2 lt")or strpos($str, " 2 lt")) {
            $size = "2lt";
        } elseif (strpos($str, " 3lt") or strpos($str, " 3 lt")or strpos($str, " 3 lt")) {
            $size = "3lt";
        } elseif (strpos($str, " 4lt") or strpos($str, " 4 lt")or strpos($str, " 4 lt")) {
            $size = "4lt";
        } elseif (strpos($str, " 5lt") or strpos($str, " 5 lt")or strpos($str, " 3 lt")) {
            $size = "5lt";
        } elseif (strpos($str, " 1.96lt") or strpos($str, " 1.96 lt")or strpos($str, " 1.96 lt")) {
            $size = "1.96lt";
        } elseif (strpos($str, " 1000ml.") or strpos($str, " 1000ml")or strpos($str, " 1000 ml")) {
            $size = "1000ml";
        } elseif (strpos($str, " 1gr.") or strpos($str, " 1gr") or strpos($str, " 1 gr")) {
            $size = "1gr";
        } elseif (strpos($str, " 2gr.") or strpos($str, " 2gr") or strpos($str, " 2 gr")) {
            $size = "2gr";
        } elseif (strpos($str, " 25gr.") or strpos($str, " 25gr") or strpos($str, " 25 gr")) {
            $size = "25gr";
        } elseif (strpos($str, " 15gr.") or strpos($str, " 15gr") or strpos($str, " 15 gr")) {
            $size = "15gr";
        } elseif (strpos($str, " 30gr.") or strpos($str, " 30gr")or strpos($str, " 30 gr")) {
            $size = "30gr";
        } elseif (strpos($str, " 40gr.") or strpos($str, " 40gr")or strpos($str, " 40 gr")) {
            $size = "40gr";
        } elseif (strpos($str, " 50gr.") or strpos($str, " 50gr")or strpos($str, " 50 gr")) {
            $size = "50gr";
        } elseif (strpos($str, " 60gr.") or strpos($str, " 60gr")or strpos($str, " 60 gr")) {
            $size = "60gr";
        } elseif (strpos($str, " 70gr.") or strpos($str, " 70gr")or strpos($str, " 70 gr")) {
            $size = "70gr";
        } elseif (strpos($str, " 75gr.") or strpos($str, " 75gr")or strpos($str, " 75 gr")) {
            $size = "75gr";
        } elseif (strpos($str, " 80gr.") or strpos($str, " 80gr")or strpos($str, " 80 gr")) {
            $size = "80gr";
        } elseif (strpos($str, " 90gr.") or strpos($str, " 90gr")or strpos($str, " 90 gr")) {
            $size = "90gr";
        } elseif (strpos($str, " 100gr.") or strpos($str, " 100gr")or strpos($str, " 100 gr")) {
            $size = "100gr";
        } elseif (strpos($str, " 125gr.") or strpos($str, " 120gr")or strpos($str, " 120 gr")) {
            $size = "120gr";
        } elseif (strpos($str, " 120gr.") or strpos($str, " 125gr")or strpos($str, " 125 gr")) {
            $size = "125gr";
        } elseif (strpos($str, " 140gr.") or strpos($str, " 140gr")or strpos($str, " 140 gr")) {
            $size = "140gr";
        } elseif (strpos($str, " 150gr.") or strpos($str, " 150gr")or strpos($str, " 150 gr")) {
            $size = "150gr";
        } elseif (strpos($str, " 155gr.") or strpos($str, " 155gr")or strpos($str, " 155 gr")) {
            $size = "155gr";
        } elseif (strpos($str, " 160gr.") or strpos($str, " 160gr")or strpos($str, " 160 gr")) {
            $size = "160gr";
        } elseif (strpos($str, " 175gr.") or strpos($str, " 175gr")or strpos($str, " 175 gr")) {
            $size = "175gr";
        } elseif (strpos($str, " 180gr.") or strpos($str, " 180gr")or strpos($str, " 180 gr")) {
            $size = "180gr";
        } elseif (strpos($str, " 185gr.") or strpos($str, " 185gr")or strpos($str, " 185 gr")) {
            $size = "185gr";
        } elseif (strpos($str, " 190gr.") or strpos($str, " 190gr")or strpos($str, " 190 gr")) {
            $size = "190gr";
        } elseif (strpos($str, " 200gr.") or strpos($str, " 200gr")or strpos($str, " 200 gr")) {
            $size = "200gr";
        } elseif (strpos($str, " 230gr.") or strpos($str, " 230gr")or strpos($str, " 230 gr")) {
            $size = "230gr";
        } elseif (strpos($str, " 240gr.") or strpos($str, " 240gr")or strpos($str, " 240 gr")) {
            $size = "240gr";
        } elseif (strpos($str, " 250gr.") or strpos($str, " 250gr")or strpos($str, " 250 gr")) {
            $size = "250gr";
        } elseif (strpos($str, " 237gr.") or strpos($str, " 237gr")or strpos($str, " 237 gr")) {
            $size = "237gr";
        } elseif (strpos($str, " 240gr.") or strpos($str, " 240gr")or strpos($str, " 240 gr")) {
            $size = "240gr";
        } elseif (strpos($str, " 240gr.") or strpos($str, " 240gr")or strpos($str, " 240 gr")) {
            $size = "240gr";
        } elseif (strpos($str, " 300gr.") or strpos($str, " 300gr")or strpos($str, " 300 gr")) {
            $size = "300gr";
        } elseif (strpos($str, " 350gr.") or strpos($str, " 350gr")or strpos($str, " 350 gr")) {
            $size = "350gr";
        } elseif (strpos($str, " 360gr.") or strpos($str, " 360gr")or strpos($str, " 360 gr")) {
            $size = "360gr";
        } elseif (strpos($str, " 400gr.") or strpos($str, " 400gr")or strpos($str, " 400 gr")) {
            $size = "400gr";
        } elseif (strpos($str, " 450gr.") or strpos($str, " 450gr")or strpos($str, " 450 gr")) {
            $size = "450gr";
        } elseif (strpos($str, " 500gr.") or strpos($str, " 500gr")or strpos($str, " 500gr")) {
            $size = "500gr";
        } elseif (strpos($str, " 700gr.") or strpos($str, " 700gr")or strpos($str, " 700 gr")) {
            $size = "700gr";
        } elseif (strpos($str, " 750gr.") or strpos($str, " 750gr")or strpos($str, " 750 gr")) {
            $size = "750gr";
        } elseif (strpos($str, " 700gr.") or strpos($str, " 700gr")or strpos($str, " 700 gr")) {
            $size = "700gr";
        } elseif (strpos($str, " 800gr.") or strpos($str, " 800gr")or strpos($str, " 800 gr")) {
            $size = "800gr";
        } elseif (strpos($str, " 1000gr.") or strpos($str, " 1000gr")or strpos($str, " 1000 gr")) {
            $size = "1000gr";
        } elseif (strpos($str, " 1kg") or strpos($str, " 1 kg")or strpos($str, " 1 kg")) {
            $size = "1kg";
        } elseif (strpos($str, " 2kg") or strpos($str, " 2 kg")or strpos($str, " 2 kg")) {
            $size = "2kg";
        } elseif (strpos($str, ".1ml.") or strpos($str, ".1ml") or strpos($str, ".1 ml")) {
            $size = "1ml";
        } elseif (strpos($str, ".1.5ml.") or strpos($str, ".1.5ml") or strpos($str, ".1.5 ml")) {
            $size = "1.5ml";
        } elseif (strpos($str, ".2ml.") or strpos($str, ".2ml") or strpos($str, ".2 ml")) {
            $size = "2ml";
        } elseif (strpos($str, ".4ml.") or strpos($str, ".4ml") or strpos($str, ".4 ml")) {
            $size = "4ml";
        } elseif (strpos($str, ".7.5ml.") or strpos($str, ".7.5ml") or strpos($str, ".7.5 ml")) {
            $size = "7.5ml";
        } elseif (strpos($str, ".5ml.") or strpos($str, ".5ml") or strpos($str, ".5 ml")) {
            $size = ".5ml";
        } elseif (strpos($str, ".8ml.") or strpos($str, ".8ml") or strpos($str, ".8 ml")) {
            $size = "8ml";
        } elseif (strpos($str, ".25ml.") or strpos($str, ".25ml") or strpos($str, ".25 ml")) {
            $size = "25ml";
        } elseif (strpos($str, ".15ml.") or strpos($str, ".15ml") or strpos($str, ".15 ml")) {
            $size = "15ml";
        } elseif (strpos($str, ".30ml.") or strpos($str, ".30ml")or strpos($str, ".30 ml")) {
            $size = "30ml";
        } elseif (strpos($str, ".35ml.") or strpos($str, ".35ml")or strpos($str, ".35 ml")) {
            $size = "35ml";
        } elseif (strpos($str, ".40ml.") or strpos($str, ".40ml")or strpos($str, ".40 ml")) {
            $size = "40ml";
        } elseif (strpos($str, ".50ml.") or strpos($str, ".50ml")or strpos($str, ".50 ml")) {
            $size = "50ml";
        } elseif (strpos($str, ".60ml.") or strpos($str, ".60ml")or strpos($str, ".60 ml")) {
            $size = "60ml";
        } elseif (strpos($str, ".70ml.") or strpos($str, ".70ml")or strpos($str, ".70 ml")) {
            $size = "70ml";
        } elseif (strpos($str, ".75ml.") or strpos($str, ".75ml")or strpos($str, ".75 ml")) {
            $size = "75ml";
        } elseif (strpos($str, ".80ml.") or strpos($str, ".80ml")or strpos($str, ".80 ml")) {
            $size = "80ml";
        } elseif (strpos($str, ".90ml.") or strpos($str, ".90ml")or strpos($str, ".90 ml")) {
            $size = "90ml";
        } elseif (strpos($str, ".100ml.") or strpos($str, ".100ml")or strpos($str, ".100 ml")) {
            $size = "100ml";
        } elseif (strpos($str, ".125ml.") or strpos($str, ".120ml")or strpos($str, ".120 ml")) {
            $size = "120ml";
        } elseif (strpos($str, ".120ml.") or strpos($str, ".125ml")or strpos($str, ".125 ml")) {
            $size = "125ml";
        } elseif (strpos($str, ".140ml.") or strpos($str, ".140ml")or strpos($str, ".140 ml")) {
            $size = "140ml";
        } elseif (strpos($str, ".150ml.") or strpos($str, ".150ml")or strpos($str, ".150 ml")) {
            $size = "150ml";
        } elseif (strpos($str, ".155ml.") or strpos($str, ".155ml")or strpos($str, ".155 ml")) {
            $size = "155ml";
        } elseif (strpos($str, ".160ml.") or strpos($str, ".160ml")or strpos($str, ".160 ml")) {
            $size = "160ml";
        } elseif (strpos($str, ".175ml.") or strpos($str, ".175ml")or strpos($str, ".175 ml")) {
            $size = "175ml";
        } elseif (strpos($str, ".177ml.") or strpos($str, ".177ml")or strpos($str, ".177 ml")) {
            $size = "177ml";
        } elseif (strpos($str, ".180ml.") or strpos($str, ".180ml")or strpos($str, ".180 ml")) {
            $size = "180ml";
        } elseif (strpos($str, ".185ml.") or strpos($str, ".185ml")or strpos($str, ".185 ml")) {
            $size = "185ml";
        } elseif (strpos($str, ".190ml.") or strpos($str, ".190ml")or strpos($str, ".190 ml")) {
            $size = "190ml";
        } elseif (strpos($str, ".200ml.") or strpos($str, ".200ml")or strpos($str, ".200 ml")) {
            $size = "200ml";
        } elseif (strpos($str, ".230ml.") or strpos($str, ".230ml")or strpos($str, ".230 ml")) {
            $size = "230ml";
        } elseif (strpos($str, ".240ml.") or strpos($str, ".240ml")or strpos($str, ".240 ml")) {
            $size = "240ml";
        } elseif (strpos($str, ".250ml.") or strpos($str, ".250ml")or strpos($str, ".250 ml")) {
            $size = "250ml";
        } elseif (strpos($str, ".237ml.") or strpos($str, ".237ml")or strpos($str, ".237 ml")) {
            $size = "237ml";
        } elseif (strpos($str, ".240ml.") or strpos($str, ".240ml")or strpos($str, ".240 ml")) {
            $size = "240ml";
        } elseif (strpos($str, ".240ml.") or strpos($str, ".240ml")or strpos($str, ".240 ml")) {
            $size = "240ml";
        } elseif (strpos($str, ".300ml.") or strpos($str, ".300ml")or strpos($str, ".300 ml")) {
            $size = "300ml";
        } elseif (strpos($str, ".350ml.") or strpos($str, ".350ml")or strpos($str, ".350 ml")) {
            $size = "350ml";
        } elseif (strpos($str, ".360ml.") or strpos($str, ".360ml")or strpos($str, ".360 ml")) {
            $size = "360ml";
        } elseif (strpos($str, ".400ml.") or strpos($str, ".400ml")or strpos($str, ".400 ml")) {
            $size = "400ml";
        } elseif (strpos($str, ".450ml.") or strpos($str, ".450ml")or strpos($str, ".450 ml")) {
            $size = "450ml";
        } elseif (strpos($str, ".500ml.") or strpos($str, ".500ml")or strpos($str, ".500ml")) {
            $size = "500ml";
        } elseif (strpos($str, ".535ml.") or strpos($str, ".535ml")or strpos($str, ".535ml")) {
            $size = "535ml";
        } elseif (strpos($str, ".600ml.") or strpos($str, ".600ml")or strpos($str, ".600 ml")) {
            $size = "600ml";
        } elseif (strpos($str, ".650ml.") or strpos($str, ".650ml")or strpos($str, ".650 ml")) {
            $size = "650ml";
        } elseif (strpos($str, ".700ml.") or strpos($str, ".700ml")or strpos($str, ".700 ml")) {
            $size = "700ml";
        } elseif (strpos($str, ".750ml.") or strpos($str, ".750ml")or strpos($str, ".750 ml")) {
            $size = "750ml";
        } elseif (strpos($str, ".700ml.") or strpos($str, ".700ml")or strpos($str, ".700 ml")) {
            $size = "700ml";
        } elseif (strpos($str, ".800ml.") or strpos($str, ".800ml")or strpos($str, ".800 ml")) {
            $size = "800ml";
        } elseif (strpos($str, ".1000ml.") or strpos($str, ".1000ml")or strpos($str, ".1000 ml")) {
            $size = "1000ml";
        } elseif (strpos($str, ".1lt") or strpos($str, ".1 lt")or strpos($str, ".1 lt")) {
            $size = "1lt";
        } elseif (strpos($str, ".2lt") or strpos($str, ".2 lt")or strpos($str, ".2 lt")) {
            $size = "2lt";
        } elseif (strpos($str, ".3lt") or strpos($str, ".3 lt")or strpos($str, ".3 lt")) {
            $size = "3lt";
        } elseif (strpos($str, ".4lt") or strpos($str, ".4 lt")or strpos($str, ".4 lt")) {
            $size = "4lt";
        } elseif (strpos($str, ".5lt") or strpos($str, ".5 lt")or strpos($str, ".3 lt")) {
            $size = "5lt";
        } elseif (strpos($str, ".1.96lt") or strpos($str, ".1.96 lt")or strpos($str, ".1.96 lt")) {
            $size = "1.96lt";
        } elseif (strpos($str, ".1000ml.") or strpos($str, ".1000ml")or strpos($str, ".1000 ml")) {
            $size = "1000ml";
        } elseif (strpos($str, ".1gr.") or strpos($str, ".1gr") or strpos($str, ".1 gr")) {
            $size = "1gr";
        } elseif (strpos($str, ".2gr.") or strpos($str, ".2gr") or strpos($str, ".2 gr")) {
            $size = "2gr";
        } elseif (strpos($str, ".25gr.") or strpos($str, ".25gr") or strpos($str, ".25 gr")) {
            $size = "25gr";
        } elseif (strpos($str, ".15gr.") or strpos($str, ".15gr") or strpos($str, ".15 gr")) {
            $size = "15gr";
        } elseif (strpos($str, ".30gr.") or strpos($str, ".30gr")or strpos($str, ".30 gr")) {
            $size = "30gr";
        } elseif (strpos($str, ".40gr.") or strpos($str, ".40gr")or strpos($str, ".40 gr")) {
            $size = "40gr";
        } elseif (strpos($str, ".50gr.") or strpos($str, ".50gr")or strpos($str, ".50 gr")) {
            $size = "50gr";
        } elseif (strpos($str, ".60gr.") or strpos($str, ".60gr")or strpos($str, ".60 gr")) {
            $size = "60gr";
        } elseif (strpos($str, ".70gr.") or strpos($str, ".70gr")or strpos($str, ".70 gr")) {
            $size = "70gr";
        } elseif (strpos($str, ".75gr.") or strpos($str, ".75gr")or strpos($str, ".75 gr")) {
            $size = "75gr";
        } elseif (strpos($str, ".80gr.") or strpos($str, ".80gr")or strpos($str, ".80 gr")) {
            $size = "80gr";
        } elseif (strpos($str, ".90gr.") or strpos($str, ".90gr")or strpos($str, ".90 gr")) {
            $size = "90gr";
        } elseif (strpos($str, ".100gr.") or strpos($str, ".100gr")or strpos($str, ".100 gr")) {
            $size = "100gr";
        } elseif (strpos($str, ".125gr.") or strpos($str, ".120gr")or strpos($str, ".120 gr")) {
            $size = "120gr";
        } elseif (strpos($str, ".120gr.") or strpos($str, ".125gr")or strpos($str, ".125 gr")) {
            $size = "125gr";
        } elseif (strpos($str, ".140gr.") or strpos($str, ".140gr")or strpos($str, ".140 gr")) {
            $size = "140gr";
        } elseif (strpos($str, ".150gr.") or strpos($str, ".150gr")or strpos($str, ".150 gr")) {
            $size = "150gr";
        } elseif (strpos($str, ".155gr.") or strpos($str, ".155gr")or strpos($str, ".155 gr")) {
            $size = "155gr";
        } elseif (strpos($str, ".160gr.") or strpos($str, ".160gr")or strpos($str, ".160 gr")) {
            $size = "160gr";
        } elseif (strpos($str, ".175gr.") or strpos($str, ".175gr")or strpos($str, ".175 gr")) {
            $size = "175gr";
        } elseif (strpos($str, ".180gr.") or strpos($str, ".180gr")or strpos($str, ".180 gr")) {
            $size = "180gr";
        } elseif (strpos($str, ".185gr.") or strpos($str, ".185gr")or strpos($str, ".185 gr")) {
            $size = "185gr";
        } elseif (strpos($str, ".190gr.") or strpos($str, ".190gr")or strpos($str, ".190 gr")) {
            $size = "190gr";
        } elseif (strpos($str, ".200gr.") or strpos($str, ".200gr")or strpos($str, ".200 gr")) {
            $size = "200gr";
        } elseif (strpos($str, ".230gr.") or strpos($str, ".230gr")or strpos($str, ".230 gr")) {
            $size = "230gr";
        } elseif (strpos($str, ".240gr.") or strpos($str, ".240gr")or strpos($str, ".240 gr")) {
            $size = "240gr";
        } elseif (strpos($str, ".250gr.") or strpos($str, ".250gr")or strpos($str, ".250 gr")) {
            $size = "250gr";
        } elseif (strpos($str, ".237gr.") or strpos($str, ".237gr")or strpos($str, ".237 gr")) {
            $size = "237gr";
        } elseif (strpos($str, ".240gr.") or strpos($str, ".240gr")or strpos($str, ".240 gr")) {
            $size = "240gr";
        } elseif (strpos($str, ".240gr.") or strpos($str, ".240gr")or strpos($str, ".240 gr")) {
            $size = "240gr";
        } elseif (strpos($str, ".300gr.") or strpos($str, ".300gr")or strpos($str, ".300 gr")) {
            $size = "300gr";
        } elseif (strpos($str, ".350gr.") or strpos($str, ".350gr")or strpos($str, ".350 gr")) {
            $size = "350gr";
        } elseif (strpos($str, ".360gr.") or strpos($str, ".360gr")or strpos($str, ".360 gr")) {
            $size = "360gr";
        } elseif (strpos($str, ".400gr.") or strpos($str, ".400gr")or strpos($str, ".400 gr")) {
            $size = "400gr";
        } elseif (strpos($str, ".450gr.") or strpos($str, ".450gr")or strpos($str, ".450 gr")) {
            $size = "450gr";
        } elseif (strpos($str, ".500gr.") or strpos($str, ".500gr")or strpos($str, ".500gr")) {
            $size = "500gr";
        } elseif (strpos($str, ".700gr.") or strpos($str, ".700gr")or strpos($str, ".700 gr")) {
            $size = "700gr";
        } elseif (strpos($str, ".750gr.") or strpos($str, ".750gr")or strpos($str, ".750 gr")) {
            $size = "750gr";
        } elseif (strpos($str, ".700gr.") or strpos($str, ".700gr")or strpos($str, ".700 gr")) {
            $size = "700gr";
        } elseif (strpos($str, ".800gr.") or strpos($str, ".800gr")or strpos($str, ".800 gr")) {
            $size = "800gr";
        } elseif (strpos($str, ".1000gr.") or strpos($str, ".1000gr")or strpos($str, ".1000 gr")) {
            $size = "1000gr";
        } elseif (strpos($str, ".1kg") or strpos($str, ".1 kg")or strpos($str, ".1 kg")) {
            $size = "1kg";
        } elseif (strpos($str, ".2kg") or strpos($str, ".2 kg")or strpos($str, ".2 kg")) {
            $size = "2kg";
        }
        return $size;
    }

    public function ImageFileConvertAccentsAndSpecialToNormal($string) {
        $table = array(
            'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Ă' => 'A', 'Ā' => 'A', 'Ą' => 'A', 'Æ' => 'A', 'Ǽ' => 'A',
            'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'ă' => 'a', 'ā' => 'a', 'ą' => 'a', 'æ' => 'a', 'ǽ' => 'a',
            'Þ' => 'B', 'þ' => 'b', 'ß' => 'Ss',
            'Ç' => 'C', 'Č' => 'C', 'Ć' => 'C', 'Ĉ' => 'C', 'Ċ' => 'C',
            'ç' => 'c', 'č' => 'c', 'ć' => 'c', 'ĉ' => 'c', 'ċ' => 'c',
            'Đ' => 'Dj', 'Ď' => 'D',
            'đ' => 'dj', 'ď' => 'd',
            'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ĕ' => 'E', 'Ē' => 'E', 'Ę' => 'E', 'Ė' => 'E',
            'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ĕ' => 'e', 'ē' => 'e', 'ę' => 'e', 'ė' => 'e',
            'Ĝ' => 'G', 'Ğ' => 'G', 'Ġ' => 'G', 'Ģ' => 'G',
            'ĝ' => 'g', 'ğ' => 'g', 'ġ' => 'g', 'ģ' => 'g',
            'Ĥ' => 'H', 'Ħ' => 'H',
            'ĥ' => 'h', 'ħ' => 'h',
            'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'İ' => 'I', 'Ĩ' => 'I', 'Ī' => 'I', 'Ĭ' => 'I', 'Į' => 'I',
            'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'į' => 'i', 'ĩ' => 'i', 'ī' => 'i', 'ĭ' => 'i', 'ı' => 'i',
            'Ĵ' => 'J',
            'ĵ' => 'j',
            'Ķ' => 'K',
            'ķ' => 'k', 'ĸ' => 'k',
            'Ĺ' => 'L', 'Ļ' => 'L', 'Ľ' => 'L', 'Ŀ' => 'L', 'Ł' => 'L',
            'ĺ' => 'l', 'ļ' => 'l', 'ľ' => 'l', 'ŀ' => 'l', 'ł' => 'l',
            'Ñ' => 'N', 'Ń' => 'N', 'Ň' => 'N', 'Ņ' => 'N', 'Ŋ' => 'N',
            'ñ' => 'n', 'ń' => 'n', 'ň' => 'n', 'ņ' => 'n', 'ŋ' => 'n', 'ŉ' => 'n',
            'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ō' => 'O', 'Ŏ' => 'O', 'Ő' => 'O', 'Œ' => 'O',
            'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ø' => 'o', 'ō' => 'o', 'ŏ' => 'o', 'ő' => 'o', 'œ' => 'o', 'ð' => 'o',
            'Ŕ' => 'R', 'Ř' => 'R',
            'ŕ' => 'r', 'ř' => 'r', 'ŗ' => 'r',
            'Š' => 'S', 'Ŝ' => 'S', 'Ś' => 'S', 'Ş' => 'S',
            'š' => 's', 'ŝ' => 's', 'ś' => 's', 'ş' => 's',
            'Ŧ' => 'T', 'Ţ' => 'T', 'Ť' => 'T',
            'ŧ' => 't', 'ţ' => 't', 'ť' => 't',
            'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ũ' => 'U', 'Ū' => 'U', 'Ŭ' => 'U', 'Ů' => 'U', 'Ű' => 'U', 'Ų' => 'U',
            'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'ũ' => 'u', 'ū' => 'u', 'ŭ' => 'u', 'ů' => 'u', 'ű' => 'u', 'ų' => 'u',
            'Ŵ' => 'W', 'Ẁ' => 'W', 'Ẃ' => 'W', 'Ẅ' => 'W',
            'ŵ' => 'w', 'ẁ' => 'w', 'ẃ' => 'w', 'ẅ' => 'w',
            'Ý' => 'Y', 'Ÿ' => 'Y', 'Ŷ' => 'Y',
            'ý' => 'y', 'ÿ' => 'y', 'ŷ' => 'y',
            'Ž' => 'Z', 'Ź' => 'Z', 'Ż' => 'Z',
            'ž' => 'z', 'ź' => 'z', 'ż' => 'z',
            '#' => '-', '@' => '-', '_' => '-', ' ' => '-', '(' => '-', ')' => '-', "'" => '-',
            '“' => '"', '-' => '-', '‘' => "-", '’' => "-", '•' => '-', '…' => '-', '—' => '-', '–' => '-', '¿' => '-', '¡' => '-', '°' => '-', '/' => '-',
            '¼' => '1-4', '½' => ' 1-2 ', '¾' => ' 3-4 ', '⅓' => ' 1-3 ', '⅔' => ' 2-3 ', '⅛' => ' 1-8 ', '⅜' => ' 3-8 ', '⅝' => ' 5-8 ', '⅞' => ' 7-8 ',
            '--' => '-', '---' => '-', '---' => '-', '|' => '-', ',' => '-', '*' => '', '?' => '', 'y&quot;' => '', 'Y&quot;' => '', '&quot;' => '', '&quot;' => '',
            '♀' => ' female ', '♂' => ' male ',
            '©' => ' Copyright ', '®' => ' Registered ', '™' => ' Trademark ',);
        $i = 0;
        loop:

        $string = strtr($string, $table);
        // Currency symbols: £¤¥€  - we dont bother with them for now
        $string = preg_replace("/[^\x9\xA\xD\x20-\x7F]/u", "", $string);
        if ($i++ < 3) {
            goto loop;
        }
        return $string;
    }

    /*
     * writes
     * 
     */

    public function WriteITA($db) {
        $this->WriteRecord("it", $db);
    }

    public function WriteENG($db) {
        $this->WriteRecord("en", $db);
    }

    public function WriteRecord($store, $db) {

        $ERP_size = $this->Get_Size($this->ERP_Prod_name);
        if (strlen($ERP_size) > 0)
            $this->B_size = $ERP_size;
        // inizializzazione campi Magento obbligatori
        $this->attribute_set_code = "Default"; // Chiara: modificare interpretando la categoria
        $this->product_online = 1;
        $this->visibility = "Catalog,Search";
        $this->qty = 100; // impostare al momento a “100”
        $this->out_of_stock_qty = 10; // impostare al momento a “10”
        $this->use_config_min_qty = 1; // impostare a “1”
        $this->is_qty_decimal = "0"; // impostare a “0”
        $this->allow_backorders = "0"; // impostare a “0”
        $this->use_config_backorders = "1"; // impostare a “1”
        $this->min_cart_qty = 1.0000; // impostare a “1.0000”
        $this->use_config_min_sale_qty = 1; // impostare a “1”
        $this->max_cart_qty = 30000; // impostare a “30.0000”
        $this->use_config_max_sale_qty = "1"; // impostare a “1”
        $this->is_in_stock = "1"; // impostare a “1”
        $this->notify_on_stock_below = "10"; // impostare a “1.0000”
        $this->use_config_notify_stock_qty = "1"; // impostare a “1”
        $this->manage_stock = "1"; // impostare a “1”
        $this->use_config_manage_stock = "1"; // impostare a “1”
        $this->use_config_qty_increments = "1"; // impostare a “1”
        $this->qty_increments = "1"; // impostare a “1” verificare se mettere Yes/No
        $this->use_config_enable_qty_inc = "1"; // impostare a “1”
        $this->enable_qty_increments = "0"; // impostare a “0”
        $this->is_decimal_divided = "0"; // impostare a “0”
        $this->website_id = "0"; // impostare a “0”
        /*
         * Originally the erp_brand was selectively copied in brand.
         * Now after the translation we know that ERP_brand is always perfect
         */


//------       // inizio scrittura            
        // insert in StagingDB
        $sqlInsert = "INSERT INTO Staging_catalogo("
                . "N_product_master,"
                . "N_id_stringa,"
                . "N_Prod_code,"
                . "P_saved_name,"
                . "N_Prod_type,"
                . "product_type,"
                . "attribute_set_code,"
                . "name,"
                . "N_Prod_name,"
                . "N_Variant_name,"
                . "N_Prod_annotation,"
                . "N_Prod_tipo,"
                . "N_Prod_gender,"
                . "N_color,"
                . "N_additional_info,"
                . "N_has_different_colors,"
                . "N_has_different_sizes,"
                . "N_Variants,"
                . "configurable_variations,"
                . "configurable_variation_labels,"
                . "E_line,"
                . "E_name,"
                . "productId,"
                . "sku,"
                . "ERP_export,"
                . "ean,"
                . "B_product_name,"
                . "B_asin,"
                . "B_mpn,"
                . "B_model,"
                . "B_publisher,"
                . "B_ingredients,"
                . "B_size,"
                . "B_format,"
                . "B_features,"
                . "B_NITA,"
                . "B_NENG,"
                . "B_PITA,"
                . "B_NCZ,"
                . "code_type,"
                . "categories,"
                . "sub_categories,"
                . "B_categories,"
                . "B_sub_categories,"
                . "N_categories,"
                . "N_sub_categories,"
                . "product_websites,"
                . "brand,"
                . "brand_id,"
                . "description,"
                . "short_description,"
                . "price_currency,"
                . "market_type,"
                . "manufacturer,"
                . "unit,"
                . "order_unit,"
                . "gender,"
                . "product_height,"
                . "product_width,"
                . "product_depth,"
                . "N_prod_coded_composition_0_name,"
                . "N_prod_coded_composition_0_help,"
                . "N_top_notes,"
                . "N_prod_coded_composition_1_name,"
                . "N_prod_coded_composition_1_help,"
                . "N_heart_notes,"
                . "N_prod_coded_composition_2_name,"
                . "N_prod_coded_composition_2_help,"
                . "N_base_notes,"
                . "N_product_type,"
                . "meta_title,"
                . "meta_keywords,"
                . "meta_description,"
                . "base_image,"
                . "swatch_image,"
                . "additional_images,"
                . "thumbnail_images,"
                . "products_related,"
                . "ERP_Prod_code,"
                . "ERP_Prod_name,"
                . "ERP_brand,"
                . "ERP_prod_unit,"
                . "ERP_sub_category_code,"
                . "ERP_sub_category,"
                . "ERP_category_code,"
                . "ERP_category,"
                . "ERP_VAT_code,"
                . "ERP_price_discount_1,"
                . "ERP_price_discount_2,"
                . "ERP_price_1,"
                . "ERP_price_2,"
                . "ERP_price_3,"
                . "ERP_Commision_category,"
                . "ERP_Invent_category,"
                . "ERP_storage_code,"
                . "ERP_delete_pvp,"
                . "store_view_code,"
                . "related_position,"
                . "ERP_ean,"
                . "E_status,"
                . "weight,"
                . "visibility,"
                . "product_online,"
                . "qty,"
                . "out_of_stock_qty,"
                . "use_config_min_qty,"
                . "is_qty_decimal,"
                . "allow_backorders,"
                . "use_config_backorders,"
                . "min_cart_qty,"
                . "use_config_min_sale_qty,"
                . "max_cart_qty,"
                . "use_config_max_sale_qty,"
                . "is_in_stock,"
                . "notify_on_stock_below,"
                . "use_config_notify_stock_qty,"
                . "manage_stock,"
                . "use_config_manage_stock,"
                . "use_config_qty_increments,"
                . "qty_increments,"
                . "use_config_enable_qty_inc,"
                . "enable_qty_increments,"
                . "is_decimal_divided,"
                . "website_id,"
                . "P_processing_error,"
                . "tax_class_name,"
                . "price_tax,"
                . "price"
                . ") "
                . "VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $paramType = "ssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssdd";
        $paramArray = array(
            $this->N_product_master,
            $this->N_id_stringa,
            $this->N_Prod_code,
            $this->P_saved_name,
            $this->N_Prod_type,
            $this->product_type,
            $this->attribute_set_code,
            $this->name,
            $this->N_Prod_name,
            $this->N_Variant_name,
            $this->N_Prod_annotation,
            $this->N_Prod_tipo,
            $this->N_Prod_gender,
            $this->N_color,
            $this->N_additional_info,
            $this->N_has_different_colors,
            $this->N_has_different_sizes,
            $this->N_Variants,
            $this->configurable_variations,
            $this->configurable_variation_labels,
            $this->E_line,
            $this->E_name,
            $this->productId,
            $this->sku,
            $this->ERP_export,
            $this->ERP_ean,
            $this->B_product_name,
            $this->B_asin,
            $this->B_mpn,
            $this->B_model,
            $this->B_publisher,
            $this->B_ingredients,
            $this->B_size,
            $this->B_format,
            $this->B_features,
            $this->B_NITA,
            $this->B_NENG,
            $this->B_PITA,
            $this->B_NCZ,
            $this->code_type,
            $this->categories,
            $this->sub_categories,
            $this->B_categories,
            $this->B_sub_categories,
            $this->N_categories,
            $this->N_sub_categories,
            $this->product_websites,
            $this->brand,
            $this->brand_id,
            $this->description,
            $this->short_description,
            $this->price_currency,
            $this->market_type,
            $this->manufacturer,
            $this->unit,
            $this->order_unit,
            $this->gender,
            $this->product_height,
            $this->product_width,
            $this->product_depth,
            $this->N_prod_coded_composition_0_name,
            $this->N_prod_coded_composition_0_help,
            $this->N_top_notes,
            $this->N_prod_coded_composition_1_name,
            $this->N_prod_coded_composition_1_help,
            $this->N_heart_notes,
            $this->N_prod_coded_composition_2_name,
            $this->N_prod_coded_composition_2_help,
            $this->N_base_notes,
            $this->N_product_type,
            $this->meta_title,
            $this->meta_keywords,
            $this->meta_description,
            $this->base_image,
            $this->swatch_image,
            $this->additional_images,
            $this->thumbnail_images,
            $this->products_related,
            $this->ERP_Prod_code,
            $this->ERP_Prod_name,
            $this->ERP_brand,
            $this->ERP_prod_unit,
            $this->ERP_sub_category_code,
            $this->ERP_sub_category,
            $this->ERP_category_code,
            $this->ERP_category,
            $this->ERP_VAT_code,
            $this->ERP_price_discount_1,
            $this->ERP_price_discount_2,
            $this->ERP_price_1,
            $this->ERP_price_2,
            $this->ERP_price_3,
            $this->ERP_Commision_category,
            $this->ERP_Invent_category,
            $this->ERP_storage_code,
            $this->ERP_delete_pvp,
            $store,
            $this->related_position,
            $this->ERP_ean,
            $this->E_status,
            $this->weight,
            $this->visibility,
            $this->product_online,
            $this->qty,
            $this->out_of_stock_qty,
            $this->use_config_min_qty,
            $this->is_qty_decimal,
            $this->allow_backorders,
            $this->use_config_backorders,
            $this->min_cart_qty,
            $this->use_config_min_sale_qty,
            $this->max_cart_qty,
            $this->use_config_max_sale_qty,
            $this->is_in_stock,
            $this->notify_on_stock_below,
            $this->use_config_notify_stock_qty,
            $this->manage_stock,
            $this->use_config_manage_stock,
            $this->use_config_qty_increments,
            $this->qty_increments,
            $this->use_config_enable_qty_inc,
            $this->enable_qty_increments,
            $this->is_decimal_divided,
            $this->website_id,
            $this->P_processing_error,
            $this->tax_class_name,
            $this->price_tax,
            $this->price);
        $insertId = $db->insert($sqlInsert, $paramType, $paramArray);
        if (empty($insertId)) {
            echo "error " . $this->productId;
        }
        /*
          else {
          echo ("<br/>-----------------------------------------------------------------"
          . "<br/>ARTICOLO=" . $this->ERP_Prod_code
          . ",<bR/>ERP_brand=" . $this->ERP_brand
          . ",<bR/>ERP_ean=" . $this->ERP_ean
          . ",<bR/>ERP_Prod_name=" . $this->ERP_Prod_name
          . ",<bR/>ProductId= " . $this->productId
          . ",<bR/>B_description=" . $this->B_description
          . ",<bR/>brand=" . $this->brand
          . ",<bR/>E_status=" . $this->E_status
          . ",<br/>B_NCZ=" . $this->B_NCZ
          . ",<br/>B_NENG=" . $this->B_NENG
          . ",<br/>B_NITA=" . $this->B_NITA
          . ",<br/>B_PITA=" . $this->B_PITA);
          }
         * 
         */
    }

    public function WriteEANSToreRecord($B_store_name, $url, $db) {
        // inizio scrittura            
        // insert in StagingDB

        $sqlInsert = "INSERT INTO Staging_EAN_SITES (`ean`, `N_id_stringa`, `store_name`, `product_website`)"
                . "VALUES (?,?,?,?)";
        $paramType = "ssss";
        $paramArray = array($this->ERP_ean, $this->N_id_stringa, $B_store_name, $url);
        $insertId = $db->insert($sqlInsert, $paramType, $paramArray);
        if (empty($insertId)) {
            echo "error " . $this->productId;
        }
        /* else {
          echo ("<br/>-----------------------"
          . ",<bR/>----------------------EAN=" . $this->ERP_ean
          . ",<br/>----------------------store url=" . $url);
          } */
    }

    public function Rehydrate_ERP_Prod_name($string) {
        $table = array(
            'A.BA.' => 'AFTER SHAVE BALM ',
            'A/MACULA' => ' ANTIMACULA ',
            'A.BA.' => 'AFTER SHAVE BALM ',
            'A.BAL.' => 'AFTER SHAVE BALM ',
            'A.BALM' => 'AFTER SHAVE BALM ',
            'A.GEL' => 'AFTER SHAVE GEL ',
            'A.HYDRO-LIQUID.' => 'ADVANCED HYDRO LIQUID COMPACT ',
            'A.SH.' => 'AFTER SHAVE ',
            'A.SH.BALM' => 'AFTER SHAVE BALM ',
            'A.SH.EXTRASENS.' => 'AFTER SHAVE EXTRASENSIBILE ',
            'A/R ' => 'ANTIRUGHE ',
            'A/RUG.' => 'ANTIRUGHE ',
            'A/RUGHE ' => 'ANTIRUGHE ',
            'ACCE.POWDER' => 'ACCENTUATING POWDER ',
            'ACQ.' => 'ACQUA ',
            'AFT.BA.' => 'AFTER SHAVE BALM ',
            'AFT.BALM' => 'AFTER SHAVE BALM ',
            'AFT.SH.' => 'AFTER SHAVE ',
            'AFT.SH.BALM' => 'AFTER SHAVE BALM ',
            'APP.OM' => 'APPLICATORI OM ',
            'BA.' => 'BAGNO SCHIUMA ',
            'BAG.' => 'BAGNO SCHIUMA ',
            'BAIN' => 'BAGNO SCHIUMA ',
            'BALS.' => 'BALSAMO ',
            'BAL.' => 'BALSAMO ',
            'BATH' => 'BAGNO ',
            'BATH' => 'BAGNO SCHIUMA ',
            'BATH.' => 'BAGNO ',
            'BAULE.' => 'BAULETTO ',
            'BIG.' => 'BIGODO ',
            'BODY CLEANS.MILK' => 'Shiseido GGlobal Body Care Extra Rich Cleansing Milk ',
            'CIOCC.' => 'CIOCCOLATO ',
            'CONF.' => 'CONFEZIONE  ',
            'CONF.REG.' => 'CONFEZIONE REGALO ',
            'COUP.SERUM' => 'Arval Couperoll Serum ',
            'CR.' => 'CREMA ',
            'D.' => 'DONNA ',
            'DET.' => 'DETERGENTE ',
            'DIFFUS.' => 'DIFFUSORE ',
            'EAU D\'I.' => 'EAU D\'ISSEY ',
            'EDC' => 'EAU DE COLOGNE ',
            'EDP' => 'EAU DE PARFUM ',
            'EDT' => 'EAU DE TOILETTE ',
            'EMUL.' => 'EMULSIONE ',
            'ESFOL.' => 'ESFOLIANTE ',
            'ESFOL.' => 'ESFOLIANTE ',
            'FLU.DERM.' => 'FLUID DERM ',
            'LAIT' => 'LATTE ',
            'LAIT' => 'LATTE ',
            'LAIT' => 'LATTE ',
            'LATTE ABBR.' => 'LATTE ABBRONZANTE ',
            'LOZ.' => 'LOZIONE ',
            'M/U' => 'MAKEUP ',
            'MASCH.' => 'MASCHERA ',
            'MILK LIFESTY.' => 'Milkshake Lifestyling ',
            'MILK SH.' => 'MILK SHAKE ',
            'MKS' => 'MAKEUPSTUDIO ',
            'MORN.ROSE' => 'MORNING ROSE ',
            'MOUSS.' => 'MOUSSE ',
            'OM.' => 'OMBRETTO ',
            'OMBRET.' => 'OMBRETTO ',
            'PATCH./AGR.' => 'PATCHOULI/AGRUMI ',
            'PORTAC.' => 'PORTACOSE ',
            'PORTAF.' => 'PORTAFOGLIO ',
            'PORTAF.D.' => 'PORTAFOGLIO DONNA ',
            'PORTAF.U.' => 'PORTAFOGLIO UOMO ',
            'PROF.' => 'PROFUMATA ',
            'RETT.' => 'RETTANGOLARE ',
            'SAP.LIQ.' => 'SAPONE LIQUIDO ',
            'SAP.LIQU.' => 'SAPONE LIQUIDO ',
            'SAP.LIQUI.' => 'SAPONE LIQUIDO ',
            'SAP.LIQUIDO' => 'SAPONE LIQUIDO ',
            'SCAT.' => 'SCATOLA ',
            'SCH.BARBA.' => 'SCHIUMA DA BARBA ',
            'SP.' => 'SPRAY ',
            'SUN/B.MILK' => 'Lancaster Sun Beauty Velvet Milk ',
            'TRATT.' => 'TRATTAMENTO ',
            'TREAT.' => 'TRATTAMENTO ',
            'U.' => 'UOMO ',
            'VAN.ANICE' => 'VANIGLIA/ANICE ',
            'VETIV.' => 'VETIVER ',
            'u/RAPIDO' => 'ULTRA RAPIDO',
            'u/RAPIDO' => 'ULTRA RAPIDO',
            'U/RAP.' => 'ULTRA RAPIDO  ',
            'APPL.' => 'APPLICATORE  ',
            'C/WT' => 'COOL WATER ',
            '©' => ' Copyright ', '®' => ' Registered ', '™' => ' Trademark ',);
        $i = 0;
        loop:

        $string = strtr($string, $table);
        // Currency symbols: £¤¥€  - we dont bother with them for now
        $string = preg_replace("/[^\x9\xA\xD\x20-\x7F]/u", "", $string);
        if ($i++ < 3) {
            goto loop;
        }
        return $string;
    }

    public function convertAccentsAndSpecialToNormal($string) {
        $table = array(
            'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Ă' => 'A', 'Ā' => 'A', 'Ą' => 'A', 'Æ' => 'A', 'Ǽ' => 'A',
            'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'ă' => 'a', 'ā' => 'a', 'ą' => 'a', 'æ' => 'a', 'ǽ' => 'a',
            'Þ' => 'B', 'þ' => 'b', 'ß' => 'Ss',
            'Ç' => 'C', 'Č' => 'C', 'Ć' => 'C', 'Ĉ' => 'C', 'Ċ' => 'C',
            'ç' => 'c', 'č' => 'c', 'ć' => 'c', 'ĉ' => 'c', 'ċ' => 'c',
            'Đ' => 'Dj', 'Ď' => 'D',
            'đ' => 'dj', 'ď' => 'd',
            'È' => 'E', 'É' => 'E', 'Ê' => 'E', 'Ë' => 'E', 'Ĕ' => 'E', 'Ē' => 'E', 'Ę' => 'E', 'Ė' => 'E',
            'è' => 'e', 'é' => 'e', 'ê' => 'e', 'ë' => 'e', 'ĕ' => 'e', 'ē' => 'e', 'ę' => 'e', 'ė' => 'e',
            'Ĝ' => 'G', 'Ğ' => 'G', 'Ġ' => 'G', 'Ģ' => 'G',
            'ĝ' => 'g', 'ğ' => 'g', 'ġ' => 'g', 'ģ' => 'g',
            'Ĥ' => 'H', 'Ħ' => 'H',
            'ĥ' => 'h', 'ħ' => 'h',
            'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'İ' => 'I', 'Ĩ' => 'I', 'Ī' => 'I', 'Ĭ' => 'I', 'Į' => 'I',
            'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'į' => 'i', 'ĩ' => 'i', 'ī' => 'i', 'ĭ' => 'i', 'ı' => 'i',
            'Ĵ' => 'J',
            'ĵ' => 'j',
            'Ķ' => 'K',
            'ķ' => 'k', 'ĸ' => 'k',
            'Ĺ' => 'L', 'Ļ' => 'L', 'Ľ' => 'L', 'Ŀ' => 'L', 'Ł' => 'L',
            'ĺ' => 'l', 'ļ' => 'l', 'ľ' => 'l', 'ŀ' => 'l', 'ł' => 'l',
            'Ñ' => 'N', 'Ń' => 'N', 'Ň' => 'N', 'Ņ' => 'N', 'Ŋ' => 'N',
            'ñ' => 'n', 'ń' => 'n', 'ň' => 'n', 'ņ' => 'n', 'ŋ' => 'n', 'ŉ' => 'n',
            'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O', 'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ō' => 'O', 'Ŏ' => 'O', 'Ő' => 'O', 'Œ' => 'O',
            'ò' => 'o', 'ó' => 'o', 'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ø' => 'o', 'ō' => 'o', 'ŏ' => 'o', 'ő' => 'o', 'œ' => 'o', 'ð' => 'o',
            'Ŕ' => 'R', 'Ř' => 'R',
            'ŕ' => 'r', 'ř' => 'r', 'ŗ' => 'r',
            'Š' => 'S', 'Ŝ' => 'S', 'Ś' => 'S', 'Ş' => 'S',
            'š' => 's', 'ŝ' => 's', 'ś' => 's', 'ş' => 's',
            'Ŧ' => 'T', 'Ţ' => 'T', 'Ť' => 'T',
            'ŧ' => 't', 'ţ' => 't', 'ť' => 't',
            'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ũ' => 'U', 'Ū' => 'U', 'Ŭ' => 'U', 'Ů' => 'U', 'Ű' => 'U', 'Ų' => 'U',
            'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ü' => 'u', 'ũ' => 'u', 'ū' => 'u', 'ŭ' => 'u', 'ů' => 'u', 'ű' => 'u', 'ų' => 'u',
            'Ŵ' => 'W', 'Ẁ' => 'W', 'Ẃ' => 'W', 'Ẅ' => 'W',
            'ŵ' => 'w', 'ẁ' => 'w', 'ẃ' => 'w', 'ẅ' => 'w',
            'Ý' => 'Y', 'Ÿ' => 'Y', 'Ŷ' => 'Y',
            'ý' => 'y', 'ÿ' => 'y', 'ŷ' => 'y',
            'Ž' => 'Z', 'Ź' => 'Z', 'Ż' => 'Z',
            'ž' => 'z', 'ź' => 'z', 'ż' => 'z',
            '“' => '"', '”' => '"', '‘' => "'", '’' => "'", '•' => '-', '…' => '...', '—' => '-', '–' => '-', '¿' => '?', '¡' => '!', '°' => ' degrees ',
            '¼' => ' 1/4 ', '½' => ' 1/2 ', '¾' => ' 3/4 ', '⅓' => ' 1/3 ', '⅔' => ' 2/3 ', '⅛' => ' 1/8 ', '⅜' => ' 3/8 ', '⅝' => ' 5/8 ', '⅞' => ' 7/8 ',
            '÷' => ' divided by ', '×' => ' times ', '±' => ' plus-minus ', '√' => ' square root ', '∞' => ' infinity ',
            '≈' => ' almost equal to ', '≠' => ' not equal to ', '≡' => ' identical to ', '≤' => ' less than or equal to ', '≥' => ' greater than or equal to ',
            '←' => ' left ', '→' => ' right ', '↑' => ' up ', '↓' => ' down ', '↔' => ' left and right ', '↕' => ' up and down ',
            '℅' => ' care of ', '℮' => ' estimated ',
            'Ω' => ' ohm ',
            '♀' => ' female ', '♂' => ' male ',
            '©' => ' Copyright ', '®' => ' Registered ', '™' => ' Trademark ',);

        $string = strtr($string, $table);
        // Currency symbols: £¤¥€  - we dont bother with them for now
        $string = preg_replace("/[^\x9\xA\xD\x20-\x7F]/u", "", $string);

        return $string;
    }

    public function First_Filter_ERP_Prod_name($string) {
        $table = array(
            '        ' => ' ',
            '       ' => ' ',
            '      ' => ' ',
            '     ' => ' ',
            '    ' => ' ',
            '   ' => ' ',
            '  ' => ' ',
            '**' => '** ',
            '©' => ' Copyright ', '®' => ' Registered ', '™' => ' Trademark ',);
        $string = strtr($string, $table);
        // Currency symbols: £¤¥€  - we dont bother with them for now
        $string = preg_replace("/[^\x9\xA\xD\x20-\x7F]/u", "", $string);

        return $string;
    }

    public function Second_Filter_ERP_Prod_name($string) {
        $table = array(
            '** ' => '**');
        $string = strtr($string, $table);
        // Currency symbols: £¤¥€  - we dont bother with them for now
        $string = preg_replace("/[^\x9\xA\xD\x20-\x7F]/u", "", $string);

        return $string;
    }



private function Third_Filter_name($string) {
    $table = array(
        'Edt' => "Eau De Toilette",
        'Edp' => "Eau De Parfum",
        'Crme' => "Creme",
        'Chlo ' => "Chloe ",
        "L'Oral " => "L'Oreal",
    );

    $string = strtr($string, $table);
// Currency symbols: £¤¥€  - we dont bother with them for now
    $string = preg_replace("/[^\x9\xA\xD\x20-\x7F]/u", "", $string);

    return $string;
}
}
?>