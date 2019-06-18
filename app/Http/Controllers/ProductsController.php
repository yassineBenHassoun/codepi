<?php

namespace App\Http\Controllers;


use App\Categories;

use App\CategoriesProducts;
use App\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {
        return view('product.index', [
            'products' => Products::all()
        ]);

    }

    public function add(Request $request)
    {

        /*** test db not empty
         *
         *
         * $product = new Products;
         * $product->name = 'God of War';
         * $product->color = 'red';
         * $product->size = 40;
         * $product->reference = 1223453;
         *
         * $product->save();
         *
         * $category = Categories::find([3, 4]);
         * $product->categories()->attach($category);
         *
         * return 'success';
         *
         */

        // GET make form

        if ($request->isMethod('get')) {
            return view('product.edit', [
                'categories' => Categories::all()
            ]);

        }

        // register information
        $product = new Products;
        $product->name = $request->get('name');
        $product->color = $request->get('size');
        $product->size = $request->get('color');
        $product->reference = $request->get('reference');

        $product->save();

        $category = Categories::find(intval($request->get('category')));
        $product->categories()->attach($category);

        if ($product) {

            return redirect('/products')->withMessage('Product add with success.');
        }

        return redirect('/products')->withMessage('errors add.');


    }


    public function edit(Request $request, $id)
    {

        $product = $this->getProductsOrRedirect($id);

        if ($request->isMethod('get')) {
            return view('product.edit', [
                'product' => $product,
                'categories' => Categories::all()

            ]);
        }
// 'category' => $request->get('category')

        $formData = [
            'name' => $request->get('name'),
            'size' => $request->get('size'),
            'color' => $request->get('color'),
            'reference' => $request->get('reference'),

        ];

        $difference = array_diff($product->toArray(), $formData);

        if ($difference) {

            foreach ($formData as $field => $value) {
                $product->$field = $value;
            }

            // we have to delete the line of alter table for updating


            $product->save();

            $oldCategoryProduct = CategoriesProducts::where('products_id', $product->id)->get()->first();

            if ($oldCategoryProduct) {

                $oldCategoryProduct->delete();
                $category = Categories::find(intval($request->get('category')));

                $product->categories()->attach($category);
                $product->save();


            } elseif ($oldCategoryProduct === null) {

                $category = Categories::find(intval($request->get('category')));
                $product->categories()->attach($category);
                $product->save();

            }

            return redirect('/products')->withMessage('Product updated with success.');

        }
    }

    public function delete($id)
    {

        $product = $this->getProductsOrRedirect($id);
        $product->delete();

        return redirect('/products')->withMessage('Product delete with success.');

    }

    public function getProductsOrRedirect($id)
    {
        $idProduct = Products::find($id);

        return ($idProduct ? $idProduct : redirect('/products')->withMessage('errors.'));
    }


}