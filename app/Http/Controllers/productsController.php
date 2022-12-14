<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproductsRequest;
use App\Http\Requests\UpdateproductsRequest;
use App\Repositories\productsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\metaSeo;
use Flash;
use Response;

class productsController extends AppBaseController
{
    /** @var  productsRepository */
    private $productsRepository;

    public function __construct(productsRepository $productsRepo)
    {
        $this->productsRepository = $productsRepo;
    }

    /**
     * Display a listing of the products.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {

        $category = @$_GET['category'];

        $products = $this->productsRepository->allQuery()->orderBy('id','desc')->paginate(10);

        if(!empty($category)){

            $products = $this->productsRepository->allQuery()->where('category', $category)->paginate(10);

        }

        return view('products.index')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new products.
     *
     * @return Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created products in storage.
     *
     * @param CreateproductsRequest $request
     *
     * @return Response
     */
    public function store(CreateproductsRequest $request)
    {
        $input = $request->all();

        if ($request->hasFile('images')) {

            $file_upload = $request->file('images');

            $name = time() . '_' . $file_upload->getClientOriginalName();

            $filePath = $file_upload->storeAs('uploads/product', $name, 'public');

            $input['images'] = $filePath;
        }


         $input['price'] = str_replace([',','.'], '', $input['price']);
        $input['link'] = convertSlug($input['name']);

         

        //add meta seo cho product

        $meta_title = '';

        $meta_content = 'Mua '.$input['name'].' gi?? r???. Mi???n ph?? giao h??ng & L???p ?????t. ?????i l???i trong 7 ng??y ?????u. Li??n h??? hotline 0247.303.6336 ????? mua h??ng v?? bi???t th??m th??ng tin chi ti???t'; 

        $meta_model = new metaSeo();

        $meta_model->meta_title =$meta_title;

        $meta_model->meta_content =$meta_content;

        $meta_model->meta_og_content =$meta_content;

        $meta_model->meta_og_title =$meta_title;

        $meta_model->meta_key_words =$meta_title;

        $meta_model->save();

        $input['Meta_id'] = $meta_model['id'];


        $products = $this->productsRepository->create($input);

        Flash::success('Products saved successfully.');

        return redirect(route('products.edit', $products['id']).'?page=content');

        // return redirect(route('products.index'));
    }

    /**
     * Display the specified products.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $products = $this->productsRepository->find($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.index'));
        }

        return view('products.show')->with('products', $products);
    }

    /**
     * Show the form for editing the specified products.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $products = $this->productsRepository->find($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.index'));
        }

        return view('products.edit')->with('products', $products);
    }

    /**
     * Update the specified products in storage.
     *
     * @param int $id
     * @param UpdateproductsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateproductsRequest $request)
    {
        $products = $this->productsRepository->find($id);
        
        $input = $request->all();

         if ($request->hasFile('images')) {

            $file_upload = $request->file('images');

            $name = time() . '_' . $file_upload->getClientOriginalName();

            $filePath = $file_upload->storeAs('uploads/product', $name, 'public');

            $input['images'] = $filePath;
        }

        if(!empty($input['price'])){
             $input['price'] = str_replace([',','.'], '', $input['price']);
        }
       
        if(!empty($input['name'])){
             $input['link'] = convertSlug($input['name']);
        }
       

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.index'));
        }

        $products = $this->productsRepository->update($input, $id);

        Flash::success('Products updated successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified products from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $products = $this->productsRepository->find($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.index'));
        }

        $this->productsRepository->delete($id);

        Flash::success('Products deleted successfully.');

        return redirect(route('products.index'));
    }
}
