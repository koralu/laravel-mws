<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sonnenglas\AmazonMws\AmazonProductSearch;

class KeywordController extends Controller
{
    public function index($keyword)
    {
        $amz = new AmazonProductSearch("store1",$keyword);
        $amz->searchProducts();
        $data = [];
        foreach ($amz->getProduct() as $asin) {
            if(isset($asin->getData()['AttributeSets'][0]['Title'])) {
                $data [] = [
                    'asin'=>$asin->getData()['Identifiers']['MarketplaceASIN']['ASIN'],
                    'title'=>$asin->getData()['AttributeSets'][0]['Title'],
                    'url_image'=>$asin->getData()['AttributeSets'][0]['SmallImage']['URL'],
                ];
            }
        }

        return $data;
    }
}
