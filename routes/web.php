<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    
    $name = $request->query('name');
    $type = $request->query('type');

    if ($name == 'IPA' && $type == 'Voodoo Ranger') {
        $output = "Bursting with tropical aromas and juicy fruit flavors from Mosaic and Amarillo hops, this golden IPA is perfectly bitter with a refreshing, sublime finish.";
        return $output;
    }

    if ($name == 'IPA' && $type == '120 Minute IPA') {
        $output = "120 Minute IPA is brewed to a colossal 45-degree plato, boiled for a full two hours while being continuously hopped with high-alpha American hops, then dry-hopped daily in the fermenter for a month and aged for another month on whole-leaf hops!";
        return $output;
    }

    if ($name == 'IPA' && $type == 'Two Hearted Ale') {
        $output = "Brewed with 100% Centennial hops from the Pacific Northwest and named after the Two Hearted River in Michigan's Upper Peninsula, our American IPA is bursting with hop aromas ranging from pine to grapefruit from massive hop additions in both the kettle and the fermenter.";
        return $output;
    }

    if ($name == 'IPA') {
        $output = "India Pale Ales (IPAs), which encompass numerous styles of beer, get their characteristics largely from hops and herbal, citrus or fruity flavors.";
        return $output;
    }

    if ($name == 'Stout') {
        $output = "A very dark, full-bodied ale with a distinctive malty flavor that is typically brewed with unmalted roasted barley";
        return $output;
    }

    if ($name == 'Porter') {
        $output = "Porter is a style of beer that was developed in London, England, in the early 18th century.";
        return $output;
    }

    if ($name == 'Sour') {
        $output = "As its name suggests, sour beer has a distinct sour, acidic or tart taste.";
        return $output;
    }
});

Route::get('/', function () {
    return view('welcome');
});


Route::post('/brewery', function (Request $request) {

    $request->validate([
        'value1'  =>  'required|min:1',
        'value2' =>  'required|min:1'
    ]);
    
    $value1 = $request->input('value1');
    $value2 = $request->input('value2');
    
    $output = "This is the value of value 1: $value1 <br /> And this is the value of value 2: $value2";

    return $output;
});
