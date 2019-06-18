<?php

namespace App\Http\Controllers;


use App\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {

        return view('categories.index', [
            'categories' => Categories::all()
        ]);
    }

    public function add(Request $request)
    {

        // GET make form

        if ($request->isMethod('get')) {
            return view('categories.edit');
        }

        // register information

        $formData = Categories::create([
            'name' => $request->get('name'),
        ]);

        if ($formData) {

            return redirect('/categories')->withMessage('Product add with success.');
        }
        return redirect('/categories')->withMessage('errors add.');
    }


    public function edit(Request $request, $id)
    {

        $category = $this->getCategoryOrRedirect($id);

        if ($request->isMethod('get')) {
            return view('categories.edit', [
                'category' => $category->name
            ]);
        }
        $formData = [
            'name' => $request->get('name'),
        ];

        $difference = array_diff($category->toArray(), $formData);

        if ($difference) {

            foreach ($formData as $field => $value) {
                $category->$field = $value;
            }

            $category->save();

            return redirect('/categories')->withMessage('Product updated with success.');


        }

    }

    public function delete($id)
    {

        $category = $this->getCategoryOrRedirect($id);
        $category->delete();

        return redirect('/categories')->withMessage('Product delete with success.');

    }

    public function getCategoryOrRedirect($id)
    {
        $idCategory = Categories::find($id);

        return ($idCategory ? $idCategory : redirect('/categories')->withMessage('errors.'));
    }

}