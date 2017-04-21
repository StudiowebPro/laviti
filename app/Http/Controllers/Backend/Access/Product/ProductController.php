<?php

namespace App\Http\Controllers\Backend\Access\Product;

use App\Models\Access\Product\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Access\Product\ManageProductRequest;
use App\Http\Requests\Backend\Access\Product\StoreProductRequest;
use App\Repositories\Backend\Access\Product\ProductRepository;

// use Illuminate\Http\Request;


class ProductController extends Controller
{

    /**
     * @var ProductRepository
     */
    protected $products;

    /**
     * @param ProductRepository $products
     */
    public function __construct(ProductRepository $products)
    {
        $this->products = $products;
    }


    /**
     * @param ManageProductRequest $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(ManageProductRequest $request)
    {
        return view('backend.access.products.index');
    }

    /**
     * @param ManageProductRequest $request
     *
     * @return mixed
     */
    public function create(ManageProductRequest $request)
    {
//        return view('backend.access.create')
//            ->withRoles($this->roles->getAll());
        return view('backend.access.products.create');
    }

    /**
     * @param Product              $product
     * @param ManageProductRequest $request
     *
     * @return mixed
     */
    public function edit(Product $product, ManageProductRequest  $request)
    {
        return view('backend.access.products.edit')
            ->withProduct($product);
//            ->withUserRoles($user->roles->pluck('id')->all())
//            ->withRoles($this->roles->getAll());
    }


    /**
     * @param StoreProductRequest $request
     *
     * @return mixed
     */
    public function store(StoreProductRequest $request)
    {
//        var_dump($request);
        $this->products->create(['data' => $request]);
        return redirect()->route('admin.access.product.index')->withFlashSuccess(trans('alerts.backend.users.created'));
    }

    /**
     *
     */
    public function ajaxupload()
    {
        $uploaddir = public_path()."/upload/tmp/"; // куда загружаем фото
        $uploaddirFull = $_SERVER['DOCUMENT_ROOT'].$uploaddir;
        $file = $uploaddir.basename($_FILES['uploadfile']['name']);
        $fileInfo = pathinfo($file);
        $size = $_FILES['uploadfile']['size'];
        $mime = mime_content_type($_FILES['uploadfile']['tmp_name']);
        $arMime = array("image/jpeg"); // какие MIME типы файлов можно
        $maxFileSize = 1024 * 1024 * 3; // размер файла

        if($size > $maxFileSize)
        {
            echo "<p>Превышен размер файла</p>";
            $error = 1;
        }

        if (!in_array($mime, $arMime))
        {
            echo "<p>Недопустимый формат файла ".$fileInfo['extension']."</p>";
            $error = 1;
        }

        if(!$error)
        {
            $filePref = md5(mt_rand(0, 1000000)); // случайное имя файла
            $fileTmp = $uploaddirFull.$filePref.".".$fileInfo['extension'];
            $fileName = $filePref.".".$fileInfo['extension'];

            if (move_uploaded_file($_FILES['uploadfile']['tmp_name'], $fileTmp))
            {
                print "<p><img src='$uploaddir$fileName' alt='' style='width:150px'></p>";
                print "<input type='hidden' name='imageFile' value='$fileName'>";
            }
            else
            {
                echo "Ошибка загрузки файла";
            }
        }
    }

}
